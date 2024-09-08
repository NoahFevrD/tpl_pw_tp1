<?php get_header(); ?>

    <!-- SECTION HERO -->
    <section class="hero small-hero">
        <div class="wrapper big-wrapper">
            <div class="media">
                <?php the_post_thumbnail(); ?>
            </div>

            <div class="content">
                <?php $categories = array(); ?>
                <?php foreach ( get_the_category() as $category) : ?>
                    <?php array_push($categories, $category->name); ?>
                <?php endforeach; ?>

                <?php if( $categories ): ?>
                    <h4>
                        <?php implode(',', $categories); ?>
                    </h4>
                <?php endif; ?>
                <h1><?php the_title(); ?></h1>
                <svg class="icon favorite <?php if ( get_field('recipe_favorite') ): ?>is-active<?php endif; ?>" data-component="Toggle">
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
                    <?php $credits = get_field('recipe_credit'); ?>
                    <?php if( $credits ): ?>
                        <?php foreach($credits as $credit):?>
                            <h3>Par: <?php get_the_title($credit->ID) ?></h3>
                        <?php endforeach; ?>
                    <?php endif; ?>

                    <p><?php the_content(); ?></p>
                </div>

                <?php if( have_rows('recipe_time') ): ?>
                    <?php while(have_rows('recipe_time') ): the_row() ?>

                    <div class="col">
                        <h3>Préparation: <span><?php the_sub_field('preparation'); ?> minutes</span></h3>
                        <h3>Cuisson: <span><?php the_sub_field('cooking'); ?> minutes</span></h3>
                    </div>

                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <!-- SECTION RECIPE -->
    <section class="recipe">
        <div class="wrapper">
            <?php if( have_rows('recipe_steps') ): ?>
                <article>
                    <h2>Préparation</h2>
                    <?php $current = 1; ?>
                    <?php while( have_rows('recipe_steps') ): the_row() ?>
                    <div class="step">
                        <h3>Etape <?php echo $current ?></h3>
                        <p><?php the_sub_field('step'); ?></p>
                    </div>
                    <?php $current++; ?>
                    <?php endwhile; ?>

                </article>
            <?php endif; ?>

            <?php if( have_rows('recipe_ingredients') ): ?>
                <aside>
                    <h3>Ingredients</h3>

                        <?php while( have_rows('recipe_ingredients') ): the_row() ?>
                            <div class="checkbox" data-component="Toggle">
                                <h4><?php the_sub_field('name'); ?></h4>

                                <svg class="icon icon--lg check">
                                    <use xlink:href="#icon-check"></use>
                                </svg>
                            </div>
                        <?php endwhile; ?>
                </aside>
            <?php endif; ?>
        </div>
    </section>

    <?php if( have_rows('recipe_gallery') ): ?>
    <!-- SECTION GALLERY -->
    <section class="gallery">
        <div class="wrapper">

            <h2>Gallerie de photos</h2>

            <div class="swiper" data-component="Carousel" data-space="30" data-gallery data-free-mode>
                <div class="swiper-wrapper">

                    <?php while( have_rows('recipe_gallery') ): the_row() ?>
                        <div class="swiper-slide card">
                            <?php $image = get_sub_field('image'); ?>
                            <?php if( $image ): ?>
                                <img src="<?php echo $image['url']?>" alt="<?php echo $image['alt'] ?>">
                            <?php endif; ?>

                            <?php if( get_sub_field('legend') ): ?>
                                <h4><?php the_sub_field('legend'); ?></h4>
                            <?php endif; ?>
                        </div>
                    <?php endwhile; ?>

                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
    <?php endif; ?>

<?php get_footer(); ?>