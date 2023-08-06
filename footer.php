<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">
	<div class="newsletter-signup">
		<div class="container">
			<div class="row justify-content-center align-items-center">
				<div class="col-10 col-md-8 col-lg-6 newsletter-form">
					<h3>Sign Up To Our Newsletter</h3>
					<p>Be the first to hear about or new blends and stay up to date with the coffee labs team</p>
					<?php echo do_shortcode( '[contact-form-7 id="37" title="Contact form 1"]' ); ?>
					
				</div>
			</div>
		</div>
	</div>
	<div class="container lower-footer">
		<div class="row pt-5 pb-5">
			<div class="col-12 col-lg-3">
			<a class="logo-holder" href="/">
					<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo">
				</a>
			</div>
				<div class="col-12 col-lg-3 contact-holder pt-4">
					<div class="link-holder">
						<a href="mailto:info@joppawebs.co.uk">info@joppawebs.co.uk</a>
						<a href="tel:+442080000000">0208 000 0000</a>
					</div>
					<div class="social-holder">
						<a href="/">
							<i class="fa fa-instagram"></i>
						</a>
						<a href="/">
							<i class="fa fa-facebook"></i>
						</a>
						<a href="/">
							<i class="fa fa-twitter"></i>
						</a>
					</div>
				</div>
				<div class="col-12 col-lg-2 pt-4">
					<a class="footer-menu-item" href="/">Home</a>
					<a class="footer-menu-item" href="/our-history/">History</a>
					<a class="footer-menu-item" href="/shop/">Blends</a>
				</div>
				<div class="col-12 col-lg-2 pt-4">
					<a class="footer-menu-item" href="/blend-finder/">Blend Finder</a>
					<a class="footer-menu-item" href="/shop/">Store</a>
					<a class="footer-menu-item" href="/contact-us/">Contact</a>
				</div>
				<div class="col-12 col-lg-2 pt-4">
					<a class="footer-menu-item" href="/">Terms and Conditions</a>
					<a class="footer-menu-item" href="/">Returns Policy</a>
					<a class="footer-menu-item" href="/">Privacy Policy</a>
				</div>
		</div><!-- .row -->
	</div><!-- .container(-fluid) -->
</div><!-- #wrapper-footer -->

<?php // Closing div#page from header.php. ?>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>

