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






    <?php elseif(get_row_layout() == 'global_flex_img') : ?>

      <div class="wrapper <?php the_sub_field('global_flex_img_width'); ?> module img">
        <?php echo wp_get_attachment_image(get_sub_field('global_flex_img_src'), 'full'); ?>

      </div><!--/.wrapper.module.img-->

    <?php endif; ?>

  <?php endwhile; ?>
<?php endif; ?>
