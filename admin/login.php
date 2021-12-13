<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jaya Express | Login</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">

    <section class="content">
        <div class="wrapper">
            <nav class="navbar navbar-expand-lg navbar-light" style="background: #fff">
                <a class="navbar-brand" href="index.php">
                    <img src="../assets/logo.png" height="70px" alt="Jaya Express Logo">
                </a>
            </nav>

            <div class="container-fluid">
                <div class="row justify-content-center align-items-center" style="height:70vh;">
                    <div class="col-5">
                        <div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title">Login</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form class="form-horizontal" action="../actions/login_proses.php" method="post">
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="username" class="col-sm-2 col-form-label">Username</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="username" class="form-control" id="username" placeholder="Username">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="password" class="col-sm-2 col-form-label">Password</label>
                                        <div class="col-sm-10">
                                            <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                                        </div>
                                    </div>
                                    <?php
                                    if(isset($_GET['pesan'])){
                                        if($_GET['pesan']=="gagal"){
                                            echo "<span class='text-danger'>Login gagal! username atau password salah</span>";
                                        }
                                        else if($_GET['pesan']=="logout"){
                                             echo "Anda berhasil Logout";
                                        }
                                        else if($_GET['pesan']=="belum_login"){
                                            echo "<span class='text-danger'>Anda harus login untuk mengakses halaman admin</span>";
                                        }
                                    }
                                    ?>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-info">Login</button>
                                    <a href="/" type="button" class="btn btn-default float-right">Cancel</a>
                                </div>
                                <!-- /.card-footer -->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
