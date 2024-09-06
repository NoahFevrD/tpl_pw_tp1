<?php /* Template Name: Liste de recettes */ ?>

<?php get_header(); ?>

    <!-- SECTION HERO -->
    <section class="hero small-hero">
        <div class="wrapper big-wrapper">
            <div class="media">
                <?php the_post_thumbnail(); ?>
            </div>

            <div class="content">
                <h1><?php the_title(); ?></h1>
            </div>
        </div>
    </section>

    <section class="recipes">
        <div class="wrapper">
            <?php the_content(); ?>

            <div class="swiper" data-component="Carousel" data-recipes data-space="30" data-slides="1">
                <div class="swiper-wrapper">
                    <a class="swiper-slide card" href="#">
                        <div class="media">
                            <img src="assets/images/mium.jpg" alt="Delisioco">
                        </div>
                        <div class="content">
                            <h5>Faites par grand mere</h5>
                            <h3>Les frites parfaites de grand maman</h3>
                            <p class="small">blablabla cest juste trop bon</p>
                        </div>
                    </a>

                    <a class="swiper-slide card" href="#">
                        <div class="media">
                            <img src="assets/images/mium.jpg" alt="Delisioco">
                        </div>
                        <div class="content">
                            <h5>Faites par grand mere</h5>
                            <h3>Les frites parfaites de grand maman</h3>
                            <p class="small">blablabla cest juste trop bon (surtout avec de la relish)</p>
                        </div>
                    </a>

                    <a class="swiper-slide card" href="#">
                        <div class="media">
                            <img src="assets/images/mium.jpg" alt="Delisioco">
                        </div>
                        <div class="content">
                            <h5>Faites par grand mere</h5>
                            <h3>Les frites parfaites de grand maman</h3>
                            <p class="small">blablabla cest juste trop bon (surtout avec de la relish)</p>
                        </div>
                    </a>

                    <a class="swiper-slide card" href="#">
                        <div class="media">
                            <img src="assets/images/mium.jpg" alt="Delisioco">
                        </div>
                        <div class="content">
                            <h5>Faites par grand mere</h5>
                            <h3>Les frites parfaites de grand maman</h3>
                            <p class="small">blablabla cest juste trop bon (surtout avec de la relish)</p>
                        </div>
                    </a>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>