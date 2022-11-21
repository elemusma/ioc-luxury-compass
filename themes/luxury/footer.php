<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>
<!-- start footer --> 
<footer class="footer-strip-dark padding-25px-tb">
<div class="container">
<div class="row">
<!-- start logo -->
<div class="col-md-12 sm-text-center">
<div class="">
<div class="col-md-1 margin-lr-auto">
<?php
echo '<a href="' . home_url() . '">';
$logoFooter = get_field('logo_footer','options');
echo wp_get_attachment_image($logoFooter['id'],'full','',['class'=>'','style'=>'max-width:65px;width:100%;']);
/*
<img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" data-rjs="images/logo-white@2x.png" alt="" class="footer-logo">
*/
echo '</a>';
?>
</div>
<div class="col-md-9 footer-menu text-white">
<?php wp_nav_menu(array(
'menu' => 'Main Menu',
'menu_class' => 'footer'
)); ?>
</div>
<div class="col-md-2 footer-menu">
<a href="https://insideoutcreative.io/" target="_blank" title="Insideout"><img src="<?php echo home_url(); ?>/wp-content/uploads/2020/04/created-by-inside-out-focus.png" width="100"></a>
</div>

<!-- <div class="col-md-5"></div> -->
</div>
</div> 
<!-- end logo -->
<!-- start copyright -->
<!-- <div class="col-md-2"> &nbsp;</div> -->
<!-- <div class="col-md-8 footer-menu text-center">  
<?php wp_nav_menu(array(
'menu' => 'Main Menu',
'menu_class' => 'footer'
)); ?>
</div> -->
<!-- <div class="col-md-2 col-sm-12 col-xs-12 text-center text-small alt-font display-table xs-margin-10px-bottom">
<div class="display-table-cell vertical-align-middle text-white">
<a href="#" target="_blank" title="Insideout"><img src="<?php echo home_url(); ?>/wp-content/uploads/2020/04/created-by-inside-out-focus.png" width="180"></a>
</div>
</div> -->
<!-- end copyright -->
<!-- start social media -->

<!-- end social media -->
</div>
</div>
</footer>
<!-- end footer --> 
<?php
if(get_field('footer','options')):
        echo get_field('footer','options');
    endif;
?>
        <!-- start scroll to top -->
        <a class="scroll-top-arrow" href="javascript:void(0);"><i class="ti-arrow-up"></i></a>
        <!-- end scroll to top  -->
        <!-- javascript libraries -->
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/modernizr.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.easing.1.3.js"></script>
        <!-- owl carousel -->
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/owl-carousel/owl.carousel.min.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/owl-carousel/owl-carousels.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/skrollr.min.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/smooth-scroll.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.appear.js"></script>
        <!-- menu navigation -->
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/bootsnav.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.nav.js"></script>
        <!-- animation -->
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/wow.min.js"></script>
        <!-- page scroll -->
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/page-scroll.js"></script>
        <!-- swiper carousel -->
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/swiper.min.js"></script>
        <!-- counter -->
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.count-to.js"></script>
        <!-- parallax -->
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.stellar.js"></script>
        <!-- magnific popup -->
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.magnific-popup.min.js"></script>
        <!-- portfolio with shorting tab -->
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/isotope.pkgd.min.js"></script>
        <!-- images loaded -->
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/imagesloaded.pkgd.min.js"></script>
        <!-- pull menu -->
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/classie.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/hamburger-menu.js"></script>
        <!-- counter  -->
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/counter.js"></script>
        <!-- fit video  -->
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.fitvids.js"></script>
        <!-- equalize -->
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/equalize.min.js"></script>
        <!-- skill bars  -->
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/skill.bars.jquery.js"></script> 
        <!-- justified gallery  -->
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/justified-gallery.min.js"></script>
        <!--pie chart-->
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.easypiechart.min.js"></script>
        <!-- instagram -->
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/instafeed.min.js"></script>
        <!-- retina -->
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/retina.min.js"></script>
       
    
        <!-- setting -->
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script> 
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js-org/solutions.js"></script> 

<?php wp_footer(); ?>
</body>
</html>
