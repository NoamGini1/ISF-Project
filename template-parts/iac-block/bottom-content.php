<?php
$description_bold = $args['description_bold'] ?? '';
$description_regular = $args['description_regular'] ?? '';
$button = $args['button'] ?? null;
?>

<div class="iac-block-bottom">
    <?php if ($description_bold || $description_regular): ?>
        <p class="iac-block-description">
            <?php if ($description_bold): ?>
                <span class="iac-block-description-bold"><?= esc_html($description_bold); ?></span>
            <?php endif; ?>
            <?= esc_html($description_regular); ?>
        </p>
    <?php endif; ?>

    <?php if (!empty($button)):
        $button['class'] = "button--hero";
        get_template_part('template-parts/button/button', null, array('button' => $button));
    endif; ?>
</div>