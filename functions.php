<?php

add_action("wp_enqueue_scripts", function(){
  wp_enqueue_style("core-style", get_template_directory_uri() . "/dist/core.min.css", "1.1", "");
  wp_enqueue_script("core-scripts-head", get_template_directory_uri() . "/dist/core-head.min.js", "1.1", "", false);
  wp_enqueue_script("core-scripts-footer", get_template_directory_uri() . "/dist/core-footer.min.js?" . "1.1", "", '', true);
});

register_nav_menus(array(
  "primary-nav" => "Primary Nav"
));

add_theme_support('title-tag');
add_theme_support('post-thumbnails');

add_filter('style_loader_tag', 'myplugin_remove_type_attr', 10, 2);
add_filter('script_loader_tag', 'myplugin_remove_type_attr', 10, 2);

function myplugin_remove_type_attr($tag, $handle) {
    return preg_replace( "/type=['\"]text\/(javascript|css)['\"]/", '', $tag );
}
?>
