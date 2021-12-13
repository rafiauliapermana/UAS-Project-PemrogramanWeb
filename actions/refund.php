<?php 

	include 'koneksi.php';

	$refund_group_name = $_POST['refund_group_name'];
	$refund_refrence_id =  $_POST['refund_refrence_id'];
	$bank_vendor =  $_POST['bank_vendor'];
	$bank_account_number =  $_POST['bank_account_number'];
	$bank_account_name =  $_POST['bank_account_name'];
	$kontak = $_POST['kontak'];
	$alasan = $_POST['alasan'];
	$status= $_POST['status'];


	
	if(empty($_POST['refund_group_name'])||empty($_POST['refund_refrence_id'])||empty($_POST['bank_vendor'])||empty($_POST['bank_account_number'])||empty($_POST['bank_account_name'])||empty($_POST['kontak'])||empty($_POST['status'])||empty($_POST['alasan'])){
		echo '<script>alert("Data refund kosong permintaan gagal")</script>';
		echo '<script>window.location= "../index.php#refund"</script>';
	} else{
		mysqli_query($koneksi, "INSERT INTO refund_tabel (refund_group_name,refund_refrence_id,bank_vendor,bank_account_number,bank_account_name,kontak,status,alasan) VALUES ('$refund_group_name','$refund_refrence_id','$bank_vendor','$bank_account_number','$bank_account_name','$kontak','$status','$alasan');");

		echo '<script>alert("Data refund berhasil dikirim, Kontak anda akan dihubungi")</script>';
		echo '<script>window.location= "../index.php"</script>';
	}




?>