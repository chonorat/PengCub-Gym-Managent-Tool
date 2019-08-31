<!DOCTYPE html>
<html>
<body>
<a href="index.php">Home</a>
<br><br>
<a href="Instructors.php">Instructors</a>
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
 
//Todays data
$month = date('m');
$day = date('d');
$year = date('Y');
$today = $year . '-' . $month . '-' . $day;

$sql = "INSERT INTO instructor (InstructorID,Instructor_Name)
VALUES ('$_POST[InstructorID]', '$_POST[Instructor_Name]')";

if ($conn->query($sql) === TRUE) {
    echo "Instructor Added";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


if ($_POST['Employment']=="Employee"){
	$sql = "INSERT INTO employee (InstructorID,Salary)
	VALUES ('$_POST[InstructorID]', '$_POST[Pay]')";}

if ($_POST['Employment']=="Contractor"){
	$sql = "INSERT INTO external (InstructorID,Wage)
	VALUES ('$_POST[InstructorID]', '$_POST[Pay]')";}

if ($conn->query($sql) === TRUE) {
    echo "";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


?>
</body>
</html>
