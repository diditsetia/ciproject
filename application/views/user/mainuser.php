
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Booster &mdash; A free HTML5 Template by FREEHTML5.CO</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
    <meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
    <meta name="author" content="FREEHTML5.CO" />

  <!-- 
    //////////////////////////////////////////////////////

    FREE HTML5 TEMPLATE 
    DESIGNED & DEVELOPED by FREEHTML5.CO
        
    Website:        http://freehtml5.co/
    Email:          info@freehtml5.co
    Twitter:        http://twitter.com/fh5co
    Facebook:       https://www.facebook.com/fh5co

    //////////////////////////////////////////////////////
     -->

  <!-- Facebook and Twitter integration -->
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />
   
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="favicon.ico">

    <!-- Google Webfonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100,500' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    
    <!-- Animate.css -->
    <link rel="stylesheet" href="<?php echo base_url('assets/frontend/css/animate.css') ?>">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="<?php echo base_url('assets/frontend/css/icomoon.css') ?>">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="<?php echo base_url('assets/frontend/css/owl.carousel.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/frontend/css/owl.theme.default.min.css') ?>">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="<?php echo base_url('assets/frontend/css/magnific-popup.css') ?>">
    <!-- Theme Style -->
    <link rel="stylesheet" href="<?php echo base_url('assets/frontend/css/style.css') ?>">
    <!-- Modernizr JS -->
    <script src="<?php echo base_url('assets/frontend/js/modernizr-2.6.2.min.js') ?>"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="js/respond.min.js"></script>
    <![endif]-->

    <style type="text/css">
        #fh5co-features {
        padding: 1em 0;
        background: rgba(0, 0, 0, 0.02);
        }

        #fh5co-footer {
        padding: 0em 0;
        border-top: 1px solid #e9e9e9;
        }

        .fh5co-row-padded {
         padding: 20px 0;
        }

        .fh5co-spacer-md {
        height: 20px;
        }
    </style>

    </head>
    <body>
        
    <header id="fh5co-header" role="banner">
       <!-- navbar -->

        <?php echo $navbar;?>
       <!-- end navbar -->
    </header>
    <!-- END .header -->
    
        <!-- slider -->

        <div class="fh5co-slider">
           
        <?php echo $slider;?>
        </div>
    

        <!-- end slidebar -->


    <div id="fh5co-main">
        <!-- Features -->

        
               <!-- navbar konten -->

        <?php echo $navbarkonten;?>

              <!--  end navbar konten -->
                
                    <!-- konten -->

        <?php echo $konten;?>
                    <!-- end konten -->
              
        </div>
    
    </div>

    <footer id="fh5co-footer">
        <center>
        
        <?php echo $footer;?>
    </center>

    </footer>


    <!-- jQuery -->
    <script src="<?php echo base_url('assets/frontend/js/jquery.min.js') ?>"></script>
    <!-- jQuery Easing -->
    <script src="<?php echo base_url('assets/frontend/js/jquery.easing.1.3.js') ?>"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url('assets/frontend/js/bootstrap.min.js') ?>"></script>
    <!-- Owl carousel -->
    <script src="<?php echo base_url('assets/frontend/js/owl.carousel.min.js') ?>"></script>
    <!-- Waypoints -->
    <script src="<?php echo base_url('assets/frontend/js/jquery.waypoints.min.js') ?>"></script>
    <!-- Magnific Popup -->
    <script src="<?php echo base_url('assets/frontend/js/jquery.magnific-popup.min.js') ?>"></script>
    <!-- Main JS -->
    <script src="<?php echo base_url('assets/frontend/js/main.js') ?>"></script>

    

    
    </body>
</html>
