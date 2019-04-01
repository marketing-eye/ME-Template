<?php

class global_setting_config {
	public $sections = array();
	
	public function __construct() {
		$this-> initSettings();
	}
	
	public function initSettings() {
		//$this->test();
		$this->setSection();
	}
	
	public function test() {
		echo "test config";
	}
	
	public function setSection() {
		//general settings
		$this->sections[] = array(
				'id' => 'general-setting-1',
				'icon' => 'el-icon-cogs',
				'title' => 'General Settings',
				'fields' => array(
					array(
						'id'    => 'opt-general-introduction',
						'type'  => 'info',
						'title' => 'Welcome to ME Theme Option Panel',
						'desc'  => 'From here you can config HELMETS theme in the way you need.'
					),
					array(
						'id' => 'opt-general-logo',
						'type' => 'media',
						'url' => true,
						'title' => "Loogo update",
						'compiler' => 'true',
						//'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
						'desc' => 'Upload your logo image',
						'subtitle' => __('Upload your custom logo image', 'helmets'),
						'default' => array( 'url' => get_template_directory_uri() . '/assets/images/logo.png' ),
						'hint' => array(
							'title'     => 'Hint Title',
							'content'   => 'This is a <b>hint</b> for the media field with a Title.',
						)
					),
					array(
						'id' => 'opt-setting-text',
						'type' => 'text',
						'title' => 'test text',
						'description' => 'this is text setting test'
					)
				)
			); 
		//general settings2
		$this->sections[] = array(
				'id' => 'general-setting-2',
				'icon' => 'el-icon-cogs',
				'title' => 'General Settings2',
				'fields' => array(
					array(
						'id'    => 'opt-general-introduction-2',
						'type'  => 'info',
						'title' => 'Welcome to ME Theme Option Panel-2',
						'desc'  => 'From here you can config HELMETS theme in the way you need.'
					),
					array(
						'id' => 'opt-general-logo-2',
						'type' => 'media',
						'url' => true,
						'title' => __('Logo Upload', 'helmets'),
						'compiler' => 'true',
						//'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
						'desc' => __('Upload your logo image', 'helmets'),
						'subtitle' => __('Upload your custom logo image', 'helmets'),
						'default' => array( 'url' => get_template_directory_uri() . '/assets/images/logo.png' ),
						'hint' => array(
							'title'     => 'Hint Title',
							'content'   => 'This is a <b>hint</b> for the media field with a Title.',
						)
					),
					array(
						'id' => 'opt-setting-text-2',
						'type' => 'text',
						'title' => 'test text 2',
						'description' => 'this is text setting test 2'
					)
				)
			); 
		//general settings3
		$this->sections[] = array(
				'id' => 'general-setting-3',
				'icon' => 'el-icon-cogs',
				'title' => 'General Settings3',
				'fields' => array(
					array(
						'id'    => 'opt-general-introduction-3',
						'type'  => 'info',
						'title' => 'Welcome to ME Theme Option Panel-3',
						'desc'  => 'From here you can config HELMETS theme in the way you need.'
					),
					array(
						'id' => 'opt-general-logo-3',
						'type' => 'media',
						'url' => true,
						'title' => __('Logo Upload', 'helmets'),
						'compiler' => 'true',
						//'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
						'desc' => __('Upload your logo image', 'helmets'),
						'subtitle' => __('Upload your custom logo image', 'helmets'),
						'default' => array( 'url' => get_template_directory_uri() . '/assets/images/logo.png' ),
						'hint' => array(
							'title'     => 'Hint Title',
							'content'   => 'This is a <b>hint</b> for the media field with a Title.',
						)
					),
					array(
						'id' => 'opt-setting-text-3',
						'type' => 'text',
						'title' => 'test text 3',
						'description' => 'this is text setting test 3'
					)
				)
			); 
	}
}

$config = new global_setting_config();
//var_dump($config);