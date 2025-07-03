<?php $logos= $args['logos'] ?? null;
?>
   <?php if ($logos): ?>
            <div class="companies-block-grid">
                <?php foreach ($logos as $item):
                    $image = $item['logo image'] ?? null;
                    $link = $item['link'] ?? null;
           
                    if (!$image) continue; 
                    $hasBackground = !empty($link);
                    $itemClass = $hasBackground ? 'companies-block-item has-background' : 'companies-block-item';?>
                    <div class="<?= esc_attr($itemClass); ?>">
                        <?php if ($link): ?>
                            <a href="<?= esc_url($link['url']); ?>" target="_blank" rel="noopener noreferrer">
                                <img class="company-logo" src="<?= esc_url($image['url']); ?>" alt="<?= esc_attr($image['alt'] ?? '') ?>" />
                                <span class="plus-icon"> <?php _e('+');?></span>
                            </a>
                        <?php else: ?>
                            <img class="company-logo" src="<?= esc_url($image['url']); ?>" alt="<?= esc_attr($image['alt'] ?? '') ?>" />
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>