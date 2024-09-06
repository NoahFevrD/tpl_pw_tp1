<!-- SECTION FOOTER -->
<footer class="footer">
        <div class="wrapper">
            <div class="flex">
                <a href="<?php bloginfo('url') ?>" class="logo">
                    <svg class="icon icon--md">
                        <use xlink:href="#icon-logo"></use>
                    </svg>
                    <?php if( have_rows('logo_name', 'options') ): ?>
                        <?php while( have_rows('logo_name', 'options') ): the_row() ?>
                            <?php if( get_sub_field('bold')): ?>
                                <?php the_sub_field('text') ?>
                            <?php else: ?>    
                                <span><?php the_sub_field('text') ?></span>
                            <?php endif; ?>
                        <?php endwhile; ?>
                    <?php else:?>
                        <?php bloginfo('name'); ?>
                    <?php endif ?>
                </a>

                <?php if( have_rows('socials', 'options') ): ?>
                    <ul class="socials">
                        <?php while( have_rows('socials', 'options') ): the_row() ?>

                            <li>
                                <a href="<?php the_sub_field('link'); ?>">
                                    <svg class="icon icon--md">
                                        <use xlink:href="#icon-<?php the_sub_field('name') ?>"></use>
                                    </svg>
                                </a>
                            </li>

                        <?php endwhile; ?>
                    </ul>
                <?php endif; ?>
            </div>

            <hr>

            <p class="small">©<?php echo date('Y') ?> <?php the_field('copyright', 'options') ?></p>
        </div>
    </footer>

    <?php wp_footer(); ?>

</body>

</html>