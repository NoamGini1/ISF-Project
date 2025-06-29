<?php 
    $facts_rows = get_field('facts_list');
    $credit_text = get_field('credit_text');
   

?>

<section class="facts-section">
    <div class="main-layout">
        <div class="facts-section-content">
            <ul class="facts-list">
                <?php if ($facts_rows): ?>
                    <?php 
                    $total = count($facts_rows); // count total to hide last separator
                    $index = 0;
                   foreach( $facts_rows as $row):
                        $index++;
                        $fact_title = $row['fact_title'];
                        $fact_description = $row['fact_description'];
                    ?>
                        <li class="fact-item">
                            <div class="fact-content">
                                <?php if ($fact_title): ?>
                                    <h3><?php echo esc_html($fact_title); ?></h3>
                                <?php endif; ?>

                                <?php if ($fact_description): ?>
                                    <p><?php echo esc_html($fact_description); ?></p>
                                <?php endif; ?>

                                <?php if ($index < $total): ?>
                                    <div class="separator"></div>
                                <?php endif; ?>
                            </div>
                        </li>
                    <?php endforeach; ?>
                <?php endif; ?>
            </ul>

            <?php if ($credit_text): ?>
                <small class="credit"><?= esc_html($credit_text); ?></small>
            <?php endif; ?>
        </div>
    </div>
</section>
