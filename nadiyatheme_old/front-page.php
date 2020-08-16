<?php get_header(); ?>




	<div class="content">
        <div class="container">
            <div class="row d-sm-none">
                <div class="cotact_number col-12 ">
                    <!-- Example split danger button -->
                    <div class="btn-group">
                        <button type="button" class="btn "><a href="tel:+380997070702"><img src="<?php bloginfo('template_directory'); ?>/img/viber.png"/> +38 (099) 70-70-702</a></button>
                        <button type="button" class="btn  dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu">
                            <h5 class="phone_ua">Україна - Польща</h5>
                            <ul class="list-unstyled">
                                <li><a href="tel:+380997070702"><img src="<?php bloginfo('template_directory'); ?>/img/viber.png"/> +38 (099) 70-70-702</a></li>
                                <li><a href="tel:+380977070205"><img src="<?php bloginfo('template_directory'); ?>/img/kyivstar.png"/> +38 (097) 70-70-205</a></li>
                                <li><a href="tel:+380737070210"><img src="<?php bloginfo('template_directory'); ?>/img/lifecell.png"/> +38 (073) 70-70-210</a></li>
                            </ul>
                            <h5>Польща - Україна</h5>
                            <ul class="list-unstyled">
                                <li><a href="tel:+48722704400"><img src="<?php bloginfo('template_directory'); ?>/img/play.png"/> +48 (722) 704-400</a></li>
                                <li><a href="tel:+48722704401"><img src="<?php bloginfo('template_directory'); ?>/img/play.png"/> +48 (722) 704-401</a></li>
                            </ul>
                            <h5>Міжміські перевезення</h5>
                            <ul class="list-unstyled">
                                <li><a href="tel:+380663361042"><img src="<?php bloginfo('template_directory'); ?>/img/vodafone.png"/> +38 (066) 336-10-42</a></li>
                                <li><a href="tel:+380986375437"><img src="<?php bloginfo('template_directory'); ?>/img/kyivstar.png"/> +38 (098) 637-54-37</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="rezerv">
                    <div class="col-md-6 col-sm-12">
                        <h1>Міжнародні перевезення</h1>
                        <p>
                            Ми здійснюємо міжнародні пасажирські перевезення до Польщі, на постійній основі.
    Якщо у вас є запитання, задайте його за телефоном вказаним на сайті, в Viber,
    або напишіть нам на електрону адресу.
                        </p>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="form-rezerv">
                            <!-- <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fas fa-map-marker-alt"></i></span>
                                    <input class="form-control form-control-sm" type="text" placeholder="Місце відправлення">
                                </div>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fas fa-map-pin"></i></span>
                                    <input class="form-control form-control-sm" type="text" placeholder="Місце прибуття">
                                </div>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fas fa-calendar-alt"></i></span>
                                    <input class="form-control form-control-sm" type="text" placeholder="Дата поїздки">
                                </div>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fas fa-user-friends"></i></span>
                                    <input class="form-control form-control-sm" type="text" placeholder="Кількість пасажирів">
                                </div>
                            </div>
                            <button type="button" class="btn btn-block btn-secondary">
                                Знайти квиток
                            </button> -->

                            <?php echo do_shortcode('[bus-search-form]'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




<!-- <div class="hideOverflow">
  <div class="container map-wrapper hidden-xs">

      <div id="map"></div>
      <div id="map-panel">
        <h4>Оберіть один із наших маршрутів:</h4>
        <select id="myRoute">
          <option value="BoryspilGdansk">Бориспіль – Гданськ - Бориспіль</option>
          <option value="CherkassyWroclaw">Черкаси – Вроцлав - Черкаси</option>
          <option value="RivneWarshava">Рівне - Варшава - Рівне</option>
          <option value="ZarichneKyiv">Зарічне - Київ - Зарічне</option>
          <option value="ZarichneTernopil">Зарічне - Тернопіль - Зарічне</option>
          <option value="ZarichneLutsk">Зарічне – Луцьк – Зарічне</option>
          <option value="ZarichneBorove">Зарічне - Борове - Зарічне</option>
        </select>
      </div>

  </div>
  <script src="<?php bloginfo('template_directory'); ?>/js/map.js"></script>
</div>

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

      <div class="col-xs-12 col-md-9">
        <section>
            <?php if (have_posts()): while (have_posts()): the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile; endif; ?>
        </section>
      </div>

      <div class="col-xs-12 col-md-3">
        <div class="sidebar">
          <h3>Новини</h3>
            <?php
            $args = array( 'posts_per_page' => 4, 'category_name' => 'news' );
            $lastposts = get_posts( $args );
            foreach( $lastposts as $post ){ setup_postdata($post);
                ?>
              <div class="item">
                <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                  <?php the_content(); ?>
              </div>
                <?php
            }
            wp_reset_postdata(); ?>
        </div>
      </div>
    </div>
  </div>
</main> -->

<?php get_footer(); ?>