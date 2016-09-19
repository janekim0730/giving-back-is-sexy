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
				<header class="event-header">
					<?php if ( has_post_thumbnail() ) : ?>
					<?php the_post_thumbnail( 'large' ); ?>
					<?php endif; ?>
				</header><!---header-->


</article>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
