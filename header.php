<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head();  ?>
</head>
<body>
<header class="site-header"> 
        <div class = "navigation-bar">
            <div class= "site-logo">
                <img src ="<?php echo get_template_directory_uri() . "/img/logo.png" ?>" alt= "site logo">
            </div>
            <!-- Mobile Menu Toggle Button -->
            <button class="menu-toggle" 
                    id="menu-toggle" 
                    aria-label="Toggle Menu" 
                    aria-expanded="false"
                    aria-controls="main-menu">
                <span class="hamburger-line"></span>
                <span class="hamburger-line"></span>
                <span class="hamburger-line"></span>
            </button>
            <!-- Mobile Menu -->
             <nav class="main-menu" id="main-menu">
                
                <!-- Close button inside the nav -->
               <button class="menu-close" aria-label="Close Menu">
                <img src="<?php echo get_template_directory_uri() . "/img/close-icon.svg" ?>" alt="Close" />
                </button>
                <?php
                    wp_nav_menu(array(
                        'theme_location' => 'main-menu',
                        'container' => false,
                        'menu_class' => 'menu'
                    ));
                ?>
            </nav>
             <!-- Desktop Menu -->
            <nav class="desktop-menu" id="desktop-menu">
                <?php
                    wp_nav_menu(array(
                        'theme_location' => 'main-menu',
                        'container' => false,
                        'menu_class' => 'menu'
                    ));
                ?>
            </nav>
    </div>
</header>
