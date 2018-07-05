<?php if(have_rows('numbers_students_repeater')) : ?>

  <div class="wrapper sm2 grades numbers">

  <?php while(have_rows('numbers_students_repeater')) : the_row(); ?>

      <div class="is-closed">
        <h3><?php the_sub_field('numbers_students_repeater_title'); ?></h3>
        <div class="grade">

        <?php if(have_rows('numbers_students_repeater_child')) : ?>
          <?php while(have_rows('numbers_students_repeater_child')) : the_row(); ?>

          <ul>
            <li class="b"><?php the_sub_field('numbers_students_repeater_child_title'); ?></li>
            <li><span>Piger</span><span><?php the_sub_field('numbers_students_repeater_child_girls'); ?></span></li>
            <li><span>Drenge</span><span><?php the_sub_field('numbers_students_repeater_child_boys'); ?></span></li>
            <li class="sum"><span>I alt</span><span><?php echo get_sub_field('numbers_students_repeater_child_girls') + get_sub_field('numbers_students_repeater_child_boys'); ?></span></li>
          </ul>
          <?php endwhile; ?>
        <?php endif; ?>

        </div>
      </div>

  <?php endwhile; ?>


  </div><!--/.wrapper.sm-->
<?php endif; ?>
