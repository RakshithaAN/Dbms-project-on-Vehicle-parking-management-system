<html>
<body>
	
<?php
$dbh=mysqli_connect('localhost', 'root','') or die(mysqli_error());
mysqli_select_db($dbh,'vpms') or die(mysqli_error());

$SL_NO = $_REQUEST['sl_no'];
$Vehicle_no = $_REQUEST['vehicle_no'];
$Date_Time_In = $_REQUEST['Date_Time_In'];
$Date_Time_Out = $_REQUEST['Date_Time_Out'];
$Total_hours = $_REQUEST['Total_hours'];
$Amount =null;

$query="INSERT INTO transaction_detalis VALUES('$SL_NO','$Vehicle_no','$Date_Time_In','$Date_Time_Out','$Total_hours','$Amount')";

$result=mysqli_query($dbh,$query)or die(mysqli_error($dbh));
echo"";
$var=mysqli_query($dbh,"SELECT * FROM transaction_detalis");
echo"<table border_size=20>";
	
echo"<tr><th>SL_NO</th> <th>Vehicle_no</th> <th>Date_Time_In</th> <th>Date_Time_Out</th> <th>Total_hours</td> <td>Amount</td> </tr>";

while($arr=mysqli_fetch_row($var))
{
	echo"<tr> <td>$arr[0]</td> <td>$arr[1]</td> <td>$arr[2]</td> <td>$arr[3]</td> <td>$arr[4]</td> <td>$arr[5]</td> </tr>";
}
echo"</table>";   


$db_host="localhost";
$db_name="vpms";
$db_user="root";
$db_pass="";
$con =mysqli_connect("$db_host","$db_user","$db_pass")or die("could not connect");
mysqli_select_db($con,'vpms')or die(mysqli_error($con));
$p0=mysqli_query($con,"call Total_collection (@out);");
$rs=mysqli_query($con,'SELECT @out');
while($row=mysqli_fetch_row($rs))
{
echo 'Total_collection='.$row[0];
}
mysqli_close($con);

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