<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package ME
 */

/*import ME_script*/ 
function site_script() {
    wp_enqueue_script('mainjs',get_template_directory_uri().'/ME/js/global.js',array(),'1.0.0.',true);
	wp_enqueue_script('mainjs',get_template_directory_uri().'/ME/js/custom.js',array(),'1.0.0.',true);
	wp_register_style( 'global_css', get_stylesheet_directory_uri() . '/ME/css/styles.css', false, '1.0.0' );
	wp_register_style( 'responsive_css', get_stylesheet_directory_uri() . '/ME/css/responsive.css', false, '1.0.0' );
	wp_register_style( 'print_css', get_stylesheet_directory_uri() . '/ME/css/print.css', false, '1.0.0' );
	wp_register_style( 'custom_css', get_stylesheet_directory_uri() . '/ME/css/custom.css', false, '1.0.0' );
}
add_action( 'wp_enqueue_scripts', 'site_script' );

/*add class to body tag*/
function add_slug_body_class( $classes ) {
global $post;
if ( isset( $post ) ) {
$classes[] = $post->post_type . '-' . $post->post_name;
}
return $classes;
}
add_filter( 'body_class', 'add_slug_body_class' );