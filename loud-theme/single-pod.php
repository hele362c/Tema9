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
                    <article>
                        <img src="" alt="" class="billede">
                        <div>
                            <h2 class="navn"></h2>
                            <p class="langtekst"></p>
                        </div>
                    </article>
                </main>
                <script>
                    let pod;
                    const dbUrl = "http://helenajakobsen.com/02_kea/02_semester/tema9/radio_loud/loud/wordpress/wp-json/wp/v2/pod/" + <?php echo get_the_ID() ?>;

                    async function getJSON() {
                        const data = await fetch(dbUrl);
                        pod = await data.json();

                        visPod();
                    }

                    function visPod() {
                        console.log(pod.billede.guid);
                        document.querySelector(".navn").textContent = pod.title.rendered;
                        document.querySelector(".billede").src = pod.billede.guid;
                        document.querySelector(".langtekst").textContent = pod.langtekst;
                    }
                    getJSON();

                </script>
            </section>


            <div class="footer-wrapper">
                <?php get_footer(); ?>
