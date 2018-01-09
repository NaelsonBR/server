<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php if (isset($title)) echo $title; ?></title>
    <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/style-public.css"); ?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/font-awesome.min.css"); ?>">
    <script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.min.js"); ?>"></script>
    <script src="https://use.fontawesome.com/77aee86c6a.js"></script>

</head>
<body>


<div class="bg-top">
    <div class="container-fluid">
        <div class="bg-top">
            <i class="material-icons" id="home">dashboard</i>

            <ul class="drag-menu">
                <li><i class="material-icons" id="chevron_left">chevron_left</i></li>

                <li><i class="material-icons" id="chevron_right">chevron_right</i></li>
            </ul>

            <input type="text" name="search" placeholder=" Search.." id="search">

            <i class="fa fa-cog fa-spin fa-3x fa-fw" id="admin-config"></i>

        </div>
    </div>
</body>
</html>


<?php

