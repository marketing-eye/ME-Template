<?php

class global_setting_config {
	public $sections = array();
	
	public function __construct() {
		$this-> initSettings();
	}
	
	public function initSettings() {
		$this->setSection();
	}

	public function setSection() {
		//general settings
		$this->sections[] = array(
				'id' => 'general-settings',
				'icon' => '',
				'title' => 'General Settings',
				'fields' => array(
					array(
						'id' => 'opt-general-logo',
						'type' => 'media',
						'title' =>  __('Logo update', 'marketingeye'),
						'desc' => 'Upload your custom logo image',
						'default' =>  get_template_directory_uri() . '/me-template/images/logo.jpg'
					),
					array(
						'id' => 'opt-general-logo-2',
						'type' => 'media',
						'title' =>  __('Logo update 2', 'marketingeye'),
						'desc' => 'Upload your second custom logo image',
					),
					array(
						'id' => 'opt-general-custom-css',
						'type' => 'editor',
						'title' => __('Custom CSS', 'marketingeye'),
						'description' => 'Paste your custom CSS code here.',
						'default' => false,
						'editor_qicktags' => false,
						'editor_tinymce'    => false,
						'editor_media_buttons' => false
					),
					array(
						'id' => 'opt-general-custom-js',
						'type' => 'editor',
						'title' => __('Custom JS', 'marketingeye'),
						'description' => 'Paste your custom JS code here.',
						'default' => false,
						'editor_qicktags' => false,
						'editor_tinymce'    => false,
						'editor_media_buttons' => false
					)
				)
			); 
		//Header Options
		function list_header_section_fields() {
								
				$header_names = array(
					'template1'   => __( 'template1', 'marketingeye' ),
					'template2'   => __( 'template2', 'marketingeye' ),
					'template3'   => __( 'template3', 'marketingeye' ),
					'template4'   => __( 'template4', 'marketingeye' ),
					'template5'   => __( 'template5', 'marketingeye' ),
					'template6'   => __( 'template6', 'marketingeye' ),
				);
								
				$logo = array(
					'title' =>  __( 'Logo', 'marketingeye' ),
					'pos'   =>  array(
						'left'  => __( 'Left', 'marketingeye' ), 
						'right' => __( 'Right', 'marketingeye' ),
					),
					'section' => array( // Section will show (main or secondary)    
						'main'      => array( 'template1','template2','template3','template4'),
						'secondary' => array( 'template5','template6')
					),                
				);

				$logo2 = array(
					'title' =>  __( 'Logo 2', 'marketingeye' ),
					'pos'   =>  array(
						'left'  => __( 'Left', 'marketingeye' ), 
						'right' => __( 'Right', 'marketingeye' ),
					),
					'section' => array( // Section will show (main or secondary)    
						'main'      => array( 'template1','template2','template3','template4'),
						'secondary' => array( 'template5','template6')
					),                
				);

				$main_menu = array(
					'title' =>  __( 'Main menu', 'marketingeye' ),
					'pos'   =>  array(
						'left'  => __( 'Left', 'marketingeye' ), 
						'right' => __( 'Right', 'marketingeye' ),
					),
					'section' => array( // Section will show (main or secondary)    
						'main'      => array( 'template1','template2','template3','template4','template5','template6'),
						'secondary' => array('')
					),                      
				);
				
				$call_to_action = array(
					'title' =>  __( 'Call to action', 'marketingeye' ),
					'pos'   =>  array(
						'left'  => __( 'Left', 'marketingeye' ), 
						'right' => __( 'Right', 'marketingeye' )
					),
					'section' => array( // Section will show (main or secondary)    
						'main'      => array('template4'),
						'secondary' => array( 'template1','template2','template3','template5', 'template6')
					),                     
				);

				$call_to_action2 = array(
					'title' =>  __( 'Call to action 2', 'marketingeye' ),
					'pos'   =>  array(
						'left'  => __( 'Left', 'marketingeye' ), 
						'right' => __( 'Right', 'marketingeye' )
					),
					'section' => array( // Section will show (main or secondary)    
						'main'      => array('template4'),
						'secondary' => array( 'template1','template2','template3','template5', 'template6')
					),                     
				);
			 
				$contact_info = array(
					'title' =>  __( 'Contact info', 'marketingeye' ),
					'pos'   =>  array(
						'left'  => __( 'Left', 'marketingeye' ), 
						'right' => __( 'Right', 'marketingeye' )
					),
					'section' => array( // Section will show (main or secondary)    
						'main'      => array( 'template4'),
						'secondary' => array( 'template1','template2','template3','template5','template6')
					),                     
				);
				
				$socials = array(
					'title' =>  __( 'Socials', 'marketingeye' ),
					'pos'   =>  array(
						'left'  => __( 'Left', 'marketingeye' ), 
						'right' => __( 'Right', 'marketingeye' )
					),
					'section' => array( // Section will show (main or secondary)    
						'main'      => array( 'template4', 'template5','template6'),
						'secondary' => array( 'template1','template2','template3')
					),                            
				);
				// Header elements for main section
				$main_section_elems = array(
					'opt-header-logo' => $logo,
					'opt-header-logo-2' => $logo2,
					'opt-header-main-menu' => $main_menu,
					'opt-header-call-to-action' => $call_to_action,
					'opt-header-call-to-action-2' => $call_to_action2,
					'opt-header-contact-info' => $contact_info,
					'opt-header-socials' => $socials,
				);
				
				// Header elements for secondary section
				$seondary_section_elems = array(
					'opt-header-logo' => $logo,
					'opt-header-logo-2' => $logo2,
					'opt-header-main-menu' => $main_menu,
					'opt-header-call-to-action' => $call_to_action,
					'opt-header-call-to-action-2' => $call_to_action2,
					'opt-header-contact-info' => $contact_info,
					'opt-header-socials' => $socials,
				);
				
				$fields = array();
				$fields[] = array(
					'id'       => 'opt-header-type-select',
					'type'     => 'select',
					'title'    => __('Header type', 'marketingeye'),
					'select_options'  => $header_names,
				);
				
				// Start main section
				$fields[] = array(
					'id' => 'opt-header-main-section-heading',
					'type' => 'heading',
					'title' => 'Main Section'
				);
				
				foreach ( $main_section_elems as $elem_key => $elem ):
					
					$fields[] = array(
						'id'        =>  $elem_key . '-main',
						'type'      =>  'radio',
						'title'     =>  $elem['title'],
						'default' => 'on',
						'required'  =>  $elem['section']['main']
					); 

				endforeach;
				// End main section
				// Start secondary section
				$fields[] = array(
					'id' => 'opt-header-secondary-section-heading',
					'type' => 'heading',
					'title' => 'Secondary Section'
				);
				
				foreach ( $seondary_section_elems as $elem_key => $elem ):
					
					$fields[] = array(
						'id'        =>  $elem_key . '-secondary',
						'type'      =>  'radio',
						'title'     =>  $elem['title'],
						'default' => 'on',
						'required'  =>  $elem['section']['secondary']
					); 
				
				endforeach;
				
				// End secondary section

				// Start header title/breadcrumb section
				$fields[] = array(
					'id' => 'opt-header-title-breadcrumb-section-heading',
					'type' => 'heading',
					'title' => 'Default Header Title/Breadcrumb Settings'
				);

				$fields[] = array(
					'id'        =>  'opt-header-title-enable',
					'type'      =>  'radio',
					'title'     =>  __('Enable header title', 'marketingeye'),
					'default' => 'on',
				); 

				$fields[] = array(
					'id'        =>  'opt-header-breadcrumb-enable',
					'type'      =>  'radio',
					'title'     =>  __('Enable Breadcrumb', 'marketingeye'),
					'default' => 'on',
				); 
				// End header title/breadcrumb section

				$fields[] = array(
					'id' => 'opt-header-bg-image-section-heading',
					'type' => 'heading',
					'title' => 'Header Default Image'
				);

				$fields[] = array(
					'id' => 'opt-header-bg-image-default',
					'type' => 'media',
					'title'     =>  __('Header Background Image', 'marketingeye'),
					'desc' => 'Upload Default Header Background Image',
					'default' =>  get_template_directory_uri() . '/me-template/images/header-bg-image-default.jpg'
				); 

				$fields[] = array(
					'id' => 'opt-header-call-to-action-section-heading',
					'type' => 'heading',
					'title' => 'Header Call For Action Section Settings'
				);

				$fields[] = array(
					'id' => 'opt-call-to-action-1-text',
					'type' => 'text',
					'title' => 'Header call to action 1 text',                  
				); 

				$fields[] = array(
					'id' => 'opt-call-to-action-1-link',
					'type' => 'text',
					'title' => 'Header call to action 1 link',                  
				); 

				$fields[] = array(
					'id' => 'opt-call-to-action-2-text',
					'type' => 'text',
					'title' => 'Header call to action 2 text',                  
				); 

				$fields[] = array(
					'id' => 'opt-call-to-action-2-link',
					'type' => 'text',
					'title' => 'Header call to action 2 link',                  
				); 

				

				return $fields;
			} // End list_header_section_fields() function

		$this->sections[] = array(
				'id' => 'header-options',
				'icon' => 'el-icon-cogs',
				'title' => __('Header Options', 'marketingeye'),
				'fields' => list_header_section_fields()
			); 
		//Footer Options
		$this->sections[] = array(
				'id' => 'footer-options',
				'icon' => 'el-icon-cogs',
				'title' => __('Footer Options', 'marketingeye'),
				'fields' => array(
					array(
						'id' => 'opt-footer-sidebar-layout',
						'type' => 'select',
						'title' => __('Footer sidebar layout', 'marketingeye'),
						'description' => '',
						'select_options' => array ("1"=>"1","2"=>"2","3"=>"3","4"=>"4")
					),
					array(
						'id' => 'opt-footer-widget-1-columns-width',
						'type' => 'select',
						'title' => __('Widget 1 columns width', 'marketingeye'),
						'description' => '',
						'select_options' => array (
							"1/12 columns"=>"1",
							"2/12 columns"=>"2",
							"3/12 columns"=>"3",
							"4/12 columns"=>"4",
							"5/12 columns"=>"5",
							"6/12 columns"=>"6",
							"7/12 columns"=>"7",
							"8/12 columns"=>"8",
							"9/12 columns"=>"9",
							"10/12 columns"=>"10",
							"11/12 columns"=>"11",
							"12/12 columns"=>"12",
						)
					),
					array(
						'id' => 'opt-footer-widget-2-columns-width',
						'type' => 'select',
						'title' => __('Widget 2 columns width', 'marketingeye'),
						'description' => '',
						'select_options' => array (
							"1/12 columns"=>"1",
							"2/12 columns"=>"2",
							"3/12 columns"=>"3",
							"4/12 columns"=>"4",
							"5/12 columns"=>"5",
							"6/12 columns"=>"6",
							"7/12 columns"=>"7",
							"8/12 columns"=>"8",
							"9/12 columns"=>"9",
							"10/12 columns"=>"10",
							"11/12 columns"=>"11",
							"12/12 columns"=>"12",
						)
					),
					array(
						'id' => 'opt-footer-widget-3-columns-width',
						'type' => 'select',
						'title' => __('Widget 3 columns width', 'marketingeye'),
						'description' => '',
						'select_options' => array (
							"1/12 columns"=>"1",
							"2/12 columns"=>"2",
							"3/12 columns"=>"3",
							"4/12 columns"=>"4",
							"5/12 columns"=>"5",
							"6/12 columns"=>"6",
							"7/12 columns"=>"7",
							"8/12 columns"=>"8",
							"9/12 columns"=>"9",
							"10/12 columns"=>"10",
							"11/12 columns"=>"11",
							"12/12 columns"=>"12",
						)
					),
					array(
						'id' => 'opt-footer-widget-4-columns-width',
						'type' => 'select',
						'title' => __('Widget 4 columns width', 'marketingeye'),
						'description' => '',
						'select_options' => array (
							"1/12 columns"=>"1",
							"2/12 columns"=>"2",
							"3/12 columns"=>"3",
							"4/12 columns"=>"4",
							"5/12 columns"=>"5",
							"6/12 columns"=>"6",
							"7/12 columns"=>"7",
							"8/12 columns"=>"8",
							"9/12 columns"=>"9",
							"10/12 columns"=>"10",
							"11/12 columns"=>"11",
							"12/12 columns"=>"12",
						)
					),
					array(
						'id' => 'opt-footer-copyright',
						'type' => 'editor',
						'title' => __('Footer copyright Text', 'marketingeye'),
						'description' => '',
					)
				)
			); 
		//Social Settings
		$this->sections[] = array(
				'id' => 'social-settings',
				'icon' => 'el-icon-cogs',
				'title' => __('Social Settings', 'marketingeye'),
				'fields' => array(
					array(
						'id' => 'opt-social-facebook',
						'type' => 'text',
						'title' => 'Facebook',
						'description' => ''
					),
					array(
						'id' => 'opt-social-google-plus',
						'type' => 'text',
						'title' => 'Google Plus',
						'description' => ''
					),
					array(
						'id' => 'opt-social-twitter',
						'type' => 'text',
						'title' => 'Twitter',
						'description' => ''
					),
					array(
						'id' => 'opt-social-instagram',
						'type' => 'text',
						'title' => 'Instagram',
						'description' => ''
					),
					array(
						'id' => 'opt-social-youtube',
						'type' => 'text',
						'title' => 'Youtube',
						'description' => ''
					),
					array(
						'id' => 'opt-social-viemo',
						'type' => 'text',
						'title' => 'Vimeo',
						'description' => ''
					),
					array(
						'id' => 'opt-social-linkedin',
						'type' => 'text',
						'title' => 'Linkedin',
						'description' => ''
					),
					array(
						'id' => 'opt-social-rss',
						'type' => 'text',
						'title' => 'RSS',
						'description' => ''
					)
				)
			); 
		//Contact Settings
		$this->sections[] = array(
				'id' => 'contact-settings',
				'icon' => 'el-icon-cogs',
				'title' => __('Contact Settings', 'marketingeye'),
				'fields' => array(
					array(
						'id' => 'opt-contact-phone-number',
						'type' => 'text',
						'title' => 'Phone numbers',
						'description' => '',
					),
					array(
						'id' => 'opt-contact-email',
						'type' => 'text',
						'title' => 'Email',
						'description' => '',
					),
					array(
						'id' => 'opt-contact-address',
						'type' => 'text',
						'title' => 'Address',
						'description' => '',
					)
				)
			); 
		//404 Settings
		$this->sections[] = array(
				'id' => '404-settings',
				'icon' => 'el-icon-cogs',
				'title' =>  __('404 Settings', 'marketingeye'),
				'fields' => array(
					array(
						'id' => 'opt-404-header-title',
						'type' => 'text',
						'title' => '404 header title',
						'description' => '',
						'default' => 'Error Page'
					),
					array(
						'id' => 'opt-404-header-subtitle',
						'type' => 'text',
						'title' => '404 header subtitle',
						'description' => '',
						'default' => 'Sorry :('
					),
					array(
						'id' => 'opt-404-title',
						'type' => 'text',
						'title' => '404 title',
						'description' => '',
						'default' => '404'
					),
					array(
						'id' => 'opt-404-text',
						'type' => 'editor',
						'title' => '404 Text',
						'description' => '',
						'default' => '<p>Sorry, the page you are looking for could not be found. Please navigate to the home page and use the main menu.</p>'
					)
				)
			); 
	}//finish setSection
}

$config = new global_setting_config();

/**
 * Calls the class on the post edit screen.
 */
function call_CustomMetaBoxClass() {
	new CustomMetaBoxClass();
}
 
/**
 * The Class.
 */
class CustomMetaBoxClass {
 
	/**
	 * Hook into the appropriate actions when the class is constructed.
	 */
	public function __construct() {
		add_action( 'add_meta_boxes', array( $this, 'add_meta_box' ) );
		add_action( 'save_post',      array( $this, 'save'         ) );
	}
 
	/**
	 * Adds the meta box container.
	 */
	public function add_meta_box() {
		// Limit meta box to certain post types. 
		add_meta_box(
				'custom_meta_box',
				__( 'Custom Meta Fields', 'marketingeye' ),
				array( $this, 'render_meta_box_content' ),
				null,
				'advanced',
				'high'
			);
	}
 
	/**
	 * Save the meta when the post is saved.
	 *
	 * @param int $post_id The ID of the post being saved.
	 */
	public function save( $post_id ) {
 
		/*
		 * We need to verify this came from the our screen and with proper authorization,
		 * because save_post can be triggered at other times.
		 */
 
		// Check if our nonce is set.
		if ( ! isset( $_POST['myplugin_inner_custom_box_nonce'] ) ) {
			return $post_id;
		}
 
		$nonce = $_POST['myplugin_inner_custom_box_nonce'];
 
		// Verify that the nonce is valid.
		if ( ! wp_verify_nonce( $nonce, 'myplugin_inner_custom_box' ) ) {
			return $post_id;
		}
 
		/*
		 * If this is an autosave, our form has not been submitted,
		 * so we don't want to do anything.
		 */
		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
			return $post_id;
		}
 
		// Check the user's permissions.
		if ( 'page' == $_POST['post_type'] ) {
			if ( ! current_user_can( 'edit_page', $post_id ) ) {
				return $post_id;
			}
		} else {
			if ( ! current_user_can( 'edit_post', $post_id ) ) {
				return $post_id;
			}
		}
 
		/* OK, it's safe for us to save the data now. */
 
		// Update the meta field.
		if (array_key_exists('custom_meta_use_custom_title', $_POST)) {
			update_post_meta($post_id,'custom_meta_use_custom_title_key',$_POST['custom_meta_use_custom_title']);
		}
		if (array_key_exists('custom_meta_custom_header_title', $_POST)) {
			update_post_meta($post_id,'custom_meta_custom_header_title_key',$_POST['custom_meta_custom_header_title']);
		}
		if (array_key_exists('custom_meta_custom_header_sub_title', $_POST)) {
			update_post_meta($post_id,'custom_meta_custom_header_sub_title_key',$_POST['custom_meta_custom_header_sub_title']);
		}
		if (array_key_exists('custom_meta_header_background_type', $_POST)) {
			update_post_meta($post_id,'custom_meta_header_background_type_key',$_POST['custom_meta_header_background_type']);
		}
		if (array_key_exists('custom_meta_banner_image', $_POST)) {
			update_post_meta($post_id,'custom_meta_banner_image_key',$_POST['custom_meta_banner_image']);
		}
		if (array_key_exists('custom_meta_header_background_slider', $_POST)) {
			update_post_meta($post_id,'custom_meta_header_background_slider_key',$_POST['custom_meta_header_background_slider']);
		}
		if (array_key_exists('custom_meta_show_breadcrumb', $_POST)) {
			update_post_meta($post_id,'custom_meta_show_breadcrumb_key',$_POST['custom_meta_show_breadcrumb']);
		}
		if (array_key_exists('custom_meta_use_top_banner', $_POST)) {
			update_post_meta($post_id,'custom_meta_use_top_banner_key',$_POST['custom_meta_use_top_banner']);
		}
	}
 
 
	/**
	 * Render Meta Box content.
	 *
	 * @param WP_Post $post The post object.
	 */
	public function render_meta_box_content( $post ) {

		// Add an nonce field so we can check for it later.
		wp_nonce_field( 'myplugin_inner_custom_box', 'myplugin_inner_custom_box_nonce' );
 
 $check="";

		// Use get_post_meta to retrieve an existing value from the database.
		$value_custom_meta_use_custom_title = get_post_meta( $post->ID, 'custom_meta_use_custom_title_key', true );
		$value_custom_meta_custom_header_title = get_post_meta( $post->ID, 'custom_meta_custom_header_title_key', true );
		$value_custom_meta_custom_header_sub_title = get_post_meta( $post->ID, 'custom_meta_custom_header_sub_title_key', true );
		$value_custom_meta_header_background_type = get_post_meta( $post->ID, 'custom_meta_header_background_type_key', true );
		$value_custom_meta_banner_image = get_post_meta( $post->ID, 'custom_meta_banner_image_key', true );
		$value_custom_meta_header_background_slider = get_post_meta( $post->ID, 'custom_meta_header_background_slider_key', true );
		$value_custom_meta_show_breadcrumb = get_post_meta( $post->ID, 'custom_meta_show_breadcrumb_key', true );
		$value_custom_meta_use_top_banner = get_post_meta( $post->ID, 'custom_meta_use_top_banner_key', true );

		if ( class_exists( 'RevSlider' ) ) {
		    $rev_slider = new RevSlider();
		    $sliders = $rev_slider->getAllSliderAliases();
		} else {
		    $sliders = array();
		}

		// Display the form, using the current value.
		?>	
	   <table class='form-table custom_meta_box'>
		<tbody>
			<tr>
				<th><label for="custom_meta_use_custom_title">Use Custom Title</label></th>
				<td>
					<select name="custom_meta_use_custom_title" id="custom_meta_use_custom_title" class="postbox">
						<option value="no" <?php selected($value_custom_meta_use_custom_title, 'no'); ?>>No</option>
						<option value="yes" <?php selected($value_custom_meta_use_custom_title, 'yes'); ?>>Yes</option>
					</select>
			</tr>
			<tr>
				<th><label for="custom_meta_custom_header_title">Custom Header Title</label></th>
				<td><input type="text" name="custom_meta_custom_header_title" id="custom_meta_custom_header_title" value="<?php echo $value_custom_meta_custom_header_title; ?>" /></td>
			</tr>
			<tr>
				<th><label for="custom_meta_custom_header_sub_title">Custom Header Title</label></th>
				<td><input type="text" name="custom_meta_custom_header_sub_title" id="custom_meta_custom_header_sub_title" value="<?php echo $value_custom_meta_custom_header_sub_title; ?>" /></td>
			</tr>
			<tr>
				<th><label for="custom_meta_header_background_type"> Header Background Tyle</label></th>
				<td>
					<select name="custom_meta_header_background_type" id="custom_meta_header_background_type" class="postbox">
						<option value="default-global" <?php selected($value_custom_meta_header_background_type, 'default-global'); ?>>Using the default global setting</option>
						<option value="image" <?php selected($value_custom_meta_header_background_type, 'image'); ?>>Image</option>
						<option value="slider" <?php selected($value_custom_meta_header_background_type, 'slider'); ?>>Slider</option>
					</select>
			</tr>
			<tr>
				<th>Background Image</th>
				<td>
					<input class="options-input-field" type="text" name="custom_meta_banner_image" id="custom_meta_banner_image" value="<?php echo $value_custom_meta_banner_image; ?>" />
					<br>
					<input id="image_upload_button" type="button" class="button" value="Upload Image" />
					<div id="custom_meta_banner_image_upload_image_preview" class="upload-image-review" style="min-height: 100px;">
						<img style="max-width:100%;" src="<?php echo $value_custom_meta_banner_image; ?>" />
					</div>
				</td>
			<tr>
				<th><label for="custom_meta_header_background_type"> Header Background Slider</label></th>
				<td>
					<?php
					echo '<select name="custom_meta_header_background_slider">';
					foreach ($sliders as $slider) {
						?>
						<option value="<?php echo $slider; ?>" <?php selected($value_custom_meta_header_background_slider, $slider); ?>><?php echo $slider; ?></option>
					<?php
					}
					echo '</select>';
					?>
			</tr>
			<tr>
				<th><label for="custom_meta_show_breadcrumb">Show Breadcrumb</label></th>
				<td>
					<select name="custom_meta_show_breadcrumb" id="custom_meta_show_breadcrumb" class="postbox">
						<option value="no" <?php selected($value_custom_meta_show_breadcrumb, 'no'); ?>>No</option>
						<option value="yes" <?php selected($value_custom_meta_show_breadcrumb, 'yes'); ?>>Yes</option>
					</select>
			</tr>
			<tr>
				<th><label for="custom_meta_use_top_banner">Use Top Banner</label></th>
				<td>
					<select name="custom_meta_use_top_banner" id="custom_meta_use_top_banner" class="postbox">
						<option value="no" <?php selected($value_custom_meta_use_top_banner, 'no'); ?>>No</option>
						<option value="yes" <?php selected($value_custom_meta_use_top_banner, 'yes'); ?>>Yes</option>
					</select>
			</tr>
		</tbody>
	</table>
	<?php    
	}
}