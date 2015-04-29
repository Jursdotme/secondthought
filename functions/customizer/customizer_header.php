<?php

// Header Panel
$wp_customize->add_panel( 'header_panel', array(
  'priority'       => 10,
  'capability'     => 'edit_theme_options',
  'theme_supports' => '',
  'title'          => 'Header Settings',
  'description'    => 'Configure the layout and colors for the header of the site.',
));

  // Navigation Settings
  $wp_customize->add_section( 'navigation_section' , array(
    'title'      => __( 'Navigation Settings', 'secondthought' ),
    'priority'   => 3,
    'panel'  => 'header_panel',
  ));

    // Navigation text-color
      $wp_customize->add_setting( 'nav_item_text_color' , array(
        'default'     => '#fff',
        'transport'   => 'postMessage',
      ));

      $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'nav_item_text_color', array(
        'label'        => __( 'Navigation text-color', 'secondthought' ),
        'section'    => 'navigation_section',
        'settings'   => 'nav_item_text_color',
        'priority'   => 1
      )));

    // Navigation Item Background color
      $wp_customize->add_setting( 'nav_item_bg_color' , array(
        'default'     => '',
        'transport'   => 'postMessage',
      ));

      $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'nav_item_bg_color', array(
        'label'        => __( 'Navigation Item Background color', 'secondthought' ),
        'section'    => 'navigation_section',
        'settings'   => 'nav_item_bg_color',
        'priority'   => 1
      )));

    // Navigation Item Hover color
      $wp_customize->add_setting( 'nav_item_bg_color_hover' , array(
        'default'     => '#212e3f',
        'transport'   => 'refresh',
      ));

      $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'nav_item_bg_color_hover', array(
        'label'        => __( 'Navigation Item Hover color', 'secondthought' ),
        'section'    => 'navigation_section',
        'settings'   => 'nav_item_bg_color_hover',
        'priority'   => 1
      )));

    // DROPDOWN
    // Dropdown Navigation text-color
      $wp_customize->add_setting( 'dropdown_nav_item_text_color' , array(
        'default'     => '#4c4c4c',
        'transport'   => 'refresh',
      ));

      $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dropdown_nav_item_text_color', array(
        'label'        => __( 'Dropdown Navigation text-color', 'secondthought' ),
        'section'    => 'navigation_section',
        'settings'   => 'dropdown_nav_item_text_color',
        'priority'   => 1
      )));

    // Dropdown Navigation Item Background color
      $wp_customize->add_setting( 'dropdown_nav_item_bg_color' , array(
        'default'     => '',
        'transport'   => 'refresh',
      ));

      $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dropdown_nav_item_bg_color', array(
        'label'        => __( 'Dropdown Navigation Item Background color', 'secondthought' ),
        'section'    => 'navigation_section',
        'settings'   => 'dropdown_nav_item_bg_color',
        'priority'   => 1
      )));

    // Dropdown Navigation Item Hover color
      $wp_customize->add_setting( 'dropdown_nav_item_bg_color_hover' , array(
        'default'     => '#f6f6f6',
        'transport'   => 'refresh',
      ));

      $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dropdown_nav_item_bg_color_hover', array(
        'label'        => __( 'Dropdown Navigation Item Hover color', 'secondthought' ),
        'section'    => 'navigation_section',
        'settings'   => 'dropdown_nav_item_bg_color_hover',
        'priority'   => 1
      )));

    // Menu Margin Top
      $wp_customize->add_setting( 'menu_margin_top' , array(
        'default'     => 30,
        'transport'   => 'postMessage',
      ));

      $wp_customize->add_control( 'menu_margin_top', array(
        'type'        => 'number',
        'priority'    => 10,
        'section'     => 'navigation_section',
        'label'       => __( 'Menu margin top', 'theme_name' ),
        'description' => __( 'Distance from menu to the top of the page', 'theme_name' ),
        'input_attrs' => array(
            'min'   => 0,
            'max'   => 200,
            'step'  => 1,
            'class' => 'test-class test',
            'style' => 'color: #000',
        ),
      ));

    // Menu Margin Bottom
      $wp_customize->add_setting( 'menu_margin_bottom' , array(
        'default'     => 30,
        'transport'   => 'postMessage',
      ));

      $wp_customize->add_control( 'menu_margin_bottom', array(
        'type'        => 'number',
        'priority'    => 10,
        'section'     => 'navigation_section',
        'label'       => __( 'Logo margin bottom', 'theme_name' ),
        'description' => __( 'Distance from menu to the bottom of the page', 'theme_name' ),
        'input_attrs' => array(
            'min'   => 0,
            'max'   => 200,
            'step'  => 1,
            'class' => 'test-class test',
            'style' => 'color: #000',
        ),
      ));

    // Menu Item Margin
      $wp_customize->add_setting( 'menu_item_margin' , array(
        'default'     => 0,
        'transport'   => 'postMessage',
      ));

      $wp_customize->add_control( 'menu_item_margin', array(
        'type'        => 'number',
        'priority'    => 10,
        'section'     => 'navigation_section',
        'label'       => __( 'Menu item margin', 'theme_name' ),
        'description' => __( 'Distance between individual menu items.', 'theme_name' ),
        'input_attrs' => array(
            'min'   => 0,
            'max'   => 100,
            'step'  => 1,
            'class' => 'test-class test',
            'style' => 'color: #000',
        ),
      ));

    // Menu Item Padding width
      $wp_customize->add_setting( 'menu_padding_width' , array(
        'default'     => 10,
        'transport'   => 'postMessage',
      ));

      $wp_customize->add_control( 'menu_padding_width', array(
        'type'        => 'number',
        'priority'    => 10,
        'section'     => 'navigation_section',
        'label'       => __( 'Menu button height padding', 'theme_name' ),
        //'description' => __( 'Distance between individual menu items.', 'theme_name' ),
        'input_attrs' => array(
            'min'   => 0,
            'max'   => 200,
            'step'  => 1,
            'class' => 'test-class test',
            'style' => 'color: #000',
        ),
      ));

    // Menu Item Padding Height
      $wp_customize->add_setting( 'menu_padding_height' , array(
        'default'     => 10,
        'transport'   => 'postMessage',
      ));

      $wp_customize->add_control( 'menu_padding_height', array(
        'type'        => 'number',
        'priority'    => 10,
        'section'     => 'navigation_section',
        'label'       => __( 'Menu button width padding', 'theme_name' ),
        //'description' => __( 'Distance between individual menu items.', 'theme_name' ),
        'input_attrs' => array(
            'min'   => 0,
            'max'   => 200,
            'step'  => 1,
            'class' => 'test-class test',
            'style' => 'color: #000',
        ),
      ));


  // Header Settings
  $wp_customize->add_section( 'header_section' , array(
    'title'      => __( 'Header Settings', 'secondthought' ),
    'priority'   => 1,
    'panel'  => 'header_panel',
  ));

    // Layout Selector
      $wp_customize->add_setting( 'layout_selector' , array(
        'default'     => 'nav_right',
        'transport'   => 'refresh',
      ));
      $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'layout_selector', array(
            'label'          => __( 'Layout', 'theme_name' ),
            'section'        => 'header_section',
            'settings'       => 'layout_selector',
            'type'           => 'radio',
            'choices'        => array(
                'nav_right'   => __( 'Menu to the right' ),
                'nav_left'  => __( 'Menu to the left' ),
                'nav_bottom'   => __( 'Menu underneath' ),
                'transparent'  => __( 'Transparent' )
            )
      )));

    // Menu Float
      $wp_customize->add_setting( 'nav_float' , array(
        'default'     => 'right',
        'transport'   => 'refresh',
      ));
      $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'nav_float', array(
            'label'          => __( 'Layout', 'theme_name' ),
            'section'        => 'header_section',
            'settings'       => 'nav_float',
            'type'           => 'radio',
            'choices'        => array(
                'right'   => __( 'Align menu to the right' ),
                'left'  => __( 'Align menu to the left' ),
                //'center' => __('Align menu to center'),
            )
      )));

    // Header Background-color
      $wp_customize->add_setting( 'header_bg_color' , array(
        'default'     => '#2B394C',
        'transport'   => 'postMessage',
      ));

      $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_bg_color', array(
        'label'        => __( 'Header Color', 'secondthought' ),
        'section'    => 'header_section',
        'settings'   => 'header_bg_color',
        'priority'   => 1
      )));

    // Menu Background-color
      $wp_customize->add_setting( 'nav_bg_color' , array(
        'default'     => '#E34A3D',
        'transport'   => 'postMessage',
      ));

      $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'nav_bg_color', array(
        'label'        => __( 'Nav Background Color', 'secondthought' ),
        'section'    => 'header_section',
        'settings'   => 'nav_bg_color',
        'priority'   => 1
      )));


  // Logo Settings
  $wp_customize->add_section( 'logo_section' , array(
    'title'      => __( 'Logo Settings', 'secondthought' ),
    'priority'   => 2,
    'panel'  => 'header_panel',
  ));

      // Logo file
      $wp_customize->add_setting( 'logo_file' , array(
        'default'     => '',
        'transport'   => 'refresh',
      ));

      $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'logo_file', array(
        'label'      => __( 'Upload a logo', 'theme_name' ),
        'section'    => 'logo_section',
        'settings'   => 'logo_file',
        'context'    => 'your_setting_context'
      )));

      // Logo Width
      $wp_customize->add_setting( 'logo_width' , array(
        'default'     => 25,
        'transport'   => 'postMessage',
      ));

      $wp_customize->add_control( 'logo_width', array(
        'type'        => 'number',
        'priority'    => 10,
        'section'     => 'logo_section',
        'label'       => __( 'Logo Width', 'theme_name' ),
        'description' => __( 'Width of the logo displayed in percent.', 'theme_name' ),
        'input_attrs' => array(
            'min'   => 0,
            'max'   => 100,
            'step'  => 1,
            'class' => 'test-class test',
            'style' => 'color: #000',
        ),
      ));

      // Logo Margin Top
      $wp_customize->add_setting( 'logo_margin_top' , array(
        'default'     => 30,
        'transport'   => 'postMessage',
      ));

      $wp_customize->add_control( 'logo_margin_top', array(
        'type'        => 'number',
        'priority'    => 10,
        'section'     => 'logo_section',
        'label'       => __( 'Logo margin top', 'theme_name' ),
        'description' => __( 'Distance from logo to the top of the page', 'theme_name' ),
        'input_attrs' => array(
            'min'   => 0,
            'max'   => 60,
            'step'  => 1,
            'class' => 'test-class test',
            'style' => 'color: #000',
        ),
      ));

      // Logo Margin Bottom
      $wp_customize->add_setting( 'logo_margin_bottom' , array(
        'default'     => 30,
        'transport'   => 'postMessage',
      ));

      $wp_customize->add_control( 'logo_margin_bottom', array(
        'type'        => 'number',
        'priority'    => 10,
        'section'     => 'logo_section',
        'label'       => __( 'Logo margin bottom', 'theme_name' ),
        'description' => __( 'Distance from logo to the bottom of the page', 'theme_name' ),
        'input_attrs' => array(
            'min'   => 0,
            'max'   => 60,
            'step'  => 1,
            'class' => 'test-class test',
            'style' => 'color: #000',
        ),
      ));
