<!DOCTYPE html>
<html>
<body>
<a href="index.php">Home</a>
<br><br>
<a href="all_sections.php">Back to Section Scheduling</a>
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
 
$sql = "INSERT INTO section (Building,Room_Number,Exercise_Name,InstructorID,Duration,Class_Date,Class_Start_Time)
VALUES ('$_POST[Building]', '$_POST[Room_Number]', '$_POST[Exercise_Name]','$_POST[InstructorID]', '$_POST[Duration]', '$_POST[Class_Date]','$_POST[Class_Start_Time]')";


if ($conn->query($sql) === TRUE) {
    echo "Class Scheduled";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}



?>
</body>