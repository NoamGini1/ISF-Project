<?php
get_header();
?>

<?php
while (have_posts()) : the_post();
    the_content();
endwhile;
?>
<section id="join-us">
    <?php
    $join_us_form_id = get_field('join_us_form_id', 'option');
    if ($join_us_form_id) {
        get_template_part('template-parts/form/form-render', null, array(
            'form_id' => $join_us_form_id,
            'form_class' => 'custom-form--join-us',
        ));
    }
    ?>
</section>


<?php
get_footer(); ?>