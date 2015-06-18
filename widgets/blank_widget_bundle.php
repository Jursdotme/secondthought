<?php
function add_my_awesome_widgets_collection($folders){
	$folders[] = get_stylesheet_directory().'/widgets/blank_widgets_bundle/';
	return $folders;
}
add_filter('siteorigin_widgets_widget_folders', 'add_my_awesome_widgets_collection');
