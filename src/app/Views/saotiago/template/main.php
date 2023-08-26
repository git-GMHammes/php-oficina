<!DOCTYPE html>
<html lang="pt-BR">
<!-- app/Views/template/main.php -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- /public/assets/vendor/leaflet/leaflet.js -->
    <script src="<?= base_url() . "assets/leaflet/leaflet.js"; ?>"></script>
    <!-- jQuery -->
    <!-- /public/assets/vendor/jquery/jquery-3.6.2.min.js -->
    <script src="<?= base_url() . 'assets/jquery/jquery-3.6.2.min.js' ?>"></script>
    <!-- dataTables -->
    <!-- local/public/assets/dataTables/jquery.dataTables.min.css -->
    <!-- local/public/assets/dataTables/jquery.dataTables.min.js -->
    <link rel="stylesheet" href="<?= base_url() . "assets/dataTables/jquery.dataTables.min.css" ?>" />
    <script src="<?= base_url() . "assets/dataTables/jquery.dataTables.min.js" ?>"></script>
    <!-- <link rel="stylesheet" href="<?php base_url() . "assets/dataTables/dataTables.bootstrap5.min.css" ?>"></script> -->
    <!-- <script src="<?php base_url() . "assets/dataTables/dataTables.bootstrap5.min.js" ?>"></script> -->
    <!-- <script src="<?php base_url() . "assets/dataTables/buttons.bootstrap5.min.js" ?>"></script> -->
    <!-- <script src="<?php base_url() . "assets/dataTables/dataTables.buttons.min.js" ?>"></script> -->
    <!-- <script src="<?php base_url() . "assets/dataTables/dataTables.select.min.js" ?>"></script> -->
    <!-- http://cdn.datatables.net/plug-ins/1.10.25/i18n/Portuguese-Brasil.json | Traduz a tabulação para o português-->
    <!-- Bootsrap 5.0.2 Offline -->
    <link rel="stylesheet" href="<?= base_url() . "assets/bootstrap/50/css/bootstrap.min.css" ?>" />
    <script src="<?= base_url() . "assets/bootstrap/50/js/bootstrap.bundle.min.js" ?>"></script>
    <!-- public/assets/fullcalendar/fullcalendar.min.css -->
    <!-- public/assets/fullcalendar/fullcalendar.min.js -->
    <!-- public/assets/fullcalendar/moment.min.js -->
    <!-- public/assets/fullcalendar/jquery.min.js-->
    <script src="<?php base_url() . "assets/fullcalendar/jquery-3.6.0.min.js"; ?>"></script>
    <script src="<?= base_url() . "assets/fullcalendar/moment.min.js"; ?>"></script>
    <script src="<?= base_url() . "assets/fullcalendar/fullcalendar.min.js"; ?>"></script>
    <script src="<?= base_url() . "assets/fullcalendar/pt-br.js"; ?>"></script>
    <link rel="stylesheet" href="<?= base_url() . "assets/fullcalendar/fullcalendar.min.css" ?>" />
    <!-- style -->
    <!-- local/public/assets/css/style.css -->
    <link rel="stylesheet" href="<?= base_url() . "assets/css/style.css" ?>" />
    <script src="<?= base_url(); ?>ajaxptbr"></script>
    <title><?= (isset($page_title)) ? ($page_title) : ('app/Views//templateI.php') ?></title>
</head>
<body>
    <?php (DEBUG_MY_PRINT) ? (myPrint('www\oficina\app\Views\saotiago\template\main.php', 'Line: 44', true)) : (NULL);?>
    <?php if ($loadView !== array()) : ?>
        <?php foreach ($loadView as $getView) : ?>
            <?php
            echo view($getView);
            ?>
        <?php endforeach ?>
    <?php else : ?>
        <h1>Não foi passado nenhma view!</h1>
    <?php endif ?>
</body>
<footer>
    <?php
    include_once('script/timer.php');
    ?>
</footer>

</html>