<?php

// Typography Panel
$wp_customize->add_panel( 'typography_panel', array(
  'priority'       => 11,
  'capability'     => 'edit_theme_options',
  'theme_supports' => '',
  'title'          => 'Typography Settings',
  'description'    => 'Configure typography settings on the site.',
));

  // Font Section
    $wp_customize->add_section( 'font_section' , array(
      'title'      => __( 'Font Settings', 'secondthought' ),
      'priority'   => 3,
      'panel'  => 'typography_panel',
    ));

  // Google font string
    $wp_customize->add_setting( 'google_font_string' , array(
      'default'     => "<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700|Open+Sans:300italic,400italic,600italic,700italic,400,300,700,600' rel='stylesheet' type='text/css'>",
      'transport'   => 'refresh',
    ));

    $wp_customize->add_control( 'google_font_string', array(
      'label'    => __( 'Google Font string', 'secondthought' ),
      'section'  => 'font_section',
      'settings' => 'google_font_string',
      'type'     => 'text',
      'description' => 'Add @import string from google fonts.'
    ));

  // Google font string
    $wp_customize->add_setting( 'header_font_stack' , array(
      'default'     => "'Montserrat', sans-serif;",
      'transport'   => 'refresh',
    ));

    $wp_customize->add_control( 'header_font_stack', array(
      'label'    => __( 'Header font stack', 'secondthought' ),
      'section'  => 'font_section',
      'settings' => 'header_font_stack',
      'type'     => 'text',
      'description' => 'Add font stack for site headers.'
    ));
  // Google font string
    $wp_customize->add_setting( 'body_font_stack' , array(
      'default'     => "'Open Sans', sans-serif;",
      'transport'   => 'refresh',
    ));

    $wp_customize->add_control( 'body_font_stack', array(
      'label'    => __( 'Body font stack', 'secondthought' ),
      'section'  => 'font_section',
      'settings' => 'body_font_stack',
      'type'     => 'text',
      'description' => 'Add font stack for site body.'
    ));


    //  = array(slug, title, size, lineheight, weight, bottommargin, color);
    $h1 = array('h1', 'Header 1', 48, 1.05, 700, 10, "#000");
    $h2 = array('h2', 'Header 2', 36, 1.25, 400, 10, "#000");
    $h3 = array('h3', 'Header 3', 28, 1.25, 400, 10, "#000");
    $h4 = array('h4', 'Header 4', 18, 1.5, 700, 10, "#000");
    $h5 = array('h5', 'Header 5', 16, 1.5, 700, 10, "#000");
    $h6 = array('h6', 'Header 6', 14, 1.5, 700, 10, "#000");
    $p  = array('p', 'Paragraph', 16, 1.5, 400, 10, "#000");

    $arr = array($h1, $h2, $h3, $h4, $h5, $h6, $p);

    foreach ($arr as $value) {
      // Font Section
      $wp_customize->add_section( $value[0].'_section' , array(
        'title'      => __( $value[1] .' Settings', 'secondthought' ),
        'priority'   => 3,
        'panel'  => 'typography_panel',
      ));

        // H1 Size
          $wp_customize->add_setting( $value[0].'_font_size' , array(
            'default'     => $value[2],
            'transport'   => 'refresh',
          ));

          $wp_customize->add_control( $value[0].'_font_size', array(
            'label'    => __( 'Text Size', 'secondthought' ),
            'section'  => $value[0].'_section',
            'settings' => $value[0].'_font_size',
            'type'     => 'number',
            'description' => 'Size of the text.'
          ));

        // Navigation text-color
          $wp_customize->add_setting( $value[0].'_text_color' , array(
            'default'     => $value[6],
            'transport'   => 'refresh',
          ));

          $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, $value[0].'_text_color', array(
            'label'        => __( 'Color', 'secondthought' ),
            'section'    => $value[0].'_section',
            'settings'   => $value[0].'_text_color',
            'priority'   => 1
          )));

        // H1 Line Height
          $wp_customize->add_setting( $value[0].'_line_height' , array(
            'default'     => $value[3],
            'transport'   => 'refresh',
          ));

          $wp_customize->add_control( $value[0].'_line_height', array(
            'label'    => __( 'Line height', 'secondthought' ),
            'section'  => $value[0].'_section',
            'settings' => $value[0].'_line_height',
            'type'     => 'number',
            'description' => 'Distance between individual lines in the same paragraph.'
          ));

        // H1 Weight
          $wp_customize->add_setting( $value[0].'_font_weight' , array(
            'default'     => $value[4],
            'transport'   => 'refresh',
          ));

          $wp_customize->add_control( $value[0].'_font_weight', array(
            'label'    => __( 'Font weight', 'secondthought' ),
            'section'  => $value[0].'_section',
            'settings' => $value[0].'_font_weight',
            'type'     => 'number',
            'description' => ''
          ));

        // H1 Bottom margin
          $wp_customize->add_setting( $value[0].'_bottom_margin' , array(
            'default'     => $value[5],
            'transport'   => 'refresh',
          ));

          $wp_customize->add_control( $value[0].'_bottom_margin', array(
            'label'    => __( 'Bottom margin', 'secondthought' ),
            'section'  => $value[0].'_section',
            'settings' => $value[0].'_bottom_margin',
            'type'     => 'number',
            'description' => ''
          ));
  }
