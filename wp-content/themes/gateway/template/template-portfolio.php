<?php 
/* Template Name: Portfolio page */ 
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
<form class="portfolio__filter__form js-portfolio-filter">
    <h3>Filter by</h3>
    <div class="row">
        <fieldset class="col-12 col-sm-6 col-lg-4 col-xl-3">
            <label for="asset_class">Asset Class</label>
            <div class="custom__selectbox">
                <select name="asset_class" id="asset_class">
                    <option value="">Asset Class</option>
                    <?php 
                    $terms = get_terms(['taxonomy' => 'assets', 'hide_empty' => false]);
                    foreach ($terms as $term) {
                        echo '<option value="' . esc_attr($term->slug) . '">' . esc_html($term->name) . '</option>';
                    }
                    ?>
                </select>
            </div>
        </fieldset>

        <fieldset class="col-12 col-sm-6 col-lg-4 col-xl-3">
            <label for="geography">By Geography</label>
            <div class="custom__selectbox">
                <select name="geography" id="geography">
                    <option value="">By Geography</option>
                    <?php 
                    $terms = get_terms(['taxonomy' => 'geography', 'hide_empty' => false]);
                    foreach ($terms as $term) {
                        echo '<option value="' . esc_attr($term->slug) . '">' . esc_html($term->name) . '</option>';
                    }
                    ?>
                </select>
            </div>
        </fieldset>

        <fieldset class="col-12 col-sm-6 col-lg-4 col-xl-3">
            <label for="sector">By Sector</label>
            <div class="custom__selectbox">
                <select name="sector" id="sector">
                    <option value="">By Sector</option>
                    <?php 
                    $terms = get_terms(['taxonomy' => 'sector', 'hide_empty' => false]);
                    foreach ($terms as $term) {
                        echo '<option value="' . esc_attr($term->slug) . '">' . esc_html($term->name) . '</option>';
                    }
                    ?>
                </select>
            </div>
        </fieldset>

        <fieldset class="col-12 col-sm-6 col-lg-4 col-xl-3">
            <button type="submit">Apply</button>
        </fieldset>
    </div>
</form>

<!-- <div id="portfolio-results">
    
</div> -->


      <div class="portflio__listing__row row" id="portfolio-results">
      <?php
$asset_class = isset($_GET['asset_class']) ? sanitize_text_field($_GET['asset_class']) : '';
$geography   = isset($_GET['geography']) ? sanitize_text_field($_GET['geography']) : '';
$sector      = isset($_GET['sector']) ? sanitize_text_field($_GET['sector']) : '';

$args = array(
    'post_type'      => 'projects',
    'posts_per_page' => -1,
    'post_status'    => 'publish',
    'orderby'        => 'date',
    'order'          => 'DESC',
    'tax_query'      => array('relation' => 'AND')
);

if ($asset_class) {
    $args['tax_query'][] = array(
        'taxonomy' => 'assets',
        'field'    => 'slug',
        'terms'    => $asset_class,
    );
}

if ($geography) {
    $args['tax_query'][] = array(
        'taxonomy' => 'geography',
        'field'    => 'slug',
        'terms'    => $geography,
    );
}

if ($sector) {
    $args['tax_query'][] = array(
        'taxonomy' => 'sector',
        'field'    => 'slug',
        'terms'    => $sector,
    );
}

$query = new WP_Query($args);

if ($query->have_posts()) : 
    while ($query->have_posts()) : $query->the_post();
       
?>
<div class="col-12 col-md-6">
    <a href="<?php the_permalink(); ?>" class="portfolio__list__item">
        <figure>
            <?php if (has_post_thumbnail()) : ?>
                <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title_attribute(); ?>" />
        
            <?php endif; ?>
        </figure>
        <div class="portfolio__list__item__content">
            <img src="<?php the_field('project_logo'); ?>" alt="" />
            <h5><?php the_title(); ?></h5>
            <span>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/loca.svg" alt="" />
                <?php the_field('project_location'); ?> 
            </span>

            <div href="<?php the_permalink(); ?>" class="btn">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arroright.svg" alt="View Project" />
            </div>
        </div>
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
  </section>

  <?php if(get_field('portfolio_show_hide') == true): ?>
  <sectin class="flexible__section">
    <div class="container">
      <div class="fi__banner">
        <img src="<?php the_field('portfolio_image');?>" alt="" />
        <div class="row">
          <div class="col-12 col-lg-10">
            <h4><?php the_field('portfolio_title');?>
            </h4>

            <p> <?php the_field('portfolio_content');?></p>
          </div>
          <div class="col-12 col-lg-2 d-flex align-items-end justify-content-center justify-content-lg-end mt-5 mt-lg-0">
          <?php if(!empty(get_field('portfolio_link'))) : ?>
          <a href="<?php the_field('portfolio_link');?>" class="btn__red"> Learn More </a>
          <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </sectin>
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
<?php get_footer(); ?>