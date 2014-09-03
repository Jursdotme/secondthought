<?php // Main navigation
function secondthought_nav()
{
  wp_nav_menu(
  array(
    'theme_location'  => 'header-menu',
    'menu'            => '',
    'container'       => 'nav',
    'container_class' => 'desktop-navigation',
    'container_id'    => '',
    'menu_class'      => 'menu',
    'menu_id'         => '',
    'echo'            => true,
    'fallback_cb'     => 'wp_page_menu',
    'before'          => '',
    'after'           => '',
    'link_before'     => '',
    'link_after'      => '',
    'items_wrap'      => '<ul id="navigation-menu">%3$s</ul>',
    'depth'           => 0,
    )
  );
}

function mobile_nav()
{
  wp_nav_menu(
  array(
    'theme_location'  => 'mobile_nav',
    'menu'            => '',
    'container'       => 'nav',
    'container_class' => 'mobile-navigation',
    'container_id'    => '',
    'menu_class'      => '',
    'menu_id'         => '',
    'echo'            => true,
    'fallback_cb'     => 'wp_page_menu',
    'before'          => '',
    'after'           => '',
    'link_before'     => '',
    'link_after'      => '',
    'items_wrap'      => '<ul id="navigation-menu">%3$s</ul>',
    'depth'           => 0,
    )
  );
}

// Register Main navigation
function register_secondthought_menu()
{
  register_nav_menus( array(
      'header-menu' => __('Header Menu', 'secondthought'), // Main Navigation
      'mobile_nav' => __('Mobile Menu', 'secondthought') // Main Navigation
    ) );
}

add_action( 'init', 'register_secondthought_menu' );

?>
