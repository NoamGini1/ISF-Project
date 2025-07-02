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
    ));

    acf_register_block_type(array(
        'name'              => 'iac-block',
        'title'             => __('IAC Block', 'practice-theme'),
        'description'       => __('A custom iac block', 'practice-theme'),
        'render_template'   => get_template_directory() . '/acf-blocks/iac-block/iac-block.php',
        'category'          => 'layout',
        'icon'              => 'info',
        'keywords'          => ['info', 'button', 'logo', 'text'],
        'mode'              => 'edit',
        'supports'          => ['align' => false],
    ));

});