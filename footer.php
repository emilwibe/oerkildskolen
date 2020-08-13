<?php if( have_rows( 'footer_content_repeater', 'option' ) ) : ?>

  <ul class="footer list">
  <?php while( have_rows( 'footer_content_repeater', 'option' ) ) : the_row(); ?>

    <li><?php the_sub_field( 'text_footer_content_repeater' ); ?></li>

  <?php endwhile; ?>

  </ul>
<?php endif; ?>

  <ul class="footer list">
    <li>Ørkildskolen</li>
    <li>Skolegade / Østre Skolevej</li>
    <li>5700 Svendborg</li>
    <li>62 23 63 01</li>
    <li><a href="mailto:orkildskolen@svendborg.dk">orkildskolen@svendborg.dk</a></li>
  </ul>

  <?php wp_footer(); ?>
</body>
</html>
