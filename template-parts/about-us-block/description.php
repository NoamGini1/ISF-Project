<?php
$regular_description = $args['regular_description'] ?? '';
$bold_description = $args['bold_description'] ?? '';
?>

<div class="about-us-block-description">
    <p>
        <?php if ($regular_description): ?>
            <?= esc_html($regular_description); ?>
        <?php endif; ?>
        
        <?php if ($bold_description): ?>
            <strong><?= esc_html($bold_description); ?></strong>
        <?php endif; ?>
    </p>
</div>