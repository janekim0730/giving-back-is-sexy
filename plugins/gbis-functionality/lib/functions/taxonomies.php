<?php
/**
 * TAXONOMIES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_taxonomy
 */

 // Register Custom Taxonomy
function gbis_register_events_tax() {

	$labels = array(
		'name'                       => 'Event Status',
		'singular_name'              => 'Event Status',
		'menu_name'                  => 'Event Status',
		'all_items'                  => 'All Event Statuses',
		'parent_item'                => 'Event Status',
		'parent_item_colon'          => 'Event Status:',
		'new_item_name'              => 'New Event Status',
		'add_new_item'               => 'Add New Event Status',
		'edit_item'                  => 'Edit Event Status',
		'update_item'                => 'Update Event Status',
		'view_item'                  => 'View Event Status',
		'separate_items_with_commas' => 'Separate event statuses with commas',
		'add_or_remove_items'        => 'Add or remove event statuses',
		'choose_from_most_used'      => 'Choose from the most used',
		'popular_items'              => 'Popularity Cloud',
		'search_items'               => 'Search Event Status Used',
		'not_found'                  => 'Not Found',
		'no_terms'                   => 'No event statuses',
		'items_list'                 => 'Event Statuses list',
		'items_list_navigation'      => 'Event Statuses list navigation',
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => false,
	);
	register_taxonomy( 'event_history', array( 'events' ), $args );

}
add_action( 'init', 'gbis_register_events_tax', 0 );
