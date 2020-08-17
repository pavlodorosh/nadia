<?php get_header(); ?>




<?php if( (is_page(9825))  ):?>

<main>
	<div class="container">
		<h1><?php the_title(); ?></h1>
		<section>
            <div class="row">

            <?php
                  global $paged;
                  if (get_query_var( 'paged' ))
                  $my_page = get_query_var( 'paged' );
                  else {
                  if( get_query_var( 'page' ) )
                  $my_page = get_query_var( 'page' );
                  else
                  $my_page = 1;
                  set_query_var( 'paged', $my_page );
                  $paged = $my_page;
                  }
                  $args = array(
                     'paged' => $my_page,
                     'posts_per_page' => 12,
                     'post_type'   => 'post',
                     'post_status' => 'publish',
                  );
                  $my_query = new WP_Query( $args );
               while ($my_query->have_posts()) : $my_query->the_post();
               ?>

                  <div class="product-layout col-lg-3 col-md-4 col-6">
                     <a href="<?php the_permalink(); ?>">
                        <div class="product-thumb transition">
                           <div class="image">
                              <img src="<?php the_post_thumbnail_url(); ?>" class="card-img-top" alt="...">
                           </div>
                        </div>
                        <h5 class="card-title"><?php the_title(); ?></h5>
                     </a>
                  </div>
            <?php
               endwhile;
                  wp_reset_query();
               ?>

            </div>

            <div class="row pagination">
               <div class="col-12 text-right">
                  <nav aria-label="navigation">

                     <?php
                        wp_pagenavi( array( 'query' => $my_query ) );
                     ?>
                  </nav>
               </div>
			</div>

		</section>
	</div>
</main>

<?php else: ?>

<main>
	<div class="container">
		<h1><?php the_title(); ?></h1>
			<section>
				<?php if (have_posts()): while (have_posts()): the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile; endif; ?>
			</section>
			<?php
			  //get_search_form();
			  //get_sidebar();
			?>

	</div>
</main>

<?php endif; ?>

<?php get_footer(); ?>