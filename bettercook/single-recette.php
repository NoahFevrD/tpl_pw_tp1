<?php get_header(); ?>

    <!-- SECTION HERO -->
    <section class="hero small-hero">
        <div class="wrapper big-wrapper">
            <div class="media">
                <img src="assets/images/hero-recettes.jpg" alt="el cooker">
            </div>

            <div class="content">
                <h4>Categorie</h4>
                <h1><?php the_title(); ?></h1>

                <svg class="icon favorite" data-component="Toggle">
                    <use xlink:href="#icon-favorite"></use>
                </svg>
            </div>
        </div>
    </section>

    <!-- SECTION DETAILS -->
    <section class="details">
        <div class="wrapper big-wrapper">

            <div class="cols">
                <div class="col">
                    <h3>Par: LE GOAT CHATPGT</h3>
                    <p><?php the_content(); ?></p>
                </div>

                <div class="col">
                    <h3>Preparation: <span>15 minutes</span></h3>
                    <h3>Cuisson: <span>35 minutes</span></h3>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION RECIPE -->
    <section class="recipe">
        <div class="wrapper">
            <article>
                <h2>Preparation</h2>

                <div class="step">
                    <h3>Etape 1</h3>
                    <p>blablabla met le dans le four stp</p>
                </div>
                <div class="step">
                    <h3>Etape 1</h3>
                    <p>blablabla met le dans le four stp</p>
                </div>
                <div class="step">
                    <h3>Etape 1</h3>
                    <p>blablabla met le dans le four stp</p>
                </div>
            </article>

            <aside>
                <h3>Ingredients</h3>

                <div class="checkbox" data-component="Toggle">
                    <h4>Pomme Pomme Pomme Pomme Pomme Pomme</h4>

                    <svg class="icon icon--lg check">
                        <use xlink:href="#icon-check"></use>
                    </svg>
                </div>
            </aside>
        </div>
    </section>

    <!-- SECTION GALLERY -->
    <section class="gallery">
        <div class="wrapper">

            <h2>Gallerie de photos</h2>

            <div class="swiper" data-component="Carousel" data-space="30" data-gallery data-free-mode>
                <div class="swiper-wrapper">
                    <div class="swiper-slide card">
                        <img src="assets/images/miam.jpg" alt="Bread">
                        <h4>Bad Bread</h4>
                    </div>

                    <div class="swiper-slide card">
                        <img src="assets/images/miam.jpg" alt="Bread">
                        <h4>Bad Bread</h4>
                    </div>

                    <div class="swiper-slide card">
                        <img src="assets/images/miam.jpg" alt="Bread">
                        <h4>Bad Bread</h4>
                    </div>

                    <div class="swiper-slide card">
                        <img src="assets/images/miam.jpg" alt="Bread">
                        <h4>Bad Bread</h4>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>