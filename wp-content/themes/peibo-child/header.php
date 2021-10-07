<!doctype html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">       
        <link rel="apple-touch-icon" sizes="57x57" href="/wp-content/themes/peibo-child/assets/img/favicon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="/wp-content/themes/peibo-child/assets/img/favicon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/wp-content/themes/peibo-child/assets/img/favicon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="/wp-content/themes/peibo-child/assets/img/favicon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/wp-content/themes/peibo-child/assets/img/favicon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="/wp-content/themes/peibo-child/assets/img/favicon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="/wp-content/themes/peibo-child/assets/img/favicon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="/wp-content/themes/peibo-child/assets/img/favicon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="/wp-content/themes/peibo-child/assets/img/favicon/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="/wp-content/themes/peibo-child/assets/img/favicon/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/wp-content/themes/peibo-child/assets/img/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="/wp-content/themes/peibo-child/assets/img/favicon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/wp-content/themes/peibo-child/assets/img/favicon/favicon-16x16.png">
        <link rel="manifest" href="/wp-content/themes/peibo-child/assets/img/favicon/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/wp-content/themes/peibo-child/assets/img/favicon/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
        <!-- S T Y L E S - G E N E R A L -->
        <meta name="theme-color" content="#712a81" />
        <?php wp_head(); ?>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
        
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        
        <script>
            var siteURL = '<?php echo esc_url(site_url('')); ?>';
        </script>
    </head>
    <body <?php body_class('is-preload'); ?> style="display: none;">

    <div class="overProgress fadeX"></div>

    <div id="blockhh" class="head-block"></div>

    <!-- Header -->
    <header id="headerGeneral" class="g-header" data-blur-content>
      <div class="container-fluid d-none d-sm-none d-md-block">
          <div class="row justify-content-between d-flex">
            <div class="col-sm-5">
              <ul class="listHeader">
                  <li>
                    <a href="<?php echo esc_url(site_url('')); ?>">
                      <img src="/wp-content/themes/peibo-child/assets/img/logos/logoHeader.png" width="70%" class="imgHeader" />
                    </a>
                  </li>
                  <!--<li>
                    <a href="/personal">personal</a>
                  </li>-->
                  <!--<li>
                    <a href="/empresas">empresas</a>
                  </li>-->
                </ul>
            </div>
            <div class="col-sm-4 justify-content-end d-flex">
              <ul class="listHeader">
                  <li>
                    <a href="/personal#ContentContacto">contacto</a>
                  </li>
                  <li>
                    <a href="#">sign in</a>
                  </li>
                  <li>
                    <a href="#" class="btnSing">sign up</a>
                  </li>
                </ul>

            </div>
          </div>
      </div>
      <div class="container-fluid d-block d-sm-block d-md-none pt-4">
        <div class="d-flex justify-content-around bd-highlight mb-3">
          <div class="p-2 bd-highlight">
            <a href="<?php echo esc_url(site_url('')); ?>" class="">
              <img src="/wp-content/themes/peibo-child/assets/img/logos/logoHeader.png" width="50%" class="imgHeader" />
            </a>
          </div>
          <div class="p-2 bd-highlight">
           <a>
              <i class="fa fa-bars iconHambur"></i>
            </a>
          </div>
        </div>
      </div>
    </header>

    <div class="menuDesMobile  d-block d-sm-block d-md-none container-fluid menu-none">
      <div class="contentCloseMobile">
        <img src="/wp-content/themes/peibo-child/assets/img/iconClose.svg" class="iconCloseMobile">
      </div>
      <div class="row d-flex justify-content-center">
        <div class="col-sm-12">
          <ul>
            <!--<li>
              <a href="/personal">personal <i class="fa fa-chevron-right"></i></a>
            </li>-->
            <!--<li>
              <a href="/empresas">empresas <i class="fa fa-chevron-right"></i></a>
            </li>
            <li>
              <hr class="menuMolbileHr" />
            </li>-->
            <li>
              <a href="/personal#ContentContacto">contacto <i class="fa fa-chevron-right"></i></a>
            </li>
            <li>
              <a href="#">sign in <i class="fa fa-chevron-right"></i></a>
            </li>
            <li>
              <a href="#" class="btnSing">sign up</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    
    <!-- Main -->
    <main data-blur-content>
      <div id="primary" class="content-area">