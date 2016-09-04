<?php
/**
 * The template for displaying all single event posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Giving_Back_Is_Sexy
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">


<?php the_post_thumbnail('large'); ?>


<div><?php echo CFS()->get( 'event_description' ); ?></div>

<div><?php
			$dates = CFS() -> get ('event_date');
			foreach ($dates as $date) :
			?>
			<p><?php echo $date['event_day_of_the_week']; ?></p>
			<p><?php echo $date['event_month']; ?></p>
			<p><?php echo $date['event_day']; ?></p>
			<p><?php echo $date['event_year']; ?></p>

<?php endforeach; ?></div>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
