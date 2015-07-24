<?php

/*--------------------------------------------*
 * Custom editor classes for Tiny MCE
/*--------------------------------------------*/

  // Callback function to insert 'styleselect' into the $buttons array
  function my_mce_buttons_2( $buttons ) {
      array_unshift( $buttons, 'styleselect' );
      return $buttons;
  }
  // Register our callback to the appropriate filter
  add_filter('mce_buttons_2', 'my_mce_buttons_2');

  // Callback function to filter the MCE settings
  function my_mce_before_init_insert_formats( $init_array ) {
      // Define the style_formats array
      $style_formats = array(
          // Each array child is a format with it's own settings
          array(
              'title'   => 'Lead',
              'block'   => 'p',
              'classes' => 'lead',
              'wrapper' => false,

          ),
          array(
              'title'   => 'Display 1',
              'block'   => 'h1',
              'classes' => 'display-1',
              'wrapper' => false,

          ),
          array(
              'title'   => 'Display 2',
              'block'   => 'h2',
              'classes' => 'display-2',
              'wrapper' => false,

          ),
          array(
              'title'   => 'Display 3',
              'block'   => 'h3',
              'classes' => 'display-3',
              'wrapper' => false,

          ),
          array(
              'title'   => 'Display 4',
              'block'   => 'h4',
              'classes' => 'display-4',
              'wrapper' => false,

          ),
          array(
              'title'   => 'Color contrast',
              'inline'  => 'span',
              'classes' => 'colorcontrast',
              'wrapper' => false,
          ),
          array(
              'title'   => 'PullQuote',
              'block'   => 'div',
              'classes' => 'simplePullQuote',
              'wrapper' => true,

          ),
          array(
              'title'   => 'Small',
              'inline'  => 'small',
              'classes' => '',
              'wrapper' => false,
              'exact'   => true
          ),
          array(
              'title'    => 'Brand Button',
              'selector' => 'a',
              'classes'  => 'btn btn-default btn-brand'
          ),
          array(
              'title'    => 'Success Button',
              'selector' => 'a',
              'classes'  => 'btn btn-default btn-success'
          ),
          array(
              'title'    => 'Subtle Button',
              'selector' => 'a',
              'classes'  => 'btn btn-default btn-subtle'
          )
      );
      // Insert the array, JSON ENCODED, into 'style_formats'
      $init_array['style_formats'] = json_encode( $style_formats );

      return $init_array;

  }

// END Custom editor classes for Tiny MCE

/*--------------------------------------------*
 * Add custom stylesheet to Tiny MCE
/*--------------------------------------------*/

  // Attach callback to 'tiny_mce_before_init'
  add_filter( 'tiny_mce_before_init', 'my_mce_before_init_insert_formats' );

  function my_theme_add_editor_styles() {
      add_editor_style( 'build/stylesheets/editor.css' );
  }

  add_action( 'init', 'my_theme_add_editor_styles' );

// END Add custom stylesheet to Tiny MCE

/*--------------------------------------------*
 * Limit the size of uploaded images (Turned off by default)
/*--------------------------------------------*/

  // add_filter('wp_handle_upload_prefilter','tomjn_deny_giant_images');

  function tomjn_deny_giant_images($file){
      $type = explode('/',$file['type']);

      if($type[0] == 'image'){
          list( $width, $height, $imagetype, $hwstring, $mime, $rgb_r_cmyk, $bit ) = getimagesize( $file['tmp_name'] );
          if($width * $height > 3200728){ // I added 100,000 as sometimes there are more rows/columns than visible pixels depending on the format
              $file['error'] = 'Dette billede er for stort du bliver nød til at skalerer det inden upload, helst mindre end 3.2MP eller 2048x1536.';
          }
      }
      return $file;
  }


// END Limit the size of uploaded images (Turned off by default)

// Remove auto <p> on images
function filter_ptags_on_images($content){
   return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
}

add_filter('the_content', 'filter_ptags_on_images');
