<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1,
            shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>LENOVELA - ADMIN</title>

    <!-- Custom fonts for this template -->
    <link href="<?= base_url() ?>assets/css/font-awesome.min.css" rel="stylesheet">
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
                Daftar Kepala
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url(); ?>kepala">
                    <i class="fa fa-users"></i>
                    <span>Daftar Kepala</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Surat
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item active">
                <a class="nav-link" href="<?= base_url(); ?>surat">
                    <i class="fa fa-envelope"></i>
                    <span>Upload Surat</span></a>
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
                                <a class="dropdown-item" data-toggle="modal" href="" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm
                                                fa-fw mr-2
                                                text-gray-400"></i>Keluar
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
                    <h1 class="h3 mb-2 text-gray-800">Upload Surat</h1>
                    <p class="mb-4">Pada halaman ini terdapat tabel yang berisi data yang berkaitan dengan surat.</p>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold
                                        text-primary">Data Surat</h6>
                        </div>
                        <div class="card-body">
                            <div class="row mb-3">
                                <div class="col-sm-12
                                text-right">
                                    <button type="button" class="btn btn-info text-right" data-Toggle="modal" data-Target="#tambahsurat"><em class="fa fa-plus"></em>Tambah</button>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Surat</th>
                                            <th>Tanggal</th>
                                            <th>File</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1;
                                        foreach ($surat as $s) {
                                        ?>
                                            <tr>
                                                <th scope="col">
                                                    <?= $no++; ?>
                                                </th>
                                                <th scope="col">
                                                    <?= $s->surat; ?>
                                                </th>
                                                <th scope="col">
                                                    <?= date('d F Y', strtotime($s->tanggal)); ?>
                                                </th>
                                                <th>

                                                    <a href="<?= base_url() . 'Fungsi_surat/lihat_surat/' . $s->file; ?>"><?= $s->file; ?>
                                                </th>
                                                <th>

                                                    <?php if ($s->status == 1) {
                                                        echo '<span class="badge badge-danger">Urgent</span>';
                                                    } elseif ($s->status == 2) {
                                                        echo '<span class="badge badge-warning">Sedikit Urgent</span>';
                                                    } elseif ($s->status == 3) {
                                                        echo '<span class="badge badge-success">Tidak Urgent</span>';
                                                    }
                                                    ?>
                                                </th>
                                                <th>
                                                    <a href="" class=" btn btn-success" data-Toggle="modal" data-Target="#editsurat<?= $s->id; ?>"><em class="fa fa-edit"></em>Edit</a>
                                                    <button type="button" class="btn btn-danger hapus-surat" href="<?= base_url(); ?>Fungsi_surat/delete_surat/<?= $s->id; ?>"><em class="fa fa-trash"></em>Delete</button>
                                                </th>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php $this->load->view('footer'); ?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <?php foreach ($surat as $s) : ?>
        <div id="editsurat<?= $s->id; ?>" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Surat
                        </h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <?= form_open_multipart(base_url() . 'Fungsi_surat/update_surat/' . $s->id); ?>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="surat" class="col-sm-3 control-label">Surat</label>
                                <div class="col-sm-9">
                                    <input type="hidden" class="form-control" value="<?= $s->id; ?>" id="id" name="id">
                                    <input type="text" class="form-control" id="surat" value="<?= $s->surat; ?>" name="surat" placeholder="Nama Surat">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="tanggal" class="col-sm-3 control-label">Tanggal</label>
                                <div class="col-sm-9">
                                    <input type="date" class="form-control" value="<?= $s->tanggal; ?>" id="tanggal" name="tanggal" placeholder="Tanggal Pelaksanaan">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="file" class="col-sm-3 control-label">File</label>
                                <div class="col-sm-9">
                                    <input type="hidden" name="old_file" value="<?= $s->file; ?>">
                                    <input type="file" name="file" value="<?= $s->file; ?>">
                                    <p>File berformat .pdf</p>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="status" class="col-sm-3 control-label">Status</label>
                                <div class="col-sm-9">
                                    <input type="checkbox" class="ml-auto" value="1" name="status" <?php if ($s->status == 1) echo 'checked'; ?>><em class="indicator label-danger"></em>Urgent<br>
                                    <input type="checkbox" class="ml-auto" value="2" name="status" <?php if ($s->status == 2) echo 'checked'; ?>><em class="indicator label-warning"></em>Sedikit
                                    Urgent<br>
                                    <input type="checkbox" class="ml-auto" value="3" name="status" <?php if ($s->status == 3) echo 'checked'; ?>><em class="indicator label-success"></em>Tidak
                                    Urgent<br>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-success" data-Toggle="modal">Edit</button>
                            </div>
                        </div>
                        <?= form_close(); ?>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>

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
    <script src="<?= base_url() ?>assets/js/sweetalert2.all.min.js"></script>
    <script src="<?= base_url() ?>assets/js/myscript.js"></script>

    <?php if ($this->session->flashdata('message')) { ?>
        <script>
            $(document).ready(function() {
                Swal.fire(
                    'Data Surat',
                    'Data berhasil Ditambahkan',
                    'success'
                )
            });
        </script>
    <?php unset($_SESSION['message']);
    } ?>

    <?php if ($this->session->flashdata('update')) { ?>
        <script>
            $(document).ready(function() {
                Swal.fire(
                    'Data Surat',
                    'Data berhasil Diedit',
                    'success'
                )
            });
        </script>
    <?php unset($_SESSION['message']);
    } ?>


</body>

</html>