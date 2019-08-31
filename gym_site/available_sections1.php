<html>
<head>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  table align="center"
}
th, td {
  padding: 6.5px;
  text-align: center;
}
  table.center {
    margin-left:auto; 
    margin-right:auto;
  }
</style>
</head>
<body>

<html> 
    <head> 
        <title> 
            Website Layout 
        </title> 
        <style> 
            * { 
                box-sizing: border-box; 
            } 
              
            /* CSS property for header section */ 
            .header { 
                background-color: green; 
                padding: 15px; 
                text-align: center; 
            } 
              
              /* Style the footer */
			footer {
  			padding: 20px;
  			width: 100%;
  			text-align: center;
  			color: black;
			}
              
              
            /* CSS property for nevigation menu */ 
            .nav_menu { 
                overflow: hidden; 
                background-color: #333; 
				padding: 30px;
            } 
            .nav_menu a { 
                float: center; 
                display: block; 
                color: white; 
                text-align: center; 
                padding: 35px;
                text-decoration: none; 
            } 
            .nav_menu a:hover { 
                background-color: white; 
                color: green; 
            } 
              
            /* CSS property for content section */ 
            .columnA, .columnB, .columnC { 
                float: left; 
                width: 31%; 
                padding: 15px; 
                text-align:justify; 
            } 
            h2 { 
                color:green; 
                text-align:center; 
            } 
              
            /* Media query to set website layout  
            according to screen size */ 
            @media screen and (max-width:600px) { 
                .columnA, .columnB, .columnC { 
                    width: 100%; 
                } 
            } 
            @media screen and (max-width:400px) { 
                .columnA, .columnB, .columnC { 
                    width: 100%; 
                } 
            } 
        </style> 
    </head> 
      
    <body> 
          
        <!-- header of website layout -->
        <div class = "header"> 
            <h2 style = "color:white;font-size:200%"> 
                PengCub Gym Managment
            </h2> 
        </div> 
          
        <!-- nevigation menu of website layout -->
        <div class = "nav_menu"> 
<a href="index.php">Home</a>
<a href="new_section.php">Schedule Class</a>
<a href="all_sections.php">Remove Class</a>
        </div> 


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

echo "<h2 style='font-size:200%'>Open Classes</h2>";
        echo "<table class='center' style=width:30% >
    <tr>
        <th>Section_Number</th>
		<th>Building</th>
        <th>Room_Number</th>
        <th>Exercise_Name</th>
        <th>InstructorID</th>
        <th>Duration</th>
        <th>Class_Date</th>
        <th>Class_Start_Time</th>
		<th>Remaining Spots</th>
    </tr>" ;


$sql = "SELECT f.Section_Number,f.Building,f.Room_Number,e.Exercise_Name,f.InstructorID,f.Duration,f.Class_Date,f.Class_Start_Time,r.Capacity-f.sumg AS Remaining_Spots
		FROM 		
		(SELECT s.Section_Number,s.Building,s.Room_Number,s.Exercise_Name,s.InstructorID,s.Duration,s.Class_Date,s.Class_Start_Time,SUM(COALESCE(c.guests, 0))+count(c.Section_Number) AS sumg
		FROM section s
		LEFT JOIN class_registration c ON c.Section_Number=s.Section_Number
		group by s.Section_Number) f, room r, exercise e
			WHERE sumg<r.Capacity
			AND f.Room_Number=r.Room_Number
			AND f.Building=r.Building
            AND f.Exercise_Name=e.Exercise_Name;";
$result = $conn->query($sql);

        if ($result !== FALSE){
            while ($row = $result->fetch_assoc()) {
                $field1name = $row['Section_Number'];
				$field2name = $row['Building'];
				$field3name = $row['Room_Number'];
				$field4name = $row['Exercise_Name'];
				$field5name = $row['InstructorID'];
				$field6name = $row['Duration'];
				$field7name = $row['Class_Date'];
				$field8name = $row['Class_Start_Time'];
				$field9name = $row['Remaining_Spots'];
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
                        </tr>';
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

