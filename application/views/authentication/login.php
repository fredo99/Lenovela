<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SISTEM SURAT - Login</title>
    <link href="<?= base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url() ?>assets/css/datepicker3.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/css/styles.css" rel="stylesheet">
    <link rel="manifest" href="<?= base_url() ?>manifest.json">
    <link rel="apple-touch-icon" sizes="72x72" href="<?= base_url() ?>images/icons/icon-72x72.png">
    <link rel="apple-touch-icon" sizes="96x96" href="<?= base_url() ?>images/icons/icon-96x96.png">
    <link rel="apple-touch-icon" sizes="128x128" href="<?= base_url() ?>images/icons/icon-128x128.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?= base_url() ?>images/icons/icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?= base_url() ?>images/icons/icon-152x152.png">
    <link rel="apple-touch-icon" sizes="192x192" href="<?= base_url() ?>images/icons/icon-192x192.png">
    <link rel="apple-touch-icon" sizes="384x384" href="<?= base_url() ?>images/icons/icon-384x384.png">
    <link rel="apple-touch-icon" sizes="512x512" href="<?= base_url() ?>images/icons/icon-512x512.png">

    <!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <div class="login">
        <div class="col-md-4 col-xs-10">
            <div class="panel panel-default-centered">
                <div class="panel-heading text-center panel-default">LOGIN</div>
                <div class="panel-body">
                    <form role="form" method="POST">
                        <?= $this->session->flashdata('message'); ?>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            <input class="form-control" placeholder="Username" name="username" type="username" autofocus="">
                        </div>
                        <?= form_error('username', '<small class="text-danger">', '</small>'); ?>
                        <br>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                            <input class="form-control" placeholder="Password" name="password" type="password" value="">
                        </div>
                        <?= form_error('password', '<small class="text-danger">', '</small>'); ?>
                        <div class="checkbox">
                            <label>
                                <input name="remember" type="checkbox" value="Remember Me">Remember Me
                            </label>
                        </div>
                        <button type="submit" class="btn btn-primary">Login</button>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>



    <script src="<?= base_url() ?>assets/js/jquery-1.11.1.min.js"></script>
    <script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
</body>

</html>