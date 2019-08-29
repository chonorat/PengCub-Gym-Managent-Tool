<html>
<head>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 15px;
  text-align: left;
}
table#t01 {
  width: 100%;    
  background-color: #f1f1c1;
}
</style>
</head>
<body>
<a href="home1.php">Home Page</a>
<?php
$servername = "nkpl8b2jg68m87ht.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$username = "akum4kcr49affid7";
$password = "uw2sosg9brwh9l67";
$dbname = "dc7uw0q38zv0oo6v";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


        echo "<table style=width:50%>
    <tr>
        <th>Section_Number</th>
		<th>Building</th>
        <th>Room_Number</th>
        <th>Exercise_Number </th>
        <th>InstructorID</th>
        <th>Duration</th>
        <th>Class_Date</th>
        <th>Class_Start_Time</th>
    </tr>" ;


$sql = "SELECT * 
FROM section s1
WHERE (s1.Section_Number) NOT IN (
	SELECT f.Section_Number
	FROM 
		(SELECT s.Section_Number,s.Room_Number,s.Building,sum(c.Guests)+count(c.Section_Number) sumg
		FROM class_registration c,section s
		WHERE c.Section_Number=s.Section_Number
		GROUP BY s.Section_Number) f, room r
			WHERE sumg>=r.Capacity
			AND f.Room_Number=r.Room_Number
			AND f.Building=r.Building);";
$result = $conn->query($sql);

        if ($result !== FALSE){
            echo '<h1> Available Sections </h1>';
            while ($row = $result->fetch_assoc()) {
                $field1name = $row['Section_Number'];
				$field2name = $row['Building'];
				$field3name = $row['Room_Number'];
				$field4name = $row['Exercise_Number'];
				$field5name = $row['InstructorID'];
				$field6name = $row['Duration'];
				$field7name = $row['Class_Date'];
				$field8name = $row['Class_Start_Time'];
                echo '<tr>
                            <td>'.$field1name. '</td>
							<td>'.$field2name. '</td>
							<td>'.$field3name. '</td>
							<td>'.$field4name. '</td>
							<td>'.$field5name. '</td>
							<td>'.$field6name. '</td>
							<td>'.$field7name. '</td>
							<td>'.$field8name. '</td>
                        </tr>';
                echo '<br>';
            }
            $result->free();
            echo"</table>";
        }
        else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            
        }

$conn->close();



?>

</body>
</html>

