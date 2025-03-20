<?php
get_header();

/**
 * Template Name: lti
 */

?>

<!-- hero section starts -->
  
  <section class="hero-section">
    <?php if( have_rows('slider') ): ?>
      <div class="hero-slider">
        <?php while( have_rows('slider') ): the_row(); ?>
          <div class="hero-slider-container">
              <img src="<?php the_sub_field('image'); ?>" alt="">
              <div class="hero-content">
                  <h1><?php the_sub_field('header'); ?></h1>
                  <div class="hero-content-2">
                  <p><?php the_sub_field('text'); ?></p>
                  <a class="lt-btn" href="<?php the_sub_field('button_url'); ?>"><?php the_sub_field('button'); ?></a>
                  </div>
              </div>
          </div>
          <?php endwhile; ?>
          
      </div>
  <?php endif; ?>
  </section>

<!-- hero section ends -->

<!-- breakaway section starts -->

<section class="breakaway-section">
    <div class="container breakaway-container">
        <div class="breakaway-section-1">
            <div class="row">
              <div class="col-xl-4">
                  <h2><?= get_field("header"); ?></h2>
                  <p><?= get_field("sub_header"); ?></p>
              </div> 
              <div class="col-xl-6">
                  <p><?= get_field("paragraph"); ?></p>
                  <a class="rd-link" href="<?= get_field("url"); ?>"><?= get_field("link_name"); ?></a>
              </div> 
            </div>
        </div>
        <div class="row">
            <div class="col-xl-10">
                <div class="divider"></div>
        </div>
            </div>

            <div class="breakaway-section-2">
                <?php 
    $group_field = get_field('breakaway_section_2');
    if ($group_field) : ?>
                <div class="row">
                    <div class="col-xl-10">
                        <h4><?= $group_field['header']; ?></h4>
                        <?php if (!empty($group_field['offerings'])) : ?>
                            <div class="row">
    <?php foreach ($group_field['offerings'] as $offering) : ?>
        <div class="col-xl-4 col-lg-4">
            <div class="upgrade-cont">
                <div class="upgrade-img">
                    <img src="<?= $offering['image']; ?>" alt="">
                </div>
                <p><?= $offering['text']; ?></p>
            </div>
        </div>
    <?php endforeach; ?>
    </div>
<?php endif; ?>

                    
                    </div>
                </div>
                <?php endif; ?>
            </div>
    </div>
</section>

<!-- breakaway section ends -->


<!-- temenos section starts -->

<section class="temnos-section">
    <div>
    <div class="temenos-cont container">
    <h2><?= get_field("temenos_header"); ?></h2>
    <p><?= get_field("temenos_text"); ?></p>
    <div class="temenos-sec-2">
        <?php 
    $group_field = get_field('temenos_section_2');
    if ($group_field) : ?>
        <div class="temenos-acc">
           <h4><?= $group_field['header']; ?></h4> 
        </div>
    </div>
    </div>
        <div class="cards container">
        <div class="temenos-card-container">
            <?php if (!empty($group_field['slider'])) : ?>
        <div class="temenos-cards">
            <?php foreach ($group_field['slider'] as $slider) : ?>
            <div class="temenos-card-cont">
                <img src="<?= $slider['image']; ?>" alt="">
                <div class="temenos-card-text">
                    <h5><?= $slider['header']; ?></h5>
                    <p><?= $slider['text']; ?></p>
                </div>
            </div>
            <?php endforeach; ?>
            
            <div class="space">   
            </div>
        </div>
    <?php endif; ?>
<?php endif; ?>
    </div>
    </div>
   </div>
</div>
</section>

<!-- temenos section ends -->


<!-- breakaway journey starts -->

    <section class="breakaway-journey-section" style="background-image: url('<?= get_field("journey_image"); ?>');">
        <div class="journey-container container">
            <div class="row">
            <div class="col-xl-6">
            <h2><?= get_field("journey_header"); ?></h2>
            <p><?= get_field("journey_text"); ?></p>
            <?php if( have_rows('journey_blocks') ): ?>
            <div class="row">
                <?php while( have_rows('journey_blocks') ): the_row(); ?>
                <div class="col-xl-6">
                    <div class="journey-items">
                    <img src="<?php the_sub_field('image'); ?>" alt="">
                    <div>
                        <p><?php the_sub_field('text'); ?></p>
                    </div>
                    </div>
                </div>
                 <?php endwhile; ?>
               
            </div>
             <?php endif; ?>
            </div>
            </div>
        </div>
        <div class="journey-img">
                    <img src="<?php echo get_template_directory_uri().'/assets/images/breakaway-journey.png'?>" alt="">
                </div>
    </section>

<!-- breakaway journey ends -->


<!-- offering wheels starts -->

<section class="offering-wheels-section">
    <div class="container offering-wheels-container">
       <h2><?= get_field("wheel_header"); ?></h2> 
<p><?= get_field("wheel_text"); ?></p>
<div class="circular-chart-container">
    <div class="big-circle">
        <div class="small-circle">
            <div class="middle-image">
                <img src="<?= get_field("middle_image"); ?>" alt="">
            </div>
            <?php if( have_rows('offering_wheels') ): ?>
            <div class="offering-icons">
                <?php while( have_rows('offering_wheels') ): the_row(); ?>
                <div class="offering-img-text">
                    <img src="<?php the_sub_field('image'); ?>" alt="">
                    <img class="dotted-img" src="<?php echo get_template_directory_uri().'/assets/images/dotted-circle.png'?>" alt="">
                    <div class="offering-text">
                        <h6><?php the_sub_field('header'); ?></h6>
                        <?php if( have_rows('offering_wheels_list') ): ?>
                        <ul>
                            <?php while( have_rows('offering_wheels_list') ): the_row(); ?>
                            <li><?php the_sub_field('list'); ?></li>
                            <?php endwhile; ?>
                            <!-- <li>New functionality on boarding</li> -->
                        </ul>
                    <?php endif; ?>
                    </div>
                </div>
                <?php endwhile; ?>
                
            </div>
        <?php endif; ?>
        </div>
    </div>
</div>

<!-- mobile version chart starts-->

<div class="timeline-container">
    <div class="timeline-content">
        <div class="timeline-main-img">
            <img src="<?= get_field("middle_image"); ?>" alt="">
        </div>
        <?php if( have_rows('offering_wheels') ): ?>
        <div class="timeline-starts-here">
            <?php while( have_rows('offering_wheels') ): the_row(); ?>
            <div class="timeline-whole-content">
             <div class="timeline-right-content">
                 <h6><?php the_sub_field('header'); ?></h6>
                 <?php if( have_rows('offering_wheels_list') ): ?>
                        <ul>
                            <?php while( have_rows('offering_wheels_list') ): the_row(); ?>
                            <li><?php the_sub_field('list'); ?></li>
                            <?php endwhile; ?>
                        </ul>
                    <?php endif; ?>
                        </div>
                        <div class="timeline-icon">
                            <img src="<?php the_sub_field('image'); ?>" alt="">
                        </div>
                        </div>
                        <?php endwhile; ?>
                          
        </div>
    <?php endif; ?>
    </div>
</div>

<!-- mobile version chart ends-->

    </div>
</section>

<!-- offering wheels ends -->


<!-- space -->
<div class="space"></div>

<!-- form section starts -->

<section class="form-section">
    <div class=" container form-section-container">
        <div class="form-section-text">
            <h2><?= get_field("contact_header"); ?></h2>
    <h6><?= get_field("contact_subheader"); ?></h6>
    <p><?= get_field("contact_text"); ?></p>
        </div>
        <div class="form-block">
            <h2>Reach out to solve</h2>
            <h6>Are you ready for a seamless t24 upgrade</h6>
            <?php echo do_shortcode("[contact-form-7 id='7b6aa44' title='LTI form']"); ?>
        </div>
    </div>
</section>

<!-- form section ends -->

 <?php
get_footer();
?>