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

    <?php $args = array(
        'post_type' => 'recette',
        'post_statues' => 'publish',
        'posts_per_page' => '-1',
        'order' => 'desc',
        'orderby' => 'post_date',
    ); ?>
    <?php $query = new WP_Query( $args ); ?>
    <?php if( $query->have_posts() ): ?>

    <!-- SECTION RECIPES -->
    <section class="recipes">
        <div class="wrapper">
            <?php the_content(); ?>
                
                <div class="swiper" data-component="Carousel" data-recipes data-space="30" data-slides="1">
                    <div class="swiper-wrapper">
                        <?php while( $query->have_posts() ): $query->the_post() ?>

                            <a class="swiper-slide card" href="<?php the_permalink(); ?>">
                                <div class="media">
                                    <?php the_post_thumbnail(); ?>
                                </div>
                                <div class="content">
                                    <?php $categories = array(); ?>

                                    <?php foreach ( get_the_category() as $category) : ?>
                                        <?php array_push($categories, $category->name); ?>
                                    <?php endforeach; ?>
                                    
                                    <?php if( $categories ): ?>
                                        <h5>
                                            <?php echo implode(', ', $categories); ?>
                                        </h5>
                                    <?php endif; ?>

                                    <h3><?php the_title(); ?></h3>

                                    <p class="small"><?php the_excerpt(); ?></p>
                                </div>
                            </a>

                        <?php endwhile; ?>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>

        </div>
    </section>
    
    <?php endif; ?>
    <?php wp_reset_postdata(); ?>

<?php get_footer(); ?>