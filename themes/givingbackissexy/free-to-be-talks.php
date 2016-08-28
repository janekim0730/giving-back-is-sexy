<?php
/**
 * Template Name: Free To Be Talks
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
*
 *
 * @package Giving_Back_Is_Sexy
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<div class="freetobe-container">
			<?php if ( has_post_thumbnail() ) : ?>
				<div class="freetobe-image"><?php the_post_thumbnail( 'full' ); ?></div>
			<?php endif; ?>

			<?php
     while ( have_posts() ) : the_post(); ?>
        <div class="freetobe-content">
            <?php the_content(); ?>
        </div>
    <?php
    endwhile;
    wp_reset_query();
    ?>
	</div>

	  <img class="freetobe-girls" src="<?php echo CFS()->get( 'talksgirlsimage' ); ?>"/>

	  <h2 class="vision-title">Our Vision</h2>
		<div class="our-vision"><?php echo CFS()->get( 'our_vision' ); ?></div>

		<img class="freetobe-kids" src="<?php echo CFS()->get( 'talkskidsimage' ); ?>"/>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
