<?php
function add_my_awesome_widgets_collection($folders){
	$folders[] = get_stylesheet_directory().'/widgets/';
	return $folders;
}
add_filter('siteorigin_widgets_widget_folders', 'add_my_awesome_widgets_collection');
