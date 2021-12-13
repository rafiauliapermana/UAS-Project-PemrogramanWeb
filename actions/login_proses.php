<?php 

	session_start();
	include 'koneksi.php';

	$username = htmlentities($_POST['username'],ENT_QUOTES);
	$password = htmlentities($_POST['password'],ENT_QUOTES);

	$sql = "SELECT * FROM admin_login WHERE username = '$username' and password = '$password' ";
	$quser = $koneksi->query($sql);
	$rowuser = $quser->fetch_assoc();


   if (!empty($rowuser)) {
         $_SESSION['username'] = $username;
         $_SESSION['username'] = $username;
         $_SESSION['status'] = "login";
         header("location:../admin/index.php");
		}

	else{
		header("location:../admin/login.php?pesan=gagal");
	}
 ?>