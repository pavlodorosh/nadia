<?php
/*
Template Name: Шаблон виведення всіх новин
*/
?>

<?php get_header(); ?>

<main>
  <div class="container">
    <div class="row">
      <h1><?php the_title(); ?></h1>
        <?php
        $args = array(
            //      'posts_per_page' => 5,
            'category_name' => 'news'
        );
        $query = new WP_Query( $args );
        ?>
        <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

          <div class="media">
            <a href="<?php the_permalink()?>" class="pull-left" title="name of image"><?php the_post_thumbnail( 'medium' ); ?></a>
            <div class="media-body">
              <a href="<?php the_permalink()?>"><h4 class="media-heading"> <?php the_title(); ?></h4></a>
              <p><?php the_content(); ?></p>
            </div>
          </div>

        <?php endwhile;?>
        <?php endif; ?>
        <?php if (function_exists('wp_corenavi')) wp_corenavi(); ?>
    </div>
  </div>
</main>

<?php get_footer(); ?>