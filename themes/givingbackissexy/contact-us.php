<?php
/**
 * The template for displaying Contact Us page.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Giving_Back_Is_Sexy
 * Template Name: Contact Us
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main container" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>
					<header class="entry-header container">
						<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
					</header><!-- .entry-header -->

					<div class="entry-content container">
						<div class="contact-container">
						  <img class="contact-icon" src="<?php echo CFS()->get( 'mail_icon' ); ?>" alt="mail icon"/>
							<?php echo CFS()->get( 'e_mail' ); ?>
						</div>
						<div class="contact-container">
							<img class="contact-icon" src="<?php echo CFS()->get( 'phone_icon' ); ?>" alt="phone icon"/>
							<a href="tel:16048625588"><?php echo CFS()->get( 'phone_number' ); ?></a>
						</div>
						<?php
							the_content();

							wp_link_pages( array(
								'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'givingbackissexy' ),
								'after'  => '</div>',
							) );
						?>
					</div><!-- .entry-content -->

			<?php endwhile; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
