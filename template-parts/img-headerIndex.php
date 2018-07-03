<?php
  $headerImgArray =[];
  if(have_rows('index_header_repeater')) :
    while ( have_rows('index_header_repeater') ) : the_row();

        $headerImgArray[] = get_sub_field('index_header_repeater_img');

    endwhile;
endif;

shuffle($headerImgArray);
$image = $headerImgArray[0];
$size = 'full';

?>

<div class="wrapper lg header image">
  <?php echo wp_get_attachment_image($image, $size); ?>

</div><!--/.wrapper.lg.header.img-->
