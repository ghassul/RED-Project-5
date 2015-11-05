<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">


				<div class="company_info container">

					<div class="contact">
						<h3>Contact</h3>
						<p>
							<i class="fa fa-envelope"></i>
							<a href="">info@leredbread.com</a>
						</p>
						<p>
							<i class="fa fa-phone"></i>
							<a href="">(555) 343 456 7891</a>
						</p>
						<div>
							<i class="fa fa-facebook-square"></i>
							<i class="fa fa-twitter-square"></i>
							<i class="fa fa-google-plus-square"></i>
						</div>
					</div>

					<img src="<?php echo get_template_directory_uri() . "/assets/images/lrb-logo-white.svg"?>" class="footer_logo" alt="le red bread logo">

					<div class="hours">
						<h3>Business Hours</h3>
						<p><span>Monday-Friday:</span> 9am to 5pm</p>
						<p><span>Saturday:</span> 10am to 2pm</p>
						<p><span>Sunday:</span> Closed</p>
					</div>

				</div>

				<div class="copyright_container">
					<p>Copyright &copy 2015 Le Red Bread</p>
				</div>

			</footer><!-- #colophon -->
		</div><!-- #page -->



		<?php wp_footer(); ?>

	</body>
</html>
