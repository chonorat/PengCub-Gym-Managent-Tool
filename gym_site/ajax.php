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



$Building=$_GET["building"];



$result = $conn->query("SELECT Room_Number FROM room WHERE Building='$Building'");
	echo "<select name='Room_Number'>";
    while ($row = mysqli_fetch_array($result)) {
    echo "<option>"; echo $row["Room_Number"]; echo "</option>";}
    echo "</select>";


?>