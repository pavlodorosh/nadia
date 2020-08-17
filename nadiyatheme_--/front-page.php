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


                            <?php echo do_shortcode('[bus-search-form]'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>