<?php
/**
 * Template Name: Single Event Dare to Dream Soiree Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Giving_Back_Is_Sexy
 */

get_header(); ?>

	<div id="primary" class="event-area">
		<main id="main" class="event-main" role="main">

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="event-header">
					<h1 class="event-header-txt">Genicca Global Group Represents the</h1>
					<?php if ( has_post_thumbnail() ) : ?>
					<?php the_post_thumbnail( 'large' ); ?>
					<?php endif; ?>
				</header><!---header-->

        <div class="event-main-content"><?php echo CFS()->get( 'event_main_content' ); ?></div>
				<div class="button-container"><a class="color-button" href="https://www.picatic.com/daretodreamsoiree" target="_blank">Buy Tickets</a></div>

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

 <div class="event-description"><?php echo CFS()->get( 'event_description' ); ?></div>
 <div class="button-container"><a class="talks-button" href="<?php echo get_site_url(); ?>/free-to-be-talks">Learn about Free to be</a></div>

 <h1 class="tickets">Tickets</h1>
 <div class="event-ticket-wrapper">
 <?php
 			$tickets = CFS() -> get ('event_tickets');
 			foreach ($tickets as $ticket) :
 			?>
 			<div class="event-tickets">
 		  <span class="ticket-price"><?php echo $ticket['ticket_price']; ?></span>
 			<span class="ticket-type"><?php echo $ticket['ticket_type']; ?></span>
 			<span class="ticket-link"><?php echo $ticket['ticket_link'];?></span></div>
<?php endforeach; ?>
 <div class="button-container"><a class="ticket-button" href="https://www.picatic.com/daretodreamsoiree">Buy Tickets</a></div>
 <p>Tickets are available through Picatic</p>
</div>

<div class="event-schedule-wrapper">
 <h1>Schedule</h1>
 <?php
			 $schedules = CFS() -> get ('schedule');
			 foreach ($schedules as $schedule) :
			 ?>
			 <div class="schedule">
			 <span class="event-time"><?php echo $schedule['event_time']; ?></span>
			 <span><?php echo $schedule['event_schedule']; ?></span>
			 </div>
 <?php endforeach; ?>
 <div class="buttons-container"><a class="block-button" href="https://www.picatic.com/daretodreamsoiree">Buy Tickets</a></div>
</div>

	<div class="featured-sponsor-wrapper">
					<?php while ( have_posts() ) : the_post(); ?>
						<?php the_content(); ?>
					<?php endwhile; // End of the loop. ?>
	</div>

<div class="sponsor-registration">
<h1>Become a sponsor or vendor</h1>
<p class="registration-content">We are currently accepting applications for sponsors and vendors the the Dare to Dream Soiree. Details are available in our Sponsorship Package.</p>
<div class="download-files"><a class="sponsorship-link" href="http://givingbackissexy.ca/wp-content/uploads/2016/09/Sponsorship-Package-August30.pdf">Download Sponsorship Package</a>
<a class="apply-sponsor" href="https://genicca.typeform.com/to/Ocv1mf">Apply to be a sponsor/vendor</a></div>

<div class="follow-event">
<h1>Follow the event</h1>
<div class="follow-icons"><a href="http://www.twitter.com/givingbackisexy" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
<a href="https://www.facebook.com/events/1575340396104023" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
</div></div>

<div class="contacts-form">
	<h1>Contact Us</h1>
	<div class="contacts-container">
		<img class="contacts-icon" src="<?php echo CFS()->get( 'mail_icon' ); ?>" alt="mail icon"/>
		<?php echo CFS()->get( 'e_mail' ); ?>
	</div>
	<div class="contacts-container">
		<img class="contacts-icon" src="<?php echo CFS()->get( 'phone_icon' ); ?>" alt="phone icon"/>
		<a href=""><?php echo CFS()->get( 'phone_number' ); ?></a>
	</div>
	 <?php
	   $id=17;
	   $post = get_page($id);
	   $content = apply_filters('the_content', $post->post_content);
	   echo $content; ?>
</div>

</article>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
