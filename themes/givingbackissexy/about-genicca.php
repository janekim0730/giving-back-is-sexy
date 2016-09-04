<?php
/**
 *
 * Template Name: About Genicca
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Giving_Back_Is_Sexy
 *
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main container" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

						<div class="logo-wrapper"><a href="http://www.genicca.com" target="_blank"><img src="<?php echo CFS()->get ( 'logo_image' ); ?>"></a>
						<img class="profile-photo" src="<?php echo CFS()->get ( 'profile_photo' ); ?>">
					  </div>

					<header class="entry-header container">
						<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
					</header><!-- .entry-header -->

					<div class="entry-content container">
						<?php
							the_content();

							wp_link_pages( array(
								'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'givingbackissexy' ),
								'after'  => '</div>',
							) );
						?>
					</div><!-- .entry-content -->

				</div><!-- #post-## -->
			<?php endwhile; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
