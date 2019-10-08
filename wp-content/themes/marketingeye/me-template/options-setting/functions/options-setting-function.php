<?php
/**
	* Functions which for ME options setting
	*
	* @package ME
	*/

/*import ME_script*/ 
function site_options_script($hook) {
	if ($hook = 'toplevel_page_me-theme-options') {
		wp_enqueue_script('options_setting_js',get_template_directory_uri().'/me-template/options-setting/js/options-setting.js',array(),'1.0.0.',true);
	}
}
add_action( 'admin_enqueue_scripts', 'site_options_script' );

function site_options_style() {
	wp_register_style( 'options_style', get_stylesheet_directory_uri() . '/me-template/options-setting/css/options-setting-styles.css', false, '1.0.0' );
	wp_enqueue_style( 'options_style' );
}
add_action( 'admin_enqueue_scripts', 'site_options_style' );

if ( file_exists( get_template_directory() . '/me-template/options-setting/functions/global_setting_core/theme_options.php' ) ) {
	require_once get_template_directory() . '/me-template/options-setting/functions/global_setting_core/theme_options.php';
}

function custom_css_func() {
$html_css="";
$html_css .= "<style type='text/css'>".get_option('opt-general-custom-css')."</style>";
echo $html_css;
}
add_action('wp_head', 'custom_css_func');

function custom_js_func() {
$html_js="";
$html_js .= "<script type='text/javascript'>(function($){".get_option('opt-general-custom-js')."})(jQuery);</script>";
echo $html_js;
}
add_action('wp_footer', 'custom_js_func');

//regist sidebar
add_action( 'widgets_init', 'footer_column_widgets_init' );
function footer_column_widgets_init() {
	register_sidebar( array(
		'name' => __( 'Footer Widget 1', 'marketingeye' ),
		'id' => 'footer-widget-1',
		'description' => __( 'This is a footer widget 1', 'marketingeye' ),
		'before_widget' => '<div class="footer-widget footer-widget-1">',
	'after_widget'  => '</div>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name' => __( 'Footer Widget 2', 'marketingeye' ),
		'id' => 'footer-widget-2',
		'description' => __( 'This is a footer widget 2', 'marketingeye' ),
		'before_widget' => '<div class="footer-widget footer-widget-2">',
	'after_widget'  => '</div>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name' => __( 'Footer Widget 3', 'marketingeye' ),
		'id' => 'footer-widget-3',
		'description' => __( 'This is a footer widget 3', 'marketingeye' ),
		'before_widget' => '<div class="footer-widget footer-widget-3">',
	'after_widget'  => '</div>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name' => __( 'Footer Widget 4', 'marketingeye' ),
		'id' => 'footer-widget-4',
		'description' => __( 'This is a footer widget4', 'marketingeye' ),
		'before_widget' => '<div class="footer-widget footer-widget-4">',
	'after_widget'  => '</div>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>',
	) );
}

add_action( 'widgets_init', 'footer_extrs_widgets_init' );
function footer_extrs_widgets_init() {
	register_sidebar( array(
		'name' => __( 'Footer Widget Above', 'marketingeye' ),
		'id' => 'footer-widget-above',
		'description' => __( 'This is the footer widget above column footer widget', 'marketingeye' ),
		'before_widget' => '<div class="footer-widget footer-widget-above">',
	'after_widget'  => '</div>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name' => __( 'Footer Widget Underneath', 'marketingeye' ),
		'id' => 'footer-widget-underneath',
		'description' => __( 'This is the footer widget underneath column footer widget', 'marketingeye' ),
		'before_widget' => '<div class="footer-widget footer-widget-underneath">',
	'after_widget'  => '</div>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>',
	) );
}
function social_media_list_func() {
	$html = "<div class='social-media-list-wrapper'>";
	if ((get_option('opt-social-facebook')))
		{
		$html.= trim(get_option('opt-social-facebook')) != '' ? '<a href="' . esc_url(get_option('opt-social-facebook')) . '" target="_blank"><i class="fa fa-facebook"></i></a>' : '';
		}
	if ((get_option('opt-social-google-plus')))
		{
		$html.= trim(get_option('opt-social-google-plus')) != '' ? '<a href="' . esc_url(get_option('opt-social-google-plus')) . '" target="_blank"><i class="fa fa-google-plus"></i></a>' : '';
		}
	if ((get_option('opt-social-twitter')))
		{
		$html.= trim(get_option('opt-social-twitter')) != '' ? '<a href="' . esc_url(get_option('opt-social-twitter')) . '" target="_blank"><i class="fa fa-twitter"></i></a>' : '';
		}
	if ((get_option('opt-social-instagram')))
		{
		$html.= trim(get_option('opt-social-instagram')) != '' ? '<a href="' . esc_url(get_option('opt-social-instagram')) . '" target="_blank"><i class="fa fa-instagram"></i></a>' : '';
		}
	if ((get_option('opt-social-youtube')))
		{
		$html.= trim(get_option('opt-social-youtube')) != '' ? '<a href="' . esc_url(get_option('opt-social-youtube')) . '" target="_blank"><i class="fa fa-youtube"></i></a>' : '';
		}
	if ((get_option('opt-social-vimeo')))
		{
		$html.= trim(get_option('opt-social-vimeo')) != '' ? '<a href="' . esc_url(get_option('opt-social-vimeo')) . '" target="_blank"><i class="fa fa-vimeo-square"></i></a>' : '';
		}
	if ((get_option('opt-social-linkedin')))
		{
		$html.= trim(get_option('opt-social-linkedin')) != '' ? '<a href="' . esc_url(get_option('opt-social-linkedin')) . '" target="_blank"><i class="fa fa-linkedin"></i></a>' : '';
		}
	if ((get_option('opt-social-rss')))
		{
		$html.= trim(get_option('opt-social-rss')) != '' ? '<a href="' . esc_url(get_option('opt-social-rss')) . '" target="_blank"><i class="fa fa-rss"></i></a>' : '';
		}
	$html.="</div>";
	echo $html;
}
add_shortcode('social_media_list','social_media_list_func');

function contact_info_func() {
	$html = "<div class='contact-info-wrapper'>";
	if (get_option('opt-contact-phone-number')) {
		$html.= trim(get_option('opt-contact-phone-number')) != '' ? '<a class="contact-detail phone-number fa fa-phone" href="tel:' . get_option('opt-contact-phone-number') . '">'.get_option('opt-contact-phone-number').'</a>' : '';
	}
	if (get_option('opt-contact-email')) {
		$html.= trim(get_option('opt-contact-email')) != '' ? '<a class="contact-detail email-address fa fa-envelope" href="mailto:' . get_option('opt-contact-email') . '">'.get_option('opt-contact-email').'</a>' : '';
	}
	if (get_option('opt-contact-address')) {
		$html.= trim(get_option('opt-contact-address')) != '' ? '<span class="contact-detail location fa fa-map-marker">'.get_option('opt-contact-address').'</span>' : '';
	}
	$html .="</div>";
	echo $html;
}
add_shortcode('contact_info','contact_info_func');

//options setting page
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
		$active_tab = isset( $_GET[ 'tab' ])? $_GET[ 'tab' ] : 'general-settings';
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
				$active_tab = isset( $_GET[ 'tab' ])? $_GET[ 'tab' ] : 'general-settings';
					foreach ($config->sections as $section) :
						if ($active_tab==$section['id']) {
							settings_fields('me-'.$section['id']);
							do_settings_sections('me-'.$section['id']);
						}
					endforeach;
				submit_button();
			?>
		</form>
	</div>
	</div>

<?php
global $config;
				$active_tab = isset( $_GET[ 'tab' ])? $_GET[ 'tab' ] : 'general-settings';
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
}

function me_admin_init() {
	global $config;
				$active_tab = isset( $_GET[ 'tab' ])? $_GET[ 'tab' ] : 'general-settings';
						foreach ($config->sections as $section) :
							if ($active_tab==$section['id']):
								add_settings_section( $section['id'],  $section['title'], NULL, 'me-'.$section['id'] );
								foreach ($section['fields'] as $field) :
										$setting_field_id = $field['id'];
										$setting_field_type = $field['type'];
										$setting_filed_title = $field['title']; 
										if (array_key_exists("default",$field)) {
											$setting_filed_default = $field['default'];
										}
										else $setting_filed_default = "";
										empty($arg);
										switch ($setting_field_type) {
											case 'image':
												$images="";
												if (array_key_exists("images",$field)) {
													$images = $field['images'];
												}
												$arg = array('id'=>$setting_field_id,'type'=>$setting_field_type,'title'=>$setting_filed_title,'default'=>$setting_filed_default,'class'=>$section['id']." ".$setting_field_id."-rows option-image",'images'=>$images);
												break;
											case 'radio':
												$setting_filed_required = "";
												if (array_key_exists("required",$field)) {
													$setting_filed_required = $field['required'];
												}
												$arg = array('id'=>$setting_field_id,'type'=>$setting_field_type,'title'=>$setting_filed_title,'default'=>$setting_filed_default,'class'=>$section['id']." ".$setting_field_id."-rows option-radio",'required'=>$setting_filed_required);
												break;
											case 'heading':
												$arg = array('id'=>$setting_field_id,'type'=>$setting_field_type,'title'=>$setting_filed_title,'default'=>$setting_filed_default,'class'=>$section['id']." ".$setting_field_id."-rows option-heading");
												break;
											case 'editor':
												$setting_filed_editor_qicktags = true;
												$setting_filed_editor_tinymce = true;
												$setting_filed_editor_media_buttons = true;
												if (array_key_exists("editor_qicktags",$field)) {
													$setting_filed_editor_qicktags = $field['editor_qicktags'];
												}
												if (array_key_exists("editor_tinymce",$field)) {
													$setting_filed_editor_tinymce = $field['editor_tinymce'];
												}
												if (array_key_exists("editor_media_buttons",$field)) {
													$setting_filed_editor_media_buttons = $field['editor_media_buttons'];
												}
												$arg = array('id'=>$setting_field_id,'type'=>$setting_field_type,'title'=>$setting_filed_title,'default'=>$setting_filed_default,'editor_qicktags'=>$setting_filed_editor_qicktags,'editor_tinymce'=>$setting_filed_editor_tinymce,'editor_media_buttons'=>$setting_filed_editor_media_buttons,'class'=>$section['id']." ".$setting_field_id."-row option-editor");
												break;
											case 'select':
												$select_filed_select_options="";
												if (array_key_exists("select_options",$field)) {
													$select_filed_select_options = $field['select_options'];
												}
												else {
													$select_filed_select_options = "";
												}

													$arg = array('id'=>$setting_field_id,'type'=>$setting_field_type,'title'=>$setting_filed_title,'select_options'=>$select_filed_select_options,'default'=>$setting_filed_default,'class'=>$section['id']." ".$setting_field_id."-row option-select");
													break;
											default: 
												$arg = array('id'=>$setting_field_id,'type'=>$setting_field_type,'title'=>$setting_filed_title,'default'=>$setting_filed_default,'class'=>$section['id']." ".$setting_field_id."-row option-text");
										}
										add_settings_field( $field['id'], $field['title'], 'me_option_settings', 'me-'.$section['id'], $section['id'],$arg );
										if ($setting_field_type =='media'):
											add_settings_field($field["id"]."upload-image", 'Image Preview', 'options_image_setting_logo_preview', 'me-'.$section['id'], $section['id'],$arg);
										endif;
								endforeach;

							endif;
						endforeach;
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
			$setting_filed_default="";
			if (array_key_exists('default',$args)) {
				$setting_filed_default = $args['default'];
			}
			if (!get_option($setting_field_id)&&($setting_filed_default)) {
				update_option($setting_field_id,$setting_filed_default);
			}
	switch ($args['type']) {
		case 'heading':
			break;
		case 'media':
				if (array_key_exists('default',$args)) {
					$setting_filed_default = $args['default'];
				}
				echo '<input class="options-input-field" type="text" id="image_url" name="'.$setting_field_id.'" value="'.get_option($setting_field_id).'" /><br>'; 
				echo '<input id="image_upload_button" type="button" class="button" value="Upload Image" /> ';
				break;
			?>
			
	
	<?php
		case'editor':
				$setting_filed_default_editor_quicktags = true;
				$setting_filed_default_editor_media_buttons = true;
				$setting_filed_default_editor_tinymce = true;
				$editor_value_default = "";
				if (array_key_exists('default',$args)) {
					if (!$args['default']) {
						if (array_key_exists('editor_qicktags',$args)) {
							$setting_filed_default_editor_quicktags = $args['editor_qicktags'];
						}
						if (array_key_exists('editor_qicktags',$args)) {
							$setting_filed_default_editor_media_buttons = $args['editor_media_buttons'];
						}
						if (array_key_exists('editor_qicktags',$args)) {
							$setting_filed_default_editor_tinymce = $args['editor_tinymce'];
						}
						add_filter('wp_default_editor', create_function('', 'return "html";'));
					}
					else {
						$editor_value_default = $args['default'];
						add_filter('wp_default_editor', create_function('', 'return "tinymce";'));
					}
				}
			$editor_value = (get_option($setting_field_id)==null)?$editor_value_default:get_option($setting_field_id);
			if ($setting_filed_default_editor_tinymce) {
				$settings = array( 'quicktags'=> $setting_filed_default_editor_quicktags,'media_buttons' => $setting_filed_default_editor_media_buttons,'textarea_rows'=>'8' );
			}
			else {
				$settings = array(
					'quicktags' => array(
						'buttons' => ','
					),
					'media_buttons' => $setting_filed_default_editor_media_buttons,
					'tinymce' => false,
					'textarea_rows'=>'8',
				);
			}
			wp_editor($editor_value,$setting_field_id, $settings);
			break;
		case 'select':
			if (array_key_exists('select_options',$args)) {
				echo '<select name="'.$setting_field_id.'">';
				foreach ($args['select_options'] as $key => $select_option) {
					if (get_option($setting_field_id)==$select_option) {
						echo '<option selected value="'.$select_option.'">' .$key. '</option>';
					}
					else echo '<option value="'.$select_option.'">' .$key. '</option>';
				}
				echo '</select>';
			}
			break;
		case 'image':
			if (array_key_exists('images',$args)) {
				echo '<div class="images-wrapper">';
				foreach ($args['images'] as $key => $image) {
					echo '<div class="images-block">';
					echo '<div class="image-name">'.$key.'</div>';
					echo '<a href="#" class="lightbox_trigger">';
					echo '<img atl="'.$key.'" src="'.$image.'" />';
					echo '</a>';
					echo '</div>';
				}
				echo '</div>';
				?>
				<div id="lightbox">
				    <div id="content">
				    	<div class="name"></div>
				        <img src="#" />
				    </div>
				</div>
				<?php
			}
		break;
		case 'radio':
			$header_element_display = array();
			$display_all_time = array('opt-header-transparent-enable','opt-header-title-enable','opt-header-breadcrumb-enable');
			if ((array_key_exists('required',$args))&&(!in_array($args['id'],$display_all_time))) {
				echo "<div class='header-display-fields'>";
				foreach($args['required'] as $key => $required_header) {
					echo "<div class='header-display-field'>".$required_header."</div>";
					$header_element_display[$key] = $required_header;
				}
				echo "</div>";
				update_option($setting_field_id.'-header-display', $header_element_display);
			}
			$options = get_option($setting_field_id);
			$checked = ($options == 'off' ? ' checked="checked"' : '');
			echo "<label class='switch'><input class='options-input-field' id='".$setting_field_id."' name='".$setting_field_id."' type='checkbox' value='off' {$checked} /><span class='slider'></span></label>";
			?>
		<?php
			break;
		default:
			echo '<input class="options-input-field" type="text" name="'.$setting_field_id.'" id="'.$setting_field_id.'" value="'.get_option($setting_field_id).'" />';
	}
}


function options_image_setting_logo_preview(array $args) {
	$setting_field_id = $args['id'];
	$setting_field_type = $args['type'];
	$setting_filed_title = $args['title'];
	$wptuts_options = get_option( $setting_field_id );  ?>
	<div class="upload-image" id="<?php echo $setting_field_id;?>_upload_image_preview" style="min-height: 100px;">
		<img style="max-width:100%;" src="<?php echo get_option($setting_field_id); ?>" />
	</div>
	<?php
}

add_action('admin_footer', function() { 
	/*
	if possible try not to queue this all over the admin by adding your settings GET page val into next
	if( empty( $_GET['page'] ) || "my-settings-page" !== $_GET['page'] ) { return; }
	*/
	?>
	<script>
		jQuery(document).ready(function($){
			$("#image_upload_button.button").click(function(e) {
				e.preventDefault();
				var custom_uploader;
				var upload_button = $(this);
				//If the uploader object has already been created, reopen the dialog
				if (custom_uploader) {
					custom_uploader.open();
					return;
				}
				//Extend the wp.media object
				custom_uploader = wp.media.frames.file_frame = wp.media({
					title: 'Choose Image',
					button: {
						text: 'Choose Image'
					},
					multiple: false
				});
				//When a file is selected, grab the URL and set it as the text field's value
				custom_uploader.on('select', function() {
					attachment = custom_uploader.state().get('selection').first().toJSON();
					upload_button.siblings(".options-input-field").val(attachment.url);
					var id=upload_button.siblings(".options-input-field").attr("name");
					if ($("#"+id+"_upload_image_preview img").length) {
						$("#"+id+"_upload_image_preview img").attr("src", attachment.url);
					}
				});
				//Open the uploader dialog
				custom_uploader.open();
			});      
		});
	</script>
	<?php
});

function theme_header_layout() {
	global $post;
	$container = get_theme_mod( 'understrap_container_type' );
	$html='';
	$header_html = '';
	$header_top_html = '';
	$main_section_html = '';
	$secondary_section_html = '';
	$header_banner_html = '';
	$header_banner_global = '';
	$header_banner_internal_html = '';
	$bg_img_html = '';
	$slider_html = '';
	$bg_img_wrap_class = '';
	$slider_wrap_class = '';
	$header_class = ''; // HEADER CLASS
	$header_name = ( get_option('opt-header-type-select') ) ? get_option('opt-header-type-select') : 'template1';
	$header_class= "header-style-".get_option('opt-header-type-select');
	if (get_option( 'opt-header-bg-image-default' )) {
		$header_banner_global = esc_url(get_option( 'opt-header-bg-image-default' ));
	}
	//header_nav
	$theme_nav ="";
	if (theme_radio_value('opt-header-main-menu-main')) {
		ob_start();
		theme_header_nav();
		$theme_nav = ob_get_clean();        
	}
	//main_section
	$main_section_class = theme_header_main_section_class($header_name);
	$header_transparent_class = "";
	$main_section_html .= '<div class="header-main-section ' .$main_section_class.' clearfix">';
	$main_section_html .= '<div class="container ' . esc_attr( $header_name ) . '-container">';
	$main_section_html .= '<div class="inner-section-container">';
	$main_section_left_part_html = "<div class='header-main-section-left-part'>";
	$main_section_right_part_html = "<div class='header-main-section-right-part'>";
	switch ($header_name):
		case 'template4':
			$main_section_meta_html = "<div class='header-main-section-meta-part'>";
			$main_section_meta_html .= theme_header_cta("main").theme_header_contact_info("main").theme_header_social_media("main");
			$main_section_meta_html .="</div>";
			$main_section_left_part_html .= theme_header_logo("main");
			$main_section_right_part_html = $main_section_right_part_html.$main_section_meta_html.$theme_nav;
		break;
		case 'template5':
			$main_section_left_part_html .= $theme_nav;
			$main_section_right_part_html .= theme_header_social_media("main");
		break;
		case 'template6':
			$main_section_left_part_html .= $theme_nav;
		break;
		default: //template1,template2,template3
			$main_section_left_part_html = $main_section_left_part_html.theme_header_logo("main")."<div class='contact-info-wrapper-mobile'>".theme_header_contact_info("secondary")."</div>";
			$main_section_right_part_html .= $theme_nav;
	endswitch;
	$main_section_left_part_html .='</div>';
	$main_section_right_part_html .='</div>';
	$main_section_html = $main_section_html.$main_section_left_part_html.$main_section_right_part_html;
	$main_section_html .= '</div></div></div>';
	//secondary_section
	$secondary_section_class = theme_header_secondary_section_class($header_name);
	$secondary_section_html .= '<div class="header-secondary-section ' .$secondary_section_class.' clearfix">';
	$secondary_section_html .= '<div class="container ' . esc_attr( $header_name ) . '-container">';
	$secondary_section_html .= '<div class="inner-section-container">';
	$secondary_section_left_part_html = "<div class='header-secondary-section-left-part'>";
	$secondary_section_right_part_html = "<div class='header-secondary-section-right-part'>";
	switch ($header_name):
		case 'template2' :
			$secondary_section_left_part_html .= theme_header_social_media("secondary");
			$secondary_section_right_part_html .= theme_header_cta("secondary").theme_header_contact_info("secondary");
		break;
		case 'template3' :
			$secondary_section_right_part_html .= theme_header_cta("secondary").theme_header_contact_info("secondary").theme_header_social_media("secondary");;
		break;
		case 'template4':
			
		break;
		case 'template5':
			$secondary_section_left_part_html .= theme_header_logo("secondary");
			$secondary_section_right_part_html .= theme_header_cta("secondary").theme_header_contact_info("secondary");
		break;
		case 'template6':
			$secondary_section_left_part_html .= theme_header_logo("secondary");
			$secondary_section_right_part_html .= theme_header_cta("secondary").theme_header_contact_info("secondary").theme_header_social_media("secondary");;
		break;
		default: //template1
			$secondary_section_left_part_html .= theme_header_contact_info("secondary");
			$secondary_section_right_part_html .= theme_header_cta("secondary").theme_header_social_media("secondary");
	endswitch;
	$secondary_section_left_part_html .='</div>';
	$secondary_section_right_part_html .='</div>';
	$secondary_section_html = $secondary_section_html.$secondary_section_left_part_html.$secondary_section_right_part_html;
	$secondary_section_html .= '</div></div></div>';
	$switch_value = get_option('opt-header-transparent-enable');
	if ($switch_value == "off") $header_transparent_class="";
	else $header_transparent_class="header-transparent";
	$header_top_html = "<div class='header-top header-type-$header_name'>".$secondary_section_html.$main_section_html."</div>";
	$header_banner_html = "<div class='header-banner' style='background-image:url(".$header_banner_global.");'>";
	$value_custom_meta_header_background_type = "";
	$value_custom_meta_header_background_slider = "";
	$value_custom_meta_show_breadcrumb = "";
	$value_custom_meta_banner_image = "";
	if (count($post)) {
		$value_custom_meta_header_background_type = get_post_meta( $post->ID, 'custom_meta_header_background_type_key', true );
		$value_custom_meta_header_background_slider = get_post_meta( $post->ID, 'custom_meta_header_background_slider_key', true );
		$value_custom_meta_show_breadcrumb = get_post_meta( $post->ID, 'custom_meta_show_breadcrumb_key', true );
		$value_custom_meta_banner_image = get_post_meta( $post->ID, 'custom_meta_banner_image_key', true );
		$value_custom_meta_use_custom_title = get_post_meta( $post->ID, 'custom_meta_use_custom_title_key', true );
        $value_custom_meta_custom_header_title = get_post_meta( $post->ID, 'custom_meta_custom_header_title_key', true );
        $value_custom_meta_custom_header_sub_title = get_post_meta( $post->ID, 'custom_meta_custom_header_sub_title_key', true );
	}
	$a=3;
	if ($value_custom_meta_header_background_type=='slider'):
	    if ($value_custom_meta_header_background_slider):
			ob_start();
			putRevSlider($value_custom_meta_header_background_slider);
			$slider_html = ob_get_clean();
		endif;
	else:
	    //breadcrumb
		$header_banner_internal_html.="<div class='container'><div class='row inner-section-container'>";
		$header_breadcrumb ="";
		$header_banner_left_html = "";
		$header_banner_right_html = "";
		if (theme_radio_value('opt-header-breadcrumb-enable')) {
			if (($value_custom_meta_show_breadcrumb =="yes")||(!($value_custom_meta_show_breadcrumb))) {
				ob_start();
				the_breadcrumb();
				$header_breadcrumb = ob_get_clean();
			}
		}
		else {
			if (($value_custom_meta_show_breadcrumb =="yes")) {
				ob_start();
				the_breadcrumb();
				$header_breadcrumb = ob_get_clean();
			}
		}
		$value_custom_meta_use_custom_title = get_post_meta( $post->ID, 'custom_meta_use_custom_title_key', true );
        $value_custom_meta_custom_header_title = get_post_meta( $post->ID, 'custom_meta_custom_header_title_key', true );
        $value_custom_meta_custom_header_sub_title = get_post_meta( $post->ID, 'custom_meta_custom_header_sub_title_key', true );
		//set default value if the meta title not set
		if (!$value_custom_meta_use_custom_title) {
			$value_custom_meta_use_custom_title = "no";
		}
		//title
		$title ="";
		$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		if ($value_custom_meta_use_custom_title == 'no') {
			ob_start();
			wp_title("");
			$title = ob_get_clean();
			$title=trim($title);
			if ($title !== "") {
				if ($paged>1) {
					$header_page_title = "<div class='title-wrapper'><h1 class='page-title'>".$title. " - page  ".$paged."</h1></div>";
				}
				else {
					$header_page_title = "<div class='title-wrapper'><h1 class='page-title'>".$title."</h1></div>";
				}
			}
		}
		else if ($value_custom_meta_use_custom_title == 'yes') {
			$title = $value_custom_meta_custom_header_title;
			$sub_title = $value_custom_meta_custom_header_sub_title;
			if ($title !== "") {
				if ($sub_title) {
					if ($paged>1) {
						$header_page_title = "<div class='title-wrapper'><h1 class='page-title'>".$title."</h1><h2 class='page-sub-title'>".$sub_title. " - page  ".$paged."</h2></div>";
					}
					else {
						$header_page_title = "<div class='title-wrapper'><h1 class='page-title'>".$title."</h1><h2 class='page-sub-title'>".$sub_title."</h2></div>";
					}
				}
				else {
					if ($paged>1) {
						$header_page_title = "<div class='title-wrapper'><h1 class='page-title'>".$title. " - page  ".$paged."</h1></div>";
					}
					else {
						$header_page_title = "<div class='title-wrapper'><h1 class='page-title'>".$title."</h1></div>";
					}
				}
			}
		}

		//position
		if ($header_breadcrumb) {
			$header_banner_left_html= $header_banner_left_html."<div class='col-12 col-md-8 header-banner-left'>".$header_page_title."</div>";
			$header_banner_right_html= $header_banner_right_html."<div class='col-12 col-md-4 header-banner-right'>".$header_breadcrumb."</div>";
		}
		else {
			$header_banner_left_html= $header_banner_left_html."<div class='col-12 col-md-12 header-banner-left'>".$header_page_title."</div>";
		}
		$header_banner_internal_html .= $header_banner_left_html.$header_banner_right_html;
		$header_banner_internal_html .="</div></div>";
		//bg_image
		if (($value_custom_meta_banner_image)&&($value_custom_meta_header_background_type=='image')) {
			echo '<style>.header-banner {background-image: url("'.$value_custom_meta_banner_image.'");}</style>';
		}
	endif;
	
	$header_banner_html .= $slider_html.$header_banner_internal_html;
	$header_banner_html .="</div>";
	//mix all together
	$header_html .="<div class='header ".$header_transparent_class."'>";	
	$header_html .= $header_top_html.$header_banner_html;
	$header_html .="</div>";
	echo $header_html;
}
//breadcrumb
function the_breadcrumb() {
    $showOnHome = 0; // 1 - show breadbreadcrumbs on the homepage, 0 - don't show
    $delimiter = '<span class="sep">/</span>'; // delimiter between breadcrumbs
    $home = 'Home'; // text for the 'Home' link
    $showCurrent = 1; // 1 - show current post/page title in breadbreadcrumbs, 0 - don't show
    $before = '<span class="current">'; // tag before the current crumb
    $after = '</span>'; // tag after the current crumb
    global $post;
    $homeLink = get_bloginfo('url');
    if (is_home() || is_front_page()) {
        if ($showOnHome == 1) {
            echo '<div id="breadcrumbs"><a href="' . $homeLink . '">' . $home . '</a></div>';
        }
    } else {
        echo '<div id="breadcrumbs"><a href="' . $homeLink . '">' . $home . '</a> ' . $delimiter . ' ';
        if (is_category()) {
            $thisCat = get_category(get_query_var('cat'), false);
            if ($thisCat->parent != 0) {
                echo get_category_parents($thisCat->parent, true, ' ' . $delimiter . ' ');
            }
            echo $before . single_cat_title('', false) . $after;
        } elseif (is_search()) {
            echo $before . get_search_query() . $after;
        } elseif (is_day()) {
            echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
            echo '<a href="' . get_month_link(get_the_time('Y'), get_the_time('m')) . '">' . get_the_time('F') . '</a> ' . $delimiter . ' ';
            echo $before . get_the_time('d') . $after;
        } elseif (is_month()) {
            echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
            echo $before . get_the_time('F') . $after;
        } elseif (is_year()) {
            echo $before . get_the_time('Y') . $after;
        } elseif (is_single() && !is_attachment()) {
            if (get_post_type() != 'post') {
                $post_type = get_post_type_object(get_post_type());
                $slug = $post_type->rewrite;
                echo '<a href="' . $homeLink . '/' . $slug['slug'] . '/">' . $post_type->labels->singular_name . '</a>';
                if ($showCurrent == 1) {
                    echo ' ' . $delimiter . ' ' . $before . get_the_title() . $after;
                }
            } else {
                $cat = get_the_category();
                $cat = $cat[0];
                $cats = get_category_parents($cat, true, ' ' . $delimiter . ' ');
                if ($showCurrent == 0) {
                    $cats = preg_replace("#^(.+)\s$delimiter\s$#", "$1", $cats);
                }
                //echo $cats;
                if ($showCurrent == 1) {
                    echo $before . get_the_title() . $after;
                }
            }
        } elseif (!is_single() && !is_page() && get_post_type() != 'post' && !is_404()) {
            $post_type = get_post_type_object(get_post_type());
            echo $before . $post_type->labels->singular_name . $after;
        } elseif (is_attachment()) {
            $parent = get_post($post->post_parent);
            $cat = get_the_category($parent->ID);
            $cat = $cat[0];
            echo get_category_parents($cat, true, ' ' . $delimiter . ' ');
            echo '<a href="' . get_permalink($parent) . '">' . $parent->post_title . '</a>';
            if ($showCurrent == 1) {
                echo ' ' . $delimiter . ' ' . $before . get_the_title() . $after;
            }
        } elseif (is_page() && !$post->post_parent) {
            if ($showCurrent == 1) {
                echo $before . get_the_title() . $after;
            }
        } elseif (is_page() && $post->post_parent) {
            $parent_id  = $post->post_parent;
            $breadbreadcrumbs = array();
            while ($parent_id) {
                $page = get_page($parent_id);
                $breadbreadcrumbs[] = '<a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a>';
                $parent_id  = $page->post_parent;
            }
            $breadbreadcrumbs = array_reverse($breadbreadcrumbs);
            for ($i = 0; $i < count($breadbreadcrumbs); $i++) {
                echo $breadbreadcrumbs[$i];
                if ($i != count($breadbreadcrumbs)-1) {
                    echo ' ' . $delimiter . ' ';
                }
            }
            if ($showCurrent == 1) {
                echo ' ' . $delimiter . ' ' . $before . get_the_title() . $after;
            }
        } elseif (is_tag()) {
            echo $before . single_tag_title('', false) . $after;
        } elseif (is_author()) {
            global $author;
            $userdata = get_userdata($author);
            echo $before . $userdata->display_name . $after;
        } elseif (is_404()) {
            echo $before . 'Error 404' . $after;
        }
        if (get_query_var('paged')) {
            if (is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author()) {
                echo ' (';
            }
            echo __('Page') . ' ' . get_query_var('paged');
            if (is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author()) {
                echo ')';
            }
        }
        echo '</div>';
    }
} // end the_breadcrumb()
//header_logo
function theme_header_logo($header_position) {
	$logo_html_on_page="";
	$logo_html = '<div class="logo">
	<a href="' . home_url() . '"><img src="' . esc_url(get_option( 'opt-general-logo' )) . '" alt="logo"></a>
	</div>';
	$logo_html_2="";
	if (get_option( 'opt-general-logo-2' )) {
		$logo_html_2 = '<div class="logo">
		<a href="' . home_url() . '"><img src="' . esc_url(get_option( 'opt-general-logo-2' )) . '" alt="logo-2"></a>
		</div>';
	}
	if (theme_radio_value('opt-header-logo-'.$header_position)) {
		if (theme_radio_value('opt-header-logo-2-'.$header_position)&&($logo_html_2!="")) {
			if (( is_front_page() && is_home() )||( is_front_page() )) {
				$logo_html_on_page = $logo_html;
			}
			else {
				$logo_html_on_page = $logo_html_2;
			}
		}
		else {
			$logo_html_on_page = $logo_html;
		}
	}
	else if (theme_radio_value('opt-header-logo-2-'.$header_position)&&($logo_html_2!="")) {
		$logo_html_on_page = $logo_html_2;
	}
	return $logo_html_on_page;
}
//social media
function theme_header_social_media($header_position) {      
	$theme_social_media = "";
	if (theme_radio_value('opt-header-socials-'.$header_position)) {
		ob_start();
		social_media_list_func();
		$theme_social_media = ob_get_clean();
	}
	return $theme_social_media;
}
//contact info
function theme_header_contact_info($header_position) {      
	$theme_contact_info = "";
	if (theme_radio_value('opt-header-contact-info-'.$header_position)) {
		ob_start();
		contact_info_func();
		$theme_contact_info = ob_get_clean();
	}
	return $theme_contact_info;
}
function theme_header_cta($header_position) {
	$theme_cta_all = "";
	$theme_cta1="";
	$theme_cta2="";
	if (theme_radio_value('opt-header-call-to-action-'.$header_position)) {
		if (get_option("opt-call-to-action-1-link")) {
			$theme_cta1.='<a id="call-to-action-button-1" class="call-to-action-button call-to-action-button-link" href="'.esc_url(get_option("opt-call-to-action-1-link")).'" target="_blank">'.get_option("opt-call-to-action-1-text").'</a>';
		}
		else {
			$theme_cta1.= '<span class="call-to-action-button call-to-action-button-text">'.get_option("opt-call-to-action-1-text").'</span>';
		}
	}
		if (theme_radio_value('opt-header-call-to-action-2-'.$header_position)) {
		if (get_option("opt-call-to-action-2-link")) {
			$theme_cta2.='<a id="call-to-action-button-2" class="call-to-action-button call-to-action-button-link" href="'.esc_url(get_option("opt-call-to-action-2-link")).'" target="_blank">'.get_option("opt-call-to-action-2-text").'</a>';
		}
		else {
			$theme_cta2.= '<span class="call-to-action-button call-to-action-button-text">'.get_option("opt-call-to-action-2-text").'</span>';
		}
	}
	$theme_cta_all .= "<div class='cta-wrapper'>";
	$theme_cta_all=$theme_cta_all.$theme_cta1.$theme_cta2;
	$theme_cta_all .= "</div>";
	return $theme_cta_all;
}
function theme_header_main_section_class($header_name) {
	$main_section_class = '';
	$main_section_class .="main-section-type-".$header_name;
	return $main_section_class;
}
function theme_header_secondary_section_class($header_name) {
	$secondary_section_class = '';
	$secondary_section_class = "secondary-section-type-".$header_name;
	return $secondary_section_class;
}
function theme_radio_value($option_id) {
	$switch_value = get_option($option_id);
	if ($switch_value == "off") return 0;
	else return 1;
}
function theme_header_nav() {
	?>
	<!-- ******************* The Navbar Area ******************* -->
	<div id="wrapper-navbar">

		<nav class="navbar navbar-expand-md navbar-dark">

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>">
					<span class="navbar-toggler-icon"></span>
				</button>

				<!-- The WordPress Menu goes here -->
				<?php wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'collapse navbar-collapse',
						'container_id'    => 'navbarNavDropdown',
						'menu_class'      => 'navbar-nav ml-auto',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'depth'           => 3,
						'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
					)
				); ?>

		</nav><!-- .site-navigation -->

	</div><!-- #wrapper-navbar end -->
	<?php
}

//internal setting meta box
/**
 * Calls the class on the post edit screen.
 */

if ( is_admin() ) {
    add_action( 'load-post.php',     'call_CustomMetaBoxClass' );
    add_action( 'load-post-new.php', 'call_CustomMetaBoxClass' );
}
