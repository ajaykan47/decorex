<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<!---$ajaykan47@gmail.com-->
<html lang="en" class="loading">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description"
          content="">
    <meta name="keywords"
          content="">
    <meta name="author" content="">
    <title>Decorex:: Login Page -</title>

    <link rel="shortcut icon" type="image/x-icon"
          href="<?php echo base_url('backend_assets'); ?>/app-assets/img/logo.png">
    <link rel="shortcut icon" type="image/png"
          href="<?php echo base_url('backend_assets'); ?>/app-assets/img/logo.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900|Montserrat:300,400,500,600,700,800,900"
          rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <!-- font icons-->
    <link rel="stylesheet" type="text/css"
          href="<?php echo base_url('backend_assets'); ?>/app-assets/fonts/feather/style.min.7.delaye">
    <link rel="stylesheet" type="text/css"
          href="<?php echo base_url('backend_assets'); ?>/app-assets/fonts/simple-line/style.8.delaye">
    <link rel="stylesheet" type="text/css"
          href="<?php echo base_url('backend_assets'); ?>/app-assets/fonts/fo/font-awesome.min.9.dela">
    <link rel="stylesheet" type="text/css"
          href="<?php echo base_url('backend_assets'); ?>/app-assets/vendors//perfect-scrollbar.min.a">
    <link rel="stylesheet" type="text/css"
          href="<?php echo base_url('backend_assets'); ?>/app-assets/vendors/css/prism.min.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN APEX CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('backend_assets'); ?>/app-assets/css/app.css">
    <!-- END APEX CSS-->
    <!-- BEGIN Page Level CSS-->
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <!-- END Custom CSS-->
</head>
<body data-col="1-column" class=" 1-column  blank-page blank-page" style="background: linear-gradient(to right, #114357, #F29492);
    padding-left: 0;
    max-width: 360px;
    margin: 5% auto;
    overflow-x: hidden;">
<!-- ////////////////////////////////////////////////////////////////////////////-->
<div class="wrapper">
    <div class="main-panel">
        <div class="main-content">
            <div class="content-wrapper"><!--Login Page Starts-->
                <section id="login">
                    <div class="container-fluid">
                        <div class="row full-height-vh">
                            <div class="col-12 d-flex align-items-center justify-content-center">
                                <div class="card gradient-indigo-purple text-center width-400">
                                    <div class="card-img overlap">
                                        <img alt="element 06" class="mb-1"
                                             src="<?php echo base_url('backend_assets'); ?>/app-assets/img/logo/logo.png"
                                             width="190">
                                    </div>
                                    <div class="card-body">
                                        <div class="card-block"><br/>
                                            <?php if ($this->session->flashdata('error')) { ?>
                                                <p class="disMes alert-warning">Please Check Your User Name,Password and Role Type Or Contact To Administrator</p>
                                            <?php } ?>

                                            <h2 class="white">Login</h2>
                                            <form action="<?php echo base_url(); ?>Admin/Auth/adminLogin" method="POST"
                                                  class="">
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                        <input type="email" class="form-control" name="inputEmail"
                                                               id="inputEmail" placeholder="Email" required>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                        <input type="password" class="form-control" name="inputPass"
                                                               id="inputPass" placeholder="Password" required>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0 ml-3">
                                                                <input type="checkbox" class="custom-control-input"
                                                                       checked id="rememberme">
                                                                <!--<label class="custom-control-label float-left white" for="rememberme">Remember Me</label>-->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                        <button type="submit" class="btn btn-pink btn-block btn-raised">
                                                            SIGN IN
                                                        </button>
                                                        <!-- <button type="button" class="btn btn-secondary btn-block btn-raised">Cancel</button>-->
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- <div class="card-footer">
                                         <div class="float-left"><a (click)="onForgotPassword()" class="white">Recover Password</a></div>
                                         <div class="float-right"><a (click)="onRegister()" class="white">New User?</a></div>
                                     </div>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--Login Page Ends-->
            </div>
        </div>
    </div>
</div>
<!-- ////////////////////////////////////////////////////////////////////////////-->

<!-- BEGIN VENDOR JS-->
<script src="<?php echo base_url('backend_assets'); ?>/app-assets/vendors//jquery-3.2.1.min.77.del"
        type="text/javascript"></script>
<script src="<?php echo base_url('backend_assets'); ?>/app-assets/vendors/js//popper.min.78.delaye"
        type="text/javascript"></script>
<script src="<?php echo base_url('backend_assets'); ?>/app-assets/vendors//bootstrap.min.79.delaye"
        type="text/javascript"></script>
<script src="<?php echo base_url('backend_assets'); ?>/app-assets/vendors//perfect-scrollbar.jquer"
        type="text/javascript"></script>
<script src="<?php echo base_url('backend_assets'); ?>/app-assets/vendors/js/prism.min.js"
        type="text/javascript"></script>
<script src="<?php echo base_url('backend_assets'); ?>/app-assets/vendors//jquery.matchHeight-min"
        type="text/javascript"></script>
<script src="<?php echo base_url('backend_assets'); ?>/app-assets/vendors//screenfull.min.7d.delay"
        type="text/javascript"></script>
<script src="<?php echo base_url('backend_assets'); ?>/app-assets/vendors/js/pa/pace.min.7e.delaye"
        type="text/javascript"></script>
<!-- BEGIN VENDOR JS-->
<!-- BEGIN PAGE VENDOR JS-->
<!-- END PAGE VENDOR JS-->
<!-- BEGIN APEX JS-->
<script src="<?php echo base_url('backend_assets'); ?>/app-assets/js/app-sidebar.js" type="text/javascript"></script>
<script src="<?php echo base_url('backend_assets'); ?>/app-assets/js/notification-sidebar.81.delay"
        type="text/javascript"></script>
<script src="<?php echo base_url('backend_assets'); ?>/app-assets/js/customizer.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
<script>
    $(document).ready(function () {
        setTimeout(function () {
            $('.disMes').fadeOut('fast');
        }, 5000);
    });
</script>
</body>


</html>