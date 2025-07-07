<?php

$title = get_field('title');
$description = get_field('description');
$button = get_field('button');
$bg_image = get_field('background');

?>

<section
    class="hero-section"
    style="<?php if (!empty($bg_image['url'])): ?>background-image: url('<?php echo esc_url($bg_image['url']); ?>')<?php endif; ?>">
    
    <div class="main-layout">
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

        <?php if (!empty($button)) : 
                $button['class'] ="button--hero";
               get_template_part('template-parts/button/button', null, array('button' => $button));
                ?>
        <?php endif; ?>
        </div>
    </div>
</section>