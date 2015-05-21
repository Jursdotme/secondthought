<?php
/**
 * Create the setting
 */

/*--------------------------------------------*
 * Logo Section
/*--------------------------------------------*/


$fields[] = array(
    'type'        => 'image',
    'setting'     => 'logo_image',
    'label'       => __( 'Logo Image', 'kirki' ),
    'description' => __( 'This is the logo displayed in the page header.', 'kirki' ),
    //'help'        => __( 'This is some extra help.', 'kirki' ),
    'section'     => 'logo_section',
    'default'     => 'https://raw.githubusercontent.com/Jursdotme/secondthought/master/img/logo.png',
    'priority'    => 10,
);

// END Logo Section


/*--------------------------------------------*
 * Layout Section
/*--------------------------------------------*/

$fields[] = array(
    'type'        => 'radio-image',
    'setting'     => 'header_layout',
    'label'       => __( 'This is the label', 'kirki' ),
    'description' => __( 'This is the control description', 'kirki' ),
    // 'help'        => __( 'This is some extra help. You can use this to add some additional instructions for users. The main description should go in the "description" of the field, this is only to be used for help tips.', 'kirki' ),
    'section'     => 'layout_section',
    'default'     => 'option-1',
    'priority'    => 10,
    'choices'     => array(
        'logo_left' => get_template_directory_uri() . '/img/logo_left.png',
        'logo_right' => get_template_directory_uri() . '/img/logo_right.png',
        'logo_top' => get_template_directory_uri() . '/img/logo_top.png',
        'logo_seperate' => get_template_directory_uri() . '/img/logo_seperate.png',
    ),
);

$fields[] = array(
    'type'        => 'checkbox',
    'setting'     => 'fixed_header',
    'label'       => __( 'Fixed Header', 'kirki' ),
    'description' => __( 'This is the control description', 'kirki' ),
    // 'help'        => __( 'This is some extra help. You can add whatever you want here.', 'kirki' ),
    'section'     => 'layout_section',
    'default'     => 0,
    'priority'    => 10,
);

$fields[] = array(
    'type'        => 'radio-buttonset',
    'setting'     => 'navigation_alignment',
    'label'       => __( 'Navigation Alignment', 'kirki' ),
    //'description' => __( 'This is the control description', 'kirki' ),
    //'help'        => __( 'This is some extra help. You can use this to add some additional instructions for users. The main description should go in the "description" of the field, this is only to be used for help tips.', 'kirki' ),
    'section'     => 'layout_section',
    'default'     => 'right',
    'priority'    => 10,
    'choices'     => array(
        'left' => __( 'Left', 'kirki' ),
        'right' => __( 'Right', 'kirki' ),
    ),
);

$fields[] = array(
    'type'        => 'slider',
    'setting'     => 'logo_width',
    'label'       => __( 'Logo Width (In %)', 'kirki' ),
    'description' => __( 'This is the control description', 'kirki' ),
    // 'help'        => __( 'This is some extra help. You can use this to add some additional instructions for users. The main description should go in the "description" of the field, this is only to be used for help tips.', 'kirki' ),
    'section'     => 'layout_section',
    'default'     => 25,
    'priority'    => 10,
    'transport'   => 'postMessage',
    'choices'     => array(
        'min'  => 0,
        'max'  => 100,
        'step' => 1
    ),
);

$fields[] = array(
    'type'        => 'slider',
    'setting'     => 'header_height',
    'label'       => __( 'Header Height', 'kirki' ),
    'description' => __( 'This is the control description', 'kirki' ),
    // 'help'        => __( 'This is some extra help. You can use this to add some additional instructions for users. The main description should go in the "description" of the field, this is only to be used for help tips.', 'kirki' ),
    'section'     => 'layout_section',
    'default'     => 30,
    'priority'    => 10,
    'transport'   => 'postMessage',
    'choices'     => array(
        'min'  => 1,
        'max'  => 200,
        'step' => 1
    ),
);

$fields[] = array(
    'type'        => 'slider',
    'setting'     => 'logo_vertical_position',
    'label'       => __( 'Logo vertical position', 'kirki' ),
    'description' => __( 'This is the control description', 'kirki' ),
    // 'help'        => __( 'This is some extra help. You can use this to add some additional instructions for users. The main description should go in the "description" of the field, this is only to be used for help tips.', 'kirki' ),
    'section'     => 'layout_section',
    'default'     => 25,
    'priority'    => 10,
    'transport'   => 'postMessage',
    'choices'     => array(
        'min'  => 1,
        'max'  => 200,
        'step' => 1
    ),
);

$fields[] = array(
    'type'        => 'slider',
    'setting'     => 'navigation_height',
    'label'       => __( 'Navigation Height', 'kirki' ),
    'description' => __( 'This is the control description', 'kirki' ),
    // 'help'        => __( 'This is some extra help. You can use this to add some additional instructions for users. The main description should go in the "description" of the field, this is only to be used for help tips.', 'kirki' ),
    'section'     => 'layout_section',
    'default'     => 30,
    'priority'    => 10,
    'transport'   => 'postMessage',
    'choices'     => array(
        'min'  => 1,
        'max'  => 200,
        'step' => 1
    ),
);

$fields[] = array(
    'type'        => 'slider',
    'setting'     => 'navigation_vertical_position',
    'label'       => __( 'Navigation vertical position', 'kirki' ),
    'description' => __( 'This is the control description', 'kirki' ),
    // 'help'        => __( 'This is some extra help. You can use this to add some additional instructions for users. The main description should go in the "description" of the field, this is only to be used for help tips.', 'kirki' ),
    'section'     => 'layout_section',
    'default'     => 0,
    'priority'    => 10,
    'transport'   => 'postMessage',
    'choices'     => array(
        'min'  => 0,
        'max'  => 200,
        'step' => 1
    ),
);

$fields[] = array(
    'type'        => 'color-alpha',
    'setting'     => 'header_color',
    'label'       => __( 'Header Color', 'kirki' ),
    'description' => __( 'This is the control description', 'kirki' ),
    // 'help'        => __( 'This is some extra help.', 'kirki' ),
    'section'     => 'layout_section',
    'default'     => '#2B394C',
    'priority'    => 10,
    'transport'   => 'postMessage',
);

$fields[] = array(
    'type'        => 'color-alpha',
    'setting'     => 'navigation_color',
    'label'       => __( 'Menu Color', 'kirki' ),
    'description' => __( 'This is the control description', 'kirki' ),
    // 'help'        => __( 'This is some extra help.', 'kirki' ),
    'section'     => 'layout_section',
    'default'     => '#E34A3D',
    'priority'    => 10,
    'transport'   => 'postMessage',
);


// END Layout Section


/*--------------------------------------------*
 * Main navigation Settings
/*--------------------------------------------*/

$fields[] = array(
    'type'        => 'color-alpha',
    'setting'     => 'navigation_item_bg_color',
    'label'       => __( 'Button Background Color', 'kirki' ),
    'description' => __( 'This is the control description', 'kirki' ),
    // 'help'        => __( 'This is some extra help.', 'kirki' ),
    'section'     => 'main_navigation_section',
    'default'     => '#fff',
    'priority'    => 10,
    'transport'   => 'postMessage',
);

$fields[] = array(
    'type'        => 'color-alpha',
    'setting'     => 'navigation_item_bg_hover_color',
    'label'       => __( 'Button Background Color (Hover)', 'kirki' ),
    'description' => __( 'This is the control description', 'kirki' ),
    // 'help'        => __( 'This is some extra help.', 'kirki' ),
    'section'     => 'main_navigation_section',
    'default'     => '#fff',
    'priority'    => 10,
);

$fields[] = array(
    'type'        => 'color-alpha',
    'setting'     => 'navigation_item_color',
    'label'       => __( 'Button Text Color', 'kirki' ),
    'description' => __( 'This is the control description', 'kirki' ),
    // 'help'        => __( 'This is some extra help.', 'kirki' ),
    'section'     => 'main_navigation_section',
    'default'     => '#fff',
    'priority'    => 10,
    'transport'   => 'postMessage',
);

$fields[] = array(
    'type'        => 'color-alpha',
    'setting'     => 'navigation_item_hover_color',
    'label'       => __( 'Button Text Color (Hover)', 'kirki' ),
    'description' => __( 'This is the control description', 'kirki' ),
    // 'help'        => __( 'This is some extra help.', 'kirki' ),
    'section'     => 'main_navigation_section',
    'default'     => '#fff',
    'priority'    => 10,
);

$fields[] = array(
    'type'        => 'slider',
    'setting'     => 'navigation_item_fontsize',
    'label'       => __( 'Font Size', 'kirki' ),
    'description' => __( 'This is the control description', 'kirki' ),
    // 'help'        => __( 'This is some extra help. You can use this to add some additional instructions for users. The main description should go in the "description" of the field, this is only to be used for help tips.', 'kirki' ),
    'section'     => 'main_navigation_section',
    'default'     => 12,
    'priority'    => 10,
    'transport'   => 'postMessage',
    'choices'     => array(
        'min'  => 8,
        'max'  => 25,
        'step' => 1
    ),
);

$fields[] = array(
    'type'        => 'slider',
    'setting'     => 'navigation_item_margin',
    'label'       => __( 'Button Spacing', 'kirki' ),
    'description' => __( 'This is the control description', 'kirki' ),
    // 'help'        => __( 'This is some extra help. You can use this to add some additional instructions for users. The main description should go in the "description" of the field, this is only to be used for help tips.', 'kirki' ),
    'section'     => 'main_navigation_section',
    'default'     => 0,
    'priority'    => 10,
    'transport'   => 'postMessage',
    'choices'     => array(
        'min'  => 0,
        'max'  => 50,
        'step' => 1
    ),
);

$fields[] = array(
    'type'        => 'slider',
    'setting'     => 'navigation_item_padding_top_bottom',
    'label'       => __( 'Button Padding (Height)', 'kirki' ),
    'description' => __( 'This is the control description', 'kirki' ),
    // 'help'        => __( 'This is some extra help. You can use this to add some additional instructions for users. The main description should go in the "description" of the field, this is only to be used for help tips.', 'kirki' ),
    'section'     => 'main_navigation_section',
    'default'     => 16,
    'priority'    => 10,
    'transport'   => 'postMessage',
    'choices'     => array(
        'min'  => 0,
        'max'  => 50,
        'step' => 1
    ),
);

$fields[] = array(
    'type'        => 'slider',
    'setting'     => 'navigation_item_padding_left_right',
    'label'       => __( 'Button Padding (Width)', 'kirki' ),
    'description' => __( 'This is the control description', 'kirki' ),
    // 'help'        => __( 'This is some extra help. You can use this to add some additional instructions for users. The main description should go in the "description" of the field, this is only to be used for help tips.', 'kirki' ),
    'section'     => 'main_navigation_section',
    'default'     => 16,
    'priority'    => 10,
    'transport'   => 'postMessage',
    'choices'     => array(
        'min'  => 0,
        'max'  => 50,
        'step' => 1
    ),
);



// END Main Navigation Section

/*--------------------------------------------*
 * Dropdown navigation Settings
/*--------------------------------------------*/

$fields[] = array(
    'type'        => 'color-alpha',
    'setting'     => 'navigation_dropdown_bg_color',
    'label'       => __( 'Button Background Color', 'kirki' ),
    'description' => __( 'This is the control description', 'kirki' ),
    // 'help'        => __( 'This is some extra help.', 'kirki' ),
    'section'     => 'dropdown_navigation_section',
    'default'     => '#fff',
    'priority'    => 10,
);

$fields[] = array(
    'type'        => 'color-alpha',
    'setting'     => 'navigation_dropdown_item_bg_hover_color',
    'label'       => __( 'Button Background Color (Hover)', 'kirki' ),
    'description' => __( 'This is the control description', 'kirki' ),
    // 'help'        => __( 'This is some extra help.', 'kirki' ),
    'section'     => 'dropdown_navigation_section',
    'default'     => '#2B394C',
    'priority'    => 10,
);

$fields[] = array(
    'type'        => 'color-alpha',
    'setting'     => 'navigation_dropdown_item_color',
    'label'       => __( 'Button Text Color', 'kirki' ),
    'description' => __( 'This is the control description', 'kirki' ),
    // 'help'        => __( 'This is some extra help.', 'kirki' ),
    'section'     => 'dropdown_navigation_section',
    'default'     => '#2B394C',
    'priority'    => 10,
);

$fields[] = array(
    'type'        => 'color-alpha',
    'setting'     => 'navigation_dropdown_item_hover_color',
    'label'       => __( 'Button Text Color (Hover)', 'kirki' ),
    'description' => __( 'This is the control description', 'kirki' ),
    // 'help'        => __( 'This is some extra help.', 'kirki' ),
    'section'     => 'dropdown_navigation_section',
    'default'     => '#fff',
    'priority'    => 10,
);

$fields[] = array(
    'type'        => 'slider',
    'setting'     => 'navigation_dropdown_item_fontsize',
    'label'       => __( 'Font Size', 'kirki' ),
    'description' => __( 'This is the control description', 'kirki' ),
    // 'help'        => __( 'This is some extra help. You can use this to add some additional instructions for users. The main description should go in the "description" of the field, this is only to be used for help tips.', 'kirki' ),
    'section'     => 'dropdown_navigation_section',
    'default'     => 13,
    'priority'    => 10,
    'choices'     => array(
        'min'  => 12,
        'max'  => 25,
        'step' => 1
    ),
);




// END Main Navigation Section
