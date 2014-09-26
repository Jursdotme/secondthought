<?php
/*--------------------------------------------*
 * Menus
/*--------------------------------------------*/

/**
 * Adds the 'Inzite Options' to the 'Settings' menu in the Wordpress Dashboard.
 **/
function inzite_add_options_page() {

	// This will create a new top-level menu page.
	add_menu_page(
		__('Inzite Options', 'toro'),   // The text to be displayed in the title bar
		__('Inzite Options', 'toro'),   // The text to be used for the menu
		'manage_options', 				      // The capability required for this menu to be displayed to the user.
		'inzite-options', 				      // The slug name to refer to this menu by (should be unique for this menu).
		'inzite_user_options_display', 	// The function to be called to output the content for this page
		'dashicons-smiley',							// Provides a smiley icon to the page 'http://melchoyce.github.io/dashicons/'
		'59.1'														// The position in the menu order this menu should appear.
	);

} // END inzite_add_options_page

add_action( 'admin_menu', 'inzite_add_options_page' );


// END Menus


/*--------------------------------------------*
 * Sections, Settings & Fields
/*--------------------------------------------*/

/**
* Registers a new settings field on the 'General Settings' page of the Wordpress Dashboard.
**/

function secondthought_initialize_theme_options() {

		// Define section
		add_settings_section(
			'company_section',   // String for use in the 'id' attribute of tags
			'Company Info', 	   // Title of the section
			'company_info_section_display', // Function that fills the section with the desired content. The function should echo its output
			'inzite-options'     // The menu page on which to display this section (Should match $menu_slug)
		);

		// Define settings field.
		add_settings_field(
			'companyname',                       	// The ID (name) of the field
			__('Company Name', 'secondthought '),	// The text used to label the field
			'company_name_display', 							// Callback function to render the field
			'inzite-options', 										// The menu page on which to display this field. Should match $menu_slug
			'company_section'                     // The section to which we're adding the setting
		);

		// Define settings field.
		add_settings_field(
			'companyaddress',                       	// The ID (name) of the field
			__('Address', 'secondthought '),	// The text used to label the field
			'company_address_display', 							// Callback function to render the field
			'inzite-options', 										// The menu page on which to display this field. Should match $menu_slug
			'company_section'                     // The section to which we're adding the setting
		);

		// Define settings field.
		add_settings_field(
			'companyzip',                       	// The ID (name) of the field
			__('Zip Code', 'secondthought '),	// The text used to label the field
			'company_zip_display', 							// Callback function to render the field
			'inzite-options', 										// The menu page on which to display this field. Should match $menu_slug
			'company_section'                     // The section to which we're adding the setting
		);

		// Define settings field.
		add_settings_field(
			'companycity',                       	// The ID (name) of the field
			__('City', 'secondthought '),	// The text used to label the field
			'company_city_display', 							// Callback function to render the field
			'inzite-options', 										// The menu page on which to display this field. Should match $menu_slug
			'company_section'                     // The section to which we're adding the setting
		);

		// Define settings field.
		add_settings_field(
			'companyphone',                       	// The ID (name) of the field
			__('Phone number', 'secondthought '),	// The text used to label the field
			'company_phone_display', 							// Callback function to render the field
			'inzite-options', 										// The menu page on which to display this field. Should match $menu_slug
			'company_section'                     // The section to which we're adding the setting
		);

		// Define settings field.
		add_settings_field(
			'companyemail',                       	// The ID (name) of the field
			__('Email address', 'secondthought '),	// The text used to label the field
			'company_email_display', 							// Callback function to render the field
			'inzite-options', 										// The menu page on which to display this field. Should match $menu_slug
			'company_section'                     // The section to which we're adding the setting
		);

		// Register the 'companyname' setting with the 'Company Info' section.
		register_setting(
			'company_section', // A settings group name. Must exist prior to the register_setting call. This must match the group name in 'settings_fields()'
			'company_options'  // The name of an option to sanitize and save
		);

} // END secondthought_initialize_theme_options

add_action( 'admin_init', 'secondthought_initialize_theme_options');

// END Sections, Settings & Fields


/*--------------------------------------------*
 * Callbacks
/*--------------------------------------------*/

function inzite_user_options_display() {
	?>
		<div class="wrap">
			<h2>Inzite Options</h2>
			<form method="post" action="options.php" >
				<?php

					// Render the settings for the settings section idetified as Firmainfo
					settings_fields('company_section');

					// Renders all of the settings for 'inzite-options' section
					do_settings_sections('inzite-options');

					// Add submit button to serialize options
					submit_button();
				?>
			</form>
		</div>
	<?php
}

/**
 * Renders the description of the setting below the title of the section
 * and the above the actual settings.
 */
function company_info_section_display() {
	_e('Options to define and use the company info across the whole site.', 'secondthought');
}

/**
* Registers the input field for the 'Footer Message' setting in the 'General Settings' section.
**/

function company_name_display() {

	$options = (array)get_option('company_options');
	$name = $options['companyname'];

	echo '<input type="text" name="company_options[companyname]" id="company_options[value]" value="' . $name . '" />';
} // END company_name_display

function company_address_display() {

	$options = (array)get_option('company_options');
	$address = $options['companyaddress'];

	echo '<input type="text" name="company_options[companyaddress]" id="company_options[value]" value="' . $address . '" />';
} // END company_address_display

function company_zip_display() {

	$options = (array)get_option('company_options');
	$zip = $options['companyzip'];

	echo '<input type="text" name="company_options[companyzip]" id="company_options[value]" value="' . $zip . '" />';
} // END company_address_display

function company_city_display() {

	$options = (array)get_option('company_options');
	$city = $options['companycity'];

	echo '<input type="text" name="company_options[companycity]" id="company_options[value]" value="' . $city . '" />';
} // END company_address_display

function company_phone_display() {

	$options = (array)get_option('company_options');
	$phone = $options['companyphone'];

	echo '<input type="tel" name="company_options[companyphone]" id="company_options[value]" value="' . $phone . '" />';
} // END company_address_display

function company_email_display() {

	$options = (array)get_option('company_options');
	$email = $options['companyemail'];

	echo '<input type="email" name="company_options[companyemail]" id="company_options[value]" value="' . $email . '" />';
} // END company_address_display

// END Callbacks

?>
