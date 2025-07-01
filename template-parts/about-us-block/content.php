<?php
$title = $args['title'] ?? '';
$bold_description = $args['bold_description'] ?? '';
$regular_description = $args['regular_description'] ?? '';
$button = $args['button'] ?? null;
?>

<div class="about-us-block-content">
    <?php

    if ($title) {
        get_template_part('template-parts/about-us-block/title', null, array('title' => $title));
    }


    if ($regular_description || $bold_description) {
        get_template_part('template-parts/about-us-block/description', null, array(
            'regular_description' => $regular_description,
            'bold_description' => $bold_description
        ));
    }


    if (!empty($button)) {
        get_template_part('template-parts/about-us-block/button', null, array('button' => $button));
    }
    ?>
</div>