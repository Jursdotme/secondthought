<?php

// Remove default CSS styling on native Wordpress galleries
add_filter( 'use_default_gallery_style', '__return_false' );

// Remove clearing <br> tags from markup
// add_filter( 'the_content', 'remove_br_gallery', 11, 2);
function remove_br_gallery($output) {
    return preg_replace('/\<br[^\>]*\>/','',$output);
}

 ?>
