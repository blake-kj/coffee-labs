<?php
/**
 * Template Name: Template Contact Us
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );

if ( is_front_page() ) {
	get_template_part( 'global-templates/hero' );
}

$wrapper_id = 'full-width-page-wrapper';
if ( is_page_template( 'page-templates/no-title.php' ) ) {
	$wrapper_id = 'no-title-page-wrapper';
}
?>


<div class="contact-upper-top-hero">

</div>

<div class="contact-lower-top-hero">
	<div class="container">
		<div class="row heading-container">
			<h1 class="text-center">
				Conact Us
			</h1>
		</div>
	</div>
</div>

<div class="contact-holder">

	<div class="container">
		<div class="row flex-row justify-content-center align-items-center">
			<div class="col-lg-8 col-12 pt-5 contact-block-holder">
				<div class="individual-content-holder">
					<div class="container">
						<div class="row">
							<div class="col-12 col-lg-6">
								<h3>Phone:</h3>
								<p class="pb-3"><a href="tel:+442080000000">0208 000 0000</a></p>
								<h3>Email:</h3>
								<p class="pb-3"><a href="mailto:info@joppawebs.co.uk">info@joppawebs.co.uk</a></p>
								<h3>Social:</h3>
								<div class="social-holder pb-3">
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
							<div class="col-12 col-lg-6">
								<?php echo do_shortcode( '[contact-form-7 id="50" title="Contact form 1"]' ); ?>
							</div>
						</div>
					</div>

					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d39520.7536496844!2d-1.2887870325162694!3d51.750462235775515!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48713380adc41faf%3A0xc820dba8cb547402!2sOxford!5e0!3m2!1sen!2suk!4v1691166058502!5m2!1sen!2suk" height="400" width="100%" style="border:0; border-radius:25px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

					
				</div>
			</div>
		</div>
	</div>

</div>



<div class="visit-our-shop pt-5">
	<div class="container extra">
		<div class="row">
			<div class="col-12 col-lg-7 order-1 order-lg-1 left">
				<h2 class="pb-3">Visit our shop</h2>
				<p class="pb-3">
				With an unwavering commitment to quality, innovation, and sustainability, we aim to revolutionize the industry, pushing the boundaries of knowledge, techniques, and flavours.
				<br>
				<br>
				Inspired by our founder Juan Hernandez's unwavering dedication, we strive to craft each cup into a masterpiece, blending the science of coffee with our passionate craftsmanship.
				<br>
				<br>
				Join us on this journey as we shape the future of coffee, driven by our vision to master the science of coffee and create extraordinary experiences that inspire and delight coffee lovers worldwide.
				</p>
				<a href="/shop/" class="button">Browse Our Coffee</a>
			</div>
			<div class="col-12 col-lg-5 order-2 order-lg-2 right"></div>
		</div>
	</div>
</div>

<!-- <div class="wrapper" id="<?php echo $wrapper_id; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- ok. ?>">

	<div class="<?php echo esc_attr( $container ); ?>" id="content">

		<div class="row">

			<div class="col-md-12 content-area" id="primary">

				<main class="site-main" id="main" role="main">

					<?php
					while ( have_posts() ) {
						the_post();
						get_template_part( 'loop-templates/content', 'page' );

						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) {
							comments_template();
						}
					}
					?>

				</main>

			</div><!-- #primary -->

		</div><!-- .row -->

	</div><!-- #content -->

</div> <!-- #<?php echo $wrapper_id; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- ok. ?> -->

<?php
get_footer();
