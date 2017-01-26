<?php

function grd_woocommerce_script_cleaner() {

	// Remove the generator tag
	remove_action( 'wp_head', array( $GLOBALS['woocommerce'], 'generator' ) );
	// Unless we're in the store, remove all the cruft!
	if ( ! is_woocommerce() && ! is_cart() && ! is_checkout() ) {
		wp_dequeue_style( 'woocommerce_frontend_styles' );
		wp_dequeue_style( 'woocommerce-general');
		wp_dequeue_style( 'woocommerce-layout' );
		wp_dequeue_style( 'woocommerce-smallscreen' );
		wp_dequeue_style( 'woocommerce_fancybox_styles' );
		wp_dequeue_style( 'woocommerce_chosen_styles' );
		wp_dequeue_style( 'woocommerce_prettyPhoto_css' );
		wp_dequeue_style( 'select2' );
		wp_dequeue_script( 'wc-add-payment-method' );
		wp_dequeue_script( 'wc-lost-password' );
		wp_dequeue_script( 'wc_price_slider' );
		wp_dequeue_script( 'wc-single-product' );
		wp_dequeue_script( 'wc-add-to-cart' );
		wp_dequeue_script( 'wc-cart-fragments' );
		wp_dequeue_script( 'wc-credit-card-form' );
		wp_dequeue_script( 'wc-checkout' );
		wp_dequeue_script( 'wc-add-to-cart-variation' );
		wp_dequeue_script( 'wc-single-product' );
		wp_dequeue_script( 'wc-cart' );
		wp_dequeue_script( 'wc-chosen' );
		wp_dequeue_script( 'woocommerce' );
		wp_dequeue_script( 'prettyPhoto' );
		wp_dequeue_script( 'prettyPhoto-init' );
		wp_dequeue_script( 'jquery-blockui' );
		wp_dequeue_script( 'jquery-placeholder' );
		wp_dequeue_script( 'jquery-payment' );
		wp_dequeue_script( 'fancybox' );
		wp_dequeue_script( 'jqueryui' );
	}
}
add_action( 'wp_enqueue_scripts', 'grd_woocommerce_script_cleaner', 99 );

// Give shop managers access to theme options
function add_theme_caps(){
  global $pagenow;

  if ( 'themes.php' == $pagenow && isset( $_GET['activated'] ) ){ // Test if theme is activated
    // Theme is activated
    // gets the author role
    $role = get_role( 'shop_manager' );

    // This only works, because it accesses the class instance.
    // would allow the author to edit others' posts for current theme only
    $role->add_cap( 'edit_theme_options' );
  }
  else {
    // Theme is deactivated
    // Remove the capacity when theme is deactivated

    // gets the author role
    $role = get_role( 'shop_manager' );

    $role->add_cap( 'edit_theme_options' );
  }
}
// add_action( 'load-themes.php', 'add_theme_caps' );

// Declare WooCommerce support
add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

// Remove Default Woo Commerce styles
add_filter( 'woocommerce_enqueue_styles', 'jk_dequeue_styles' );
function jk_dequeue_styles( $enqueue_styles ) {
	unset( $enqueue_styles['woocommerce-general'] );	// Remove the gloss
	unset( $enqueue_styles['woocommerce-layout'] );		// Remove the layout
	unset( $enqueue_styles['woocommerce-smallscreen'] );	// Remove the smallscreen optimisation
	return $enqueue_styles;
}

// Change remove item button in cart
add_filter('woocommerce_cart_item_remove_link', 'change_removeitem_button');
function change_removeitem_button ($content)
{
    $content = str_replace('&times;', '<span class="fa fa-times"></span>',$content);
    return $content;
}

// Set number or products per row
add_filter('loop_shop_columns', 'loop_columns');
if (!function_exists('loop_columns')) {
	function loop_columns() {
		return 3; // 3 products per row
	}
}

// Add meta wrapper to product content withing loops

add_action( 'woocommerce_before_shop_loop_item_title', 'opening_meta_div', 11 );
add_action( 'woocommerce_after_shop_loop_item_title', 'closing_meta_div', 11 );

function opening_meta_div( $enqueue_styles ) {
  echo '<div class="meta">';
}

function closing_meta_div( $enqueue_styles ) {
  echo '</div>';
}
