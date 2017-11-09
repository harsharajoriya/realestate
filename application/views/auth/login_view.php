<!DOCTYPE html>
<html lang="en">
<head>

    <title>Realestate</title>
	<link href="<?php echo base_url('assets/css/bootstrap.css'); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/css/bootstrap-select.css'); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/css/font-awesome.css'); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/css/owl.carousel.css'); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/css/jquery-ui.css'); ?>" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url('assets/css/charisma-app.css'); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/css/style.css'); ?>" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="ch-container">
    <div class="row">
        
    <div class="row">
        <div class="col-md-12 center login-header">
        </div>
        <!--/span-->
    </div><!--/row-->
    <?php
        $message = 'Please Login with your Username & Password';
        $message_type = 'alert alert-info';
        
        if($this->session->flashdata('message') != '')
        {
            $message = 'Invalid Username & Password Please Try Again';
            $message_type = 'alert alert-danger';
        }
    ?>
    <div class="row">
        <div class="well col-md-5 center login-box">
            <div class="<?php echo $message_type; ?>">
                <?php echo $message; ?>
            </div>
            <form class="form-horizontal" action="<?php echo base_url(); ?>login/check_user" method="post">
                <fieldset>
                    <div class="input-group input-group-lg">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user red"></i></span>
                        <input type="text" name="username" class="form-control" placeholder="Username" >
                    </div>
                    <div class="clearfix"></div><br>

                    <div class="input-group input-group-lg">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock red"></i></span>
                        <input type="password" name="password" class="form-control" placeholder="Password" >
                    </div>
                    <div class="clearfix"></div>

                    <div class="clearfix"></div>

                    <p class="center col-md-5">
                        <input type="submit" name="submit" value="Login" class="btn btn-primary">
                    </p>
                </fieldset>
            </form>
        </div>
        <!--/span-->
    </div><!--/row-->
</div><!--/fluid-row-->

</div><!--/.fluid-container-->



</body>
</html>
