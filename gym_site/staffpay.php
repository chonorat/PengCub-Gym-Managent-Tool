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
<a href="index.php">Home</a>


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
        <th>Year</th>
		<th>Month</th>
        <th>InstructorID</th>
        <th>Hours</th>
        <th>Wage</th>
        <th>Gross_Pay</th>
        <th>Fed_Tax</th>
		<th>State_Tax</th>
		<th>Other_Tax</th>
        <th>Net_Pay
		</th></tr>" ;


$sql = "SELECT * from external_pay";
$result = $conn->query($sql);

        if ($result !== FALSE){
            echo '<h1> Consultant Pay History </h1>';
            while ($row = $result->fetch_assoc()) {
				
                $field1name = $row['Year_'];
				$field2name = $row['Month_'];
				$field3name = $row['InstructorID'];
				$field4name = $row['Hours'];
				$field5name = $row['Wage'];
				$field6name = $row['Fed_Tax'];
				$field7name = $row['Fed_Tax'];
				$field8name = $row['State_Tax'];
				$field9name = $row['Other_Tax'];
				$field10name = $row['Net_Pay'];
                echo '<tr> 
                            <td>'.$field1name. '</td>
							<td>'.$field2name. '</td>
							<td>'.$field3name. '</td>
							<td>'.$field4name. '</td>
							<td>'.$field5name. '</td>
							<td>'.$field6name. '</td>
							<td>'.$field7name. '</td>
							<td>'.$field8name. '</td>
							<td>'.$field9name. '</td>
							<td>'.$field10name. '</td>
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