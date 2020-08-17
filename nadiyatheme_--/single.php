<?php get_header(); ?>

<main>
    <div class="container">
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
        <hr>
        <p class="text-right"><small><u>Опубліковано</u>:
                <span class="day"><?php the_time('j'); ?></span>
                <span class="month"><?php the_time('M'); ?></span>
                <span class="year"><?php the_time('Y'); ?></span>
            </small>
        </p>
    </div>
</main>


<?php
// if ( has_post_thumbnail() ) {
//    the_post_thumbnail( 'medium' );
// }
?>



<?php get_footer(); ?>
