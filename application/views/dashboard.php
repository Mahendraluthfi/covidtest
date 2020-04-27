<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Dashboard Admin</title>
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
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
        <script src="<?php echo base_url() ?>assets/admin/src/js/vendor/modernizr-2.8.3.min.js"></script>
    </head>

    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <style>
            .btn-icon{
                width: 40px;
            }
        </style>
        <div class="wrapper">
            <header class="header-top" header-theme="light">
                <div class="container-fluid">
                    <div class="d-flex justify-content-between">
                        <div class="top-menu d-flex align-items-center">
                            <button type="button" class="btn-icon mobile-nav-toggle d-lg-none"><span></span></button>
                            <h5>Rapid Self Detection COVID-19 System</h5>
                        </div>
                        <div class="top-menu d-flex align-items-center">                                                        
                            <div class="dropdown">
                                <a class="dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img class="avatar" src="<?php echo base_url() ?>assets/admin/img/user.jpg" alt=""></a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">                                
                                    <a class="dropdown-item" href="<?php echo base_url('admin/login/logout') ?>"><i class="ik ik-power dropdown-icon"></i> Logout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <div class="page-wrap">
                <div class="app-sidebar colored">
                    <div class="sidebar-header">
                        <a class="header-brand" href="index.html">
                            <div class="logo-img">
                               <img src="<?php echo base_url() ?>assets/landing/img/mas_icon.png" class="header-brand-img" alt="lavalite" height="30" style="margin-bottom: 5px;"> 
                            </div>
                            <span class="text" style="margin-top: 10px;">MAS Sumbiri</span>
                        </a>
                        <button type="button" class="nav-toggle"><i data-toggle="expanded" class="ik ik-toggle-right toggle-icon"></i></button>
                        <button id="sidebarClose" class="nav-close"><i class="ik ik-x"></i></button>
                    </div>
                    
                    <div class="sidebar-content">
                        <div class="nav-container">
                            <nav id="main-menu-navigation" class="navigation-main">
                                <div class="nav-lavel">Navigation</div>
                                <div class="nav-item">
                                    <a href="<?php echo base_url('admin') ?>"><i class="ik ik-bar-chart-2"></i><span>Dashboard</span></a>
                                </div>
                                <div class="nav-item">
                                    <a href="<?php echo base_url('admin/employee') ?>"><i class="ik ik-users"></i><span>Employee</span></a>
                                </div>
                                <div class="nav-item">
                                    <a href="<?php echo base_url('admin/report') ?>"><i class="ik ik-file"></i><span>Report</span></a>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="main-content">
                    <?php $this->load->view($content); ?>
                </div>
               
                <footer class="footer">
                    <div class="w-100 clearfix">
                        <span class="text-center text-sm-left d-md-inline-block">Copyright © 2020 MAS Sumbiri Autonomation.</span>
                        <!-- <span class="float-none float-sm-right mt-1 mt-sm-0 text-center">Crafted with <i class="fa fa-heart text-danger"></i> by <a href="http://lavalite.org/" class="text-dark" target="_blank">Lavalite</a></span> -->
                    </div>
                </footer>
            </div>
        </div>

        
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script>window.jQuery || document.write('<script src="<?php echo base_url() ?>assets/admin/src/js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
        <script src="<?php echo base_url() ?>assets/admin/plugins/popper.js/dist/umd/popper.min.js"></script>
        <script src="<?php echo base_url() ?>assets/admin/plugins/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url() ?>assets/admin/plugins/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script>
        <script src="<?php echo base_url() ?>assets/admin/plugins/screenfull/dist/screenfull.js"></script>
        <script src="<?php echo base_url() ?>assets/admin/dist/js/theme.min.js"></script>
        <script src="<?php echo base_url() ?>assets/admin/plugins/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="<?php echo base_url() ?>assets/admin/plugins/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
        <script src="<?php echo base_url() ?>assets/admin/js/datatables.js"></script>                
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
