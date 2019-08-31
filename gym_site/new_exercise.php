<html>
<head>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  table align="center"
  width: 300px;;
}
th, td {
  padding: 15px;
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
<a href="exercises.php">Back to Exercises</a>
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
?>

	

<?php



	//Select Exercise_Name
echo "<h2 style='font-size:200%'>Create Exercise</h2>";
echo "<form name ='form1' action='insert_exercise.php' method='post' style='width:100px;margin:0 45%;position:relative;left:-55px'>";
echo "<table class='center'>";
	echo "<tr>";
	echo "<td>Exercise_Name</td>";
	echo "<td>";
	echo"<input name='Exercise Name',type='text' >";
	echo "</td>";
	echo "</tr>";

	echo "<tr>";
	echo "<td>Descriptor</td>";
	echo "<td>";
	echo"<input name='Descriptor',type='text' >";
	echo "</td>";
	echo "</tr>";

	echo "<tr>";
	echo "<td>Type</td>";
	echo "<td>";
	echo "<select name='Exercise_Type'>
	<option value='Endurance'>Endurance</option>
	<option value='Strength'>Strength</option>
	<option value='Flexibility'>Flexibility</option>
	<option value='Balance'>Balance</option>
	</select>";
    echo "</td>";
	echo "</tr>";

	echo "<tr>";
	echo "<td>Exercise_Number</td>";
	echo "<td>";
	echo"<input name='Exercise_Number',type='number' >";
	echo "</td>";
	echo "</tr>";
	echo "</table>";


echo "<br>";
echo "<input type='submit'>";
echo "</form>";


?>






</body>
</html>