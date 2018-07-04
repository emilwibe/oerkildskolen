<?php
$bgIMG;
if(get_sub_field('global_flex_quote_bgImg')){
  $bgIMG = get_sub_field('global_flex_quote_bgImg');
}
?>
<div class="wrapper fw module quote" style="background-color:<?php echo  get_sub_field('global_flex_quote_bgcolor'); ?>;background-image:url('<?php echo wp_get_attachment_url($bgIMG); ?>');">
  <?php if(get_sub_field('global_flex_quote_bgImg')) : ?>

    <div class="overlay"></div>

  <?php endif; ?>

  <div class="wrapper sm quote text">
    <?php if(get_sub_field('global_flex_quote_author')) : ?>
    <q cite="<?php the_sub_field('global_flex_quote_author'); ?>" style="color:<?php the_sub_field('global_flex_quote_color'); ?>"><?php the_sub_field('global_flex_quote_text'); ?></q>

    <span class="quote author" style="color:<?php the_sub_field('global_flex_quote_color'); ?>">- <?php the_sub_field('global_flex_quote_author'); ?></span>

    <?php else : ?>

    <blockquote style="color:<?php the_sub_field('global_flex_quote_color'); ?>"><?php the_sub_field('global_flex_quote_text'); ?></blockquote>

    <?php endif; ?>

  </div>

</div><!--/.wrapper.fw.module.quote-->

<?php unset($bgIMG); ?>
