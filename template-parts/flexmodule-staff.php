<?php if(have_rows('global_flex_staff_repeater')) : ?>

  <div class="wrapper md module staff row lg-col-25 md-col-33 sm-col-100 gutter-size-50">
  <?php while(have_rows('global_flex_staff_repeater')) : the_row(); ?>

    <?php
      $staffImage;
      if(get_sub_field('global_flex_staff_repeater_img')){
        $staffImage = get_sub_field('global_flex_staff_repeater_img');
      } else {
        $staffImage = get_template_directory_uri() . '/assets/placeholder.png';
      }
    ?>

    <div class="member">
      <div>
        <div>
          <img class="staff-image" src="<?php echo $staffImage ?>" alt="">
          <div class="staff-name"><?php the_sub_field('global_flex_staff_repeater_name'); ?></div>
          <div class="staff-description"><?php the_sub_field('global_flex_staff_repeater_description'); ?></div>
        </div>
      </div>
    </div>
  <?php endwhile; ?>

  </div><!--/.wrapper.md-->
<?php endif; ?>
