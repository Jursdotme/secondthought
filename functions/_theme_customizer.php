<?php

function secondthought_customizer_live_preview() {

  wp_enqueue_script(
    'secondthought-theme-customizer',
    get_template_directory_uri() . '/build/scripts/theme-customizer.js',
    array( 'jquery', 'customize-preview' ),
    '1.0.0',
    true
  );

}
add_action( 'customize_preview_init', 'secondthought_customizer_live_preview' );

function secondthought_customizer_css()
{
  ?>
  <style type="text/css">
    html {
      color: <?php echo get_theme_mod( 'secondthought_font_color' );?>;
      font-size: <?php echo get_theme_mod( 'secondthought_font_size' ) . "px";?>;
      line-height: <?php echo get_theme_mod( 'secondthought_line_height' );?>;
    }

    h1, h2, h3, h4, h5, h6 {
      color: <?php echo get_theme_mod( 'secondthought_header_color' );?>;
    }

    a {
      color: <?php echo get_theme_mod( 'secondthought_link_color' );?>;
    }
  </style>
  <?php
}
add_action('wp_head', 'secondthought_customizer_css');

function secondthought_customize_register( $wp_customize )
{
  // ADD TYPOGRAPHY PANEL
  $wp_customize->add_panel( 'secondthought_typography_panel', array(
    'priority'       => 200,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
    'title'          => 'Typography',
    'description'    => __('Edit and customize settings related to typography.', 'secondthought'),
  ) );

  // ADD TYPOGRAPHY COLOR SECTION
  $wp_customize->add_section(
    'secondthought_typography_colors',
    array(
      'title'     => __('Colors', 'secondthought'),
      'priority'  => 200,
      'panel'     => 'secondthought_typography_panel'
    )
  );

  // ADD TYPOGRAPHY FORMATING SECTION
  $wp_customize->add_section(
  'secondthought_typography_formating',
  array(
    'title'     => __('Formating', 'secondthought'),
    'priority'  => 200,
    'panel'     => 'secondthought_typography_panel'
    )
  );

  // HEADER COLOR
  $wp_customize->add_setting(
    'secondthought_header_color',
    array(
      'default'   => '#555',
      'transport' => 'postMessage'
    )
  );

  $wp_customize->add_control(
    new WP_Customize_Color_Control(
    $wp_customize,
    'secondthought_header_color',
    array(
      'label'      => __( 'Header Color', 'secondthought' ),
      'section'    => 'secondthought_typography_colors',
      'settings'   => 'secondthought_header_color',
      ) )
  );

  // FONT COLOR
  $wp_customize->add_setting(
    'secondthought_font_color',
    array(
      'default'   => '#222',
      'transport' => 'postMessage'
    )
  );

  $wp_customize->add_control(
  new WP_Customize_Color_Control(
  $wp_customize,
  'secondthought_font_color',
  array(
    'label'      => __( 'Text Color', 'secondthought' ),
    'section'    => 'secondthought_typography_colors',
    'settings'   => 'secondthought_font_color',
    ) )
  );

  // LINK COLOR
  $wp_customize->add_setting(
    'secondthought_link_color',
    array(
      'default'   => '#CE2922',
      'transport' => 'postMessage'
    )
  );

  $wp_customize->add_control(
  new WP_Customize_Color_Control(
  $wp_customize,
  'secondthought_link_color',
  array(
    'label'      => __( 'Link Color', 'secondthought' ),
    'section'    => 'secondthought_typography_colors',
    'settings'   => 'secondthought_link_color',
    ) )
  );

  // FONT SIZE
  $wp_customize->add_setting(
    'secondthought_font_size',
    array(
      'default'   => '16',
      'transport' => 'postMessage'
    )
  );

  $wp_customize->add_control(
    new WP_Customize_Control(
      $wp_customize,
      'secondthought_font_size',
      array(
        'type' => 'range',
        'priority' => 10,
        'section' => 'secondthought_typography_formating',
        'label' => __('Font Size', 'secondthought'),
        'description' => __('Set the font size', 'secondthought'),
        'settings'   => 'secondthought_font_size',
        'input_attrs' => array(
          'min' => 10,
          'max' => 23,
          'step' => 1,
          'class' => 'test-class test',
          'style' => 'color: #0a0',
        ),
      )
    )
  );

  // LINE HEIGHT
  $wp_customize->add_setting(
    'secondthought_line_height',
    array(
      'default'   => '1.5',
      'transport' => 'postMessage'
    )
  );

  $wp_customize->add_control(
  new WP_Customize_Control(
  $wp_customize,
  'secondthought_line_height',
  array(
    'type' => 'range',
    'priority' => 10,
    'section' => 'secondthought_typography_formating',
    'label' => __('Line Height', 'secondthought'),
    'description' => __('Amount of space between lines of text', 'secondthought'),
    'settings'   => 'secondthought_line_height',
    'input_attrs' => array(
      'min' => 1,
      'max' => 3,
      'step' => 0.1,
      'class' => 'test-class test',
      'style' => 'color: #0a0',
    ),
    ) )
  );




}
add_action( 'customize_register', 'secondthought_customize_register' );
