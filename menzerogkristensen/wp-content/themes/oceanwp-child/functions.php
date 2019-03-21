<?php

// denne funktion linker til parent theme så vi kan få disse styles

add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
 
    $parent_style = 'parent-style'; // This is 'oceanwp-style' for the oceanwp theme.
 
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' ); //linker til parenttheme style.css
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css', //denne linker til vores childthemes style.css
        array( $parent_style ),
        wp_get_theme()->get('Version') //her får vi sat childthemets version på
    );
}
?>
