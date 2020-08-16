<?php
/*
Template Name: Шаблон для відгуків
*/
?>

<?php get_header(); ?>


  <main>
    <div class="container">

        <h1><?php the_title(); ?></h1>

        <?php if (have_posts()): while (have_posts()): the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; endif; ?>

        <?php comments_template(); ?>

        </div>
    </main>


<?php get_footer(); ?>