
<?php
//Create menu
function ISF_menus(){

    register_nav_menus(
        array(
            'main-menu' => 'Main Menu',
            'policy-menu' => 'Policy Menu',
        ));
}

add_action('init','ISF_menus');


function practice_theme_assets() {

    //google font
    wp_enqueue_style('googlefont','https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300..700&display=swap',array(),null);
    

    wp_enqueue_style(
        'practice-style',
        get_template_directory_uri() . '/dist/css/style.css',
        ['googlefont'],
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

