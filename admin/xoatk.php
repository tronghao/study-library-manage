<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
session_start();
include('connect.php');




	
	$sql1 = "SELECT * FROM thongtin";
	$result1 = mysqli_query($conn, $sql1);
		$dem=0;
	if(mysqli_num_rows($result1) > 0)
	{
		while($row1 = mysqli_fetch_assoc($result1))
		 {
		 	if($row1["usename"]==$_POST['usename'])
			{	
				$id=$row1["ID"];
				$xoa = "DELETE FROM thongtin WHERE id='".$id."'";
				$luu = mysqli_query($conn, $xoa);
				$dem=1;
				
			}
    	}
	}	
	
	if($dem==1) header("Location: tc.php");
	else header("Location: ktc.php");

?>

</body>
</html>
