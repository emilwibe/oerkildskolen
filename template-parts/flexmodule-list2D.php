<div class="wrapper sm module list">
  <?php if(get_sub_field('global_flex_list_title')) : ?>

    <h3><?php the_sub_field('global_flex_list_title'); ?></h3>
  <?php endif; ?>

  <?php if(have_rows('global_flex_list_repeater')) : ?>

    <ul>
    <?php while(have_rows('global_flex_list_repeater')) : the_row(); ?>

      <li class="flex just-between"><span><?php the_sub_field('global_flex_list_repeater_left'); ?></span><span><?php the_sub_field('global_flex_list_repeater_right'); ?></span></li>

    <?php endwhile; ?>
  <?php endif; ?>

  </ul>
</div><!--/.wrapper-->
