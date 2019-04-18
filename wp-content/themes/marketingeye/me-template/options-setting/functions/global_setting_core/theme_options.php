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
		$this->sections[] = array(
				'id' => 'header-options',
				'icon' => 'el-icon-cogs',
				'title' => 'Header Options',
				'fields' => array(

				)
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
	}
}

$config = new global_setting_config();
//var_dump($config);