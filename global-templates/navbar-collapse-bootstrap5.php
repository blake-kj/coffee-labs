<?php
/**
 * Header Navbar (bootstrap5)
 *
 * @package Understrap
 * @since 1.1.0
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="top-header">
	<div class="container pt-md-5 pt-2 pb-2 top-header-container">
		<div class="row align-items-center">
			<div class="col-6 col-md-12">
				<a class="logo-holder" href="/">
					<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo">
				</a>
			</div>
			<div class="col-6 col-md-12">


			<nav id="main-nav" class="navbar navbar-expand-md navbar-dark bg-primary" aria-labelledby="main-nav-label">

			<h2 id="main-nav-label" class="screen-reader-text">
				<?php esc_html_e( 'Main Navigation', 'understrap' ); ?>
			</h2>


			<div class="<?php echo esc_attr( $container ); ?>">

				<button
					class="navbar-toggler"
					type="button"
					data-bs-toggle="collapse"
					data-bs-target="#navbar1"
					aria-controls="navbarNavDropdown"
					aria-expanded="false"
					aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>"
				>
					<span class="navbar-toggler-icon"></span>
				</button>

				<!-- The WordPress Menu goes here -->
				<?php
				wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'collapse navbar-collapse',
						'container_id'    => 'navbarNavDropdown',
						'menu_class'      => 'navbar-nav mx-auto',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'depth'           => 2,
						'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
					)
				);
				?> 

			</div><!-- .container(-fluid) -->

		</nav><!-- #main-nav -->
			</div>
			<div>
			<?php
				wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'collapse navbar-collapse',
						'container_id'    => 'navbar1',
						'menu_class'      => 'navbar-nav mx-auto',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'depth'           => 2,
						'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
					)
				);
				?> 
			</div>
		</div>
	</div>
</div>










