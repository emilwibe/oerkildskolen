<?php get_header(); ?>
<main>

  <div class="wrapper sm">

    <div class="introduction">
            <?php

              if(get_field('index_introduction')){
                the_field('index_introduction');
              }

            ?>
    </div><!--/.introduction-->
  </div><!--/.wrapper.sm-->

  <div class="wrapper lg">

  <?php get_template_part('template-parts/index', 'featured'); ?>

</div><!--/.wrapper.lg-->

<?php get_template_part('template-parts/global', 'flex'); ?>

</main>
<?php get_footer(); ?>
