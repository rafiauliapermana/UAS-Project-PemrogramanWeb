<?php
    $koneksi = mysqli_connect("localhost", "root", "", "jaya_express");
 
    //cek koneksi
    if (mysqli_connect_errno()){
        echo "Koneksi database mysqli gagal!!! : " . mysqli_connect_error();
    }
?>