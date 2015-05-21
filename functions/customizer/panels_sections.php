<?php
/**
 * Create the customizer panels and sections
 */
function custom_add_panels_and_sections( $wp_customize ) {

    /**
     * Add panels
     */
    $wp_customize->add_panel( 'header_panel', array(
        'priority'    => 10,
        'title'       => __( 'Header', 'textdomain' ),
        'description' => __( 'Header Options', 'textdomain' ),
    ) );
    $wp_customize->add_panel( 'navigation_panel', array(
        'priority'    => 10,
        'title'       => __( 'Navigation', 'textdomain' ),
        'description' => __( 'navigation Options', 'textdomain' ),
    ) );

    /**
     * Add sections
     */

    // This section will be inside the "navigation" panel
    $wp_customize->add_section( 'main_navigation_section', array(
        'title'       => __( 'Top level button', 'textdomain' ),
        'priority'    => 10,
        'panel'       => 'navigation_panel',
        'description' => __( 'Some description here.', 'textdomain' )

    ) );

    // This section will be inside the "navigation" panel
    $wp_customize->add_section( 'dropdown_navigation_section', array(
        'title'       => __( 'Dropdown', 'textdomain' ),
        'priority'    => 20,
        'panel'       => 'navigation_panel',
        'description' => __( 'Some description here.', 'textdomain' )
    ) );

    // This section will be inside the "header" panel
    $wp_customize->add_section( 'logo_section', array(
        'title'    => __( 'Logo', 'textdomain' ),
        'priority' => 30,
        'panel'       => 'header_panel',
    ) );

    // This section will be inside the "header" panel
    $wp_customize->add_section( 'layout_section', array(
        'title'    => __( 'Layout', 'textdomain' ),
        'priority' => 30,
        'panel'       => 'header_panel',
    ) );

}
add_action( 'customize_register', 'custom_add_panels_and_sections' );
