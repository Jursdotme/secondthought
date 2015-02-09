<?php if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' 	=> 'Sideoplysninger',
		'menu_title'	=> 'Sideoplysninger',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false,
    'icon_url'    => 'dashicons-info',
    'position'    => '59.9'
	));

}
