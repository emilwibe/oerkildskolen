<?php get_header(); ?>
<main>

  <div class="wrapper md">

    <div class="row lg-col-33-66 md-col-33-66 sm-col-100 introduction">
        <div>
          <div>
            <span class="hw"><?php the_field('index_signature'); ?></span>
          </div>
        </div>
        <div>
          <div>
            <?php

              if(get_field('index_introduction')){
                the_field('index_introduction');
              }

            ?>

          </div>
        </div>

  </div><!--/.row-->

  <?php get_template_part('template-parts/index', 'featured'); ?>

</div><!--/.wrapper.lg-->

<?php get_template_part('template-parts/global', 'flex'); ?>

</main>
<?php get_footer(); ?>
