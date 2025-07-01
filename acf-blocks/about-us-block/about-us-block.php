<?php
$title = get_field('title');
$bold_description = get_field('bold_description');
$regular_description = get_field('regular_description');
$image = get_field('image');
$button = get_field('button');
?>

<section class="about-us-block">

  <?php 
  //Image component
    get_template_part('template-parts/about-us-block/image', null, array('image' => $image)); 
    ?>

    <div class="main-layout">
     <?php 
        //Content component
        get_template_part('template-parts/about-us-block/content', null, array(
            'title' => $title,
            'bold_description' => $bold_description,
            'regular_description' => $regular_description,
            'button' => $button
        )); 
        ?>
    </div>

</section>