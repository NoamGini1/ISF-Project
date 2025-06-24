<?php

$form_title = get_field('form_title', $form_id);
$form_description = get_field('form_description', $form_id);
$submit_text = get_field('submit_text', $form_id) ?: 'Send';
$linkedin_url = get_field('linkedin_url', $form_id);
$fields_group = get_field('fields_group', $form_id);
?>

<?php if ($fields_group): ?>
  <form class="custom-form" method="POST" action="">
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
        for ($i = 1; $i <= 5; $i++):
          $label = $fields_group["field_{$i}_label"] ?? '';
          $name  = $fields_group["field_{$i}_name"] ?? '';
          $type  = $fields_group["field_{$i}_type"] ?? '';

          if (!$label || !$name || !$type) continue;
        ?>

          <div class="form-group">
            <?php if ($type === 'textarea'): ?>
              <textarea
                name="<?= esc_attr($name); ?>"
                id="<?= esc_attr($name); ?>"
                placeholder="<?= esc_attr($label); ?>"></textarea>
            <?php else: ?>
              <input
                type="<?= esc_attr($type); ?>"
                name="<?= esc_attr($name); ?>"
                id="<?= esc_attr($name); ?>"
                placeholder="<?= esc_attr($label); ?>" />
            <?php endif; ?>
          </div>
        <?php endfor; ?>
        <button type="submit" class="button button--white-border"><?= esc_html($submit_text); ?></button>
      </div>
      <div class="form-actions">
        <button type="submit" class="button button--white-border"><?= esc_html($submit_text); ?></button>
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