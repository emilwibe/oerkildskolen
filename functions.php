<?php

add_action("wp_enqueue_scripts", function(){
  wp_enqueue_style("core-style", get_template_directory_uri() . "/dist/core.min.css", "", "");
  wp_enqueue_script("core-scripts-head", get_template_directory_uri() . "/dist/core-head.min.js", "", "", false);
  wp_enqueue_script("core-scripts-footer", get_template_directory_uri() . "/dist/core-footer.min.js" . rand(1, 194432898432), "", '', true);
});

register_nav_menus(array(
  "primary-nav" => "Primary Nav"
));

add_theme_support('title-tag');

add_filter('style_loader_tag', 'myplugin_remove_type_attr', 10, 2);
add_filter('script_loader_tag', 'myplugin_remove_type_attr', 10, 2);

function myplugin_remove_type_attr($tag, $handle) {
    return preg_replace( "/type=['\"]text\/(javascript|css)['\"]/", '', $tag );
}
?>
