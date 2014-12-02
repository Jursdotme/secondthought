<?php


/**
* The configuration options for the Shoestrap Customizer
*/
function shoestrap_customizer_config() {

  $args = array(

    // Change the logo image. (URL)
    // If omitted, the default theme info will be displayed.
    // A good size for the logo is 250x50.
    // 'logo_image'   => get_template_directory_uri() . '/build/img/inzite_logo.svg',

    // The color of active menu items, help bullets etc.
    'color_active' => '#414141',

    // Color used for secondary elements and desable/inactive controls
    'color_light'  => '#CE2922',

    // Color used for button-set controls and other elements
    'color_select' => '#fff',

    // Color used on slider controls and image selects
    'color_accent' => '#FF5740',

    // The generic background color.
    // You should choose a dark color here as we're using white for the text color.
    'color_back'   => '#313131',

    // If Kirki is embedded in your theme, then you can use this line to specify its location.
    // This will be used to properly enqueue the necessary stylesheets and scripts.
    // If you are using kirki as a plugin then please delete this line.
    'url_path'     => get_template_directory_uri() . '/functions/kirki/',

    // If you want to take advantage of the backround control's 'output',
    // then you'll have to specify the ID of your stylesheet here.
    // The "ID" of your stylesheet is its "handle" on the wp_enqueue_style() function.
    // http://codex.wordpress.org/Function_Reference/wp_enqueue_style
    'stylesheet_id' => 'secondthought',

  );

  return $args;

}
add_filter( 'kirki/config', 'shoestrap_customizer_config' );
