<?php
/*
Template Name: Шаблон для розкладу рейсів
*/
?>

<?php get_header(); ?>


<main>
	<div class="container">
    <div class="row">
		<div class="col-xs-12">
        <script type="text/javascript">
            function btframemsg() {
                var frame = document.getElementById('btframe');
                frame.contentWindow.postMessage({'cmd':'knock', 'lang':'ua', 'url': window.location.href},'*');
            }
            window.addEventListener('message', function(event) {
                var frame = document.getElementById('btframe');
                if (event.data.cmd==='resize') {
                    frame.height=event.data.newsize;
                };
                if ((event.data.cmd==='redirect')&&(event.data.url)) {
                    window.open(event.data.url,"_self");
                };
            });
        </script>
        <iframe id="btframe" name="btframe"
                src="https://dealer.zubustik.com.ua/frame/#/frameid/e4afe4af42a55a12d55fbd9d3134f17d?lang=ua&height=400&logo=a5027.png&style=a5027&name=NADIYA&url=nadiya.biz&proto=http&phones=%5B%22%2B38-098-637-54-37%22%2C%22%2B38-066-336-10-42%22%2C%22%2B38-097-707-07-02%22%2C%22%2B38-099-707-07-02%22%5D"
                width="100%" frameborder="0" marginwidth="5px" marginheight="5px"
                scrolling="auto"
                onload="window.setTimeout(btframemsg,1000)" >
        </iframe>
      </div>
    </div>
		<div class="row">
			<div class="col-md-9">
				<h1><?php the_title(); ?></h1>

				<?php if (have_posts()): while (have_posts()): the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile; endif; ?>
			</div>
			<div class="col-md-3">
				<?php the_widget( 'WP_Nav_Menu_Widget', array('nav_menu' => 'menu-routes') ); ?>
			</div>
		</div>
	</div>
</main>


<?php get_footer(); ?>