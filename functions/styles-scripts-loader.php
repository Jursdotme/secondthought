<?php

//////////////////////////////////////////////////////////////////////
// Load Secondthought footer scripts (footer.php)

function secondthought_header_scripts()
{
    if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {

      wp_deregister_script( 'jquery' ); // Deregister WordPress jQuery

      if (current_user_can('activate_plugins')) {
        wp_register_script('jquery', get_template_directory_uri() . '/javascripts/lib/jquery-2.1.4.min.js', array(), '1.0.0', true); // Custom scripts
        wp_enqueue_script('jquery'); // Enqueue it!
      } else {
        wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js", array(), '2.1.4', true); // jQuery
        wp_enqueue_script('jquery'); // Enqueue it!
      }

      wp_register_script('modernizr', "https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js", 'jquery', '2.8.3', false); // jQuery
      wp_enqueue_script('modernizr'); // Enqueue it!


        wp_register_script('secondthoughtscripts', get_template_directory_uri() . '/build/scripts/all.min.js', array('jquery'), '1.0.0', true); // Custom scripts
        wp_enqueue_script('secondthoughtscripts'); // Enqueue it!
    }
}

add_action('init', 'secondthought_header_scripts'); // Add Custom Scripts to wp_head

//////////////////////////////////////////////////////////////////////
// Load Secondthought login scripts scripts

add_action( 'login_enqueue_scripts', 'enqueue_my_login_script' );
function enqueue_my_login_script() {
    wp_enqueue_script( 'login-script', get_template_directory_uri() . '/javascripts/admin/login.js', array( 'jquery' ) );
}

wp_localize_script( 'login-script', 'objectL10n', array(
	'buttonLabel'  => __('Save new password', 'seconthought'),
) );

//////////////////////////////////////////////////////////////////////
// Load Secondthought styles


function secondthought_styles()
{
  wp_register_style('secondthought', get_template_directory_uri() . '/build/stylesheets/style.css', array(), '1.0', 'all');
  wp_enqueue_style('secondthought'); // Enqueue it!

  wp_register_style('awesomefonts', '//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css', array(), '1.0', 'all');
  wp_enqueue_style('awesomefonts'); // Enqueue it!
}

add_action('wp_enqueue_scripts', 'secondthought_styles'); // Add Theme Stylesheet

?>
