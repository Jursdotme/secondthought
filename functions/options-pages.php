<?php if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' 	=> __('Page Options', 'secondthought'),
		'menu_title'	=> __('Page Options', 'secondthought'),
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false,
    'icon_url'    => 'dashicons-admin-generic',
    'position'    => '59.9'
	));

	acf_add_options_page(array(
		'page_title' 	=> __('Admin Options', 'secondthought'),
		'menu_title'	=> __('Admin Options', 'secondthought'),
		'parent_slug'	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false,
    'icon_url'    => 'dashicons-admin-settings',
    'position'    => '59.9'
	));

}
