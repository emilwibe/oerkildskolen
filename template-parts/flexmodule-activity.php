<?php if(have_rows('global_flex_date-week_list_activity')) : ?>

  <div class="wrapper sm module activity">
    <ul>
  <?php while(have_rows('global_flex_date-week_list_activity')) : the_row(); ?>

      <li class="flex align-center">
        <div class="date">
          <span class="number"><?php the_sub_field('global_flex_date-week_list-number'); ?></span>
          <span class="week-date"><?php the_sub_field('global_flex_date-week_list-week-month'); ?></span>
          <time class="time"><?php the_sub_field('global_flex_date-week_list_time'); ?></time>
        </div>
        <div class="description"><?php the_sub_field('global_flex_date-week_list-description'); ?></div>
      </li>
  <?php endwhile; ?>

  </ul>
</div><!--/.wrapper.module.activity-->
<?php endif; ?>
