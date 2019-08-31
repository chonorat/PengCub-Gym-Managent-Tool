<!DOCTYPE html>
<html>
<body>
 
 <a href="index.php">Home</a>
<br><br>
<a href="members.php">Back to Members</a>
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

$sql = "INSERT INTO class_registration (Member_Number,Class_Reg_Date,Guests,Section_Number)
VALUES ('$_POST[Member_Number]', '$today', '$_POST[guests]','$_POST[Section_Number]')";

if ($conn->query($sql) === TRUE) {
    echo "Member successfully registered for class";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


?>
</body>
</html>








