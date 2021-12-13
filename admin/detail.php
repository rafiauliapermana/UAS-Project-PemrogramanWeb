<?php include 'app.php'; ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row mt-3">
                        <div class="col-12">
                            <!-- Main content -->
                            <div class="invoice p-3 mb-3">
                                <!-- title row -->
                                <div class="row mb-3">
                                    <div class="col-12">
                                        <img src="../assets/logo.png" height="50px" alt="Jaya Express Logo">
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- info row -->
                                <?php
                                    include '../actions/koneksi.php';
                                    $id = $_GET['id'];
                                    $result = mysqli_query($koneksi, "SELECT * FROM pengiriman_tabel WHERE id='$id'");
                                    $data = mysqli_fetch_assoc($result);
                                ?>
                                <div class="row mb-3 border-bottom">
                                    <div class="col">
                                        <b>ID: <?php echo $data['id'] ?></b>
                                    </div>
                                </div>
                                <div class="row mb-3 border-bottom">
                                    <div class="col-6">
                                        Pengirim
                                        <address>
                                            <strong><?php echo $data['nama_pengirim'] ?></strong><br>
                                            <?php echo $data['alamat_pengirim'] ?><br>
                                            Phone: <?php echo $data['kontak_pengirim'] ?>
                                        </address>
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-6">
                                        Penerima
                                        <address>
                                            <strong><?php echo $data['nama_penerima'] ?></strong><br>
                                            <?php echo $data['alamat_penerima'] ?><br>
                                            Phone: <?php echo $data['kontak_penerima'] ?>
                                        </address>
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- /.row -->
                                <div class="row mb-3 border-bottom">
                                    <div class="col">
                                        <?php
                                            $status = [
                                                "Selesai" => "alert-success",
                                                "Dalam Perjalanan" => "alert-info",
                                                "Belum Dikirim" => "alert-danger"
                                            ];
                                        ?>
                                        <b>Status:</b> <span class="alert <?php echo $status[$data['status']] ?>" style="padding: 2px"><?php echo $data['status'] ?></span><br>
                                        <b>Jenis Pengiriman:</b> <?php echo $data['jenis'] ?><br>
                                        <b>Tanggal Masuk:</b> <?php echo $data['tgl_masuk'] ?><br>
                                        <b>Tanggal Pengiriman:</b> <?php echo ($data['tgl_kirim'] != NULL) ? $data['tgl_kirim'] : "-" ?><br>
                                        <b>Perkiraan Sampai:</b> <?php echo ($data['tgl_perkiraan'] != NULL) ? $data['tgl_perkiraan'] : "-" ?><br>
                                        <b>Tanggal Sampai:</b> <?php echo ($data['tgl_sampai'] != NULL) ? $data['tgl_sampai'] : "-" ?><br>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <label>Keterangan</label>
                                        <p class="border p-2">
                                            <?php echo $data['keterangan'] ?>
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <label>Bukti</label><br>
                                        <?php if ($data['bukti'] != NULL): ?>
                                            <img src="assets/bukti/<?php echo $data['bukti'] ?>" style="height: 500px; max-width: 500px;">
                                        <?php else: ?>
                                            -
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <!-- /.invoice -->
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </section>
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
            <div class="p-3">
                <h5>Title</h5>
                <p>Sidebar content</p>
            </div>
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <!-- To the right -->
            <div class="float-right d-none d-sm-inline">
                Anything you want
            </div>
            <!-- Default to the left -->
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
</body>

</html>
