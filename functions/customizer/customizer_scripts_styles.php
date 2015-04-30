<?php
function secondthought_customize_live_preview() {
  wp_enqueue_script(
    'secondthought_customizer_script',
    get_template_directory_uri() . '/javascripts/admin/theme-customizer.js',
    array('jquery', 'customize-preview'),
    '1.0.0',
    true
  );
}
add_action( 'customize_preview_init', 'secondthought_customize_live_preview');

function secondthought_customizer_css() {

  echo get_theme_mod('google_font_string');

  ?>
  <style type="text/css">

    <?php
    $arr = array(h1, h2, h3, h4, h5, p);

    foreach ($arr as $value) { ?>
      <?php echo $value; ?> {
        font-size: <?php echo get_theme_mod($value.'_font_size'); ?>px;
        font-weight: <?php echo get_theme_mod($value.'_font_weight'); ?>;
        margin-bottom: <?php echo get_theme_mod($value.'_bottom_margin'); ?>px;
        line-height: <?php echo get_theme_mod($value.'_line_height'); ?>;
        color: <?php echo get_theme_mod($value.'_text_color'); ?>;
      }
    <?php } ?>

    body {
      color: <?php echo get_theme_mod('p_text_color'); ?>;
      font-size: <?php echo get_theme_mod('p_font_size'); ?>px;
      font-family: <?php echo get_theme_mod('header_font_stack'); ?>;
    }

    h1,h2,h3,h4,h5,h6 {
      font-family: <?php echo get_theme_mod('header_font_stack'); ?>;
    }

    .header {
      background-color: <?php echo get_theme_mod('header_bg_color'); ?>;
    }

    .desktop-navigation #navigation-menu > li > a {
      color: <?php echo get_theme_mod('nav_item_text_color'); ?>;
      background-color: <?php echo get_theme_mod('nav_item_bg_color'); ?>;
    }
    .desktop-navigation #navigation-menu > li > a:hover {
      background-color: <?php echo get_theme_mod('nav_item_bg_color_hover'); ?>;
    }

    .desktop-navigation ul.sub-menu.visible {
      background-color: <?php echo get_theme_mod('dropdown_nav_item_bg_color'); ?>;
    }

    .desktop-navigation ul.sub-menu li a {
      color: <?php echo get_theme_mod('dropdown_nav_item_text_color'); ?>;

    }
    .desktop-navigation ul.sub-menu li:hover {
      background-color: <?php echo get_theme_mod('dropdown_nav_item_bg_color_hover'); ?>;
    }

    .header-inner .logo {
      padding-bottom: <?php echo get_theme_mod('logo_margin_top'); ?>px;
      padding-bottom: <?php echo get_theme_mod('logo_margin_bottom'); ?>px;
    }

    .desktop-navigation {
      padding-top: <?php echo get_theme_mod('menu_margin_top'); ?>px;
      padding-bottom: <?php echo get_theme_mod('menu_margin_bottom'); ?>px;
    }

    .desktop-navigation #navigation-menu > li {
      margin-right: <?php echo get_theme_mod('menu_item_margin'); ?>px;
    }
    .desktop-navigation #navigation-menu > li:last-child {
      margin-right: 0;
    }

    .desktop-navigation #navigation-menu > li > a {
      padding: <?php echo get_theme_mod('menu_padding_height'); ?>px <?php echo get_theme_mod('menu_padding_width'); ?>px;;
    }

    .desktop-navigation #navigation-menu {
      float: <?php echo get_theme_mod('nav_float'); ?>;
    }
    .nav_bottom {
      background-color: <?php echo get_theme_mod('nav_bg_color'); ?>;
    }

    .footer .footer-address {
      text-align: <?php echo get_theme_mod('footer_text_align'); ?>;
      font-size: <?php echo get_theme_mod('footer_text_size'); ?>px;
      color: <?php echo get_theme_mod('footer_text_color'); ?>;
    }

    .footer .footer-address a {
      color: <?php echo get_theme_mod('footer_text_color_link'); ?>;
    }

    .footer.footer {
      padding-top: <?php echo get_theme_mod('footer_margin_top'); ?>px;
      padding-bottom: <?php echo get_theme_mod('footer_margin_bottom'); ?>px;
    }

    .footer-container {
      background-color: <?php echo get_theme_mod('footer_bg_color'); ?>;
    }




  </style>
  <?php
}
add_action( 'wp_head', 'secondthought_customizer_css' );
