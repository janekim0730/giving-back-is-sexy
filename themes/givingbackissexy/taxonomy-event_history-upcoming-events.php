<?php
/**
 * Template Name: Taxonomy Upcoming Events
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Giving_Back_Is_Sexy
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<h1 class="event-tax-title"><?php single_term_title(); ?></h1>

			<div class="event-info-container" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php while ( have_posts() ) : the_post(); ?>

					 <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>

						<div class="event-info-wrapper">
							<?php
										$dates = CFS() -> get ('event_date');
										foreach ($dates as $date) :
										?>
										<div class="event-info">
										<div class="event-date"><span class="event-week"><?php echo $date['event_day_of_the_week']; ?></span>
										<span class="style-line"></span>
										<span class="event-month"><?php echo $date['event_month']; ?></span>
										<span class="event-day"><?php echo $date['event_day']; ?></span>
										<span class="event-year"><?php echo $date['event_year']; ?></span></div></div>
							<?php endforeach; ?>
							<?php
										$locations = CFS() -> get ('event_location');
										foreach ($locations as $location) :
										?>
										<div class="event-location">
										<span class="event-place"><?php echo $location['event_place']; ?></span>
										<span class="event-city"><?php echo $location['event_city']; ?></span></div>
							<?php endforeach; ?>
						</div>
						 <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">RSVP</a>
					</div>

					<?php endwhile; // End of the loop. ?>
				</div>



		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
