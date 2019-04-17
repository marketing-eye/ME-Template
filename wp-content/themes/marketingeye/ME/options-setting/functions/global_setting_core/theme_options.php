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
						'default' =>  get_template_directory_uri() . '/ME/images/logo.jpg'
					),
					array(
						'id' => 'opt-general-logo-2',
						'type' => 'media',
						'title' => "Logo update 2",
						'desc' => 'Upload your second custom logo image',
						'default' => get_template_directory_uri() . '/ME/images/logo.jpg'
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
						'description' => ''
					),
					array(
						'id' => 'opt-404-header-subtitle',
						'type' => 'text',
						'title' => '404 header subtitle',
						'description' => ''
					),
					array(
						'id' => 'opt-404-title',
						'type' => 'text',
						'title' => '404 title',
						'description' => ''
					),
					array(
						'id' => 'opt-404-text',
						'type' => 'editor',
						'title' => '404 Text',
						'description' => '',
					)
				)
			); 

	}
}

$config = new global_setting_config();
//var_dump($config);