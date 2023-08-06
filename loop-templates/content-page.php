<?php
/**
 * Partial template for content in page.php
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

<div class="shop-upper-top-hero">

</div>

<div class="shop-lower-top-hero">
	<div class="container">
		<div class="row heading-container">
			<h1 class="text-center">
			<?php
				if ( ! is_page_template( 'page-templates/no-title.php' ) ) {
					the_title(
						'<header class="entry-header"><h1 class="entry-title">',
						'</h1></header><!-- .entry-header -->'
					);
				}
			?>
			</h1>
		</div>
	</div>
</div>

	

	<div class="entry-content">

		<?php
		the_content();
		understrap_link_pages();
		?>

	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php understrap_edit_post_link(); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-<?php the_ID(); ?> -->
