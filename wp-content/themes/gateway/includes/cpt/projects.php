<?php
// Register Projects Custom Post Type
function custom_post_type_projects() {
    $labels = array(
        'name'               => 'Projects',
        'singular_name'      => 'Project',
        'menu_name'          => 'Projects',
        'name_admin_bar'     => 'Project',
        'add_new'            => 'Add Project',
        'add_new_item'       => 'Add New Project',
        'new_item'           => 'New Project',
        'edit_item'          => 'Edit Project',
        'view_item'          => 'View Project',
        'all_items'          => 'All Projects',
        'search_items'       => 'Search Projects',
        'not_found'          => 'No projects found.',
        'not_found_in_trash' => 'No projects found in Trash.'
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'projects'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 6,
        'menu_icon'          => 'dashicons-portfolio', 
        'supports'           => array('title', 'editor', 'thumbnail', 'excerpt', 'comments', 'revisions'),
        'show_in_rest'       => true,
    );

    register_post_type('projects', $args);
}
add_action('init', 'custom_post_type_projects');

// Register Custom Taxonomies
function register_project_taxonomies() {
    // Assets Taxonomy
    register_taxonomy('assets', 'projects', array(
        'label'        => 'Assets',
        'hierarchical' => false,
        'rewrite'      => array('slug' => 'assets'),
        'show_in_rest' => true,
    ));

    // Geography Taxonomy
    register_taxonomy('geography', 'projects', array(
        'label'        => 'Geography',
        'hierarchical' => true,
        'rewrite'      => array('slug' => 'geography'),
        'show_in_rest' => true,
    ));

    // Sector Taxonomy
    register_taxonomy('sector', 'projects', array(
        'label'        => 'Sector',
        'hierarchical' => true,
        'rewrite'      => array('slug' => 'sector'),
        'show_in_rest' => true,
    ));
}
add_action('init', 'register_project_taxonomies');

// Flush rewrite rules on activation
function projects_rewrite_flush() {
    custom_post_type_projects();
    register_project_taxonomies();
    flush_rewrite_rules();
}
register_activation_hook(__FILE__, 'projects_rewrite_flush');
?>
