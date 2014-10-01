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
		__('Inzite Options', 'secondthought'),   // The text to be displayed in the title bar
		__('Inzite Options', 'secondthought'),   // The text to be used for the menu
	'manage_options', 				      					 // The capability required for this menu to be displayed to the user.
	'inzite-options', 				      					 // The slug name to refer to this menu by (should be unique for this menu).
		'inzite_user_options_display', 					 // The function to be called to output the content for this page
		'dashicons-smiley',											 // Provides a smiley icon to the page 'http://melchoyce.github.io/dashicons/'
		'59.1'																	 // The position in the menu order this menu should appear.
	);

} // END inzite_add_options_page

add_action( 'admin_menu', 'inzite_add_options_page' );


/*--------------------------------------------*
 * IMPORT FIELDSETS
/*--------------------------------------------*/


	/*--------------------------------------------*
	* Sections, Settings & Fields
	/*--------------------------------------------*/

	/**
	* Registers a new settings field on the 'General Settings' page of the Wordpress Dashboard.
	**/

	function secondthought_initialize_contact_options() {

			/*--------------------------------------------*
			* LOCATION FIELDS
			/*--------------------------------------------*/

				// Define section
				add_settings_section(
					'company_location',                     // String for use in the 'id' attribute of tags
					__('Company Address', 'secondthought'), // Title of the section
					'company_info_section_display',         // Function that fills the section with the desired content. The function should echo its output
					'inzite-options'                        // The menu page on which to display this section (Should match $menu_slug)
				);

				// Define settings field.
				add_settings_field(
					'companyname',                        	// The ID (name) of the field
					__('Company Name', 'secondthought '), 	// The text used to label the field
					'company_name_display', 						    // Callback function to render the field
					'inzite-options', 										  // The menu page on which to display this field. Should match $menu_slug
					'company_location'                      // The section to which we're adding the setting
				);

				// Define settings field.
				add_settings_field(
					'companyaddress',                       // The ID (name) of the field
					__('Address', 'secondthought '),	      // The text used to label the field
					'company_address_display', 							// Callback function to render the field
					'inzite-options', 										  // The menu page on which to display this field. Should match $menu_slug
					'company_location'                      // The section to which we're adding the setting
				);

				// Define settings field.
				add_settings_field(
					'companyzip',                       	 // The ID (name) of the field
					__('Zip Code', 'secondthought '),	     // The text used to label the field
					'company_zip_display', 							   // Callback function to render the field
					'inzite-options', 										 // The menu page on which to display this field. Should match $menu_slug
					'company_location'                     // The section to which we're adding the setting
				);

				// Define settings field.
				add_settings_field(
					'companycity',                       	// The ID (name) of the field
					__('City', 'secondthought '),	        // The text used to label the field
					'company_city_display', 							// Callback function to render the field
					'inzite-options', 										// The menu page on which to display this field. Should match $menu_slug
					'company_location'                    // The section to which we're adding the setting
				);

			// END LOCATION FIELDS

			/*--------------------------------------------*
			* CONTACT FIELDS
			/*--------------------------------------------*/

				// Define section
				add_settings_section(
					'company_contact',   // String for use in the 'id' attribute of tags
					__('Contact Information', 'secondthought'), 	   // Title of the section
					'company_info_section_display', // Function that fills the section with the desired content. The function should echo its output
					'inzite-options'     // The menu page on which to display this section (Should match $menu_slug)
				);

				// Define settings field.
				add_settings_field(
					'companyphone',                       // The ID (name) of the field
					__('Phone number', 'secondthought '),	// The text used to label the field
					'company_phone_display', 							// Callback function to render the field
					'inzite-options', 										// The menu page on which to display this field. Should match $menu_slug
					'company_contact'                     // The section to which we're adding the setting
				);

				// Define settings field.
				add_settings_field(
					'companyemail',                       	// The ID (name) of the field
					__('Email address', 'secondthought '),	// The text used to label the field
					'company_email_display', 							// Callback function to render the field
					'inzite-options', 										// The menu page on which to display this field. Should match $menu_slug
					'company_contact'                     // The section to which we're adding the setting
				);

			// END CONTACT FIELDS

			/*--------------------------------------------*
			* SOCIAL FIELDS
			/*--------------------------------------------*/

				// Define section
				add_settings_section(
					'company_social',   							// String for use in the 'id' attribute of tags
					__('Social Accounts', 'secondthought'), 		// Title of the section
					'company_info_section_display', 	// Function that fills the section with the desired content. The function should echo its output
					'inzite-options'     						  // The menu page on which to display this section (Should match $menu_slug)
				);

				// Define settings field.
				add_settings_field(
					'companyfacebook',                // The ID (name) of the field
					__('Facebook', 'secondthought '),	// The text used to label the field
					'company_facebook_display', 			// Callback function to render the field
					'inzite-options', 								// The menu page on which to display this field. Should match $menu_slug
					'company_social'                  // The section to which we're adding the setting
				);

				// Define settings field.
				add_settings_field(
					'companytwitter',                 // The ID (name) of the field
					__('Twitter', 'secondthought '),	// The text used to label the field
					'company_twitter_display', 				// Callback function to render the field
					'inzite-options', 								// The menu page on which to display this field. Should match $menu_slug
					'company_social'                  // The section to which we're adding the setting
				);

				// Define settings field.
				add_settings_field(
					'companygoogleplus',              // The ID (name) of the field
					__('Google+', 'secondthought '),	// The text used to label the field
					'company_googleplus_display', 		// Callback function to render the field
					'inzite-options', 								// The menu page on which to display this field. Should match $menu_slug
					'company_social'                  // The section to which we're adding the setting
				);

				// Define settings field.
				add_settings_field(
					'companylinkedin',                // The ID (name) of the field
					__('LinkedIn', 'secondthought '),	// The text used to label the field
					'company_linkedin_display', 			// Callback function to render the field
					'inzite-options', 								// The menu page on which to display this field. Should match $menu_slug
					'company_social'                  // The section to which we're adding the setting
				);

			// END SOCIAL FIELDS

			/*--------------------------------------------*
			 * GALLERY SETTINGS
			/*--------------------------------------------*/

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
						'large_gallery_option',
						'gallery_settings_section'
				);

			// END GALLERY SETTINGS

			// Register the 'companyname' setting with the 'Company Info' section.
			register_setting(
				'company_location', // A settings group name. Must exist prior to the register_setting call. This must match the group name in 'settings_fields()'
				'company_options'   // The name of an option to sanitize and save
			);

			register_setting(
				'company_contact', // A settings group name. Must exist prior to the register_setting call. This must match the group name in 'settings_fields()'
				'company_options'  // The name of an option to sanitize and save
			);

			register_setting(
				'company_social',  // A settings group name. Must exist prior to the register_setting call. This must match the group name in 'settings_fields()'
				'company_options'  // The name of an option to sanitize and save
			);

			register_setting(
				'gallery_settings_section',  // A settings group name. Must exist prior to the register_setting call. This must match the group name in 'settings_fields()'
				'gallery_settings'  // The name of an option to sanitize and save
			);

	} // END secondthought_initialize_contact_options

	add_action( 'admin_init', 'secondthought_initialize_contact_options');

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
						settings_fields('company_location');

						// Render the settings for the settings section idetified as Firmainfo
						settings_fields('company_contact');

						// Render the settings for the settings section idetified as Firmainfo
						settings_fields('company_social');

						settings_fields('gallery_settings_section');

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

	function company_facebook_display() {

		$options = (array)get_option('company_options');
		$facebook = $options['companyfacebook'];

		echo '<input type="facebook" name="company_options[companyfacebook]" id="company_options[value]" value="' . $facebook . '" />';
	} // END company_facebook_display

	function company_twitter_display() {

		$options = (array)get_option('company_options');
		$twitter = $options['companytwitter'];

		echo '<input type="twitter" name="company_options[companytwitter]" id="company_options[value]" value="' . $twitter . '" />';
	} // END company_twitter_display

	function company_googleplus_display() {

		$options = (array)get_option('company_options');
		$googleplus = $options['companygoogleplus'];

		echo '<input type="googleplus" name="company_options[companygoogleplus]" id="company_options[value]" value="' . $googleplus . '" />';
	} // END company_googleplus_display

	function company_linkedin_display() {

		$options = (array)get_option('company_options');
		$linkedin = $options['companylinkedin'];

		echo '<input type="linkedin" name="company_options[companylinkedin]" id="company_options[value]" value="' . $linkedin . '" />';
	} // END company_linkedin_display

	function large_gallery_display() {

			$options = get_option( 'large_gallery_option' );

			$html = '<select id="large_gallery_setting" name="large_gallery_option[large_gallery_setting]">';
					$html .= '<option value="default">Select a time option...</option>';
					$html .= '<option value="never"' . selected( $options['large_gallery_setting'], 'never', false) . '>Never</option>';
					$html .= '<option value="sometimes"' . selected( $options['large_gallery_setting'], 'sometimes', false) . '>Sometimes</option>';
					$html .= '<option value="always"' . selected( $options['large_gallery_setting'], 'always', false) . '>Always</option>';
			$html .= '</select>';

			echo $html;

	} // end sandbox_radio_element_callback

	// END Callbacks

// END IMPORT FIELDSETS


// END Menus

?>
