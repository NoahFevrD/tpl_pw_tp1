<?php get_header(); ?>

    <!-- SECTION HERO -->
    <section class="hero">
        <div class="wrapper big-wrapper front-page-hero">
            <div class="media">
                <?php the_post_thumbnail(); ?>
            </div>

            <div class="content">
                <?php the_content(); ?>
            </div>
        </div>
    </section>

    <!-- SECTION RECIPES -->
    <section class="recipes">
        <div class="wrapper">

            <?php if( get_field('favorite_title')): ?>
                <h2><?php the_field('favorite_title') ?></h2>
            <?php endif; ?>

            <?php $args = array(
                'post_type' => 'recette',
                'post_statues' => 'publish',
                'posts_per_page' => '10',
                'order' => 'desc',
                'orderby' => 'post_date',

                'meta_key' => 'recipe_favorite',
                'meta_value' => '1',
            ); ?>
            <?php $query = new WP_Query( $args ); ?>
            <?php if( $query->have_posts() ): ?>
                
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
            <?php else: ?>
                <h1 class="center">Aucune recette favorite</h1>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>

            <?php if( get_field('cta_recipes') ):?>
                <a href="<?php the_field('cta_recipes'); ?>" class="btn">Voir plus de recette</a>
            <?php endif; ?>
        </div>
    </section>

<?php get_footer(); ?>