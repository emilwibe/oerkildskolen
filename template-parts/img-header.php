  <div class="wrapper lg header image">
    <?php 
      if(has_post_thumbnail()){
        the_post_thumbnail();
      } else {
        
        $image = get_field('image_header');
        $size = 'full'; // (thumbnail, medium, large, full or custom size)

        if($image){
          echo wp_get_attachment_image( $image, $size );
        }
    ?>

    <?php } ?>
  </div><!--/.wrapper.lg.header.img-->