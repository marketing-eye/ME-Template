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
						'title' => "Logo update",
						'desc' => 'Upload your custom logo image',
						'default' =>  get_template_directory_uri() . '/me-template/images/logo.jpg'
					),
					array(
						'id' => 'opt-general-logo-2',
						'type' => 'media',
						'title' => "Logo update 2",
						'desc' => 'Upload your second custom logo image',
						'default' => get_template_directory_uri() . '/me-template/images/logo.jpg'
					),
					array(
						'id' => 'opt-general-custom-css',
						'type' => 'editor',
						'title' => 'Custom CSS',
						'description' => 'Paste your custom CSS code here.',
						'default' => false,
						'editor_qicktags' => false,
						'editor_tinymce'	=> false,
						'editor_media_buttons' => false
					),
					array(
						'id' => 'opt-general-custom-js',
						'type' => 'editor',
						'title' => 'Custom JS',
						'description' => 'Paste your custom JS code here.',
						'default' => false,
						'editor_qicktags' => false,
						'editor_tinymce'	=> false,
						'editor_media_buttons' => false
					)
				)
			); 
		//Header Options
function list_header_section_fields() {
                global $headers_has_secondary, $headers_has_title_default, $headers_has_subtitle_default, $headers_has_icon_default, $headers_has_breadcrumb_default, $headers_allow_logo, 
                $headers_allow_main_menu, $headers_allow_top_menu, $headers_allow_search_icon, $headers_allow_header_top_bar_text, $headers_allow_call_to_action, $headers_allow_contact_info, $headers_allow_socials, 
                $headers_allow_sliding_menu, $headers_allow_mini_cart, $headers_allow_call_to_action2;
                                
                $header_names = array(
                    'template1'   => __( 'template1', 'marketingeye' ),
                    'template2'   => __( 'template2', 'marketingeye' ),
                    'template3'   => __( 'template3', 'marketingeye' ),
                );
                                
                $logo = array(
                    'title' =>  __( 'Logo', 'marketingeye' ),
                    'pos'   =>  array(
                        'left'  => __( 'Left', 'marketingeye' ), 
                        'right' => __( 'Right', 'marketingeye' ),
                    ),
                    'section' => array( // Section will show (main or secondary)    
                        'main'      => array( 'template1', 'template3'),
                        'secondary' => array( 'template2')
                    ),                
                );

                $logo2 = array(
                    'title' =>  __( 'Logo 2', 'marketingeye' ),
                    'pos'   =>  array(
                        'left'  => __( 'Left', 'marketingeye' ), 
                        'right' => __( 'Right', 'marketingeye' ),
                    ),
                    'section' => array( // Section will show (main or secondary)    
                        'main'      => array( 'template1'),
                        'secondary' => array( 'template2')
                    ),                
                );

                $main_menu = array(
                    'title' =>  __( 'Main menu', 'marketingeye' ),
                    'pos'   =>  array(
                        'left'  => __( 'Left', 'marketingeye' ), 
                        'right' => __( 'Right', 'marketingeye' ),
                    ),
                    'section' => array( // Section will show (main or secondary)    
                        'main'      => array( 'template1', 'template3'),
                        'secondary' => array( 'template2')
                    ),                      
                );
                
                $top_menu = array(
                    'title' =>  __( 'Top menu', 'marketingeye' ),
                    'pos'   =>  array(
                        'left'  => __( 'Left', 'marketingeye' ), 
                        'right' => __( 'Right', 'marketingeye' ),
                    ),
                    'section' => array( // Section will show (main or secondary)    
                        'main'      => array( 'template1', 'template3'),
                        'secondary' => array( 'template2')
                    ),                      
                );
                
                $call_to_action = array(
                    'title' =>  __( 'Call to action', 'marketingeye' ),
                    'pos'   =>  array(
                        'left'  => __( 'Left', 'marketingeye' ), 
                        'right' => __( 'Right', 'marketingeye' )
                    ),
                    'section' => array( // Section will show (main or secondary)    
                        'main'      => array( 'template3', 'template2'),
                        'secondary' => array( 'template1')
                    ),                     
                );
             
                $contact_info = array(
                    'title' =>  __( 'Contact info', 'marketingeye' ),
                    'pos'   =>  array(
                        'left'  => __( 'Left', 'marketingeye' ), 
                        'right' => __( 'Right', 'marketingeye' )
                    ),
                    'section' => array( // Section will show (main or secondary)    
                        'main'      => array( 'template1', 'template3'),
                        'secondary' => array( 'template2')
                    ),                     
                );
                
                $socials = array(
                    'title' =>  __( 'Socials', 'marketingeye' ),
                    'pos'   =>  array(
                        'left'  => __( 'Left', 'marketingeye' ), 
                        'right' => __( 'Right', 'marketingeye' )
                    ),
                    'section' => array( // Section will show (main or secondary)    
                        'main'      => array( 'template1', 'template3'),
                        'secondary' => array( 'template2')
                    ),                            
                );
                // Header elements for main section
                $main_section_elems = array(
                    'opt-header-logo' => $logo,
                    'opt-header-logo-2' => $logo2,
                    'opt-header-main-menu' => $main_menu,
                    'opt-header-call-to-action' => $call_to_action,
                    'opt-header-contact-info' => $contact_info,
                    'opt-header-socials' => $socials,
                );
                
                // Header elements for secondary section
                $seondary_section_elems = array(
                    'opt-header-logo' => $logo,
                    'opt-header-main-menu' => $main_menu,
                    'opt-header-call-to-action' => $call_to_action,
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
                    'id' => 'opt-header-main-section-start',
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
                /*
                // Start secondary section
                $fields[] = array(
                    'id' => 'opt-header-secondary-section-start',
                    'type' => 'section',
                    'title' => __( 'Secondary Section', 'marketingeye' ),
                    'subtitle' => __('', 'marketingeye' ),
                    'indent' => true,
                    'required' => array( 'opt-header-type-select', '=', $headers_has_secondary )
                );
                
                foreach ( $seondary_section_elems as $elem_key => $elem ):
                    
                    $fields[] = array(
                        'id'        =>  $elem_key . '_secondary',
                        'type'      =>  'switch',
                        'title'     =>  $elem['title'],
                        'subtitle'  =>  $elem['subtitle'],
                        'default'   =>  1,
                        'on'        =>  __( 'Show', 'marketingeye' ),
                        'off'       =>  __( 'Don\'t show', 'marketingeye' ),
                        'required'  =>  array( 
                            array( 'opt-header-type-select', '=', $elem['dep'] ),
                            array( 'opt-header-type-select', '=', $elem['section']['secondary'] ),
                            array( 'opt-header-type-select', '=', $headers_has_secondary ),
                        ),
                    ); 
                
                endforeach;
                
                // End secondary section
                $fields[] = array(
                    'id' => 'opt-header-secondary-section-end',
                    'type' => 'section',
                    'indent' => false,
                    'required' => array( 'opt-header-type-select', '=', $headers_has_secondary ),
                );
                
                // Start header title/breadcrumb section
                $fields[] = array(
                    'id' => 'opt-header-title-pre-section-start',
                    'type' => 'section',
                    'title' => __( 'Default Header Title/Breadcrumb Settings', 'marketingeye' ),
                    'subtitle' => __('', 'marketingeye' ),
                    'desc' => __('If a page does not have its own settings, these settings will be used by default', 'marketingeye'),
                    'indent' => true,
                    'required' => array( 'opt-header-type-select', '=', array_merge( $headers_has_title_default, $headers_has_subtitle_default, $headers_has_icon_default, $headers_has_breadcrumb_default ) )
                );
                
                $fields[] = array(
                    'id' => 'opt-header-title-enable',
                    'type' => 'switch',
                    'title' => __('Enable header title', 'marketingeye'),
                    'subtitle' => __('Turn on/off header title', 'marketingeye'),
                    'desc' => __('If a page does not have its own settings, this setting will be used by default', 'marketingeye'),
                    'default' => 1,
                    'on' => 'Enabled',
                    'off' => 'Disabled',
                    'required' => array( 'opt-header-type-select', '=', $headers_has_title_default )
                );
                
                $fields[] = array(
                    'id' => 'opt-header-subtitle-enable',
                    'type' => 'switch',
                    'title' => __('Enable header subtitle', 'marketingeye'),
                    'subtitle' => __('Turn on/off header subtitle', 'marketingeye'),
                    'desc' => __('If a page does not have its own settings, this setting will be used by default', 'marketingeye'),
                    'default' => 1,
                    'on' => 'Enabled',
                    'off' => 'Disabled',
                    'required' => array( 'opt-header-type-select', '=', $headers_has_subtitle_default )
                );
                
                $fields[] = array(
                    'id' => 'opt-header-icon-class',
                    'type' => 'text',
                    'title' => __('Header icon', 'marketingeye'),
                    'desc' => sprintf( __( 'Paste you font icon class here. You can find the font class here: <a href="http://fonts.themestudio.net/stroke-gap-icons-webfont/" title="Stroke-Gap-Icons" target="_blank">Stroke-Gap-Icons</a>', 'marketingeye' ), $font_classes_url ),
                    'default' => 'icon-Crown',
                    'required' => array( 'opt-header-type-select', '=', $headers_has_icon_default )
                );
                
                $fields[] = array(
                    'id' => 'opt-header-breadcrumb-enable',
                    'type' => 'switch',
                    'title' => __('Enable header breadcrumb', 'marketingeye'),
                    'subtitle' => __('Turn on/off header breadcrumb', 'marketingeye'),
                    'desc' => __('If a page does not have its own settings, this setting will be used by default', 'marketingeye'),
                    'default' => 1,
                    'on' => 'Enabled',
                    'off' => 'Disabled',
                    'required' => array( 'opt-header-type-select', '=', $headers_has_breadcrumb_default )
                );
                
                // End header title/breadcrumb section
                $fields[] = array(
                    'id' => 'opt-header-title-pre-section-end',
                    'type' => 'section',
                    'indent' => false,
                    'required' => array( 'opt-header-type-select', '=', array_merge( $headers_has_title_default, $headers_has_subtitle_default, $headers_has_icon_default, $headers_has_breadcrumb_default ) )
                );
                
                $fields[] = array(
                    'id' => 'opt-header-bg-img',
                    'type' => 'media',
                    'url' => true,
                    'title' => __( 'Header Background Image', 'marketingeye' ),
                    //'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                    'desc' => __( 'Upload Default Header Background Image', 'marketingeye' ),
                    'subtitle' => __( 'Upload Default Header Background Image', 'marketingeye' ),
                    'default' => array( 'url' => get_template_directory_uri() . '/assets/images/header_bg_default.jpg' )
                );
                
                
                $fields[] = array(
                    'id' => 'opt-header-img-overlay',
                    'type' => 'switch',
                    'title' => __('Enable header image overlay', 'marketingeye'),
                    'subtitle' => __('Turn on/off header image overlay', 'marketingeye'),
                    'default' => 1,
                    'on' => 'Enabled',
                    'off' => 'Disabled',
                );
                
                $fields[] = array(
                    'id' => 'opt-header-top-text',
                    'type' => 'text',
                    'title' => __('Header top bar text', 'marketingeye'),
                    'subtitle' => __('Header top bar text', 'marketingeye'),
                    'default' => ''
                );

                $fields[] = array(
                    'id' => 'opt-header-btn-text',
                    'type' => 'text',
                    'title' => __('Header call to action text', 'marketingeye'),
                    'subtitle' => __('Header text or button text will appear on the header depending header style and chosen in the header builder', 'marketingeye'),
                    'default' => ''
                );
                
                $fields[] = array(
                    'id' => 'opt-header-btn-link',
                    'type' => 'text',
                    'title' => __('Header link', 'marketingeye'),
                    'subtitle' => __('Header link or button link will available on the header depending header style and chosen in the header builder', 'marketingeye'),
                    'default' => '',
                   // 'validate' => 'url',
                    'required' => array('opt-header-btn-text', '!=', ''),
                );
                
                $fields[] = array(
                    'id' => 'opt-header-btn-text-2',
                    'type' => 'text',
                    'title' => __('Header call to action text', 'marketingeye'),
                    'subtitle' => __('Header text or button text will appear on the header depending header style and chosen in the header builder', 'marketingeye'),
                    'default' => ''
                );
                
                $fields[] = array(
                    'id' => 'opt-header-btn-link-2',
                    'type' => 'text',
                    'title' => __('Header link', 'marketingeye'),
                    'subtitle' => __('Header link or button link will available on the header depending header style and chosen in the header builder', 'marketingeye'),
                    'default' => '',
                   // 'validate' => 'url',
                    'required' => array('opt-header-btn-text-2', '!=', ''),
                );
                */
                return $fields;
            } // End list_header_section_fields() function

		$this->sections[] = array(
				'id' => 'header-options',
				'icon' => 'el-icon-cogs',
				'title' => 'Header Options',
				'fields' => list_header_section_fields()
			); 
		//Footer Options
		$this->sections[] = array(
				'id' => 'footer-options',
				'icon' => 'el-icon-cogs',
				'title' => 'Footer Options',
				'fields' => array(
					array(
						'id' => 'opt-footer-sidebar-layout',
						'type' => 'select',
						'title' => 'Footer sidebar layout',
						'description' => '',
						'select_options' => array ("1"=>"1","2"=>"2","3"=>"3","4"=>"4")
					),
					array(
						'id' => 'opt-footer-widget-1-columns-width',
						'type' => 'select',
						'title' => 'Widget 1 columns width',
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
						'title' => 'Widget 2 columns width',
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
						'title' => 'Widget 3 columns width',
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
						'title' => 'Widget 4 columns width',
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
						'title' => 'Footer copyright Text',
						'description' => '',
					)
				)
			); 
		//Social Settings
		$this->sections[] = array(
				'id' => 'social-settings',
				'icon' => 'el-icon-cogs',
				'title' => 'Social Settings',
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
				'title' => 'Contact Settings',
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
				'title' => '404 Settings',
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