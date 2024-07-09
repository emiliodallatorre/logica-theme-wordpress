<?php
function theme_enqueue_styles()
{
    $parent_style = 'parent-style';
    wp_enqueue_style($parent_style, get_template_directory_uri() . '/style.css');

    // Enqueue the child theme stylesheet.
    $main_style = 'child-style';
    wp_enqueue_style(
        $main_style,
        get_stylesheet_directory_uri() . '/style.css',
        array($parent_style),
        wp_get_theme()->get('Version')
    );

    // Define an array of stylesheet components to enqueue.
    $component_styles = ['header']; //, 'footer'];

    // Loop through each component and enqueue its corresponding stylesheet.
    foreach ($component_styles as $component) {
        wp_enqueue_style(
            "child-{$component}-style",
            get_stylesheet_directory_uri() . "/styles/{$component}.css",
            array($main_style), // Make sure to list the main child theme stylesheet as a dependency.
            wp_get_theme()->get('Version')
        );
    }
}

add_action('wp_enqueue_scripts', 'theme_enqueue_styles');