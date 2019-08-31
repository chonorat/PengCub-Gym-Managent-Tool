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
<a href="members.php">Back to Memberships</a>
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
echo "<h2 style='font-size:200% width:200px'>Registration</h2>";
echo "<form action='Insert.php' method='post' style='width:200px;margin:0 45%;position:relative;left:-55px'>";



echo "<table class='center'>";

echo "<tr>";	
	//Select member
	echo "<td>Select Member.</td>";
	echo "<td>";
    $result = $conn->query("SELECT Member_Number FROM member");
	echo "<select name='Member_Number'>";
    while ($row = mysqli_fetch_array($result)) {
    echo "<option value='" . $row['Member_Number'] . "'>" . $row['Member_Number'] . "</option>";}
		echo "</td>";
    echo "</select>";
echo "</tr>";


echo "<tr>";
	//Select section
	echo "<td>Select Section.</td>";
		echo "<td>";
    $result = $conn->query("SELECT * 
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
									AND f.Building=r.Building);");
    echo "<select name='Section_Number'>";
	while ($row = mysqli_fetch_array($result)) {
    echo "<option value='" . $row['Section_Number'] . "'>" . $row['Section_Number'] . "</option>";}
	echo "</td>";
    echo "</select>";
echo "</tr>";

echo "<tr>";
	//Select guest number
	echo "<td>Number of Guests.</td>";
	echo "<td>";
	echo"<input name='guests',type='number' >";
	echo "</td>";
echo "</tr>";


?>
</table>
<br>
<input type='submit'>
</form>















</body>
</html>
