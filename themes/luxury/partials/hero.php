<!-- start parallax section -->
<section id="home" class="no-padding parallax mobile-height wow fadeIn" data-stellar-background-ratio="0.5">

          <div class="hero-overlay"></div>
        <div class="hero-border">
          
          <div class="border-top-left"></div>
          <div class="border-top-right"></div>
          <div class="border-side-top-left"></div>
          <div class="border-side-top-right"></div>
          <div class="border-side-bottom-left"></div>
          <div class="border-side-bottom-right"></div>
          <div class="border-bottom-left"></div>
          <div class="border-bottom-right"></div>
          </div>
          <!-- <div class="border"></div> -->

            <?php if(has_post_thumbnail()){ ?>
          <?php the_post_thumbnail('full', array('class'=>'hero-img')); ?>
            <?php }else{ ?>
           <img src="<?php echo home_url(); ?>/wp-content/uploads/2020/04/Welcome-Luxury-Compass.jpg" alt="" width="100%" />
            <?php } ?>
           <div class="menu">
<ul>
<li><a href="<?php echo home_url(); ?>/why-tracy-solly/"><img src="<?php echo get_template_directory_uri(); ?>/images/nav1.png"></a></li>
<li><a href="<?php echo home_url(); ?>/what-makes-us-unique/"><img src="<?php echo get_template_directory_uri(); ?>/images/nav2.png"></a></li>
<li><a href="<?php echo home_url(); ?>/testimonials/"><img src="<?php echo get_template_directory_uri(); ?>/images/nav3.png"></a></li>
</ul>
</div>
            <!-- <div class="opacity-extra-medium"><img src="<?php echo get_template_directory_uri(); ?>/images/slogan.png" alt=""/></div> -->
            <div class="hero">
                <div class="hero-details text-center">
            <!-- <h1>The Luxury Compass</h1>
            <h4 class="name"><strong>Tracy Solly</strong></h4> -->
            <h1 class="bodoni subtitle"><?php the_title(); ?></h1>
            <h6><?php the_field('subtitle'); ?></h6>
            </div>
            </div>
            
        </section>
        <!-- end parallax section -->