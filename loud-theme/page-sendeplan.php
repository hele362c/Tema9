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
                <section id="morgen">
                    <div class="section_wrapper">
                        <div class="col_left">
                            <h3>Kl.09:15</h3>
                            <div class="image">
                                <img src="billeder/aktion.png" alt="aktion">
                            </div>
                        </div>
                        <div class="col_right">
                            <div class="txt">

                                <p>Dine råvarer er vores fokus <br>
                                    <br>

                                    Vi vægter økologiske råvarer højt, og har danske samt lokale råvarer i centrum.
                                    Når du køber økologi, er du med til at skabe et bedre miljø og det vil vi hos Ingwersen,
                                    gerne støtte op om. Vi vil også hjælpe med at slippe kreativiteten løs i køkkenet.
                                    Derfor rejser vi gerne langt efter traditionelle gode råvarer.
                                    Alligevel ved vi hvor vigtigt det er med fornyelse og inspiration.
                                    Vi har alle antenner ude for at finde nye tendenser og produkter, men vi skiller døgnfluer fra succeser.
                                </p>
                            </div>

                        </div>
                    </div>
                </section>
                <!--
                <section id="first_section">
                    <h2>Tiden</h2>
                    <div class="section_wrapper">
                        <div class="row">
                            <div class="col">
                                <img src="billeder/aktion.png" alt="">
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
-->
            </div>
        </div>
        <?php get_footer(); ?>
    </div>
