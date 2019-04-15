<?php
include('admin.php');
include('connect.php');




	$sql1 = "SELECT usename FROM thongtin";
	$result1 = mysqli_query($conn, $sql1);
	
	$user=$_POST['usenamecu'];
		$dem=0;
	if(mysqli_num_rows($result1) > 0)
	{
		while($row1 = mysqli_fetch_assoc($result1))
		 {
		 	if($row1["usename"]==$user)
			{	
				if(!empty($_POST['usenamemoi']))
				{
					$tensm=$_POST['usenamemoi'];
					$sua = "UPDATE thongtin SET usename='".$tensm."' WHERE usename='".$user."'";
					$luu = mysqli_query($conn, $sua);	
					$dem=1;			
				}
				if(!empty($_POST['passwordmoi']))
				{
					$tentgm=$_POST['passwordmoi'];
					$sua1 = "UPDATE thongtin SET password='".$tentgm."' WHERE usename='".$user."'";
					$luu1 = mysqli_query($conn, $sua1);	
					$dem=1;					
				}
				if(!empty($_POST['hotenmoi']))
				{
					$slm=$_POST['hotenmoi'];
					$sua2 = "UPDATE thongtin SET hoten='".$slm."' WHERE usename='".$user."'";
					$luu2 = mysqli_query($conn, $sua2);	
					$dem=1;					
				}
				if(!empty($_POST['lopmoi']))
				{
					$tentlm=$_POST['lopmoi'];
					$sua3 = "UPDATE thongtin SET lop='".$tentlm."' WHERE usename='".$user."'";
					$luu3 = mysqli_query($conn, $sua3);	
					$dem=1;					
				}
				
								
			}
    	}

	}		
	
	
	if($dem==1) header("Location: tc.php");
	else header("Location: ktc.php");

?>