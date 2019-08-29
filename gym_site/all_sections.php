<html>
<head>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  table align="center";
}
th, td {
  padding: 15px;
  text-align: center;
}
table#t01 {
  width: 100%;    
  background-color: #f1f1c1;
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
            } 
            .nav_menu a { 
                float: center; 
                display: block; 
                color: white; 
                text-align: center; 
                padding: 35px 16px; 
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
                    width: 50%; 
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
<a href="available_sections1.php">Back to Open Classes</a>
        </div> 
</style>
</head>
<body>


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
		<th>Remove Section</th>
        <th>Section_Number</th>
		<th>Building</th>
        <th>Room_Number</th>
        <th>Exercise_Number </th>
        <th>InstructorID</th>
        <th>Duration</th>
        <th>Class_Date</th>
        <th>Class_Start_Time</th>
    </tr>" ;


$sql = "SELECT * from section";
$result = $conn->query($sql);

        if ($result !== FALSE){
            echo '<h1> All Classes </h1>';
            while ($row = $result->fetch_assoc()) {
				
                $field1name = $row['Section_Number'];
				$field2name = $row['Building'];
				$field3name = $row['Room_Number'];
				$field4name = $row['Exercise_Number'];
				$field5name = $row['InstructorID'];
				$field6name = $row['Duration'];
				$field7name = $row['Class_Date'];
				$field8name = $row['Class_Start_Time'];
                echo '<tr> '?>
							<td class="contact-delete">
							<form action='delete_section.php' method="post">
							<input type="hidden" name="Section_Number" value="<?php echo $row['Section_Number']; ?>">
							<input type="submit" name="submit" value="Delete"></form>
							</td> <?php echo'
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