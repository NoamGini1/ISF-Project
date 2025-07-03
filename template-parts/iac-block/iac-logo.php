<?php 
$logo = $args['logo'] ?? null;
if ($logo): ?>
    <img src="<?= esc_url($logo['url']); ?>" alt="<?= esc_attr($logo['alt'] ?? '') ?>" class="iac-block-logo">
<?php endif; ?>