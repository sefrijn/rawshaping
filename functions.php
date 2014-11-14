<?php
/**
 * @package Sefrijn
 * @subpackage Rawshaping
 * @since Rawshaping 2.0.0
 */
?>

<?php
if ( ! function_exists( 'rawshaping_pagination' ) ) :
/**
 * Display navigation to next/previous pages when applicable
 */
function rawshaping_pagination( $html_id ) {
	global $wp_query;

	if ( $wp_query->max_num_pages > 1 ) : ?>
		<nav id="<?php echo esc_attr( $html_id ); ?>">
			<div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'rawshaping' ) ); ?></div>
			<div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'rawshaping' ) ); ?></div>
		</nav>
	<?php endif;
}
endif; // rawshaping_pagination

if ( function_exists( 'add_theme_support' ) ) {
	/*
		Desired sizes
		- view post width (450)
		- size3 (150)
		- size4 (200)
		- size5 (350)
		- full (shadowbox pop-up)
	*/	

	// First declare general support for thumbnails
	add_theme_support( 'post-thumbnails' );

	// Set default size
    // set_post_thumbnail_size( 150, 150 );
    /*
		defaults: thumbnail, medium, large, full
		full = full
		view = large
		size 5 = medium
		size 4 = small
		size 3 = thumbnail
    */
}
    // Add more sizes
if ( function_exists( 'add_image_size' ) ) { 
	// add_image_size( 'category-thumb', 300, 9999 ); //300 pixels wide (and unlimited height)
	add_image_size( 'medium', 350, 350, true );
	add_image_size( 'small', 200, 200, true ); //(cropped)
}

?>