<?php
/**
 * 
 * Template Name: Unique Markets
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); 
get_template_part('partials/hero');
?>

<!-- start about section -->
<section class="wow fadeIn cover-background sm-no-background-img about-section unique-markets" style=" visibility: visible; animation-name: fadeIn;">
<div class="background-image"></div>
<div class="container">
<div class="row" style="">
<div class="col-md-1"></div>
<div class="col-md-3 img--main">

<img src="<?php echo home_url(); ?>/wp-content/themes/luxury/images/explore1.jpg" alt="Why Tracy Solly">
</div>
<div class="col-lg-6 col-md-6 sm-text-center about"> 
<div class="about-first-half">
<div class="about-before"></div>
<div class="about-middle"></div>
</div>
<div class="about-after"></div>
<div class="about-details text-white">
<div class="page details">
<h4 class="bodoni">North America &amp; Canada</h4>
<h5 class="">
Our Unique Markets
</h5>
</div>
<p>With a flair for classy rustic properties, Tracy Solly has a diversified portfolio of high-quality North American and Canadian properties.<br>
<a href="<?php echo home_url(); ?>/markets/north-america-canada/" class="btn btn-info">READ MORE</a>
</p>

</div>
</div>

</div>
<?php if(get_field('content_title')): ?>
<div class="long-content row">
<div class="col-md-1"></div>
<div class="col-md-3"></div>
<div class="col-md-6">

<div class="content">
<h5><?php the_field('content_title'); ?></h5>
<?php the_field('content_description'); ?>
</div>

</div>
</div>
<?php endif; ?>

</div>




<div class="container">
<div class="row" style="">

<div class="col-md-1"></div>
<div class="col-lg-6 col-md-6 sm-text-center about"> 
<div class="about-first-half">
<div class="about-before"></div>
<div class="about-middle"></div>
</div>
<div class="about-after"></div>
<div class="about-details text-white">
<div class="page details">
<h4 class="bodoni">European</h4>
<h5 class="">
Our Unique Markets
</h5>
</div>
<p>There is nothing more sophisticated and beautiful than the properties found in Europe.<br>
<a href="<?php echo home_url(); ?>/markets/european/" class="btn btn-info">READ MORE</a>
</p>

</div>
</div>

<div class="col-md-3 img--main">

<img src="<?php echo home_url(); ?>/wp-content/themes/luxury/images/explore2.jpg" alt="Why Tracy Solly">

</div>
</div>
<?php if(get_field('content_title')): ?>
<div class="long-content row">
<div class="col-md-1"></div>
<div class="col-md-3"></div>
<div class="col-md-6">

<div class="content">
<h5><?php the_field('content_title'); ?></h5>
<?php the_field('content_description'); ?>
</div>

</div>
</div>
<?php endif; ?>

</div>



<div class="container">
<div class="row" style="">
<div class="col-md-1"></div>
<div class="col-md-3 img--main">

<img src="<?php echo home_url(); ?>/wp-content/themes/luxury/images/explore3.jpg" alt="Why Tracy Solly">

</div>
<div class="col-lg-6 col-md-6 sm-text-center about"> 
<div class="about-first-half">
<div class="about-before"></div>
<div class="about-middle"></div>
</div>
<div class="about-after"></div>
<div class="about-details text-white">
<div class="page details">
<h4 class="bodoni">Tropical</h4>
<h5 class="">
Our Unique Markets
</h5>
</div>
<p>Located in and based out of sunny Florida, The Luxury Compass has intentionally grown their management to include many diverse properties.<br>
<a href="<?php echo home_url(); ?>/markets/tropical/" class="btn btn-info">READ MORE</a>
</p>


</div>
</div>

</div>
<?php if(get_field('content_title')): ?>
<div class="long-content row">
<div class="col-md-1"></div>
<div class="col-md-3"></div>
<div class="col-md-6">

<div class="content">
<h5><?php the_field('content_title'); ?></h5>
<?php the_field('content_description'); ?>
</div>

</div>
</div>
<?php endif; ?>

</div>
<div class="container">
<div class="row">
<div class="col-md-12">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
        the_content();
        endwhile; else: ?>
        <p>Sorry, no posts matched your criteria.</p>
        <?php endif; ?>
        </div>
</div>
</div>
        </section>
        <!-- end about section -->

<?php get_footer(); ?>
