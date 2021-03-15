<?php

/*ENQUEUE STYLES*/
add_action('wp_enqueue_scripts',function(){
  wp_enqueue_style('shift-css', get_stylesheet_directory_uri().'/assets/css/main.css', array('sp-core-style'), time() );
  wp_enqueue_script( 'shift-slider', get_stylesheet_directory_uri().'/assets/js/shift-slider.js', array( 'jquery' ), time(), true );
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
  $social_icons  ='<a target="_blank" href=" https://www.facebook.com/"><i class="fa fa-facebook"></i></a>';
  $social_icons .='<a target="_blank" href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a>';

  if( $args->theme_location == 'primary' ){
      $items .= '<li class="menu-item social-icons-wrapper"><div class="social-icons">'.$social_icons.'</div></li>';
  }
  return $items;
}, 10, 2);
