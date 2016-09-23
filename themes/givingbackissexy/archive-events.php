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

			<div class="event-container">
							<?php
							$args = array( 'post_type' => 'events',
															'posts_per_page' => 4,
															'order' => 'ASC');
							$events_post = get_posts( $args );
							?>
							<ul class="event-wrapper">
								<?php foreach ( $events_post as $post ) : setup_postdata( $post ); ?>
								<li class="event-list">
									<div class="single-container">
										<a class="event-link" href="<?php echo esc_url( get_permalink() ); ?>">
											<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
												<?php the_title( sprintf( '<h2 class="event-title">', '</h2>' ) ); ?></div></a>
												<?php
															$dates = CFS() -> get ('event_date');
															foreach ($dates as $date) :
															?>
															<div class="event-info">
															<div class="event-date"><span class="event-week"><?php echo $date['event_day_of_the_week']; ?></span>
															<span class="style-line"></span>
															<span class="event-month"><?php echo $date['event_month']; ?></span>
															<span class="event-day"><?php echo $date['event_day']; ?></span>
															<span class="event-year"><?php echo $date['event_year']; ?></span></div>
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
							  </li>
								<?php endforeach; wp_reset_postdata(); ?>
							</ul>
					</div>



		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
