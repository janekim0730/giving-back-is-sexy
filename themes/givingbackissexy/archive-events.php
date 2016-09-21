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

			<h2>Upcoming Events</h2>

		<?php	$terms = get_terms('event_history');
			echo '<ul>';
			foreach ($terms as $term) {
			echo '<li><a href="'.get_term_link($term).'">'.$term->name.'</a></li>';
			}
			echo '</ul>'; ?>

			<h2>Past Events</h2>

			<?php
			$taxonomy = 'event_history';
			$terms = get_terms($taxonomy); ?>
      <a href="<?php echo wp_get_post_terms($term-> upcoming-events, $taxonomy); ?>"><h2><?php echo $term->name; ?></h2></a>

			<?php
			$taxonomy = 'event_history';
			$terms = get_terms($taxonomy); ?>
			<a href="<?php echo wp_get_post_terms($term-> past-events, $taxonomy); ?>"><h2><?php echo $term->name; ?></h2></a>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
