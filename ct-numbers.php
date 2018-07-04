<?php
/*
Template Name: I Tal
*/
?>

<?php get_header(); ?>

  <main>

  <?php if(!is_front_page()) : ?>

  <div class="wrapper sm">
    <h1><?php the_title(); ?></h1>
  </div><!--/.wrapper-md-->

  <div class="wrapper lg">
    <div class="antal"></div>
    <div class="antal"></div>
  </div>

  <?php endif; ?>

  <?php if(have_posts()) : ?>
    <?php while(have_posts()) : the_post(); ?>

      <div class="wrapper sm">
        <?php the_content(); ?>
      </div><!--/.wrapper.sm-->
    <?php endwhile; ?>
  <?php endif; ?>

  <?php get_template_part('template-parts/global', 'flex'); ?>

  </main>
<?php get_footer(); ?>
