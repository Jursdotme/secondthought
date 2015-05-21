<?php

function my_custom_field( $fields ) {

  require_once( 'header_customizer.php' );

  return $fields;

}
add_filter( 'kirki/fields', 'my_custom_field' );
