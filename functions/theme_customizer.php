<?php



function secondthought_customizer_css()
{
  ?>
  <style type="text/css">
  html {
    font-size: <?php echo get_theme_mod( 'paragraph_font_size' ) . "px";?>;
    line-height: <?php echo get_theme_mod( 'paragraph_line_height' );?>;
    color: <?php echo get_theme_mod( 'paragraph_color' );?>;
  }

  p {
    margin-bottom: <?php echo get_theme_mod( 'paragraph_spacing' ) . "px";?>;
  }

  a {
    color: <?php echo get_theme_mod( 'link_color' );?>;
  }

  a:hover {
    color: <?php echo get_theme_mod( 'link_color_hover' );?>;
  }

  <?php
  $arr = array('h1', 'h2', 'h3', 'h4', 'h5', 'h6');
  foreach ($arr as &$value) {
    ?>

    <?php echo $value; ?> {
      font-size: <?php echo get_theme_mod( $value . '_font_size' ) . "px";?>;
      line-height: <?php echo get_theme_mod( $value . '_line_height' );?>;
      margin-bottom: <?php echo get_theme_mod( $value . '_spacing' ) . "px";?>;
      color: <?php echo get_theme_mod( $value . '_color' );?>;
    }

    <?php
  }
  // $arr is now array(2, 4, 6, 8)
  unset($value); // break the reference with the last element
  ?>

  </style>
  <?php
}
add_action('wp_head', 'secondthought_customizer_css');

/**
* Create the section
*/
function my_custom_sections( $wp_customize ) {

  $wp_customize->add_panel( 'navigation_panel', array(
    'priority' => 200,
    'title' => __('Navigation', 'secondthought'),
    'description' => 'dds',
  ) );

  $wp_customize->add_panel( 'typography_panel', array(
    'priority' => 200,
    'title' => __('Typography', 'secondthought'),
    'description' => __('Edit typographic settings on the site with these fancy controls', 'secondthought'),
  ) );

  $wp_customize->add_section( 'paragraph_section', array(
    'priority' => 200,
    'title'    => __('Body copy', 'secondthought'),
    'panel'    => 'typography_panel'
  ) );

  $arr = array('1', '2', '3', '4', '5', '6');
  foreach ($arr as &$value) {
    $wp_customize->add_section( 'h' . $value . '_section', array(
      'priority' => 201,
      'title'    => __('Heading ' . $value, 'secondthought'),
      'panel'    => 'typography_panel'
      ) );
  }
  // $arr is now array(2, 4, 6, 8)
  unset($value); // break the reference with the last element

  $wp_customize->add_section( 'link_section', array(
    'priority' => 200,
    'title'    => __('Link colors', 'secondthought'),
    'panel'    => 'typography_panel'
    ) );

  $wp_customize->add_panel( 'page_setup_panel', array(
    'priority' => 200,
    'title' => __('Page Setup', 'secondthought'),
    'description' => 'dsds',
  ) );

  $wp_customize->add_section( 'background_section', array(
    'priority' => 200,
    'title'    => __('Background', 'secondthought'),
    'panel'    => 'page_setup_panel'
  ) );

  $wp_customize->add_section( 'margin_section', array(
    'priority' => 200,
    'title'    => __('Page margins', 'secondthought'),
    'panel'    => 'page_setup_panel'
    ) );

  // Edit the defaul settings from wordpress
  $wp_customize->get_section( 'nav' )   -> panel = 'navigation_panel';
  $wp_customize->get_section( 'nav' )   -> title = __('Navigation Placement', 'seconthought');

  }
  add_action( 'customize_register', 'my_custom_sections' );

  /**
  * Create the setting
  */
  function my_custom_setting( $controls ) {

    // Typography settings
      // Paragraph settings
      $controls[] = array(
        'type'     => 'slider',
        'transport' => 'postMessage',
        'setting'  => 'paragraph_font_size',
        'label'    => __( 'Font size', 'secondthought' ),
        'section'  => 'paragraph_section',
        'default'  => 16,
        'priority' => 1,
        'choices'  => array(
          'min'  => 10,
          'max'  => 25,
          'step' => 1,
        ),
      );
      $controls[] = array(
        'type'     => 'slider',
        'transport' => 'postMessage',
        'setting'  => 'paragraph_line_height',
        'label'    => __( 'Line height', 'secondthought' ),
        'section'  => 'paragraph_section',
        'default'  => 1.5,
        'priority' => 1,
        'choices'  => array(
          'min'  => 1,
          'max'  => 3,
          'step' => 0.1,
        ),
      );
      $controls[] = array(
        'type'     => 'slider',
        'transport' => 'postMessage',
        'setting'  => 'paragraph_spacing',
        'label'    => __( 'Space below', 'secondthought' ),
        'section'  => 'paragraph_section',
        'default'  => 25,
        'priority' => 1,
        'choices'  => array(
          'min'  => 1,
          'max'  => 60,
          'step' => 1,
        ),
      );
      $controls[] = array(
        'type'     => 'color',
        'setting'  => 'paragraph_color',
        'label'    => __( 'Color', 'secondthought' ),
        'section'  => 'paragraph_section',
        'default'  => '#222',
        'priority' => 1,
      );

      $arr = array('1', '2', '3', '4', '5', '6');
      foreach ($arr as &$value) {

        $controls[] = array(
          'type'     => 'slider',
          'transport' => 'postMessage',
          'setting'  => 'h' . $value . '_font_size',
          'label'    => __( 'Font size', 'secondthought' ),
          'section'  => 'h' . $value . '_section',
          'default'  => 32,
          'priority' => 1,
          'choices'  => array(
            'min'  => 10,
            'max'  => 120,
            'step' => 1,
          ),
        );
        $controls[] = array(
          'type'     => 'slider',
          'transport' => 'postMessage',
          'setting'  => 'h' . $value . '_line_height',
          'label'    => __( 'Line height', 'secondthought' ),
          'section'  => 'h' . $value . '_section',
          'default'  => 1.5,
          'priority' => 1,
          'choices'  => array(
            'min'  => 1,
            'max'  => 3,
            'step' => 0.1,
          ),
        );
        $controls[] = array(
          'type'     => 'slider',
          'transport' => 'postMessage',
          'setting'  => 'h' . $value . '_spacing',
          'label'    => __( 'Space below', 'secondthought' ),
          'section'  => 'h' . $value . '_section',
          'default'  => 25,
          'priority' => 1,
          'choices'  => array(
            'min'  => 1,
            'max'  => 60,
            'step' => 1,
          ),
        );
        $controls[] = array(
          'type'     => 'color',
          'setting'  => 'h' . $value . '_color',
          'label'    => __( 'Color', 'secondthought' ),
          'section'  => 'h' . $value . '_section',
          'default'  => '#222',
          'priority' => 1,
          'transport' => 'postMessage',
        );
      }
      // $arr is now array(2, 4, 6, 8)
      unset($value); // break the reference with the last element

      // Link colors
      $controls[] = array(
        'type'     => 'color',
        'setting'  => 'link_color',
        'label'    => __( 'Link color', 'secondthought' ),
        'section'  => 'link_section',
        'default'  => '#CE2922',
        'priority' => 1,
      );
      $controls[] = array(
        'type'     => 'color',
        'setting'  => 'link_color_hover',
        'label'    => __( 'Link color on hover', 'secondthought' ),
        'section'  => 'link_section',
        'default'  => '#af1c1c',
        'priority' => 1,
      );

    // Page Settings
      // Page Background
      $controls[] = array(
        'type'         => 'background',
        'setting'      => 'my_setting',
        'label'        => __( 'Background', 'secondthought' ),
        'description'  =>   __( 'Set background color of image.', 'secondthought' ),
        'section'      => 'background_section',
        'default'      => array(
          'color'    => '#ffffff',
          'image'    => null,
          'repeat'   => 'repeat',
          'size'     => 'inherit',
          'attach'   => 'inherit',
          'position' => 'left-top',
          'opacity'  => 100,
        ),
        'priority' => 3,
        'output' => 'body',
      );

      // Page Margins
      $controls[] = array(
        'type'     => 'radio',
        'mode'     => 'image',
        'setting'  => 'page_margins',
        'label'    => __( 'Page margins', 'secondthought' ),
        'section'  => 'margin_section',
        'priority' => 1,
        'default'  => 0,
        'choices'  => array(
          0 => get_template_directory_uri() . '/functions/kirki/assets/images/1c.png',
          1 => get_template_directory_uri() . '/functions/kirki/assets/images/3cm.png',
        ),
      );

      // Page Background color
      $controls[] = array(
        'type'     => 'color',
        'setting'  => 'content_background_color',
        'label'    => __( 'Content background color', 'secondthought' ),
        'section'  => 'margin_section',
        'default'  => '#fff',
        'priority' => 1,
      );

      // Page Opacity
      $controls[] = array(
        'type'     => 'slider',
        'setting'  => 'content_background_opacity',
        'label'    => __( 'Content background opacity', 'secondthought' ),
        'section'  => 'margin_section',
        'default'  => 0,
        'priority' => 1,
        'choices'  => array(
          'min'  => 1,
          'max'  => 100,
          'step' => 1,
        ),
      );

      // Page Margins
      $controls[] = array(
        'type'     => 'radio',
        'mode'     => 'image',
        'setting'  => 'content_shadow',
        'label'    => __( 'Margin shadow', 'secondthought' ),
        'section'  => 'margin_section',
        'priority' => 1,
        'default'  => 0,
        'choices'  => array(
          0 => get_template_directory_uri() . '/img/customizer/shadow_0.jpg',
          1 => get_template_directory_uri() . '/img/customizer/shadow_1.jpg',
          2 => get_template_directory_uri() . '/img/customizer/shadow_2.jpg',
          3 => get_template_directory_uri() . '/img/customizer/shadow_3.jpg',
        ),
      );


    return $controls;


  }
  add_filter( 'kirki/controls', 'my_custom_setting' );
