<?php if(have_rows('global_flex_date-week_list_activity')) : ?>

  <div class="wrapper md module activity">
    <ul>
  <?php while(have_rows('global_flex_date-week_list_activity')) : the_row(); ?>

      <li>

        hello

      </li>
  <?php endwhile; ?>

  </ul>
</div><!--/.wrapper.module.activity
<?php endif; ?>
