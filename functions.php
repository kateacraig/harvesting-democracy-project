<?php
/**
 * HDPAC Theme Functions
 */

function hdpac_theme_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'hdpac_theme_setup' );

function hdpac_enqueue_scripts() {
    // Main stylesheet (enqueued via wp_enqueue_scripts; root style.css is theme ID only)
    wp_enqueue_style(
        'hdpac-main-css',
        get_template_directory_uri() . '/css/main.css',
        array(),
        '1.0.0'
    );

    // Font Awesome kit — loaded in <head> to match original placement
    wp_enqueue_script(
        'fontawesome',
        'https://kit.fontawesome.com/c95030a0b6.js',
        array(),
        null,
        false
    );

    // Main JS — loaded in footer
    wp_enqueue_script(
        'hdpac-main-js',
        get_template_directory_uri() . '/script/main.js',
        array(),
        '1.0.0',
        true
    );
}
add_action( 'wp_enqueue_scripts', 'hdpac_enqueue_scripts' );

/**
 * Add crossorigin="anonymous" to the FontAwesome script tag.
 */
function hdpac_fontawesome_crossorigin( $tag, $handle, $src ) {
    if ( 'fontawesome' === $handle ) {
        return '<script src="' . esc_url( $src ) . '" crossorigin="anonymous"></script>' . PHP_EOL;
    }
    return $tag;
}
add_filter( 'script_loader_tag', 'hdpac_fontawesome_crossorigin', 10, 3 );
