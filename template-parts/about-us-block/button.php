<?php
$button = $args['button'] ?? null;
?>

<?php if (!empty($button)): 
    $button['class'] = "button--hero";
    get_template_part('template-parts/button/button', null, array('button' => $button));
endif; ?>