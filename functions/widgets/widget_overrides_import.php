<?php
/* image widget template location overwrite */
function image_widget_template($template) {
  return get_template_directory() . '/functions/widgets/inzite_image_widget.php';
}
add_filter('sp_template_image-widget_widget.php', 'image_widget_template');

// Include Inzite_postloop_Widget
// require_once( get_template_directory() . '/functions/widgets/inzite_post_loop_widget.php' );
