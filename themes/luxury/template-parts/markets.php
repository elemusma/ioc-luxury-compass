<?php 

/**
 * 
 * Template Name: Individual Markets
 */

 get_header();
 get_template_part('partials/hero');
?>
<section class="wow fadeIn bg-light-gray market-section position-relative individual-market">
<div class="container-fluid">
<div class="border"></div>
<div class="row equalize sm-equalize-auto">
<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 wow fadeInLeft">
<?php $image = get_field('main_image'); ?>
<?php if($image){ ?>
<img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>" class="img-slider-main ind-markets" style="position: relative;height:calc(100% + 50px);object-fit: cover;object-position: left;">
<?php }else{ ?>
    <img src="<?php echo home_url(); ?>/wp-content/uploads/2020/03/Unique-Markets-Building-with-Leaves-Hanging-Beautiful.jpg" alt="" style="position: relative;height:calc(100% + 50px);object-fit: cover;object-position: left;" class="img-slider-main ind-markets">
<?php } ?>
    
</div>
<div class="col-lg-8 col-md-6 col-sm-12 col-xs-12 wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">    
    <div class="slider-background">
<div class="text-center" style="padding-top:25px;">
    <div class="markets-title">
    <h4><?php the_field('main_title'); ?></h4>
    <h2><?php the_field('secondary_title'); ?></h2>
    </div>
    <div class="markets-title content">
    <?php the_field('short_description'); ?>
    </div>
</div>
<!-- start of content -->
<div class="page-content">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
the_content();
endwhile; else: ?>
<p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>
</div>
<!-- end of content -->

    </div>
</div> 

</div>
</div>
</section>


<?php get_footer(); ?>