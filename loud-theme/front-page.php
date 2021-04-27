<?php
/**
 * The front page template file.
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Hestia
 * @since Hestia 1.0
 */

if ( ( ! is_page_template() || get_option( 'fresh_site' ) ) && ! get_theme_mod( 'disable_frontpage_sections', false ) ) {

		get_header();

		/**
		 * Hestia Header hook.
		 *
		 * @hooked hestia_slider_section
		 */
		do_action( 'hestia_header' ); ?>


<div class="<?php echo esc_attr( hestia_layout() ); ?>">
    <section id="first_section">
    </section>


    <h2>Populære podcasts</h2>
    <div class="contianer">

        <img id="pic1" src="billeder/aloha.png">
        <img id="pic2" src="billeder/aktion.png">
        <img id="pic3" src="billeder/aldrigmor.png">
        <img id="pic4" src="billeder/alis%20stemmer.png">
        <img id="pic5" src="billeder/allcaps.png">
        <img id="pic6" src="billeder/aloha.png">
    </div>
    <div>
        <p>Vores live funktion giver dig mulighed for at være opdateret på de bedste og nyeste podcast</p>
    </div>
    <button class="button_live">Loud Live</button>

    <div>
        <p>Udvælg dine favoritter ved at oprette en gratis profil hos Loud</p>
    </div>
    <button class="button_profil">Opret profil</button>

    <?php

		/**
		 * Hestia Sections hook.
		 *
		 * @hooked hestia_features_section - 1
		 * @hooked hestia_about_section - 2
		 * @hooked hestia_shop_section - 3
		 * @hooked hestia_portfolio_section - 4
		 * @hooked hestia_team_section - 5
		 * @hooked hestia_pricing_section - 6
		 * @hooked hestia_testimonials_section - 7
		 * @hooked hestia_subscribe_section - 8
		 * @hooked hestia_blog_section - 9
		 * @hooked hestia_contact_section - 10
		 */
		do_action( 'hestia_sections', false );





		get_footer();

} else {
	include( get_page_template() );
} ?>
