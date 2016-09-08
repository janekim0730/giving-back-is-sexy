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

<?php while ( have_posts() ) : the_post(); ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="event-header">
					<?php if ( has_post_thumbnail() ) : ?>
					<?php the_post_thumbnail( 'large' ); ?>
					<?php endif; ?>
				</header><!---header-->

				<div class="event-content">
							<?php the_content(); ?>
				</div><!---content-->
				<a class="button" href="https://www.picatic.com/daretodreamsoiree" target="_blank">Buy Tickets</a>


<?php
			$dates = CFS() -> get ('event_date');
			foreach ($dates as $date) :
			?>
			<div class="event-date"><span><?php echo $date['event_day_of_the_week']; ?></span>
			<span><?php echo $date['event_month']; ?></span>
			<span><?php echo $date['event_day']; ?></span>
			<span><?php echo $date['event_year']; ?></span></div>

<?php endforeach; ?></div>

<?php
			$locations = CFS() -> get ('event_location');
			foreach ($locations as $location) :
			?>
			<div class="event-location">
			<span><?php echo $location['event_place']; ?></span>
			<span><?php echo $location['event_city']; ?></span></div>

<?php endforeach; ?></div>

 <div class="event-description"><?php echo CFS()->get( 'event_description' ); ?></div>
 <a class="button" href="#">Learn about Free to be</a>

 <div class="event-ticket-wrapper">
 <h1>Tickets</h1>
 <?php
 			$tickets = CFS() -> get ('event_tickets');
 			foreach ($tickets as $ticket) :
 			?>
 			<div class="event-ticket">
 			<span><?php echo $ticket['ticket_price']; ?></span>
 			<span><?php echo $ticket['ticket_type']; ?></span>
 			<a href="<?php echo $ticket['ticket_link']; ?>">Buy Tickets<a>
 <?php endforeach; ?></div>
 <p>Tickets are available through Picatic</p>
</div>

<div class="event-schedule-wrapper">
 <h1>Schedule</h1>
 <?php
			 $schedules = CFS() -> get ('event_tickets');
			 foreach ($schedules as $schedule) :
			 ?>
			 <div class="schedule">
			 <span><?php echo $schedule['event_time']; ?></span>
			 <span><?php echo $schedule['event_schedule']; ?></span>
 <?php endforeach; ?></div>
 <a>Buy Tickets</a>
 </div>


 <h1>Featured Sponsors</h1>
		 <h2 class="platinum-sponsor">Platinum</h2>
			<?php echo do_shortcode("[wp_flickity id='1']"); ?>

		<h2 class="gold-sponsor">Gold</h2>
		<?php echo do_shortcode("[wp_flickity id='2']"); ?>

		<h2 class="silver-sponsor">Silver</h2>
		<?php echo do_shortcode("[wp_flickity id='5']"); ?>

		<h2 class="bronze-sponsor">Bronze</h2>
		<?php echo do_shortcode("[wp_flickity id='6']"); ?>

 <h1>Contributing Sponsors</h1>
  	<?php echo do_shortcode("[wp_flickity id='7']"); ?>

<h1>Vendors</h1>
 	<?php echo do_shortcode("[wp_flickity id='8']"); ?>


<h1>Become a sponsor or vendor</h1>
<p>We are currently accepting applications for sponsors and vendors the the Dare to Dream Soiree. Details are available in our Sponsorship Package.</p>
<a href="#">Download Sponsorship Package</a>
<a href="#">Apply to be a sponsor/vendor</a>

<h1>Follow the event</h1>
<a href="http://www.twitter.com/givingbackisexy" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
<a href="https://www.facebook.com/events/1575340396104023" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>


</article>
<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
