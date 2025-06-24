<?php

function ISF_menus()
{
    register_nav_menus(
        array(
            'main-menu' => 'Main Menu',
            'policy-menu' => 'Policy Menu',
        )
    );
}

add_action('init', 'ISF_menus');
