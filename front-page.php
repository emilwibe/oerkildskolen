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
</div><!--/.wrapper.lg-->

    </div>
  </div>
  <div>
    <div>



    </div>
  </div>
<!--

<div class="wrapper lg">
  <nav class="row lg-col-33 md-col-33 sm-col-100 nav blocks">
    <div>
      <div class="block">
        <a href="#">
          <img src="https://unsplash.it/760/360?random" alt="">
          <h3>Indskoling</h3>
        </a>
      </div>
    </div>
    <div>
      <div class="block">
        <a href="#">
          <img src="https://unsplash.it/760/360?random" alt="">
          <h3>Mellemtrin</h3>
        </a>
      </div>
    </div>
    <div>
      <div class="block">
        <a href="#">
          <img src="https://unsplash.it/760/360?random" alt="">
          <h3>Specialklasser</h3>
        </a>
      </div>
    </div>
  </nav><!--/.row--><!--
</div><!--/.wrapper.lg-->
</main>
<?php get_footer(); ?>
