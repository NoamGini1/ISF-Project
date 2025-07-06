<?php

$form_id = $args['form_id'] ?? null;
$form_class = $args['form_class'] ?? '';

if (!$form_id) {
    echo '<p>No form selected.</p>';
    return;
}

$form_title = get_field('form_title', $form_id);
$form_description = get_field('form_description', $form_id);
$submit_text = get_field('submit_text', $form_id) ?: 'Send';
$linkedin_url = get_field('linkedin_url', $form_id);
$fields_group = get_field('fields_group', $form_id);

$form_classes = 'custom-form';
  if ($form_class) {
      $form_classes .= ' ' . sanitize_html_class($form_class);
  }
?>

<?php if ($fields_group): ?>
  <form class="<?= esc_attr($form_classes); ?>" method="POST" action="">
    <?php if ($form_title): ?>
      <h2 class="form-title"><?= esc_html($form_title); ?></h2>
    <?php endif; ?>

    <?php if ($form_description): ?>
      <p class="form-description"><?= esc_html($form_description); ?></p>
    <?php endif; ?>
    <div class="form-wrapper">
      <div class="form-row">
        <?php
        // Loop through fields 1–5
        for ($i = 1; $i <= count($fields_group); $i++):
          $label = $fields_group["field{$i}_label"] ?? '';
          $name  = $fields_group["field{$i}_name"] ?? '';
          $type  = $fields_group["field{$i}_type"] ?? '';

          if (!$label || !$name || !$type) continue;
        ?>

          <div class="form-group">
            <?php if ($type === 'textarea'): ?>
              <textarea
                name="<?= esc_attr($name); ?>"
                id="<?= esc_attr($name); ?>"
                placeholder="<?= esc_attr($label); ?>"></textarea>
        <?php elseif ($type === 'number'): ?>

          <div class="phone-field-mobile">
                <input type="text" name="<?= esc_attr($name); ?>_code" placeholder=<?php _e('+123')?> class="phone-code" />
                <input type="text" name="<?= esc_attr($name); ?>_number" placeholder="Phone Number" class="phone-number" />
              </div>
          <div class="phone-field-desktop">
                <input type="text" name="<?= esc_attr($name); ?>_number" placeholder="Phone Number" class="phone-number" />
              </div>
            <?php else: ?>
              <input
                type="<?= esc_attr($type); ?>"
                name="<?= esc_attr($name); ?>"
                id="<?= esc_attr($name); ?>"
                placeholder="<?= esc_attr($label); ?>" />
            <?php endif; ?>
          </div>
        <?php endfor; ?>

        <?php
        $button = array(
          'title' => $submit_text,
          'class' => $form_class === '' ? 'button' : 'button--hero',
          'type' => 'submit'
        );
        get_template_part('template-parts/button/button', null, array('button' => $button));
        ?>
    
      </div>
      <div class="form-actions">

        <?php
        $button = array(
          'title' => $submit_text,
          'class' => $form_class === '' ? 'button' : 'button--hero',
          'type' => 'submit'
        );
        get_template_part('template-parts/button/button', null, array('button' => $button));
        ?>

        <?php if ($linkedin_url): ?>
          <a href="<?= esc_url($linkedin_url); ?>"
            class="button--linkedin"
            target="_blank"
            rel="noopener noreferrer"
            aria-label="Visit our LinkedIn">
            in
          </a>
        <?php endif; ?>
      </div>
    </div>
  </form>
<?php endif; ?>