<?php $title = get_query_var('title'); ?>
<div class="iac-block-image-title">
    <img src="<?= get_template_directory_uri(); ?>/img/shooting-star.png" alt="Star" class="iac-block-star" />
    
    <?php if ($title): ?>
        <h2 class="iac-block-title"><?= esc_html($title); ?></h2>
    <?php endif; ?>
</div>