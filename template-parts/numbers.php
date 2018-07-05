<?php if(have_rows('numbers_students_repeater')) : ?>

  <div class="wrapper sm">
    <ul>
  <?php while(have_rows('numbers_students_repeater')) : the_row(); ?>

      <li><?php the_sub_field('numbers_students_repeater_title'); ?></li>

  <?php endwhile; ?>

    </ul>
  </div><!--/.wrapper.sm-->
<?php endif; ?>
