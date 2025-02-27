<?php 
/* Template Name: Private Equity page */ 
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

if( have_rows('private_equity') ):

    while ( have_rows('private_equity') ) : the_row();

        if( get_row_layout() == 'introduction' ):?>
<section class="flexible__section overflow-hidden">
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-5" data-aos="fade-right">
          <h2 class="title--primary"><?php the_sub_field('introduction_title');?>
          </h2>
        </div>
        <div class="col-12 col-lg-7 mt-4 mt-lg-0 d-flex align-items-end" data-aos="fade-left">
          <p class="">
          <?php the_sub_field('introduction_content');?>
          </p>
        </div>
      </div>
      <div class="row justify-content-center mt-3">
        <div class="col-12 col-lg-6"></div>
      </div>
    </div>
  </section>
<?php elseif( get_row_layout() == 'strategy_section' ):?>
  <section class="flexible__section">
    <div class="container">
      <div class="private__equity__investment__strategy__block">
        <div class="private__equity__investment__strategy__block__content">
          <h5 class="title--tertiary" data-aos="fade-up"> <?php the_sub_field('strategy_section_title');?></h5>
          <h2 class="title--primary" data-aos="fade-up" data-aos-delay="200">
          <?php the_sub_field('strategy_section_subtitle');?>
          </h2>
          <p data-aos="fade-up" data-aos-delay="400">
          <?php the_sub_field('strategy_section_content');?>
          </p>
        </div>
        <div class="private__equity__investment__strategy__block__vector">
          <figure>
            <img src="<?php the_sub_field('strategy_section_image');?>" alt="" />
          </figure>
        </div>
      </div>
    </div>
  </section>
  <?php elseif( get_row_layout() == 'investment_section' ):?>
  <section class="flexible__section">
    <div class="container">
      <h5 class="title--tertiary title--tertiary--doubleline text-center" data-aos="fade-up">
      <?php the_sub_field('investment_section_title');?>
      </h5>
      <h2 class="title--primary title--primary--md text-center" data-aos="fade-up" data-aos-delay="200">
      <?php the_sub_field('investment_section_subtitle');?>
      </h2>

      <div class="impactfull__portfolio" data-aos="fade-up" data-aos-delay="400">
        <div class="impactfull__portfolio__list">
        <?php
$args = array(
    'post_type'      => 'projects',
    'posts_per_page' => -1, // Show all projects
    'post_status'    => 'publish',
    'orderby'        => 'date',
    'order'          => 'DESC',
);

$query = new WP_Query($args);

if ($query->have_posts()) : 
    while ($query->have_posts()) : $query->the_post();
       
?>
          <div class="diverse__portfolio__card">
            <figure>
              <img src="<?php the_field('project_logo'); ?>" alt="" />
            </figure>
            <h5><?php the_title(); ?></h5>
            <span><?php the_field('project_details');?></span>
            <a href="<?php the_permalink(); ?>" class="cta__secondary cta__secondary--nounderline cta__secondary--red">
              <span>Learn More </span>

              <svg width="6" height="8" viewBox="0 0 6 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1.25 7.5L4.75 4L1.25 0.5" stroke="#EF4444" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
            </a>
          </div>
          <?php 
    endwhile;
    wp_reset_postdata();
else : 
?>
<p>No projects found.</p>
<?php endif; ?>
        </div>
      </div>
    </div>
  </section>
  <?php elseif( get_row_layout() == 'strategic_investment_section' ):?>
  <section class="flexible__section">
    <div class="container">
      <div class="si__approach__banner">
        <h2 class="title--primary" data-aos="fade-up"><?php the_sub_field('strategic_investment_section_title');?></h2>

        <figure class="si__approach__banner__featured__Image" data-aos="fade-up" data-aos-delay="200">
          <img src="<?php the_sub_field('strategic_investment_section_image');?>" alt="" />
        </figure>
        <div class="si__approach__banner__content" data-aos="fade-up" data-aos-delay="400">
          <h5><?php the_sub_field('strategic_investment_section_subtitle');?></h5>

          <p><?php the_sub_field('strategic_investment_section_content');?></p>
        </div>
      </div>
    </div>
  </section>
  <?php elseif( get_row_layout() == 'sustainable_section' ):?>
  <section class="flexible__section">
    <div class="sustainable__business__quote__banner">
      <img src="<?php the_sub_field('sustainable_section_image');?>" alt="" />
      <figure data-aos="fade-up">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sbquote.svg" alt="" />
      </figure>
      <blockquote class="title--primary text-white text-center" data-aos="fade-up" data-aos-delay="400">
      <?php the_sub_field('sustainable_section_title');?>
      </blockquote>
    </div>
  </section>
  <?php elseif( get_row_layout() == 'our_value_secton' ):?>
  <section class="flexible__section overflow-hidden">
    <div class="container">
      <div class="row layout__6040__row">
        <div class="col-12 col-lg-7 d-flex align-items-center" data-aos="fade-right">
          <div>
            <h5 class="title--tertiary"><?php the_sub_field('our_value_section_title');?></h5>

            <h2 class="title--primary"><?php the_sub_field('our_value_section_subtitle');?></h2>

            <p><?php the_sub_field('our_value_section_content');?></p>
          </div>
        </div>
        <div class="col-12 col-lg-5 mt-4 mt-lg-0" data-aos="fade-left">
          <figure class="layOut__6040img">
            <img src="<?php the_sub_field('our_value_section_image');?>" alt="" />
          </figure>
        </div>
      </div>
    </div>
  </section>
  <?php elseif( get_row_layout() == 'investment_sectors' ):?>
  <section class="flexible__section overflow-hidden">
    <div class="container">
      <div class="row layout__6040__row flex-column-reverse flex-lg-row">
        <div class="col-12 col-lg-5 mt-4 mt-lg-0" data-aos="fade-right">
          <figure class="layOut__6040img">
            <img src="<?php the_sub_field('investment_sectors_image');?>" alt="" />
          </figure>
        </div>
        <div class="col-12 col-lg-7 d-flex align-items-center" data-aos="fade-left">
          <div>
            <h5 class="title--tertiary"><?php the_sub_field('investment_sectors_title');?></h5>

            <h2 class="title--primary">
            <?php the_sub_field('investment_sectors_subtitle');?>
            </h2>

            <p><?php the_sub_field('investment_sectors_content');?></p>
          </div>
        </div>
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