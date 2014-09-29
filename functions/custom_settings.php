<?php
/***********  RENAME DEFAULT POST TYPE  ***********/
  function revcon_change_post_label() {
      global $menu;
      global $submenu;
      $menu[5][0] = __( 'News', 'secondthought' );
      $submenu['edit.php'][5][0] = __( 'News', 'secondthought' );
      $submenu['edit.php'][10][0] = __( 'Add News', 'secondthought' );
      $submenu['edit.php'][16][0] = __( 'News Tags', 'secondthought' );
      echo '';
  }
  function revcon_change_post_object() {
      global $wp_post_types;
      $labels = &$wp_post_types['post']->labels;
      $labels->name = __( 'News', 'secondthought' );
      $labels->singular_name = __( 'News', 'secondthought' );
      $labels->add_new = __( 'Add News', 'secondthought' );
      $labels->add_new_item = __( 'Add News', 'secondthought' );
      $labels->edit_item = __( 'Edit News', 'secondthought' );
      $labels->new_item = __( 'News', 'secondthought' );
      $labels->view_item = __( 'View News', 'secondthought' );
      $labels->search_items = __( 'Search News', 'secondthought' );
      $labels->not_found = __( 'No News found', 'secondthought' );
      $labels->not_found_in_trash = __( 'No News found in Trash', 'secondthought' );
      $labels->all_items = __( 'All News', 'secondthought' );
      $labels->menu_name = __( 'News', 'secondthought' );
      $labels->name_admin_bar = __( 'News', 'secondthought' );
  }

  add_action( 'admin_menu', 'revcon_change_post_label' );
  add_action( 'init', 'revcon_change_post_object' );
 ?>
