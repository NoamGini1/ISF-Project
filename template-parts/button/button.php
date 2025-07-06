<?php
$button = $args['button'] ?? null;

if (!empty($button)) : 
    // Check if it's a form button (no URL means it's a form button)
    $is_form_button = empty($button['url']);
?>

<?php if ($is_form_button) : ?>
    <button
        class="button <?php echo esc_attr($button['class'] ?? ''); ?>"
        type="<?php echo esc_attr($button['type'] ?? 'submit'); ?>"
        <?php if (!empty($button['name'])) : ?>name="<?php echo esc_attr($button['name']); ?>"<?php endif; ?>
        <?php if (!empty($button['value'])) : ?>value="<?php echo esc_attr($button['value']); ?>"<?php endif; ?>>
        <?php echo esc_html($button['title']); ?>
    </button>
<?php else : ?>
    <a
        class="button <?php echo esc_attr($button['class'] ?? ''); ?>"
        href="<?php echo esc_url($button['url']); ?>"
        target="<?php echo esc_attr($button['target'] ?: '_self'); ?>">
        <?php echo esc_html($button['title']); ?>
    </a>
<?php endif; ?>

<?php endif; ?>