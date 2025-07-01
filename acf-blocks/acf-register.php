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
        'enqueue_assets'    => function() {
            wp_enqueue_style('iac-block-style', get_template_directory_uri() . '/dist/css/blocks/iac-block.css');
            wp_enqueue_script('iac-block-script', get_template_directory_uri() . '/dist/js/blocks/iac-block.js', ['jquery'], null, true);
        }
));

});
// @media (min-width: 768px) {
//     .iac-block_content {
//         display: grid;
//         grid-template-columns: 1fr auto 1fr;
//      //   grid-template-rows: auto auto;
//         gap: 0rem;
//         // align-items: start;
//          text-align: left;
//          position: relative;
//        left:2rem;
//     }
// }
//     .iac-block_background-text {
//         grid-column: 1 / -1;
//         grid-row: 1;
//         justify-self: start;
//         z-index: -1;
//     }

//     .iac-block_star {
//         grid-column:1;
//         grid-row: 2;
//        align-self: center;
//         z-index: 1;
//         padding-top: 170px;

//         //margin-bottom: -5rem;
//     //         justify-content: flex-start;
//     //         display: flex;
//     // padding-top: 6.4rem;
//     }

//     .iac-block_title {
//         grid-column: 1;
//         grid-row:4;
//         align-self: start;
//         //max-width: 10ch;
//     }

//     .iac-block_logo {
//         grid-column: 2;
//         grid-row: 4;
//         align-self: center;
//         max-width: 120px;
//     }

//     .iac-block_description,
//     .button--hero {
//         grid-column: 3;
//        // grid-row: 3;
//         align-self: start;
//     }

//     .iac-block_description {
//         align-self: start;
//         margin:0;
//         margin-bottom: 10rem;
//         font-size: 2.5rem;
//         font-weight: 400;
//          grid-row: 4;
//     }

//     .button--hero {
//         align-self: end;
//          grid-row: 5;


//     }