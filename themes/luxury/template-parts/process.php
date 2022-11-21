<?php 

/**
 * Template Name: Process
 */

get_header(); 
// get_template_part('partials/hero');
?>
<link rel="stylesheet" type="text/css" href="<?php echo home_url(); ?>/wp-content/themes/luxury/fullpage/fullpage.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo home_url(); ?>/wp-content/themes/luxury/fullpage/examples.css">
<link rel="stylesheet" type="text/css" href="<?php echo home_url(); ?>/wp-content/themes/luxury/fullpage/custom.css">

<style>
    #fullpage .section{
        background-size:cover;
        background-attachment: fixed;
    }
    .section img.background {
    position: absolute;
    top: 0;
    left: 0;
    z-index: 1;
    height: 100%;
    width: 100%;
    object-fit: cover;
}
.section .content {
    position: relative;
    z-index: 2;
}
</style>

<div id="fullpage">
    <div class="section" id="section0">
        <div class="intro">
            <img src="<?php echo home_url(); ?>/wp-content/uploads/2020/04/Process-1-Value.jpg" alt="" class="background">
            <div class="content">
                <div class="bar top"></div>
          <h2 class="animated wow fadeInDown">Value</h2>
          <div class="text animated wow fadeInUp">
          <p>
          Identify and communicate a property’s values and vision. This requires taking an in-depth look at the company culture and inherent behaviors that drive the operation.
          </p>
          </div>
          <div class="bar bottom"></div>
          </div>
        </div>
    </div>
    <div class="section" id="section1">
    <div class="intro">
            <img src="<?php echo home_url(); ?>/wp-content/uploads/2020/06/Luxury-Compass-Hero-Lifestyle-3.jpg" alt="" class="background" on="lazy">
            <div class="content">
                <div class="bar top"></div>
                <h2 class="animated wow fadeInDown">Expand</h2>
          <div class="text animated wow fadeInUp">
          <p>
          Fortify or expand existing revenue streams. This requires a closer look at where existing revenue streams are established and the actions that can be taken to increase and improve these channels.
          </p>
          </div>
          <div class="bar bottom"></div>
          </div>
        </div>
    </div>
    <div class="section" id="section2">
    <div class="intro">
            <img src="<?php echo home_url(); ?>/wp-content/uploads/2020/04/Process-3-Benchmarks.jpg" alt="" class="background" on="lazy">
            <div class="content">
                <div class="bar top"></div>
            <h2 class="animated wow fadeInDown">Benchmarks</h2>
          <div class="text animated wow fadeInUp">
          <p>
          Set ambitious benchmarks for growth in new areas. Establish clear and concise goals that are achievable with hard work and effort.
          </p>
          </div>
          <div class="bar bottom"></div>
          </div>
        </div>
    </div>
    <div class="section" id="section3">
    <div class="intro">
            <img src="<?php echo home_url(); ?>/wp-content/uploads/2020/06/Luxury-Compass-Hero-Lifestyle-6.jpg" alt="" class="background" on="lazy">
            <div class="content">
                <div class="bar top"></div>
                <h2 class="animated wow fadeInDown">Branding</h2>
          <div class="text animated wow fadeInUp">
          <p>
          Refine a brand identity that honors a property’s unique value proposition. Not losing sight of the fundamental core but bringing a fresh new perspective is key here.
          </p>
          </div>
          <div class="bar bottom"></div>
          </div>
        </div>
    </div>

    <div class="section" id="section4">
    <div class="intro">
            <img src="<?php echo home_url(); ?>/wp-content/uploads/2020/04/Process-5-Marketing.jpg" alt="" class="background" on="lazy">
            <div class="content">
                <div class="bar top"></div>
                <h2 class="animated wow fadeInDown">Marketing</h2>
          <div class="text animated wow fadeInUp">
          <p>
          Develop a marketing strategy that attracts an ideal audience. Knowing what to communicate and the channels that will drive new awareness and sales.
          </p>
          </div>
          <div class="bar bottom"></div>
          </div>
        </div>
    </div>
    <div class="section" id="section5">
    <div class="intro">
            <img src="<?php echo home_url(); ?>/wp-content/uploads/2020/06/Luxury-Compass-Hero-Lifestyle-4.jpg" alt="" class="background" on="lazy">
            <div class="content">
                <div class="bar top"></div>
                <h2 class="animated wow fadeInDown">PR Buzz</h2>
          <div class="text animated wow fadeInUp">
          <p>
          Create PR buzz that aligns with the property’s vision. Getting the word out is something often forgotten in the midst of trying to run the day to day operations of a company.
          </p>
          </div>
          <div class="bar bottom"></div>
          </div>
        </div>
    </div>
    <div class="section" id="section6">
    <div class="intro">
            <img src="<?php echo home_url(); ?>/wp-content/uploads/2020/04/Process-7-Partnerships.jpg" alt="" class="background" on="lazy">
            <div class="content">
                <div class="bar top"></div>
                <h2 class="animated wow fadeInDown">Partnerships</h2>
          <div class="text animated wow fadeInUp">
          <p>
          Form partnerships that drive sustainable sales. It’s not what you know but who you know as the saying goes. Tracy brings a tremendous value in structuring key partnerships.
          </p>
          </div>
          <div class="bar bottom"></div>
          </div>
        </div>
    </div>
    <div class="section" id="section7">
    <div class="intro">
            <img src="<?php echo home_url(); ?>/wp-content/uploads/2020/04/Process-8-Efficiency.jpg" alt="" class="background" on="lazy">
            <div class="content">
                <div class="bar top"></div>
                <h2 class="animated wow fadeInDown">Efficiency</h2>
          <div class="text animated wow fadeInUp">
          <p>
          Optimize internal operations with best practices. The systems that your business runs on will ultimately determine your ability to generate higher levels of profitabilty.
          </p>
          </div>
          <div class="bar bottom"></div>
          </div>
        </div>
    </div>
</div>


<script type="text/javascript" src="<?php echo home_url(); ?>/wp-content/themes/luxury/fullpage/fullpage.min.js"></script>
<script type="text/javascript" src="<?php echo home_url(); ?>/wp-content/themes/luxury/fullpage/examples.js"></script>

<script type="text/javascript">
    var myFullpage = new fullpage('#fullpage', {
        // sectionsColor: ['#1bbc9b', '#4BBFC3', '#7BAABE', 'whitesmoke', '#ccddff'],
        anchors: ['value', 'expand', 'benchmarks', 'branding', 'marketing', 'pr-buzz', 'partnerships', 'efficiency'],
        navigation:true,
        autoScrolling:false,
        navigationTooltips: ['Value', 'Expand', 'Benchmarks', 'Branding', 'Marketing', 'PR Buzz', 'Partnerships', 'Efficiency'],
        showActiveTooltip: true,
        menu: '#menu'
    });
</script>





<?php get_footer(); ?>