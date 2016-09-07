<?php
/**
 * TAXONOMIES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_taxonomy
 */


// Register Custom Taxonomy
function gbis_events_taxonomy() {

	$labels = array(
		'name'                       => __( 'Events'),
		'singular_name'              => __( 'Event'),
		'menu_name'                  => __( 'Event Taxonomy'),
		'all_items'                  => __( 'All Events'),
		'parent_item'                => __( 'Parent Event'),
		'parent_item_colon'          => __( 'Parent Event:'),
		'new_item_name'              => __( 'New Event Name'),
		'add_new_item'               => __( 'Add New Event'),
		'edit_item'                  => __( 'Edit Event'),
		'update_item'                => __( 'Update Event'),
		'view_item'                  => __( 'View Event'),
		'separate_items_with_commas' => __( 'Separate events with commas'),
		'add_or_remove_items'        => __( 'Add or remove events'),
		'choose_from_most_used'      => __( 'Choose from the most used'),
		'popular_items'              => __( 'Popular Events'),
		'search_items'               => __( 'Search Events'),
		'not_found'                  => __( 'Not Found'),
		'no_terms'                   => __( 'No events'),
		'items_list'                 => __( 'Events list'),
		'items_list_navigation'      => __( 'Events list navigation'),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'query_var'                  => true,
		'rewrite'                    => array('slug' => 'type')
	);
	register_taxonomy( 'Events_Type', array( 'event' ), $args );

}
add_action( 'init', 'gbis_events_taxonomy', 0 );
