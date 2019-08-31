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



$Type=$_GET["type"];



$result = $conn->query("SELECT Guestnumber FROM membership WHERE Type='$Type'");
	echo "<select name='Guestnumber'>";
    while ($row = mysqli_fetch_array($result)) {
   echo "<option>"; echo $row["Guestnumber"]; echo "</option>";}
    echo "</select>";


?>