<?php
$title = get_field('title');
$description = get_field('description');
$button = get_field('button');
$bg_image = get_field('background_image');
?>

<section
    class="hero-section"
    style="<?php if (!empty($bg_image['url'])): ?>background-image: url('<?php echo esc_url($bg_image['url']); ?>')<?php endif; ?>">
    <div class="hero-content container">

        <?php if (!empty($title)) : ?>
            <?php
            $words = explode(' ', $title);
            $last_word = array_pop($words);
            $title_without_last = implode(' ', $words);
            ?>
            <div class="hero-title">
                <?php echo esc_html($title_without_last); ?> <span class="last-word"><?php echo esc_html($last_word); ?></span>
            </div>
        <?php endif; ?>

        <?php if (!empty($description)) : ?>
            <div class="hero-description"><?php echo esc_html($description); ?></div>
        <?php endif; ?>

        <?php if (!empty($button)) : ?>
            <a
                class="button button--hero"
                href="<?php echo esc_url($button['url']); ?>"
                target="<?php echo esc_attr($button['target'] ?: '_self'); ?>">
                <?php echo esc_html($button['title']); ?>
            </a>
        <?php endif; ?>
</section>