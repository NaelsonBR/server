<html>
<head>
    <title><?php  if(isset($title)) echo $title; ?></title>
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



<div class="all-screen">
    <div class="container">

        <div class="row">
            <div class="col-sm-3 col-md-3 text-center" id="title-login">
               <h5 class="text-secondary m-1"><i class="material-icons" id="icon-login">https</i><?php echo$this->lang->line('title_dashboard_login');?></h5>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 col-md-4" id="form">


                <?php echo form_open('admin/login','POST'); ?>

                    <div class="form-group">
                        <label for="exampleInputEmail1"></label>
                        <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted"><?php echo$this->lang->line('text_muted');?></small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1"></label>
                        <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
                    </div>

                    <button type="submit" class="btn btn-submit btn-primary"><?php echo$this->lang->line('submit');?></button><br>

                    <h3 class="text-danger text-center m-1">
                        <?php  if(isset($errInfo)) echo $errInfo; ?>
                    </h3>
                    <h5 class="text-success text-center m-1">
                        <?php  if(isset($successInfo)) echo $successInfo; ?>
                    </h5>

                <?php echo validation_errors(); ?>
                <?php echo form_close(); ?>

            </div>
        </div>
    </div>
</div>
</body>
</html>
<?php
