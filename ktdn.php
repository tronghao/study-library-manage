<?php
session_start();
include('connect.php');
if(isset($_POST['submit']))
{
	$sql = "SELECT usename, password FROM thongtin";
	$result = mysqli_query($conn, $sql);
	$sql1 = "SELECT * FROM luot";
	$result1 = mysqli_query($conn, $sql1);
	$dem=0;
	if (mysqli_num_rows($result) > 0)
	{
   		 // output data of each row
   		 while($row = mysqli_fetch_assoc($result))
		 {
		 	if($row["usename"] == $_POST['user'] && $row["password"] == $_POST['pass'])
			{
				$_SESSION['user']= $_POST['user'];
				if (mysqli_num_rows($result1) > 0)
				{
   				 // output data of each row
   					 while($row1 = mysqli_fetch_assoc($result1))
					 {
				 		$cn=$row1['tong']+1;
						$id=$row1['ID'];
						$sua = "UPDATE luot SET tong='".$cn."' WHERE id='".$id."'";
						$luu = mysqli_query($conn, $sua);	
					}
				}
				 $dem=1;
				 break;
			}
    	}
	} 
	if($_SESSION['user']=="admin") header("Location: admin/trangchu.php");
	else if($dem==1) header("Location: trangchu.php");
	else header("Location: dnktc.php");
}
?>