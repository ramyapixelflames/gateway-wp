<?php 
/* Template Name: Home page */ 
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
        <h1 data-aos="fade-up" data-aos-delay="200" data-aos-duration="1200">
         <?php the_field('banner_title');?>
        </h1>
        <p data-aos="fade-up" data-aos-delay="600" data-aos-duration="1200"> <?php the_field('banner_content');?></p>
      </div>
    </div>
  </section>
<?php endif; ?>
  <?php

if( have_rows('home_page') ):

    while ( have_rows('home_page') ) : the_row();

        if( get_row_layout() == 'who_we_are_section' ):?>
  <section class="flexible__section">
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-5 mb-3 mb-lg-0">
          <h5 class="title--tertiary" data-aos="fade-up"><?php the_sub_field('who_we_are_title');?></h5>
          <h2 class="title--primary" data-aos="fade-up" data-aos-delay="200"><?php the_sub_field('who_we_are_subtitle');?></h2>
        </div>
        <div class="col-12 col-lg-7 d-flex align-items-end">
          <div data-aos="fade-up" data-aos-delay="400">
            <p><?php the_sub_field('who_we_are_content');?></p>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php 
elseif( get_row_layout() == 'key_facts_section' ):
?>
  <section class="flexible__section key__facts__section pb--0" style="--bg: url(<?php the_sub_field('key_fact_image');?>); background-image: var(--bg)">
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-6 mb-5 mb-lg-0">
          <h2 class="title--md" data-aos="fade-up"><?php the_sub_field('key_facts_section_title');?>
          </h2>
          <ul class="key__facts__links" data-aos="fade-up" data-aos-delay="200">
          <?php
if( have_rows('key_fact_link_1') ):
    while( have_rows('key_fact_link_1') ) : the_row(); 
    $link = get_sub_field('key_links');
if( $link ): 
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
endif;
    ?>
            <li>
              <a href="<?php echo esc_url( $link_url ); ?>"><?php echo esc_html( $link_title ); ?><svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M0.8125 0.625L5.1875 5L0.8125 9.375" stroke="#E7463E" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </a>
            </li>
            <?php endwhile; endif;?>
          </ul>
        </div>
        <div class="col-12 col-lg-6">
          <div class="key__faces__row row">
          <?php
    if( have_rows('key_fact_repeater') ):
    while( have_rows('key_fact_repeater') ) : the_row();  ?>
            <div class="col-6 col-md-6" data-aos="fade-up" data-aos-delay="200">
              <h4>
                <span counter-up data-number="<?php the_sub_field('counter_number');?>"><?php the_sub_field('counter_number');?></span><?php the_sub_field('counter_prefix');?>
              </h4>
              <h6><?php the_sub_field('counter_title');?></h6>
            </div>
            <?php endwhile; endif;?>
          </div>
        </div>
      </div>
    </div>
  </section>
  
<?php 
elseif( get_row_layout() == 'fund_section' ):
?>
  <section class="flexible__section corefund" style="--bg: url(<?php the_sub_field('fund_image');?>); background-image: var(--bg)">
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-5 mb-3 mb-lg-0">
          <h5 class="title--tertiary" data-aos="fade-up"><?php the_sub_field('fund_title');?></h5>
          <h2 class="title--primary" data-aos="fade-up" data-aos-delay="200"><?php the_sub_field('fund_subtitle');?></h2>
        </div>
        <div class="col-12 col-lg-7 d-flex align-items-end">
          <div data-aos="fade-up" data-aos-delay="400">
            <p><?php the_sub_field('fund_description');?></p>
        </div>
        </div>
      </div>
      <div class="core__fund__sectors__row row">
      <?php
    if( have_rows('fund_sector') ):
    while( have_rows('fund_sector') ) : the_row(); 
    $links = get_sub_field('fund_sector_link');
if( $links ): 
    $link_urls = $links['url'];
    $link_titles = $links['title'];
    $link_targets = $links['target'] ? $links['target'] : '_self';
endif;
    ?>
        <div class="col-12 col-md-6 col-xl-4" data-aos="fade-up">
          <a href="<?php echo esc_url( $link_url ); ?>" class="core__sector__card" style="--color:<?php the_sub_field('fund_sector_color');?>">
            <figure>
              <img src="<?php the_sub_field('fund_sector_image');?>" alt="">
            </figure>
            <h5><?php the_sub_field('fund_sector_title');?></h5>
            <span><?php the_sub_field('fund_sector_content');?></span>
            <div class="cta__secondary"><?php echo esc_html( $link_title ); ?><svg width="6" height="8" viewBox="0 0 6 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1.25 7.5L4.75 4L1.25 0.5" stroke="white" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
            </div>
          </a>
        </div>
        <?php endwhile; endif;?>
      </div>
      <div class="leadership__team">
        <h5 class="title--tertiary title--tertiary--doubleline text-center" data-aos="fade-up"><?php the_sub_field('leadership_title');?></h5>
        <h2 class="title--primary title--primary--md text-center" data-aos="fade-up" data-aos-delay="200"><?php the_sub_field('leadership_content');?></h2>
      </div>
    </div>
    <figure class="founderimg d-lg-none d-block" data-aos="fade-up">
      <img src="<?php the_sub_field('leadership_image');?>" alt="">
    </figure>
    <div class="co__founder__footer d-lg-none d-block" data-aos="fade-up" data-aos-delay="200">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="co__founder__footer__content">
              <h4><?php the_sub_field('leader_name');?></h4>
              <span><?php the_sub_field('leader_post');?></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
<?php 
elseif( get_row_layout() == 'fund_section' ):
?>
  <section class="flexible__section co__founder pt-0">
    <div class="co__founder__content__wrap">
      <div class="container">
        <figure class="founderimg d-none d-lg-block">
          <img src="<?php the_sub_field('video_image_1');?>" alt="" data-aos="fade-left" data-aos-delay="800">
        </figure>
        <div class="blockquote__wrap">
          <img src="<?php the_sub_field('video_image_2');?>" alt="" class="quote" data-aos="fade-up" data-aos-delay="">
          <blockquote data-aos="fade-up" data-aos-delay="200"><?php the_sub_field('video_title');?></blockquote>
          <div data-aos="fade-up" data-aos-delay="600">
            <a href="<?php the_sub_field('video_link');?>" class="playbtn">
              <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect width="35.6571" height="35.6571" rx="17.8286" fill="white" />
                <g clip-path="url(#clip0_53152_16606)">
                  <path d="M14 10.8282C14 10.4705 14.3958 10.2544 14.6967 10.4479L26.0692 17.7588C26.3461 17.9368 26.3461 18.3415 26.0692 18.5195L14.6967 25.8304C14.3958 26.0238 14 25.8078 14 25.45V10.8282Z" fill="#B91C1C" stroke="#EF4444" stroke-width="0.904348" stroke-linecap="round" stroke-linejoin="round" />
                </g>
                <defs>
                  <clipPath id="clip0_53152_16606">
                    <rect width="14.4696" height="21.7043" fill="white" transform="translate(12.0742 7.07422)" />
                  </clipPath>
                </defs>
              </svg>
              <span>Watch Video</span>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="co__founder__footer d-none d-lg-block">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-6">
            <div class="co__founder__footer__content">
              <h4 data-aos="fade-up"><?php the_sub_field('co_founder_name');?></h4>
              <span data-aos="fade-up" data-aos-delay="200"><?php the_sub_field('co_founder_post');?></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
<?php 
elseif( get_row_layout() == 'capital_investment' ):
?>
  <section class="flexible__section capital__investment">
    <div class="container">
      <h5 class="title--tertiary title--tertiary--doubleline text-center text-white" data-aos="fade-up"><?php the_sub_field('capital_investment_title');?></h5>
      <h2 class="title--primary title--primary--sm text-center text-white" data-aos="fade-up" data-aos-delay="200"><?php the_sub_field('co_founder_name');?></span>
      </h2>
      <div data-aos="fade-up" data-aos-delay="400">
      <?php 
$capital_investment_link = get_sub_field('capital_investment_link');
if( $capital_investment_link ): 
    $link_urld = $capital_investment_link['url'];
    $link_titled = $capital_investment_link['title'];
    $link_targetd = $capital_investment_link['target'] ? $capital_investment_link['target'] : '_self';
endif; ?>
        <a href="<?php echo esc_url( $link_urld ); ?>" class="mx-auto mt-4 cta__secondary cta__secondary--red">
          <span><?php echo esc_html( $link_titled ); ?></span>
          <svg width="6" height="8" viewBox="0 0 6 8" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1.25 7.5L4.75 4L1.25 0.5" stroke="#EF4444" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
        </a>
      </div>
    </div>
    <div class="map__container" data-aos="fade-up" data-aos-delay="0">
    <?php
    if( have_rows('map_container') ):
    while( have_rows('map_container') ) : the_row(); 
    $i = 1;?>
      <picture>
        <source srcset="<?php the_sub_field('mobile_image');?>" media="(max-width: 720px)">
        <img src="<?php the_sub_field('desktop_image');?>" alt="" class=<?php if($i == 1) echo"pins"; ?> data-aos="fade-down" data-aos-delay="1000">
      </picture>
      <?php endwhile; endif; ?>
    </div>
  </section>
  
<?php 
elseif( get_row_layout() == 'news_section' ):
?>
  <section class="flexible__section">
    <div class="container">
      <h5 class="title--tertiary" data-aos="fade-up"><?php the_sub_field('news_title');?></h5>
      <h2 class="title--primary" data-aos="fade-up" data-aos-delay="200"><?php the_sub_field('news_subtitle');?></h2>
      <div class="news__listing row">

        <?php
$args = array(
    'post_type'      => 'news', 
    'posts_per_page' => 1, 
    'orderby'        => 'date', 
    'order'          => 'DESC', 
);

$news_query = new WP_Query($args);

if ($news_query->have_posts()) :
    while ($news_query->have_posts()) : $news_query->the_post(); ?>
       <div class="col-12 col-md-6 d-none d-md-block">
       <div class="new__card new__card--lg" data-aos="fade-up" data-aos-delay="00">
                <a href="<?php the_permalink(); ?>">
                    <figure>
                        <?php if (has_post_thumbnail()) : ?>
                            <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title(); ?>">
                       <?php endif; ?>
                    </figure>
                </a>
                <h5>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h5>
                <span>
                <?php $content = get_field('news_description');?>
                <?php echo wp_trim_words($content, 20, '...'); ?> 
                    <a href="<?php the_permalink(); ?>">Read more</a>
                </span>
            </div>
        </div>
    <?php endwhile;
    wp_reset_postdata(); 
else :
  //  echo '<p>No news found.</p>';
endif;
?>
        <div class="col-12 col-md-6">
          <div class="row mobile__news__listing">

            <?php
$args = array(
    'post_type'      => 'news', 
    'posts_per_page' => 1, 
    'orderby'        => 'date', 
    'order'          => 'DESC', 
);

$news_query = new WP_Query($args);

if ($news_query->have_posts()) :
    while ($news_query->have_posts()) : $news_query->the_post(); ?>
        <div class="col-12 col-sm-6 d-block d-md-none">
            <div class="new__card">
                <a href="<?php the_permalink(); ?>">
                    <figure>
                        <?php if (has_post_thumbnail()) : ?>
                            <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title(); ?>">
                         <?php endif; ?>
                    </figure>
                </a>
                <h5>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h5>
                <span>
                <?php $content = get_field('news_description');?>
                <?php echo wp_trim_words($content, 20, '...'); ?> 
                    <a href="<?php the_permalink(); ?>">Read more</a>
                </span>
            </div>
        </div>
    <?php endwhile;
    wp_reset_postdata(); 
else :
    //echo '<p>No news found.</p>';
endif;
?>

<?php
$args = array(
    'post_type'      => 'news', 
    'posts_per_page' => 4, 
    'orderby'        => 'date', 
    'order'          => 'DESC', 
    'offset'         => 1,
);

$news_query = new WP_Query($args);
$i = 1;
if ($news_query->have_posts()) :
    while ($news_query->have_posts()) : $news_query->the_post(); ?>
        <div class="col-12 col-sm-6">
            <div class="new__card" data-aos="fade-up" data-aos-delay="200">
                <a href="<?php the_permalink(); ?>">
                    <figure>
                        <?php if (has_post_thumbnail()) : ?>
                            <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title(); ?>">
                        <?php endif; ?>
                    </figure>
                </a>
                <h5>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h5>
                <span>
                    <?php $content = get_field('news_description');?>
                    <?php echo wp_trim_words($content, 20, '...'); ?> 
                    <a href="<?php the_permalink(); ?>">Read more</a>
                </span>
            </div>
        </div>
    <?php  $i++; endwhile;
    wp_reset_postdata(); 
else :
    // echo '<p>No news found.</p>';
endif;
?>

           
          </div>
        </div>
      </div>
      <div data-aos="fade-up">
        <a href="/news" class="cta__secondary cta__secondary--dark mx-auto">
          <span>View all news</span>
          <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M3.33331 8.75H12.6666" stroke="black" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M8 4.0835L12.6667 8.75016L8 13.4168" stroke="black" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
        </a>
      </div>
    </div>
  </section>
  <?php endif;
endwhile;
endif; ?>
 
<?php get_footer(); ?>