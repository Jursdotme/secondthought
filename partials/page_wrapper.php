<!-- wrapper -->


<?php if( get_field('vis_sideramme', 'option') )
{
  $bg_color = get_field('baggrundsfarve', 'option');
  $side_opacity = get_field('side_opacity', 'option') / 100;
  if( $side_opacity != 0)
  {
    $page_color = hex2rgba(get_field('sidefarve', 'option'), $side_opacity);
  } else {
    $page_color = 'rgba(0,0,0,0)';
  }
  $bg_placement_h = get_field('bg_placering_h', 'option');
  $bg_placement_v = get_field('bg_placering_v', 'option');
  $bg_repeat = get_field('gentagelse', 'option');
  $bg_size = get_field('storrelse', 'option');
  $wrapper_shadow = get_field('shadow', 'option');



  if( get_field('brug_billed_overlay', 'option') )
  {
    $overlay_opacity = get_field('overlay_gennemsigtighed', 'option') / 100;
    $overlay_color = hex2rgba($bg_color, $overlay_opacity);
  } else {
    $overlay_color = 'rgba(0,0,0,0)';
  }

    if( get_field('baggrundsbillede', 'option') )
    {
      // Setup Image data
      $id = get_field('baggrundsbillede', 'option');
      $size = 'full'; // (thumbnail, medium, large, full or custom size)
      $image_attributes = wp_get_attachment_image_src( $id, $size );
    }

  ?>
    <body <?php body_class(); ?>
      style="
        background-color: <?php echo $overlay_color; ?>;
        background-image: url('<?php echo $image_attributes[0] ?>');
        background-position: <?php echo $bg_placement_v . " " . $bg_placement_h; ?>;
        background-repeat: <?php echo $bg_repeat; ?>;
        background-size: <?php echo $bg_size; ?>;
        <?php if( !the_field('backgroundscroll', 'option') ){
          echo "background-attachment: fixed;";
        } ?>
      "
    > <!-- END BODY -->
    <div class="wrapper limit-width <?php echo $wrapper_shadow; ?>"
      style="
        background-color: <?php echo $page_color; ?>;"
    >

<?php }
else
{ ?>
  <body <?php body_class(); ?>
    <div class="wrapper">
<?php } ?>
