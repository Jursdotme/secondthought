<?php
/*
This file handles the admin area and functions.
You can use this file to make changes to the
dashboard. Updates to this page are coming soon.
It's turned off by default, but you can call it
via the functions file.

Developed by: Eddie Machado
URL: http://themble.com/secondthought/

Special Thanks for code & inspiration to:
@jackmcconnell - http://www.voltronik.co.uk/
Digging into WP - http://digwp.com/2010/10/customize-wordpress-dashboard/

*/

/************* DASHBOARD WIDGETS *****************/

// disable default dashboard widgets
function disable_default_dashboard_widgets() {
	// remove_meta_box( 'dashboard_right_now', 'dashboard', 'core' );    // Right Now Widget
	remove_meta_box( 'dashboard_recent_comments', 'dashboard', 'core' ); // Comments Widget
	remove_meta_box( 'dashboard_incoming_links', 'dashboard', 'core' );  // Incoming Links Widget
	remove_meta_box( 'dashboard_plugins', 'dashboard', 'core' );         // Plugins Widget

	// remove_meta_box('dashboard_quick_press', 'dashboard', 'core' );   // Quick Press Widget
	remove_meta_box( 'dashboard_recent_drafts', 'dashboard', 'core' );   // Recent Drafts Widget
	remove_meta_box( 'dashboard_primary', 'dashboard', 'core' );         //
	remove_meta_box( 'dashboard_secondary', 'dashboard', 'core' );       //

	// removing plugin dashboard boxes
	remove_meta_box( 'yoast_db_widget', 'dashboard', 'normal' );         // Yoast's SEO Plugin Widget

	/*
	have more plugin widgets you'd like to remove?
	share them with us so we can get a list of
	the most commonly used. :D
	https://github.com/eddiemachado/secondthought/issues
	*/
}

/*
Now let's talk about adding your own custom Dashboard widget.
Sometimes you want to show clients feeds relative to their
site's content. For example, the NBA.com feed for a sports
site. Here is an example Dashboard Widget that displays recent
entries from an RSS Feed.

For more information on creating Dashboard Widgets, view:
http://digwp.com/2010/10/customize-wordpress-dashboard/
*/

// RSS Dashboard Widget
function secondthought_rss_dashboard_widget() {
	if ( function_exists( 'fetch_feed' ) ) {
		include_once( ABSPATH . WPINC . '/feed.php' );               // include the required file
		$feed = fetch_feed( 'http://inzite.dk.linux13.curanetserver.dk/feed/rss/' );        // specify the source feed
		$limit = $feed->get_item_quantity(7);                        // specify number of items
		$items = $feed->get_items(0, $limit);                        // create an array of items
	}

	if ($limit == 0) echo '<div>The RSS Feed is either empty or unavailable.</div>';   // fallback message
	else foreach ($items as $item) { ?>

	<h4 style="margin-bottom: 0;">
		<a href="<?php echo $item->get_permalink(); ?>" title="<?php echo mysql2date( __( 'j F Y @ g:i a', 'secondthought' ), $item->get_date( 'Y-m-d H:i:s' ) ); ?>" target="_blank">
			<?php echo $item->get_title(); ?>
		</a>
	</h4>
	<p style="margin-top: 0.5em;">
		<?php echo substr($item->get_description(), 0, 200); ?>
	</p>
	<?php }
}

// calling all custom dashboard widgets
function secondthought_custom_dashboard_widgets() {
	wp_add_dashboard_widget( 'secondthought_rss_dashboard_widget', __( 'Latest News from INZITE', 'secondthought' ), 'secondthought_rss_dashboard_widget' );
	/*
	Be sure to drop any other created Dashboard Widgets
	in this function and they will all load.
	*/
}

// removing the dashboard widgets
add_action( 'admin_menu', 'disable_default_dashboard_widgets' );
// adding any custom widgets
add_action( 'wp_dashboard_setup', 'secondthought_custom_dashboard_widgets' );

/************* CUSTOM LOGIN PAGE *****************/

// calling your own login css so you can style it

//Updated to proper 'enqueue' method
//http://codex.wordpress.org/Plugin_API/Action_Reference/login_enqueue_scripts
function secondthought_login_css() {
	wp_enqueue_style( 'secondthought_login_css', get_template_directory_uri() . '/build/stylesheets/admin.css', true );
}

// changing the logo link from wordpress.org to your site
function secondthought_login_url() {  return 'http://www.inzite.dk/'; }

// changing the alt text on the logo to show your site name
function secondthought_login_title() { return get_option( 'INZITE Media & Marketing' ); }

// calling it only on the login page
add_action( 'login_enqueue_scripts', 'secondthought_login_css', 10 );
add_filter( 'login_headerurl', 'secondthought_login_url' );
add_filter( 'login_headertitle', 'secondthought_login_title' );

/************* CUSTOMIZE ADMIN *******************/

/*
I don't really recommend editing the admin too much
as things may get funky if WordPress updates. Here
are a few funtions which you can choose to use if
you like.
*/

// Custom Stylesheet
function secondthought_custom_wp_admin_style() {
  wp_enqueue_style( 'custom_wp_admin_css', get_template_directory_uri() . '/build/stylesheets/admin.css', false );
	wp_enqueue_style( 'secondthought_kirki' );
}
add_action( 'admin_enqueue_scripts', 'secondthought_custom_wp_admin_style' );

// Custom Backend Footer
function secondthought_custom_admin_footer() {
	_e( 'Made by Inzite', 'secondthought' );
}

// adding it to the admin area
add_filter( 'admin_footer_text', 'secondthought_custom_admin_footer' );

/************* LOAD CUSTOM secondthought ADMIN COLOR SCHEME *******************/

function load_custom_wp_admin_style() {
				wp_register_script( 'custom_wp_admin_css', get_template_directory_uri() . '/javascripts/admin-scripts.js', true, '1.0.0' );
				wp_enqueue_script( 'custom_wp_admin_css' );
}

// add_action( 'admin_enqueue_scripts', 'load_custom_wp_admin_style' );

/************* LOAD CUSTOM secondthought ADMIN WELCOME MESSAGE *******************/

add_action( 'admin_bar_menu', 'wp_admin_bar_my_custom_account_menu', 11 );

function wp_admin_bar_my_custom_account_menu( $wp_admin_bar ) {
  $user_id = get_current_user_id();
  $current_user = wp_get_current_user();
  $profile_url = get_edit_profile_url( $user_id );

  if ( 0 != $user_id ) {
    /* Add the "My Account" menu */
    $avatar = get_avatar( $user_id, 28 );
    $howdy = sprintf( __('Welcome', 'secondthought'), $current_user->display_name );
    $class = empty( $avatar ) ? '' : 'with-avatar';

    $wp_admin_bar->add_menu( array(
      'id' => 'my-account',
      'parent' => 'top-secondary',
      'title' => $howdy . $avatar,
      'href' => $profile_url,
      'meta' => array(
        'class' => $class,
      ),
    ));
  }
}

?>
