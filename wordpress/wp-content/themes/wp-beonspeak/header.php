<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title><?php wp_title( '' ); ?><?php if ( wp_title( '', false ) ) { echo ' :'; } ?> <?php bloginfo( 'name' ); ?></title>

  <link href="http://www.google-analytics.com/" rel="dns-prefetch"><!-- dns prefetch -->

  <!-- icons -->
  <link href="<?php echo get_template_directory_uri(); ?>/favicon.ico" rel="shortcut icon">
  <!--[if lt IE 8]>
  <div style=' clear: both; text-align:center; position: relative;'>
    <a href="https://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="//storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" alt="" /></a>
  </div>
  <![endif]-->
  <!--[if lt IE 9]>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/selectivizr/1.0.2/selectivizr-min.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
  <!-- css + javascript -->
  <link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,400i,700,700i&amp;subset=cyrillic" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-121729741-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-121729741-1');
	</script>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <div id="motopress-main" class="main-holder">
    <!--Begin #motopress-main-->
    <header class="motopress-wrapper header">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="row">
              <div class="span4 hidden-phone" data-motopress-type="static">
              </div>
              <!-- Social Links -->
              <div class="span5 header-search">
                <form class="search" method="get" action="<?php echo home_url(); ?>" role="search">
                  <input class="search-input" type="search" name="s" placeholder="Поиск...">
                  <button class="search-submit" type="submit" role="button"><i class="fa fa-search" aria-hidden="true"></i></button>
                </form><!-- /search -->
              </div>
              <div class="span2" data-motopress-type="static">
                <div class="social-nets-wrapper">
                  <ul class="social">
                    <li><a href="https://www.facebook.com/groups/beonspeak/about/" title="facebook"></a></li>
                    <li><a class="fab fa-vk" href="https://vk.com/beonspeak" title="vkontakte"></a></li>
                    <li><a class="fab fa-instagram" href="https://www.instagram.com/beonspeak" title="instagram"></a></li>
                  </ul>
                </div>
              </div>
              <!-- /Social Links -->

            </div>
            <div class="row">
              <div class="span2" data-motopress-type="static">
                <!-- BEGIN LOGO -->
                <div class="logo pull-left">
                  <a href="<?php echo home_url(); ?>" class="logo_h logo_h__img"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Language School <?php wp_title( '' ); ?>" title="<?php wp_title( '' ); ?>"></a>
                  <p class="logo_tagline"><?php wp_title( '' ); ?></p>
                  <!-- Site Tagline -->
                </div>
                <!-- END LOGO -->
              </div>
              <div class="span9">
                <div data-motopress-type="static">
                  <nav class="nav nav__primary clearfix">
                    <?php wpeHeadNav(); ?>
                  </nav>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
