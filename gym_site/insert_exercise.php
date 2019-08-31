<!DOCTYPE html>
<html>
<body>
<a href="index.php">Home</a>
<br><br>
<a href="exercises.php">Back to Exercises</a>
<br><br>
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
 

$sql = "INSERT INTO exercise (Exercise_Name,Descriptor,Exercise_Type,Exercise_Number)
VALUES ('$_POST[Exercise_Name]', '$_POST[Descriptor]', '$_POST[Exercise_Type]','$_POST[Exercise_Number]')";


if ($conn->query($sql) === TRUE) {
    echo "Exercise Created";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}



?>
</body>