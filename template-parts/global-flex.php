<?php if(have_rows('global_flex')) : ?>
  <?php while(have_rows('global_flex')) : the_row(); ?>

    <?php if(get_row_layout() == 'global_flex_text') : ?>

      <div class="wrapper sm module text">
        <?php the_sub_field('global_flex_text_module'); ?>
      </div><!--/.wrapper.sm.module.text-->






    <?php elseif(get_row_layout() == 'global_flex_quote') : ?>

      <?php
      $bgIMG;
      if(get_sub_field('global_flex_quote_bgImg')){
        $bgIMG = get_sub_field('global_flex_quote_bgImg');
      }
      ?>
      <div class="wrapper fw module quote" style="background-color:<?php echo  get_sub_field('global_flex_quote_bgcolor'); ?>;background-image:url('<?php echo wp_get_attachment_url($bgIMG); ?>');">
        <?php if(get_sub_field('global_flex_quote_bgImg')) : ?>

          <div class="overlay"></div>

        <?php endif; ?>

        <div class="wrapper sm quote text">
          <?php if(get_sub_field('global_flex_quote_author')) : ?>
          <q cite="<?php the_sub_field('global_flex_quote_author'); ?>" style="color:<?php the_sub_field('global_flex_quote_color'); ?>"><?php the_sub_field('global_flex_quote_text'); ?></q>

          <span class="quote author" style="color:<?php the_sub_field('global_flex_quote_color'); ?>">- <?php the_sub_field('global_flex_quote_author'); ?></span>

          <?php else : ?>

          <blockquote style="color:<?php the_sub_field('global_flex_quote_color'); ?>"><?php the_sub_field('global_flex_quote_text'); ?></blockquote>

          <?php endif; ?>

        </div>

      </div><!--/.wrapper.fw.module.quote-->

      <?php unset($bgIMG); ?>

    <?php elseif(get_row_layout() == 'global_flex_date-week_list') : ?>

    <?php get_template_part('temnplate-parts/flexmodule', 'activity'); ?>




    <?php elseif(get_row_layout() == 'global_flex_img') : ?>

      <div class="wrapper <?php the_sub_field('global_flex_img_width'); ?> module img">
        <?php echo wp_get_attachment_image(get_sub_field('global_flex_img_src'), 'full'); ?>

      </div><!--/.wrapper.module.img-->

    <?php elseif(get_row_layout() == 'global_flex_text-img') : ?>

      <div class="wrapper lg row lg-col-50 md-col-50 sm-col-100 module text-image">
        <div>
          <div>
            <?php the_sub_field('global_flex_text-img_text'); ?>
          </div>
        </div>
        <div>
          <div>
            <?php
              $image = get_sub_field('global_flex_text-img_img');
              $size = 'full';
              if($image){
                echo wp_get_attachment_image($image, $size);
              }
              unset($image, $size);
            ?>
          </div>
        </div>
      </div><!--/.wrapper.lg.row-->

    <?php elseif(get_row_layout() == 'global_flex_video') : ?>

      <div class="wrapper <?php the_sub_field('global_flex_video_width'); ?>">
        <div class="videoWrapper">
          <?php the_sub_field('global_flex_video'); ?>
        </div><!--/.videoWrapper-->
      </div><!--/.wrapper-->



    <?php elseif(get_row_layout() == 'global_flex_img-text') : ?>

      <div class="wrapper lg row lg-col-50 md-col-50 sm-col-100 module image-text">
        <div>
          <div>
            <?php
              $image = get_sub_field('global_flex_img-text_img');
              $size = 'full';
              if($image){
                echo wp_get_attachment_image($image, $size);
              }
              unset($image, $size);
            ?>
          </div>
        </div>
        <div>
          <div>
            <?php the_sub_field('global_flex_img-text_text'); ?>
          </div>
        </div>
      </div><!--/.wrapper.lg.row-->

    <?php elseif(get_row_layout == 'global_flex_staff') : ?>

      <?php get_template_part('template-parts/flexmodule', 'staff'); ?>

    <?php endif; ?>

  <?php endwhile; ?>
<?php endif; ?>
