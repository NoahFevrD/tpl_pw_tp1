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

    <!-- SECTION CONTACT -->
    <section class="contact">
        <div class="wrapper">
            <?php the_content(); ?>
        </div>
    </section>

<?php get_footer(); ?>