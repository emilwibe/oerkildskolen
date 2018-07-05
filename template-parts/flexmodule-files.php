<?php if(have_rows('global_flex_files_list_repeater')) : ?>

  <div class="wrapper sm2 module files">
    <ul>
    <?php while(have_rows('global_flex_files_list_repeater')) : the_row(); ?>

      <li><a href="<?php the_sub_field('global_flex_files_list_repeater_file'); ?>"><?php the_sub_field('global_flex_files_list_repeater_title'); ?></a></li>
    <?php endwhile; ?>

    </ul>
  </div><!--/.wrapper-->
<?php endif; ?>
