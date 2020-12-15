<?php get_header(); ?>

<div class="container px-4 mx-auto">
    <?php
        while(have_posts()) {
            the_post(); ?>
            <h2>
                <?php the_title(); ?>
            </h2>
            <p>
                <?php the_content(); ?>
            </p>
        <?php }
    ?>
</div>

<?php get_footer(); ?>
