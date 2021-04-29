<div id="podcastsiden">
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
        <template>
            <article>
                <img src="" alt="" class="billede">
                <h2 class="podcastnavn"></h2>
                <h3 class="korttekst"></h3>
            </article>
        </template>
        <section id="primary" class="content-area">
            <main id="main" class="site-main">
                <nav id="filtrering">
                    <button data-pod="alle">alle</button>
                </nav>
                <section class="podcontainer"></section>
            </main>

            <script>
                let podcast;
                let categories;
                let filterPod = "alle";

                const dbUrl = "http://helenajakobsen.com/02_kea/02_semester/tema9/radio_loud/loud/wordpress/wp-json/wp/v2/pod?per_page=100";
                const catUrl = "http://helenajakobsen.com/02_kea/02_semester/tema9/radio_loud/loud/wordpress/wp-json/wp/v2/categories";

                async function getJSON() {
                    const data = await fetch(dbUrl);
                    const catdata = await fetch(catUrl);

                    podcast = await data.json();
                    categories = await catdata.json();
                    console.log(categories);
                    visPodcast();
                    opretKnapper();

                }

                function opretKnapper() {
                    categories.forEach(cat => {
                        document.querySelector("#filtrering").innerHTML += `<button class="filter" data-pod="${cat.id}">${cat.name}</button>`
                    })
                    addEventListenersToButtons();
                };

                function addEventListenersToButtons() {
                    document.querySelectorAll("#filtrering button").forEach(elm => {
                        elm.addEventListener("click", filtrering);
                    })
                };

                function filtrering() {
                    filterPod = this.dataset.pod;
                    console.log(filterPod);

                    visPodcast();
                }

                function visPodcast() {
                    console.log(podcast);
                    let temp = document.querySelector("template");
                    let container = document.querySelector(".podcontainer");
                    container.innerHTML = "";
                    podcast.forEach(pod => {
                        if (filterPod == "alle" || pod.categories.includes(parseInt(filterPod))) {
                            let klon = temp.cloneNode(true).content;
                            klon.querySelector(".billede").src = pod.billede.guid;
                            klon.querySelector(".podcastnavn").textContent = pod.title.rendered;
                            klon.querySelector(".korttekst").textContent = pod.korttekst;
                            klon.querySelector("article").addEventListener("click", () => {
                                location.href = pod.link;
                            })
                            container.appendChild(klon);
                        }
                    })

                }
                getJSON();

            </script>
        </section>
    </div>
    <?php get_footer(); ?>
</div>
