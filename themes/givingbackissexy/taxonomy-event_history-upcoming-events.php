<?php
/**
 * Template Name: Taxonomy Upcoming Events
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Giving_Back_Is_Sexy
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">



    <div class="page-header">
			<h1 class="page-header-title"><?php single_term_title(); ?></h1>
			<p><?php echo term_description(); ?></p>
		</div>
		<?php echo 'hi'?>



		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
