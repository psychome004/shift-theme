<?php

/*ENQUEUE STYLES*/
add_action('wp_enqueue_scripts',function(){
  // Enqueue Styles
  wp_enqueue_style('aos-css', 'https://unpkg.com/aos@next/dist/aos.css', false, null );
  wp_enqueue_style('shift-css', get_stylesheet_directory_uri().'/assets/css/main.css', array('sp-core-style'), time() );

  // Enqueue Scripts
  wp_enqueue_script( 'aos-js', 'https://unpkg.com/aos@next/dist/aos.js', array('jquery'), null, true );
  wp_enqueue_script( 'shift-slider', get_stylesheet_directory_uri().'/assets/js/shift-slider.js', array( 'jquery' ), time(), true );
  wp_enqueue_script('shift-user-popup-js', get_stylesheet_directory_uri().'/assets/js/shift-user-popup.js', array('jquery'), time() ); // SHIFT USER POPUP SCRIPT
  wp_enqueue_script('shift-vimeo-modal-js', get_stylesheet_directory_uri().'/assets/js/vimeo-video-modal.js', array('jquery'), time() ); // SHIFT VIMEO MODAL

}, 99);

//Include Files
$inc_files = array(
  'lib/custom-header/header-functions.php',
  'lib/widgets/widgets.php'
);

foreach( $inc_files as $inc_file ){
  require_once( $inc_file );
}

/* ADD SOW FROM THE THEME */
add_action('siteorigin_widgets_widget_folders', function( $folders ){
  $folders[] = get_stylesheet_directory() . '/so-widgets/';
  return $folders;
});

/**
* Add a custom link to the end of a specific menu that uses the wp_nav_menu() function
*/
add_filter('wp_nav_menu_items', function( $items, $args ){
  $social_icons  ='<a target="_blank" href="https://www.facebook.com/ShiftFreedom"><i class="fa fa-facebook" aria-hidden="true"></i></a>';
  $social_icons .='<a target="_blank" href="https://www.instagram.com/shiftfreedomnow/"><i class="fa fa-instagram" aria-hidden="true"></i></a>';
  $social_icons .='<a target="_blank" href="https://www.youtube.com/channel/UCKbfWzC2C08RgqUDmKVEv1A"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>';

  if( $args->theme_location == 'primary' ){
      $items .= '<li class="menu-item social-icons-wrapper"><div class="social-icons">'.$social_icons.'</div></li>';
  }
  return $items;
}, 10, 2);


/* EXCERPT MORE */
add_filter( 'excerpt_more', function( $more ){
	return '&hellip;';
});
