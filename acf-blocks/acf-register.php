<?php
add_action('acf/init', function () {

    acf_register_block_type(array(
        'name'              => 'hero-section',
        'title'             => __('Hero Section', 'practice-theme'),
        'description'       => __('A custom hero section block', 'practice-theme'),
        'render_template'   => get_template_directory() . '/acf-blocks/hero-block/hero-block.php',
        'category'          => 'layout',
        'icon'              => 'format-image',
        'keywords'          => array('hero', 'banner', 'section'),
        'mode'              => 'edit',
        'supports'          => array('align' => false),
        'enqueue_assets'    => function () {
            error_log('inside assets');
            wp_enqueue_style('hero-block-style', get_template_directory_uri() . '/dist/css/blocks/hero-block.css', filemtime(get_template_directory() . '/dist/css/blocks/hero-block.css'));
            wp_enqueue_script('hero-block-script', get_template_directory_uri() . '/dist/js/blocks/hero-block.js', ['jquery'],null,true);
        }


    ));

    acf_register_block_type(array(
        'name'              => 'facts-block',
        'title'             => __('Facts Block', 'practice-theme'),
        'description'       => __('Block with title and text', 'practice-theme'),
        'render_template'   => get_template_directory() . '/acf-blocks/facts-block/facts-block.php',
        'category'          => 'layout',
        'icon'              => 'editor-ul',
        'keywords'          => array('facts', 'text', 'info'),
        'mode'              => 'edit',
        'supports'          => array('align' => false),
        'enqueue_assets'    => function () {
            wp_enqueue_style('facts-block-style', get_template_directory_uri() . '/dist/css/blocks/facts-block.css');
            wp_enqueue_script('facts-block-script', get_template_directory_uri() . '/dist/js/blocks/facts-block.js', ['jquery'], null, true);
        }
    ));
});
