<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Giving_Back_Is_Sexy
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="event-info-container site-main" role="main">

			<header class="page-header">
				<h1 class="event-tax-title">Events</h1>
				<?php
					// the_archive_title( '<h1 class="page-title">', '</h1>' );
					// the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->

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

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
