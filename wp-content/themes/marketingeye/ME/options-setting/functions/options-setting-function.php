<?php
/**
 * Functions which for ME options setting
 *
 * @package ME
 */

/*import ME_script*/ 
function site_options_script() {
	wp_enqueue_script('options_setting_js',get_template_directory_uri().'/ME/options-setting/js/options-setting.js',array(),'1.0.0.',true);
	wp_register_style( 'options_style', get_stylesheet_directory_uri() . '/ME/options-setting/css/options-setting-styles.css', false, '1.0.0' );
}
add_action( 'wp_enqueue_scripts', 'site_options_script' );

function site_options_style() {
	wp_register_style( 'options_style', get_stylesheet_directory_uri() . '/ME/options-setting/css/options-setting-styles.css', false, '1.0.0' );
	wp_enqueue_style( 'options_style' );
}
add_action( 'admin_enqueue_scripts', 'site_options_style' );

if ( file_exists( get_template_directory() . '/ME/options-setting/functions/global_setting_core/theme_options.php' ) ) {
	require_once get_template_directory() . '/ME/options-setting/functions/global_setting_core/theme_options.php';
}

function add_new_menu_items()
	{
		add_menu_page(
			"Theme Options",
			"Theme Options",
			"manage_options",
			"me-theme-options",
			"me_theme_options",
			"", 
			99
		);

	}
add_action( 'admin_menu', 'add_new_menu_items' );


function me_theme_options( $active_tab = '' ) {
    ?>

    <div class="wrap">
        <div id="icon-themes" class="icon32" ><br></div>
        <h2>My Theme Options</h2>

        <?php
        global $config;
        if( isset( $_GET[ 'tab' ] ) ) {
            $active_tab = $_GET[ 'tab' ];
        }
        ?>
        <div class="option-page-setting-wrapper">
        <h2 class="nav-tab-wrapper">
			<?php
			foreach ($config->sections as $section) :?>
                    <a href="?page=me-theme-options&tab=<?php echo $section['id'];?>" class="nav-tab <?php if ($active_tab == $section['id']) {echo 'nav-tab-active';}?>"><?php echo $section['title']; ?></a>    
             <?php endforeach; ?>
          
        </h2>
        <form class="setting-form" method="post" action="options.php">
            <?php wp_nonce_field( 'update-options' ); ?>
            <?php 
                if( isset( $_GET[ 'tab' ] ) ):
					$active_tab = $_GET[ 'tab' ];
	            	foreach ($config->sections as $section) :
						if ($active_tab==$section['id']) {
		                    settings_fields('me-'.$section['id']);
		                    do_settings_sections('me-'.$section['id']);
						}
		                endforeach;
                submit_button();
            	endif;
            ?>
        </form>
    </div>
    </div>

<?php
global $config;
    				if( isset( $_GET[ 'tab' ] ) ):
    					$active_tab = $_GET[ 'tab' ];
	    				foreach ($config->sections as $section) :
	    					if ($active_tab==$section['id']):	    				
								foreach ($section['fields'] as $field) :
									$setting_field_id = $field['id'];
									$setting_field_type = $field['type'];
									$setting_filed_title = $field['title'];	
									$arg = array('id'=>$setting_field_id,'type'=>$setting_field_type,'title'=>$setting_filed_title);
								endforeach;
							endif;
						endforeach;
					endif;
}

function me_admin_init() {
  	global $config;
    				if( isset( $_GET[ 'tab' ] ) ):
    					$active_tab = $_GET[ 'tab' ];
	    				foreach ($config->sections as $section) :
	    					if ($active_tab==$section['id']):
			    				add_settings_section( $section['id'],  $section['title'], NULL, 'me-'.$section['id'] );
								foreach ($section['fields'] as $field) :
										$setting_field_id = $field['id'];
										$setting_field_type = $field['type'];
										$setting_filed_title = $field['title'];	
										empty($arg);
										$arg = array('id'=>$setting_field_id,'type'=>$setting_field_type,'title'=>$setting_filed_title);
										add_settings_field( $field['id'], $field['title'], 'me_option_settings', 'me-'.$section['id'], $section['id'],$arg );
								endforeach;

							endif;
						endforeach;
					endif;
	foreach ($config->sections as $section) :	
		foreach ($section['fields'] as $field) :
	register_setting( 'me-'.$section['id'], $field['id'] );
		endforeach;
	endforeach;

}
add_action( 'admin_init', 'me_admin_init' );

function me_option_settings(array $args) {
$setting_field_id = $args['id'];
			$setting_field_type = $args['type'];
			$setting_filed_title = $args['title'];
			echo '<input type="text" name="'.$setting_field_id.'" id="'.$setting_field_id.'" value="'.get_option($setting_field_id).'" />';
}

function me_general_option() {
    _e( 'The general section description goes here.');
}
add_action( 'wp_enqueue_scripts', 'me_link_color' );