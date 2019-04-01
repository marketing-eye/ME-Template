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
			"theme-options",
			"theme_options_page",
			"", 
			99
		);

	}

	function theme_options_page()
	{
		?>
			<div class="wrap">
			<div id="icon-options-general" class="icon32"></div>
			<h1>Theme Options</h1>
			

			<?php
				global $config;
				//we check if the page is visited by click on the tabs or on the menu button.
				//then we get the active tab.
				$active_tab = $config->sections[0]["title"];
							echo $_GET["tab"];

				if(isset($_GET["tab"]))
				{
					$active_tab = $_GET["tab"];
				}
			?>
			
			<!-- wordpress provides the styling for tabs. -->
			<div class="option-page-setting-wrapper">
			<h2 class="nav-tab-wrapper">
				<!-- when tab buttons are clicked we jump back to the same page but with a new parameter that represents the clicked tab. accordingly we make it active -->
				<?php 
				foreach ($config->sections as $section) :?>
					<a href="?page=theme-options&tab=<?php echo $section['id'];?>" class="nav-tab <?php if ($active_tab == $section['title']) {echo 'nav-tab-active';}?>"><?php echo $section['title']; ?></a>    
				<?php endforeach;
				?>
			</h2>
			<form class="setting-form" method="post" action="options.php">
				<?php
				
					settings_fields("option-settings");
					
					do_settings_sections("theme-options");
				
					submit_button(); 
					
				?>          
			</form>
		</div>
	</div>
		<?php
	}

	add_action("admin_menu", "add_new_menu_items");

	function display_options()
	{
		add_settings_section("option-settings", "Header Options", "display_header_options_content", "theme-options");

		//here we display the sections and options in the settings page based on the active tab
		global $config;
		if(isset($_GET["tab"]))
		{
			foreach ($config->sections as $section) :
				if ($_GET["tab"]==$section['id']) :
					$args = array();
					foreach ($section['fields'] as $field) :
						$setting_field_id = $field['id'];
						$setting_field_type = $field['type'];
						$setting_filed_title = $field['title'];	
						$arg = array('id'=>$setting_field_id,'type'=>$setting_field_type,'title'=>$setting_filed_title);
						array_push ($args, $arg);
						add_settings_field(
							$setting_field_id,
							$setting_filed_title,
							"display_form_element",
							"theme-options",
							"option-settings",
							$arg
						);
					endforeach;
				endif;
			endforeach;
		}
	}

	function display_header_options_content(){echo "The header of the theme";}
	
	function display_form_element(array $args) {
			$setting_field_id = $args['id'];
			$setting_field_type = $args['type'];
			$setting_filed_title = $args['title'];
			echo '<input type="text" name="'.$setting_field_id.'" id="'.$setting_field_id.'" value="'.get_option($setting_field_id).'" />';
	}
	function display_logo_form_element()
	{
		?>
			<input type="text" name="header_logo" id="header_logo" value="<?php echo get_option('header_logo'); ?>" />
		<?php
	}
	function display_ads_form_element()
	{
		?>
			<input type="text" name="advertising_code" id="advertising_code" value="<?php echo get_option('advertising_code'); ?>" />
		<?php
	}

	add_action("admin_init", "display_options");