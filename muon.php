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



if(isset($_POST['Mượn']))
{
	$sql = "SELECT usename, hoten, lop FROM thongtin";
	$result = mysqli_query($conn, $sql);
	
	$sql1 = "SELECT tensach, soluong FROM sach";
	$result1 = mysqli_query($conn, $sql1);
	
	$sql2 = "SELECT tensach, usename FROM muon";
	$result2 = mysqli_query($conn, $sql2);
	
	$tens=$_POST['tensach'];
	$tentg=$_POST['tentacgia'];
	$user=$_SESSION['user'];

		$dem=0;
	if(mysqli_num_rows($result1) > 0)
	{
					
		while($row1 = mysqli_fetch_assoc($result1))
		 {
		 	if($row1["tensach"]==$tens && $row1["soluong"] > 0)
			{	
				$sol=$row1["soluong"];
				$dem=1;
				if($dem==1)
				{
					if(mysqli_num_rows($result2) == 0)
					{
						$dem=2;
					}
					else if(mysqli_num_rows($result2) > 0)
					{	
						while($row2 = mysqli_fetch_assoc($result2))
		 				{
		 					if($row2["tensach"] == $tens && $row2["usename"]==$user)
							{
								$dem=0;
								break;
							}
							else $dem=2;
						}
					}
				}
			
					if (mysqli_num_rows($result) > 0 && $dem==2)
					{
   						 // output data of each row
   						 while($row = mysqli_fetch_assoc($result))
						 {
		 					if($row["usename"] == $user)
							{
					
								$usename=$row["usename"];
								$hoten=$row["hoten"];
								$lop=$row["lop"];
								$them = "INSERT INTO muon (usename, hoten, lop, tensach, tentacgia) VALUES ('".$usename."', '".$hoten."', '".$lop."', '".$tens."', '".$tentg."')";
								$luu = mysqli_query($conn, $them);
								$dem=3;
							}
						}
					}
					if($dem==3)
					{
					$ton=$sol-1;
					$sua = "UPDATE sach SET soluong='".$ton."' WHERE tensach='".$tens."'";
					$luu2 = mysqli_query($conn, $sua);
					
					$dem=4;
					break;
					}	
    			}
								
			}
    	}

	
	
		
}	
	
	if($dem==4) header("Location: tc.php");
	else header("Location: ktc.php");

?>

</body>
</html>
