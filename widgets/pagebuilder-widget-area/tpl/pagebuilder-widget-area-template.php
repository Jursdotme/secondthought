<?php
global $wp_registered_sidebars;
$options = array();
foreach ($wp_registered_sidebars as $sidebar) {

	array_push ( $options, $sidebar['id'] = $sidebar['name'] );

}

dynamic_sidebar( $options[$instance['sidebar']] );
