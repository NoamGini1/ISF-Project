<footer class="site-footer">

    <!--top footer logo (mobile)-->
    <div class="top-logos">
        <?php
         get_template_part('/template-parts/footer/site','logo');
         get_template_part('/template-parts/footer/rakia','logo'); ?>

    </div>
    <div class="form-menus-container">
        <!--subscribe component-->
        <div class="footer-subscribe-form">
            <?php
                $form_id = 46;
                set_query_var('form_id', $form_id);
                get_template_part('template-parts/form/form','render');
            ?>

        </div>

        <!--menus & copywrites -->
        <div class="footer-menus">
            <!--ISF logo (only desktop)-->
              <?php
         get_template_part('/template-parts/footer/site','logo');?>

            <!--menus-->
            <div class="footer-menus-container">
                <!--main menu -->
                <nav class="main-menu" id="main-menu">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'main-menu',
                        'container' => false,
                        'menu_class' => 'menu'
                    ));
                    ?>
                </nav>
                <!--policy  menu -->
                <nav class="policy-menu" id="policy-menu">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'policy-menu',
                        'container' => false,
                        'menu_class' => 'menu'
                    ));
                    ?>
                </nav>
            </div>
            <?php get_template_part('template-parts/footer/copywrites'); ?>
        </div>
    </div>

    <!-- buttom footer -->
    <div class="buttom-footer">
        <!-- party logos -->
        <?php  get_template_part('/template-parts/footer/rakia', 'logo'); ?>
        <!--policy  menu -->
        <nav class="policy-menu" id="policy-menu">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'policy-menu',
                'container' => false,
                'menu_class' => 'menu'
            ));
            ?>
        </nav>
        <?php get_template_part('template-parts/footer/buttom-footer', 'logos'); ?>

    </div>
</footer>

</body>

</html>