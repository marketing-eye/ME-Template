<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package ME
 */



/*import ME_script*/ 
function site_script() {
    wp_enqueue_script('globaljs',get_template_directory_uri().'/me-template/js/global.js',array(),'1.0.0.',true);
	wp_enqueue_script('customjs',get_template_directory_uri().'/me-template/js/custom.js',array(),'1.0.0.',true);
	wp_enqueue_style( 'global_css', get_stylesheet_directory_uri() . '/me-template/css/styles.css', false, '1.0.0' );
	wp_enqueue_style( 'responsive_css', get_stylesheet_directory_uri() . '/me-template/css/responsive.css', false, '1.0.0' );
	wp_enqueue_style( 'print_css', get_stylesheet_directory_uri() . '/me-template/css/print.css', false, '1.0.0' );
	wp_enqueue_style( 'custom_css', get_stylesheet_directory_uri() . '/me-template/css/custom.css', false, '1.0.0' );
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

require_once get_template_directory() . '/me-template/options-setting/functions/options-setting-function.php';

add_action('admin_enqueue_scripts', function(){
    /*
    if possible try not to queue this all over the admin by adding your settings GET page val into next
    if( empty( $_GET['page'] ) || "my-settings-page" !== $_GET['page'] ) { return; }
    */
    wp_enqueue_media();
});

function test_func( $atts ) {
global $post;
$html = "";
$html .= "<img src='".get_option('opt-general-logo')."'/>";
$html .= "<img src='".get_option('opt-general-logo-2')."'/>";
$html .= "<div>".get_option('opt-footer-sidebar-layout')."</div>";
$html .= "<div>opt-footer-widget-1-columns-width: ".get_option('opt-footer-widget-1-columns-width')."</div>";
$html .= "<div>opt-footer-widget-2-columns-width ".get_option('opt-footer-widget-2-columns-width')."</div>";
$html .= "<div>opt-footer-widget-3-columns-width ".get_option('opt-footer-widget-3-columns-width')."</div>";
$html .= "<div>opt-footer-widget-4-columns-width ".get_option('opt-footer-widget-4-columns-width')."</div>";
$html .= "<div>opt-header-style: ".get_option('opt-header-type-select')."</div>";
$header = get_option('opt-header-type-select');
if (in_array($header,get_option('opt-header-logo-main-header-display'))) {
    $html .= "<div>opt-header-logo-main: ".get_option('opt-header-logo-main')."</div>";
}
if (in_array($header,get_option('opt-header-logo-2-main-header-display'))) {
    $html .= "<div>opt-header-logo-2-main: ".get_option('opt-header-logo-2-main')."</div>";
}
if (in_array($header,get_option('opt-header-main-menu-main-header-display'))) {
    $html .= "<div>opt-header-main-menu-main: ".get_option('opt-header-main-menu-main')."</div>";
}
if (in_array($header,get_option('opt-header-call-to-action-main-header-display'))) {
    $html .= "<div>opt-header-call-to-action-main: ".get_option('opt-header-call-to-action-main')."</div>";
}
if (in_array($header,get_option('opt-header-call-to-action-2-main-header-display'))) {
    $html .= "<div>opt-header-call-to-action-2-main: ".get_option('opt-header-call-to-action-2-main')."</div>";
}
if (in_array($header,get_option('opt-header-contact-info-main-header-display'))) {
    $html .= "<div>opt-header-contact-info-main: ".get_option('opt-header-contact-info-main')."</div>";
}
if (in_array($header,get_option('opt-header-socials-main-header-display'))) {
    $html .= "<div>opt-header-socials-main: ".get_option('opt-header-socials-main')."</div>";
}

if (in_array($header,get_option('opt-header-logo-secondary-header-display'))) {
    $html .= "<div>opt-header-logo-secondary: ".get_option('opt-header-logo-secondary')."</div>";
}
if (in_array($header,get_option('opt-header-logo-2-secondary-header-display'))) {
    $html .= "<div>opt-header-logo-2-secondary: ".get_option('opt-header-logo-2-secondary')."</div>";
}
if (in_array($header,get_option('opt-header-main-menu-secondary-header-display'))) {
    $html .= "<div>opt-header-main-menu-secondary: ".get_option('opt-header-main-menu-secondary')."</div>";
}
if (in_array($header,get_option('opt-header-call-to-action-secondary-header-display'))) {
    $html .= "<div>opt-header-call-to-action-secondary: ".get_option('opt-header-call-to-action-secondary')."</div>";
}
if (in_array($header,get_option('opt-header-call-to-action-2-secondary-header-display'))) {
    $html .= "<div>opt-header-call-to-action-2-secondary: ".get_option('opt-header-call-to-action-2-secondary')."</div>";
}
if (in_array($header,get_option('opt-header-contact-info-secondary-header-display'))) {
    $html .= "<div>opt-header-contact-info-secondary: ".get_option('opt-header-contact-info-secondary')."</div>";
}
if (in_array($header,get_option('opt-header-socials-secondary-header-display'))) {
    $html .= "<div>opt-header-socials-secondary: ".get_option('opt-header-socials-secondary')."</div>";
}
$html .= "<div>opt-header-title-enable: ".get_option('opt-header-title-enable')."</div>";
$html .= "<div>opt-header-breadcrumb-enable: ".get_option('opt-header-breadcrumb -enable')."</div>";
$html .= "<div>opt-header-bg-image-default: ".get_option('opt-header-bg-image-default')."</div>";
if (get_option('opt-call-to-action-1-text')&&get_option('opt-call-to-action-1-link')) {
$html .= "<div>opt-call-to-action-1-text: ".get_option('opt-call-to-action-1-text')."</div>";
$html .= "<div>opt-call-to-action-1-link: ".get_option('opt-call-to-action-1-link')."</div>";
}
echo "<br>";
echo "opt-header-call-to-action-main: ".get_option('opt-header-call-to-action-main');
echo "<br>";
echo "opt-header-call-to-action-secondary: ".get_option('opt-header-call-to-action-secondary');
echo "<br>";
echo "<br>";
echo "opt-header-call-to-action-2-main: ".get_option('opt-header-call-to-action-2-main');
echo "<br>";
echo "opt-header-call-to-action-2-secondary: ".get_option('opt-header-call-to-action-2-secondary');
echo "<br>";
if (in_array($header,get_option('opt-header-call-to-action-2-main-header-display'))) {
    if (get_option('opt-header-call-to-action-2-main')=="on"&&get_option('opt-call-to-action-2-text')&&get_option('opt-call-to-action-2-link')) {
       $html .= "<div>opt-call-to-action-2-text: ".get_option('opt-call-to-action-2-text')."</div>";
        $html .= "<div>opt-call-to-action-2-link: ".get_option('opt-call-to-action-2-link')."</div>";
    }
}
else if (in_array($header,get_option('opt-header-call-to-action-2-secondary-header-display'))) {
    if (get_option('opt-header-call-to-action-2-secondary')=="on"&&get_option('opt-call-to-action-2-text')&&get_option('opt-call-to-action-2-link')) {
       $html .= "<div>opt-call-to-action-2-text: ".get_option('opt-call-to-action-2-text')."</div>";
        $html .= "<div>opt-call-to-action-2-link: ".get_option('opt-call-to-action-2-link')."</div>";
    }
}
echo "<br>";
echo "<br>";
echo "header-options opt-header-title-enable-rows option-radio ".get_option('opt-header-title-enable');
echo "<br>";
echo "header-options opt-header-breadcrumb-enable-rows option-radio ".get_option('opt-header-breadcrumb-enable');
echo "<br>";echo "<br>";
echo $html;

        $value_custom_meta_use_custom_title = get_post_meta( $post->ID, 'custom_meta_use_custom_title_key', true );
        $value_custom_meta_custom_header_title = get_post_meta( $post->ID, 'custom_meta_custom_header_title_key', true );
        $value_custom_meta_custom_header_sub_title = get_post_meta( $post->ID, 'custom_meta_custom_header_sub_title_key', true );
        $value_custom_meta_header_background_type = get_post_meta( $post->ID, 'custom_meta_header_background_type_key', true );
        $value_custom_meta_banner_image = get_post_meta( $post->ID, 'custom_meta_banner_image_key', true );
        $value_custom_meta_show_breadcrumb = get_post_meta( $post->ID, 'custom_meta_show_breadcrumb_key', true );
        $value_custom_meta_use_top_banner = get_post_meta( $post->ID, 'custom_meta_use_top_banner_key', true );
        $value_custom_meta_header_background_slider = get_post_meta( $post->ID, 'custom_meta_header_background_slider_key', true );
        echo "<br>";
        echo $value_custom_meta_use_custom_title;
        echo "<br>";
        echo $value_custom_meta_custom_header_title;
        echo "<br>";
        echo $value_custom_meta_custom_header_sub_title;
        echo "<br>";
        echo $value_custom_meta_header_background_type;
        echo "<br>";
        echo '<img style="max-width:100%;" src="'.$value_custom_meta_banner_image.'" />';
        echo "<br>";
        echo $value_custom_meta_show_breadcrumb;
        echo "<br>";
        echo $value_custom_meta_use_top_banner;
        echo "<br>";
        echo $value_custom_meta_header_background_slider;
        if ($value_custom_meta_header_background_slider) {
            putRevSlider($value_custom_meta_header_background_slider);
        }
}
add_shortcode( 'test', 'test_func' );