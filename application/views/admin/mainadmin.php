<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Light Bootstrap Dashboard by Creative Tim</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="<?php echo base_url('assets/admin/css/bootstrap.min.css') ?>" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="<?php echo base_url('assets/admin/css/animate.min.css') ?>" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="<?php echo base_url('assets/admin/css/light-bootstrap-dashboard.css') ?>" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>


    <style type="text/css">
        .sidebar .logo, body > .navbar-collapse .logo {
            padding: 12px 15px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
            }
    </style>
</head>
<body>

<div class="wrapper">
    <!-- sidebarmenu-->

        <?php echo $sidebar;?>

    <!-- end sidebar menu -->
    <div class="main-panel">
    <!--   navbar -->

        <?php echo $navbar;?>

    <!-- navbar end -->


        <div class="content" style="background-color:#FFFFFF">
           <!--  conten -->
            <?php echo $konten;?>
           <!-- end conten -->
        </div>


        <!-- footer -->
        <?php echo $footer;?>
        <!-- end footer-->
    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="<?php echo base_url('assets/admin/js/jquery-1.10.2.js') ?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/admin/js/bootstrap.min.js') ?>" type="text/javascript"></script>

    <!--  Checkbox, Radio & Switch Plugins -->
    <script src="<?php echo base_url('assets/admin/js/bootstrap-checkbox-radio-switch.js') ?>"></script>

    <!--  Charts Plugin -->
    <script src="<?php echo base_url('assets/admin/js/chartist.min.js') ?>"></script>

    <!--  Notifications Plugin    -->
    <script src="<?php echo base_url('assets/admin/js/bootstrap-notify.js') ?>"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
    <script src="<?php echo base_url('assets/admin/js/light-bootstrap-dashboard.js') ?>"></script>

    
</html>
