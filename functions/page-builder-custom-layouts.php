<?php
function mytheme_prebuilt_layouts($layouts){
    $layouts['home-page'] = array(
        // We'll add a title field
        'name' => __('Parallax background', 'vantage'),
        'description' => 'Boks i fuld bredte med parallax baggrund.',
        'widgets' =>
          array (
            0 =>
            array (
              'type' => 'visual',
              'title' => '',
              'text' => '<h1 style="text-align: center;">Etiam porta sem malesuada magna mollis euismod.</h1><p> </p><p style="text-align: center;"><a class="btn btn-default btn-success" href="http://google.com">Button</a></p>',
              'filter' => '1',
              'panels_info' =>
              array (
                'class' => 'WP_Widget_Black_Studio_TinyMCE',
                'grid' => 0,
                'cell' => 0,
                'id' => 0,
                'style' =>
                array (
                  'background_image_attachment' => false,
                  'background_display' => 'tile',
                  'font_color' => '#ffffff',
                ),
              ),
            ),
          ),
          'grids' =>
          array (
            0 =>
            array (
              'cells' => 1,
              'style' =>
              array (
                'class' => 'parallax',
                'padding' => '60px',
                'row_stretch' => 'full',
                'background_image_attachment' => 1918,
                'background_display' => 'cover',
              ),
            ),
          ),
          'grid_cells' =>
          array (
            0 =>
            array (
              'grid' => 0,
              'weight' => 1,
            ),
          ),
    );
    return $layouts;

}
add_filter('siteorigin_panels_prebuilt_layouts','mytheme_prebuilt_layouts');
