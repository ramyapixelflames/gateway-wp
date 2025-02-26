<?php 
/* Template Name: Advisory page */ 
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

  <section class="flexible__section">
    <div class="container">
      <div class="row board__members__row">

      <?php
$select_team_members = get_field('select_team_members');
if( $select_team_members ): ?>
<?php foreach( $select_team_members as $post ): 
setup_postdata($post); ?>
        <div class="col-12 col-sm-6 col-lg-4" data-aos="fade-up">
          <div class="board__member__card">
            <figure>
              <img src="<?php echo get_the_post_thumbnail_url($post->ID, 'medium'); ?>" alt=""><!-- <button class="share__to">
              <img src="./assets/img/share.svg" alt="" />
            </button> -->
            </figure>
            <h5><?php the_title(); ?></h5>
            <?php 
            $categories = get_the_terms($post->ID, 'team-category');
            if ($categories && !is_wp_error($categories)) : 
                $category_names = wp_list_pluck($categories, 'name');
                echo '<span>' . implode(', ', $category_names) . '</span>';
            endif;
            ?>
            <a href="<?php the_permalink(); ?>">View Profile</a>
          </div>
        </div>
        <?php endforeach; wp_reset_postdata(); ?>
        <?php endif; ?>
      </div>
    </div>
  </section>
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