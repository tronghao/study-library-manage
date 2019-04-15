<?php
include('admin.php');
include('connect.php');
$sql = "SELECT usename, password FROM thongtin";
	$result = mysqli_query($conn, $sql);
	$dem=0;
	if (mysqli_num_rows($result) > 0)
	{
   		 // output data of each row
   		 while($row = mysqli_fetch_assoc($result))
		 {
		 	if($row["password"] == $_POST['mkc'])
			{
			 $dem=1;
			 break;
			}
    	}
	}
if(isset($_POST['submit']) && $dem==1)
{
	$mkm = $_POST['mkm'];
	$use=$_SESSION['user'];
	$sql = "UPDATE thongtin SET password=$mkm WHERE usename=$use";

	if ($conn->query($sql) === TRUE)
	{
  		 header("Location: dtc.php");
	} 
	else 
	{
   	 	header("Location: dtb.php");
	}
}
else header("Location: dtb.php");
?>