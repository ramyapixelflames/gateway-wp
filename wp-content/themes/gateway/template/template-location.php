<?php 
/* Template Name: Location page */ 
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

<section class="flexible__section">
    <div class="container">
      <h2 class="title--primary text-center"><?php the_field('location_section_title'); ?> 
      </h2>
      <div class="row justify-content-center mt-3">
        <div class="col-12 col-lg-6">
          <p class="text-center"><?php the_field('location_section_content'); ?> </p>
        </div>
      </div>
    </div>
  </section>

  <?php
    if( have_rows('locations') ):
        $i == 1;
    while( have_rows('locations') ) : the_row(); 
    if($i % 2 == 0): ?>
  <section class="flexible__section overflow-hidden">
    <div class="container">
      <div class="row officelocations__leftright__content__block">
        <div class="col-12 col-lg-6" data-aos="fade-right">
          <h5 class="title--tertiary"><?php the_sub_field('location_title'); ?></h5>
          <h2 class="title--primary"><?php the_sub_field('locations_subtitle'); ?></h2>
          <p><?php the_sub_field('locations_content'); ?></p>
          <ul class="location__detail">
            <?php if(!empty(get_sub_field('location_phone_number'))) : ?>
            <li>
              <figure>
                <img src="<?php echo get_template_directory_uri(); ?>/uploads/tele.svg" alt="">
              </figure>
              <div>
              <?php the_sub_field('location_phone_number'); ?>
              </div>
            </li>
            <?php endif; ?>
            <?php if(!empty(get_sub_field('location_mail_id'))) : ?>
            <li>
              <figure>
                <img src="<?php echo get_template_directory_uri(); ?>/uploads/em.svg" alt="">
              </figure>
              <div>
              <?php the_sub_field('location_mail_id'); ?>
              </div>
            </li>
            <?php endif; ?>
            <?php if(!empty(get_sub_field('location_address'))) : ?>
            <li>
              <figure>
                <img src="<?php echo get_template_directory_uri(); ?>/uploads/loc.svg" alt="">
              </figure>
              <div>
              <?php the_sub_field('location_address'); ?>
              </div>
            </li>
            <?php endif; ?>
          </ul>
          <a href="<?php the_sub_field('location_map'); ?>" class="cta__secondary cta__secondary--red">
            <span>See address on map</span>
            <svg width="6" height="8" viewBox="0 0 6 8" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M1.25 7.5L4.75 4L1.25 0.5" stroke="#EF4444" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
          </a>
        </div>
        <div class="col-12 col-lg-6 mt-4 mt-lg-0 officelocations__images__slider__wrap" data-aos="fade-left">
          <div class="officelocations__images__slider">
          <?php
    if( have_rows('location_images') ):
    while( have_rows('location_images') ) : the_row(); ?>
            <img src="<?php the_sub_field('location_imagee'); ?>" alt="">
           <?php endwhile; endif; ?>
          </div>
          <div class="officelocations__thumbnail__images__slider officelocations__thumbnail__images__slider--navleft">
          <?php
    if( have_rows('location_images') ):
    while( have_rows('location_images') ) : the_row(); ?> 
          <figure>
              <img src="<?php the_sub_field('location_imagee'); ?>" alt="">
            </figure>
            <?php endwhile; endif; ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php else : ?>
    <section class="flexible__section overflow-hidden">
    <div class="container">
      <div class="row officelocations__leftright__content__block flex-column-reverse flex-lg-row">
        <div class="col-12 col-lg-6 mt-4 mt-lg-0 officelocations__images__slider__wrap" data-aos="fade-right">
          <div class="officelocations__images__slider">
          <?php
    if( have_rows('location_images') ):
    while( have_rows('location_images') ) : the_row(); ?>
            <img src="<?php the_sub_field('location_imagee'); ?>" alt="">
           <?php endwhile; endif; ?>
          </div>
          <div class="officelocations__thumbnail__images__slider officelocations__thumbnail__images__slider--navright">
          <?php
    if( have_rows('location_images') ):
    while( have_rows('location_images') ) : the_row(); ?> 
          <figure>
              <img src="<?php the_sub_field('location_imagee'); ?>" alt="">
            </figure>
            <?php endwhile; endif; ?>
          </div>
        </div>
        <div class="col-12 col-lg-6" data-aos="fade-left">
          <h5 class="title--tertiary"><?php the_sub_field('location_title'); ?></h5>
          <h2 class="title--primary"><?php the_sub_field('locations_subtitle'); ?></h2>
          <p><?php the_sub_field('locations_content'); ?></p>
          <ul class="location__detail">
            <?php if(!empty(get_sub_field('location_phone_number'))) : ?>
            <li>
              <figure>
                <img src="<?php echo get_template_directory_uri(); ?>/uploads/tele.svg" alt="">
              </figure>
              <div>
              <?php the_sub_field('location_phone_number'); ?>
              </div>
            </li>
            <?php endif; ?>
            <?php if(!empty(get_sub_field('location_mail_id'))) : ?>
            <li>
              <figure>
                <img src="<?php echo get_template_directory_uri(); ?>/uploads/em.svg" alt="">
              </figure>
              <div>
              <?php the_sub_field('location_mail_id'); ?>
              </div>
            </li>
            <?php endif; ?>
            <?php if(!empty(get_sub_field('location_address'))) : ?>
            <li>
              <figure>
                <img src="<?php echo get_template_directory_uri(); ?>/uploads/loc.svg" alt="">
              </figure>
              <div>
              <?php the_sub_field('location_address'); ?>
              </div>
            </li>
            <?php endif; ?>
          </ul>
          <a href="<?php the_sub_field('location_map'); ?>" class="cta__secondary cta__secondary--red">
            <span>See address on map</span>
            <svg width="6" height="8" viewBox="0 0 6 8" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M1.25 7.5L4.75 4L1.25 0.5" stroke="#EF4444" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
          </a>
        </div>
      </div>
    </div>
  </section>
  <?php endif;?>
<?php $i++; endwhile; endif; ?>

  <section class="map__block" data-aos="fade-up">
  <?php the_field('map_location'); ?> 
</section>

  <?php get_footer(); ?>