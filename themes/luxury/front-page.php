<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); 
get_template_part('partials/hero');
?>
<!-- start about section -->
<section class="wow fadeIn cover-background sm-no-background-img about-section" style=" background:url(<?php echo home_url(); ?>/wp-content/uploads/2020/03/about-bg.jpg); visibility: visible; animation-name: fadeIn;">
<div class="background-image"></div>
<div class="container">
<div class="row"> 
<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 pull-right wow fadeIn" style="visibility:visible; animation-name:fadeIn;">
<div class="col-lg-12 col-md-12 sm-text-center about"> 
<div class="about-first-half">
<div class="about-before"></div>
<div class="about-middle"></div>
</div>
<div class="about-after"></div>
<div class="about-details text-white">
<div class="col-md-3">
<img src="<?php echo home_url(); ?>/wp-content/uploads/2020/03/Tracy-Solly-Thumbnail.jpg" alt="">
</div>
<h4 class="bodoni">About</h4>
<h5 class="">
Tracy Solly
</h5>
<p><em>Independent Properties, Independent Thinking.</em></p>
<p class="sm-width-100">Inspired by the pursuit for excellence and growth, Tracy has dedicated her professional career to bringing value to a unique array of hotels and resorts under her management. Vision-driven, with a career-long record of hospitality management, marketing and sales success for leading hotels and leisure organizations, Tracy Solly’s The Luxury Compass is a one-of-a-kind.</p>
</div>
</div>                          

</div> 
</div>
</div>
</section>
<!-- end about section -->
<section class="wow fadeIn bg-light-gray market-section position-relative">
<div class="container-fluid">
<div class="border"></div>
<div class="row equalize sm-equalize-auto">
<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 wow fadeInLeft">
<img src="<?php echo home_url(); ?>/wp-content/uploads/2020/03/Unique-Markets-Building-with-Leaves-Hanging-Beautiful.jpg" alt="" style="position: relative;height:calc(100% + 50px);object-fit: cover;object-position: left;" class="img-slider-main">
</div>
<div class="col-lg-8 col-md-6 col-sm-12 col-xs-12 wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">    
<div class="slider-background">
<div class="text-center" style="padding-top:25px;">
<div class="markets-title">
<h4>Our unique markets</h4>
<h2>EXPLORE</h2>
</div>
</div>
<div class="swiper-container black-move blog-slider swiper-three-slides swiper-pagination-bottom">
<div class="swiper-wrapper">
<!-- start explore item -->
<div class="swiper-slide team-block text-left team-style-1 wow fadeInUp">
<figure>
<figcaption>
<div class="team-member-position margin-20px-top explore-title">
<h5>OUR UNIQUE MARKETS </h5>
<h3 class="bodoni">North America &amp; Canada</h3>
</div>   
</figcaption>
<div class="team-image xs-width-100">
<img src="<?php echo get_template_directory_uri(); ?>/images/explore1.jpg" alt="">
<div class="overlay-content text-center">
<div class="display-table height-100 width-100">
<div class="vertical-align-middle display-table-cell icon-social-small">
    <p>With a flair for classy rustic properties, Tracy Solly has a diversified portfolio of high-quality North American and Canadian properties.</p>
    <a href="<?php echo home_url(); ?>/markets/north-america-canada/" class="btn btn-info">READ MORE</a>
</div>
</div>
</div>
<div class="team-overlay bg-black opacity8"></div>
</div>

</figure>
</div>
<!-- end explore item -->
<!-- start explore item -->
<div class="swiper-slide team-block text-left team-style-1 wow fadeInUp">
<figure>
<figcaption>
<div class="team-member-position margin-20px-top explore-title">
<h5>OUR UNIQUE MARKETS </h5>
<h3 class="bodoni">EUROPEAN </h3>
</div>   
</figcaption>
<div class="team-image xs-width-100">
<img src="<?php echo get_template_directory_uri(); ?>/images/explore2.jpg" alt="">
<div class="overlay-content text-center">
<div class="display-table height-100 width-100">
<div class="vertical-align-middle display-table-cell icon-social-small">
    <p>There is nothing more sophisticated and beautiful than the properties found in Europe.</p>
    <a href="<?php echo home_url(); ?>/markets/european/" class="btn btn-info">READ MORE</a>
</div>
</div>
</div>
<div class="team-overlay bg-black opacity8"></div>
</div>

</figure>
</div>
<!-- end explore item -->
<!-- start explore item -->
<div class="swiper-slide team-block text-left team-style-1 wow fadeInUp">
<figure>
<figcaption>
<div class="team-member-position margin-20px-top explore-title">
<h5>OUR UNIQUE MARKETS </h5>
<h3 class="bodoni">TROPICAL </h3>
</div>   
</figcaption>
<div class="team-image xs-width-100">
<img src="<?php echo get_template_directory_uri(); ?>/images/explore3.jpg" alt="">
<div class="overlay-content text-center">
<div class="display-table height-100 width-100">
<div class="vertical-align-middle display-table-cell icon-social-small">
    <p>Includes many diverse properties in the warm, tropical weather of Florida, the Bahamas and other island regions.</p>
    <a href="<?php echo home_url(); ?>/markets/tropical/" class="btn btn-info">READ MORE</a>
</div>
</div>
</div>
<div class="team-overlay bg-black opacity8"></div>
</div>

</figure>
</div>
<!-- end explore item -->    
</div>                        
<!-- <div class="swiper-pagination swiper-pagination-four-slides"></div> -->
<!-- add arrows -->
<div class="swiper-button-next">&#62;</div>
<div class="swiper-button-prev">&#60;</div>
</div>
</div>
</div> 
</div>
</div>
</section>
        <div class="text-center" style="padding-top: 5rem;padding-bottom: 5rem;">
        <div class="container">
        <h2>Turnkey Solutions</h2>
        </div>

<img src="<?php echo home_url(); ?>/wp-content/uploads/2020/03/Shadow-Upwards.png">
        </div>
<section class="parallax wow fadeIn solutions position-relative" data-stellar-background-ratio="0.2" style=" background-image:url(<?php echo home_url(); ?>/wp-content/uploads/2020/03/Turnkey-Solutions.jpg); background-size:cover; visibility: visible; animation-name: fadeIn;">
<!-- <div class="opacity-medium bg-extra-dark-gray"></div> -->
<!-- <button id="btn-click">click here</button> -->
<div class="overlay-image" id="img-appraisal"></div>
<div class="overlay-image" id="img-marketing"></div>
<div class="overlay-image" id="img-management"></div>

<div class="container position-relative z-index-5">
<div class="row">

<!-- start feature box item -->
<div class="col-md-4 col-sm-4 wow zoomIn last-paragraph-no-margin" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: zoomIn;">
<div class="text-center padding-eighteen-all feature-box-13 position-relative md-padding-ten-all sm-padding-25px-all xs-padding-eight-all" id="appraisal">
<div class="overlay"></div>

<p class="text-medium text-white alt-font">YOUR PROPERTY</p>
<h3 class="text-white bodoni">Vision &amp; Goals</h3>
<div class="feature-box-overlay bg-black"></div>
</div>
</div>
<!-- end feature box item -->
<!-- start feature box item -->
<div class="col-md-4 col-sm-4 wow zoomIn last-paragraph-no-margin" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: zoomIn;">
<div class="text-center padding-eighteen-all feature-box-13 position-relative md-padding-ten-all sm-padding-25px-all xs-padding-eight-all" id="marketing">
<div class="overlay"></div>
<p class="text-medium text-white alt-font">YOUR PROPERTY</p>
<h3 class="text-white bodoni">Strategy &amp; Plan</h3>
<div class="feature-box-overlay bg-black-opacity"></div>
</div>
</div>
<!-- end feature box item -->
<!-- start feature box item -->
<div class="col-md-4 col-sm-4 wow zoomIn last-paragraph-no-margin" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: zoomIn;">
<div class="text-center padding-eighteen-all feature-box-13 position-relative md-padding-ten-all sm-padding-25px-all xs-padding-eight-all"id="management">
<div class="overlay"></div>
<p class="text-medium text-white alt-font">YOUR PROPERTY</p>
<h3 class="text-white bodoni">Execute &amp; Review</h3>
<div class="feature-box-overlay bg-black"></div>
</div>
</div>
<!-- end feature box item -->
</div>
</div>
</section>


<section class="wow fadeIn no-padding one-fourth-screen sm-height-500px xs-height-350px background-position-x-50">
<img src="<?php echo get_template_directory_uri(); ?>/images/fixed-img.jpg" alt="" style="visibility: visible; animation-name: fadeIn;">
    <!-- <div class="container">
        <div class="row">
            <div class="col-md-12"></div>
        </div>
    </div> -->
</section>
<div class="bg-dark-footer padding-50px-tb xs-padding-30px-tb">
<div class="container">
<div class="row equalize xs-equalize-auto">



<!-- start slogan -->
<div class="col-md-12 col-xs-12 text-center alt-font display-table xs-text-center xs-margin-15px-bottom cta" style="height: 38px;">
<div class="display-table-cell vertical-align-middle text-capitalize text-center">
<p class="phone">CALL US TODAY <a href="tel:+14075797232">407.579.7232</a></p>
</div>
</div>

</div>
</div>
</div>     
<section class="wow fadeIn contact-form" style="visibility: visible; animation-name: fadeIn;">
<div class="container">
<div class="row text-center"> 

<div class="col-md-8 wow fadeIn" style="visibility: visible; animation-name: fadeIn; margin:0 20%;">
<div class="padding-ten-all border-radius-6 md-padding-seven-all" style="background:#C8B69B;margin-bottom: 9rem;">
<h2 class="sans-serif">QUESTIONS?</h2> 
<div>
<?php echo do_shortcode('[contact-form-7 id="47" title="Contact"]'); ?>
</div>
</div>
</div>
</div>
</div>
<img src="<?php echo get_template_directory_uri(); ?>/images/divider.png">
<div class="container">
<div class="row">
<div class="col-12 text-center partner-logos owl-carousel owl-theme">
<img src="<?php echo home_url(); ?>/wp-content/uploads/2020/06/Hilton.png" alt="" data-no-retina="">
<img src="<?php echo home_url(); ?>/wp-content/uploads/2020/06/Hotel-Missoni.png" alt="" data-no-retina="">
<img src="<?php echo home_url(); ?>/wp-content/uploads/2020/06/Hyatt-Hotel.png" alt="" data-no-retina="">
<img src="<?php echo home_url(); ?>/wp-content/uploads/2020/06/IHG.png" alt="" data-no-retina="">
<img src="<?php echo home_url(); ?>/wp-content/uploads/2020/06/Macdonalds.png" alt="" data-no-retina="">
<img src="<?php echo home_url(); ?>/wp-content/uploads/2020/06/Marriott.png" alt="" data-no-retina="">
<img src="<?php echo home_url(); ?>/wp-content/uploads/2020/06/Principal.png" alt="" data-no-retina="">
<img src="<?php echo home_url(); ?>/wp-content/uploads/2020/06/Windham.png" alt="" data-no-retina="">
<img src="<?php echo home_url(); ?>/wp-content/uploads/2020/06/The-Machrie-Hotel.png" alt="" data-no-retina="">
<img src="<?php echo home_url(); ?>/wp-content/uploads/2020/07/Private-Flight-Advisors.png" alt="" data-no-retina="">
</div>
</div>
</div>
</section>
<?php get_footer(); ?>
