<title><?php  if(isset($title)) echo $title; ?></title>

<div class="all-screen">
    <div class="container">



        <div class="row">
            <div class="col-sm-3 col-md-3 text-center" id="title-login">
               <h5 class="text-secondary m-1"><i class="material-icons" id="icon-login">https</i><?php echo$this->lang->line('title_dashboard_login');?></h5>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 col-md-4" id="form">

                <form method="POST">

                    <div class="form-group">
                        <label for="exampleInputEmail1"></label>
                        <input type="email" class="form-control" id="exampleInputEmail1" required aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted"><?php echo$this->lang->line('text_muted');?></small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1"></label>
                        <input type="password" class="form-control" id="exampleInputPassword1" required placeholder="Password">
                    </div>

                    <button type="submit" class="btn btn-submit btn-primary"><?php echo$this->lang->line('submit');?></button>

                </form>

            </div>
        </div>
    </div>
</div>
<?php
