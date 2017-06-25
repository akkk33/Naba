<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php echo $title; ?></title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.6 -->
        <link rel="stylesheet" href="<?php echo assets('admin/bootstrap/css/bootstrap.min.css'); ?>">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="<?php echo assets('admin/dist/css/AdminLTE.min.css'); ?>">
        <link rel="stylesheet" href="<?php echo assets('admin/dist/css/AdminLTE.css'); ?>">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="<?php echo assets('admin/dist/css/skins/_all-skins.min.css'); ?>">
        <!-- iCheck -->
        <link rel="stylesheet" href="<?php echo assets('admin/plugins/iCheck/flat/blue.css'); ?>">
        <!-- Morris chart -->
        <link rel="stylesheet" href="<?php echo assets('admin/plugins/morris/morris.css'); ?>">
        <!-- jvectormap -->
        <link rel="stylesheet" href="<?php echo assets('admin/plugins/jvectormap/jquery-jvectormap-1.2.2.css'); ?>">
        <!-- Date Picker -->
        <link rel="stylesheet" href="<?php echo assets('admin/plugins/datepicker/datepicker3.css'); ?>">
        <!-- Daterange picker -->
        <link rel="stylesheet" href="<?php echo assets('admin/plugins/daterangepicker/daterangepicker-bs3.css'); ?>">
        <!-- bootstrap wysihtml5 - text editor -->
        <link rel="stylesheet" href="<?php echo assets('admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css'); ?>">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">

            <header class="main-header">
                <!-- Logo -->
                <a href="../index2.html" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini"><b>T</b>SW</span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg"><b>Blog</b>Cpanel</span>
                </a>
                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top">
                    <!-- Sidebar toggle button-->
                    <a href="../#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                    </a>

                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <!-- Messages: style can be found in dropdown.less-->

                            <!-- Notifications: style can be found in dropdown.less -->


                            <!-- User Account: style can be found in dropdown.less -->
                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                  <!-- <img src="../dist/img/user2-160x160.jpg" class="user-image" alt="User Image"> -->
                                    <span class="hidden-xs">Amr</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- User image -->
                                    <li class="user-header">
                                      <!-- <img src="../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image"> -->

                                        <p>
                                            Amr - Web Developer
                                            <small>Member since September. 2016</small>
                                        </p>
                                    </li>
                                    <!-- Menu Body -->
                                    <li class="user-body">
                                        <div class="row">
                                            <div class="col-xs-4 text-center">
                                                <a href="#">Followers</a>
                                            </div>
                                            <div class="col-xs-4 text-center">
                                                <a href="#">Sales</a>
                                            </div>
                                            <div class="col-xs-4 text-center">
                                                <a href="#">Friends</a>
                                            </div>
                                        </div>
                                        <!-- /.row -->
                                    </li>
                                    <!-- Menu Footer-->
                                    <li class="user-footer">
                                        <div class="pull-left">
                                            <a href="../#" class="btn btn-default btn-flat">Profile</a>
                                        </div>
                                        <div class="pull-right">
                                            <a href="<?php echo url('/admin/logout'); ?>" class="btn btn-default btn-flat">Logout</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>