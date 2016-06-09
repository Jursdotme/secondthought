<?php
function siteorigin_universal_color_pallet() {
?>
    <script>
        jQuery(document).ready(function($){
            $.wp.wpColorPicker.prototype.options = {
                width: 242,
                palettes: [
                  '#2ecc71',
                  '#3498db',
                  '#af7ac4',
                  '#f1c40f',
                  '#e67e22',
                  '#e74c3c',
                  '#34495e',
                  '#ecf0f1',
                ]
            };
        });

    </script>
<?php
}
add_action('admin_print_footer_scripts', 'siteorigin_universal_color_pallet');
add_action('customize_controls_print_footer_scripts', 'siteorigin_universal_color_pallet');
