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

// Move sidebar inside the container div

// remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10 );

// add_action( 'woocommerce_sidebar', 'container_closing_div', 11 );
function container_closing_div( $enqueue_styles ) {
  echo "</div>";
}

// add_action( 'woocommerce_sidebar', 'content_closing_div', 9 );
function content_closing_div( $enqueue_styles ) {
  echo "</div>";
}

// Change remove item button in cart
add_filter('woocommerce_cart_item_remove_link', 'change_removeitem_button');
function change_removeitem_button ($content)
{
    $content = str_replace('&times;', '<span class="fa fa-times"></span>',$content);
    return $content;
}
?>
