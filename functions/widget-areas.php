<?php // If Dynamic Sidebar Exists
if (function_exists('register_sidebar'))
{
    // Define Sidebar Footer Widget Area 1
    register_sidebar(array(
        'name'          => __('Footer Left Widget Area', 'secondthought'),
        'description'   => __('Widget area for the footer, this is the Left column', 'secondthought'),
        'id'            => 'widget-area-1',
        'before_widget' => '<div id="%1$s" class="%2$s widget-area">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>'
    ));

    // Define Sidebar Footer Widget Area 2
    register_sidebar(array(
        'name'          => __('Footer Center Widget Area 2', 'secondthought'),
        'description'   => __('Widget area for the footer, this is the Left column', 'secondthought'),
        'id'            => 'widget-area-2',
        'before_widget' => '<div id="%1$s" class="%2$s widget-area">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>'
    ));

    // Define Sidebar Footer Widget Area 3
    register_sidebar(array(
        'name'          => __('Footer Right Widget Area 3', 'secondthought'),
        'description'   => __('Widget area for the footer, this is the Left column', 'secondthought'),
        'id'            => 'widget-area-3',
        'before_widget' => '<div id="%1$s" class="%2$s widget-area">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>'
    ));
} ?>
