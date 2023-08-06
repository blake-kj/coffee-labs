<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     1.6.4
 */

 defined( 'ABSPATH' ) || exit;

 global $product;

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
 
 <?php while ( have_posts() ) : ?>
			<?php the_post(); ?>

 <div class="shop-upper-top-hero">
 
 </div>
 
 <div class="shop-lower-top-hero">
	 <div class="container">
		 <div class="row heading-container">
			 <h1 class="text-center">
			 	<?php the_title();?>
			 </h1>
		 </div>
	 </div>
 </div>

 <div class="container single-product-content">
 	<div class="row flex-row justify-content-center align-items-center">
		<div class="col-lg-8 col-12 pt-5 pb-5">



			<div class="individual-content-holder">
			<div class="individual-content-holder-upper">
			<?php
					if (has_post_thumbnail()) {
						the_post_thumbnail();
					}
				?>
				</div>
				<div class="col-12 individual-content-holder-lower">

					<h3 class="pb-3 text-center">Flavour</h2>
					<div class="slidecontainer">
						<input type="range" min="1" max="100" value="<?php
echo get_post_meta($post->ID, 'flavour', true); 
?>" class="slider" disabled>
						<div class="label-holder">
							<div>Mild</div>
							<div>Balanced</div>
							<div>Bold</div>
						</div>
					</div>
					<h3 class="pb-3 pt-4 text-center">Roast Level</h2>
					<div class="slidecontainer">
						<input type="range" min="1" max="100" value="<?php
echo get_post_meta($post->ID, 'roast-level', true); 
?>" class="slider" disabled>
						<div class="label-holder">
							<div>Light</div>
							<div>Medium</div>
							<div>Dark</div>
						</div>
					</div>
					<h3 class="pb-3 pt-4 text-center">Best Time To Drink</h2>
					<div class="slidecontainer">
						<input type="range" min="1" max="100" value="<?php
echo get_post_meta($post->ID, 'drink-time', true); 
?>" class="slider" disabled>
						<div class="label-holder">
							<div>Morning</div>
							<div>Midday</div>
							<div>Afternoon</div>
						</div>
					</div>
					<div class="row flex-row justify-content-center align-items-center">
						<div class="short-desc text-center pt-5">
							<p><?php echo $product->get_description(); ?></p>
						</div>
						<div class="add-to-basket-holder">
						<?php
						// Display quantity input field
						woocommerce_quantity_input(array(
							'min_value'   => apply_filters('woocommerce_quantity_input_min', 1, $product),
							'max_value'   => apply_filters('woocommerce_quantity_input_max', $product->get_max_purchase_quantity(), $product),
							'input_value' => isset($_POST['quantity']) ? wc_stock_amount($_POST['quantity']) : 1,
						));

						// Display "Add to Cart" button
						echo apply_filters('woocommerce_loop_add_to_cart_link',
							sprintf('<a href="%s" data-quantity="%s" class="button %s" %s>%s</a>',
								esc_url($product->add_to_cart_url()),
								esc_attr(isset($_POST['quantity']) ? $_POST['quantity'] : 1),
								esc_attr(isset($_POST['quantity']) ? 'added' : ''),
								isset($_POST['quantity']) ? 'disabled' : '',
								esc_html($product->add_to_cart_text())
							),
						$product);
						?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
 </div>





			

		<?php endwhile; // end of the loop. ?>





<!-- #<?php echo $wrapper_id; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- ok. ?> -->

<?php
get_footer();