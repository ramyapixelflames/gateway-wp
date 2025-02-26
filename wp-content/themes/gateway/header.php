<!DOCTYPE html>
<html lang="en" style="--base-font-size: 16px;--color-primary:#e7463">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script async src="<?php echo get_template_directory_uri();?>/assets/js/modernizr.min.js"></script>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/plugins.min.css" media="all">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/app.min.css" media="all">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/icon.min.css" media="all">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/ie.min.css" media="all"><link rel="icon" href="assets/img/favicon/favicon-16x16.png" />
  <title>Homepage - Website</title>
</head>

<body class="homepage"><!-- @format -->
  <header><!-- <div class="top__header">
    <div class="container d-flex justify-content-end">
      <button
        type="button"
        class="toggles accessibility__control"
        id="accessibility__control">
        Accessbility <img src="./assets/img/settings.svg" alt="" />
      </button>
      <button class="toggles search__toggle" id="search__toggle">
        <svg
          width="24"
          height="24"
          viewBox="0 0 24 24"
          fill="none"
          xmlns="http://www.w3.org/2000/svg">
          <path
            d="M11 19C15.4183 19 19 15.4183 19 11C19 6.58172 15.4183 3 11 3C6.58172 3 3 6.58172 3 11C3 15.4183 6.58172 19 11 19Z"
            stroke="black"
            stroke-linecap="round"
            stroke-linejoin="round" />
          <path
            d="M21.0031 21.0002L16.7031 16.7002"
            stroke="black"
            stroke-linecap="round"
            stroke-linejoin="round" />
        </svg>
      </button>
    </div>
  </div> -->
    <div class="main__header">
      <div class="container">
        <nav>
          <a href="/" class="brand__icon">
            <img src="<?php the_field('header_logo','option');?>" alt="">
          </a>
          <ul class="desktop__navigation" id="desktop__navigation">
            <li>
              <a href="#">The Firm <svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M1.17969 1L5.17969 5L9.17969 1" stroke="black" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </a>
              <div class="desktop__navigation__dropdown">
                <ul>
                  <li>
                    <a href="#">What We Do</a>
                  </li>
                  <li>
                    <a href="#">Advisory Board</a>
                  </li>
                  <li>
                    <a href="#">Locations</a>
                  </li>
                  <li>
                    <a href="#">Team</a>
                  </li>
                </ul>
              </div>
            </li>
            <li>
              <a href="#">Funds <svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M1.17969 1L5.17969 5L9.17969 1" stroke="black" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </a>
              <div class="desktop__navigation__dropdown">
                <ul>
                  <li>
                    <a href="#">Funds</a>
                  </li>
                  <li>
                    <a href="#">Advisory Board</a>
                  </li>
                  <li>
                    <a href="#">Locations</a>
                  </li>
                  <li>
                    <a href="#">Team</a>
                  </li>
                </ul>
              </div>
            </li>
            <li>
              <a href="#">Sustainability</a>
            </li>
            <li>
              <a href="#">Insights <svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M1.17969 1L5.17969 5L9.17969 1" stroke="black" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </a>
              <div class="desktop__navigation__dropdown">
                <ul>
                  <li>
                    <a href="#">What We Do</a>
                  </li>
                  <li>
                    <a href="#">Advisory Board</a>
                  </li>
                  <li>
                    <a href="#">Locations</a>
                  </li>
                  <li>
                    <a href="#">Team</a>
                  </li>
                </ul>
              </div>
            </li>
            <li>
              <a href="#">Contact Us <svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M1.17969 1L5.17969 5L9.17969 1" stroke="black" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </a>
              <div class="desktop__navigation__dropdown">
                <ul>
                  <li>
                    <a href="#">What We Do</a>
                  </li>
                  <li>
                    <a href="#">Advisory Board</a>
                  </li>
                  <li>
                    <a href="#">Locations</a>
                  </li>
                  <li>
                    <a href="#">Team</a>
                  </li>
                </ul>
              </div>
            </li>
          </ul>
          <a href="" class="cta__primary">Investor Portal </a>
          <button class="hamburger hamburger--squeeze" type="button" id="hamburger__toggle">
            <span class="hamburger-box">
              <span class="hamburger-inner"></span>
            </span>
          </button>
        </nav>
      </div>
    </div>
  </header>
  <div class="menu__overlay"></div>
  <div class="mobile__navigation" id="mobile__navigation">
    <div>
      <ul class="navigation">
        <li>
          <a href="#">The Firm <svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M1.17969 1L5.17969 5L9.17969 1" stroke="black" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
          </a>
          <ul class="mobile__sub__menu">
            <li>
              <a href="#">What We Do</a>
            </li>
            <li>
              <a href="#">Advisory Board</a>
            </li>
            <li>
              <a href="#">Locations</a>
            </li>
            <li>
              <a href="#">Team</a>
            </li>
          </ul>
        </li>
        <li>
          <a href="#">Funds <svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M1.17969 1L5.17969 5L9.17969 1" stroke="black" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
          </a>
          <ul class="mobile__sub__menu">
            <li>
              <a href="#">What We Do</a>
            </li>
            <li>
              <a href="#">Advisory Board</a>
            </li>
            <li>
              <a href="#">Locations</a>
            </li>
            <li>
              <a href="#">Team</a>
            </li>
          </ul>
        </li>
        <li>
          <a href="#">Sustainability</a>
        </li>
        <li>
          <a href="#">Insights <svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M1.17969 1L5.17969 5L9.17969 1" stroke="black" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
          </a>
          <ul class="mobile__sub__menu">
            <li>
              <a href="#">What We Do</a>
            </li>
            <li>
              <a href="#">Advisory Board</a>
            </li>
            <li>
              <a href="#">Locations</a>
            </li>
            <li>
              <a href="#">Team</a>
            </li>
          </ul>
        </li>
        <li>
          <a href="#">Contact Us <svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M1.17969 1L5.17969 5L9.17969 1" stroke="black" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
          </a>
          <ul class="mobile__sub__menu">
            <li>
              <a href="#">What We Do</a>
            </li>
            <li>
              <a href="#">Advisory Board</a>
            </li>
            <li>
              <a href="#">Locations</a>
            </li>
            <li>
              <a href="#">Team</a>
            </li>
          </ul>
        </li>
      </ul>
      <a href="" class="cta__primary">Investor Portal</a>
    </div>
    <ul class="social__media__links" data-aos="fade-up" data-aos-delay="200">
    <?php
    if( have_rows('social_link','option') ):
    while( have_rows('social_link','option') ) : the_row(); ?>
      
            <li>
              <a href="<?php the_sub_field('social_media_link','option');?>">
                <img src="<?php the_sub_field('social_media_logo','option');?>" alt="">
              </a>
            </li>
            <?php endwhile; endif; ?>

    </ul>
  </div>