<?php
    include 'koneksi.php';
    if ($koneksi->connect_error) {
        die("Connection failed: " . $koneksi->connect_error);
    }

    $id = $_POST['id'];
    $tgl_sampai = date('Y-m-d H:i:s');
    $formatfile = pathinfo($_FILES['foto-bukti']['name'], PATHINFO_EXTENSION);
    $lokfile = $_FILES['foto-bukti']['tmp_name'];
    $namafile = $id.".".$formatfile;
    move_uploaded_file($lokfile, "../admin/assets/bukti/$namafile");

    $sql = "UPDATE pengiriman_tabel SET tgl_sampai='$tgl_sampai', status='Selesai', bukti='$namafile' WHERE id='$id'";

    if ($koneksi->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $koneksi->error;
    }

    $koneksi->close();

    header('location: ../admin');
