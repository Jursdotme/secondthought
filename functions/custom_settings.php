<?php

/**
* Registers a new settings field on the 'General Settings' page of the Wordpress Dashboard.
**/

function secondthought_initialize_theme_options() {

    // Define settings field.
    add_settings_field(
      'footer_message',                       // The ID (name) of the field
      __(' Theme Footer Message', 'secondthought '),                 // The text used to label the field
      'secondthought_footer_message_display', // Callback function to render the field
      'general'                               // The section to which we're adding the setting
    );

    // Register the 'footer_message' setting with the 'General' section.
    register_setting(
      'general',
      'footer_message'
    );

} // END secondthought_initialize_theme_options

add_action( 'admin_init', 'secondthought_initialize_theme_options');

function secondthought_footer_message_display() {
  echo '<input type="text" name="footer_message" id="footer_message" value="' . get_option('footer_message') . '" />';
} // END secondthought_footer_message_display


/***********  RENAME DEFAULT POST TYPE  ***********/
  function revcon_change_post_label() {
      global $menu;
      global $submenu;
      $menu[5][0] = __( 'News', 'toro_developer' );
      $submenu['edit.php'][5][0] = __( 'News', 'toro_developer' );
      $submenu['edit.php'][10][0] = __( 'Add News', 'toro_developer' );
      $submenu['edit.php'][16][0] = __( 'News Tags', 'toro_developer' );
      echo '';
  }
  function revcon_change_post_object() {
      global $wp_post_types;
      $labels = &$wp_post_types['post']->labels;
      $labels->name = __( 'News', 'toro_developer' );
      $labels->singular_name = __( 'News', 'toro_developer' );
      $labels->add_new = __( 'Add News', 'toro_developer' );
      $labels->add_new_item = __( 'Add News', 'toro_developer' );
      $labels->edit_item = __( 'Edit News', 'toro_developer' );
      $labels->new_item = __( 'News', 'toro_developer' );
      $labels->view_item = __( 'View News', 'toro_developer' );
      $labels->search_items = __( 'Search News', 'toro_developer' );
      $labels->not_found = __( 'No News found', 'toro_developer' );
      $labels->not_found_in_trash = __( 'No News found in Trash', 'toro_developer' );
      $labels->all_items = __( 'All News', 'toro_developer' );
      $labels->menu_name = __( 'News', 'toro_developer' );
      $labels->name_admin_bar = __( 'News', 'toro_developer' );
  }

  add_action( 'admin_menu', 'revcon_change_post_label' );
  add_action( 'init', 'revcon_change_post_object' );
 ?>
