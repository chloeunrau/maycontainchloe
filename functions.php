<?php

add_action( 'init', 'register_my_menus' );

function register_my_menus() {
register_nav_menus(
array(
'main-menu' => __( 'Main Menu' ),
) );
}

register_sidebar( array(
    'id'          => 'portfolio',
    'name'        => 'Portfolio',
    'description' => 'This is the Widget area for the Portfolio page.'
) );

?>