<?php
/**
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
<section class="wow fadeIn cover-background sm-no-background-img about-section" style=" visibility: visible; animation-name: fadeIn;">
<div class="background-image"></div>
<div class="container">
<div class="row" style="">
<div class="col-md-1"></div>
<div class="col-md-3 img--main">
<?php $image = get_field('main_image'); ?>
<?php if($image){ ?>
<img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>">
<?php }else{ ?>
<img src="<?php echo home_url(); ?>/wp-content/uploads/2020/04/Why-Tracy-Solly-4.jpg" alt="Why Tracy Solly">
<?php } ?>
</div>
<div class="col-lg-6 col-md-6 sm-text-center about"> 
<div class="about-first-half">
<div class="about-before"></div>
<div class="about-middle"></div>
</div>
<div class="about-after"></div>
<div class="about-details text-white">
<!-- <div class="col-md-3">
    <img src="<?php echo home_url(); ?>/wp-content/uploads/2020/03/Tracy-Solly-Thumbnail.jpg" alt="">
</div> -->
<div class="page details">
<h4 class="bodoni"><?php the_field('main_title'); ?></h4>
<h5 class="">
<?php the_field('secondary_title'); ?>
</h5>
</div>
<?php the_field('short_description'); ?>
</div>
</div>

</div>

<div class="long-content row">
<!-- 
<div class="col-md-3"></div> -->
<!-- <div class="col-md-1"></div> -->
<div class="col-md-7 offset-right">
<div class="content">
<?php if(the_field('content_title')): ?>
<h6><?php the_field('content_title'); ?></h6>
<?php endif; ?>
<?php the_field('content_description'); ?>
</div>
</div>
<?php 

$images = get_field('content_gallery');

if( $images ): ?>
       
<div class="col-md-5 offset-right">
<div class="content">
<?php foreach( $images as $image ): ?>
<img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" width="100%" class="margin-10px-tb">
<?php endforeach; ?>
</div>
</div>
<?php endif; ?>
</div>

</div>
<div class="container">
<div class="row">
<div class="col-md-12 padding-50px-top">
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
<?php if(is_page(107)){ ?>
<section class="pb-5" style="padding-top:0px;">
<div class="container">
<div class="row testimonial-row">
<div class="col col-md-4">
<div class="content">
<p>I’ve known Tracey for several years, in both a professional and academic capacity. She is a consummate marketing professional – she is not only highly aware of the practical aspects of marketing, selling and promotion but she is also a very skilled communicator. Your brands will be in good hands, if Tracy is your trusted marketing agent. I cannot commend her highly enough.</p>
<h6>Research and Internal Communications Manager at University of The West of Scotland <span class="testimonial-name">Meg Dunn</span></h6>
</div>
</div>
<div class="col col-md-4 padding-15px-all bg-white">
<div class="content">
    <img src="<?php echo home_url(); ?>/wp-content/uploads/2020/06/Luxury-Compass-Lifestyle-9.jpg" alt="" width="100%">
</div>
</div>
<div class="col col-md-4">
<div class="content">
<p>Highly Recommend Tracy. Diligent, hardworking, honest and very well connected within the luxury Hotel world; she brings a lot of contacts and skills to hotels both operationally and for revenue generation. Working with Tracy was great fun; we worked hard and laughed a lot, a wonderful combination. Tracy is a true industry professional.</p>
<h6>Managing Director. Glenapp Castle – A Relais & Chateaux Hotel <span class="testimonial-name">Jill Chalmers</span></h6>
</div>
</div>
</div>
<div class="row testimonial-row">
<div class="col col-md-4 padding-15px-all bg-white">
<div class="content">
    <img src="<?php echo home_url(); ?>/wp-content/uploads/2020/06/Luxury-Compass-Lifestyle-8.jpg" alt="" width="100%">
</div>
</div>
<div class="col col-md-4">
<div class="content">
<p>In a business colleague/partner I look for five core attributes: genuineness, vision, competency, energy and integrity. Tracy has all five of these attributes and lots more. Now and again in business you are fortunate to come across people that you know will add value to your business, provide insights that others may not have and operate with such openness and energy that it is infectious – that’s Tracy. Top of my list re recommendations and she is a really nice human being too. I’ve known Tracy for many years – she is a terrific business operator.</p>
<h6>Executive Board Director at Bells Food Group <span class="testimonial-name">Gordon Smith</span></h6>
</div>
</div>
<div class="col col-md-4 padding-15px-all bg-white">
<div class="content">
    <img src="<?php echo home_url(); ?>/wp-content/uploads/2020/06/Luxury-Compass-Lifestyle-6.jpg" alt="" width="100%">
</div>
</div>
</div>

<div class="row testimonial-row">
<div class="col col-md-4">
<div class="content">
<p>I have worked with Tracy for many years and many capacities. I have found Tracy to be the most loyal and hard working person I have come across. There is no one you know who knows more about corporate sales than her, a very highly motivated and success driven individual and will always have her clients best interests in mind. Tracy’s leadership skills are second to none, and can drive any sales team to deliver results through incorporating a vision with passion and desire to anyone in her team. A highly professional sales and marketing individual who I have no hesitation in recommending.</p>
<h6>Chief Executive -Helping corporate event bookers to deliver exceptional events | Event Management | Event Production | Venue Sourcing <span class="testimonial-name">Tony Murdock MIH</span></h6>
</div>
</div>
<div class="col col-md-4 padding-15px-all bg-white">
<div class="content">
    <img src="<?php echo home_url(); ?>/wp-content/uploads/2020/06/Luxury-Compass-Lifestyle-13.jpg" alt="" width="100%">
</div>
</div>
<div class="col col-md-4">
<div class="content">
<p>I have known Tracy for a good long time now, and for many years as client and more latterly a top client. Her professionalism is beyond question and is backed by a high level of industry knowledge and experience- her contacts and connections are immense and invaluable. Her knowledge of the hospitality is well documented and proven. An excellent Director of sales -expertise in sales and strategies demonstrable, she presents an honest- sobriety-industrious and her word is her bond.</p>
<h6>Managing Director, Global Personnel solutions (G.P.S) <span class="testimonial-name">Alan Hogg</span></h6>
</div>
</div>
</div>

<div class="row testimonial-row">
<div class="col col-md-4 padding-15px-all bg-white">
<div class="content">
    <img src="<?php echo home_url(); ?>/wp-content/uploads/2020/06/Luxury-Compass-Lifestyle-7.jpg" alt="" width="100%">
</div>
</div>
<div class="col col-md-4">
<div class="content">
<p>Tracy Solly was a huge support during my time at the resort, with a very high caliber client base and impressive network. Tracy always operated in a professional manner with superb communication and negotiation skills and I am confident that she would deliver excellent representation.</p>
<h6>Team Manager at The Scottish Government <span class="testimonial-name">James McGillen</span></h6>
</div>
</div>
<div class="col col-md-4 padding-15px-all bg-white">
<div class="content">
    <img src="<?php echo home_url(); ?>/wp-content/uploads/2020/06/Luxury-Compass-Lifestyle-10.jpg" alt="" width="100%">
</div>
</div>
</div>

<div class="row testimonial-row">
<div class="col col-md-4">
<div class="content">
<p>I have personally and professional known Tracy for a few years. She possesses the knowledge and ethos of working in this industry she is hard working, trust worthy and excellent in choosing the right fit for her clients.</p>
<h6>Director Venuefind Group <span class="testimonial-name">Zari Caan</span></h6>
</div>
</div>
<div class="col col-md-4 padding-15px-all bg-white">
<div class="content">
    <img src="<?php echo home_url(); ?>/wp-content/uploads/2020/06/Luxury-Compass-Lifestyle-9.jpg" alt="" width="100%">
</div>
</div>
<div class="col col-md-4">
<div class="content">
<p>I have had the chance to get to know Tracy over the course of the past couple of years as a highly focused hospitality professional with an in-depth knowledge of the business, a hands on and customer focused attitude and a vast network of industry contacts.</p>
<h6>International Hospitality Consultant – Worldwide Hotel and Venue Selection – Sales Ambassador NEBE <span class="testimonial-name">Pia Kroon</span></h6>
</div>
</div>
</div>

<div class="row testimonial-row">
<div class="col col-md-4 padding-15px-all bg-white">
<div class="content">
    <img src="<?php echo home_url(); ?>/wp-content/uploads/2020/06/Luxury-Compass-Lifestyle-11.jpg" alt="" width="100%">
</div>
</div>
<div class="col col-md-4">
<div class="content">
<p>Tracy is a true professional in her field and extremely well connected in the industry. Tracy is a pleasure to work with and has a real passion for the Hospitality Industry. I would love to work with Tracy again in the future.</p>
<h6>Director of Sales: Entertainment & Media for UKI Managed Hotels at IHG <span class="testimonial-name">Claire Gamble</span></h6>
</div>
</div>
<div class="col col-md-4 padding-15px-all bg-white">
<div class="content">
    <img src="<?php echo home_url(); ?>/wp-content/uploads/2020/06/Luxury-Compass-Lifestyle-12.jpg" alt="" width="100%">
</div>
</div>
</div>


</div>
</section>
<?php } ?>
<?php get_footer(); ?>
