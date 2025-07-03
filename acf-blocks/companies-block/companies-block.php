<?php
$title = get_field('title');
$logos = get_field('logos');
$layout_type = get_field('layout_type'); // members | international

$show_star = ($layout_type === 'members');
$layout_class = ($layout_type === 'international') ? 'international' : '';
?>

<section class="companies-block <?= esc_attr($layout_class); ?>">
    <div class="main-layout">
        <?php get_template_part('template-parts/image-title/image-title', null, array(
            'title' => $title,
            'class' => 'center spaced title-center smallFont',
            'show_star' => $show_star
        )); ?>
          <?php get_template_part('template-parts/companies-block/companies-grid', null, array(
            'logos' => $logos ,
        )); ?>
    </div>
</section>