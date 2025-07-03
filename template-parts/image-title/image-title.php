<?php $title = $args['title'] ?? '';
$extra_class = $args['class'] ?? '';
$show_star = $args['show_star'] ?? true;
?>

<div class="image-title <?= esc_attr($extra_class);?>">
    <?php if ($show_star): ?>
        <img src="<?= get_template_directory_uri(); ?>/img/shooting-star.png" alt="Star" class="star" />
    <?php endif; ?>

    <?php if ($title): ?>
        <h2 class="title"><?= esc_html($title); ?></h2>
    <?php endif; ?>
</div>