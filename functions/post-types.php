<?php
// Register Custom Post Type
function pakker() {

  $labels = array(
    'name'                => _x( 'Pakker', 'Post Type General Name', 'actionhouse' ),
    'singular_name'       => _x( 'Pakke', 'Post Type Singular Name', 'actionhouse' ),
    'menu_name'           => __( 'Pakker', 'actionhouse' ),
    'parent_item_colon'   => __( 'Forældre Pakke', 'actionhouse' ),
    'all_items'           => __( 'Alle Pakker', 'actionhouse' ),
    'view_item'           => __( 'Se Pakke', 'actionhouse' ),
    'add_new_item'        => __( 'Tilføj Pakke', 'actionhouse' ),
    'add_new'             => __( 'Tilføj Ny', 'actionhouse' ),
    'edit_item'           => __( 'Rediger Pakke', 'actionhouse' ),
    'update_item'         => __( 'Opdater pakke', 'actionhouse' ),
    'search_items'        => __( 'Søg efter Pakke', 'actionhouse' ),
    'not_found'           => __( 'Ikke fundet', 'actionhouse' ),
    'not_found_in_trash'  => __( 'Ingen Pakker fundet i Papirkurv', 'actionhouse' ),
  );
  $args = array(
    'label'               => __( 'pakker', 'actionhouse' ),
    'description'         => __( 'Post Type Description', 'actionhouse' ),
    'labels'              => $labels,
    'supports'            => array( 'title', 'editor', 'author', 'page-attributes', ),
    'taxonomies'          => array( 'category', 'post_tag' ),
    'hierarchical'        => false,
    'public'              => true,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'show_in_nav_menus'   => true,
    'show_in_admin_bar'   => true,
    'menu_position'       => 5,
    'menu_icon'           => 'dashicons-tag',
    'can_export'          => true,
    'has_archive'         => true,
    'exclude_from_search' => false,
    'publicly_queryable'  => true,
    'capability_type'     => 'page',
  );
  register_post_type( 'pakker', $args );

}

// Hook into the 'init' action
add_action( 'init', 'pakker', 0 );
