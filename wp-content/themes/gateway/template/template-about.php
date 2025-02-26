<?php 
/* Template Name: About page */ 
/* Template Post Type: page */ 
?>
<?php get_header(); ?>

<?php if(get_field('banner_show_hide') == true): ?>
<section class="hero__banner">
    <div class="hero__banner__bg__slider" id="hero__banner__bg__slider">
    <?php
if( have_rows('banner_images') ):
    while( have_rows('banner_images') ) : the_row(); ?>
      <div class="hero__banner__bg__slide__item">
        <picture>
          <source srcset="<?php the_sub_field('banner_image');?>" media="(max-width: 720px)">
          <img src="<?php the_sub_field('banner_image');?>" alt="">
        </picture>
      </div>
<?php endwhile; endif;?>
    </div>
    <div class="hero__banner__content">
      <div class="container">
      <span class="kickoff__title" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1200"><?php the_field('banner_subtitle');?></span>
        <h1 data-aos="fade-up" data-aos-delay="200" data-aos-duration="1200">
         <?php the_field('banner_title');?>
        </h1>
        <p data-aos="fade-up" data-aos-delay="600" data-aos-duration="1200"> <?php the_field('banner_content');?></p>
        <ul class="bread__crumb" data-aos="fade-up" data-aos-delay="800" data-aos-duration="1200">
          <li>
            <a href="#">Home</a>
          </li>
          <li>Our Location</li>
        </ul>  
    </div>
    </div>
  </section>
<?php endif; ?>

<?php
if( have_rows('about_page') ):
    while ( have_rows('about_page') ) : the_row();
        if( get_row_layout() == 'about' ): ?>
<section class="flexible__section">
    <div class="container">
      <div class="row">
        <div class="col-12 col-xl-6">
          <div class="about__us__intro__block" data-aos="fade-up">
            <h5 class="title--tertiary"><?php the_sub_field('about_title');?></h5>
            <h2 class="title--primary"><?php the_sub_field('about_subtitle');?></h2>
            <?php the_sub_field('about_content');?>
          </div>
        </div>
        <div class="col-12 col-xl-6 mt-3 mt-xl-0">
          <div class="about_us__intro__grid row">
            <div class="col-12 col-sm-6" data-aos="fade-up" data-aos-delay="200">
              <div class="about_us__intro__grid__item">
                <div class="about_us__intro__grid__item__header">
                  <figure>
                    <img src="<?php the_sub_field('about_block_image');?>" alt="">
                  </figure>
                  <div>
                  <?php the_sub_field('about_block_title');?>
                  </div>
                </div>
                <span><?php the_sub_field('about_block_content');?></span>
              </div>
            </div>
            <?php
if( have_rows('about_block_images') ):
    @$i == 0;
    while( have_rows('about_block_images') ) : the_row(); 
    if(@$i%2 == 0): ?>
            <div class="col-12 col-sm-6" data-aos="fade-up" data-aos-delay="400">
              <div class="about_us__intro__grid__item p-0">
                <img src="<?php the_sub_field('about_block_image');?>" alt="">
              </div>
            </div>
            <?php else: ?>
           
            <div class="col-12" data-aos="fade-up" data-aos-delay="600">
              <div class="about_us__intro__grid__item about_us__intro__grid__item--lg p-0">
                <img src="<?php the_sub_field('about_block_image');?>" alt="">
              </div>
            </div>
            <?php endif; @$i++; endwhile; endif; ?>
          </div>
        </div>
      </div>
    </div>
  </section>
 <?php  elseif( get_row_layout() == 'partnerships_section' ): ?>
  <section class="flexible__section bg__concrete">
    <div class="container">
      <h3 class="title--primary title--primary--sm text-center" data-aos="fade-up"><?php the_sub_field('partnerships_title');?></h3>
      <div class="row justify-content-center mt-3" data-aos="fade-up" data-aos-delay="200">
        <div class="col-12 col-xl-9 text-center">
          <p><?php the_sub_field('partnerships_content');?></p>
        </div>
      </div>
      <div class="strategic__partnership__cards__row row">
      <?php
if( have_rows('partnerships_repeater') ):
    while( have_rows('partnerships_repeater') ) : the_row(); ?>
        <div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
          <div class="strategic__partnership__cards">
            <figure>
              <img src="<?php the_sub_field('partnerships_repeater_image');?>" alt="">
            </figure>
            <h5><?php the_sub_field('partnerships_repeater_title');?></h5>
            <span><?php the_sub_field('partnerships_repeater_content');?></span>
          </div>
        </div>
        <?php endwhile; endif; ?>
      </div>
    </div>
  </section>
 
  <?php  elseif( get_row_layout() == 'ceo_message' ): ?>
  <section class="flexible__section pb-0 overflow-hidden">
    <div class="container">
      <div class="co__founder__quotebox">
        <div class="co__founder__quotebox__content">
          <div class="co__founder__quotebox__content__header" data-aos="fade-up">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/quote2.svg" alt="">
            <div>
              <h5><?php the_sub_field('ceo_name');?></h5>
              <span><?php the_sub_field('designation');?></span>
            </div>
          </div>
          <blockquote data-aos="fade-up" data-aos-delay="200"><?php the_sub_field('message');?></blockquote>
          <p data-aos="fade-up" data-aos-delay="400"><?php the_sub_field('subcontent');?></p>
          <?php if(!empty(get_sub_field('video_link'))) : ?>
          <a href="<?php the_sub_field('video_link');?>" class="co__founder__quotebox__content__btn" data-aos="fade-up" data-aos-delay="600">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/btn.svg" alt="">
            <span>Watch Video</span>
          </a>
          <?php endif; ?>
        </div>
        <figure class="co__founder__quotebox__avatar" data-aos="fade-left" data-aos-delay="800">
          <img src="<?php the_sub_field('ceo_image');?>" alt="">
        </figure>
      </div>
    </div>
  </section>
  <?php  elseif( get_row_layout() == 'investment_strategy' ): ?>
  <section class="flexible__section">
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-6">
          <div class="about__us__intro__block" data-aos="fade-up">
            <h5 class="title--tertiary"><?php the_sub_field('investment_strategy_title');?></h5>
            <h2 class="title--primary"><?php the_sub_field('investment_strategy_subtitle');?></h2>
            <ul>
            <?php the_sub_field('investment_strategy_content');?>
             
            </ul>
          </div>
        </div>
        <div class="col-12 col-lg-6">
          <ul class="investment__strategy__list">
          <?php
if( have_rows('investment_strategy_repeater') ):
    while( have_rows('investment_strategy_repeater') ) : the_row(); ?>
            <li data-aos="fade-up" data-aos-delay="00">
              <figure>
                <img src="<?php the_sub_field('investment_strategy_image');?>" alt="">
              </figure>
              <span> <?php the_sub_field('investment_strategy_repeater_title');?></span>
            </li>
            <?php endwhile; endif; ?>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <?php  elseif( get_row_layout() == 'location_section' ): ?>
  <section class="flexible__section bg__mineshaft overflow-hidden">
    <div class="container">
      <div class="row m-0">
        <div class="col-lg-6 text-white p-0" data-aos="fade-right" data-aos-delay="200">
          <h5 class="title--tertiary text-white"><?php the_sub_field('location_section_title');?></h5>
          <h2 class="title--primary text-white"><?php the_sub_field('location_section_subtitle');?></h2>
          <p class="text-white mt-4 mb-4"><?php the_sub_field('location_section_content');?></p>
          <ul class="locations__list">
          <?php
if( have_rows('location_section_repeater') ):
    while( have_rows('location_section_repeater') ) : the_row(); ?>
            <li>
              <img src="<?php the_sub_field('location_section_repeater_image');?>" alt="">
              <p>
              <?php the_sub_field('location_section_repeater_title');?>
              </p>
            </li>
            <?php endwhile; endif; ?>
          </ul>
          <?php if(!empty(get_sub_field('location_link'))) : ?>
          <a href="<?php the_sub_field('location_link');?>" class="cta__secondary cta__secondary--red">
            <span>View All Locations</span>
            <svg width="6" height="8" viewBox="0 0 6 8" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M1.25 7.5L4.75 4L1.25 0.5" stroke="#EF4444" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
          </a>
          <?php endif;?>
        </div>
        <div class="col-12 col-lg-6 p-0" data-aos="fade-left" data-aos-delay="200">
          <img src="<?php the_sub_field('location_section_image');?>" alt="" class="global__map">
        </div>
      </div>
    </div>
  </section>
  <?php  elseif( get_row_layout() == 'counter_section' ): ?>
  <section class="flexible__section" style="--bg: url(<?php echo get_template_directory_uri(); ?>/uploads/bg5.jpg); background-image: var(--bg)">
    <div class="container">
      <div class="row global__pressence__row">
      <?php
if( have_rows('counter') ):
    while( have_rows('counter') ) : the_row(); ?>
        <div class="col-12 col-sm-6 col-lg-3" data-aos="fade-up" data-aos-delay="0">
          <div class="global__pressence__row__item">
            <h4><?php the_sub_field('counter_prefix');?><span counter-up data-number="<?php the_sub_field('counter_number');?>"><?php the_sub_field('counter_number');?></span><?php the_sub_field('counter_postfix');?></h4>
            <span><?php the_sub_field('counter_content');?></span>
          </div>
        </div>
    <?php endwhile; endif; ?>  
        
      </div>
    </div>
  </section>
  <?php endif; ?>
  <?php endwhile; endif; ?>

  <?php if(get_field('show_hide_see_also') == true): ?>
  <section class="flexible__section">
    <div class="container">
      <h5 class="title--tertiary title--tertiary--doubleline text-center" data-aos="fade-up"><?php the_field('see_also_title'); ?></h5>
      <div class="see__also__row row">
      <?php
    if( have_rows('see_also_section') ):
    while( have_rows('see_also_section') ) : the_row(); ?>
        <div class="col-12 col-md-4" data-aos="fade-up" data-aos-delay="0">
          <a href="<?php the_sub_field('block_link'); ?>" class="see__also__card">
            <img src="<?php the_sub_field('block_image'); ?>" alt="">
            <h4><?php the_sub_field('block_title'); ?></h4>
          </a>
        </div>
        <?php endwhile; endif;?>
      </div>
    </div>
  </section>
<?php endif;?>
<?php get_footer(); ?>