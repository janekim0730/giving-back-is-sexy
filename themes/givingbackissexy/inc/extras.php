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

//Add Custom Logo on Log-In Screen
function gbis_custom_login() {
	echo '<style type="text/css">
					.login h1 a {
						color: red;
						width: auto;
						height: 21px;
						background-image: url('.get_stylesheet_directory_uri().'/assets/images/logos/logo.png) !important;
						background-size: contain;
					}

					.login form .input:focus,
					input[type=radio]:focus,
					input[type=checkbox]:focus {
						border: 1px solid #ebcb80;
						box-shadow: 0 0 2px rgba(235, 203, 128,.8)
					}

					input[type=checkbox]:checked:before {
						color: #000;
					}

					.login #backtoblog a:hover,
					.login #nav a:hover {
						color: #000;
					}

					.wp-core-ui .button-primary {
						background-color: #000;
						border: #000;
						text-shadow: none;
						box-shadow: none;
					}

					.wp-core-ui .button-primary:hover,
					.wp-core-ui .button-primary:focus {
						color: #000;
						background-color: #fff;
						border: 1px solid #000;
					}
				</style>';
}
add_action ('login_head', 'gbis_custom_login');


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


//Hide main WYSIWYG editor on the About:GBIS page template
add_action( 'admin_head', 'hide_editor' );

function hide_editor() {
    global $pagenow;
    if( !( 'post.php' == $pagenow ) ) return;

    global $post;
    // Get the Post ID.
    $post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;
    if( !isset( $post_id ) ) return;

  // Get the name of the Page Template file
  $template_file = get_post_meta($post_id, '_wp_page_template', true);

  if($template_file == 'about-gbis.php'){ // the filename of the page template
    remove_post_type_support('page', 'editor');
  }
}
