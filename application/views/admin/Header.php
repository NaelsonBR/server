<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php if (isset($title)) echo $title; ?></title>
    <link rel="stylesheet" href="<?= base_url("assets/css/style-dashboard.css"); ?>">
    <link rel="stylesheet" href="<?= base_url("assets/css/bootstrap.min.css"); ?>">
    <link rel="stylesheet" href="<?= base_url("assets/css/font-awesome.min.css"); ?>">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <script type="text/javascript" src="<?= base_url("assets/js/jquery-3.2.1.js"); ?>"></script>
    <script type="text/javascript" src="<?= base_url("assets/js/bootstrap.min.js"); ?>"></script>
    <script type="text/javascript" src="<?= base_url("assets/js/global.js"); ?>"></script>
    <script type="text/javascript" src="<?= base_url("https://use.fontawesome.com/77aee86c6a.js"); ?>"></script>


</head>
<body>


<div class="bg-top">
    <div class="container-fluid">
        <div class="bg-top">

            <a href="<?= base_url("admin")?>"><i class="material-icons" id="home">dashboard</i></a>

            <ul class="drag-menu">
                <li><i class="material-icons" id="chevron_left">chevron_left</i></li>

                <li><i class="material-icons" id="chevron_right">chevron_right</i></li>
            </ul>

            <!--<input type="text" name="search" placeholder=" Search.." id="search"> -->

            <i class="fa fa-cog fa-spin fa-3x fa-fw" id="admin-config"></i>

            <div class="bg-config">
                <div class="Shapes-top"></div>
                <ul class="config-body">
                    <li><a href="#"><button type="button">Aparencia</button></a></li>
                    <li><a href="#"><button type="button">Linguagem</button></a></li>
                    <li><a href="<?= base_url('admin/leave') ?>"><button type="button">Sair</button></a></li>
                </ul>

            </div>

        </div>
    </div>

</body>
</html>

<?php

