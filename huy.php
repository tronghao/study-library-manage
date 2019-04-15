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



if(isset($_POST['Hủy']))
{
	
	$sql1 = "SELECT tensach, soluong FROM sach";
	$result1 = mysqli_query($conn, $sql1);
	
	$sql2 = "SELECT tensach, ID, usename FROM muon";
	$result2 = mysqli_query($conn, $sql2);
	
	$tens=$_POST['tensach'];
	$tentg=$_POST['tentacgia'];
	$user=$_SESSION['user'];

		$dem=0;
	if(mysqli_num_rows($result1) > 0)
	{
		while($row1 = mysqli_fetch_assoc($result1))
		 {
		 	if($row1["tensach"]==$tens)
			{	
				$sol=$row1["soluong"];
				$dem=1;
				if($dem==1)
				{
					if(mysqli_num_rows($result2) > 0)
					{
						while($row2 = mysqli_fetch_assoc($result2))
		 				{
		 					if($row2["usename"] == $user && $row2["tensach"] == $tens)
							{
								$id=$row2["ID"];
								$xoa = "DELETE FROM muon WHERE id='".$id."'";
								$luu = mysqli_query($conn, $xoa);
								$dem=2;
							}
						
						}
					}
				}
					
					if($dem==2)
					{
					$ton=$sol+1;
					$sua = "UPDATE sach SET soluong='".$ton."' WHERE tensach='".$tens."'";
					$luu2 = mysqli_query($conn, $sua);
					
					$dem=3;
					break;
					}	
    			}
								
			}
    	}

	
	
		
}	
	
	if($dem==3) header("Location: tc.php");
	else header("Location: ktc.php");

?>

</body>
</html>
