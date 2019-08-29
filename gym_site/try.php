<!DOCTYPE html>
<html>
<body>


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





<p>Select a new car from the list.</p>

	<tr>
	 <td>Select Building</td><br>
	 <td><select onChange="ChangeBuilding()" name="Building" id="mySelect">
	 <option>Select</option>
		<?php
	     $result = $conn->query("SELECT Building FROM room");
		while ($row = mysqli_fetch_array($result)) {
		echo "<option value='" . $row['Building'] . "'>" . $row['Building'] . "</option>";}
		?>
	 </select></td>
	 </tr>
	 <br>

<p>When you select a new car, a function is triggered which outputs the value of the selected car.</p>

<p id="demo"></p>

<script>
function myFunction() {
  var x = document.getElementById("mySelect").value;
  document.getElementById("demo").innerHTML = "You selected: " + x;
}
</script>

<script>
function ChangeBuilding()
{
	var xmlhttp=new XMLHttpRequest();
	//xmlhttp.open("GET","ajax.php?Building="+document.getElementById("mySelect").value,false);
	//xmlhttp.send(null);
	document.getElementById("demo").innerHTML="You";
}
</script>
</body>
</html>

