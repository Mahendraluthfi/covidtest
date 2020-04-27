<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Login Admin</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link href="<?php echo base_url() ?>assets/landing/img/mas_icon.png" rel="icon">
        

        <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800" rel="stylesheet">
        
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/plugins/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/plugins/fontawesome-free/css/all.min.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/plugins/ionicons/dist/css/ionicons.min.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/plugins/icon-kit/dist/css/iconkit.min.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/plugins/perfect-scrollbar/css/perfect-scrollbar.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/dist/css/theme.min.css">
        <script src="<?php echo base_url() ?>assets/admin/src/js/vendor/modernizr-2.8.3.min.js"></script>
    </head>

    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div class="auth-wrapper">
            <div class="container-fluid h-100">
                <div class="row flex-row h-100 bg-white">
                    <div class="col-xl-8 col-lg-6 col-md-5 p-0 d-md-block d-lg-block d-sm-none d-none">
                        <div class="lavalite-bg" style="background-image: url('<?php echo base_url() ?>assets/admin/bg.jpg')">
                            <div class="lavalite-overlay"></div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-7 my-auto p-0">
                        <div class="authentication-form mx-auto">
                            <div>
                                <a href="#"><img src="<?php echo base_url() ?>assets/landing/img/logo.png" alt="" height="30"></a>
                            </div>
                            <h3>Rapid Self Detection COVID-19 System</h3>
                            <p>Sign In to Administrator</p>
                            <?php echo $this->session->flashdata('msg'); ?>
                            <?php echo form_open('admin/login/submit'); ?>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Username" required="" name="username">
                                    <i class="ik ik-user"></i>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password" required="" name="password">
                                    <i class="ik ik-lock"></i>
                                </div>                                
                                <div class="sign-btn text-center">
                                    <button type="submit" class="btn btn-theme">Sign In</button>
                                </div>
                            <?php echo form_close(); ?>                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script>window.jQuery || document.write('<script src="<?php echo base_url() ?>assets/admin/src/js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
        <script src="<?php echo base_url() ?>assets/admin/plugins/popper.js/dist/umd/popper.min.js"></script>
        <script src="<?php echo base_url() ?>assets/admin/plugins/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url() ?>assets/admin/plugins/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script>
        <script src="<?php echo base_url() ?>assets/admin/plugins/screenfull/dist/screenfull.js"></script>
        <script src="<?php echo base_url() ?>assets/admin/dist/js/theme.js"></script>
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>
