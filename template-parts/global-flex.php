<?php if(have_rows('global_flex')) : ?>
  <?php while(have_rows('global_flex')) : the_row(); ?>

    <?php if(get_row_layout() == 'global_flex_text') : ?>

      <div class="wrapper sm module text">
        <?php the_sub_field('global_flex_text_module'); ?>
      </div><!--/.wrapper.sm.module.text-->

    <?php elseif(get_row_layout() == 'global_flex_quote') : ?>

      <div class="wrapper fw module quote" style="background-color:<?php the_sub_field('global_flex_quote_bgcolor'); ?>;background-image:url("<?php the_sub_field('global_flex_quote_bgImg'); ?>");">

        <div class="wrapper sm quote text">
          <q cite="<?php the_sub_field('global_flex_quote_author'); ?>" style="color:<?php the_sub_field('global_flex_quote_color'); ?>"><?php the_sub_field('global_flex_quote_text'); ?></q>
          <?php if(get_sub_field('global_flex_quote_author')) : ?>

          <span class="quote author" style="color:<?php the_sub_field('global_flex_quote_color'); ?>">- <?php the_sub_field('global_flex_quote_author'); ?></span>
          <?php endif; ?>

        </div>

      </div><!--/.wrapper.fw.module.quote-->

    <?php endif; ?>

  <?php endwhile; ?>
<?php endif; ?>
