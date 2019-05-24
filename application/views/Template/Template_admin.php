<!DOCTYPE html>
<html lang="en">
<head>
    <!--
        ===
        This comment should NOT be removed.

        Charisma v2.0.0

        Copyright 2012-2014 Muhammad Usman
        Licensed under the Apache License v2.0
        http://www.apache.org/licenses/LICENSE-2.0

        http://usman.it
        http://twitter.com/halalit_usman
        ===
    -->
    <meta charset="utf-8">
    <title>Laboraturium Nutrisi UGM</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The styles -->
    <!-- <link href="<?= base_url('assets/Admin/Admin')?>css/bootstrap-darkly.min.css" rel="stylesheet"> -->
    <link href="<?= base_url('assets/Admin/')?>css/bootstrap-cerulean.min.css" rel="stylesheet">
    <!-- <link href="<?= base_url('assets/Admin/')?>css/bootstrap-spacelab.min.css" rel="stylesheet"> -->
    <!-- <link href="<?= base_url('assets/Admin/')?>css/bootstrap-cyborg.min.css" rel="stylesheet"> -->
    <!-- <link href="<?= base_url('assets/Admin/')?>css/bootstrap-slate.min.css" rel="stylesheet"> -->
    <!-- <link href="<?= base_url('assets/Admin/')?>css/bootstrap-lumen.min.css" rel="stylesheet"> -->
    <!-- <link href="<?= base_url('assets/Admin/')?>css/bootstrap-simplex.min.css" rel="stylesheet"> -->

    <link href="<?= base_url('assets/Admin/')?>css/charisma-app.css" rel="stylesheet">
    <link href='<?= base_url('assets/Admin/')?>bower_components/fullcalendar/dist/fullcalendar.css' rel='stylesheet'>
    <link href='<?= base_url('assets/Admin/')?>bower_components/fullcalendar/dist/fullcalendar.print.css' rel='stylesheet' media='print'>
    <link href='<?= base_url('assets/Admin/')?>bower_components/chosen/chosen.min.css' rel='stylesheet'>
    <link href='<?= base_url('assets/Admin/')?>bower_components/colorbox/example3/colorbox.css' rel='stylesheet'>
    <link href='<?= base_url('assets/Admin/')?>bower_components/responsive-tables/responsive-tables.css' rel='stylesheet'>
    <link href='<?= base_url('assets/Admin/')?>bower_components/bootstrap-tour/build/css/bootstrap-tour.min.css' rel='stylesheet'>
    <link href='<?= base_url('assets/Admin/')?>css/jquery.noty.css' rel='stylesheet'>
    <link href='<?= base_url('assets/Admin/')?>css/noty_theme_default.css' rel='stylesheet'>
    <link href='<?= base_url('assets/Admin/')?>css/elfinder.min.css' rel='stylesheet'>
    <link href='<?= base_url('assets/Admin/')?>css/elfinder.theme.css' rel='stylesheet'>
    <link href='<?= base_url('assets/Admin/')?>css/jquery.iphone.toggle.css' rel='stylesheet'>
    <link href='<?= base_url('assets/Admin/')?>css/uploadify.css' rel='stylesheet'>
    <link href='<?= base_url('assets/Admin/')?>css/animate.min.css' rel='stylesheet'>

    <!-- jQuery -->
    <script src="<?= base_url('assets/Admin/')?>bower_components/jquery/jquery.min.js"></script>

    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- external javascript -->


    <script src="<?= base_url('assets/Admin/')?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- library for cookie management -->
    <script src="<?= base_url('assets/Admin/')?>js/jquery.cookie.js"></script>
    <!-- calender plugin -->
    <script src='<?= base_url('assets/Admin/')?>bower_components/moment/min/moment.min.js'></script>
    <script src='<?= base_url('assets/Admin/')?>bower_components/fullcalendar/dist/fullcalendar.min.js'></script>
    <!-- data table plugin -->
    <script src='<?= base_url('assets/Admin/')?>js/jquery.dataTables.min.js'></script>

    <!-- select or dropdown enhancer -->
    <script src="<?= base_url('assets/Admin/')?>bower_components/chosen/chosen.jquery.min.js"></script>
    <!-- plugin for gallery image view -->
    <script src="<?= base_url('assets/Admin/')?>bower_components/colorbox/jquery.colorbox-min.js"></script>
    <!-- notification plugin -->
    <script src="<?= base_url('assets/Admin/')?>js/jquery.noty.js"></script>
    <!-- library for making tables responsive -->
    <script src="<?= base_url('assets/Admin/')?>bower_components/responsive-tables/responsive-tables.js"></script>
    <!-- tour plugin -->
    <script src="<?= base_url('assets/Admin/')?>bower_components/bootstrap-tour/build/js/bootstrap-tour.min.js"></script>
    <!-- star rating plugin -->
    <script src="<?= base_url('assets/Admin/')?>js/jquery.raty.min.js"></script>
    <!-- for iOS style toggle switch -->
    <script src="<?= base_url('assets/Admin/')?>js/jquery.iphone.toggle.js"></script>
    <!-- autogrowing textarea plugin -->
    <script src="<?= base_url('assets/Admin/')?>js/jquery.autogrow-textarea.js"></script>
    <!-- multiple file upload plugin -->
    <script src="<?= base_url('assets/Admin/')?>js/jquery.uploadify-3.1.min.js"></script>
    <!-- history.js for cross-browser state change on ajax -->
    <script src="<?= base_url('assets/Admin/')?>js/jquery.history.js"></script>
    <!-- application script for Charisma demo -->
    <script src="<?= base_url('assets/Admin/')?>js/charisma.js"></script>
    <script src="<?php echo base_url('assets/Admin/')?>js/bootstrap-notify.js"></script>



    <!-- The fav icon -->
    <link rel="shortcut icon" href="<?= base_url('assets/Admin/')?>img/logo20.png">

</head>

<body class="bg-purple">
    <!-- topbar starts -->
    <div class="navbar navbar-default  navbar-fixed-top" role="navigation">

        <div class="navbar-inner">
            <button type="button" class="navbar-toggle pull-left animated flip">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html"> <img alt="Charisma Logo" src="<?= base_url('assets/Admin/')?>img/logo20.png" class="hidden-xs"/>
                <span>LAB-NUTRISI</span></a>

            <!-- user dropdown starts -->
            <div class="btn-group pull-right" style="transform: translateX(-15%);">
                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <i class="glyphicon glyphicon-user"></i><span class="hidden-sm hidden-xs">   <?= $_SESSION['Admin']->username?></span>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li><a href="#">Profile</a></li>
                    <li class="divider"></li>
                    <li><a href="<?= base_url('Admin/ControllerAdmin/Login/logout')?>">Logout</a></li>
                </ul>
            </div>

            <ul class="collapse navbar-collapse nav navbar-nav top-menu">
                <li><a href="#"><i class="glyphicon glyphicon-globe"></i> Visit Site</a></li>
                <li class="dropdown">
                    <a href="#" data-toggle="dropdown"><i class="glyphicon glyphicon-star"></i> Dropdown <span
                            class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                        <li class="divider"></li>
                        <li><a href="#">One more separated link</a></li>
                    </ul>
                </li>
                <li>
                    <form class="navbar-search pull-left">
                        <input placeholder="Search" class="search-query form-control col-md-10" name="query"
                               type="text">
                    </form>
                </li>
            </ul>

        </div>
    </div>
    <!-- topbar ends -->
<div class="ch-container">
    <div class="row">
        
            <?php include "Menu.php"?>

            <noscript>
                <div class="alert alert-block col-md-12">
                    <h4 class="alert-heading">Warning!</h4>

                    <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a>
                        enabled to use this site.</p>
                </div>
            </noscript>

            <div id="content" class="col-lg-10 col-sm-10">

            <?= $contents?>
            </div><!--/row-->
        <!-- content ends -->
    </div><!--/#content.col-md-0-->
</div><!--/fluid-row-->



    <footer align="center" class="row" style="padding-top:20px;" >
        <p class="col-md-12 col-sm-12 col-xs-12 copyright">&copy; <a href="http://usman.it" target="_blank">Lab-Nutrisi-Fakultas-Peternakan-UGM</a> 2018 - 2019</p>
    </footer>

</div><!--/.fluid-container-->


</body>
</html>
