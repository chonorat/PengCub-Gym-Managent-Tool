<html>
<head>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  table align="center";
}
th, td {
  padding: 15px;
  text-align: center;
}
table#t01 {
  width: 100%;    
  background-color: #f1f1c1;
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
<a href="available_sections1.php">Back to Open Classes</a>
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

 <form name ="form1" action='insert_section.php' method='post'>
	
	<table>
	<tr>
	 <td>Building</td><br>
	 <td><select onChange="ChangeBuilding()" name="Building" id="building">
	 <option>Select</option>
		<?php
	     $result = $conn->query("SELECT DISTINCT Building FROM room");
		while ($row = mysqli_fetch_array($result)) {
		echo "<option value='" . $row['Building'] . "'>" . $row['Building'] . "</option>";}
		?>
	 </select></td>
	 </tr>
	 <br>


	<tr>
	 <td>Room</td>
	 <td>
	 <div id="Room_Number">
	 <select>
	 <option>Select</option>
	 </select></td>
	 </tr>
	 </div>
	

<?php



	//Select Exercise_Number
	echo "<tr>";
	echo "<td>Exercise</td>";
    $result = $conn->query("SELECT Exercise_Number FROM exercise");
	echo "<td>";
	echo "<select name='Exercise_Number'>";
    while ($row = mysqli_fetch_array($result)) {
    echo "<option value='" . $row['Exercise_Number'] . "'>" . $row['Exercise_Number'] . "</option>";}
    echo "</select></td>";
	echo "</tr>";

	//Select InstructorID
	echo "<tr>";
	echo "<td>InstructorID</td>";
    $result = $conn->query("SELECT InstructorID FROM instructor");
	echo "<td>";
	echo "<select name='InstructorID'>";
    while ($row = mysqli_fetch_array($result)) {
    echo "<option value='" . $row['InstructorID'] . "'>" . $row['InstructorID'] . "</option>";}
    echo "</select></td>";
	echo "</tr>";

	echo "<tr>";
	echo "<td>Duration</td>";
	echo "<td>";
	echo"<input name='Duration',type='number' >";
	echo "</td>";
	echo "</tr>";

	echo "<tr>";
	echo "<td>Date</td>";
	echo "<td>";
	echo"<input name='Class_Date',type='date' >";
	echo "</td>";
	echo "</tr>";

	echo "<tr>";
	echo "<td>Time</td>";
	echo "<td>";
	echo"<input name='Class_Start_Time',type='time' >";
	echo "</td>";
	echo "</tr>";
	echo "</table>";



echo "<input type='submit'>";
echo "</form>";

?>







<script type="text/javascript">
function ChangeBuilding()
{
	var xmlhttp=new XMLHttpRequest();
	xmlhttp.open("GET","ajax.php?building="+document.getElementById("building").value,false);
	xmlhttp.send(null);
	document.getElementById("Room_Number").innerHTML=xmlhttp.responseText;

}
</script>




</body>
</html>