<?php
/**
 * Template Name: About GBIS
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Giving_Back_Is_Sexy
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main-container" role="main">

			<div class="hashtag-wrapper"><img class="gbis-hashtag" src="<?php echo get_template_directory_uri()?>/assets/images/logos/logo.png" alt="giving back is sexy hashtag"></div>

			<?php while ( have_posts() ) : the_post(); ?>

					<div class="about-gbis-content">

						<div class="about-gbis-container">
								<img class="about-gbis-icon" src="<?php echo CFS()->get ( 'icon_1' ); ?>">
							<?php echo CFS()->get ( 'description_1' ); ?>
						</div>

						<div class="about-gbis-container">
								<img class="about-gbis-icon" src="<?php echo CFS()->get ( 'icon_2' ); ?>">
							<?php echo CFS()->get ( 'description_2' ); ?>
						</div>

						<div class="about-gbis-container">
								<img class="about-gbis-icon" src="<?php echo CFS()->get ( 'icon_3' ); ?>">
							<?php echo CFS()->get ( 'description_3' ); ?>
						</div>

						<div class="about-gbis-container">
								<img class="about-gbis-icon" src="<?php echo CFS()->get ( 'icon_4' ); ?>">
							<?php echo CFS()->get ( 'description_4' ); ?>
						</div>

						<div class="about-gbis-container">
								<img class="about-gbis-icon" src="<?php echo CFS()->get ( 'icon_5' ); ?>">
							<?php echo CFS()->get ( 'description_5' ); ?>
						</div>
					</div><!-- .entry-content -->


			<?php endwhile; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
