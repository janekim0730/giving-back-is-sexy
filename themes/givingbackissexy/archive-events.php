<?php
/**
 * Template Name: Archive Events
 *
 * @package Giving_Back_Is_Sexy
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

	<?php if ( have_posts() ) : ?>

    <h1>Events</h1>



<?php endif; ?>

		</main>
	</div>

<?php
get_footer();
