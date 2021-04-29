<div id="enkeltpodcast">
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
                        <article class="podcast_article">
                            <img src="" alt="" class="billede">
                            <div class="text_div2">
                                <h2 class="navn"></h2>
                                <p class="langtekst"></p>
                            </div>
                        </article>

                        <h2 class="andre_episoder">Andre Episoder</h2>

                        <section id="episoder">
                            <template>
                                <article class="andreepisoder_article">
                                    <img src="" alt="" class="episodebillede">
                                    <div class="text_div">
                                        <h2 class="episodenavn"></h2>
                                        <h3 class="episodenr"></h3>
                                        <p class="om_episoden"></p>
                                    </div>
                                </article>
                            </template>
                        </section>
                    </main>




                    <script>
                        let pod;
                        let episoder;
                        let aktuelpodcast = <?php echo get_the_ID() ?>;
                        const dbUrl = "http://helenajakobsen.com/02_kea/02_semester/tema9/radio_loud/loud/wordpress/wp-json/wp/v2/pod/" + aktuelpodcast;
                        const episodeUrl = "http://helenajakobsen.com/02_kea/02_semester/tema9/radio_loud/loud/wordpress/wp-json/wp/v2/epi?per_page=100";

                        const container = document.querySelector("#episoder");

                        async function getJSON() {
                            const data = await fetch(dbUrl);
                            pod = await data.json();

                            const data2 = await fetch(episodeUrl);
                            episoder = await data2.json();
                            console.log("episoder:", episoder);

                            visPod();
                            visEpisodere();
                        }

                        function visPod() {
                            console.log(pod.billede.guid);
                            document.querySelector(".navn").textContent = pod.title.rendered;
                            document.querySelector(".billede").src = pod.billede.guid;
                            document.querySelector(".langtekst").textContent = pod.langtekst;
                        }

                        function visEpisodere() {
                            console.log("visEpisodere");
                            let temp = document.querySelector("template");
                            episoder.forEach(epi => {
                                console.log("loop id:", aktuelpodcast);
                                if (epi.horer_til_podcast[0].ID == aktuelpodcast) {
                                    console.log("loop kører id:", aktuelpodcast);
                                    let klon = temp.cloneNode(true).content;


                                    klon.querySelector(".episodebillede").src = epi.billede.guid;
                                    klon.querySelector(".episodenavn").textContent = epi.title.rendered;
                                    klon.querySelector(".episodenr").innerHTML = epi.episodenr;
                                    klon.querySelector(".om_episoden").innerHTML = epi.om_episoden;
                                    klon.querySelector("article").addEventListener("click", () => {
                                        location.href = epi.link;
                                    })

                                    klon.querySelector("article").href = epi.link;
                                    console.log("epi", epi.link);
                                    container.appendChild(klon);


                                }
                            })
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
