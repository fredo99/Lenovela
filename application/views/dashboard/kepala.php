<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1,
            shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>LENOVELA - KEPALA</title>

    <!-- Custom fonts for this template -->
    <link href="<?= base_url() ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?= base_url() ?>assets/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="<?= base_url() ?>vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link rel="manifest" href="<?= base_url() ?>manifest.json">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark
                accordion toggled" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center
                    justify-content-center" href="<?= base_url(); ?>dashboard">
                <div class="sidebar-brand-icon">
                    <i><img src="<?= base_url() . 'assets/img/logo.png' ?>" width="70%"></i></img>
                </div>
                <div class="sidebar-brand-text mx-3">LENOVELA</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="<?= base_url(); ?>dashboard">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Akun Saya
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url(); ?>profile">
                    <i class="fa fa-user-alt"></i>
                    <span>Profil</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Surat
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url(); ?>surat">
                    <i class="fa fa-envelope"></i>
                    <span>Lihat Surat</span></a>
            </li>

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white
                        topbar mb-4
                        static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link
                            d-md-none
                            rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Dropdown - Messages -->
                        <div class="dropdown-menu dropdown-menu-right
                                    p-3 shadow
                                    animated--grow-in" aria-labelledby="searchDropdown">
                            <form class="form-inline mr-auto w-100
                                        navbar-search">
                                <div class="input-group">
                                    <input type="text" class="form-control bg-light
                                                border-0
                                                small" placeholder="Search
                                                for..." aria-label="Search" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="button">
                                            <i class="fas fa-search
                                                        fa-sm"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?php foreach ($user as $s) : ?>
                                    <span class="mr-2 d-none d-lg-inline
                                        text-gray-600 small"><?=
                                                                    $s->nama;
                                                                ?></span>
                                    <img class="img-profile rounded-circle" src="<?= base_url() . 'assets/uploads/img/' . $s->foto; ?>">
                                <?php endforeach; ?>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu
                                        dropdown-menu-right shadow
                                        animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="<?= base_url() . 'profile'; ?>">
                                    <i class="fas fa-user fa-sm fa-fw
                                                mr-2 text-gray-400"></i> Profil
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm
                                                fa-fw mr-2
                                                text-gray-400"></i> Keluar
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center
                                justify-content-between
                                mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Dashboard-->
                        <div class="col-lg-6 col-md-6 mb-4">
                            <div class="card border-left-primary shadow
                                        h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters
                                                align-items-center">
                                        <div class="col mr-2">
                                            <div class="font-weight-bold
                                                        text-primary
                                                        text-uppercase mb-1"><a href="<?= base_url(); ?>profile">User profile</a></div>
                                            <div class="text-xs mb-0
                                                        text-gray-800">Halaman untuk melihat data pribadi
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-user fa-2x
                                                        text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 mb-4">
                            <div class="card border-left-info shadow
                                        h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters
                                                align-items-center">
                                        <div class="col mr-2">
                                            <div class="font-weight-bold
                                                        text-primary
                                                        text-uppercase mb-1"><a href="<?= base_url(); ?>surat">Lihat Surat</a></div>
                                            <div class="text-xs mb-0
                                                        text-gray-800">Halaman untuk melihat surat</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-envelope
                                                        fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Page Heading -->
                        <!-- <div clas="row"> -->
                        <h1 class="h3 mb-2 text-gray-800">Daftar Kepala</h1>
                        <!-- DataTales Example -->
                        <div class="col-lg-12 col-md-3 mb-4">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold
                                        text-primary">Data Kepala</h6>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>Nama</th>
                                                    <th>Jabatan</th>
                                                    <th>Alamat</th>
                                                    <th>Nomor Telp</th>
                                                    <th>Jenis Kelamin</th>
                                                    <th>Email</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                foreach ($kepala as $kp) {
                                                ?>
                                                    <tr>
                                                        <th><?= $kp->nama; ?></th>
                                                        <th><?= $kp->jabatan; ?></th>
                                                        <th><?= $kp->alamat; ?></th>
                                                        <th><?= $kp->nomor; ?></th>
                                                        <th><?php if ($kp->jenkel == 1) {
                                                                echo "Laki-laki";
                                                            } elseif ($kp->jenkel == 2) {
                                                                echo "Perempuan";
                                                            } ?>
                                                        </th>
                                                        <th><?= $kp->email; ?></th>
                                                    </tr>
                                                <?php }; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- </div> -->
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php $this->load->view('footer'); ?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Keluar
                    </h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Apakah yakin ingin keluar?
                    <div class="row">
                        <div class="col-sm-12 text-right">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                            <a class="btn btn-primary" href="authentication/logout">Keluar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url() ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url() ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="<?= base_url() ?>vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="<?= base_url() ?>assets/js/sb-admin-2.min.js"></script>
    <!-- Page level plugins -->
    <script src="<?= base_url() ?>vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url() ?>vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <!-- Page level custom scripts -->
    <script src="<?= base_url() ?>assets/js/demo/datatables-demo.js"></script>

</body>

</html>