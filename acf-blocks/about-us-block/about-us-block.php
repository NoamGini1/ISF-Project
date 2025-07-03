<?php
$title = get_field('title');
$description = get_field('description');
$image = get_field('image');
$button = get_field('button');
?>

<section class="about-us-block">

  <div class="about-us-block-image">
    <?php if ($image): ?>
      <img src="<?= esc_url($image['url']); ?>" alt="<?= esc_attr($image['alt'] ?? '') ?>" />
    <?php endif; ?>
  </div>

  <div class="main-layout">

    <div class="about-us-block-content">
      <?php if ($title): ?>
        <h2 class="about-us-block-title"><?= esc_html($title); ?></h2>
      <?php endif; ?>

      <div class="about-us-block-description">
        <?php if ($description): ?>
          <?= $description; ?>
        <?php endif; ?>
      </div>

      <?php
      if (!empty($button)):
        $button['class'] = "button--hero";
        get_template_part('template-parts/button/button', null, array('button' => $button));
      endif; ?>
    </div>
  </div>

</section>