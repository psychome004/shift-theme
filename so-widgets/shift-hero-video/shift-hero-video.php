<?php
/*
	Widget Name: Shift Hero Video
	Description: Shift Hero Video
	Author: Stephen Anil, Sputznik
	Author URI: https://sputznik.com
	Widget URI:
	Video URI:
*/
class SHIFT_HERO_VIDEO extends SiteOrigin_Widget {

	function __construct() {
		//Here you can do any preparation required before calling the parent constructor, such as including additional files or initializing variables.
		//Call the parent constructor with the required arguments.
		parent::__construct(
			// The unique id for your widget.
			'shift-hero-video',
			// The name of the widget for display purposes.
			__('Shift Hero Video', 'siteorigin-widgets'),
			// The $widget_options array, which is passed through to WP_Widget.
			// It has a couple of extras like the optional help URL, which should link to your sites help or support page.
			array(
				'description' => __( 'Shift Hero Video', 'siteorigin-widgets' ),
				'help'        => '',
			),
			//The $control_options array, which is passed through to WP_Widget
			array(),
			//The $form_options array, which describes the form fields used to configure SiteOrigin widgets. We'll explain these in more detail later.
			array(
				'image' => array(
					'type' 		=> 'media',
					'label' 	=> __( 'Choose Background Image', 'siteorigin-widgets' ),
					'choose' 	=> __( 'Choose image', 'siteorigin-widgets' ),
					'update' 	=> __( 'Set image', 'siteorigin-widgets' ),
					'library' 	=> 'image',
					'fallback' 	=> false
				),
				'video_id' => array(
					'type' 			=> 'text',
					'label' 		=> __( 'Video URL / ID', 'siteorigin-widgets' ),
					'default' 	=> '',
					'description'	=>	__( 'Add video url for youtube / uploaded videos and video id for vimeo videos', 'siteorigin-widgets' ),
				),
				'video_overlay' => array(
					'type' 				=> 'slider',
					'label' 			=> __( 'Video Overlay', 'siteorigin-widgets' ),
					'default' 		=> 4,
					'min' 				=> 0,
					'max'					=> 10,
					'integer' 		=> true,
					'description'	=>	__( 'Default value 4. Max value 10', 'siteorigin-widgets' ),
				),
				'select_video_player' => array(
        	'type' => 'select',
        	'label' => __( 'Select Video Player', 'siteorigin-widgets' ),
					'default' => 'sp-ytube-video',
        	'options' => array(
						'sp-ytube-video'		=> __( 'Youtube', 'siteorigin-widgets' ),
						'shift-vimeo-video' => __( 'Vimeo', 'siteorigin-widgets' ),
            'shift_html5_video' => __( 'HTML5', 'siteorigin-widgets' ),
        	),
					'description'	=>	__( 'Default : Youtube Player.', 'siteorigin-widgets' ),
    		),

			),
			//The $base_folder path string.
			get_template_directory()."/so-widgets/shift-hero-video"
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
siteorigin_widget_register('shift-hero-video', __FILE__, 'SHIFT_HERO_VIDEO');
