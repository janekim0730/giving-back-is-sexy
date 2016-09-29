<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Giving_Back_Is_Sexy
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
					<h1 class="page-title">404</h1>
					<p class="error-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'givingbackissexy' ); ?></p>
					<p class="error-content">Either something went wrong or the page doesn’t exist anymore</p>
					<a class="return-home" href="<?php echo get_home_url(); ?>">Return Home</a>
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
