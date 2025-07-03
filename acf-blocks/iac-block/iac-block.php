<?php
$title = get_field('title');
$description_regular = get_field('description_regular');
$description_bold = get_field('description_bold');
$button = get_field('button');
$logo = get_field('logo');
?>

<section class="iac-block">
    <div class="main-layout">
        <?php get_template_part('template-parts/iac-block/background-text'); ?>
        
        <div class="iac-block-content">
            <div class="iac-block-top">
                
                <?php get_template_part('template-parts/iac-block/iac-logo', null, array('logo' => $logo)); ?>
                
                <?php get_template_part('template-parts/image-title/image-title', null, array('title' => $title)); ?>
                
                <?php get_template_part('template-parts/iac-block/bottom-content', null, array(
                    'description_regular' => $description_regular,
                    'description_bold' => $description_bold,
                    'button' => $button
                ));
             ?>
            </div>
        </div>
    </div>
</section>