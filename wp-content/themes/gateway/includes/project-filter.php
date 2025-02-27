<?php 
add_action('wp_ajax_filter_projects', 'filter_projects');
add_action('wp_ajax_nopriv_filter_projects', 'filter_projects'); 

function filter_projects() {
    $asset_class = sanitize_text_field($_POST['asset_class']);
    $geography   = sanitize_text_field($_POST['geography']);
    $sector      = sanitize_text_field($_POST['sector']);

    $args = array(
        'post_type'      => 'projects',
        'posts_per_page' => -1,
        'post_status'    => 'publish',
        'orderby'        => 'date',
        'order'          => 'DESC',
        'tax_query'      => array('relation' => 'AND'),
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
                        <h5><?php the_title(); ?></h5>
                    </div>
                </a>
            </div>
            <?php
        endwhile;
    else :
        echo '<p>No projects found.</p>';
    endif;

    wp_reset_postdata();
    wp_die();
}
