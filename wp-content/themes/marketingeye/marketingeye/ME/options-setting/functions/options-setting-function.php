<?php
/**
 * Functions which for ME options setting
 *
 * @package ME
 */

/*import ME_script*/ 
function site_script() {
    wp_enqueue_script('options_setting_js',get_template_directory_uri().'/ME/options-setting/js/options-setting.js',array(),'1.0.0.',true);
	wp_register_style( 'options_style', get_stylesheet_directory_uri() . '/ME/options-setting/css/options-setting-styles.css', false, '1.0.0' );
}
add_action( 'wp_enqueue_scripts', 'site_script' );