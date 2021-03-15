<?php

add_action( 'widgets_init', function(){

  register_sidebar( array(
    'name'          => 'Shift Header Section',
    'id'            => 'shift-header-section',
    'description'   => 'Appears above the navigation menu',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
  ) );

});
