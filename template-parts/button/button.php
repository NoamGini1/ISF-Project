<?php
$button = $args['button'] ?? null;

if (!empty($button)) : ?>
<a
    class="button <?php echo esc_attr($button['class'] ?? ''); ?>"
    href="<?php echo esc_url($button['url']); ?>"
    target="<?php echo esc_attr($button['target'] ?: '_self'); ?>">
    <?php echo esc_html($button['title']); ?>
</a>
<?php endif; ?>