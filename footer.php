<footer class="site-footer">

<!--top footer logo (mobile)-->
<div></div>

<!--subscribe component-->
<div></div>

<!--menus & copywrites -->
<div></div>

<!-- buttom footer -->
<div class="buttom-footer">
 <!-- party logos -->   
    <div class="logo-RAKIA"></div>
    <!--adjust the menu -->
    <nav class="policy-menu" id="policy-menu">
    <?php
        wp_nav_menu(array(
            'theme_location' => 'main-menu',
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