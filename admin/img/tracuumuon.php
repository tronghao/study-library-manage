<?php
	include('admin.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style9 {
	font-size: 24px;
	color: #0000FF;
}
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
	font-size: 25px;
	font-weight: bold;
	color: #6600CC;
}
.style6 {color: #FFFF66}
.style8 {color: #FFFF00}
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
<p>&nbsp;</p>
<p>
  <?php include('end.php');?>
</p>
<p>&nbsp;</p>
</body>
</html>