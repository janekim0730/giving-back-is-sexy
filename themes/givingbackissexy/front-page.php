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
						<div class="intro">
						<?php
							the_content();

							wp_link_pages( array(
								'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'givingbackissexy' ),
								'after'  => '</div>',
							) );
						?>
						</div>

						<a class="learn-more" href="<?php echo get_site_url(); ?>/givingbackissexy">Learn More</a>
			<?php endwhile; ?>

		<?php endif; ?>

						<!-- Upcoming Events Loop -->

						<div class="event-info-container">
							<?php
							/*
							 * Loop through Categories and Display Posts within
							 */
							$post_type = 'events';

							// Get all the taxonomies for this post type
							$taxonomies = get_object_taxonomies( array( 'post_type' => $post_type ) );

							foreach( $taxonomies as $taxonomy ) :

							    // Gets every "category" (term) in this taxonomy to get the respective posts
							    $terms = get_terms($taxonomy );

							    foreach( $terms as $term ) : ?>

							    <h2 class="event-tax-title"> <?php echo $term->name; ?></h2>

							        <?php
							        $args = array(
							                'post_type' => $post_type,
							                'posts_per_page' => -1,  //show all posts
							                'tax_query' => array(
							                    array(
							                        'taxonomy' => $taxonomy,
							                        'field' => 'slug',
							                        'terms' => $term->slug,

							                    )
							                )

							            );
							        $posts = new WP_Query($args);

							        if( $posts->have_posts() ): while( $posts->have_posts() ) : $posts->the_post(); ?>

							                   <!-- <h2><?php  echo get_the_title(); ?></h2> -->

																 <div class="event-info-wrapper">
						 											<?php
						 														$dates = CFS() -> get ('event_date');
						 														foreach ($dates as $date) :
						 														?>
						 														<div class="event-info">
						 															<div class="event-date"><span class="event-week"><?php echo $date['event_day_of_the_week']; ?></span>
						 															<span class="style-line"></span>
						 															<span class="event-month"><?php echo $date['event_month']; ?></span>
						 															<span class="event-day"><?php echo $date['event_day']; ?></span>
						 															<span class="event-year"><?php echo $date['event_year']; ?></span>
						 															</div>
						 															<!--end event-date-->
						 														</div>
						 														<!--end event-info-->
						 											<?php endforeach; ?>

						 			            <div class="event-info-right">
						 										<div class="event-right-content">
						 											 <p><?php the_title(); ?></p>
						 											<?php
						 														$locations = CFS() -> get ('event_location');
						 														foreach ($locations as $location) :
						 														?>
						 														<div class="event-location">
						 															<span class="event-place"><?php echo $location['event_place']; ?></span>
						 															<span class="event-city"><?php echo $location['event_city']; ?></span>
						 														</div>
						 														<!--end event-location-->
						 											<?php endforeach; ?>
						 										</div>
						 										<!--end event-right-content-->
						 										<div class="external-link"><?php echo CFS()->get( 'ticket_external_link' ); ?></div>
						 									</div>
						 									<!--end event-info-right-->
						 								</div>
						 								<!--end event-info-wrapper-->


							        <?php endwhile; endif; ?>

							    <?php endforeach;

							endforeach; ?>
						</div>

						<!-- //End Upcoming Events Loop -->
						<!-- Grabs the form from the contact page -->
						<?php $id = 17; $p = get_page($id); echo apply_filters('the_content', $p->post_content); ?>

					</div><!-- .entry-content -->

				</article><!-- #post-## -->



		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
