<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Giving_Back_Is_Sexy
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function givingbackissexy_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	return $classes;
}
add_filter( 'body_class', 'givingbackissexy_body_classes' );


/*----------------------------
  GBIS: Theme-Independent Functions
-----------------------------*/

//Change Link of Logo on Login Screen

function gbis_login_link( $url ){
    return home_url();
}
add_filter( 'login_headerurl', 'gbis_login_link' );


//Change Logo Title on Log-In Screen
function gbis_logo_title() {
	return 'View Website';
}
add_filter ('login_headertitle', 'gbis_logo_title');
