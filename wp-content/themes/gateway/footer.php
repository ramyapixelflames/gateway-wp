<div class="footer__contact__block">
    <div class="container">
      <h4 class="text-white text-center d-flex align-items-center justify-content-center flex-column flex-lg-row" data-aos="fade-up">
        <?php the_field('common_title','option'); ?>
        <?php 
$link = get_field('common_link','option');
if( $link ): 
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
endif;
    ?>
         <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>" class="cta__primary cta__primary--light ms-lg-4 ms-0 mt-3 mt-lg-0"><?php echo esc_html( $link_title ); ?></a>
      </h4>
    </div>
  </div>
<?php wp_footer(); ?>
<footer>
    <div class="top__footer">
      <div class="container">
        <div class="row">
          <div class="col-12 col-lg-5 mb-5 mb-md-0" data-aos="fade-up">
            <a href="#" class="brand__logo">
              <img src="<?php the_field('footer_logo','option'); ?>" alt="">
            </a>
            <p><?php the_field('footer_title','option'); ?></p>
            <div class="news__letter__form">
              <form action="">
                <fieldset>
                  <input type="email" placeholder="Email address">
                  <input type="submit" value="Subscribe" class="cta__primary">
                </fieldset>
              </form>
            </div>
          </div>
          <div class="col-12 col-lg-3 mb-5 mb-md-0" data-aos="fade-up" data-aos-delay="200">
            <h5 class="title--tertiary">Useful Links</h5>
            <?php
wp_nav_menu(array(
    'theme_location'  => 'footer_menu',
    'container'       => 'nav',
    'container_class' => 'footer-nav',
    'menu_class'      => 'footer-menu',
    'fallback_cb'     => false
));
?>

          </div>
          <div class="col-12 col-lg-4" data-aos="fade-up" data-aos-delay="400">
            <h5 class="title--tertiary">Accessibility</h5>
            <div class="accessibility__control">
              <fieldset class="accessibility__control__item">
                <label for="textsize">Resize Text</label>
                <div class="values">
                  <input type="radio" value="small" checked="checked" name="textsize" id="textsizesmall">
                  <label for="textsizesmall" class="">A</label>
                  <input type="radio" value="large" name="textsize" id="textsizelarge">
                  <label for="textsizelarge" class="">A</label>
                </div>
              </fieldset>
              <fieldset class="accessibility__control__item">
                <label for="highcontrast">High Contrast</label>
                <div class="toggle">
                  <input type="checkbox" name="highcontrast" id="highcontrast">
                  <label for="highcontrast"></label>
                </div>
              </fieldset>
              <fieldset class="accessibility__control__item">
                <label for="highcontrastgrayscale">High Contrast Gray scale</label>
                <div class="toggle">
                  <input type="checkbox" name="highcontrastgrayscale" id="highcontrastgrayscale">
                  <label for="highcontrastgrayscale"></label>
                </div>
              </fieldset>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container bottom__footer--container">
      <div class="bottom__footer">
        <div class="bottom__footer__inner">
          <p data-aos="fade-up"><?php the_field('copy_right_text','option'); ?></p>
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
      </div>
    </div>
  </footer>
  <script defer="defer" src="<?php echo get_template_directory_uri();?>/assets/js/jquery.min.js"></script>
  <script defer="defer" src="<?php echo get_template_directory_uri();?>/assets/js/plugins.min.js"></script>
  <script defer="defer" src="<?php echo get_template_directory_uri();?>/assets/js/app.min.js"></script>
</body>

</html>