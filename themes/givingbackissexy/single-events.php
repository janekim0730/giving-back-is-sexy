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


<?php
			$dates = CFS() -> get ('event_date');
			foreach ($dates as $date) :
			?>
			<p><?php echo $date['event_day_of_the_week']; ?></p>
			<p><?php echo $date['event_month']; ?></p>
			<p><?php echo $date['event_day']; ?></p>
			<p><?php echo $date['event_year']; ?></p>

<?php endforeach; ?></div>

 <div class="event-description"><?php echo CFS()->get( 'event_description' ); ?></div>

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





</article>
<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
