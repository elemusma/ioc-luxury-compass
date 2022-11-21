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
                                TracySolly
                            </h5>
                            <p class="sm-width-100">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the 's standard dummy text. Lorem Ipsum has been the industry's standard dummy text ever since. Lorem Ipsum is simply dummy text.</p>
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
                        <img src="<?php echo home_url(); ?>/wp-content/uploads/2020/03/Unique-Markets-Building-with-Leaves-Hanging-Beautiful.jpg" alt="" style="position: relative;height:calc(100% + 50px);object-fit: cover;object-position: left;">
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
                                                <h3>MOUNTAIN </h3>
                                            </div>   
                                        </figcaption>
                                        <div class="team-image xs-width-100">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/explore1.jpg" alt="">
                                            <div class="overlay-content text-center">
                                                <div class="display-table height-100 width-100">
                                                    <div class="vertical-align-middle display-table-cell icon-social-small">
                                                       <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                                       <a rel="#" class="btn btn-info">READ MORE</a>
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
                                                       <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                                       <a rel="#" class="btn btn-info">READ MORE</a>
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
                                                       <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                                       <a rel="#" class="btn btn-info">READ MORE</a>
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
                                                <h3 class="bodoni">MOUNTAIN </h3>
                                            </div>   
                                        </figcaption>
                                        <div class="team-image xs-width-100">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/explore1.jpg" alt="">
                                            <div class="overlay-content text-center">
                                                <div class="display-table height-100 width-100">
                                                    <div class="vertical-align-middle display-table-cell icon-social-small">
                                                       <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                                       <a rel="#" class="btn btn-info">READ MORE</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="team-overlay bg-black  opacity8"></div>
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
                                                <h3 class="bodoni">MOUNTAIN </h3>
                                            </div>   
                                        </figcaption>
                                        <div class="team-image xs-width-100">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/explore2.jpg" alt="">
                                            <div class="overlay-content text-center">
                                                <div class="display-table height-100 width-100">
                                                    <div class="vertical-align-middle display-table-cell icon-social-small">
                                                       <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                                       <a rel="#" class="btn btn-info">READ MORE</a>
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
        <h2>Turnkey Solutions</h2>

<img src="<?php echo home_url(); ?>/wp-content/uploads/2020/03/Shadow-Upwards.png">
        </div>
        <section class="parallax wow fadeIn solutions position-relative" data-stellar-background-ratio="0.2" style=" background-image:url(<?php echo home_url(); ?>/wp-content/uploads/2020/03/Turnkey-Solutions.jpg); background-size:100%; visibility: visible; animation-name: fadeIn;">
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
                            <h3 class="text-white bodoni">APPRAISAL</h3>
                            <div class="feature-box-overlay bg-black"></div>
                        </div>
                    </div>
                    <!-- end feature box item -->
                    <!-- start feature box item -->
                    <div class="col-md-4 col-sm-4 wow zoomIn last-paragraph-no-margin" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: zoomIn;">
                        <div class="text-center padding-eighteen-all feature-box-13 position-relative md-padding-ten-all sm-padding-25px-all xs-padding-eight-all" id="marketing">
                        <div class="overlay"></div>
                            <p class="text-medium text-white alt-font">YOUR PROPERTY</p>
                            <h3 class="text-white bodoni">MARKETING</h3>
                            <div class="feature-box-overlay bg-black-opacity"></div>
                        </div>
                    </div>
                    <!-- end feature box item -->
                    <!-- start feature box item -->
                    <div class="col-md-4 col-sm-4 wow zoomIn last-paragraph-no-margin" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: zoomIn;">
                        <div class="text-center padding-eighteen-all feature-box-13 position-relative md-padding-ten-all sm-padding-25px-all xs-padding-eight-all"id="management">
                        <div class="overlay"></div>
                            <p class="text-medium text-white alt-font">YOUR PROPERTY</p>
                            <h3 class="text-white bodoni">MANAGEMENT</h3>
                            <div class="feature-box-overlay bg-black"></div>
                        </div>
                    </div>
                    <!-- end feature box item -->
                </div>
            </div>
        </section>
        <div style="padding-top:5rem;">
        <img src="<?php echo home_url(); ?>/wp-content/uploads/2020/03/Shadow-Down.png">
        </div>
        <section class="wow fadeIn text-center" style="visibility: visible; animation-name: fadeIn;">
        <h2>Our Process</h2>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 center-col text-center no-padding tab-style1" id="animated-tab">
                            <p class="thank-you-note">Thank You.</p>
                        <img src="/wp-content/uploads/2020/04/Curved-Shape.png" alt="" class="curve-shape">
                            <!-- start tab navigation -->
                            <ul class="nav nav-tabs margin-50px-bottom xs-no-margin-bottom"> 
                                <li class="nav active"><a href="#tab6_sec1" data-toggle="tab" class="xs-min-height-inherit xs-no-padding" aria-expanded="false">
                                <span class="col-sm-3 text-left">
                                    <!-- <i class="icon-document text-center icon-medium text-medium-gray margin-10px-bottom display-block"></i> -->
                                    <img src="<?php echo home_url(); ?>/wp-content/uploads/2020/04/Value.png" alt="" style="width: 85px;">
                                </span>
                                <span class="col-sm-8 alt-font text-medium-gray text-uppercase text-small">
                                    <span class="big-input">1</span> 
                                    <span class="title">
                                        <h2>Value</h2>
                                    <p>Identify and communicate a property’s values and vision</p>
                                    </span>
                                </span>
                                
                            </a></li>
                                <li class="nav"><a href="#tab6_sec2" data-toggle="tab" class="xs-min-height-inherit xs-no-padding" aria-expanded="false"> <span class="col-sm-3 text-left">
                                    <!-- <i class="icon-tools text-center icon-medium text-medium-gray margin-10px-bottom display-block"></i> -->
                                    <img src="/wp-content/uploads/2020/04/Expand.png" alt="">
                                </span> <span class="col-sm-8 alt-font text-medium-gray text-uppercase text-small"><span class="big-input">2</span> 
                                <span class="title">
                                <h2>Exand</h2>
                                    <p>Fortify or expand existing revenue streams</p>
                                    </span>
                                </span>
                            </span></a></li>
                                <li class="nav"><a href="#tab6_sec3" data-toggle="tab" class="xs-min-height-inherit xs-no-padding" aria-expanded="false">
                                  <span class="col-sm-3 text-left">
                                      <!-- <i class="icon-megaphone text-center icon-medium text-medium-gray margin-10px-bottom display-block"></i> -->
                                      <img src="/wp-content/uploads/2020/04/Benchmark.png" alt="">
                                    </span> <span class="col-sm-8 alt-font text-medium-gray text-uppercase text-small"><span class="big-input">3</span> 
                                  <span class="title">
                                  <h2>Benchmarks</h2>
                                    <p>Set ambitious benchmarks for growth in new areas</p>
                                </span>
                                    </span></a></li>
                                <li class="nav"><a href="#tab6_sec4" data-toggle="tab" class="xs-min-height-inherit xs-no-padding" aria-expanded="true">  <span class="col-sm-3 text-left">
                                    <!-- <i class="icon-heart text-center icon-medium text-medium-gray margin-10px-bottom display-block"></i> -->
                                    <img src="/wp-content/uploads/2020/04/Branding.png" alt="">
                                </span> <span class="col-sm-8 alt-font text-medium-gray text-uppercase text-small"><span class="big-input">4</span> 
                                <span class="title">
                                <h2>Branding</h2>
                                    <p>Refine a brand identitiy that honors a property’s unique value proposition</p>
                                </span>
                                </span></a></li>
                                <li class="nav"><a href="#tab6_sec5" data-toggle="tab" class="xs-min-height-inherit xs-no-padding" aria-expanded="true">  <span class="col-sm-3 text-left">
                                    <!-- <i class="icon-heart text-center icon-medium text-medium-gray margin-10px-bottom display-block"></i> -->
                                    <img src="/wp-content/uploads/2020/04/Marketing.png" alt="">
                                </span> <span class="col-sm-8 alt-font text-medium-gray text-uppercase text-small"><span class="big-input">5</span> 
                                <span class="title">
                                <h2>Marketing</h2>
                                    <p>Develop a marketing strategy that attracts an ideal audience</p>
                                </span>
                                </span></a></li>
                                <li class="nav"><a href="#tab6_sec6" data-toggle="tab" class="xs-min-height-inherit xs-no-padding" aria-expanded="true">  <span class="col-sm-3 text-left">
                                    <!-- <i class="icon-heart text-center icon-medium text-medium-gray margin-10px-bottom display-block"></i> -->
                                    <img src="/wp-content/uploads/2020/04/PR-Buzz.png" alt="">
                                </span> <span class="col-sm-8 alt-font text-medium-gray text-uppercase text-small"><span class="big-input">6</span> 
                                <span class="title">
                                <h2>PR Buzz</h2>
                                    <p>Create PR buzz that aligns with the property’s vision</p>
                                </span>
                                </span></a></li>
                                <li class="nav"><a href="#tab6_sec7" data-toggle="tab" class="xs-min-height-inherit xs-no-padding" aria-expanded="true">  <span class="col-sm-3 text-left">
                                    <!-- <i class="icon-heart text-center icon-medium text-medium-gray margin-10px-bottom display-block"></i> -->
                                    <img src="/wp-content/uploads/2020/04/Partnerships.png" alt="">
                                </span> <span class="col-sm-8 alt-font text-medium-gray text-uppercase text-small"><span class="big-input">7</span> 
                                <span class="title">
                                <h2>Partnerships</h2>
                                    <p>Form partnerships that drive sustainable sales</p>
                                </span>
                                </span></a></li>
                                <li class="nav"><a href="#tab6_sec8" data-toggle="tab" class="xs-min-height-inherit xs-no-padding" aria-expanded="true">  <span class="col-sm-3 text-left">
                                    <!-- <i class="icon-heart text-center icon-medium text-medium-gray margin-10px-bottom display-block"></i> -->
                                    <img src="/wp-content/uploads/2020/04/Efficiency.png" alt="">
                                </span> <span class="col-sm-8 alt-font text-medium-gray text-uppercase text-small"><span class="big-input">8</span> 
                                <span class="title">
                                <h2>Efficiency</h2>
                                    <p>Optimize internal operations with best practices</p>
                                </span>
                                </span></a></li>
                            </ul>
                            <!-- end tab navigation -->
                            <div class="tab-content">
                                <!-- start tab content -->
                                <div id="tab6_sec1" class="center-col tab-pane fade active in"> 
                                    <div class="tab-pane fade in">
                                        <div class="equalize sm-equalize-auto">
                                            
                                            <div class="col-md-8 text-left" style="height: 0px;">
                                                <div class="position-relative padding-100px-top height-100 width-100  display-table">
                                                    <div class="display-table-cell vertical-align-middle">
                                                        <span class="text-extra-dark-gray alt-font margin-10px-bottom display-inline-block text-medium">Don’t worry, you’re in safe hands 1</span>
                                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the dummy text.</p>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end tab content -->
                                <!-- start tab content -->
                                <div id="tab6_sec2" class="center-col tab-pane fade"> 
                                    <div class="tab-pane fade in"> 
                                        <div class="equalize sm-equalize-auto">
                                            
                                            <div class="col-md-8 text-left" style="height: 0px;">
                                                <div class="position-relative padding-45px-all sm-padding-30px-all height-100 width-100 display-table">
                                                    <div class="display-table-cell vertical-align-middle">
                                                        <span class="text-extra-dark-gray alt-font margin-10px-bottom display-inline-block text-medium">Don’t worry, you’re in safe hands 2</span>
                                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the dummy text.</p>
                                                        <a href="about-us-classic.html" class="btn btn-dark-gray btn-very-small text-extra-small">About Company</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end tab content -->
                                <!-- start tab content -->
                                <div id="tab6_sec3" class="center-col tab-pane fade"> 
                                    <div class="equalize sm-equalize-auto">
                                            
                                            <div class="col-md-8 text-left" style="height: 0px;">
                                                <div class="position-relative padding-45px-all sm-padding-30px-all height-100 width-100 display-table">
                                                    <div class="display-table-cell vertical-align-middle">
                                                        <span class="text-extra-dark-gray alt-font margin-10px-bottom display-inline-block text-medium">Don’t worry, you’re in safe hands 3</span>
                                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the dummy text.</p>
                                                        <a href="about-us-classic.html" class="btn btn-dark-gray btn-very-small text-extra-small">About Company</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                <!-- end tab content -->
                                <!-- start tab content -->
                                <div id="tab6_sec4" class="center-col tab-pane fade"> 
                                    <div class="equalize sm-equalize-auto">
                                            
                                            <div class="col-md-8 text-left" style="height: 0px;">
                                                <div class="position-relative padding-45px-all sm-padding-30px-all height-100 width-100  display-table">
                                                    <div class="display-table-cell vertical-align-middle">
                                                        <span class="text-extra-dark-gray alt-font margin-10px-bottom display-inline-block text-medium">Don’t worry, you’re in safe hands 4</span>
                                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the dummy text.</p>
                                                        <a href="about-us-classic.html" class="btn btn-dark-gray btn-very-small text-extra-small">About Company</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                <!-- end tab content -->
                            </div>
                            <!-- end tab content section -->
                        </div>
                        <!-- end tab -->
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
                        <div class="col-md-12 col-sm-5 col-xs-12 text-center alt-font display-table xs-text-center xs-margin-15px-bottom cta" style="height: 38px;">
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
                        <div class="padding-ten-all border-radius-6 md-padding-seven-all" style="background:#b5ab96;margin-bottom: 9rem;">
                            <h2 class="sans-serif">QUESTIONS?</h2> 
                            <div>
                                <!-- <form id="contact-form" action="javascript:void(0)" method="post">
                                    <div id="success-contact-form" class="no-margin-lr" style="display: none;"></div>
                                    <input type="text" name="name" id="name" placeholder="Name*" class="input-bg">
                                    <input type="text" name="email" id="email" placeholder="E-mail*" class="input-bg">
                                    
                                    <textarea name="comment" id="comment" placeholder="Your Message" class="input-bg"></textarea>
                                    <button id="contact-us-button" type="submit" class="btn btn-small border-radius-4 btn-black" style="background:#b9764c;">SEND US A MESSAGE</button>
                                  <button id="contact-us-button" type="submit" class="btn btn-small border-radius-4 btn-black" style="background:#5f5c68;">UPLOAD A FILE</button>
                                </form> -->
                                <?php echo do_shortcode('[contact-form-7 id="47" title="Contact"]'); ?>
                            </div>
                        </div>
                    </div>
                </div>
  </div>
    <img src="<?php echo get_template_directory_uri(); ?>/images/divider.png">
    <div class="container">
  <div class="row">
                    <div class="col-md-2 col-sm-4 text-center"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/logo1.jpg" alt="" data-no-retina=""></a></div>
                    <div class="col-md-2 col-sm-4 text-center"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/logo2.jpg" alt="" data-no-retina=""></a></div>
                    <div class="col-md-2 col-sm-4 text-center"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/logo3.jpg" alt="" data-no-retina=""></a></div>
                    <div class="col-md-2 col-sm-4 text-center"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/logo4.jpg" alt="" data-no-retina=""></a></div>
                    <div class="col-md-2 col-sm-4 text-center"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/logo5.jpg" alt="" data-no-retina=""></a></div>
                    <div class="col-md-2 col-sm-4 text-center"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/logo6.jpg" alt="" data-no-retina=""></a></div>
                </div>
                </div>
    </section>
<?php get_footer(); ?>
