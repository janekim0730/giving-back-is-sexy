<?php
/**
 * The template for displaying the footer.
 *
 * @package Giving_Back_Is_Sexy
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="footer-info">

			<div class="social-networks">
				<p>connect with us</p>
				<span class="youtube-icon"><a href="https://m.youtube.com/watch?feature=youtu.be&v=4UhKia60NeI" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></span>
				<span class="linkedin-icon"><a href="https://ca.linkedin.com/in/genicca-whitney-4b588a43" target="_blank"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></span>
				<span class="twitter-icon"><a href="https://twitter.com/geniccadotcom" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></span>
				<span class="facebook-icon"><a href="https://www.facebook.com/geniccadotcom" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></span>
				<span class="instagram-icon"><a href="https://www.instagram.com/geniccadotcom" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></span>
			</div>

     <div class="menu-wrapper">
				<div class="footer-menus">
				 <?php wp_nav_menu( array( 'menu' => 'footer' ) ); ?>
				</div>

				<div class="go-top">
					<a class="top-wrapper" href="#top" id="smoothup" title="Back to top"><img class="top-button" src="<?php echo get_template_directory_uri()?>/assets/images/icons/go-top-button.png" alt="go-to-top button"></a>
				</div>
		   </div>
	   </div>

			<p class="copyright">Copyright &copy; <?php the_date('Y'); ?> Cory Manson<p>

<?php wp_footer(); ?>
	<!-- <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/build/js/footer.min.js"></script> -->
</body>
</html>
