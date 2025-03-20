<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ibsi
 */

?>

<footer class="site-footer">
<div class="container footer-container">
	<div class="footer-content">
		<div class="footer-sec-1">
			<a href=""><img src="<?php echo get_template_directory_uri().'/assets/images/logo-alt-group.png'?>"></a>
		</div>
		<div class="footer-sec-2">
			<div class="footer-icons">
			<div>
				<a href=""><img src="<?php echo get_template_directory_uri().'/assets/images/icon-linkedin.png'?>"></a>
			</div>
			<div>
			<a href="">	<img src="<?php echo get_template_directory_uri().'/assets/images/icon-facebook.png'?>"></a>
			</div>
			<div>
				<a href=""><img src="<?php echo get_template_directory_uri().'/assets/images/icon-twitter.png'?>"></a>
			</div>
			<div>
				<a href=""><img src="<?php echo get_template_directory_uri().'/assets/images/icon-youtube.png'?>"></a>
			</div>
			</div>
			<div class="footer-sec-3">
				<div class="footer-links">
					<ul>
						<li>
							<a href="">Blogs</a>
						</li>
						<li>
							<a href="">Careers</a>
						</li>
						<li>
							<a href="">Company</a>
						</li>
						<li>
							<a href="">Investers</a>
						</li>
						<li>
							<a href="">Newsletters</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>

</footer>
</div><!-- #page -->
<!-- bootstrap -->
<script src="<?php echo get_template_directory_uri().'/assets/js/popper.min.js'?>"></script>
<script src="<?php echo get_template_directory_uri().'/assets/plugins/bootstrap5/js/bootstrap.min.js'?>"></script>
<!-- javascript -->
<script src="<?php echo get_template_directory_uri().'/assets/js/jquery-3.2.1.min.js'?>"></script>
<script src="<?php echo get_template_directory_uri().'/assets/js/custom.js'?>"></script>
<!-- slick slider -->
<script type="text/javascript" src="<?php echo get_template_directory_uri().'/assets/plugins/slick/slick/slick.min.js'?>"></script>
<?php wp_footer(); ?>
</body>
</html>