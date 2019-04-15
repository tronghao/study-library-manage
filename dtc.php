<?php
	session_start();
	if(!isset($_SESSION['user']))
		header("Location: dangnhap.php");
?>

<?php
include('connect.php');
	$sql = "SELECT usename, hoten, lop FROM thongtin";
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
.style10 {
	font-size: 24px;
	color: #FFFF00;
	font-weight: bold;
}
.style27 {color: #FF9966}
.style37 {font-size: 36px; color: #FFFFFF; font-weight: bold; }
</style>
</head>
<body align="center">

<table width="995" height="233" border="0" align="center">
  <tr>
    <td height="197" colspan="6"><img src="img/003.jpg" width="986" height="193" /></td>
  </tr>
  <tr>
    <td width="138" height="30" bgcolor="#999999"><div align="center" class="style6"><a href="trangchu.php" class="style8">TRANG CHỦ </a></div></td>
    <td width="142" bgcolor="#999999"><div align="center" class="style6"><a href="gioithieu.php" class="style8">GIỚI THIỆU </a></div></td>
    <td width="161" bgcolor="#999999"><div align="center" class="style6"><a href="danhmucsach.php" class="style8">DANH MỤC SÁCH</a></div></td>
    <td width="144" bgcolor="#999999"><div align="center"><a href="thongtin.php" class="style8">THÔNG TIN </a></div></td>
    <td width="219" bgcolor="#999999"><form action="timkiem.php" method="post" name="form1" class="style6" id="form1">
      <div align="center">
        <input type="text" name="textfield" />
		<input type="submit" value="Tìm" name="search"  /></div>
    </form>    </td>
    <td width="165" bgcolor="#999999"><div align="center" class="style6"><a href="dangxuat.php" class="style8">ĐĂNG XUẤT </a></div></td>
  </tr>
</table>
<table width="993" " border="0" align="center" bordercolor="#FF3399" bgcolor="#FFFFFF">
  <tr>
    <td height="21" bgcolor="#666666"><span class="style27"></span><span class="style27"></span><span class="style27"></span></td>
  </tr>
</table>
<table width="992" border="1" align="center">
  <tr>
    <td bgcolor="#0000FF"><div align="center">
      <p class="style10">&nbsp;</p>
      <p class="style37">THAY ĐỔI THÀNH CÔNG         </p>
      <p class="style10">&nbsp;</p>
    </div>
  
    </td>
 <?php

  if (mysqli_num_rows($result) > 0)
	{
   		 // output data of each row
   		 while($row = mysqli_fetch_assoc($result))
		 {
		 	if($row["usename"] == $_SESSION['user'])
			{
				$ten=$row["hoten"];
				$mssv=$row["usename"];
				$lop=$row["lop"];
			}
		}
	}
?>
  </tr>
</table>

<table width="990" border="0" align="center">
  <tr>
    <td width="1233"><img src="img/017.png" width="986" height="457" /></td>
  </tr>
</table>
<table width="992" border="1" align="center">
  <tr>
    <td colspan="5"><h3 align="left" class="style7">Thư viện Trường Đại học Trà Vinh. </h3>
        <h3 align="left"><span class="style7">Số 126 - Nguyễn Thiện Thành, Khóm 4, phường 5, Thành phố Trà Vinh - Tỉnh Trà Vinh.</span><br />
      </h3></td>
    <td width="500"><img src="img/002.jpg" width="500" height="193" /></td>
  </tr>
</table>
</body>
</html>