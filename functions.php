<?php
/**
 * Author: Ole Fredrik Lie
 * URL: http://olefredrik.com
 *
 * FoundationPress functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

/** Various clean up functions */
require_once( 'library/cleanup.php' );

/** Required for Foundation to work properly */
require_once( 'library/foundation.php' );

/** Format comments */
require_once( 'library/class-foundationpress-comments.php' );

/** Register all navigation menus */
require_once( 'library/navigation.php' );

/** Add menu walkers for top-bar and off-canvas */
require_once( 'library/class-foundationpress-top-bar-walker.php' );
require_once( 'library/class-foundationpress-mobile-walker.php' );

/** Create widget areas in sidebar and footer */
require_once( 'library/widget-areas.php' );

/** Return entry meta information for posts */
require_once( 'library/entry-meta.php' );

/** Enqueue scripts */
require_once( 'library/enqueue-scripts.php' );

/** Add theme support */
require_once( 'library/theme-support.php' );

/** Add Nav Options to Customer */
require_once( 'library/custom-nav.php' );

/** Change WP's sticky post class */
require_once( 'library/sticky-posts.php' );

/** Configure responsive image sizes */
require_once( 'library/responsive-images.php' );

/** If your site requires protocol relative url's for theme assets, uncomment the line below */
// require_once( 'library/class-foundationpress-protocol-relative-theme-assets.php' );

/**
 * Show cart contents / total Ajax
 */
add_filter( 'woocommerce_add_to_cart_fragments', 'woocommerce_header_add_to_cart_fragment' );

function woocommerce_header_add_to_cart_fragment( $fragments ) {
	global $woocommerce;

	ob_start();

	?>

	<span class="basket-count"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
	<?php
	$fragments['span.basket-count'] = ob_get_clean();
	return $fragments;
}


/**
 * Rename product data tabs
 */
add_filter( 'woocommerce_product_tabs', 'woo_rename_tabs', 98 );
function woo_rename_tabs( $tabs ) {

	$tabs['description']['title'] = __( 'Product Overview' );		// Rename the description tab
	// $tabs['reviews']['title'] = __( 'Ratings' );				// Rename the reviews tab
	// $tabs['additional_information']['title'] = __( 'Product Data' );	// Rename the additional information tab

	return $tabs;

}

// Remove auto-inserted 'first' and 'last' classes to product li
add_filter( 'post_class', 'prefix_post_class', 21 );
function prefix_post_class( $classes ) {
    if ( 'product' == get_post_type() && is_page('home') ) {
        $classes = array_diff( $classes, array( 'first', 'last' ) );
    }
    return $classes;
}

// Add Product Categories to shop products
function category_single_product(){

    $product_cats = wp_get_post_terms( get_the_ID(), 'product_cat' );

    if ( $product_cats && ! is_wp_error ( $product_cats ) ){

        $single_cat = array_shift( $product_cats ); ?>

        <h4 itemprop="name" class="product_category_title"><?php echo $single_cat->name; ?></h4>

<?php }
}
add_action( 'woocommerce_before_shop_loop_item_title', 'category_single_product', 5 );

// Move WooCommerce Single Product Title
function move_woo_title() {
	remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_title', 5 );
	add_action('woocommerce_before_single_product_summary', 'woocommerce_template_single_title', 15 );
}
add_action('woocommerce_before_single_product_summary', 'move_woo_title');

// Move WooCommerce Single Product Price Below Product Short Description
function move_woo_price() {
	remove_Action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );
	add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 20 );
}
add_action('woocommerce_before_single_product_summary', 'move_woo_price');
