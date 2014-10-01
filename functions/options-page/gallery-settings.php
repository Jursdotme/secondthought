<?php

register_setting(
  'gallery_settings_section',  // A settings group name. Must exist prior to the register_setting call. This must match the group name in 'settings_fields()'
  'gallery_settings'  // The name of an option to sanitize and save
);

// Define section
add_settings_section(
  'gallery_settings_section',   							// String for use in the 'id' attribute of tags
  __('Gallery Settings', 'secondthought'), 		// Title of the section
  'gallery_section_display', 	// Function that fills the section with the desired content. The function should echo its output
  'inzite-options'     						  // The menu page on which to display this section (Should match $menu_slug)
);

add_settings_field(
    'large_gallery',
    'Large gallery',
    'large_gallery_display',
    'large_galery_option',
    'gallery_settings_section'
);

function large_gallery_display() {

    $options = get_option( 'large_galery_option' );

    $html = '<select id="large_gallery_setting" name="large_galery_option[large_gallery_setting]">';
        $html .= '<option value="default">Select a time option...</option>';
        $html .= '<option value="never"' . selected( $options['large_gallery_setting'], 'never', false) . '>Never</option>';
        $html .= '<option value="sometimes"' . selected( $options['large_gallery_setting'], 'sometimes', false) . '>Sometimes</option>';
        $html .= '<option value="always"' . selected( $options['large_gallery_setting'], 'always', false) . '>Always</option>';
    $html .= '</select>';

    echo $html;

} // end sandbox_radio_element_callback

 ?>
