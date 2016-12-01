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

  if (class_exists('acf')) {
    if( have_rows('widget_omrade', 'option') ):
      while ( have_rows('widget_omrade', 'option') ) : the_row();

      register_sidebar(array(
        'name'          => __(get_sub_field('name'), 'secondthought'),
        'description'   => "",
        'id'            => sanitize_title( get_sub_field('description') ) . '-widget-area',
        'before_widget' => '<div id="%1$s" class="%2$s widget-area">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>'
      ));

    endwhile;
  endif;
  }

}
