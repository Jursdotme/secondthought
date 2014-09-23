<?php

/*-----------------------------------------------*
 * Menus
/*-----------------------------------------------*

/**
 * Adds the 'Demo Theme Options' to the 'Settings' menu in the WordPress
 * Dashboard.
 */
function demo_add_options_page() {

	// This will introduce a new link in the 'Settings' Menu
	add_options_page(
		'Demo Theme Options',			// The text to be displayed in the browser title bar
		'Demo Theme Options',			// The text to be used for the menu
		'manage_options',				// The required capability of users to access this menu
		'demo-theme-options',			// The slug by which this menu item is accessible
		'demo_theme_options_display'	// The name of the function used to display the page content
	);

} // end demo_add_options_page
add_action( 'admin_menu', 'demo_add_options_page' );

/*-----------------------------------------------*
 * Sections, Settings, and Fields
/*-----------------------------------------------*

/**
 * Registers a new settings field on the 'General Settings' page of the WordPress dashboard.
 */
function demo_initialize_theme_options() {

	// Let's introduce a section to be rendered on the new options page
	add_settings_section(
		'footer_section',					// The ID to use for this section in attribute tags
		'Footer Options',					// The title of the section rendered to the screen
		'demo_footer_options_display',		// The function used to render the options for this section
		'demo-theme-options'				// The ID of the page on which this section is rendered
	);

	// Define the settings field
	add_settings_field(
		'footer_message', 					// The ID (or the name) of the field
		'Theme Footer Message', 			// The text used to label the field
		'demo_footer_message_display', 		// The callback function used to render the field
		'demo-theme-options',				// The page on which we'll be rendering this field
		'footer_section'					// The section to which we're adding the setting
	);

	// Register the 'footer_message' setting with the 'General' section
	register_setting(
		'footer_section',					// The name of the group of settings
		'footer_options'					// The name of the actual option (or setting)
	);

} // end demo_initialize_theme_options
add_action( 'admin_init', 'demo_initialize_theme_options' );

/*-----------------------------------------------*
 * Callbacks
/*-----------------------------------------------*

/**
 * Renders the content of the options page for the
 */
function demo_theme_options_display() {
?>
	<div class="wrap">
		<div id="icon-options-general" class="icon32"></div>
		<h2>Demo Theme Options</h2>
		<form method="post" action="options.php">
			<?php

				// Render the settings for the settings section identified as 'Footer Section'
				settings_fields( 'footer_section' );

				// Renders all of the settings for 'demo-theme-options' section
				do_settings_sections( 'demo-theme-options' );

				// Add the submit button to serialize the options
				submit_button();

			?>
		</form>
	</div><!-- /.wrap -->
<?php
} // end demo_theme_options_display

/**
 * Renders the description of the setting below the title of the section
 * and the above the actual settings.
 */
function demo_footer_options_display() {
	echo "These options are designed to help you control what's displayed in your footer.";
} // end demo_footer_options_display

/**
 * Renders the input field for the 'Footer Message' setting in the 'General Settings' section.
 */
function demo_footer_message_display() {

	// Read the options for the footer message section
	$options = (array)get_option( 'footer_options' );
	$message = $options['message'];

	echo '<input type="text" name="footer_options[message]" id="footer_options[value]" value="' . $message . '" />';

} // end demo_footer_message_display
