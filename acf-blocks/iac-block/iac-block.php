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
                <?php 
   
                set_query_var('logo', $logo);
                set_query_var('title', $title);
                set_query_var('description_bold', $description_bold);
                set_query_var('description_regular', $description_regular);
                set_query_var('button', $button);
                ?>
                
                <?php get_template_part('template-parts/iac-block/iac-logo'); ?>
                
                <?php get_template_part('template-parts/iac-block/image-title'); ?>
                
                <?php get_template_part('template-parts/iac-block/bottom-content'); ?>
            </div>
        </div>
    </div>
</section>