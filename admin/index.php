<?php include 'app.php'; ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Dashboard</h1>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <?php
                            include '../actions/koneksi.php';
                        ?>
                        <div class="col">
                            <!-- small box -->
                            <div class="small-box bg-danger">
                                <div class="inner">
                                    <?php
                                        $sql = "SELECT COUNT(*) AS jumlah FROM pengiriman_tabel WHERE status='Belum Dikirim'";
                                        $result = mysqli_query($koneksi, $sql);
                                        $data = mysqli_fetch_assoc($result);
                                    ?>
                                    <h3><?php echo $data['jumlah'] ?></h3>

                                    <p>Belum Dikirim</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-times-circle"></i>
                                </div>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col">
                            <!-- small box -->
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <?php
                                        $sql = "SELECT COUNT(*) AS jumlah FROM pengiriman_tabel WHERE status='Dalam Perjalanan'";
                                        $result = mysqli_query($koneksi, $sql);
                                        $data = mysqli_fetch_assoc($result);
                                    ?>
                                    <h3><?php echo $data['jumlah'] ?></h3>

                                    <p>Dalam Perjalanan</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-shipping-fast"></i>
                                </div>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col">
                            <!-- small box -->
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <?php
                                        $sql = "SELECT COUNT(*) AS jumlah FROM pengiriman_tabel WHERE status='Selesai'";
                                        $result = mysqli_query($koneksi, $sql);
                                        $data = mysqli_fetch_assoc($result);
                                    ?>
                                    <h3><?php echo $data['jumlah'] ?></h3>

                                    <p>Selesai</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-check-circle"></i>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <!-- small box -->
                            <div class="small-box bg-warning">
                                <div class="inner">
                                    <?php
                                        $sql = "SELECT COUNT(*) AS jumlah FROM refund_tabel WHERE status = 'request'";
                                        $result = mysqli_query($koneksi, $sql);
                                        $data = mysqli_fetch_assoc($result);
                                    ?>
                                    <h3><?php echo $data['jumlah'] ?></h3>

                                    <p>Refund Request</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-angle-double-left"></i>
                                </div>
                            </div>
                        </div>
                        <!-- ./col -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card card-danger">
                                <div class="card-header">
                                    <h3 class="card-title">Belum Dikirim</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Tanggal Masuk</th>
                                                <th>Jenis Pengiriman</th>
                                                <th>Status</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <?php
                                            include '../actions/koneksi.php';
                                            $result = mysqli_query($koneksi, "SELECT * FROM pengiriman_tabel WHERE status='Belum Dikirim'");
                                            while ($row=mysqli_fetch_assoc($result)) {
                                        ?>
                                        <tbody>
                                            <tr>
                                                <td><a href="detail.php?id=<?php echo $row['id'] ?>"><?php echo $row['id'] ?></a></td>
                                                <td><?php echo $row['tgl_masuk'] ?></td>
                                                <td><?php echo $row['jenis'] ?></td>
                                                <td class="bg-danger"><?php echo $row['status'] ?></td>
                                                <td><a href="../actions/kirim_proses.php?id=<?php echo $row['id'] ?>" class="btn btn-block btn-primary btn-xs">Kirim</a></td>
                                            </tr>
                                        </tbody>
                                        <?php } ?>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                            <div class="card card-info">
                                <div class="card-header">
                                    <h3 class="card-title">Dalam Perjalanan</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example2" class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Tanggal Masuk</th>
                                                <th>Jenis Pengiriman</th>
                                                <th>Tanggal Pengiriman</th>
                                                <th>Perkiraan Sampai</th>
                                                <th>Status</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <?php
                                            include '../actions/koneksi.php';
                                            $result = mysqli_query($koneksi, "SELECT * FROM pengiriman_tabel WHERE status='Dalam Perjalanan'");
                                            while ($row=mysqli_fetch_assoc($result)) {
                                        ?>
                                        <tbody>
                                            <tr>
                                                <td><a href="detail.php?id=<?php echo $row['id'] ?>"><?php echo $row['id'] ?></a></td>
                                                <td><?php echo $row['tgl_masuk'] ?></td>
                                                <td><?php echo $row['jenis'] ?></td>
                                                <td><?php echo $row['tgl_kirim'] ?></td>
                                                <td><?php echo $row['tgl_perkiraan'] ?></td>
                                                <td class="bg-info"><?php echo $row['status'] ?></td>
                                                <td><button type="button" onclick="kirimBukti('<?php echo $row['id'] ?>')" class="btn btn-block btn-primary btn-xs" data-toggle="modal" data-target="#modal-default">Selesai</button></td>
                                            </tr>
                                        </tbody>
                                        <?php } ?>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                            <div class="card card-success">
                                <div class="card-header">
                                    <h3 class="card-title">Selesai</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example3" class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Tanggal Masuk</th>
                                                <th>Jenis Pengiriman</th>
                                                <th>Tanggal Pengiriman</th>
                                                <th>Tanggal Sampai</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <?php
                                            include '../actions/koneksi.php';
                                            $result = mysqli_query($koneksi, "SELECT * FROM pengiriman_tabel WHERE status='Selesai'");
                                            while ($row=mysqli_fetch_assoc($result)) {
                                        ?>
                                        <tbody>
                                            <tr>
                                                <td><a href="detail.php?id=<?php echo $row['id'] ?>"><?php echo $row['id'] ?></a></td>
                                                <td><?php echo $row['tgl_masuk'] ?></td>
                                                <td><?php echo $row['jenis'] ?></td>
                                                <td><?php echo $row['tgl_kirim'] ?></td>
                                                <td><?php echo $row['tgl_sampai'] ?></td>
                                                <td class="bg-success"><?php echo $row['status'] ?></td>
                                            </tr>
                                        </tbody>
                                        <?php } ?>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>

                             <div class="card card-warning">
                                <div class="card-header">
                                    <h3 class="card-title">Refund</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example4" class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Refund Refrence ID</th>
                                                <th>Refund Group Name</th>
                                                <th>Bank Vendor</th>
                                                <th>Bank Account Number</th>
                                                <th>Bank Account Name</th>
                                                <th>Kontak</th>
                                                <th>Alasan</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <?php
                                            include '../actions/koneksi.php';
                                            $result = mysqli_query($koneksi, "SELECT * FROM refund_tabel");
                                            while ($row=mysqli_fetch_assoc($result)) {
                                        ?>
                                        <tbody>
                                            <tr>
                                                <td><?php echo $row['refund_refrence_id']; ?></td>
                                                <td><?php echo $row['refund_group_name']; ?></td>
                                                <td><?php echo $row['bank_vendor'] ?></td>
                                                <td><?php echo $row['bank_account_number'] ?></td>
                                                <td><?php echo $row['bank_account_name'] ?></td>
                                                <td><?php echo $row['kontak']; ?></td>
                                                <td><?php echo $row['alasan']; ?></td>
                                                <?php 
                                                    $status = ["request" => 'btn-primary', "accept" => "btn-success"
                                                    ];
                                                 ?>
                                                <td><a href="../actions/refund_proses.php?id=<?php echo $row['id'] ?>" class="btn btn-block <?php echo $status[$row['status']] ?> btn-xs"><?php echo $row['status']; ?></a></td>
                                            </tr>
                                        </tbody>
                                        <?php } ?>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                </div><!-- /.container-fluid -->

                <script type="text/javascript">
                    function readURL(input) {
                        if (input.files && input.files[0]) {
                            var reader = new FileReader();

                            reader.onload = function(e) {
                                $('#bukti').attr('src', e.target.result);
                            }

                            reader.readAsDataURL(input.files[0]);
                        }
                    }
                </script>
                <div class="modal fade" id="modal-default">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Masukkan Foto Bukti</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <script type="text/javascript">
                                    function kirimBukti(id) {
                                        document.getElementById('id-kirim-bukti').innerHTML = "ID: "+id;
                                        document.getElementById('kirim-bukti').value = id;
                                    }
                                </script>
                                <form action="../actions/selesai_proses.php" method="post" enctype="multipart/form-data">
                                    <b id="id-kirim-bukti"></b>
                                    <div class="form-group">
                                        <input type="hidden" name="id" id="kirim-bukti" value="">
                                        <div class="custom-file">
                                            <input type="file" name="foto-bukti" class="custom-file-input" id="customFile" onchange="readURL(this);">
                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                        </div>
                                        <img id="bukti" src="#" class="my-2" style="max-width: 400px;"><br>
                                        <div class="row justify-content-center no-gutters">
                                            <div class="col-2 mx-1">
                                                <button type="button" class="btn btn-block btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                            <div class="col-2 mx-1">
                                                <button type="submit" class="btn btn-block btn-info">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

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
    <!-- bs-custom-file-input -->
    <script src="plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>

    <!-- DataTables  & Plugins -->
    <script src="plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="plugins/jszip/jszip.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
    <!-- Page specific script -->
    <script>
        $(function() {
            $('#example1').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
            $('#example3').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
             $('#example4').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
    <script>
        $(function() {
            bsCustomFileInput.init();
        });
    </script>
</body>

</html>
