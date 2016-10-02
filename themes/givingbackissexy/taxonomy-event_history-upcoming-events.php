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


							<div class="event-info-container" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

									<h1 class="event-tax-title"><?php single_term_title(); ?></h1>

								<?php while ( have_posts() ) : the_post(); ?>


										<div class="event-info-wrapper">
											<?php
														$dates = CFS() -> get ('event_date');
														foreach ($dates as $date) :
														?>
														<div class="event-info">
															<a class="event-link" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><div class="event-date"><span class="event-week"><?php echo $date['event_day_of_the_week']; ?></span>
															<span class="style-line"></span>
															<span class="event-month"><?php echo $date['event_month']; ?></span>
															<span class="event-day"><?php echo $date['event_day']; ?></span>
															<span class="event-year"><?php echo $date['event_year']; ?></span>
														</div></a>
															<!--end event-date-->
														</div>
														<!--end event-info-->
											<?php endforeach; ?>

			            <div class="event-info-right">
										<div class="event-right-content">
											 <p><?php the_title(); ?></p>
											<?php
														$locations = CFS() -> get ('event_location');
														foreach ($locations as $location) :
														?>
														<div class="event-location">
															<span class="event-place"><?php echo $location['event_place']; ?></span>
															<span class="event-city"><?php echo $location['event_city']; ?></span>
														</div>
														<!--end event-location-->
											<?php endforeach; ?>
										</div>
										  <div class="external-link"><?php echo CFS()->get( 'ticket_external_link' ); ?></div>

									</div>
									<!--end event-info-right-->
								</div>
								<!--end event-info-wrapper-->
									<?php endwhile; // End of the loop. ?>
								</div>
								<!--end event-info-container-->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
