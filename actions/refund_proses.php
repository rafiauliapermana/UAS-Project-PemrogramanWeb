<?php 

include 'koneksi.php';

    if ($koneksi->connect_error) {
        die("Connection failed: " . $koneksi->connect_error);
    }

    $id = $_GET['id'];

    $sql = "UPDATE refund_tabel SET status='accept' WHERE id='$id'";


    if ($koneksi->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $koneksi->error;
    }

    $koneksi->close();

    header('location: ../admin');

 ?>