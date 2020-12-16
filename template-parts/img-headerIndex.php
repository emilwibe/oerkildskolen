<?php
if ( get_field ( 'index_header_video' ) ) {
  $video = get_field ( 'index_header_video' );
  //var_dump ($video);
?>

  <section class="wrapper lg index-video">
    <video controls autoplay muted>
      <source src="<?php echo $video["url"]; ?>" type="video/mp4">
      Din browser understøtter ikke HTML5 video 
      </video>
  </section>

<?php
} else {
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

<?php }