<?php
/*
Widget Name: Custom Widget
Description: An example widget which displays 'Hello world!'.
Author: Inzite
Author URI: http://inzite.dk
*/

class Custom_Widget extends SiteOrigin_Widget {
	function __construct() {
		parent::__construct(
			'custom-widget',
			__('Custom Widget', 'custom-widget-text-domain'),
			array(
				'description' => __('A hello world widget.', 'custom-widget-text-domain'),
			),
			array(
			),
			array(
				'text' => array(
					'type' => 'text',
					'label' => __('Hello world! goes here.', 'siteorigin-widgets'),
					'default' => 'Hello world!'
				),
			),
			get_template_directory_uri().'/widgets/custom-widget/'
		);
	}
	function get_template_name($instance) {
		return 'custom-widget-template';
	}
	function get_style_name($instance) {
		return 'custom-widget-style';
	}
}
siteorigin_widget_register('custom-widget', __FILE__, 'Custom_Widget');
