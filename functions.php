
<?php

require get_template_directory() . '/inc/custom-post-types.php';
require get_template_directory() . '/services/handle-subscribe-form.php';
require get_template_directory() . '/inc/menus.php';
require get_template_directory() . '/acf-blocks/acf-register.php';

function practice_theme_assets()
{


    wp_enqueue_style(
        'practice-style',
        get_template_directory_uri() . '/dist/css/style.css',
        filemtime(get_template_directory() . '/dist/css/style.css')
    );


    wp_enqueue_script('jquery');

    wp_enqueue_script(
        'practice-script',
        get_template_directory_uri() . '/dist/js/app.js',
        ['jquery'],
        filemtime(get_template_directory() . '/dist/js/app.js'),
    );
}
add_action('wp_enqueue_scripts', 'practice_theme_assets');

function practice_theme_block_assets() {
    wp_enqueue_style(
        'hero-block-style', 
        get_template_directory_uri() . '/dist/css/blocks/hero-block.css', 
        array(), 
        filemtime(get_template_directory() . '/dist/css/blocks/hero-block.css')
    );
    
    wp_enqueue_style(
        'facts-block-style', 
        get_template_directory_uri() . '/dist/css/blocks/facts-block.css', 
        array(), 
        filemtime(get_template_directory() . '/dist/css/blocks/facts-block.css')
    );
    
    wp_enqueue_script(
        'hero-block-script', 
        get_template_directory_uri() . '/dist/js/blocks/hero-block.js', 
        ['jquery'],
        filemtime(get_template_directory() . '/dist/js/blocks/hero-block.js'),
        true
    );
    
    wp_enqueue_script(
        'facts-block-script', 
        get_template_directory_uri() . '/dist/js/blocks/facts-block.js', 
        ['jquery'],
        filemtime(get_template_directory() . '/dist/js/blocks/facts-block.js'),
        true
    );

     wp_enqueue_style(
        'iac-block-style', 
        get_template_directory_uri() . '/dist/css/blocks/iac-block.css', 
        array(), 
        filemtime(get_template_directory() . '/dist/css/blocks/iac-block.css')
    );
}
add_action('wp_enqueue_scripts', 'practice_theme_block_assets');