<?php
/**
 * The default template for displaying WooCommerce pages.
 *
 * @package Shoreditch
 */

get_header(); ?>

	<div class="site-content-wrapper">

		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">
				<div class="hentry">
					<div class="hentry-wrapper">

						<?php woocommerce_content(); ?>

					</div><!-- .hentry-wrapper -->
				</div><!-- .woocommerce-wrapper -->
			</main><!-- #main -->
		</div><!-- #primary -->

		<?php get_sidebar(); ?>

	</div><!-- .site-content-wrapper -->

<?php
get_sidebar( 'footer' );
get_footer();
