<?php
    include 'koneksi.php';
    if ($koneksi->connect_error) {
        die("Connection failed: " . $koneksi->connect_error);
    }

    $id = $_GET['id'];
    $tgl_kirim = date('Y-m-d H:i:s');
    $tgl_perkiraan = date('Y-m-d', strtotime('+3 days'));

    $sql = "UPDATE pengiriman_tabel SET tgl_kirim='$tgl_kirim', tgl_perkiraan='$tgl_perkiraan', status='Dalam Perjalanan' WHERE id='$id'";

    if ($koneksi->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $koneksi->error;
    }

    $koneksi->close();

    header('location: ../admin');
?>
