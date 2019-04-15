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
.style20 {color: #660099; font-weight: bold; }
.style31 {font-size: 22px;
	font-family: "VNI-Bandit";
}
@font-face {
  font-family: 'VNI-Aztek';
  src: url('VNI-Aztek.eot?#iefix') format('embedded-opentype'),  url('VNI-Aztek.woff') format('woff'), url('VNI-Aztek.ttf')  format('truetype'), url('VNI-Aztek.svg#VNI-Aztek') format('svg');
  font-weight: normal;
  font-style: normal;
}

@font-face {
  font-family: 'VNI-Bandit';
  src: url('VNI-Bandit.eot?#iefix') format('embedded-opentype'),  url('VNI-Bandit.woff') format('woff'), url('VNI-Bandit.ttf')  format('truetype'), url('VNI-Bandit.svg#VNI-Bandit') format('svg');
  font-weight: normal;
  font-style: normal;
}
@font-face {
  font-family: 'VNI-AlgerianU';
  src: url('VNI-AlgerianU.eot?#iefix') format('embedded-opentype'),  url('VNI-AlgerianU.woff') format('woff'), url('VNI-AlgerianU.ttf')  format('truetype'), url('VNI-AlgerianU.svg#VNI-AlgerianU') format('svg');
  font-weight: normal;
  font-style: normal;
}
@font-face {
  font-family: 'VNI-Colonna';
  src: url('VNI-Colonna.eot?#iefix') format('embedded-opentype'),  url('VNI-Colonna.woff') format('woff'), url('VNI-Colonna.ttf')  format('truetype'), url('VNI-Colonna.svg#VNI-Colonna') format('svg');
  font-weight: normal;
  font-style: normal;
}
@font-face {
  font-family: 'VNI-Lithos';
  src: url('VNI-Lithos.eot?#iefix') format('embedded-opentype'),  url('VNI-Lithos.woff') format('woff'), url('VNI-Lithos.ttf')  format('truetype'), url('VNI-Lithos.svg#VNI-Lithos') format('svg');
  font-weight: normal;
  font-style: normal;
}
.style33 {
	font-family: "VNI-Aztek";
	font-size: 30px;
	color: #F0F0F0;
}
.style48 {font-family: "VNI-Bandit"}
.style64 {	color: #000066;
	font-size: 30px;
	font-family: VNI-Aztek;
}
.style66 {	font-size: 30px;
	color: #000066;
}
</style>
</head>
<body align="center" background="img/030.jpg">
<table width="987" border="0" align="center">
  <tr>
    <td width="459" align="center" valign="bottom"><p><img src="img/209.png" width="228" height="65" align="bottom" /><img src="img/201_2.png" width="224" height="86" /></p></td>
    <td width="328" height="88" valign="bottom"><form action="timkiem.php" method="post" name="form1" class="style6" id="form1">
      <p align="right">
        <input name="textfield" type="text" size="30" />
        <input type="submit" value="Tìm" name="search" />
      </p>
    </form></td>
    <td width="186" height="88" valign="bottom"><div align="right"><span class="style48 style31">TA&Oslash;I KHOA&Ucirc;N<span class="style66">:</span></span> <span class="style64"><?php echo  $_SESSION['user']; ?></span></div></td>
  </tr>
  <tr>
    <td height="31" colspan="3" align="center" valign="top"><blockquote>
      <blockquote>
        <blockquote>
          <blockquote>
            <p><a href="trangchu.php"><img class="a" src="img/206.png" width="35" height="29" border="0"/> </a><a href="gioithieu.php"><img class="a" src="img/203.jpg" width="147" height="22" border="0"/> </a><a href="danhmucsach.php"><img class="a" src="img/202.jpg" width="147" height="22" border="0" /> </a><a href="thongtin.php"><img class="a" src="img/204.jpg" width="147" height="22" border="0"/> </a><a href="dangxuat.php"><img class="a" src="img/205.jpg" width="147" height="22" border="0"/></a></p>
          </blockquote>
        </blockquote>
      </blockquote>
    </blockquote></td>
  </tr>
</table>
<table width="1000" border="0" align="center">
  <tr>
    <td width="173" bgcolor="#FF99FF"><div align="center" class="style20"><a href="chuyennganh.php">CHUYÊN NGÀNH</a></div></td>
    <td width="199" bgcolor="#FF99FF"><div align="center" class="style20"><a href="truyendongluc.php">TRUYỀN ĐỘNG LỰC </a></div></td>
    <td width="168" bgcolor="#FF99FF"><div align="center" class="style20"><a href="tamhon.php">TÂM HỒN</a></div></td>
    <td width="199" bgcolor="#FF99FF"><div align="center" class="style20"><a href="khoahoc.php">KHOA HỌC</a></div></td>
    <td width="239" bgcolor="#FF99FF"><div align="center" class="style20"><a href="truyentieuthuyet.php">TRUYỆN - TIỂU THUYẾT</a></div></td>
  </tr>
</table>
<table width="999" border="0" align="center">
  <tr>
    <td height="196"><div align="left"><img src="img/014.jpg" width="993" height="290" /></div>      <div align="left"></div></td>
  </tr>
  <tr>
    <td><div align="center" class="style10"><img src="img/019.jpg" width="996" height="257" /></div>    </td>
  </tr>
</table>

<p>&nbsp;</p>
</body>
</html>
