<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

 // Register Custom Post Type
 function events_post_type() {

 	$labels = array(
 		'name'                  => _x( 'Events', 'Post Type General Name', 'events' ),
 		'singular_name'         => _x( 'Event', 'Post Type Singular Name', 'events' ),
 		'menu_name'             => __( 'Events', 'events' ),
 		'name_admin_bar'        => __( 'Events', 'events' ),
 		'archives'              => __( 'Event Archives', 'events' ),
 		'parent_item_colon'     => __( 'Events:', 'events' ),
 		'all_items'             => __( 'All Events', 'events' ),
 		'add_new_item'          => __( 'Add New Event', 'events' ),
 		'add_new'               => __( 'Add Event', 'events' ),
 		'new_item'              => __( 'New Event', 'events' ),
 		'edit_item'             => __( 'Edit Event', 'events' ),
 		'update_item'           => __( 'Update Event', 'events' ),
 		'view_item'             => __( 'View Event', 'events' ),
 		'search_items'          => __( 'Search Event', 'events' ),
 		'not_found'             => __( 'Not found', 'events' ),
 		'not_found_in_trash'    => __( 'Not found in Trash', 'events' ),
 		'featured_image'        => __( 'Featured Image', 'events' ),
 		'set_featured_image'    => __( 'Set featured image', 'events' ),
 		'remove_featured_image' => __( 'Remove featured image', 'events' ),
 		'use_featured_image'    => __( 'Use as featured image', 'events' ),
 		'insert_into_item'      => __( 'Insert into event', 'events' ),
 		'uploaded_to_this_item' => __( 'Uploaded to this event', 'events' ),
 		'items_list'            => __( 'Events list', 'events' ),
 		'items_list_navigation' => __( 'Events list navigation', 'events' ),
 		'filter_items_list'     => __( 'Filter events list', 'events' ),
 	);
 	$args = array(
 		'label'                 => __( 'Event', 'events' ),
 		'description'           => __( 'Events', 'events' ),
 		'labels'                => $labels,
 		'supports'              => array( 'title', 'editor', 'thumbnail' ),
 		'hierarchical'          => false,
 		'public'                => true,
 		'show_ui'               => true,
 		'show_in_menu'          => true,
 		'menu_position'         => 5,
 		'menu_icon'             => 'dashicons-calendar',
 		'show_in_admin_bar'     => true,
 		'show_in_nav_menus'     => true,
 		'can_export'            => true,
 		'has_archive'           => true,
 		'exclude_from_search'   => false,
 		'publicly_queryable'    => true,
 		'capability_type'       => 'page',
 	);
 	register_post_type( 'events', $args );

 }
 add_action( 'init', 'events_post_type', 0 );
