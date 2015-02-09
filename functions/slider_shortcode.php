<?php
// [bartag foo="foo-value"]
function slider_func( $atts ) {
    $a = shortcode_atts( array(
        'style' => 'default',
        'repeater' => 'repeater',
    ), $atts );

    if( have_rows('repeater_field_name') ):

      echo '<div class="slider">';

      while ( have_rows('repeater_field_name') ) : the_row();

          // Setup Image data
          $id = get_field('billede');
          $size = 'full'; // (thumbnail, medium, large, full or custom size)
          $image_attributes = wp_get_attachment_image_src( $id, $size );

          $image_attributes[0]; // Image URL


        the_sub_field('sub_field_name');

      endwhile;

      echo '</div>';

    endif;


    return "style = {$a['style']}";
}
add_shortcode( 'slider', 'slider_func' );
