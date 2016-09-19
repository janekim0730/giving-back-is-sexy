<?php
/**
 * Template Name: Single Event 4th Annual Vision Board Party 2017
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Giving_Back_Is_Sexy
 */

get_header(); ?>

	<div id="primary" class="event-area">
		<main id="main" class="event-main" role="main">

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<header class="annual-vision-board">
					<h1 class="vision-header"><?php echo get_the_title(); ?></h1>
					<div class="vision-video">
						<?php while ( have_posts() ) : the_post(); ?>
						<?php the_content(); ?>
					<?php endwhile; // End of the loop. ?>
				 </div>
				</header><!---header-->

			<div class="event-main-content"><?php echo CFS()->get( 'event_main_content' ); ?></div>

      <div class="event-icons">
			<?php
							$icons = CFS() -> get ('event_icons');
							foreach ($icons as $icon) :
							?>
							<div class="icon-wrapper"><img class="vision-icons" src="<?php echo $icon['icon']; ?>"/>
						  <span class="vision-icon-contents"><?php echo $icon['event_icon_contents']; ?></span></div>
				<?php endforeach; ?>
			</div>

			<div class="extra-content"><?php echo CFS()->get( 'extra' ); ?></div>

</article>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
