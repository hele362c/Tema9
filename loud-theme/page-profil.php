<div id="profilside">
    <?php
/**
 * The template for displaying all single posts and attachments.
 *
 * @package Hestia
 * @since Hestia 1.0
 */

get_header();

do_action( 'hestia_before_single_page_wrapper' );

?>
    <div class="<?php echo hestia_layout(); ?>">
        <?php
	$class_to_add = '';
	if ( class_exists( 'WooCommerce', false ) && ! is_cart() ) {
		$class_to_add = 'blog-post-wrapper';
	}
	?>
        <div class="blog-post <?php esc_attr( $class_to_add ); ?>">
            <div class="container">





            </div>
        </div>
        <h2>Dine favoritter</h2>
        <div class="contianer">

            <img id="pic1" src="billeder/aktier%20for%20noobies.png">
            <img id="pic2" src="billeder/aktion.png">
            <img id="pic3" src="billeder/aldrigmor.png">
            <img id="pic4" src="billeder/alis%20stemmer.png">
            <img id="pic5" src="billeder/allcaps.png">
            <img id="pic6" src="billeder/aloha.png">
        </div>
        <?php get_footer(); ?>
    </div>
