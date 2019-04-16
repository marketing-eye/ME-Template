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
						'default' => array( 'url' => get_template_directory_uri() . '/assets/images/logo.png' ),
					),
					array(
						'id' => 'opt-general-logo-2',
						'type' => 'media',
						'title' => "Logo update 2",
						'desc' => 'Upload your second custom logo image',
						'default' => array( 'url' => get_template_directory_uri() . '/assets/images/logo2.png' ),
					),
					array(
						'id' => 'opt-general-custom-css',
						'type' => 'editor',
						'title' => 'Custom CSS',
						'description' => 'Paste your custom CSS code here.'
					),
					array(
						'id' => 'opt-general-custom-js',
						'type' => 'editor',
						'title' => 'Custom JS',
						'description' => 'Paste your custom JS code here.'
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
					),
				)
			); 

	}
}

$config = new global_setting_config();
//var_dump($config);