<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1,
            shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>LENOVELA - PIMPINAN</title>

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
            <li class="nav-item">
                <a class="nav-link" href="<?php base_url(); ?>dashboard">
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
            <li class="nav-item active">
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
                                <span class="mr-2 d-none d-lg-inline
                                        text-gray-600 small"><?=
                                                                    $user->nama;
                                                                ?></span>
                                <img class="img-profile rounded-circle" src="<?= base_url() . 'assets/uploads/img/' . $user->foto; ?>">
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
                                <a class="dropdown-item" href="authentication/logout" data-toggle="modal" data-target="#logoutModal">
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
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Akun Saya</h1>
                    <p class="mb-4">Pada halaman ini terdapat form dengan data diri Anda.
                    </p>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold
                                        text-primary">Data Profil</h6>
                        </div>
                        <div class="card-body">
                            <?= form_open_multipart(base_url() . 'profile/update_profile'); ?>
                            <div class="row">
                                <div class="col-xs-12 col-md-4 mt-5 responsive">
                                    <!--left col-->
                                    <div class="form-group" id="foto">
                                        <div class="text-center">
                                            <img src="<?= base_url() . 'assets/uploads/img/' . $user->foto; ?>" width="50%" class="img-profile rounded-circle img-thumbnail" alt="avatar">
                                            <input type="file" class="text-center center-block file-upload ml-5 mt-2" name="foto" id="ava" disabled>
                                            <input type="hidden" name="old_foto" value="<?= $user->foto; ?>">
                                        </div>
                                    </div>
                                    </hr><br>

                                    <ul class="list-group ml-3">
                                        <li class="list-group-item text-muted">Keterangan <i class="fa fa-dashboard fa-1x"></i></li>
                                        <li class="list-group-item text-right"><span class="pull-left"><strong>NIP</strong></span><br><?= $this->session->userdata('user')['nip']; ?></li>
                                        <li class="list-group-item text-right"><span class="pull-left"><strong>Jabatan</strong></span><br><?= $this->session->userdata('user')['jabatan']; ?></li>
                                    </ul>
                                </div>
                                <div class="col-xs-12 col-md-4" id="profile">
                                    <?= $this->session->flashdata('up_profile'); ?>
                                    <div class="form-group">
                                        <label>Nama</label>
                                        <input class="form-control" placeholder="Nama" id="nama" name="nama" value="<?= $user->nama; ?>" disabled required>
                                    </div>
                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <input class="form-control" id="alamat" placeholder="Alamat" name="alamat" value="<?= $user->alamat; ?>" disabled required>
                                    </div>
                                    <div class="form-group">
                                        <label>Jenis Kelamin:</label>
                                        <select class="form-control" name="jenkel" id="jenkel" required disabled>
                                            <option value="">--Jenis kelamin--</option>

                                            <option value="1" <?php if ($user->jenkel == 1) echo 'selected="selected"'; ?>>Laki-laki</option>

                                            <option value="2" <?php if ($user->jenkel == 2) echo 'selected="selected"'; ?>>Perempuan</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Nomer Telp</label>
                                        <input type="number" class="form-control" maxlength="12" placeholder="Nomor telp" id="nomor" name="nomor" value="<?= $user->nomor; ?>" disabled required>
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" class="form-control" placeholder="Email" id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2, 4}$" name="email" value="<?= $user->email; ?>" disabled required>
                                    </div>
                                    <div class=" form-footer">
                                        <button type="button" id="close-edit-profile" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" id="edit-profile" data-btn="edit" class="btn btn-primary">Update Profil</button>
                                    </div>
                                </div>
                                <?= form_close(); ?>
                                <div class="col-xs-12 col-md-4" id="ubahpassword">
                                    <form method="post" action="<?= base_url() . 'profile/ubah_password'; ?>">
                                        <?= $this->session->flashdata('password'); ?>
                                        <!-- <div class="form-group">
                                            <label>Password Lama</label>
                                            <input type="password" class="form-control" placeholder="Password Lama" id="passlama" name="passlama" value="" disabled required>
                                        </div> -->
                                        <div class="form-group">
                                            <label>Password Baru</label>
                                            <div class="input-group">
                                                <input type="password" id="pwd1" class="form-control" name="passbaru" placeholder="Password Baru" data-toggle="password" value="" disabled required>
                                                <div class="input-group-append">
                                                    <div class="input-group-text">
                                                        <i class="fa fa-eye" id="eye"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Konfirmasi Password</label>
                                            <div class="input-group">
                                                <input type="password" id="pwd" class="form-control" name="konfpass" placeholder="Konfirmasi Password" data-toggle="password" value="" disabled required>
                                                <div class="input-group-append">
                                                    <div class="input-group-text">
                                                        <i class="fa fa-eye" id="eye"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-footer">
                                            <button type="button" id="close-password" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" id="ubah-password" data-btn="edit" class="btn btn-primary">Ubah Password</button>
                                        </div>
                                    </form>
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer -->
                <?php $this->load->view('footer'); ?>
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- End of Main Content -->




        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>


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
        <script src="<?= base_url() ?>assets/js/bootstrap-show-password.min.js"></script>
        <script src="<?= base_url() ?>assets/js/myscript.js"></script>

        <!-- <script>
        function show() {
            var p = document.getElementById('pwd');
            p.setAttribute('type', 'text');
        }

        function hide() {
            var p = document.getElementById('pwd');
            p.setAttribute('type', 'password');
        }

        var pwShown = 0;

        document.getElementById("eye").addEventListener("click", function() {
            if (pwShown == 0) {
                pwShown = 1;
                show();
            } else {
                pwShown = 0;
                hide();
            }
        }, false);
    </script> -->
</body>

</html>