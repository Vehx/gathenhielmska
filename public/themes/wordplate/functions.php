<?php

declare(strict_types=1);

// Register plugin helpers.
require get_theme_file_path('includes/plugins/plate.php');

// Set theme defaults.
add_action('after_setup_theme', function () {
    // Disable the admin toolbar.
    show_admin_bar(false);

    // Add post thumbnails support.
    add_theme_support('post-thumbnails');

    // Add title tag theme support.
    add_theme_support('title-tag');

    // Add HTML5 theme support.
    add_theme_support('html5', [
        'caption',
        'comment-form',
        'comment-list',
        'gallery',
        'search-form',
        'widgets',
    ]);

    add_action('wp_enqueue_scripts', function () {
        wp_enqueue_style('customstyle', get_stylesheet_directory_uri() . '/assets/styles/app.css');
        wp_enqueue_script('myscript', get_template_directory_uri() . '/assets/scripts/app.js', [], false, true);
    });

    // Register navigation menus.
    register_nav_menus([
        'navigation' => __('Navigation', 'wordplate'),
    ]);
});

// Remove JPEG compression.
add_filter('jpeg_quality', function () {
    return 100;
}, 10, 2);

// CTP Events
function custom_post_type_event()
{

    $labels = array(
        'name'                  => _x('Events', 'Post Type General Name', 'text_domain'),
        'singular_name'         => _x('Event', 'Post Type Singular Name', 'text_domain'),
        'menu_name'             => __('Events', 'text_domain'),
        'name_admin_bar'        => __('Events', 'text_domain'),
        'archives'              => __('Event Archives', 'text_domain'),
        'attributes'            => __('Event Attributes', 'text_domain'),
        'parent_item_colon'     => __('Parent Event:', 'text_domain'),
        'all_items'             => __('All Events', 'text_domain'),
        'add_new_item'          => __('Add New Event', 'text_domain'),
        'add_new'               => __('Add New', 'text_domain'),
        'new_item'              => __('New Event', 'text_domain'),
        'edit_item'             => __('Edit Event', 'text_domain'),
        'update_item'           => __('Update Event', 'text_domain'),
        'view_item'             => __('View Event', 'text_domain'),
        'view_items'            => __('View Events', 'text_domain'),
        'search_items'          => __('Search Event', 'text_domain'),
        'not_found'             => __('Not found', 'text_domain'),
        'not_found_in_trash'    => __('Not found in Trash', 'text_domain'),
        'featured_image'        => __('Featured Image', 'text_domain'),
        'set_featured_image'    => __('Set featured image', 'text_domain'),
        'remove_featured_image' => __('Remove featured image', 'text_domain'),
        'use_featured_image'    => __('Use as featured image', 'text_domain'),
        'insert_into_item'      => __('Insert into event', 'text_domain'),
        'uploaded_to_this_item' => __('Uploaded to this event', 'text_domain'),
        'items_list'            => __('Events list', 'text_domain'),
        'items_list_navigation' => __('Events list navigation', 'text_domain'),
        'filter_items_list'     => __('Filter events list', 'text_domain'),
    );
    $args = array(
        'label'                 => __('Event', 'text_domain'),
        'description'           => __('CPT for events', 'text_domain'),
        'labels'                => $labels,
        'supports'              => array('title', 'editor', 'thumbnail', 'revisions', 'custom-fields', 'page-attributes', 'post-formats'),
        'taxonomies'            => array('tags'),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-calendar-alt',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
        'show_in_rest'          => true,
    );
    register_post_type('post_type_event', $args);
}
add_action('init', 'custom_post_type_event', 0);
