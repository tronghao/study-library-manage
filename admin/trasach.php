<?php
include('admin.php');
include('connect.php');

	$sql1 = "SELECT * FROM muon";
	$result1 = mysqli_query($conn, $sql1);
	$sql = "SELECT tensach, soluong FROM sach";
	$result = mysqli_query($conn, $sql);
?>
<?php
	$dem=0;
  if (mysqli_num_rows($result1) > 0)
	{
   		 // output data of each row
   		 while($row1 = mysqli_fetch_assoc($result1))
		 {
		 	if($row1["usename"] == $_POST['usename'] && $row1["tensach"] == $_POST['tensach'])
			{
				$id=$row1["ID"];
				$xoa = "DELETE FROM muon WHERE id='".$id."'";
				$luu = mysqli_query($conn, $xoa);
				$dem=1;
				if($dem==1)
				{
					if (mysqli_num_rows($result) > 0)
					{
   					 // output data of each row
   					 while($row = mysqli_fetch_assoc($result))
					 {
					 	if($row["tensach"] == $_POST['tensach'])
						{
							$ton=$row["soluong"]+1;
							$tens=$_POST['tensach'];
							$sua = "UPDATE sach SET soluong='".$ton."' WHERE tensach='".$tens."'";
							$luu2 = mysqli_query($conn, $sua);
							$dem=2;
						}
						}
					}
				}
			}
		}
	}

	if($dem==2) header('Location: tc.php');
	else header('Location: ktc.php');
?>
