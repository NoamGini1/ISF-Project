<section class="facts-section">
    <div class="main-layout">
        <div class="facts-section-content">
            <ul class="facts-list">
                <?php if (have_rows('facts_list')): ?>
                    <?php 
                    $total = count(get_field('facts_list')); // count total to hide last separator
                    $index = 0;
                    while (have_rows('facts_list')): the_row(); 
                        $index++;
                        $fact_title = get_sub_field('fact_title');
                        $fact_description = get_sub_field('fact_description');
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
                    <?php endwhile; ?>
                <?php endif; ?>
            </ul>

            <?php if (get_field('credit_text')): ?>
                <small class="credit"><?= esc_html(get_field('credit_text')); ?></small>
            <?php endif; ?>
        </div>
    </div>
</section>
