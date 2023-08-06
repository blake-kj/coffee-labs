<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

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

<div class="shop-upper-top-hero">

</div>

<div class="shop-lower-top-hero">
	<div class="container">
		<div class="row heading-container">
			<h1 class="text-center">
				Our Store
			</h1>
		</div>
	</div>
</div>




<div class="our-coffee-blends-shop">
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



			<div class="col-12 individual-item">
				<div class="row item-wrapper">
					<div class="col-lg-4 col-md-5 col-12 image-holder">
					<?php
					if($product->get_image_id()){
					?>
					<a href="<?php the_permalink();?>"><img src="<?php echo wp_get_attachment_image_src($product->get_image_id(), 'full')[0];?>" alt="Product placeholder" width=100% height="100%" style="height: 100%; object-fit: cover;" ></a>
					<?php
						}
					?>
					</div>
					<div class="col-lg-8 col-md-7 col-12">
						<div class="item-info-holder">

							<a href="<?php the_permalink();?>">
								<h3><?php the_title();?></h3>
							</a>
							<p><?php echo $product->get_description(); ?></p>
							<h3>£<?php echo$product->get_price(); ?></h3>


							<a href="<?php the_permalink();?>" class="button mt-2">Read More</a>

						</div>
					</div>
				</div>
			</div>
		<?php endwhile; ?>
		<?php wp_reset_query(); ?>

		<div class="col-12 individual-item" style="padding-left: 10px; padding-right: 10px;">
			<div class="item-wrapper final-item">
					<h3>Can’t decide?<br><br> use our scientific formula to find the perfect coffee for you!</h3>
					<a href="/blend-finder/" class="button mt-4">Find My Coffee</a>
			</div>
		</div>

		</div>
	</div>
</div> 

<div class="read-our-story pt-5">
	<div class="container extra">
		<div class="row">
			<div class="col-12 col-lg-7 order-1 order-lg-1 left">
				<h2 class="pb-3">Read Our Story</h2>
				<p class="pb-3">
				With an unwavering commitment to quality, innovation, and sustainability, we aim to revolutionize the industry, pushing the boundaries of knowledge, techniques, and flavours.
				<br>
				<br>
				Inspired by our founder Juan Hernandez's unwavering dedication, we strive to craft each cup into a masterpiece, blending the science of coffee with our passionate craftsmanship.
				<br>
				<br>
				Join us on this journey as we shape the future of coffee, driven by our vision to master the science of coffee and create extraordinary experiences that inspire and delight coffee lovers worldwide.
				</p>
				<a href="/our-history/" class="button">Full Story</a>
			</div>
			<div class="col-12 col-lg-5 order-2 order-lg-2 right"></div>
		</div>
	</div>
</div>

<!-- #<?php echo $wrapper_id; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- ok. ?> -->

<?php
get_footer();


