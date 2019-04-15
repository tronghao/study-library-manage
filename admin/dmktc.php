<?php
include('admin.php');
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
.style38 {font-size: 36px}
.style39 {font-size: 36px; color: #FFFF00; font-weight: bold; }
.style6 {color: #FFFF66}
.style8 {color: #FFFF00}
.style40 {font-size: 36px; color: #FFFFFF; font-weight: bold; }
</style>
</head>
<body align="center">
<table width="995" height="233" border="0" align="center">
  <tr>
    <td height="197" colspan="6"><img src="img/003.jpg" width="986" height="193" /></td>
  </tr>
  <tr>
    <td width="118" height="30" bgcolor="#999999"><div align="center" class="style6">
      <div align="center"><a href="trangchu.php" class="style8">TRANG CHỦ </a></div>
    </div></td>
    <td width="162" bgcolor="#999999"><div align="center" class="style6">
      <div align="center"><a href="danhmucsach.php" class="style8">DANH MỤC SÁCH</a></div>
    </div></td>
    <td width="162" bgcolor="#999999"><div align="center"><a href="tracuumuon.php" class="style8">TRA CỨU MƯƠN </a></div></td>
    <td width="163" bgcolor="#999999"><div align="center"><a href="duyettrasach.php" class="style8">DUYỆT TRẢ SÁCH </a></div></td>
    <td width="226" bgcolor="#999999"><form action="timkiem.php" method="post" name="form1" class="style6" id="form1">
      <div align="center">
        <input type="text" name="textfield" />
        <input type="submit" value="Tìm" name="search" />
      </div>
    </form></td>
    <td width="138" bgcolor="#999999"><div align="center" class="style6">
      <div align="center"><a href="dangxuat.php" class="style8">ĐĂNG XUẤT </a></div>
    </div></td>
  </tr>
</table>
<table width="995" height="30" border="0" align="center">
  <tr>
    <td width="127" height="26" bgcolor="#999999"><div align="center" class="style6">
      <div align="center"><a href="themsach.php" class="style8">THÊM SÁCH </a></div>
    </div></td>
    <td width="132" bgcolor="#999999"><div align="center" class="style6">
      <div align="center"><a href="xoasach.php" class="style8">XÓA SÁCH </a></div>
    </div></td>
    <td width="161" bgcolor="#999999"><div align="center" class="style6">
      <div align="center"><a href="capnhatsach.php" class="style8">CẬP NHẬT SÁCH </a></div>
    </div></td>
    <td width="177" bgcolor="#999999"><div align="center"><a href="themtaikhoan.php" class="style8">THÊM TÀI KHOẢN </a></div></td>
    <td width="169" bgcolor="#999999"><div align="center"><a href="xoataikhoan.php" class="style8">XÓA TÀI KHOẢN </a></div></td>
    <td width="203" bgcolor="#999999"><div align="center"><a href="capnhattaikhoan.php" class="style8">CẬP NHẬT TÀI KHOẢN</a></div></td>
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
      <p class="style10 style38">DUYỆT MƯỢN KHÔNG THÀNH CÔNG </p>
      <p class="style40">Có Thể Bạn Đã Duyệt Rồi! </p>
      </div>
  
      <form id="form2" name="form2" method="post" action="tdmk.php">
        <div align="center"></div>
      </form>
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
<?php
include('end.php');
?>
</body>
</html>