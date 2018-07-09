<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

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
      <li><a href="http://www.orkildskolen.skoleintra.dk/li">Personaleintra</a></li>
      <li><a href="http://www.orkildskolen.skoleintra.dk/fi">Forældreintra</a></li>
      <li><a href="http://www.orkildskolen.skoleintra.dk/pi">Elevintra</a></li>
    </ul>
    <header class="header primary">
      <div class="menu-toggle">
        <a href="#" id="nav-trigger">Menu</a>
      </div><!--/.menu-toggle-->
      <a href="<?php echo get_site_url(); ?>" class="logo-link"><img src="<?php echo get_template_directory_uri() . "/assets/oerkildskolen-logo-black.svg"; ?>" alt="Ørkildskolen Logo" class="logo"></a>

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
