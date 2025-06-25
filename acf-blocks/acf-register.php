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
    ));
});
