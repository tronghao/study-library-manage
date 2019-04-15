<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
include('admin.php');
include('connect.php');




	$sql1 = "SELECT tensach FROM sach";
	$result1 = mysqli_query($conn, $sql1);
	
	$tens=$_POST['tensachcu'];
		$dem=0;
	if(mysqli_num_rows($result1) > 0)
	{
		while($row1 = mysqli_fetch_assoc($result1))
		 {
		 	if($row1["tensach"]==$tens)
			{	
				if(!empty($_POST['tensachmoi']))
				{
					$tensm=$_POST['tensachmoi'];
					$sua = "UPDATE sach SET tensach='".$tensm."' WHERE tensach='".$tens."'";
					$luu = mysqli_query($conn, $sua);	
					$dem=1;			
				}
				if(!empty($_POST['tentacgiamoi']))
				{
					$tentgm=$_POST['tentacgiamoi'];
					$sua1 = "UPDATE sach SET tentacgia='".$tentgm."' WHERE tensach='".$tens."'";
					$luu1 = mysqli_query($conn, $sua1);	
					$dem=1;					
				}
				if(!empty($_POST['soluongmoi']))
				{
					$slm=$_POST['soluongmoi'];
					$sua2 = "UPDATE sach SET soluong='".$slm."' WHERE tensach='".$tens."'";
					$luu2 = mysqli_query($conn, $sua2);	
					$dem=1;					
				}
				if(!empty($_POST['theloaimoi']))
				{
					$tentlm=$_POST['theloaimoi'];
					$sua3 = "UPDATE sach SET theloai='".$tentlm."' WHERE tensach='".$tens."'";
					$luu3 = mysqli_query($conn, $sua3);	
					$dem=1;					
				}
				
								
			}
    	}

	}		
	
	
	if($dem==1) header("Location: tc.php");
	else header("Location: ktc.php");

?>

</body>
</html>