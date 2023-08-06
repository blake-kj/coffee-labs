<?php
/**
 * Template Name: Template Home
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


<div class="home-top-hero">
	<div class="container">
		<div class="row">
			<div class="col-12 col-lg-6 offset-lg-5">
				<h1 class="pb-2">We've mastered the science of coffee</h1>
				<h2 class="hero-sub-heading">Find your perfect coffee experience with our scientifically advanced blends</h2>
			</div>
		</div>
	</div>
</div>

<div class="our-history">
	<div class="container extra">
		<div class="row">
			<div class="col-12 col-lg-5 order-2 order-lg-1 left"></div>
			<div class="col-12 col-lg-7 order-1 order-lg-2 right">
				<h2 class="pb-3">Our History</h2>
				<p class="pb-3">
				Nestled amidst the verdant hills of Salento, Colombia, Coffee Labs' journey began as a humble pursuit of passion and excellence. In the early days, our founder, Juan Hernandez, immersed himself in the rich coffee culture of this enchanting region. 
				</br>
				</br>
				Juan developed an unwavering commitment to crafting the perfect cup of coffee. Learning the secrets and nuances that make each bean unique. His relentless pursuit of perfection laid the foundation for what would become Coffee Labs—a brand driven by a relentless passion for quality and innovation.
				</p>
				<a href="/our-history/" class="button">Learn More</a>
			</div>
		</div>
	</div>
</div>

<div class="our-coffee-blends">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 col-lg-8 pt-5 pb-5">
				<h2 class="text-center pb-2">Our Coffee Blends</h2>
				<p class="text-center">Each of our eight meticulously crafted offerings represents a unique sensory journey, inviting you to explore a realm of diverse flavours, aromas, and intensities. From the soothing and delicate notes of Herbal Infusion to the invigorating and vibrant Morning Boost, each blend is a testament to our commitment to quality and the art of coffee. 
				</br>
				</br>
				Indulge in the captivating aromas, harmonious profiles, and exquisite taste experiences that await you with every cup. Discover your perfect brew as we unveil the symphony of flavours that define Coffee Labs' exceptional collection of coffee blends.</p>
			</div>
		</div>

		<div class="row">
		<?php
			$args = array(
				'post_type' => 'product',
				'orderby' => 'title',
				'order' => 'ASC',
				'posts_per_page' => 10,
			);
			$index = 0;
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post(); global $product;
			$index++;
		?>



			<div class="col-lg-4 col-md-6 col-12 individual-item">
				<div class="item-wrapper">
				<?php
				if($product->get_image_id()){
				?>
				<a href="<?php the_permalink();?>"><img src="<?php echo wp_get_attachment_image_src($product->get_image_id(), 'full')[0];?>" alt="Product placeholder" width=100%></a>
				<?php
					}
				?>
				<div class="item-info-holder">
					<a href="<?php the_permalink();?>">
						<h3><?php the_title();?></h3>
					</a>
					<p><?php echo $product->get_short_description(); ?></p>
					
					<a href="<?php the_permalink();?>" class="button">Read More</a>
				</div>
				</div>


			</div>



		<?php endwhile; ?>
		<?php wp_reset_query(); ?>

		<div class="col-lg-4 col-md-12 col-12 individual-item">
			<div class="item-wrapper final-item">
					<h3>Can’t decide?<br><br> use our scientific formula to find the perfect coffee for you!</h3>
					<a href="/blend-finder/" class="button mt-4">Find My Coffee</a>
			</div>
		</div>

		</div>
	</div>
</div>

<div class="our-vision pt-5">
	<div class="container extra">
		<div class="row">
			<div class="col-12 col-lg-7 order-1 order-lg-1 left">
				<h2 class="pb-3">Our Vision</h2>
				<p class="pb-3">
				With an unwavering commitment to quality, innovation, and sustainability, we aim to revolutionize the industry, pushing the boundaries of knowledge, techniques, and flavours.
				<br>
				<br>
				Inspired by our founder Juan Hernandez's unwavering dedication, we strive to craft each cup into a masterpiece, blending the science of coffee with our passionate craftsmanship.
				<br>
				<br>
				Join us on this journey as we shape the future of coffee, driven by our vision to master the science of coffee and create extraordinary experiences that inspire and delight coffee lovers worldwide.
				</p>
				<a href="/our-history/" class="button">Learn More</a>
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
