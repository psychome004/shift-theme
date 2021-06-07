<?php
/*
	Widget Name: Shift Card Slider
	Description: Shift SOW for using Card Slider with SLICK.JS within the page builder
	Author: Stephen Anil, Sputznik
	Author URI:	http://sputznik.com
	Widget URI:
	Video URI:
*/
class Shift_Card_Slider extends SiteOrigin_Widget {

	function __construct() {
		//Here you can do any preparation required before calling the parent constructor, such as including additional files or initializing variables.
		//Call the parent constructor with the required arguments.
		parent::__construct(
			// The unique id for your widget.
			'shift-card-slider',
			// The name of the widget for display purposes.
			__('Shift Card Slider', 'siteorigin-widgets'),
			// The $widget_options array, which is passed through to WP_Widget.
			// It has a couple of extras like the optional help URL, which should link to your sites help or support page.
			array(
				'description' => __('Shift SOW for using Card Slider with SLICK.JS within the page builder', 'siteorigin-widgets'),
				'help'        => '',
			),
			//The $control_options array, which is passed through to WP_Widget
			array(),
			//The $form_options array, which describes the form fields used to configure SiteOrigin widgets. We'll explain these in more detail later.
			array(
				'show_slides' => array(
					'type' 			=> 'number',
					'label' 		=> __( 'Show number of slides', 'siteorigin-widgets' ),
					'default' 		=> 6,
				),
				'cards' => array(
					'type' 	=> 'repeater',
					'label' => __( 'Card Section' , 'siteorigin-widgets' ),
					'item_name'  => __( 'Card Repeater', 'siteorigin-widgets' ),
					'fields' => array(
						'image' => array(
							'type' 		=> 'media',
							'label' 	=> __( 'Choose Image', 'siteorigin-widgets' ),
							'choose' 	=> __( 'Choose image', 'siteorigin-widgets' ),
							'update' 	=> __( 'Set image', 'siteorigin-widgets' ),
							'library' 	=> 'image',
							'fallback' 	=> false
						),
						'card_content' => array(
							'type' 	=> 'textarea',
							'label' => __( 'Card Content', 'siteorigin-widgets'),
						),
					)
				),
				'is_animated_card' => array(
					'type' => 'checkbox',
					'label' => __( 'Enable animation', 'siteorigin-widgets' ),
          'description' => 'Clicking on the button will animate the card one by one',
					'default' => false,
					'state_emitter' => array(
						'callback' 	=> 'conditional',
						'args' 		=> array(
							'is_animated_card[active]: val',
							'is_animated_card[inactive]: !val'
						)
					),
				),
        'animation_pixel' => array(
          'type'    => 'number',
          'label'   => __( 'Window Width', 'siteorigin-widgets' ),
					'default'    	=> '1024',
					'description' => 'Animation will work only above the specified window width. Default 1024px',
          'state_handler' => array(
  					'is_animated_card[active]' 	=> array('show'),
  					'_else[is_animated_card]' 	=> array('hide'),
  				),
				),
			),
			//The $base_folder path string.
			get_template_directory()."/so-widgets/shift-card-slider"
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
siteorigin_widget_register('shift-card-slider', __FILE__, 'Shift_Card_Slider');
