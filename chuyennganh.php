<?php
	session_start();
	if(!isset($_SESSION['user']))
		header("Location: dangnhap.php");
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
	font-size: 36px;
	color: #FF33FF;
}
.style11 {font-size: 36px; color: #0000FF; }
.style12 {font-size: 50px; color: #0000FF; }
.style13 {font-size: 45px}
.style14 {font-size: 45px; color: #FF33FF; }
.style15 {color: #FF0000}
.style22 {color: #660099; font-weight: bold; }
</style>
</head>
<body align="center">
<table width="995" height="233" border="0" align="center">
  <tr>
     <td height="197" colspan="6"><img src="img/003.jpg" width="986" height="193" /></td>
  </tr>
  <tr>
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
<table width="1000" border="0" align="center">
  <tr>
    <td width="63" bgcolor="#FF99FF"><div align="center" class="style22">
      <div align="center"><a href="cntt.php">CNTT</a></div>
    </div></td>
    <td width="105" bgcolor="#FF99FF"><div align="center" class="style22">
      <div align="center"><a href="mamnon.php">MẦM NON </a></div>
    </div></td>
    <td width="146" bgcolor="#FF99FF"><div align="center" class="style22">
      <div align="center"><a href="ngonnguanh.php">NGÔN NGỮ ANH </a></div>
    </div></td>
    <td width="211" bgcolor="#FF99FF"><div align="center" class="style22">
      <div align="center"><a href="taichinhnganhang.php">TÀI CHÍNH - NGÂN HÀNG</a></div>
    </div></td>
    <td width="197" bgcolor="#FF99FF"><div align="center" class="style22">
      <div align="center"><a href="quantrivanphong.php">QUẢN TRỊ VĂN PHÒNG</a></div>
    </div></td>
    <td width="57" bgcolor="#FF99FF"><div align="center" class="style22"><a href="luat.php">LUẬT</a></div></td>
    <td width="129" bgcolor="#FF99FF"><div align="center" class="style22"><a href="kythuatdien.php">KỸ THUẬT ĐIỆN</a></div></td>
    <td width="58" bgcolor="#FF99FF"><div align="center" class="style22"><a href="thuy.php">THÚ Y</a></div></td>
  </tr>
</table>
<table width="1000" border="0" align="center">
  <tr>
    <td width="147" bgcolor="#FF99FF"><div align="center" class="style22">
      <div align="center"><a href="nongnghiep.php">NÔNG NGHIỆP</a></div>
    </div></td>
    <td width="117" bgcolor="#FF99FF"><div align="center" class="style22">
      <div align="center"><a href="thuysan.php">THỦY SẢN </a></div>
    </div></td>
    <td width="104" bgcolor="#FF99FF"><div align="center" class="style22">
      <div align="center"><a href="cokhi.php">CƠ KHÍ </a></div>
    </div></td>
    <td width="102" bgcolor="#FF99FF"><div align="center" class="style22">
      <div align="center"><a href="hoahoc.php">HÓA HỌC</a></div>
    </div></td>
    <td width="84" bgcolor="#FF99FF"><div align="center" class="style22">
      <div align="center"><a href="duoc.php">DƯỢC</a></div>
    </div></td>
    <td width="110" bgcolor="#FF99FF"><div align="center" class="style22"><a href="ketoan.php">KẾ TOÁN </a></div></td>
    <td width="205" bgcolor="#FF99FF"><div align="center" class="style22"><a href="congnghesinhhoc.php">CÔNG NGHỆ SINH HỌC</a></div></td>
    <td width="97" bgcolor="#FF99FF"><div align="center" class="style22"><a href="kientruc.php">KIẾN TRÚC</a></div></td>
  </tr>
</table>
<table width="999" border="0" align="center">
  <tr>
    <td height="317"><div align="left"><img src="img/021.jpg" width="995" height="315" /></div></td>
  </tr>
  <tr>
    <td><div align="center" class="style10"><img src="img/018.jpg" width="997" height="269" /></div>    </td>
  </tr>
</table>
<table width="998" border="1" align="center">
  <tr>
    <td colspan="5"><h3 align="left" class="style7">Thư viện Trường Đại học Trà Vinh. </h3>
        <h3 align="left"><span class="style7">Số 126 - Nguyễn Thiện Thành, Khóm 4, phường 5, Thành phố Trà Vinh - Tỉnh Trà Vinh.</span><br />
      </h3></td>
    <td width="500"><img src="img/002.jpg" width="500" height="193" /></td>
  </tr>
</table>
<p>&nbsp;</p>
</body>
</html>
