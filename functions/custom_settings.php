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
