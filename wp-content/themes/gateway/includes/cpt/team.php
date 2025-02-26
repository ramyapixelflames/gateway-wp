<?php
function create_team_cpt() {
    $labels = array(
        'name' => 'Team',
        'singular_name' => 'Team Member',
        'menu_name' => 'Team',
        'all_items' => 'All Team Members',
        'add_new' => 'Add New Member',
        'add_new_item' => 'Add New Team Member',
        'edit_item' => 'Edit Team Member',
        'new_item' => 'New Team Member',
        'view_item' => 'View Team Member',
        'search_items' => 'Search Team Members',
        'not_found' => 'No team members found',
        'not_found_in_trash' => 'No team members found in trash'
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
        'menu_icon' => 'dashicons-groups',
        'has_archive' => true,
        'rewrite' => array('slug' => 'team'),
    );

    register_post_type('team', $args);
}
add_action('init', 'create_team_cpt');

function create_team_category_taxonomy() {
    $labels = array(
        'name' => 'Team Categories',
        'singular_name' => 'Team Category',
        'search_items' => 'Search Team Categories',
        'all_items' => 'All Team Categories',
        'edit_item' => 'Edit Team Category',
        'update_item' => 'Update Team Category',
        'add_new_item' => 'Add New Team Category',
        'new_item_name' => 'New Team Category Name',
        'menu_name' => 'Team Categories'
    );

    $args = array(
        'labels' => $labels,
        'hierarchical' => true, 
        'public' => true,
        'rewrite' => array('slug' => 'team-category')
    );

    register_taxonomy('team-category', 'team', $args);
}
add_action('init', 'create_team_category_taxonomy');
?>
