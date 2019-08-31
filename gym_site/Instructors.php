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
<a href="addinstructor.php">New Instructor</a>
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
    die("Connection failed: " . $conn->connect_error);}
		 echo "<table class='center' style=width:30% >
		<tr>
		<th>Delete</th>
		<th>ID</th>
        <th>Name</th>
		</tr>" ;
$sql = "SELECT * FROM instructor, employee where employee.InstructorID=instructor.InstructorID;";
$result = $conn->query($sql);
 if ($result !== FALSE){
             echo "<h2 style='font-size:200%'>Employees</h2>";
            while ($row = $result->fetch_assoc()) {
                $field1name = $row['InstructorID'];
				$field2name = $row['Instructor_Name'];
							echo '<tr> '?>
							<td class="contact-delete">
							<form action='delete_instructor.php' method="post">
							<input type="hidden" name="InstructorID" value="<?php echo $row['InstructorID']; ?>">
							<input type="submit" name="submit" value="Delete"></form>
							</td> <?php echo'
                            <td>'.$field1name. '</td>
							<td>'.$field2name. '</td>								
                       </tr>';
            }
            $result->free();
            echo"</table>";}

        echo "<table class='center' style=width:30% >
		<tr>
		<th>Delete</th>
		<th>ID</th>
        <th>Name</th>
    </tr>" ;
$sql = "SELECT * FROM instructor, external where external.InstructorID=instructor.InstructorID;";
$result = $conn->query($sql);
 if ($result !== FALSE){
             echo "<h2 style='font-size:200%'>Contractors</h2>";
            while ($row = $result->fetch_assoc()) {
				//$field0name = $row['Member_Number'];
                $field1name = $row['InstructorID'];
				$field2name = $row['Instructor_Name'];
							echo '<tr> '?>
							<td class="contact-delete">
							<form action='delete_instructor.php' method="post">
							<input type="hidden" name="InstructorID" value="<?php echo $row['InstructorID']; ?>">
							<input type="submit" name="submit" value="Delete"></form>
							</td> <?php echo'
                            <td>'.$field1name. '</td>
							<td>'.$field2name. '</td>								
                       </tr>';
            }
            $result->free();
            echo"</table>";}


$conn->close();



?>





</body>
</html>