<?php

// Footer Panel
$wp_customize->add_panel( 'footer_panel', array(
  'priority'       => 10,
  'capability'     => 'edit_theme_options',
  'theme_supports' => '',
  'title'          => 'Footer Settings',
  'description'    => 'Configure the layout and colors for the footer of the site.',
));

  // Footer Settings
  $wp_customize->add_section( 'footer_section' , array(
    'title'      => __( 'Footer Settings Settings', 'secondthought' ),
    'priority'   => 11,
    //'panel'  => 'footer_panel',
  ));

    // Footer text-color
      $wp_customize->add_setting( 'footer_text_color' , array(
        'default'     => '#fff',
        'transport'   => 'postMessage',
      ));

      $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_text_color', array(
        'label'        => __( 'Text color', 'secondthought' ),
        'section'    => 'footer_section',
        'settings'   => 'footer_text_color',
        'priority'   => 1
      )));

    // Footer text-link-color
      $wp_customize->add_setting( 'footer_text_color_link' , array(
        'default'     => '#fff',
        'transport'   => 'postMessage',
      ));

      $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_text_color_link', array(
        'label'        => __( 'Link color', 'secondthought' ),
        'section'    => 'footer_section',
        'settings'   => 'footer_text_color_link',
        'priority'   => 1
      )));

    // Navigation Item Background color
      $wp_customize->add_setting( 'footer_bg_color' , array(
        'default'     => '#E34A3D',
        'transport'   => 'postMessage',
      ));

      $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_bg_color', array(
        'label'        => __( 'Background color', 'secondthought' ),
        'section'    => 'footer_section',
        'settings'   => 'footer_bg_color',
        'priority'   => 1
      )));

    // Footer Margin Top
      $wp_customize->add_setting( 'footer_margin_top' , array(
        'default'     => 30,
        'transport'   => 'postMessage',
      ));

      $wp_customize->add_control( 'footer_margin_top', array(
        'type'        => 'number',
        'priority'    => 10,
        'section'     => 'footer_section',
        'label'       => __( 'Footer margin top', 'theme_name' ),
        'description' => __( 'Distance from menu to the top of the page', 'theme_name' ),
      ));

    // Footer Margin Bottom
      $wp_customize->add_setting( 'footer_margin_bottom' , array(
        'default'     => 30,
        'transport'   => 'postMessage',
      ));

      $wp_customize->add_control( 'footer_margin_bottom', array(
        'type'        => 'number',
        'priority'    => 10,
        'section'     => 'footer_section',
        'label'       => __( 'Footer margin bottom', 'theme_name' ),
        'description' => __( 'Distance from menu to the bottom of the page', 'theme_name' ),
      ));

    // Footer text size
      $wp_customize->add_setting( 'footer_text_size' , array(
        'default'     => 16,
        'transport'   => 'postMessage',
      ));

      $wp_customize->add_control( 'footer_text_size', array(
        'type'        => 'number',
        'priority'    => 10,
        'section'     => 'footer_section',
        'label'       => __( 'Text size', 'theme_name' ),
      ));

    // Layout Selector
      $wp_customize->add_setting( 'footer_text_align' , array(
        'default'     => 'center',
        'transport'   => 'refresh',
      ));
      $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'footer_text_align', array(
            'label'          => __( 'Text Alignment', 'theme_name' ),
            'section'        => 'footer_section',
            'settings'       => 'footer_text_align',
            'type'           => 'radio',
            'choices'        => array(
                'right'   => __( 'Right' ),
                'left'  => __( 'Left' ),
                'center'   => __( 'Center' ),
            )
      )));
