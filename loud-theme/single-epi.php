<div id="enkelepisode">
    <?php
/**
 * The template for displaying all single posts and attachments.
 *
 * @package Hestia
 * @since Hestia 1.0
 */

get_header();

do_action( 'hestia_before_single_post_wrapper' );
?>

    <div class="<?php echo hestia_layout(); ?>">
        <div class="blog-post blog-post-wrapper">
            <div class="container">

                <section id="primary" class="content-area">
                    <main id="main" class="site-main">
                        <div id="tilbage_knap">
                            <button class="valgt">Tilbage</button>
                        </div>
                        <article class="singleepi_article">
                            <img src="" alt="" class="billede">
                            <div class="epitext_div">
                                <h2 class="episodenavn"></h2>
                                <h3 class="episodenr"></h3>
                                <p class="om_episoden"></p>
                            </div>
                        </article>
                    </main>

                    <script>
                        let episode;
                        let aktuelepisode = <?php echo get_the_ID() ?>;
                        console.log(aktuelepisode);

                        const dbUrl = "http://helenajakobsen.com/02_kea/02_semester/tema9/radio_loud/loud/wordpress/wp-json/wp/v2/epi/" + aktuelepisode;

                        async function getJSON() {
                            const data = await fetch(dbUrl);
                            episode = await data.json();


                            visEpi();
                        }

                        function visEpi() {
                            document.querySelector(".billede").src = episode.billede.guid;
                            document.querySelector(".episodenavn").textContent = episode.title.rendered;
                            document.querySelector(".episodenr").innerHTML = episode.episodenr;
                            document.querySelector(".om_episoden").innerHTML = episode.om_episoden;

                            /*    let temp = document.querySelector("template");
                                episode.forEach(epi => {
                                    console.log("loop id:", aktuelepisode);
                                    if (epi.horer_til_podcast[0].ID == aktuelepisode) {
                                        console.log("loop kører id:", aktuelepisode);
                                        let klon = temp.cloneNode(true).content;

                                        klon.querySelector(".billede").src = epi.billede.guid;
                                        klon.querySelector(".episodenavn").textContent = epi.title.rendered;
                                        klon.querySelector(".episodenr").innerHTML = epi.episodenr;
                                        klon.querySelector(".om_episoden").innerHTML = epi.om_episoden;

                                    }
                                    container.appendChild(klon);
                                    console.log("epi", epi.link);
                                })*/
                            document.querySelector(".valgt").addEventListener("click", tilbageTilMenu);
                        }

                        function tilbageTilMenu() {
                            console.log("tilbageTilMenu");
                            history.back();

                        }
                        getJSON();

                    </script>
                </section>
                <div class="footer-wrapper">
                    <?php get_footer(); ?>
                </div>
