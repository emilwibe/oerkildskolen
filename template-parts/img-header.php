<?php
  $image = get_field('image_header');
  $size = 'full';

  if($image) : ?>

  <div class="wrapper lg header image">
    <?php echo wp_get_attachment_image($image, $size); ?>

  </div><!--/.wrapper.lg.header.img-->
<?php endif; ?>
