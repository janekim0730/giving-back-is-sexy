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



 // Register Custom Post Type
function tickets_post_type() {

	$labels = array(
		'name'                  => 'Tickets',
		'singular_name'         => 'Ticket',
		'menu_name'             => 'Tickets',
		'name_admin_bar'        => 'Tickets',
		'archives'              => 'Ticket Archives',
		'parent_item_colon'     => 'Parent Ticket:',
		'all_items'             => 'All Tickets',
		'add_new_item'          => 'Add New Ticket',
		'add_new'               => 'Add New',
		'new_item'              => 'New Ticket',
		'edit_item'             => 'Edit Ticket',
		'update_item'           => 'Update Ticket',
		'view_item'             => 'View Ticket',
		'search_items'          => 'Search Ticket',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into ticket',
		'uploaded_to_this_item' => 'Uploaded to this ticket',
		'items_list'            => 'Tickets list',
		'items_list_navigation' => 'Tickets list navigation',
		'filter_items_list'     => 'Filter tickets list',
	);
	$args = array(
		'label'                 => 'Ticket',
		'description'           => 'Tickets',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-tickets-alt',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'Tickets', $args );

}
add_action( 'init', 'tickets_post_type', 0 );


// Register Custom Post Type
function donation_post_type() {

	$labels = array(
		'name'                  => 'Donations',
		'singular_name'         => 'Donation',
		'menu_name'             => 'Donations',
		'name_admin_bar'        => 'Donations',
		'archives'              => 'Donation Archives',
		'parent_item_colon'     => 'Parent Donation:',
		'all_items'             => 'All Donations',
		'add_new_item'          => 'Add New Donation',
		'add_new'               => 'Add New',
		'new_item'              => 'New Donation',
		'edit_item'             => 'Edit Donation',
		'update_item'           => 'Update Donation',
		'view_item'             => 'View Donation',
		'search_items'          => 'Search Donation',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into donation',
		'uploaded_to_this_item' => 'Uploaded to this donation',
		'items_list'            => 'Donations list',
		'items_list_navigation' => 'Donations list navigation',
		'filter_items_list'     => 'Filter donations list',
	);
	$args = array(
		'label'                 => 'Donation',
		'description'           => 'Donations',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-heart',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'Donations', $args );

}
add_action( 'init', 'donation_post_type', 0 );
