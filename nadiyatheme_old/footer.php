    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6 order-2 order-sm-1">
                    <h4 class="title">
                        Про нас
                    </h4>
                    <p>
                        Компанія «НАДІЯ» з 2001 року надає послуги міжміських та міжнародних пасажирських перевезень, в якісних
                        та комфортних умовах.
                    </p>
                    <ul class="list-unstyled">
                        <li><i class="fas fa-map-marker-alt"></i>Україна, м. Рівне, вул. Київська 40 </li>
                        <li><a href="mailto:info@nadiya.biz"><i class="fas fa-envelope"></i>info@nadiya.biz</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-sm-6 orde-1 order-sm-1">
                    <h4 class="title">
                        Диспетчерська служба
                    </h4>
                    <h5 class="phone_ua">Україна - Польща</h5>
                    <ul class="list-unstyled">
                        <li><a href="tel:+380997070702"><img src="<?php bloginfo('template_directory'); ?>/img/viber.png"/> +38 (099) 70-70-702</a></li>
                        <li><a href="tel:+380977070205"><img src="<?php bloginfo('template_directory'); ?>/img/kyivstar.png"/> +38 (097) 70-70-205</a></li>
                        <li><a href="tel:+380737070210"><img src="<?php bloginfo('template_directory'); ?>/img/lifecell.png"/> +38 (073) 70-70-210</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-sm-6 order-1 order-sm-1">
                    <h5>Польща - Україна</h5>
                    <ul class="list-unstyled">
                        <li><a href="tel:+48722704400"><img src="<?php bloginfo('template_directory'); ?>/img/play.png"/> +48 (722) 704-400</a></li>
                        <li><a href="tel:+48722704401"><img src="<?php bloginfo('template_directory'); ?>/img/play.png"/> +48 (722) 704-401</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-sm-6 order-1 order-sm-1">
                    <h5>Міжміські перевезення</h5>
                    <ul class="list-unstyled">
                        <li><a href="tel:+380663361042"><img src="<?php bloginfo('template_directory'); ?>/img/vodafone.png"/> +38 (066) 336-10-42</a></li>
                        <li><a href="tel:+380986375437"><img src="<?php bloginfo('template_directory'); ?>/img/kyivstar.png"/> +38 (098) 637-54-37</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container copyright">
            <div class="row">
                <span class="col-md-6 col-xs-12">«НАДІЯ» © 2019. Всі права захищено</span>
                <span class="col-md-6 col-xs-12">До придбання квитка ознайомтесь з <a href="/">правилами та умовами</a></span>
            </div>
        </div>
    </footer>



	<!-- Modal -->
<div class="modal fade" id="recall" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
          <h5 class="modal-title" id="exampleModalCenterTitle">Замовити зворотній дзвінок</h5>
          <p>
            Залиште свої контактні дані,
            ми вам передзвонимо!
          </p>
        </div>
        <div class="modal-body">
            <div class="input-group">
                <span class="input-group-addon"><i class="fas fa-user"></i></span>
                <input class="form-control form-control-sm" type="text" placeholder="Ваше ім’я">
            </div>
            <div class="input-group">
                <span class="input-group-addon"><i class="fas fa-phone"></i></span>
                <input class="form-control form-control-sm" type="text" placeholder="Ваш номер телефону*">
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary btn-block" data-dismiss="modal">Замовити дзвінок</button>
        </div>
      </div>
    </div>
  </div>



<!-- <footer>
  <div class="container">

    <div class="row">
      <div class="col-sm-6 col-md-3">
        <h5>Наші маршрути</h5>
        <?php the_widget( 'WP_Nav_Menu_Widget', array('nav_menu' => 'menu-routes') );   ?>
      </div>
      <div class="col-sm-6 col-md-3">
        <h5>Меню</h5>
          <? wp_nav_menu(array('menu' => 'top-menu-main', 'menu_class' => '')); ?>
          <? wp_nav_menu(array('menu' => 'top-menu-sub', 'menu_class' => '')); ?>
      </div>

       <div class="clearfix visible-sm-block"></div>

      <div class="col-sm-6 col-md-3 mobile">
        <h5>Як з нами зв'язатися?</h5>
        <p><a href="tel:+380986375437"><img src="<?php bloginfo('template_directory'); ?>/images/mobile/kyivstar.png" alt="Київстар" /> +38 (098) 637-54-37</a></p>
        <p><a href="tel:+380663361042"><img src="https://mvp.tribesgds.com/dyn/oN/Ol/oNOlq7EhCV8/_/D417uw5nqT0/5M04/vodafone-logo.png" alt="Vodafone" style="width:32px; height:32px;"/> +38 (066) 336-10-42</a></p>
        <p><a href="skype:nadiya-biz" target="_blank" title="skype: nadiya-biz"><span class="fa-stack fa-lg">
          <i class="fa fa-square fa-stack-2x"></i>
          <i class="fa fa-skype fa-stack-1x fa-inverse"></i>
        </span> Nadiya-Biz</a></p>
        <h5>Для маршрутів до Польщі:</h5>
        <p><a href="tel:+380977070205"><img src="<?php bloginfo('template_directory'); ?>/images/mobile/kyivstar.png" alt="Київстар" /> +38 (097) 707-02-05</a></p>
        <p><a href="tel:+380997070702"><img src="https://mvp.tribesgds.com/dyn/oN/Ol/oNOlq7EhCV8/_/D417uw5nqT0/5M04/vodafone-logo.png" alt="Vodafone" style="width:32px; height:32px;"/> +38 (099) 707-07-02</a></p>
		   <p><a href="tel:+380737070210"><img src="https://cdn6.aptoide.com/imgs/9/4/6/946492a158beb42dc361d0a4fb72309c_icon.png?w=240" alt="Lifecell" style="width:32px; height:32px;"/> +38 (073) 707-02-10</a></p>
      </div>
      <div class="col-sm-6 col-md-3">
        <h5>Ми в соціальних мережах</h5>
        <div class="social">
         <a href="https://www.facebook.com/groups/211236535886803/" target="_blank" title="Facebook"><span class="fa-stack fa-lg">
            <i class="fa fa-square fa-stack-2x"></i>
            <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
          </span> FACEBOOK</a>
          <a href="https://plus.google.com/u/0/communities/102655088234126040669" target="_blank" title="Google+"><span class="fa-stack fa-lg">
            <i class="fa fa-square fa-stack-2x"></i>
            <i class="fa fa-google-plus fa-stack-1x fa-inverse"></i>
          </span> Google+</a>
        </div>
      </div>
    </div>

    <br />

    <div class="row">
      <div class="col-md-12">
        <div class="counter">
          <a href="https://www.linkedin.com/in/yuriyparay" target="_blank">&lt;/&gt; Developed by Yuriy Paray</a>
        </div>
        <p>Copyrights &copy; 2017. Всі права захищено | Компанія  "<a href="/" title="НАДІЯ">НАДІЯ</a>"</p>
      </div>
    </div>

  </div>
</footer> -->
<!-- test -->




<?php
if( is_front_page() ) { ?>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAZoRlEPIDJy-BA__dqBmrZPBicuJmbpig&callback=initMap" async defer></script>
<?php } ?>

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

	<?php wp_footer(); ?>

</body>
</html>