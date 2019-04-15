<?php
include('admin.php');
?>
<?php
include('connect.php');

	$sql = "SELECT tensach,tentacgia,soluong, theloai FROM sach";
	$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style6 {color: #FFFF66}
.style7 {color: #6600FF}
.style8 {color: #FFFF00}
-->
a:link {
    text-decoration: none;
}

a:visited {
    text-decoration: none;
}

a:hover {
    text-decoration: underline;
}

a:active {
    text-decoration: underline;
}
.style11 {
	font-size: 22px;
	color: #FF0000;
	font-weight: bold;
}
.style12 {font-size: 36px}
.style16 {font-size: 20px; color: #333333; }
.style18 {color: #6633FF; font-size: 20px; }
.style23 {	font-size: 22px;
	color: #333333;
}
.style24 {	font-size: 22px;
	color: #6600FF;
}
</style>
</head>
<body align="center">
<?php include('start.php');?>
<br />
<br />
<?php
	if(empty($_POST['textfield']))
	{
?>
<table width="999" border="0" align="center">
  <tr>
    
    <td width="993" bordercolor="#0000FF" bgcolor="#FFCC99" class="style11 style12">&nbsp; <?php echo "Không Tìm Thấy";?></td>
  </tr>
</table>
<p>
  <?php
	}
	else
	{
?>
</p>
<p>
  <?php
	$dem=0;
	if (mysqli_num_rows($result) > 0)
	{
   		 // output data of each row
   		 while($row = mysqli_fetch_assoc($result))
		 {
		 	if (strpos($row["tensach"], $_POST['textfield']) !== false) 
			{
				
?>
  <?php
			if($dem==0)
			{
?>
</p>

<table width="997" border="1" align="center">
  <tr>
    <td width="382" height="63" bgcolor="#FFFF99"><div align="left" class="style16">
      <div align="center"><?php echo "T&ecirc;n S&aacute;ch";?></div>
    </div></td>
    <td width="217" bgcolor="#FFFF99"><div align="center" class="style16">
      <div align="center"><?php echo "T&ecirc;n T&aacute;c Gi&#7843;";?></div>
    </div></td>
    <td width="148" bgcolor="#FFFF99"><div align="center" class="style16"><?php echo "S&#7889; L&#432;&#7907;ng C&ograve;n";?></div></td>
    <td width="145" bgcolor="#FFFF99"><span class="style23">&nbsp;<?php echo "Th&#7875; Lo&#7841;i";?></span></td>
    <td width="71" bgcolor="#FFFF99"><div align="center" class="style16"><?php echo " ";?></div></td>
  </tr>
</table>
<?php
	$dem=1;
	}
?>
<form action="capnhatsach1.php" method="post" enctype="multipart/form-data" name="form2" id="form2">
  <label></label>
  <label></label>
  <label></label>
  <label></label>
  <label></label>
  <label></label>
  <div align="center" class="style24">
    <input name="tensach" readonly="False" value="<?php echo $row["tensach"];?>" type="text" size="50" />
    <input name="tentacgia" readonly="False" value="<?php echo $row["tentacgia"];?>" type="text" size="27" />
    <input name="soluong" readonly="False" value="<?php echo $row["soluong"];?>" type="text" size="16" />
    <input name="theloai" readonly="False" value="<?php echo $row["theloai"];?>" type="text" size="16" />
    <input type="submit" name="Cập Nhật" value="Cập Nhật" />
  </div>
</form>
<?php
			}
		}
	}

?>
<?php
	if($dem==0)
	{
?>
<table width="999" border="0" align="center">
  <tr>
    
    <td width="993" bordercolor="#0000FF" bgcolor="#FFCC99" class="style11 style12">&nbsp; <?php echo "Không Tìm Thấy";?></td>
  </tr>
</table>
<?php
	}
	}
?>
<br />
<br />
<?php include('end.php');?>
<p>&nbsp;</p>
</body>
</html>