<?php get_header(); ?>
<div class="main-heading">
	<h1><?php the_title(); ?></h1>
</div>

<div class="container">
	<div class="error text-center">
		<h1>404</h1>
		<p><?php echo __('УПС! Щось пішло не так.'); ?></p>
		<p><a href="/" class="btn-blue">Перейти на головну сторінку</a></p>
	</div>
</div>

<?php get_footer(); ?>