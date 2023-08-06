<?php
/**
 * Template Name: Template Blend Finder
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


<div class="blend-finder-upper-top-hero">

</div>

<div class="blend-finder-lower-top-hero">
	<div class="container">
		<div class="row heading-container">
			<h1 class="text-center title-text-blender-finder">
				Blend Finder
			</h1>
		</div>
	</div>
</div>

<div class="blend-finder transition-fade">

	<div class="container">
		<div class="row flex-row justify-content-center align-items-center">
			<div class="col-lg-8 col-12 pt-5 blend-finder-holder">
				<div class="individual-content-holder">
					<h2 class="pb-3 text-center">Discover your perfect coffee</h2>
					<p class="pb-3">Finding the right coffee for you has never been easier. Slide the markers on the horizontal sliders to indicate your preferences for flavour intensity, roast level, and preferred time of day to drink coffee. Adjust the sliders until you find the perfect combination that suits your taste.
					<br>
					<br>
					Once you're satisfied with your selections, click the 'Find My Blend' button, and our advanced algorithm will analyse your preferences to recommend the ideal coffee blend from our collection.</p>

					<h3 class="pb-3 text-center">Flavour Preference</h2>
					<div class="slidecontainer">
						<input type="range" min="1" max="100" value="50" class="slider" id="selected-flavour-preference">
					</div>
					<div class="label-holder">
						<div>Mild</div>
						<div>Balanced</div>
						<div>Bold</div>
					</div>
					<div>
						Selected Flavour Preference: <strong id="selected-flavour-preference-output"></strong>
					</div>

					<h3 class="pb-3 pt-4 text-center">Roast Level Preference</h2>
					<div class="slidecontainer">
						<input type="range" min="1" max="100" value="50" class="slider" id="selected-roast-level-preference">
					</div>
					<div class="label-holder">
						<div>Light</div>
						<div>Medium</div>
						<div>Dark</div>
					</div>
					<div>
						Selected Roast Level Preference: <strong id="selected-roast-level-preference-output"></strong>
					</div>

					<h3 class="pb-3 pt-4 text-center">Prefferred Time To Drink</h2>
					<div class="slidecontainer">
						<input type="range" min="1" max="100" value="50" class="slider" id="selected-time-preference">
					</div>
					<div class="label-holder">
						<div>Morning</div>
						<div>Midday</div>
						<div>Afternoon</div>
					</div>
					<div class="pb-4">
						Selected Prefferred Time of Day: <strong id="selected-time-preference-output"></strong>
					</div>
					<div class="submit-holder">
						<input type="submit" class="button" value="Find My Blend" onclick="findBestCoffeeBlend()">
					</div>
				</div>
			</div>
		</div>
	</div>

</div>

<div class="blends">

	<div id="aromatic-elixir" class="container hidden">
		<div class="row flex-row justify-content-center align-items-center">
			<div class="col-lg-8 col-12 pt-5 blend-holder">
				<div class="individual-content-holder">
					<h2 class="pb-3 text-center">Aromatic Elixir</h2>
					<div class="row">
						<div class="col-12 col-md-6 blend-image-holder">
							<div class="aromatic-elixir"></div>
						</div>
						<div class="col-12 col-md-6">
							<h3 class="pb-3">Flavour</h2>
							<div class="slidecontainer">
								<input type="range" min="1" max="100" value="70" class="slider" disabled>
								<div class="label-holder">
									<div>Mild</div>
									<div>Balanced</div>
									<div>Bold</div>
								</div>
							</div>
							<h3 class="pb-3 pt-4">Roast Level</h2>
							<div class="slidecontainer">
								<input type="range" min="1" max="100" value="60" class="slider" disabled>
								<div class="label-holder">
									<div>Light</div>
									<div>Medium</div>
									<div>Dark</div>
								</div>
							</div>
							<h3 class="pb-3 pt-4">Best Time To Drink</h2>
							<div class="slidecontainer">
								<input type="range" min="1" max="100" value="30" class="slider" disabled>
								<div class="label-holder">
									<div>Morning</div>
									<div>Midday</div>
									<div>Afternoon</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row flex-row justify-content-center align-items-center">
						<div class="col-10 pt-3">
							<div class="short-desc text-center">
								Experience the alluring blend of spicy and fragrant flavours in this medium-dark roast. Indulge in the captivating notes of warm cinnamon and nutmeg, creating a truly aromatic coffee experience.
							</div>
							<div class="read-more-holder pt-4">
							<a href="/product/aromatic-elixir/" class="button">Read More</a>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<div id="bold-bourbon" class="container hidden">
		<div class="row flex-row justify-content-center align-items-center">
			<div class="col-lg-8 col-12 pt-5 blend-holder">
				<div class="individual-content-holder">
					<h2 class="pb-3 text-center">Bold Bourbon</h2>
					<div class="row">
						<div class="col-12 col-md-6 blend-image-holder">
							<div class="bold-bourbon"></div>
						</div>
						<div class="col-12 col-md-6">
							<h3 class="pb-3">Flavour</h2>
							<div class="slidecontainer">
								<input type="range" min="1" max="100" value="90" class="slider" disabled>
								<div class="label-holder">
									<div>Mild</div>
									<div>Balanced</div>
									<div>Bold</div>
								</div>
							</div>
							<h3 class="pb-3 pt-4">Roast Level</h2>
							<div class="slidecontainer">
								<input type="range" min="1" max="100" value="90" class="slider" disabled>
								<div class="label-holder">
									<div>Light</div>
									<div>Medium</div>
									<div>Dark</div>
								</div>
							</div>
							<h3 class="pb-3 pt-4">Best Time To Drink</h2>
							<div class="slidecontainer">
								<input type="range" min="1" max="100" value="60" class="slider" disabled>
								<div class="label-holder">
									<div>Morning</div>
									<div>Midday</div>
									<div>Afternoon</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row flex-row justify-content-center align-items-center">
						<div class="col-10 pt-3">
							<div class="short-desc text-center">
								Indulge in the robust, barrel-aged flavours of this dark roast. Experience the velvety smoothness with deep chocolate undertones and a hint of oak, creating a bold and unforgettable coffee adventure.
							</div>
							<div class="read-more-holder pt-4">
							<a href="/product/bold-bourbon/" class="button">Read More</a>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<div id="exotic-escape" class="container hidden">
		<div class="row flex-row justify-content-center align-items-center">
			<div class="col-lg-8 col-12 pt-5 blend-holder">
				<div class="individual-content-holder">
					<h2 class="pb-3 text-center">Exotic Escape</h2>
					<div class="row">
						<div class="col-12 col-md-6 blend-image-holder">
							<div class="exotic-escape"></div>
						</div>
						<div class="col-12 col-md-6">
							<h3 class="pb-3">Flavour</h2>
							<div class="slidecontainer">
								<input type="range" min="1" max="100" value="80" class="slider" disabled>
								<div class="label-holder">
									<div>Mild</div>
									<div>Balanced</div>
									<div>Bold</div>
								</div>
							</div>
							<h3 class="pb-3 pt-4">Roast Level</h2>
							<div class="slidecontainer">
								<input type="range" min="1" max="100" value="90" class="slider" disabled>
								<div class="label-holder">
									<div>Light</div>
									<div>Medium</div>
									<div>Dark</div>
								</div>
							</div>
							<h3 class="pb-3 pt-4">Best Time To Drink</h2>
							<div class="slidecontainer">
								<input type="range" min="1" max="100" value="50" class="slider" disabled>
								<div class="label-holder">
									<div>Morning</div>
									<div>Midday</div>
									<div>Afternoon</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row flex-row justify-content-center align-items-center">
						<div class="col-10 pt-3">
							<div class="short-desc text-center">
								Embark on a bold and adventurous journey with this dark roast blend. Experience captivating flavors of dark chocolate and earthy undertones that transport you to faraway lands with every sip.
							</div>
							<div class="read-more-holder pt-4">
							<a href="/product/exotic-escape/" class="button">Read More</a>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<div id="herbal-infusion" class="container hidden">
		<div class="row flex-row justify-content-center align-items-center">
			<div class="col-lg-8 col-12 pt-5 blend-holder">
				<div class="individual-content-holder">
					<h2 class="pb-3 text-center">Herbal Infusion</h2>
					<div class="row">
						<div class="col-12 col-md-6 blend-image-holder">
							<div class="herbal-infusion"></div>
						</div>
						<div class="col-12 col-md-6">
							<h3 class="pb-3">Flavour</h2>
							<div class="slidecontainer">
								<input type="range" min="1" max="100" value="30" class="slider" disabled>
								<div class="label-holder">
									<div>Mild</div>
									<div>Balanced</div>
									<div>Bold</div>
								</div>
							</div>
							<h3 class="pb-3 pt-4">Roast Level</h2>
							<div class="slidecontainer">
								<input type="range" min="1" max="100" value="20" class="slider" disabled>
								<div class="label-holder">
									<div>Light</div>
									<div>Medium</div>
									<div>Dark</div>
								</div>
							</div>
							<h3 class="pb-3 pt-4">Best Time To Drink</h2>
							<div class="slidecontainer">
								<input type="range" min="1" max="100" value="10" class="slider" disabled>
								<div class="label-holder">
									<div>Morning</div>
									<div>Midday</div>
									<div>Afternoon</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row flex-row justify-content-center align-items-center">
						<div class="col-10 pt-3">
							<div class="short-desc text-center">
								Immerse yourself in the soothing and delicate experience of our light roast blend. Delight in the gentle flavours, subtle hints of aromatic herbs, and delicate floral notes that bring tranquillity and relaxation to every sip.
							</div>
							<div class="read-more-holder pt-4">
							<a href="/product/herbal-infusion/" class="button">Read More</a>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<div id="morning-boost" class="container hidden">
		<div class="row flex-row justify-content-center align-items-center">
			<div class="col-lg-8 col-12 pt-5 blend-holder">
				<div class="individual-content-holder">
					<h2 class="pb-3 text-center">Morning Boost</h2>
					<div class="row">
						<div class="col-12 col-md-6 blend-image-holder">
							<div class="morning-boost"></div>
						</div>
						<div class="col-12 col-md-6">
							<h3 class="pb-3">Flavour</h2>
							<div class="slidecontainer">
								<input type="range" min="1" max="100" value="70" class="slider" disabled>
								<div class="label-holder">
									<div>Mild</div>
									<div>Balanced</div>
									<div>Bold</div>
								</div>
							</div>
							<h3 class="pb-3 pt-4">Roast Level</h2>
							<div class="slidecontainer">
								<input type="range" min="1" max="100" value="50" class="slider" disabled>
								<div class="label-holder">
									<div>Light</div>
									<div>Medium</div>
									<div>Dark</div>
								</div>
							</div>
							<h3 class="pb-3 pt-4">Best Time To Drink</h2>
							<div class="slidecontainer">
								<input type="range" min="1" max="100" value="30" class="slider" disabled>
								<div class="label-holder">
									<div>Morning</div>
									<div>Midday</div>
									<div>Afternoon</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row flex-row justify-content-center align-items-center">
						<div class="col-10 pt-3">
							<div class="short-desc text-center">
								Energize your mornings with this vibrant, medium roast blend. Experience the invigorating flavours of citrus zest and subtle nuttiness, providing the perfect balance to kickstart your day with renewed vitality.
							</div>
							<div class="read-more-holder pt-4">
							<a href="/product/morning-boost/" class="button">Read More</a>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<div id="smooth-symphony" class="container hidden">
		<div class="row flex-row justify-content-center align-items-center">
			<div class="col-lg-8 col-12 pt-5 blend-holder">
				<div class="individual-content-holder">
					<h2 class="pb-3 text-center">Smooth Symphony</h2>
					<div class="row">
						<div class="col-12 col-md-6 blend-image-holder">
							<div class="smooth-symphony"></div>
						</div>
						<div class="col-12 col-md-6">
							<h3 class="pb-3">Flavour</h2>
							<div class="slidecontainer">
								<input type="range" min="1" max="100" value="80" class="slider" disabled>
								<div class="label-holder">
									<div>Mild</div>
									<div>Balanced</div>
									<div>Bold</div>
								</div>
							</div>
							<h3 class="pb-3 pt-4">Roast Level</h2>
							<div class="slidecontainer">
								<input type="range" min="1" max="100" value="70" class="slider" disabled>
								<div class="label-holder">
									<div>Light</div>
									<div>Medium</div>
									<div>Dark</div>
								</div>
							</div>
							<h3 class="pb-3 pt-4">Best Time To Drink</h2>
							<div class="slidecontainer">
								<input type="range" min="1" max="100" value="50" class="slider" disabled>
								<div class="label-holder">
									<div>Morning</div>
									<div>Midday</div>
									<div>Afternoon</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row flex-row justify-content-center align-items-center">
						<div class="col-10 pt-3">
							<div class="short-desc text-center">
								Delight in the soothing and balanced flavours of this medium-dark roast blend. Experience the harmonious combination of cocoa and caramel, creating a truly satisfying and exquisite coffee symphony.
							</div>
							<div class="read-more-holder pt-4">
							<a href="/product/smooth-symphony/" class="button">Read More</a>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<div id="spiced-awakening" class="container hidden">
		<div class="row flex-row justify-content-center align-items-center">
			<div class="col-lg-8 col-12 pt-5 blend-holder">
				<div class="individual-content-holder">
					<h2 class="pb-3 text-center">Spiced Awakening</h2>
					<div class="row">
						<div class="col-12 col-md-6 blend-image-holder">
							<div class="spiced-awakening"></div>
						</div>
						<div class="col-12 col-md-6">
							<h3 class="pb-3">Flavour</h2>
							<div class="slidecontainer">
								<input type="range" min="1" max="100" value="60" class="slider" disabled>
								<div class="label-holder">
									<div>Mild</div>
									<div>Balanced</div>
									<div>Bold</div>
								</div>
							</div>
							<h3 class="pb-3 pt-4">Roast Level</h2>
							<div class="slidecontainer">
								<input type="range" min="1" max="100" value="50" class="slider" disabled>
								<div class="label-holder">
									<div>Light</div>
									<div>Medium</div>
									<div>Dark</div>
								</div>
							</div>
							<h3 class="pb-3 pt-4">Best Time To Drink</h2>
							<div class="slidecontainer">
								<input type="range" min="1" max="100" value="40" class="slider" disabled>
								<div class="label-holder">
									<div>Morning</div>
									<div>Midday</div>
									<div>Afternoon</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row flex-row justify-content-center align-items-center">
						<div class="col-10 pt-3">
							<div class="short-desc text-center">
								Experience the warming and refreshing flavours of this medium roast blend. Delight in the invigorating notes of cinnamon and nutmeg, creating a memorable and revitalizing coffee journey.
							</div>
							<div class="read-more-holder pt-4">
							<a href="/product/spiced-awakening/" class="button">Read More</a>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<div id="velvet-dream" class="container hidden">
		<div class="row flex-row justify-content-center align-items-center">
			<div class="col-lg-8 col-12 pt-5 blend-holder">
				<div class="individual-content-holder">
					<h2 class="pb-3 text-center">Velvet Dream</h2>
					<div class="row">
						<div class="col-12 col-md-6 blend-image-holder">
							<div class="velvet-dream"></div>
						</div>
						<div class="col-12 col-md-6">
							<h3 class="pb-3">Flavour</h2>
							<div class="slidecontainer">
								<input type="range" min="1" max="100" value="40" class="slider" disabled>
								<div class="label-holder">
									<div>Mild</div>
									<div>Balanced</div>
									<div>Bold</div>
								</div>
							</div>
							<h3 class="pb-3 pt-4">Roast Level</h2>
							<div class="slidecontainer">
								<input type="range" min="1" max="100" value="30" class="slider" disabled>
								<div class="label-holder">
									<div>Light</div>
									<div>Medium</div>
									<div>Dark</div>
								</div>
							</div>
							<h3 class="pb-3 pt-4">Best Time To Drink</h2>
							<div class="slidecontainer">
								<input type="range" min="1" max="100" value="10" class="slider" disabled>
								<div class="label-holder">
									<div>Morning</div>
									<div>Midday</div>
									<div>Afternoon</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row flex-row justify-content-center align-items-center">
						<div class="col-10 pt-3">
							<div class="short-desc text-center">
								Immerse yourself in the creamy and subtle flavours of this light roast blend. Indulge in its velvety smoothness, delicate hints of toasted nuts, and a gentle sweetness that create a dream-like and blissful coffee sensation.
							</div>
							<div class="read-more-holder pt-4">
							<a href="/product/velvet-dream/" class="button">Read More</a>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>

</div>

<div class="go-back">
	<div class="container">
		<div class="row flex-row justify-content-center align-items-center">
			<div class="go-back-holder hidden">
			<button type="submit" class="button my-4" onclick="startOver()">
				<i class="fa fa-arrow-left"></i> Start Over
			</button>
			</div>
		</div>
	</div>
</div>



<div class="visit-our-shop pt-5">
	<div class="container extra">
		<div class="row">
			<div class="col-12 col-lg-7 order-1 order-lg-1 left">
				<h2 class="pb-3">Browse our full range</h2>
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
