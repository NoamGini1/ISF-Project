<?php
$image = $args['image'] ?? null;
?>
<div class="about-us-block-image">
        <?php if ($image): ?>
            <img src="<?= esc_url($image['url']); ?>" alt="<?= esc_attr($image['alt'] ?? '') ?>" />
        <?php endif; ?>
</div>