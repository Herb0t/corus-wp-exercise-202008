<?php

if ( ! defined( '_C_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_C_VERSION', '1.0.0' );
}

/**
 * Enqueue scripts and styles.
 */
function corus_scripts() {
    // enqueue slick styles
    wp_enqueue_style( 'slick-style', get_template_directory_uri() . '/components/slick-slider/slick.css');
    wp_enqueue_style( 'slick-theme-style', get_template_directory_uri() . '/components/slick-slider/slick-theme.css');

    // enqueue main style
    wp_enqueue_style( 'corus-style', get_stylesheet_uri(), array(), _C_VERSION );
}
add_action( 'wp_enqueue_scripts', 'corus_scripts', 10 );

function body_js() {
    // enqueue slick js and main js
	wp_enqueue_script( 'slick-js', get_template_directory_uri() . '/components/slick-slider/slick.js', array('jquery'), _C_VERSION, true );
    wp_enqueue_script( 'main-js', get_template_directory_uri() . '/components/js/main.js', array('jquery'), _C_VERSION, true );
}
add_action('wp_footer', 'body_js', 10);

// Our custom post type function
function create_posttype() {
    
    // create post type gallery
	register_post_type( 'galleries',
	    array(
            'labels' => array(
                'name' => __( 'Galleries' ),
                'singular_name' => __( 'Gallery' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'galleries'),
            'show_in_rest' => true,
 
        )
    );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );