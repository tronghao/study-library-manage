<?php
include('connect.php');

	$sql1 = "SELECT * FROM muon";
	$result1 = mysqli_query($conn, $sql1);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
<!--

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

.style6 {color: #FFFF66}
.style8 {color: #FFFF00}
.style10 {	font-size: 25px;
	font-weight: bold;
	color: #6600CC;
}
.style9 {	font-size: 24px;
	color: #0000FF;
}
.style11 {
	font-size: 26px;
	color: #FFFF00;
	font-weight: bold;
}
</style>
</head>
<body align="center">
<table width="995" height="233" border="0" align="center">
  <tr>
    <td height="197" colspan="6"><img src="img/003.jpg" width="986" height="193" /></td>
  </tr>
  <tr>
    <td width="118" height="30" bgcolor="#999999"><div align="center" class="style6">
      <div align="center"><a href="trangchu.php" class="style8">TRANG CH&#7910; </a></div>
    </div></td>
    <td width="162" bgcolor="#999999"><div align="center" class="style6">
      <div align="center"><a href="danhmucsach.php" class="style8">DANH M&#7908;C S&Aacute;CH</a></div>
    </div></td>
    <td width="162" bgcolor="#999999"><div align="center"><a href="tracuumuon.php" class="style8">TRA C&#7912;U M&#431;&#7906;N </a></div></td>
    <td width="163" bgcolor="#999999"><div align="center"><a href="duyettrasach.php" class="style8">DUY&#7878;T TR&#7842; S&Aacute;CH </a></div></td>
    <td width="226" bgcolor="#999999"><form action="timkiem.php" method="post" name="form1" class="style6" id="form1">
      <div align="center">
        <input type="text" name="textfield" />
        <input type="submit" value="Tìm" name="search" />
      </div>
    </form></td>
    <td width="138" bgcolor="#999999"><div align="center" class="style6">
      <div align="center"><a href="dangxuat.php" class="style8">&#272;&#258;NG XU&#7844;T </a></div>
    </div></td>
  </tr>
</table>
<table width="995" height="30" border="0" align="center">
  <tr>
    <td width="173" height="26" bgcolor="#999999"><div align="center" class="style6">
      <div align="center"><a href="themsach.php" class="style8">TH&Ecirc;M S&Aacute;CH </a></div>
    </div></td>
    <td width="173" bgcolor="#999999"><div align="center" class="style6">
      <div align="center"><a href="xoasach.php" class="style8">X&Oacute;A S&Aacute;CH </a></div>
    </div></td>
    <td width="222" bgcolor="#999999"><div align="center"><a href="themtaikhoan.php" class="style8">TH&Ecirc;M T&Agrave;I KHO&#7842;N </a></div></td>
    <td width="191" bgcolor="#999999"><div align="center"><a href="xoataikhoan.php" class="style8">X&Oacute;A T&Agrave;I KHO&#7842;N </a></div></td>
    <td width="214" bgcolor="#999999"><div align="center"><a href="capnhattaikhoan.php" class="style8">C&#7852;P NH&#7852;T T&Agrave;I KHO&#7842;N</a></div></td>
  </tr>
</table>
<p>&nbsp;</p>
<table width="1002" border="0" align="center">
  <tr>
    <td width="84" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="2" height="31" bgcolor="#0000FF">&nbsp;</td>
    <td width="372" bgcolor="#FFCC66"><div align="center" class="style10">Nhập user cần kiểm tra: </div></td>
    <td width="518" class="style9"><form id="form2" name="form2" method="post" action="tracuumuon2.php">
      <div align="center">
        <input name="user" type="text" size="30" />
        <input type="submit" name="Kiểm Tra" value="Kiểm Tra" />
      </div>
    </form></td>
  </tr>
</table>
</br>
</br>
<?php
	$dem=0;
  if (mysqli_num_rows($result1) > 0)
	{
   		 // output data of each row
   		 while($row1 = mysqli_fetch_assoc($result1))
		 {
		 	if($row1["usename"] == $_POST['user'])
			{
				if($dem==0)
				{
?>
<?php $dem=1;}?>
<table width="992" border="0" align="center">
  <tr>
    <td width="982"><form id="form2" name="form2" method="post" action="duyetmuon.php">
      <label></label>
      <label></label>
      <label></label>

        <div align="center">
          <input name="usename" type="text" value="<?php echo $row1["usename"];?>" size="7" readonly="False" />
          <input name="hoten" type="text" value="<?php echo $row1["hoten"];?>" size="15" readonly="False" />
          <input name="lop" type="text" value="<?php echo $row1["lop"];?>" size="7" readonly="False" />
          <input name="tensach" readonly="False" value="<?php echo $row1["tensach"];?>" type="text" size="35" />
          <input name="tentacgia" readonly="False" value="<?php echo $row1["tentacgia"];?>" type="text" size="20" />
<?php if($row1["datem"]!=="0000-00-00"){?>
<input name="daduyet" readonly="False" value="<?php echo "Đã Duyệt";?>" type="text" size="10" />
<?php } else{?>
<input name="chuaduyet" readonly="False" value="<?php echo "Chưa Duyệt";?>" type="text" size="10" />
<?php }?>
          <input type="submit" name="Submit" value="Duyệt Mượn" />
          </label>
        </div>
    </form>    </td>
  </tr>
</table>
<?php
	 	$dem=1;}
		if($_POST['user']=="ALL")
			{			
?>

<table width="992" border="0" align="center">
  <tr>
    <td width="982"><form id="form2" name="form2" method="post" action="duyetmuon.php">
      <label></label>
      <label></label>
      <label></label>

        <div align="center">
          <label>
          <input name="usename" type="text" value="<?php echo $row1["usename"];?>" size="7" readonly="False" />
          <input name="hoten" type="text" value="<?php echo $row1["hoten"];?>" size="15" readonly="False" />
          <input name="lop" type="text" value="<?php echo $row1["lop"];?>" size="7" readonly="False" />
          </label>
          <input name="tensach" readonly="False" value="<?php echo $row1["tensach"];?>" type="text" size="35" />
          <input name="tentacgia" readonly="False" value="<?php echo $row1["tentacgia"];?>" type="text" size="20" />
<?php if($row1["datem"]!=="0000-00-00"){?>
<input name="daduyet" readonly="False" value="<?php echo "Đã Duyệt";?>" type="text" size="10" />
<?php } else{?>
<input name="chuaduyet" readonly="False" value="<?php echo "Chưa Duyệt";?>" type="text" size="10" />
<?php }?>
          <input type="submit" name="Submit" value="Duyệt Mượn" />

        </div>
    </form>    </td>
  </tr>
</table>
<?php
			$dem=1;}
		}
	}
?>
<?php
	if($dem==0)
	{
?>
<br />
<table width="575" border="0" align="center" bordercolor="#0000FF">
  <tr>
    
    <td width="569" height="45" bordercolor="#0000FF" bgcolor="#0000FF" class="style11 style8">&nbsp; <?php echo "TÀI KHOẢN CHƯA MƯỢN SÁCH";?></td>
  </tr>
</table>
<?php
	}
?>
<p>&nbsp;</p>
<p>
  <?php include('end.php');?>
</p>
<p></p>
<p>&nbsp;</p>
</body>
</html>