<?php

if ( is_single(array(
      'contact',
      'kontakt',
      'contact-someone-else'
    )) ) {
  wp_register_style( 'contact-form-7', 100 );
  wp_register_script( 'contact-form-7', 100 );
}

?>
