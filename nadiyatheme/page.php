<?php get_header(); ?>

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

<?php get_footer(); ?>