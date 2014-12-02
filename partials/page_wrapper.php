<!-- wrapper -->
<?php if( get_theme_mod( 'page_margins' ) == 1 ) { ?>

  <?php
    // Define and convert content background to rgba
    $wrapper_background = kirki_get_rgba( get_theme_mod( 'content_background_color' ), get_theme_mod( 'content_background_opacity' ) );

    // Define content background shadow
    if( get_theme_mod( 'content_shadow' ) == 0 ) {
      $content_shadow = 'content_shadow_0';
    } elseif( get_theme_mod( 'content_shadow' ) == 1 ) {
      $content_shadow = 'content_shadow_1';
    } elseif( get_theme_mod( 'content_shadow' ) == 2 ) {
      $content_shadow = 'content_shadow_2';
    } elseif( get_theme_mod( 'content_shadow' ) == 3 ) {
      $content_shadow = 'content_shadow_3';
    }
  ?>

  <body <?php body_class(); ?>>
    <div class="wrapper limit-width <?php echo $content_shadow; ?>" style="background-color: <?php echo $wrapper_background; ?>;">
<?php } else { ?>
  <body <?php body_class(); ?>>
    <div class="wrapper">
<?php } ?>
