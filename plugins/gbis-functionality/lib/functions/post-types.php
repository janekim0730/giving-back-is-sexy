<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

 // Register Custom Post Type
 function events_post_type() {

   $labels = array(
 		'name'                  => 'Events',
 		'singular_name'         => 'Event',
 		'menu_name'             => 'Events',
 		'name_admin_bar'        => 'Event',
 		'archives'              => 'Event Archive',
 		'parent_item_colon'     => 'Parent Event:',
 		'all_items'             => 'All Events',
 		'add_new_item'          => 'Add New Event',
 		'add_new'               => 'Add Event',
 		'new_item'              => 'New Event',
 		'edit_item'             => 'Edit Event',
 		'update_item'           => 'Update Event',
 		'view_item'             => 'View Event',
 		'search_items'          => 'Search Event',
 		'not_found'             => 'Not Found',
 		'not_found_in_trash'    => 'Not Found in Trash',
 		'featured_image'        => 'Featured Event',
 		'set_featured_image'    => 'Set featured event image',
 		'remove_featured_image' => 'Remove featured event image',
 		'use_featured_image'    => 'Use as featured event image',
 		'insert_into_item'      => 'Insert into event',
 		'uploaded_to_this_item' => 'Uploaded to this event',
 		'items_list'            => 'Event List',
 		'items_list_navigation' => 'Event List Navigation',
 		'filter_items_list'     => 'Filter event list',
 	);
 	$args = array(
 		'label'                 => __( 'Events' ),
 		'description'           => __( 'Events past and upcoming' ),
 		'labels'                => $labels,
 		'supports'              => array( 'title', 'editor', 'thumbnail' ),
 		'hierarchical'          => false,
 		'public'                => true,
 		'show_ui'               => true,
 		'show_in_menu'          => true,
 		'menu_position'         => 20,
 		'menu_icon'             => 'dashicons-calendar',
 		'show_in_admin_bar'     => true,
 		'show_in_nav_menus'     => true,
 		'can_export'            => true,
 		'has_archive'           => 'events',
 		'exclude_from_search'   => false,
 		'publicly_queryable'    => true,
 		'capability_type'       => 'post',
 	);
 	register_post_type( 'events', $args );

 }
 add_action( 'init', 'events_post_type', 0 );
