<?php get_header(); ?>
<main>
  <?php if(get_field('index_signature')) : ?>

  <div class="wrapper md">
  <h1><?php the_field('index_signature'); ?></h1>
  </div><!--/.wrapper.md-->

  <?php endif; ?>

  <div class="wrapper md row lg-col-66-33 md-col-66-33 sm-col-100">
    <div>
      <div>

      <div class="introduction">
        
              <?php

                if(get_field('index_introduction')){
                  the_field('index_introduction');
                }

              ?>
      </div><!--/.introduction-->
      </div>
    </div>

    <div>
      <div>
                <?php get_template_part('template-parts/index', 'posts'); ?>
      </div>
    </div>
  </div><!--/.wrapper.sm-->

  <div class="wrapper lg">

  <?php get_template_part('template-parts/index', 'featured'); ?>

</div><!--/.wrapper.lg-->

<?php get_template_part('template-parts/global', 'flex'); ?>

</main>
<?php get_footer(); ?>
