<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-171432717-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-171432717-1');
</script>

<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<!-- owl carousel -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/owl-carousel/owl.carousel.min.css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/owl-carousel/owl.theme.default.min.css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/owl-carousel/owl-carousel-custom.css" />
<!-- bootstrap better -->
<!-- <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/org-css/bootstrap.min.css" /> -->
 <!-- animation -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animate.css" />
        <!-- bootstrap -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" />
        <!-- et line icon --> 
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/et-line-icons.css" />
        <!-- font-awesome icon -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css" />
        <!-- themify icon -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/themify-icons.css">
        <!-- swiper carousel -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/swiper.min.css">
        <!-- justified gallery  -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/justified-gallery.min.css">
        <!-- magnific popup -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/magnific-popup.css" />
     
        <!-- bootsnav -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootsnav.css">
        <!-- style -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css" />
        <!-- responsive css -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/responsive.css" />
        <!--[if IE]>
            <script src="js/html5shiv.js"></script>
        <![endif]-->
        <?php if(get_field('custom_css')): ?>
            <style>
            <?php the_field('custom_css'); ?>
            </style>
        <?php endif; ?>


<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<!-- start header -->
<header>
<!-- start navigation -->
<nav class="navbar navbar-default bootsnav bg-transparent white-link navbar-top navbar-transparent-no-sticky">
<div class="hero-fade"></div>
<div class="container-fluid nav-header-container height-100px padding-three-half-lr xs-height-70px xs-padding-15px-lr">
<!-- start header navigation -->
<div class="row">

<div class="col-md-2 col-sm-2 col-xs-2 text-left">
<div class="hamburger-menu">
<div class="btn btn-hamburger border-none">
<button class="navbar-toggle mobile-toggle" type="button" id="open-button" data-toggle="collapse" data-target=".navbar-collapse">
<span></span>
<span></span>
<span></span>
</button>
</div>
<div class="hamburger-menu-wrepper xs-text-center">
<div class="hamburger-logo text-left">
<a class="logo" href="<?php echo home_url(); ?>">
<img src="<?php echo home_url(); ?>/wp-content/uploads/2020/04/Luxur-Logo.png" data-rjs="images/logo-full-white@2x.png" alt="Pofo">
</a>
</div>
<div class="btn btn-hamburger border-none">
<button class="close-menu close-button-menu" id="close-button"></button>
</div>
<div class="animation-box">
<div class="menu-middle">
<div class="menu-wrapper display-table-cell vertical-align-middle text-left">
<div class="equalize no-margin">
    <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12 display-table">
        <div class="display-table-cell vertical-align-middle">
        <?php wp_nav_menu(array(
'menu' => 'Main Menu',
'menu_class'=>'hamburger-menu-links alt-font'
)); ?>
            <!-- <ul class="hamburger-menu-links alt-font">
                <li><a href="home-classic-corporate.html" title="Home">Home</a></li>
                <li><a href="about-me.html" title="Pages">Pages</a></li>
                <li><a href="portfolio-full-width-grid-overlay.html" title="Portfolio">Portfolio</a></li>
                <li><a href="blog-standard-full-width.html" title="Blog">Blog</a></li>
                <li><a href="accordions.html" title="Contact">Elements</a></li>
                <li><a href="transparent-header.html" title="Shortcode">Features</a></li>
            </ul> -->
        </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12 display-table">
        <div class="display-table-cell vertical-align-middle social-style-3">
            <span class="text-extra-large text-deep-pink alt-font display-block margin-15px-bottom">Address Here</span>
            <span class="text-medium alt-font display-block font-weight-300 margin-15px-bottom line-height-30">P.O Box 1783<br>Windermere<br>FL 34786<br/>Email - <a href="mailto:Info@theluxurycompass.com" class="text-white" target="_blank">Info@theluxurycompass.com</a></span>
            <div class="separator-line-horrizontal-medium-light2 bg-deep-pink margin-25px-tb xs-margin-15px-tb display-inline-block"></div>
            <div class="social-icon-style-9">
                <ul class="small-icon">
                    <li><a class="margin-20px-right twitter" href="https://twitter.com/TracySolly" target="_blank"><i class="fab fa-twitter"></i></a></li>
                    <li><a class="margin-20px-right twitter" href="https://www.linkedin.com/company/the-luxury-compass/about/" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                    <li><a class="margin-20px-right twitter" href="https://www.instagram.com/tracy_a_solly/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- start logo -->
<div class="col-md-8 col-sm-8 col-xs-8 text-center xs-text-left">
<a class="logo" href="<?php echo home_url(); ?>">
<img src="<?php echo home_url(); ?>/wp-content/uploads/2020/04/Luxur-Logo.png" data-rjs="images/logo-full-white@2x.png" class="default" alt="Luxury Compas"></a>
</div>
<!-- end logo -->

</div>



</div>
<!-- End Header Navigation -->
</nav>
<!-- end navigation -->
</header>
<!-- end header -->