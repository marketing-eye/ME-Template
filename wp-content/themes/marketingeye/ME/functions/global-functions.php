<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package ME
 */



/*import ME_script*/ 
function site_script() {
    wp_enqueue_script('globaljs',get_template_directory_uri().'/ME/js/global.js',array(),'1.0.0.',true);
	wp_enqueue_script('customjs',get_template_directory_uri().'/ME/js/custom.js',array(),'1.0.0.',true);
	wp_enqueue_style( 'global_css', get_stylesheet_directory_uri() . '/ME/css/styles.css', false, '1.0.0' );
	wp_enqueue_style( 'responsive_css', get_stylesheet_directory_uri() . '/ME/css/responsive.css', false, '1.0.0' );
	wp_enqueue_style( 'print_css', get_stylesheet_directory_uri() . '/ME/css/print.css', false, '1.0.0' );
	wp_enqueue_style( 'custom_css', get_stylesheet_directory_uri() . '/ME/css/custom.css', false, '1.0.0' );
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

require_once get_template_directory() . '/ME/options-setting/functions/options-setting-function.php';

add_action('admin_enqueue_scripts', function(){
    /*
    if possible try not to queue this all over the admin by adding your settings GET page val into next
    if( empty( $_GET['page'] ) || "my-settings-page" !== $_GET['page'] ) { return; }
    */
    wp_enqueue_media();
});

function test_func( $atts ) {
$html = "";
$html .= "<img src='".get_option('opt-general-logo')."'/>";
$html .= "<img src='".get_option('opt-general-logo-2')."'/>";
$html .= "<div>".get_option('opt-footer-sidebar-layout')."</div>";
$html .= "<div>opt-footer-widget-1-columns-width: ".get_option('opt-footer-widget-1-columns-width')."</div>";
$html .= "<div>opt-footer-widget-2-columns-width ".get_option('opt-footer-widget-2-columns-width')."</div>";
$html .= "<div>opt-footer-widget-3-columns-width ".get_option('opt-footer-widget-3-columns-width')."</div>";
$html .= "<div>opt-footer-widget-4-columns-width ".get_option('opt-footer-widget-4-columns-width')."</div>";
$html .= "<style type='text/css'>".get_option('opt-general-custom-css')."</style>";
$html .= "<script type='text/javascript'>".get_option('opt-general-custom-js')."</script>";
return $html;
}
add_shortcode( 'test', 'test_func' );