<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php wp_title('Â«', true, 'right'); ?> <?php bloginfo('name'); ?></title>
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
  <?php wp_head(); ?>

  <?php  $target = get_template_directory_uri(); ?>

  <link rel="shortcut icon" href="<?php echo $target; ?>/images/favicon/favicon.ico" type="image/x-icon" />
  <link rel="icon" type="image/png" href="<?php echo $target; ?>/images/favicon/favicon-32x32.png" sizes="32x32" />
  <link rel="icon" type="image/png" href="<?php echo $target; ?>/images/favicon/favicon-16x16.png" sizes="16x16" />
  <link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?php echo $target; ?>/images/favicon/apple-touch-icon-57x57.png" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo $target; ?>/images/favicon/apple-touch-icon-114x114.png" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo $target; ?>/images/favicon/apple-touch-icon-72x72.png" />
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo $target; ?>/images/favicon/apple-touch-icon-144x144.png" />
  <link rel="apple-touch-icon-precomposed" sizes="120x120" href="<?php echo $target; ?>/images/favicon/apple-touch-icon-120x120.png" />
  <link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?php echo $target; ?>/images/favicon/apple-touch-icon-152x152.png" />


  <!-- Chrome, Firefox OS and Opera -->
  <meta name="theme-color" content="#1568b1">
  <!-- Windows Phone -->
  <meta name="msapplication-navbutton-color" content="#1568b1">
  <!-- iOS Safari -->
  <meta name="apple-mobile-web-app-status-bar-style" content="#1568b1">

  <script>
    // (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    //       (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    //     m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    // })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
    // ga('create', 'UA-73795369-1', 'auto');
    // ga('set', 'userId', '116759107');
    // ga('send', 'pageview');
  </script>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Limelight|PT+Sans:400,700|Open+Sans:400,300,600,700,800" />
  <link rel="stylesheet" type="text/css" href="<?php echo $target; ?>/bootstrap/bootstrap.min.css"/>
  <link rel="stylesheet" type="text/css" href="<?php echo $target; ?>/cssnew/style.css"/>




</head>
<body <?php body_class(); ?>>



     <header>
        <div class="header-top d-none d-sm-block">
            <div class="container">
                <div class="box">
                    <div class="logo">
                        <a href="/" title="Logo">
                            <img src="<?php echo $target; ?>/img/logo.png" alt="images">
                        </a>
                    </div>
                        <div class="call d-none d-sm-block">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#recall">
                                Замовити дзвінок
                            </button>
                        </div>
                </div>
            </div>
                <!-- End container -->
        </div>
            <!-- End header-top -->
            <div class="container">
                <nav class="navbar navbar-expand-sm navbar-light ">
                    <a class="navbar-brand d-sm-none" href="#"><img src="<?php echo $target; ?>/img/logo.png" alt="images"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <div class="call d-sm-none">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#recall">
                                Замовити дзвінок
                            </button>
                    </div>
                      <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link active" href="/" title="Home">Головна</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Розклад рейсів</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Новини</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" >Про нас</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" >Контакти</a>
                        </li>
                      </ul>
                      <div class="social">
                        <a href="https://www.facebook.com/" target="blank">
                            <img src="<?php echo $target; ?>/img/facebook-app-logo.png" title="Facebook" alt="Facebook">
                            <span class="call d-sm-none">Підписатись на Facebook</span>
                        </a>
                    </div>
                    </div>
                  </nav>
            </div>
            <!-- End megamenu -->
    </header><!-- /header -->