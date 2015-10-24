<?php
/*
Widget Name: Pagebuilder Widget Area
Description: An example widget which displays 'Hello world!'.
Author: Inzite
Author URI: http://inzite.dk
*/

if (function_exists('register_sidebar'))
{

  register_sidebar(array(
      'name'          => __('Pagebuilder Widget Area 1', 'secondthought'),
      'description'   => __('', 'secondthought'),
      'id'            => 'pagebuilder-widget-area-1',
      'before_widget' => '<div id="%1$s" class="%2$s widget-area">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3>',
      'after_title'   => '</h3>'
  ));

	register_sidebar(array(
      'name'          => __('Pagebuilder Widget Area 2', 'secondthought'),
      'description'   => __('', 'secondthought'),
      'id'            => 'pagebuilder-widget-area-2',
      'before_widget' => '<div id="%1$s" class="%2$s widget-area">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3>',
      'after_title'   => '</h3>'
  ));


	register_sidebar(array(
			'name'          => __('Pagebuilder Widget Area 3', 'secondthought'),
			'description'   => __('', 'secondthought'),
			'id'            => 'pagebuilder-widget-area-3',
			'before_widget' => '<div id="%1$s" class="%2$s widget-area">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3>',
			'after_title'   => '</h3>'
	));


	register_sidebar(array(
			'name'          => __('Pagebuilder Widget Area 4', 'secondthought'),
			'description'   => __('', 'secondthought'),
			'id'            => 'pagebuilder-widget-area-4',
			'before_widget' => '<div id="%1$s" class="%2$s widget-area">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3>',
			'after_title'   => '</h3>'
	));


}

class Pagebuilder_Widget_Area extends SiteOrigin_Widget {


	function __construct() {
		global $wp_registered_sidebars;
    $options = array();
    foreach ($wp_registered_sidebars as $sidebar) {

      array_push ( $options, $sidebar['id'] = $sidebar['name'] );


    }
		parent::__construct(
			'pagebuilder-widget-area',
			__('Pagebuilder Widget Area', 'pagebuilder-widget-area-text-domain'),
			array(
				'description' => __('', 'pagebuilder-widget-area-text-domain'),
			),
			array(
			),
			array(
				'sidebar' => array(
		        'type' => 'select',
		        'label' => __( 'Choose a thing from a long list of things', 'widget-form-fields-text-domain' ),
		        'options' => $options
		    )
			),
			get_template_directory_uri().'/widgets/pagebuilder-widget-area/'
		);
	}
	function get_template_name($instance) {
		return 'pagebuilder-widget-area-template';
	}
	function get_style_name($instance) {
		return 'pagebuilder-widget-area-style';
	}
}
siteorigin_widget_register('pagebuilder-widget-area', __FILE__, 'Pagebuilder_Widget_Area');
