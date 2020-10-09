<?php




/* ADD HTML5 THEME SUPPORT */
function wpdocs_after_setup_theme() {
    add_theme_support( 'html5', array( 'search-form' ) );
}
add_action( 'after_setup_theme', 'wpdocs_after_setup_theme' );


/* REMOVE DEFAULT PRODUCT SORTING */
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );





/* ENABLE PRODUCT ZOOM */

add_theme_support( 'wc-product-gallery-zoom' );
add_theme_support( 'wc-product-gallery-lightbox' );
add_theme_support( 'wc-product-gallery-slider' );





/*	SET SOME CONSTANTS FOR HANDY REFERENCE */
define('COMPANY_NAME', 						''								);
define('STREET_ADDRESS',					''								);
define('CITY',										''								);
define('STATE',										''								);
define('IG',											'https://instagram.com/' . ''								);






// DECLARE WOOCOMMERCE SUPPORT
add_theme_support('woocommerce');








// REMOVE WOOCOMMERCE SCRIPTS ON UNNECESSARY PAGES
function woocommerce_de_script() {
    if (function_exists( 'is_woocommerce' )) {
     if (!is_woocommerce() && !is_cart() && !is_checkout() && !is_account_page() ) { // if we're not on a Woocommerce page, dequeue all of these scripts
    	wp_dequeue_script('wc-add-to-cart');
    	wp_dequeue_script('jquery-blockui');
    	wp_dequeue_script('jquery-placeholder');
    	wp_dequeue_script('woocommerce');
    	wp_dequeue_script('jquery-cookie');
    	wp_dequeue_script('wc-cart-fragments');
      }
    }
}
add_action( 'wp_print_scripts', 'woocommerce_de_script', 100 );

add_action( 'wp_enqueue_scripts', 'remove_woocommerce_generator', 99 );
function remove_woocommerce_generator() {
    if (function_exists( 'is_woocommerce' )) {
	if (!is_woocommerce()) { // if we're not on a woo page, remove the generator tag
		remove_action( 'wp_head', array( $GLOBALS['woocommerce'], 'generator' ) );
	}
    }
}





// SET # OF PRODUCTS PER PAGE 
add_filter( 'loop_shop_per_page', create_function( '$cols', 'return 12;' ), 20 );



?>