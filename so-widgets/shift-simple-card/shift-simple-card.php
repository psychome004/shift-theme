<?php
/*
	Widget Name: Shift Simple Card
	Description: Simple card widget with title and description
	Author: Stephen Anil, Sputznik
	Author URI:	http://sputznik.com
	Widget URI:
	Video URI:
*/
class Shift_Simple_Card extends SiteOrigin_Widget {

	function __construct() {
		//Here you can do any preparation required before calling the parent constructor, such as including additional files or initializing variables.
		//Call the parent constructor with the required arguments.
		parent::__construct(
			// The unique id for your widget.
			'shift-simple-card',
			// The name of the widget for display purposes.
			__('Shift Simple Card', 'siteorigin-widgets'),
			// The $widget_options array, which is passed through to WP_Widget.
			// It has a couple of extras like the optional help URL, which should link to your sites help or support page.
			array(
				'description' => __('Simple card widget with title and description', 'siteorigin-widgets'),
				'help'        => '',
			),
			//The $control_options array, which is passed through to WP_Widget
			array(),
			//The $form_options array, which describes the form fields used to configure SiteOrigin widgets. We'll explain these in more detail later.
			array(
        'simple_cards_repeater' => array(
          'type'      => 'repeater',
          'label'     => 'Card Repeater',
          'item_label' => array(
						'selector' => "[id*='card_title']",
						'update_event' => 'change',
						'value_method' => 'val'
					),
          'fields'    =>  array(
            'card_title'  =>  array(
              'type'  =>  'text',
              'label' =>  __( 'Title', 'siteorigin-widgets' ),
              'default' =>  '',
            ),
            'card_desc' => array(
			        'type' 	=> 'builder',
			        'label' => __( 'Description', 'siteorigin-widgets' )
				    ),
          )
        ),
				'title_color' => array(
					'type' 		=> 'color',
					'label' 	=> __( 'Title Color', 'siteorigin-widgets' ),
					'default' 	=> '#000000'
				),
        'desc_color'  =>  array(
          'type'  =>  'color',
          'label' =>  __( 'Description Color', 'siteorigin-widgets' ),
          'default' =>  '#000000'
        ),
				'bg_color' => array(
					'type' 		=> 'color',
					'label' 	=> __( 'Background Color', 'siteorigin-widgets' ),
					'default' 	=> '#ffffff'
				),
			),
			//The $base_folder path string.
			get_template_directory()."/so-widgets/shift-simple-card"
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
siteorigin_widget_register('shift-simple-card', __FILE__, 'Shift_Simple_Card');
