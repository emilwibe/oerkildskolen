<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/assets/icons/apple-touch-icon-57x57.png" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/assets/icons/apple-touch-icon-114x114.png" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/assets/icons/apple-touch-icon-72x72.png" />
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/assets/icons/apple-touch-icon-144x144.png" />
  <link rel="apple-touch-icon-precomposed" sizes="60x60" href="<?php echo get_template_directory_uri(); ?>/assets/icons/apple-touch-icon-60x60.png" />
  <link rel="apple-touch-icon-precomposed" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/assets/icons/apple-touch-icon-120x120.png" />
  <link rel="apple-touch-icon-precomposed" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/assets/icons/apple-touch-icon-76x76.png" />
  <link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/assets/icons/apple-touch-icon-152x152.png" />
  <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/icons/favicon-196x196.png" sizes="196x196" />
  <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/icons/favicon-96x96.png" sizes="96x96" />
  <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/icons/favicon-32x32.png" sizes="32x32" />
  <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/icons/favicon-16x16.png" sizes="16x16" />
  <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/icons/favicon-128.png" sizes="128x128" />
  <meta name="application-name" content="&nbsp;"/>
  <meta name="msapplication-TileColor" content="#FFFFFF" />
  <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/assets/icons/mstile-144x144.png" />
  <meta name="msapplication-square70x70logo" content="<?php echo get_template_directory_uri(); ?>/assets/icons/mstile-70x70.png" />
  <meta name="msapplication-square150x150logo" content="<?php echo get_template_directory_uri(); ?>/assets/icons/mstile-150x150.png" />
  <meta name="msapplication-wide310x150logo" content="<?php echo get_template_directory_uri(); ?>/assets/icons/mstile-310x150.png" />
  <meta name="msapplication-square310x310logo" content="<?php echo get_template_directory_uri(); ?>/assets/icons/mstile-310x310.png" />

  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <script>
    (function(){
      document.body.classList.add("enhanced");
      document.getElementsByTagName("html")[0].classList.remove("no-js");
    })();
  </script>

  <div class="wrapper lg">
    <ul class="intra-links">
      <li class="link aula"><a href="https://www.aula.dk/portal/#/login" target="_blank">Aula</a></li>
    </ul>
    <header class="header primary">
      <a href="#" id="nav-trigger" class="nav-trigger">Menu</a>
      <a href="<?php echo get_site_url(); ?>" class="logo-link"><img src="<?php echo get_template_directory_uri() . "/assets/oerkildskolen-logo-black.svg"; ?>" data-pnglogo="<?php echo get_template_directory_uri() . "/assets/oerkildskolen-logo-black.png"; ?>" alt="Ørkildskolen Logo" class="logo"></a>

      <?php get_template_part("template-parts/nav", "primary"); ?>

    </header><!--/.header.primary-->
  </div><!--/.wrapper.lg-->

  <?php
    if(!is_front_page()){
      get_template_part('template-parts/img', 'header');
    } else {
      get_template_part('template-parts/img', 'headerIndex');
    }
  ?>
