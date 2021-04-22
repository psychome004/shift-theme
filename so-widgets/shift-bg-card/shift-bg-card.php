<?php
/*
	Widget Name: Shift BG Card
	Description: Card widget with background image
	Author: Stephen Anil, Sputznik
	Author URI:	http://sputznik.com
	Widget URI:
	Video URI:
*/
class Shift_BG_Card extends SiteOrigin_Widget {

	function __construct() {
		//Here you can do any preparation required before calling the parent constructor, such as including additional files or initializing variables.
		//Call the parent constructor with the required arguments.
		parent::__construct(
			// The unique id for your widget.
			'shift-bg-card',
			// The name of the widget for display purposes.
			__('Shift BG Card', 'siteorigin-widgets'),
			// The $widget_options array, which is passed through to WP_Widget.
			// It has a couple of extras like the optional help URL, which should link to your sites help or support page.
			array(
				'description' => __('Card widget with background image', 'siteorigin-widgets'),
				'help'        => '',
			),
			//The $control_options array, which is passed through to WP_Widget
			array(),
			//The $form_options array, which describes the form fields used to configure SiteOrigin widgets. We'll explain these in more detail later.
			array(
        'bg_cards_repeater' => array(
          'type'      => 'repeater',
          'label'     => 'Card Repeater',
          'item_label' => array(
						'selector' => "[id*='card_title']",
						'update_event' => 'change',
						'value_method' => 'val'
					),
          'fields'    =>  array(
						'image' => array(
							'type' 		=> 'media',
							'label' 	=> __( 'Background Image', 'siteorigin-widgets' ),
							'choose' 	=> __( 'Choose image', 'siteorigin-widgets' ),
							'update' 	=> __( 'Set image', 'siteorigin-widgets' ),
							'library' 	=> 'image',
							'fallback' 	=> false
						),
						'card_title'  =>  array(
              'type'  =>  'text',
              'label' =>  __( 'Title', 'siteorigin-widgets' ),
              'default' =>  '',
            ),
            'card_desc' => array(
			        'type' 	=> 'textarea',
			        'label' => __( 'Description', 'siteorigin-widgets' )
				    ),
						'bg_color' => array(
							'type' 		=> 'color',
							'label' 	=> __( 'Overlay Color', 'siteorigin-widgets' ),
							'default' 	=> '#2e3d59'
						),
          )
        ),
				'title_color' => array(
					'type' 		=> 'color',
					'label' 	=> __( 'Title Color', 'siteorigin-widgets' ),
					'default' 	=> '#ffffff'
				),
        'desc_color'  =>  array(
          'type'  =>  'color',
          'label' =>  __( 'Description Color', 'siteorigin-widgets' ),
          'default' =>  '#ffffff'
        ),

			),
			//The $base_folder path string.
			get_template_directory()."/so-widgets/shift-bg-card"
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
siteorigin_widget_register('shift-bg-card', __FILE__, 'Shift_BG_Card');
