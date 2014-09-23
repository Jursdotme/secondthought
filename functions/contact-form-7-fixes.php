<?php
// add_filter( 'wpcf7_form_elements', 'rl_wpcf7_form_elements' );
function rl_wpcf7_form_elements( $content ) {
	// global $wpcf7_contact_form;

	$rl_pfind = '/(<span class="wpcf7-form-control-wrap .+">)+/';
	$rl_preplace = '';
	$content = preg_replace( $rl_pfind, $rl_preplace, $content  );

	return $content;
}

if ( is_single(array(
      'contact',
      'kontakt',
      'contact-someone-else'
    )) ) {
  wp_register_style( 'contact-form-7', 100 );
  wp_register_script( 'contact-form-7', 100 );
}

?>
