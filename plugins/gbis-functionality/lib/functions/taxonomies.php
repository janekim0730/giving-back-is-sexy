<?php
/**
 * TAXONOMIES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_taxonomy
 */

 // Register Custom Taxonomy
 function episode_taxonomy() {

 	$labels = array(
 		'name'                       => 'Episodes',
 		'singular_name'              => 'Episode',
 		'menu_name'                  => 'Episode',
 		'all_items'                  => 'All Episodes',
 		'parent_item'                => 'Parent Episode',
 		'parent_item_colon'          => 'Parent Episode:',
 		'new_item_name'              => 'New Episode Name',
 		'add_new_item'               => 'Add New Episode',
 		'edit_item'                  => 'Edit Episode',
 		'update_item'                => 'Update Episode',
 		'view_item'                  => 'View Episode',
 		'separate_items_with_commas' => 'Separate episodes with commas',
 		'add_or_remove_items'        => 'Add or remove episodes',
 		'choose_from_most_used'      => 'Choose from the most used',
 		'popular_items'              => 'Popular Episodes',
 		'search_items'               => 'Search Episodes',
 		'not_found'                  => 'Not Found',
 		'no_terms'                   => 'No episodes',
 		'items_list'                 => 'Episodes list',
 		'items_list_navigation'      => 'Episodes list navigation',
 	);
 	$args = array(
 		'labels'                     => $labels,
 		'hierarchical'               => true,
 		'public'                     => true,
 		'show_ui'                    => true,
 		'show_admin_column'          => true,
 		'show_in_nav_menus'          => true,
 		'show_tagcloud'              => true,
 	);
 	register_taxonomy( 'episode', array( 'page' ), $args );

 }
 add_action( 'init', 'episode_taxonomy', 0 );
 
