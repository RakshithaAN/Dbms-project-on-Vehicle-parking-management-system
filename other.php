<html>
<body>
	
<?php
$dbh=mysqli_connect('localhost', 'root','') or die(mysqli_error());
mysqli_select_db($dbh,'vpms') or die(mysqli_error());

$SL_NO = $_REQUEST['sl_no'];
$NAME = $_REQUEST['name'];
$Vehicle_type = $_REQUEST['Vehicle_type'];
$Vehicle_no= $_REQUEST['vehicle_no'];
$Phone_no = $_REQUEST['Phone_no'];
$Date_Time = $_REQUEST['Date_Time'];

$query="INSERT INTO Other_Vehicle_Details VALUES('$SL_NO', '$NAME', '$Vehicle_type', '$Vehicle_no', '$Phone_no', '$Date_Time')";

$result=mysqli_query($dbh,$query)or die(mysqli_error($dbh));
echo"";
$var=mysqli_query($dbh,"SELECT * FROM Other_Vehicle_Details");
echo"<table border_size=20>";
	


echo"<tr><th> SL_NO</th> <th>NAME</th> <th>Vehicle_Type</th> <th>Vehicle_no</th> <th>Phone_no</th> <th>Date_Time</th> </tr>";

while($arr=mysqli_fetch_row($var))
{
	echo"<tr> <td>$arr[0]</td> <td>$arr[1]</td> <td>$arr[2]</td> <td>$arr[3]</td> <td>$arr[4]</td> <td>$arr[5]</td>  </tr>";
}
echo"</table>";
?>

<form>
<p><a href="homepage.html"> click here:(Home page)</a></p>
</form>


<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
}
th, td
 {
  padding:15px
}
body
{
background-image:url("p1.jpg");
background-size: 100% 100%;
}

</style>
</head>
<body>



<table style="width:100%">
  
</table>

</body>
</html>