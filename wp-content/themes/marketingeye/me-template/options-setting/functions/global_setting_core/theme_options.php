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
						'default' => get_template_directory_uri() . '/me-template/images/logo.jpg'
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
				/*
				global $headers_has_secondary, $headers_has_title_default, $headers_has_subtitle_default, $headers_has_icon_default, $headers_has_breadcrumb_default, $headers_allow_logo, 
				$headers_allow_main_menu, $headers_allow_top_menu, $headers_allow_search_icon, $headers_allow_header_top_bar_text, $headers_allow_call_to_action, $headers_allow_contact_info, $headers_allow_socials, 
				$headers_allow_sliding_menu, $headers_allow_mini_cart, $headers_allow_call_to_action2;
				*/
								
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
						'main'      => array( 'template5', 'template6'),
						'secondary' => array( 'template1','template2','template3','template4',)
					),                     
				);

				$call_to_action2 = array(
					'title' =>  __( 'Call to action 2', 'marketingeye' ),
					'pos'   =>  array(
						'left'  => __( 'Left', 'marketingeye' ), 
						'right' => __( 'Right', 'marketingeye' )
					),
					'section' => array( // Section will show (main or secondary)    
						'main'      => array( 'template5', 'template6'),
						'secondary' => array( 'template1','template2','template3','template4')
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
					'id'        =>  'opt-header-breadcrumb -enable',
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
						'id' => 'opt-404-text2',
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
//var_dump($config);