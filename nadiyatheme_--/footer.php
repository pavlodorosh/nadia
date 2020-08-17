<?php
   $target = get_template_directory_uri(); ?>

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
                        <li><a href="tel:+380997070702"><img src="<?php echo $target; ?>/img/viber.png"/> +38 (099) 70-70-702</a></li>
                        <li><a href="tel:+380977070205"><img src="<?php echo $target; ?>/img/kyivstar.png"/> +38 (097) 70-70-205</a></li>
                        <li><a href="tel:+380737070210"><img src="<?php echo $target; ?>/img/lifecell.png"/> +38 (073) 70-70-210</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-sm-6 order-1 order-sm-1">
                    <h5>Польща - Україна</h5>
                    <ul class="list-unstyled">
                        <li><a href="tel:+48722704400"><img src="<?php echo $target; ?>/img/play.png"/> +48 (722) 704-400</a></li>
                        <li><a href="tel:+48722704401"><img src="<?php echo $target; ?>/img/play.png"/> +48 (722) 704-401</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-sm-6 order-1 order-sm-1">
                    <h5>Міжміські перевезення</h5>
                    <ul class="list-unstyled">
                        <li><a href="tel:+380663361042"><img src="<?php echo $target; ?>/img/vodafone.png"/> +38 (066) 336-10-42</a></li>
                        <li><a href="tel:+380986375437"><img src="<?php echo $target; ?>/img/kyivstar.png"/> +38 (098) 637-54-37</a></li>
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





<?php
if( is_front_page() ) { ?>
  <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAZoRlEPIDJy-BA__dqBmrZPBicuJmbpig&callback=initMap" async defer></script> -->
<?php } ?>

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

	<?php wp_footer(); ?>

    <!-- <script src="<?php echo $target; ?>/js/jquery-3.5.1.slim.min.js" type="text/javascript"></script> -->
    <!-- <script type="text/javascript" src="<?php echo $target; ?>/js/jquery-migrate-3.3.0.min.js"></script> -->

  <!-- <script type="text/javascript" src="<?php echo $target; ?>/js/bootstrap-4.4.1.js"></script>
  <script type="text/javascript" src="<?php echo $target; ?>/js/popper-1.16.0.min.js"></script> -->
  <script type="text/javascript" src="<?php echo $target; ?>/jsnew/comon.js"></script>



</body>
</html>