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

function social_media_list_func() {
    $html = "";
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
    echo $html;
}
add_shortcode('social_media_list','social_media_list_func');

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
                                        if (array_key_exists("default",$field)) {
                                            $setting_filed_default = $field['default'];
                                        }
                                        else $setting_filed_default = "";
                                        empty($arg);
										$arg = array('id'=>$setting_field_id,'type'=>$setting_field_type,'title'=>$setting_filed_title,'default'=>$setting_filed_default);
                                        add_settings_field( $field['id'], $field['title'], 'me_option_settings', 'me-'.$section['id'], $section['id'],$arg );    
                                        if ($setting_field_type =='media'):
                                            add_settings_field($field["id"]."upload-image", 'Logo Preview', 'options_image_setting_logo_preview', 'me-'.$section['id'], $section['id'],$arg);
										elseif ($setting_field_type =='editor'):
                                            add_settings_field( $field['id'], $field['title'], 'me_option_settings', 'me-'.$section['id'], $section['id'],$arg );    
                                        else:
                                        endif;
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
            if (array_key_exists('default',$args)) {
                if (is_array($args['default'])&&array_key_exists('url',$args['default'])) {
                    $setting_filed_default = $args['default']['url'];
                }
                else {
                    $setting_filed_default = $args['default'];
                }
            }
            else {$setting_filed_default="";}
            if (!get_option($setting_field_id)&&($setting_filed_default)) {
                update_option($setting_field_id,$setting_filed_default);
            }
			if ($args['type'] =='media'):
	echo '<input class="options-input-field" type="text" id="image_url" name="'.$setting_field_id.'" value="'.get_option($setting_field_id).'" /><br>'; 
	echo '<input id="image_upload_button" type="button" class="button" value="Upload Image" /> ';
	?>

	<?php
    elseif ($args['type'] =='editor'):
    $editor_value = get_option($setting_field_id);
    $settings = array( 'quicktags'=> false,'tinymce'=> false, 'media_buttons' => false,'textarea_rows'=>'10' );
    wp_editor($editor_value,$setting_field_id, $settings);
			else:
			echo '<input class="options-input-field" type="text" name="'.$setting_field_id.'" id="'.$setting_field_id.'" value="'.get_option($setting_field_id).'" />';
			endif;
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
                    console.log(id);
                    $("#"+id+"_upload_image_preview img").attr("src", attachment.url);
                });
                //Open the uploader dialog
                custom_uploader.open();
            });      
        });
    </script>

    <?php
    });