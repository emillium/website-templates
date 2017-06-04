<?php
/**
 * Declare WooCommerce support.
 */
function shoreditch_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'shoreditch_woocommerce_support' );

if ( ! function_exists( 'shoreditch_woocommerce_image_dimensions' ) ) :
/**
 * Define image sizes
 */
function shoreditch_woocommerce_image_dimensions() {
	global $pagenow;

	if ( ! isset( $_GET['activated'] ) || $pagenow != 'themes.php' ) {
		return;
	}

	$catalog = array(
		'width'  => '552',
		'height' => '552',
		'crop'	 => 1,
	);
	$single = array(
		'width'  => '775',
		'height' => '775',
		'crop'   => 1,
	);
	$thumbnail = array(
		'width'  => '172',
		'height' => '172',
		'crop'   => 0,
	);

	update_option( 'shop_catalog_image_size', $catalog );
	update_option( 'shop_single_image_size', $single );
	update_option( 'shop_thumbnail_image_size', $thumbnail );
}
add_action( 'after_switch_theme', 'shoreditch_woocommerce_image_dimensions', 1 );
endif;

if ( ! function_exists( 'shoreditch_woocommerce_loop_columns' ) ) :
/**
 * Change number of products per row to 2.
 */
function shoreditch_woocommerce_loop_columns() {
	return 2;
}
add_filter( 'loop_shop_columns', 'shoreditch_woocommerce_loop_columns' );
endif;

if ( ! function_exists( 'shoreditch_woocommerce_related_products' ) ) :
/**
 * Change number of related products per row to 2 and number of products to 2.
 */
function shoreditch_woocommerce_related_products( $args ) {
	$args['posts_per_page'] = 2;
	$args['columns'] = 2;
	return $args;
}
add_filter( 'woocommerce_output_related_products_args', 'shoreditch_woocommerce_related_products' );
endif;

if ( ! function_exists( 'shoreditch_woocommerce_product_thumbnails_columns' ) ) :
/**
 * Change number of thumbnails per row in product galleries to 4.
 */
function shoreditch_woocommerce_product_thumbnails_columns() {
	return 4;
}
add_filter ( 'woocommerce_product_thumbnails_columns', 'shoreditch_woocommerce_product_thumbnails_columns' );
endif;

/**
 * Reorganize single product.
 */
function shoreditch_woocommerce_image_wrapper_open() {
	echo '<div class="woocommerce-image-wrapper">';
}

function shoreditch_woocommerce_image_wrapper_closed() {
	echo '</div>';
}

add_action( 'woocommerce_before_single_product_summary', 'woocommerce_template_single_title', 1 );
add_action( 'woocommerce_before_single_product_summary', 'woocommerce_template_single_rating', 2 );
add_action( 'woocommerce_before_single_product_summary', 'woocommerce_template_single_price', 2 );
add_action( 'woocommerce_before_single_product_summary', 'shoreditch_woocommerce_image_wrapper_open', 5 );
add_action( 'woocommerce_before_single_product_summary', 'shoreditch_woocommerce_image_wrapper_closed', 25 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 5 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );
