<div class="wrapper <?php the_sub_field('global_flex_video_width'); ?>">
  <div class="video-flex-wrapper flex-module">

    <video controls poster="<?php the_sub_field( 'global_flex_video_poster' ); ?>">
      <source src="<?php the_sub_field('global_flex_video'); ?>" type="video/mp4">
      Din browser understøtter ikke HTML5 video 
    </video>
    <button class="oe-video-button play-video">Afspil video</button>
  </div><!--/.video-wrapper-->
<?php
  if ( get_sub_field( 'global_flex_video_text' ) ) {
    the_sub_field( 'global_flex_video_text' );
  }
?>

</div><!--/.wrapper-->
