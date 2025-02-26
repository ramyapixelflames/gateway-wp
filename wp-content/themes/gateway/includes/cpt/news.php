<?php 
function custom_post_type_news() {
    $labels = array(
        'name'               => 'News',
        'singular_name'      => 'News',
        'menu_name'          => 'News',
        'name_admin_bar'     => 'News',
        'add_new'            => 'Add News',
        'add_new_item'       => 'Add New News',
        'new_item'           => 'New News',
        'edit_item'          => 'Edit News',
        'view_item'          => 'View News',
        'all_items'          => 'All News',
        'search_items'       => 'Search News',
        'not_found'          => 'No news found.',
        'not_found_in_trash' => 'No news found in Trash.'
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'news'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'menu_icon'          => 'dashicons-admin-site-alt3', 
        'supports'           => array('title', 'editor', 'thumbnail', 'excerpt', 'comments', 'revisions'),
        'show_in_rest'       => true, 
    );

    register_post_type('news', $args);
}

add_action('init', 'custom_post_type_news');
