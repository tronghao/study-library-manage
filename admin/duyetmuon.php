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




	
	$sql2 = "SELECT * FROM muon";
	$result2 = mysqli_query($conn, $sql2);
	
	$usename=$_POST['usename'];
	$tens=$_POST['tensach'];

 
		$dem=0;
	 if(mysqli_num_rows($result2) > 0)
					{
						while($row2 = mysqli_fetch_assoc($result2))
		 				{

		 					if($row2["usename"] == $usename && $row2["tensach"] == $tens)
							{
							if($row2["datet"] !== "0000-00-00")
							{
									$dem=0;
									break;
							
							}
							else
							{
								date_default_timezone_set("Asia/Ho_Chi_Minh");
								$startdate=getdate();
							 	$dateMuon=$startdate['year']."-".$startdate['mon']."-".$startdate['mday'];
								$dateT=$startdate['year']."-".$startdate['mon']."-".$startdate['mday'];
								$date = strtotime($dateT); 
								$date += 24*3600*15; //sau 15 ngày
								//lưu vào mysql
								$dateTra = date("Y-m-d", $date);
								echo $dateTra;
								$id=$row2["ID"];
								$sua = "UPDATE muon SET datem='".$dateMuon."', datet='".$dateTra."' WHERE id='".$id."'";
								$luu2 = mysqli_query($conn, $sua);
								$dem=1;
								break;
								
							}
							}
						}

	}
	
	
	if($dem==1) header("Location: tc.php");
	else header("Location: ktc.php");

?>

</body>
</html>