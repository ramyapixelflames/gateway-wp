<?php get_header();?>

<div class="header__spacer"></div>
  <div class="team__detail__header">
    <div class="container">
      <ul class="bread__crumb bread__crumb--innerpage justify-content-start">
        <li>
          <a href="#">Home</a>
        </li>
        <li>
          <a href="#">Advisory Board</a>
        </li>
        <li>Team Details</li>
      </ul>
      <h1 class="title--primary">Team Details</h1>
    </div>
  </div>
  <section class="flexible__section team__member__detail__block">
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-5">
          <div class="team__member__detail__overview">
            <figure>
           <?php  $image_url = get_the_post_thumbnail_url(get_the_ID(), 'medium');
if ($image_url) {
    echo '<img src="' . esc_url($image_url) . '" alt="' . get_the_title() . '">';
} ?>
            </figure>
            <ul class="team__member__detail__overview__footer">
            <?php if(!empty(get_field('team_phonenumber'))) : ?>
              <li>
                <figure>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/tel.svg" alt="">
                </figure>
                <div>
                <?php the_field('team_phonenumber'); ?> 
                </div>
              </li>
              <?php endif; ?>
              <?php if(!empty(get_field('team_mail_id'))) : ?>
              <li>
                <figure>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/email.svg" alt="">
                </figure>
                <div>
                <?php the_field('team_mail_id'); ?> 
                </div>
              </li>
              <?php endif; ?>
            </ul>
          </div>
        </div>
        <div class="col-12 col-lg-7 mt-5 mt-lg-0">
          <div class="team__member__details">
            <div class="team__member__detail__intro">
              <h3><?php the_title();?></h3>
              <span><?php the_field('team_position'); ?> </span>
              <p>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/loca.svg" alt=""><?php the_field('team_location'); ?>
              </p>
            </div>
            <div class="about__us__intro__block">
              <p><?php the_field('team_details'); ?></p>
              <?php if(!empty(get_field('year_of_experience'))) : ?> 
                <p>
                <b>Years of Experience: </b><?php the_field('year_of_experience'); ?>
              </p>
              <?php endif; ?>
              <?php if(!empty(get_field('key_expertise'))) : ?> 
              <h6>Key Expertise:</h6>
              <ul>
              <?php the_field('key_expertise'); ?>
              </ul>
              <?php endif; ?>
              <?php if(!empty(get_field('linked_in_url'))) : ?> 
              <div class="d-flex justify-content-end">
                <a href="<?php the_field('linked_in_url'); ?>" class="linkedin__url">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ln.svg" alt="">
                  <span><?php the_field('linked_in_name'); ?></span>
                </a>
              </div>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
      <?php
    if( have_rows('featured_investments') ): ?>
      <div class="featured__investment__brands">
        <h2>Featured Investments</h2>
        <div class="featured__investment__brands_slider" id="featured__investment__brands_slider">
      <?php  while( have_rows('featured_investments') ) : the_row(); ?>
        <img src="<?php the_sub_field('featured_investments_image'); ?>" alt="">
         <?php endwhile; ?>
        </div>
      </div>
      <?php endif; ?>
    </div>
  </section>
  <?php if(!empty(get_field('team_section_title','option'))) : ?>
  <section class="flexible__section bg__gallery">
    <div class="container">
      <h5 class="title--tertiary title--tertiary--doubleline text-center" data-aos="fade-up"><?php the_field('team_section_title','option'); ?></h5>
      <h2 class="title--primary title--primary--md text-center" data-aos="fade-up" data-aos-delay="200"><?php the_field('team_section_subtitle','option'); ?></h2>
      <div class="team__member__slider__wrap" data-aos="fade-up" data-aos-delay="400">
        <div class="team__member__slider__inner">
         
        <?php
$current_post_id = get_the_ID();
$args = array(
    'post_type' => 'team',         
    'posts_per_page' => -1,       
    'order' => 'ASC',              
    'orderby' => 'title',
    'post__not_in' => array($current_post_id),          
);

$team_query = new WP_Query($args);

if ($team_query->have_posts()) : ?>
    <div class="team__member__slider">
        <?php while ($team_query->have_posts()) : $team_query->the_post(); ?>
            <div class="team__member__slider__item">
                <figure>
                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium') ?: 'uploads/m.png'; ?>" alt="<?php the_title(); ?>">
                </figure>
                <div class="team__member__slider__item__content">
                    <h5><?php the_title(); ?></h5>

                    <!-- Fetch and display team category -->
                    <?php 
                    $categories = get_the_terms(get_the_ID(), 'team-category');
                    if ($categories && !is_wp_error($categories)) :
                        $category_names = wp_list_pluck($categories, 'name');
                        echo '<span>' . implode(', ', $category_names) . '</span>';
                    else :
                        echo '<span>Role not defined</span>';
                    endif;
                    ?>
                </div>
            </div>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
    </div>
<?php else : ?>
    <p>No team members found.</p>
<?php endif; ?>

      </div>
    </div>
  </section>
 <?php endif; ?>
 
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

  <?php get_footer();?>
