<?php
​
/**
 * Enqueue scripts and styles.
 */
function boundless_theme_scripts() {
	
    wp_enqueue_style( 'boundless-styles', get_template_directory_uri() . '/assets/css/styles.css' );
​
    wp_enqueue_style( 'boundless-boot-styles', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
    
​
    wp_enqueue_script( 'boundless-scripts', get_template_directory_uri() . '/assets/js/scripts.js' );
    wp_enqueue_style( 'boundless-boot-scripts', get_template_directory_uri() . '/assets/js/bootstrap.min.js' );
​
​
}
add_action( 'wp_enqueue_scripts', 'boundless_theme_scripts' );