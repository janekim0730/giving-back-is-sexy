<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Giving_Back_Is_Sexy
 * Template Name: About GBIS
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main container" role="main">

			<img src="<?php echo get_template_directory_uri()?>/assets/images/logos/logo.png" alt="sexy">

			<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>
					<header class="entry-header">
						<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<div class="about-gbis-container">
							<div class="about-gbis-icon">
								<img src="<?php echo CFS()->get ( 'icon_1' ); ?>">
							</div>
							<?php echo CFS()->get ( 'description_1' ); ?>
						</div>
						<div class="about-gbis-container">
							<div class="about-gbis-icon">
								<img src="<?php echo CFS()->get ( 'icon_2' ); ?>">
							</div>
							<?php echo CFS()->get ( 'description_2' ); ?>
						</div>
						<div class="about-gbis-container">
							<div class="about-gbis-icon">
								<img src="<?php echo CFS()->get ( 'icon_3' ); ?>">
							</div>
							<?php echo CFS()->get ( 'description_3' ); ?>
						</div>
						<div class="about-gbis-container">
							<div class="about-gbis-icon">
								<img src="<?php echo CFS()->get ( 'icon_4' ); ?>">
							</div>
							<?php echo CFS()->get ( 'description_4' ); ?>
						</div>
						<div class="about-gbis-container">
							<div class="about-gbis-icon">
								<img src="<?php echo CFS()->get ( 'icon_5' ); ?>">
							</div>
							<?php echo CFS()->get ( 'description_5' ); ?>
						</div>
						<?php
							// the_content();
							//
							// wp_link_pages( array(
							// 	'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'givingbackissexy' ),
							// 	'after'  => '</div>',
							// ) );
						?>
					</div><!-- .entry-content -->

					<?php if ( get_edit_post_link() ) : ?>
						<footer class="entry-footer">
							<?php
								edit_post_link(
									sprintf(
										/* translators: %s: Name of current post */
										esc_html__( 'Edit %s', 'givingbackissexy' ),
										the_title( '<span class="screen-reader-text">"', '"</span>', false )
									),
									'<span class="edit-link">',
									'</span>'
								);
							?>
						</footer><!-- .entry-footer -->
					<?php endif; ?>
				</article><!-- #post-## -->

				<!-- If comments are open or we have at least one comment, load up the comment template. -->
				<?php if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif; ?>

			<?php endwhile; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
