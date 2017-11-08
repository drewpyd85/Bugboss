<?php
/**
 * Understrap functions and definitions
 *
 * @package understrap
 */

/**
 * Theme setup and custom theme supports.
 */
require get_template_directory() . '/inc/setup.php';

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
require get_template_directory() . '/inc/widgets.php';

/**
 * Load functions to secure your WP install.
 */
require get_template_directory() . '/inc/security.php';

/**
 * Enqueue scripts and styles.
 */
require get_template_directory() . '/inc/enqueue.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/pagination.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/custom-comments.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Load custom WordPress nav walker.
 */
require get_template_directory() . '/inc/bootstrap-wp-navwalker.php';

/**
 * Load WooCommerce functions.
 */
require get_template_directory() . '/inc/woocommerce.php';

/**
 * Load Editor functions.
 */
require get_template_directory() . '/inc/editor.php';

/*
GOOGLE FONTS
*/

function wpb_add_google_fonts() {
wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Raleway:300,400,400i,500,900', false );
}

add_action( 'wp_enqueue_scripts', 'wpb_add_google_fonts' );

 /**
 * Enqueue scripts and styles. wp_enqueue_script( $handle, $src, $deps, $ver, $in_footer );
 */

function blank_slate_starter_theme_scripts() {
    
	/*------------STYLES---------------------*/
    
	wp_register_style('slick_styles',  '//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.css' ); // SLICK CSS
	wp_enqueue_style('slick_styles'); // Enqueue it!
    
    wp_register_style('slick-theme',  '//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css' ); // SLICK Theme
    wp_enqueue_style('slick'); // Enqueue it!
    
	/*--------------SCRIPTS-------------------*/
    
	wp_deregister_script( 'jquery' ); // Deregisters Old Jquery Version
	wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js'); // Registers Jquery 2x-min
	wp_enqueue_script('jquery');
    
	wp_register_script('slick', '//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.min.js'); // Registers SlickJS
	wp_enqueue_script('slick');
}

add_action( 'wp_enqueue_scripts', 'blank_slate_starter_theme_scripts' );
