<?php
/*
 *  Author: Rasmus Jürs | @jursdotme
 *  Custom functions, support, custom post types and more.
 */

/*------------------------------------*\
	External Modules/Files
\*------------------------------------*/

// Load any external files you have here

// Navigation
require_once( 'functions/navigation/walkers/main_menu_walker.php' ); // Build navigation Walkers
require_once( 'functions/navigation/nav_menus.php' ); // Build navigations
require_once( 'functions/styles-scripts-loader.php' ); // Load stylesheets and javascripts
require_once( 'functions/excerpts.php' ); // Build custom excerpts
require_once( 'functions/pagination.php' ); // Build custom pagination
require_once( 'functions/widget-areas.php' ); // Declare Widget Areas
if ( class_exists( 'WooCommerce' ) ) {
  require_once( 'functions/woocommerce-functions.php' ); // Woo Commerce Functions
}
require_once( 'functions/custom_settings.php' ); // Woo Commerce Func tions
require_once( 'functions/admin_dashboard.php' ); // Custom Admin Dashboard settings
require_once( 'functions/comments.php' ); // Custom Comments callback
require_once( 'functions/options-pages.php' ); // Define options page (ACF)
require_once( 'functions/contact-form-7-fixes.php' ); // Load CF7 styles/scripts on certain pages
require_once( 'functions/gallery.php' ); // Make Wordpress Native gallery Secondthought compatible
require_once( 'functions/tinymce_settings.php' ); // Make Wordpress Native gallery Secondthought compatible
require_once( 'functions/page-builder-custom-layouts.php' ); // Make Wordpress Native gallery Secondthought compatible
require_once( 'functions/required_plugins.php' ); // Install required and recommended plugins
require_once( 'functions/image_sizes.php' );
require_once( 'functions/color_palette.php' );
require_once( 'widgets/blank_widget_bundle.php' );

/*------------------------------------*\
	Actions + Filters + ShortCodes
\*------------------------------------*/

// Add Actions
add_action('get_header', 'enable_threaded_comments'); // Enable Threaded Comments
add_action('widgets_init', 'my_remove_recent_comments_style'); // Remove inline Recent Comment Styles from wp_head()
add_action( 'wp_print_styles', 'deregister_bbpress_styles', 15 );
add_action( 'admin_notices', 'my_admin_error_notice' );

// Remove Actions
remove_action('wp_head', 'feed_links_extra', 3); // Display the links to the extra feeds such as category feeds
remove_action('wp_head', 'feed_links', 2); // Display the links to the general feeds: Post and Comment Feed
remove_action('wp_head', 'rsd_link'); // Display the link to the Really Simple Discovery service endpoint, EditURI link
remove_action('wp_head', 'wlwmanifest_link'); // Display the link to the Windows Live Writer manifest file.
remove_action('wp_head', 'index_rel_link'); // Index link
remove_action('wp_head', 'parent_post_rel_link', 10, 0); // Prev link
remove_action('wp_head', 'start_post_rel_link', 10, 0); // Start link
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0); // Display relational links for the posts adjacent to the current post.
remove_action('wp_head', 'wp_generator'); // Display the XHTML generator that is generated on the wp_head hook, WP version
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'rel_canonical');
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);

// Add Filters
add_filter( 'wp_calculate_image_srcset_meta', '__return_null' ); // Remove image src set function from WP 4.4+
add_filter('avatar_defaults', 'secondthoughtgravatar'); // Custom Gravatar in Settings > Discussion
add_filter('body_class', 'add_slug_to_body_class'); // Add slug to body class (Starkers build)
add_filter('widget_text', 'do_shortcode'); // Allow shortcodes in Dynamic Sidebar
add_filter('widget_text', 'shortcode_unautop'); // Remove <p> tags in Dynamic Sidebars (better!)
add_filter('the_category', 'remove_category_rel_from_category_list'); // Remove invalid rel attribute
add_filter('the_excerpt', 'shortcode_unautop'); // Remove auto <p> tags in Excerpt (Manual Excerpts only)
add_filter('the_excerpt', 'do_shortcode'); // Allows Shortcodes to be executed in Excerpt (Manual Excerpts only)
add_filter('excerpt_more', 'secondthought_view_article'); // Add 'Read more' button instead of [...] for Excerpts
// add_filter('show_admin_bar', 'remove_admin_bar'); // Remove Admin bar
add_filter('style_loader_tag', 'secondthought_style_remove'); // Remove 'text/css' from enqueued stylesheet
add_filter('post_thumbnail_html', 'remove_thumbnail_dimensions', 10); // Remove width and height dynamic attributes to thumbnails
add_filter('image_send_to_editor', 'remove_thumbnail_dimensions', 10); // Remove width and height dynamic attributes to post images
add_filter('widget_text', 'remove_empty_paragraphs');
add_filter( 'wpseo_metabox_prio', function() { return 'low';}); // Force Yoast SEO metabox to be at the bottom

// Remove Filters
remove_filter('the_excerpt', 'wpautop'); // Remove <p> tags from Excerpt altogether

/*------------------------------------*\
	Theme Support
\*------------------------------------*/

if (!isset($content_width))
{
    $content_width = 900;
}

/*------------------------------------*\
	Functions
\*------------------------------------*/

// Set default image link type to "none"
update_option('image_default_link_type','none');

// Remove invalid rel attribute values in the categorylist
function remove_category_rel_from_category_list($thelist)
{
    return str_replace('rel="category tag"', 'rel="tag"', $thelist);
}

// Add page slug to body class, love this
function add_slug_to_body_class($classes)
{
    global $post;
    if (is_home()) {
        $key = array_search('blog', $classes);
        if ($key > -1) {
            unset($classes[$key]);
        }
        $classes[] = 'news';
    } elseif (is_page()) {
        $classes[] = sanitize_html_class($post->post_name);
    } elseif (is_singular()) {
        $classes[] = sanitize_html_class($post->post_name);
    }

    return $classes;
}

// Remove Admin bar
function remove_admin_bar()
{
    return false;
}

// Remove 'text/css' from our enqueued stylesheet
function secondthought_style_remove($tag)
{
    return preg_replace('~\s+type=["\'][^"\']++["\']~', '', $tag);
}

// Remove thumbnail width and height dimensions that prevent fluid images in the_thumbnail
function remove_thumbnail_dimensions( $html )
{
    $html = preg_replace('/(width|height)=\"\d*\"\s/', "", $html);
    return $html;
}

function deregister_bbpress_styles() {
 wp_deregister_style( 'bp-legacy-css' );
}

function remove_empty_paragraphs($content) {
  $regex_string = "#<p>(\s|&nbsp;|</?\s?br\s?/?>)*</?p>#";
  return preg_replace($regex_string, '', $content);
}

// add editor the privilege to edit theme

  // get the the role object
  $role_object = get_role( 'editor' );

  // add $cap capability to this role object
  $role_object->add_cap( 'edit_theme_options' );


// Check if SEO is set to noindex and the site is not on a dev server
function my_admin_error_notice() {
	$class = "error";
	$message = "Søgemaskine indeksering er slået fra!";

  if ( get_option( 'blog_public' ) == 0 && !strpos(get_option( 'siteurl' ),'.dev') && !strpos(get_option( 'siteurl' ),'curanetserver.dk') && !strpos(get_option( 'siteurl' ),'localhost') ) {
    echo"<div class=\"$class\"> <p><b>$message</b></p></div>";
  }

}
