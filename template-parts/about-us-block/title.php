<?php 
$title = $args['title'] ?? '';
?>

<?php if ($title): ?>
    <h2 class="about-us-block-title"><?= esc_html($title); ?></h2>
<?php endif; ?>

