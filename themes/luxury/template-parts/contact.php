<?php 

/**
 * Template Name: Contact
 */

 get_header();
//  get_template_part('partials/hero');
 ?>
<section class="wow fadeIn contact-form" style="visibility: visible; animation-name: fadeIn;">
<div class="container">
<div class="row"> 
    <div class="col-md-12">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
the_content();
endwhile; else: ?>
<p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>
    </div>

<div class="col-md-8 wow fadeIn  text-center" style="visibility: visible; animation-name: fadeIn; margin:0 20%;">
<div class="padding-ten-all border-radius-6 md-padding-seven-all" style="background:#b5ab96;margin-bottom: 9rem;">
<h2 class="sans-serif" style="color:black;">QUESTIONS?</h2> 
<p>At The Luxury Compass, we make full and effective use of a range of commercial platforms. These platforms allow our clients to discover new market opportunities in a highly cost-effective manner, therefore helping you get the best possible returns from your budget.</p>

<p>Whether it is your first contact, or if you have worked with us previously, we would love to hear from you. We are excited to find out more about you, and how we can work together.</p>

<p>Complete the form, e-mail us at <a href="mailto:info@theluxurycompass.com" target="_blank">info@theluxurycompass.com</a> or give us a call on <a href="tel:+1(407) 579-7232">(407) 579-7232</a></p>
<div style="padding-bottom:27px;">
<a href="https://twitter.com/TracySolly" target="_blank">
<img src="<?php echo home_url(); ?>/wp-content/uploads/2020/04/T.png" alt="Twitter Icon" width="50px">
</a>
<a href="https://www.linkedin.com/company/the-luxury-compass/about/" target="_blank">
<img src="<?php echo home_url(); ?>/wp-content/uploads/2020/04/LI.png" alt="" width="50px">
</a>
<a href="https://www.instagram.com/tracy_a_solly/" target="_blank">
<img src="<?php echo home_url(); ?>/wp-content/uploads/2020/04/IG.png" alt="" width="50px">
</a>
</div>
<div>
<?php echo do_shortcode('[contact-form-7 id="47" title="Contact"]'); ?>
</div>
</div>
</div>
</div>
</div>
<!-- <img src="<?php echo get_template_directory_uri(); ?>/images/divider.png"> -->
</section>
 <?php get_footer(); ?>