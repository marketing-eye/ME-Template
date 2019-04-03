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
        <h2 class="nav-tab-wrapper">
			<?php
			foreach ($config->sections as $section) :?>
                    <a href="?page=me-theme-options&tab=<?php echo $section['id'];?>" class="nav-tab <?php if ($active_tab == $section['id']) {echo 'nav-tab-active';}?>"><?php echo $section['title']; ?></a>    
             <?php endforeach; ?>
          
        </h2>
        <form method="post" action="options.php">
            <?php wp_nonce_field( 'update-options' ); ?>
            <?php 
                if( isset( $_GET[ 'tab' ] ) ):
					$active_tab = $_GET[ 'tab' ];
	            	foreach ($config->sections as $section) :
						if ($active_tab==$section['id']) {
		                    echo $active_tab;
		                    settings_fields('me-'.$section['id']);
		                    do_settings_sections('me-'.$section['id']);
						}
		                endforeach;
                submit_button();
            	endif;
            ?>
        </form>
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
									var_dump($arg);echo"<br>";
								endforeach;
							endif;
						endforeach;
					endif;
}

function me_admin_init() {
  
    add_settings_section( 'section_colors',  'Color Settings', null, 'me-general-setting-1' );
    add_settings_field( 'link_color', 'Link Color', 'me_setting_color', 'me-general-setting-1', 'section_colors' );
    add_settings_field( 'link_hover_color', 'Link Hover Color', 'me_hover_setting_color', 'me-general-setting-1', 'section_colors' );
	register_setting( 'me-general-setting-1', 'link_color' );
    register_setting( 'me-general-setting-1', 'link_hover_color' );

	// add_settings_section( 'general-setting-1',  'General Settings', null, 'me-general-setting-1' );
	// $arg = array('id'=>'opt-general-introduction','type'=>'text','title'=>'Welcome to ME Theme Option Panel');
	// add_settings_field( 'opt-general-introduction', 'Welcome to ME Theme Option Panel', 'me_option_settings', 'me-general-setting-1', 'general-setting-1',$arg );
	// register_setting( 'me-general-setting-1', 'opt-general-introduction' );

	// $arg = array('id'=>'opt-general-logo','type'=>'media','title'=>'Loogo update');
	// add_settings_field( 'opt-general-logo', 'Loogo update', 'me_option_settings', 'me-general-setting-1', 'general-setting-1',$arg );
	// register_setting( 'me-general-setting-1', 'opt-general-logo' );

	// add_settings_section( 'general-setting-2',  'General Settings', null, 'me-general-setting-2' );
	// $arg = array('id'=>'opt-general-introduction-2','type'=>'info','title'=>'Welcome to ME Theme Option Panel-2');
	// add_settings_field( 'opt-general-introduction-2', 'Welcome to ME Theme Option Panel-2', 'me_option_settings', 'me-general-setting-2', 'general-setting-2',$arg );
	// register_setting( 'me-general-setting-2', 'opt-general-introduction-2' );

	// $arg = array('id'=>'opt-general-logo-2','type'=>'media','title'=>'Loogo update-2');
	// add_settings_field( 'opt-general-logo-2', 'Loogo update-2', 'me_option_settings', 'me-general-setting-2', 'general-setting-2',$arg );
	// register_setting( 'me-general-setting-2', 'opt-general-logo-2' );


	global $config;
    				if( isset( $_GET[ 'tab' ] ) ):
    					$active_tab = $_GET[ 'tab' ];
	    				foreach ($config->sections as $section) :
	    					if ($active_tab==$section['id']):
	    						echo "sectionIDsectionIDsectionIDsectionIDsectionID  ".$section['id']."  ".$section['title'];
			    				add_settings_section( $section['id'],  $section['title'], NULL, 'me-'.$section['id'] );
								foreach ($section['fields'] as $field) :
									if ($field['id'] == 'opt-general-introduction-2') {
										$setting_field_id = $field['id'];
										$setting_field_type = $field['type'];
										$setting_filed_title = $field['title'];	
										echo " ".$setting_field_id." ".$setting_filed_title; 
										empty($arg);
										$arg = array('id'=>$setting_field_id,'type'=>$setting_field_type,'title'=>$setting_filed_title);
										add_settings_field( $field['id'], $field['title'], 'me_option_settings', 'me-'.$section['id'], $section['id'],$arg );
										register_setting( 'me-'.$section['id'], $field['id'] );
									}
								endforeach;

							endif;
						endforeach;
					endif;
			    	
			    	

}
add_action( 'admin_init', 'me_admin_init' );

function me_option_settings(array $args) {
$setting_field_id = $args['id'];
			$setting_field_type = $args['type'];
			$setting_filed_title = $args['title'];
			echo $setting_field_id;
			echo $setting_field_type;
			echo $setting_filed_title;
			echo '<input type="text" name="'.$setting_field_id.'" id="'.$setting_field_id.'" value="'.get_option($setting_field_id).'" />';
}

function me_general_option() {
    _e( 'The general section description goes here.');
}

function me_title_option() {
    $options = get_option('title');
    ?>
    <input type="text" name="title" id="title" value="<?php echo $options;?>"/>
    <?php 
}

function me_section_colors() {
    _e( 'The general section description goes here.' );
}

function me_setting_color() {
    $link_color = get_option( 'link_color' );
    ?>
    <input class="link_color" type="text" name="link_color" value="<?php echo $link_color; ?>" />
    <input type='button' class='select_color button-secondary' value='Select Color'>
    <div class='color_picker' style='z-index: 100; background:#f1f1f1; position:absolute; display:none;'></div>
    <input type='button' class='reset_color button-secondary' value='Reset'>
    <?php
}

function me_hover_setting_color() {
    $link_hover_color = get_option( 'link_hover_color' );
    ?>
    <input class="link_color" type="text" name="link_hover_color" value="<?php echo $link_hover_color; ?>" />
    <input type='button' class='select_color button-secondary' value='Select Color'>
    <div class='color_picker' style='z-index: 100; background:#f1f1f1; position:absolute; display:none;'></div>
    <input type='button' class='reset_color button-secondary' value='Reset'>
    <?php
}

function me_link_color() {
    $options = get_option( 'me-theme-options' );
    $link_color = $options['link_color'];
    $link_hover_color = $options['link_hover_color'];
    echo "<style> a { color: $link_color; } a:hover { color: $link_hover_color; } </style>";
}
add_action( 'wp_enqueue_scripts', 'me_link_color' );