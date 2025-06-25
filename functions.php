
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
