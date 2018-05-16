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
    <header class="header primary">
      <a href="<?php echo get_site_url(); ?>" class="logo-link"><img src="<?php echo get_template_directory_uri() . "/assets/oerkildskolen-logo-black.svg"; ?>" alt="Ørkildskolen Logo" class="logo"></a>

      <?php get_template_part("template-parts/nav", "primary"); ?>

    </header><!--/.header.primary-->
  </div><!--/.wrapper.lg-->

<?php get_template_part('template-parts/img', 'header'); ?>
