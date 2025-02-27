<?php 
/* Template Name: Private Credit page */ 
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
      </div>
    </div>
  </section>
<?php endif; ?>

<?php

if( have_rows('private_credit') ):

    while ( have_rows('private_credit') ) : the_row();

        if( get_row_layout() == 'introduction' ):?>
<section class="flexible__section">
    <div class="container">
      <div class="flexibility__credit__banner">
        <div class="row">
          <div class="col-12 col-lg-7" data-aos="fade-up">
            <h5 class="title--tertiary"><?php the_sub_field('introduction_title');?></h5>
            <h2 class="title--primary">
            <?php the_sub_field('introduction_subtitle');?>
            </h2>
            <p>
            <?php the_sub_field('introduction_content');?>
            </p>
          </div>
          <div class="col-12 col-lg-5">
            <div class="flexibility__credit__banner__image">
              <img src="<?php the_sub_field('introduction_image_1');?>" alt="" data-aos="fade-up" data-aos-delay="200" />
              <figure data-aos="fade-left" data-aos-delay="600">
                <img src="<?php the_sub_field('introduction_image_2');?>" alt="" />
              </figure>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
 <?php elseif( get_row_layout() == 'strategic_section' ):?>
  <section class="flexible__section">
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-7">
          <h5 class="title--tertiary" data-aos="fade-up"><?php the_sub_field('strategic_section_title');?></h5>
          <h2 class="title--primary" data-aos="fade-up" data-aos-delay="200">
           <?php the_sub_field('strategic_section_subtitle');?>
          </h2>
        </div>
        <div class="col-12 col-lg-5 d-flex align-items-end" data-aos="fade-up" data-aos-delay="400">
          <p>
          <?php the_sub_field('strategic_section_content');?>
          </p>
        </div>
      </div>
      <div class="strategic__approach__steps">
        <div class="row">
        <?php
if( have_rows('strategic_section_repeater') ):
    @$i == 1;
    while( have_rows('strategic_section_repeater') ) : the_row();  ?>
          <div class="col-12 col-sm-6 col-lg-3" data-aos="fade-up" data-aos-delay="00">
            <div class="strategic__approach__step">
              <h3>0<?php echo @$i; ?></h3>
              <h5><?php the_sub_field('strategic_section_repeater_title');?></h5>
              <span><?php the_sub_field('strategic_section_repeater_content');?></span>
            </div>
          </div>
         <?php @$i++; endwhile; endif; ?>
        </div>
      </div>
    </div>
  </section>
  <?php elseif( get_row_layout() == 'portfolio_section' ):?>
  <section class="flexible__section">
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-7 col-xl-6">
          <h5 class="title--tertiary" data-aos="fade-up"><?php the_sub_field('portfolio_section_title');?></h5>

          <h2 class="title--primary" data-aos="fade-up" data-aos-delay="200">
          <?php the_sub_field('portfolio_section_subtitle');?>
          </h2>

        </div>
      </div>
      <div class="portfolio__slider" data-aos="fade-up" data-aos-delay="400">
      <?php
$args = array(
    'post_type'      => 'projects',
    'posts_per_page' => -1, 
    'post_status'    => 'publish',
    'orderby'        => 'date',
    'order'          => 'DESC',
);

$query = new WP_Query($args);

if ($query->have_posts()) : 
    while ($query->have_posts()) : $query->the_post();
        
?>
        <div class="portfolio__slide__item">
          <figure>
            <a href="<?php the_permalink(); ?>">
            <?php if (has_post_thumbnail()) : ?>
                <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title_attribute(); ?>" />
        
            <?php endif; ?>
            </a>

          </figure>
          <h4>
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
          </h4>
          <span><?php the_field('project_details');?></span>
          <a href="<?php the_permalink(); ?>" class="cta--readmmore">
            Read More
            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="13" viewBox="0 0 14 13" fill="none">
              <path d="M6.05703 1.58203L6.65859 0.980469C6.93203 0.734375 7.34219 0.734375 7.58828 0.980469L12.9203 6.28516C13.1664 6.55859 13.1664 6.96875 12.9203 7.21484L7.58828 12.5469C7.34219 12.793 6.93203 12.793 6.65859 12.5469L6.05703 11.9453C5.81094 11.6719 5.81094 11.2617 6.05703 10.9883L9.36562 7.84375H1.51797C1.13516 7.84375 0.861719 7.57031 0.861719 7.1875V6.3125C0.861719 5.95703 1.13516 5.65625 1.51797 5.65625H9.36562L6.05703 2.53906C5.81094 2.26562 5.78359 1.85547 6.05703 1.58203Z" fill="#1F2937" />
              <a href="https://www.figma.com/design/ty6UO2CX9LZntBuQxoqjxX?node-id=18-3804">
                <rect fill="black" fill-opacity="0" x="0.170312" y="-1.05" width="12.25" height="16.1" />
              </a>
            </svg>
          </a>
        </div>
        <?php endwhile; endif; ?>
        
      </div>
    </div>
  </section>
  <?php endif; endwhile; endif; ?>

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