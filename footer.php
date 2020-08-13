<?php if( have_rows( 'footer_content_repeater', 'option' ) ) : ?>

  <ul class="footer list">
  <?php while( have_rows( 'footer_content_repeater', 'option' ) ) : the_row(); ?>

    <li><?php the_sub_field( 'text_footer_content_repeater' ); ?></li>

  <?php endwhile; ?>

  </ul>
<?php endif; ?>

  <?php wp_footer(); ?>
</body>
</html>
