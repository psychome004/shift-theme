<?php
/*
	Widget Name: Shift Hero Image
	Description: Shift Hero Image
	Author: Stephen Anil, Sputznik
	Author URI: https://sputznik.com
	Widget URI:
	Video URI:
*/
class SHIFT_HERO_IMAGE extends SiteOrigin_Widget {

	function __construct() {
		//Here you can do any preparation required before calling the parent constructor, such as including additional files or initializing variables.
		//Call the parent constructor with the required arguments.
		parent::__construct(
			// The unique id for your widget.
			'shift-hero-img',
			// The name of the widget for display purposes.
			__('Shift Hero Image', 'siteorigin-widgets'),
			// The $widget_options array, which is passed through to WP_Widget.
			// It has a couple of extras like the optional help URL, which should link to your sites help or support page.
			array(
				'description' => __( 'Shift Hero Image', 'siteorigin-widgets' ),
				'help'        => '',
			),
			//The $control_options array, which is passed through to WP_Widget
			array(),
			//The $form_options array, which describes the form fields used to configure SiteOrigin widgets. We'll explain these in more detail later.
			array(
				'image' => array(
					'type' 		=> 'media',
					'label' 	=> __( 'Choose Image', 'siteorigin-widgets' ),
					'choose' 	=> __( 'Choose image', 'siteorigin-widgets' ),
					'update' 	=> __( 'Set image', 'siteorigin-widgets' ),
					'library' 	=> 'image',
					'fallback' 	=> false
				),
				'arrow_target' => array(
					'type' 			=> 'text',
					'label' 		=> __( 'Target Id', 'siteorigin-widgets' ),
					'default' 	=> '',
				),
				'img_overlay' => array(
					'type' 				=> 'slider',
					'label' 			=> __( 'Image Overlay', 'siteorigin-widgets' ),
					'default' 		=> 4,
					'min' 				=> 0,
					'max'					=> 10,
					'integer' 		=> true,
					'description'	=>	__( 'Default value 4. Max value 10', 'siteorigin-widgets' ),
				),
			),
			//The $base_folder path string.
			get_template_directory()."/so-widgets/shift-hero-img"
		);
	}
	function get_template_name($instance) {
		return 'template';
	}
	function get_template_dir($instance) {
		return 'templates';
	}
    function get_style_name($instance) {
        return '';
    }
}
siteorigin_widget_register('shift-hero-img', __FILE__, 'SHIFT_HERO_IMAGE');
