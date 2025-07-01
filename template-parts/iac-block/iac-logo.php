<?php 
$logo = get_query_var('logo');
if ($logo): ?>
    <img src="<?= esc_url($logo['url']); ?>" alt="<?= esc_attr($logo['alt'] ?? '') ?>" class="iac-block-logo">
<?php endif; ?>