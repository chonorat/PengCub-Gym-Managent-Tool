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
<a href="Instructors.php">Back to Instructors</a>
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

//Form
echo "<form action='insertinstructor.php' method='post'>";
	

echo "<table>";

echo "<tr>";
	echo "<td>Id</td>";
	echo "<td>";
	echo"<input name='InstructorID',type='number' >";
	echo "</td>";
	echo"<br>";
echo "<tr>";	



echo "<tr>";
	echo"<br>";
	echo "<td>Name</td>";
	echo "<td>";
	echo"<input name='Instructor_Name',type='text' >";
	echo "</td>";
	echo"<br>";
echo "<tr>";	


echo "<tr>";
	echo"<br>";
	echo "<td>Pay</td>";
	echo "<td>";
	echo"<input name='Pay',type='number' >";
	echo "</td>";
	echo"<br>";
echo "<tr>";


?>
	
<tr>
 <td>Employment Type</td>
  <td>
  <select name="Employment">
    <option value="Employee">Employee</option>
    <option value="Contractor">Contractor</option>
  </select>
 </td>
</tr>


</table>
<input type='submit'>
</form>




</body>
</html>
