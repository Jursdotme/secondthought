<?php
/*
Widget Name: Shared content
Description: Add shared content with widget areas.
Author: Inzite Media
Author URI: http://inzite.dk
*/

class Pagebuilder_Widget_Area extends SiteOrigin_Widget {


	function __construct() {
		global $wp_registered_sidebars;
    $options = array();
    foreach ($wp_registered_sidebars as $sidebar) {

      array_push ( $options, $sidebar['id'] = $sidebar['name'] );

    }
		parent::__construct(
			'pagebuilder-widget-area',
			__('Shared content', 'secondthought'),
			array(
				'description' => __('Add shared content with widget areas.', 'secondthought'),
			),
			array(
			),
			array(
				'sidebar' => array(
		        'type' => 'select',
		        'label' => __( 'Choose widget area', 'widget-form-fields-text-domain' ),
		        'options' => $options
		    )
			),
			get_template_directory_uri().'/widgets/pagebuilder-widget-area/'
		);
	}
	function get_template_name($instance) {
		return 'pagebuilder-widget-area-template';
	}
}
siteorigin_widget_register('pagebuilder-widget-area', __FILE__, 'Pagebuilder_Widget_Area');
