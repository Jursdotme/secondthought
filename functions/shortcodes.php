<?php

add_shortcode( 'mini-nav', 'mininav_shortcode' );
function mininav_shortcode( $atts, $content = null ) {
  $a = shortcode_atts( array(
      'wrap' => 'wrap',
      'justify' => 'flex-start',
      'align' => 'center',
  ), $atts );
	return '<div class="mini-nav justify-' . esc_attr($a['justify']) . ' ' . esc_attr($a['wrap']) . '">' . $content . '</div>';
}
