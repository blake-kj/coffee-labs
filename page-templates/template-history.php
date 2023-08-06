<?php
/**
 * Template Name: Template History
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


<div class="history-upper-top-hero">

</div>

<div class="history-lower-top-hero">
	<div class="container">
		<div class="row heading-container">
			<h1 class="text-center">
				Our History
			</h1>
		</div>
	</div>
</div>

<div class="history-story">

	<div class="container">
		<div class="row flex-row justify-content-center align-items-center">
			<div class="col-lg-8 col-12 pt-5 story-holder">
				<div class="image-holder">
					<div class="image-1"></div>
				</div>
				<div class="individual-content-holder">
					<h2 class="pb-3 text-center">Inception amidst the Colombian Hills of salento</h1>
					<p class="pb-3">Nestled amidst the verdant hills of Salento, Colombia, Coffee Labs' journey began as a humble pursuit of passion and excellence. In the early days, our founder, Juan Hernandez, immersed himself in the rich coffee culture of this enchanting region. Inspired by the aroma and the vibrant community of coffee growers, Juan embarked on a quest to unlock the secrets of crafting the perfect cup of coffee.
					<br>
					<br>
					Driven by an insatiable curiosity, Juan delved into the intricacies of coffee cultivation, harvesting, and roasting. He learned the secrets and nuances that make each bean unique, embracing the traditions passed down through generations of coffee farmers. Juan's relentless pursuit of perfection laid the foundation for what would become Coffee Labs—a brand driven by a relentless passion for quality and innovation.</p>
				</div>
			</div>
			<div class="col-lg-8 col-12 pt-5 story-holder">
				<div class="image-holder">
					<div class="image-2"></div>
				</div>
				<div class="individual-content-holder">
					<h2 class="pb-3 text-center">From Passion to Perfection</h1>
					<p class="pb-3">Juan's unwavering commitment to excellence propelled Coffee Labs forward. Armed with a profound understanding of the science and artistry of coffee, he established a small roasting lab where he meticulously experimented with various techniques and blends. Each cup was a canvas for his creativity, and his passion fueled the pursuit of perfection.
					<br>
					<br>
					Word of Juan's exceptional coffee began to spread, captivating the palates of coffee enthusiasts and connoisseurs. Coffee Labs garnered recognition for its commitment to quality, delivering a taste experience that transcended expectations. As the brand grew, Juan assembled a team of like-minded individuals who shared his vision for crafting extraordinary coffee.</p>
				</div>
			</div>
			<div class="col-lg-8 col-12 pt-5 story-holder">
				<div class="image-holder">
					<div class="image-3"></div>
				</div>
				<div class="individual-content-holder">
					<h2 class="pb-3 text-center">Innovation and Growth</h1>
					<p class="pb-3">With each passing year, Coffee Labs' dedication to innovation and quality drove the brand's expansion. Building upon the foundation of Juan's expertise, the team explored new roasting techniques, experimented with unique blends, and refined their understanding of coffee science. They forged partnerships with coffee farmers across the globe, ensuring the sourcing of the finest beans from sustainable and ethical practices.
					<br>
					<br>
					As the aroma of Coffee Labs' exceptional brews wafted through the air, the brand's reputation continued to grow. From humble beginnings, Coffee Labs flourished into a beloved name within the coffee industry. The opening of their first storefront became a milestone, where coffee enthusiasts gathered to indulge in the symphony of flavours meticulously crafted by Juan and his team.</p>
				</div>
			</div>
			<div class="col-lg-8 col-12 pt-5 story-holder">
				<div class="image-holder">
					<div class="image-4"></div>
				</div>
				<div class="individual-content-holder">
					<h2 class="pb-3 text-center">Shaping the future of coffee</h1>
					<p class="pb-3">Today, Coffee Labs stands as a beacon of excellence and innovation in the coffee world. With an unwavering commitment to quality, innovation, and sustainability, they aim to revolutionize the industry and push the boundaries of knowledge, techniques, and flavours. Inspired by Juan Hernandez's unwavering dedication, the team at Coffee Labs blends the science of coffee with their passionate craftsmanship, ensuring each cup is a masterpiece that delights and inspires.
					<br>
					<br>
					Looking ahead, Coffee Labs envisions a future where coffee becomes more than a beverage, but a gateway to extraordinary experiences. Guided by their vision to master the science of coffee, they continue to shape the future of the industry. Join them on this remarkable journey as they invite coffee lovers worldwide to indulge in the artistry and precision that define Coffee Labs' exceptional blends.</p>
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
