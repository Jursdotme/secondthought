<?php
function secondthought_customize_register( $wp_customize ) {
    //All our sections, settings, and controls will be added here

    require_once( 'customizer_typography.php' );
    require_once( 'customizer_header.php' );
    require_once( 'customizer_footer.php' );

}
add_action( 'customize_register', 'secondthought_customize_register' );
