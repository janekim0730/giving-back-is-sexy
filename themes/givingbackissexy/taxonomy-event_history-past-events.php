<?php
/**
 * Template Name: Taxonomy Past Events
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Giving_Back_Is_Sexy
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div class="page-header">
			<h1 class="page-header-title"><?php single_term_title(); ?></h1>
			<p><?php echo term_description(); ?></p>
		</div>

		<article class="event-grid" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<?php while ( have_posts() ) : the_post(); ?>

				<div class="event-grid-item">
					<div class="thumbnail-wrapper">
						<a href='<?php echo esc_url( get_permalink() ); ?>'>
							<?php if ( has_post_thumbnail() ) : ?>
							<?php the_post_thumbnail( 'large' ); ?>
							<?php endif; ?>
						</a>
					</div>

					<div class="event-info">
						<span class="event-title"><?php echo get_the_title(); ?></span>
						<span class="event-date"><?php echo CFS()->get( 'event_month' ); ?></span>
					</div>
				</div>

				<?php endwhile; // End of the loop. ?>
			</article>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
