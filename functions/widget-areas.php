<?php // If Dynamic Sidebar Exists
if (function_exists('register_sidebar'))
{
  // Define Footer Widget Area
  register_sidebar(array(
      'name'          => __('Footer Widget Area', 'secondthought'),
      'description'   => __('Widgets in the footer', 'secondthought'),
      'id'            => 'footer-widget-area',
      'before_widget' => '<div id="%1$s" class="%2$s widget-area">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3>',
      'after_title'   => '</h3>'
  ));

  // register_sidebar(array(
  //     'name'          => __('Sidebar Widget Area', 'secondthought'),
  //     'description'   => __('Widget area defined in the sidebar. If sidebar is not used this area will have no effect.', 'secondthought'),
  //     'id'            => 'sidebar-widget-area',
  //     'before_widget' => '<div id="%1$s" class="%2$s widget-area">',
  //     'after_widget'  => '</div>',
  //     'before_title'  => '<h3>',
  //     'after_title'   => '</h3>'
  // ));




} ?>
