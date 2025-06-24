<?php
// Register Custom Post Type: Forms
function register_custom_form_post_type()
{
    register_post_type('custom_form', array(
        'labels' => array(
            'name' => 'Custom Forms',
            'singular_name' => 'Custom Form',
            'add_new' => 'Add New Form',
            'add_new_item' => 'Add New Form',
            'edit_item' => 'Edit Form',
            'new_item' => 'New Form',
            'view_item' => 'View Form',
            'search_items' => 'Search Forms',
            'not_found' => 'No forms found',
            'not_found_in_trash' => 'No forms found in trash'
        ),
        'public' => false,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_icon' => 'dashicons-feedback',
        'supports' => array('title'),
        'has_archive' => false,
        'rewrite' => false
    ));
}
add_action('init', 'register_custom_form_post_type');
