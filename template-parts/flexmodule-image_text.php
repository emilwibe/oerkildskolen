<div class="wrapper lg row lg-col-50 md-col-50 sm-col-100 module image-text">
  <div>
    <div>
      <?php
        $image = get_sub_field('global_flex_img-text_img');
        $size = 'full';
        if($image){
          echo wp_get_attachment_image($image, $size);
        }
        unset($image, $size);
      ?>
    </div>
  </div>
  <div>
    <div>
      <?php the_sub_field('global_flex_img-text_text'); ?>
    </div>
  </div>
</div><!--/.wrapper.lg.row-->
