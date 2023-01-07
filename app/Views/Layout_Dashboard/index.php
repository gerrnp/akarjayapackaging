<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Dashboard</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="icon" href="<?= base_url('assets/assets/img/icon.ico') ?>" type="image/x-icon" />

    <!-- Fonts and icons -->
    <link href="<?= base_url('assets/vendor/fontawesome/css/all.min.css') ?>" rel="stylesheet">

    <!-- CSS Files -->
    <link href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/css/atlantis.css') ?>">
    <link href="<?= base_url('assets/css/sweetalert2.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/vendor/datatables/css/jquery.dataTables.min.css') ?>" rel="stylesheet">

</head>

<body>
    <div class="wrapper">

        <?= $this->include('Layout_Dashboard/topbar'); ?>

        <?= $this->include('Layout_Dashboard/sidebar'); ?>

        <div class="main-panel">
            <?= $this->renderSection('Dashboard'); ?>
            <?= $this->include('Layout_Dashboard/footer'); ?>
        </div>

    </div>
    <!--   Core JS Files   -->
    <script src="<?= base_url('assets/js/jquery.3.2.1.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/popper.min.js') ?>"></script>
    <script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.min.js') ?>"></script>

    <!-- jQuery UI -->
    <script src="<?= base_url('assets/vendor/jquery-ui-1.12.1.custom/jquery-ui.min.js') ?>"></script>
    <script src="<?= base_url('assets/vendor/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js') ?>"></script>

    <!-- jQuery Scrollbar -->
    <script src="<?= base_url('assets/vendor/jquery-scrollbar/jquery.scrollbar.min.js') ?>"></script>

    <!-- jQuery Sparkline -->
    <script src="<?= base_url('assets/vendor/jquery.sparkline/jquery.sparkline.min.js') ?>"></script>

    <!-- Sweet Alert -->
    <script src="<?= base_url('assets/js/sweetalert2.all.min.js') ?>"></script>

    <!-- tiny editor -->
    <script src="https://cdn.ckeditor.com/ckeditor5/35.4.0/classic/ckeditor.js"></script>

    <!-- Datatables -->
    <script src="<?= base_url('assets/vendor/datatables/js/jquery.dataTables.min.js'); ?>"></script>

    <!-- Atlantis JS -->
    <script src="<?= base_url('assets/js/atlantis.js') ?>"></script>
    <script src="<?= base_url('assets/js/script.js') ?>"></script>


</body>

</html>