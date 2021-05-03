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

    <head>

        <meta name="description" content="Radio loud">
        <meta name="robots" content="noindex, nofollow">
    </head>
    <section id="first_section">
    </section>


    <h2 class="Populaere_podcast">Populære podcasts</h2>
    <div class="contianer_forside">
        <a href="http://helenajakobsen.com/02_kea/02_semester/tema9/radio_loud/loud/wordpress/pod/aktier-for-noobies/"><img id="pic1" src="billeder/aktier_for_noobies.png" alt="pic1"></a>
        <a href="http://helenajakobsen.com/02_kea/02_semester/tema9/radio_loud/loud/wordpress/pod/aktion/"><img id="pic2" src="billeder/aktion.png" alt="pic2"></a>
        <a href="http://helenajakobsen.com/02_kea/02_semester/tema9/radio_loud/loud/wordpress/pod/aldrig-mor/"><img id="pic3" src="billeder/aldrigmor.png" alt="pic3"></a>
        <a href="http://helenajakobsen.com/02_kea/02_semester/tema9/radio_loud/loud/wordpress/pod/alis-stemmer/"><img id="pic4" src="billeder/alis_stemmer.png" alt="pic4"></a>


        <a href="http://helenajakobsen.com/02_kea/02_semester/tema9/radio_loud/loud/wordpress/pod/all-caps/"><img id="pic5" src="billeder/allcaps.png" alt="pic5"></a>

        <a href="http://helenajakobsen.com/02_kea/02_semester/tema9/radio_loud/loud/wordpress/pod/aloha/"><img id="pic6" src="billeder/aloha.png" alt="pic6"></a>
    </div>

    <div class="forside_p1">
        <p>Vores live funktion giver dig mulighed for at være opdateret på de bedste og nyeste podcast</p>
    </div>
    <div class="button_01">
        <button class="button_live">Loud Live</button>
    </div>


    <div class="forside_p2">
        <p>Udvælg dine favoritter ved at oprette en gratis profil hos Loud</p>
    </div>
    <div class="button_02">
        <button class="button_profil">Opret profil</button>
    </div>


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
