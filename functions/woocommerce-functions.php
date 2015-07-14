<?php

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
