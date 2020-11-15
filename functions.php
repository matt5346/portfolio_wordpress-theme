<?php

remove_action('wp_head', 'rsd_link'); //removes EditURI/RSD (Really Simple Discovery) link.
remove_action('wp_head', 'wlwmanifest_link'); //removes wlwmanifest (Windows Live Writer) link.
remove_action('wp_head', 'wp_generator'); //removes meta name generator.
remove_action('wp_head', 'wp_shortlink_wp_head'); //removes shortlink.
remove_action( 'wp_head', 'feed_links', 2 ); //removes feed links.

add_action('get_header', 'my_filter_head');

function my_filter_head() {
    remove_action('wp_head', '_admin_bar_bump_cb');
}

add_action ( 'plugin_name', 'function_to_add', 10);

function register_multiple_widget_areas() {

    register_sidebar( array(
        'name'          => 'logotype',
        'id'            => 'logo',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '<span class="hidden">',
        'after_title'   => '</span>',
    ) );

    register_sidebar( array(
        'name'          => 'language switcher',
        'id'            => 'multilanguage',
        'before_widget' => '<div class="poly">',
        'after_widget'  => '</div>',
        'before_title'  => '<span class="hidden">',
        'after_title'   => '</span>',
    ) );


}


add_action( 'widgets_init', 'register_multiple_widget_areas' );

require_once ( get_stylesheet_directory() . '/theme-options.php' );

add_theme_support( 'post-thumbnails' );


add_theme_support( 'custom-logo' );

function portfolio_theme_custom_logo_setup() {
    $defaults = array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array(''),
    );
    add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'portfolio_theme_custom_logo_setup' );

if ( is_page_template( 'shamel_dist/shamel.php' ) ) {
    include_once 'shamel_dist/shamel.php';
}

// function polylanguage_shortcode() {
//     pll_the_languages( array( 'dropdown' => 1, 'show_names' => 1, ) );
//     pll_default_language( 'en' );
// }
// add_shortcode( ‘polylanguage’, ‘polylanguage_shortcode’ );

//     $categories = get_the_category();





