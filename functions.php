<?php

add_action("wp_enqueue_scripts", function(){
  wp_enqueue_style("core-style", get_template_directory_uri() . "/dist/core.min.css", "", "");
  wp_enqueue_script("core-scripts-head", get_template_directory_uri() . "/dist/core-head.min.js", "", "", false);
  wp_enqueue_script("core-scripts-footer", get_template_directory_uri() . "/dist/core-footer.min.js", "", "", true);
});

register_nav_menus(array(
  "primary-nav" => "Primary Nav"
));

add_theme_support('title-tag');

add_filter( 'post_thumbnail_html', 'remove_width_attribute', 10 );
add_filter( 'image_send_to_editor', 'remove_width_attribute', 10 );

function remove_width_attribute( $html ) {
   $html = preg_replace( '/(width|height)="\d*"\s/', "", $html );
   return $html;
}
?>
