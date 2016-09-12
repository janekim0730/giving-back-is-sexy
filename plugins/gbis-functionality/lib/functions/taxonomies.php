<?php
/**
 * TAXONOMIES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_taxonomy
 */

 // Register Custom Taxonomy
 // Register Custom Taxonomy
function gbis_register_events_tax() {

	$labels = array(
		'name'                       => 'Event History',
		'singular_name'              => 'Event History',
		'menu_name'                  => 'Event History',
		'all_items'                  => 'All Event Categories',
		'parent_item'                => 'Event Category',
		'parent_item_colon'          => 'Event Category:',
		'new_item_name'              => 'New Event Category',
		'add_new_item'               => 'Add New Event Category',
		'edit_item'                  => 'Edit Event Category',
		'update_item'                => 'Update Event Category',
		'view_item'                  => 'View Event Category',
		'separate_items_with_commas' => 'Separate event categories with commas',
		'add_or_remove_items'        => 'Add or remove event categories',
		'choose_from_most_used'      => 'Choose from the most used',
		'popular_items'              => 'Popular Event Categories',
		'search_items'               => 'Search Event Categories',
		'not_found'                  => 'Not Found',
		'no_terms'                   => 'No event categories',
		'items_list'                 => 'Event Categories list',
		'items_list_navigation'      => 'Event Categories list navigation',
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
