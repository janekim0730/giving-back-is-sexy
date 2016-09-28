<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Giving_Back_Is_Sexy
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<div class="hero">
			<p>Step into your</p>
			<img src="<?php echo get_template_directory_uri()?>/assets/images/sexy-gold-text.png" alt="sexy">
			<p>and give back</p>
		</div>
		<!--end hero container-->

		<div class="logo container">
			<img src="<?php echo get_template_directory_uri()?>/assets/images/logos/logo.png" alt="sexy">
		</div>

		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>

			<?php endif; ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header">
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

						<a class="learn-more" href="<?php echo get_site_url(); ?>/givingbackissexy">Learn More</a>


						<!-- Grabs the form from the contact page -->
						<?php $id = 17; $p = get_page($id); echo apply_filters('the_content', $p->post_content); ?>

					</div><!-- .entry-content -->

				</article><!-- #post-## -->

			<?php endwhile; ?>

		<?php endif; ?>

		<?php
		    $term = get_queried_object();
		    $args =array(
		                 'post_type' => 'events',
		                 'posts_per_page' =>4,
		                 'tax_query' =>
		                         array(
		                               array(
		                                     'taxonomy' => 'upcoming-events',
		                  
		                                     'terms'    => $term->name,
		                                     ),
		                               ),
		                  );
		  $loop = new WP_Query( $args );
		  if($loop->have_posts()):while ( $loop->have_posts() ): $loop->the_post();
		the_title();
		the_content();
		endwhile;
		endif;
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
