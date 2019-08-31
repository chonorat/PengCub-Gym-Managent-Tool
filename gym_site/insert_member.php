<!DOCTYPE html>
<html>
<body>
<a href="index.php">Home</a>
<br><br>
<a href="members.php">Back to Membership</a>
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

$sql = "INSERT INTO member (Member_Number,Address,Member_Name ,Type,Member_Registered_Date,Guestnumber)
VALUES ('$_POST[Member_Number]', '$_POST[Address]','$_POST[Member_Name]','$_POST[Type]','$today','$_POST[Guestnumber]')";

if ($conn->query($sql) === TRUE) {
    echo "Member Added";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}



?>
</body>
</html>
