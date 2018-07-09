<?php if(have_rows('global_flex')) : ?>
  <?php while(have_rows('global_flex')) : the_row(); ?>

    <?php if(get_row_layout() == 'global_flex_text') : ?>

      <?php get_template_part('template-parts/flexmodule', 'text'); ?>

    <?php elseif(get_row_layout() == 'global_flex_quote') : ?>

      <?php get_template_part('template-parts/flexmodule', 'quote'); ?>

    <?php elseif(get_row_layout() == 'global_flex_date-week_list') : ?>

      <?php get_template_part('template-parts/flexmodule', 'activity'); ?>

    <?php elseif(get_row_layout() == 'global_flex_img') : ?>

      <?php get_template_part('template-parts/flexmodule', 'image'); ?>

    <?php elseif(get_row_layout() == 'global_flex_text-img') : ?>

      <?php get_template_part('template-parts/flexmodule', 'text_image'); ?>

    <?php elseif(get_row_layout() == 'global_flex_video') : ?>

      <?php get_template_part('template-parts/flexmodule', 'video'); ?>

    <?php elseif(get_row_layout() == 'global_flex_img-text') : ?>

      <?php get_template_part('template-parts/flexmodule', 'image_text'); ?>

    <?php elseif(get_row_layout() == 'global_flex_staff') : ?>

      <?php get_template_part('template-parts/flexmodule', 'staff'); ?>

    <?php elseif(get_row_layout() == 'global_flex_files_list') : ?>

      <?php get_template_part('template-parts/flexmodule', 'files'); ?>

    <?php elseif(get_row_layout() == 'global_flex_list') : ?>

      <?php get_template_part('template-parts/flexmodule', 'list2D'); ?>

    <?php endif; ?>

  <?php endwhile; ?>
<?php endif; ?>
