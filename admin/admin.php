<?php
	session_start();
	if(!isset($_SESSION['user']))
		header("Location: dangnhap.php");
	if($_SESSION['user']!="admin")
		header("Location: loiadmin.php");
?>