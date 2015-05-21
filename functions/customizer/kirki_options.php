<?php
/**
 * Configuration sample for the Kirki Customizer
 */
function kirki_demo_configuration_sample() {

    // $url  = get_stylesheet_directory_uri() . '/kirki/';

    $args = array(
        'logo_image'   => '',
        'description'  => __( 'The theme description.', 'kirki' ),
        // 'url_path'     => $url,
        'color_accent' => '#CE2922',
        'color_back'   => '#EEEEEE',
        'textdomain'   => 'kirki',
        //'i18n'         => $strings,
        'stylesheet_id' => 'secondthought_kirki'
    );

    return $args;

}
add_filter( 'kirki/config', 'kirki_demo_configuration_sample' );
