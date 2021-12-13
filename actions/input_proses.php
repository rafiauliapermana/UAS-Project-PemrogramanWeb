<?php
    include 'koneksi.php';
    if ($koneksi->connect_error) {
        die("Connection failed: " . $koneksi->connect_error);
    }

    $service = [
        "KV" => "Konvensional",
        "IN" => "Instant",
        "SD" => "Same Day",
        "ND" => "Next Day"
    ];
    $jenis_pengiriman = $_POST['jenis-pengiriman'];
    $result = mysqli_query($koneksi, "SELECT COUNT(*) AS jumlah FROM pengiriman_tabel WHERE id LIKE '$jenis_pengiriman%'");
    $id = $jenis_pengiriman.(mysqli_fetch_assoc($result)['jumlah']+100001);
    $tgl_masuk = date('Y-m-d G:i:s');
    $nama_pengirim = $_POST['nama-pengirim'];
    $alamat_pengirim = $_POST['alamat-pengirim'];
    $kontak_pengirim = $_POST['kontak-pengirim'];
    $nama_penerima = $_POST['nama-penerima'];
    $alamat_penerima = $_POST['alamat-penerima'];
    $kontak_penerima = $_POST['kontak-penerima'];
    $keterangan = $_POST['keterangan'];

    $sql = "INSERT INTO pengiriman_tabel(id, tgl_masuk, jenis, tgl_kirim, tgl_perkiraan, tgl_sampai, status, nama_pengirim, alamat_pengirim, kontak_pengirim, nama_penerima, alamat_penerima, kontak_penerima, keterangan, bukti)
    VALUES ('$id', '$tgl_masuk', '$service[$jenis_pengiriman]', NULL, NULL, NULL, 'Belum Dikirim', '$nama_pengirim', '$alamat_pengirim', '$kontak_pengirim', '$nama_penerima', '$alamat_penerima', '$kontak_penerima', '$keterangan', NULL)";

    if ($koneksi->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $koneksi->error;
    }

    $koneksi->close();

    header('location: ../admin');
?>
