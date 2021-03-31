<?php
/*
	Widget Name: Shift Headline
	Description: Shift Headline
	Author: Stephen Anil, Sputznik
	Author URI:	http://sputznik.com
	Widget URI:
	Video URI:
*/
class Shift_Headline extends SiteOrigin_Widget {

	function __construct() {
		//Here you can do any preparation required before calling the parent constructor, such as including additional files or initializing variables.
		//Call the parent constructor with the required arguments.
		parent::__construct(
			// The unique id for your widget.
			'shift-custom-headline',
			// The name of the widget for display purposes.
			__('Shift Headline', 'siteorigin-widgets'),
			// The $widget_options array, which is passed through to WP_Widget.
			// It has a couple of extras like the optional help URL, which should link to your sites help or support page.
			array(
				'description' => __('Shift Headline', 'siteorigin-widgets'),
				'help'        => '',
			),
			//The $control_options array, which is passed through to WP_Widget
			array(),
			//The $form_options array, which describes the form fields used to configure SiteOrigin widgets. We'll explain these in more detail later.
			array(
				'title_left' => array(
					'type' 	=> 'text',
					'label' => __( 'Title Left', 'siteorigin-widgets'),
				),
				'title_right' => array(
					'type' 	=> 'text',
					'label' => __( 'Title Right', 'siteorigin-widgets'),
				),
				'tl_color' => array(
					'type' 		=> 'color',
					'label' 	=> __( 'Title Left Color', 'siteorigin-widgets' ),
					'default' 	=> '#000000'
				),
				'tr_color' => array(
					'type' 		=> 'color',
					'label' 	=> __( 'Title Right Color', 'siteorigin-widgets' ),
					'default' 	=> '#000000'
				),
			),
			//The $base_folder path string.
			get_template_directory()."/so-widgets/shift-custom-headline"
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
siteorigin_widget_register('shift-custom-headline', __FILE__, 'Shift_Headline');
