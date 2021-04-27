<div id="sendeplanside">
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



                <h2>Morgen</h2>
                <section id="first_section">
                    <h2>Tiden</h2>
                    <div class="section_wrapper">
                        <div class="row">
                            <div class="col">
                                <img src="billeder/aktion.png" alt="aktion">
                            </div>
                            <div class="col">
                                <p>tekst omrking podcast</p>
                            </div>
                            <div class="col">
                                <button>lyt knap</button>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <?php get_footer(); ?>
    </div>
