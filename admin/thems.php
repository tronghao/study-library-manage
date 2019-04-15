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
	

		$dem=0;
	if(mysqli_num_rows($result1) > 0 && !empty($_POST['tensach']))
	{
		while($row1 = mysqli_fetch_assoc($result1))
		 {
		 	if($row1["tensach"]==$_POST['tensach'])
			{	
			
				$dem=1;
				break;
			}
		}
			if($dem!=1 &&!empty($_POST['tentacgia']) && !empty($_POST['soluong']) && !empty($_POST['theloai']))
			{
					$them = "INSERT INTO sach (tensach, tentacgia, soluong, theloai) VALUES ('".$_POST['tensach']."', '".$_POST['tentacgia']."', '".$_POST['soluong']."', '".$_POST['theloai']."')";
					$luu = mysqli_query($conn, $them);
					$dem=2;

			}
				
				
				
		
	}
		

	
	if($dem==2) header("Location: tc.php");
	else header("Location: ktc.php");

?>

</body>
</html>
