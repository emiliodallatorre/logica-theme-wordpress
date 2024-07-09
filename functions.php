<?php
function my_theme_enqueue_styles() {
    $parent_style = 'davis-blocks-style'; // This is 'parent-style' for the Twenty Seventeen theme.
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
<<<<<<< Updated upstream
=======

    // Define an array of stylesheet components to enqueue.
    $component_styles = ['header', 'footer'];

    // Loop through each component and enqueue its corresponding stylesheet.
    foreach ($component_styles as $component) {
        wp_enqueue_style(
            "child-{$component}-style",
            get_stylesheet_directory_uri() . "/styles/{$component}.css",
            array($main_style), // Make sure to list the main child theme stylesheet as a dependency.
            wp_get_theme()->get('Version')
        );
    }
>>>>>>> Stashed changes
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );