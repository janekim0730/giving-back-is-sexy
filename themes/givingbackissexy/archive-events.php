<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Giving_Back_Is_Sexy
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<header class="page-header">
		  <h1>Events</h1>
			</header>

		<?php	$terms = get_terms('event_history');
			echo '<div>';
			foreach ($terms as $term) {
			echo '<h2><a href="'.get_term_link($term).'">'.$term->name.'</a></h2>';
			}
			echo '</div>'; ?>



		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
