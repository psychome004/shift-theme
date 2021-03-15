<?php

/*ENQUEUE STYLES*/
add_action('wp_enqueue_scripts',function(){
  wp_enqueue_style('shift-css', get_stylesheet_directory_uri().'/assets/css/main.css', array('sp-core-style'), time() );
}, 99);

//Include Files
include('lib/custom-header/header-functions.php');

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
