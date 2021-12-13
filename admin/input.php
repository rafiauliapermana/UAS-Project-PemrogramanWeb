<?php include 'app.php'; ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row mt-3">
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card card-primary">
                                        <div class="card-header">
                                            <h3 class="card-title">Input Data</h3>
                                        </div>
                                        <!-- /.card-header -->
                                        <!-- form start -->
                                        <form action="../actions/input_proses.php" method="post">
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <label for="jenis-pengiriman">Jenis Pengiriman</label>
                                                    <select class="custom-select" id="jenis-pengiriman" name="jenis-pengiriman" required>
                                                        <option value="false" disabled selected>Pilih Pengiriman</option>
                                                        <option value="KV">Konvensional</option>
                                                        <option value="IN">Instant</option>
                                                        <option value="SD">Same Day</option>
                                                        <option value="ND">Next Day</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="kontak-pengirim">Nama Pengirim</label>
                                                    <input type="text" class="form-control" id="nama-pengirim" placeholder="Nama Pengirim" name="nama-pengirim" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="alamat-pengirim">Alamat Pengirim</label>
                                                    <textarea class="form-control" rows="3" placeholder="Alamat Pengirim" name="alamat-pengirim" required></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label for="kontak-pengirim">Kontak Pengirim</label>
                                                    <input type="text" class="form-control" id="kontak-pengirim" placeholder="Kontak Pengirim" name="kontak-pengirim" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="kontak-pengirim">Nama Penerima</label>
                                                    <input type="text" class="form-control" id="nama-penerima" placeholder="Nama Penerima" name="nama-penerima" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="alamat-penerima">Alamat Penerima</label>
                                                    <textarea class="form-control" rows="3" placeholder="Alamat Penerima" name="alamat-penerima" required></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label for="kontak-penerima">Kontak Penerima</label>
                                                    <input type="text" class="form-control" id="kontak-penerima" placeholder="Kontak Penerima" name="kontak-penerima" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="keterangan">Keterangan</label>
                                                    <textarea class="form-control" rows="3" placeholder="Keterangan" name="keterangan" required></textarea>
                                                </div>
                                            </div>
                                            <!-- /.card-body -->

                                            <div class="card-footer">
                                                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->
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
