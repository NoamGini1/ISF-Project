<footer class="site-footer">

    <!--top footer logo (mobile)-->
    <div class="top-logos">
        <div class="site-logo">
            <img src="<?php echo get_template_directory_uri() . "/img/logo.png" ?>" alt="site logo">
        </div>
        <?php include get_template_directory() . '/template-parts/footer/RAKIA-logo.php' ?>

    </div>
    <div class="form-menus-container">
        <!--subscribe component-->
        <div class="footer-subscribe-form">
            <?php
            $form_id = 46;
            include get_template_directory() . '/template-parts/form/form-render.php'
            ?>

        </div>

        <!--menus & copywrites -->
        <div class="footer-menus">
            <!--ISF logo (only web)-->
            <div class="site-logo">
                <img src="<?php echo get_template_directory_uri() . "/img/logo.png" ?>" alt="site logo">
            </div>

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
            <div class="copywrites">
                <div class="text-logo-copywrites">
                    <p>Designed and developed by </p>
                    <img src="<?php echo get_template_directory_uri() . "/img/moveo-logo.png" ?>" alt="moveo logo">
                </div>
                <p>*All space images were taken by Eytan Stibbe during Rakia AX1 Mission.</p>
            </div>


        </div>
    </div>

    <!-- buttom footer -->
    <div class="buttom-footer">
        <!-- party logos -->
        <?php include get_template_directory() . '/template-parts/footer/RAKIA-logo.php' ?>
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
        <?php get_template_part('template-parts/footer/footer', 'logos'); ?>

    </div>
</footer>

</body>

</html>