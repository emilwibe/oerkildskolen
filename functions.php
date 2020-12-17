<?php
header("Expires: Tue, 01 Jan 2000 00:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

add_action("wp_enqueue_scripts", function(){
  wp_enqueue_style("core-style", get_template_directory_uri() . "/dist/core.min.css", time(), "");
  wp_enqueue_script("core-scripts-head", get_template_directory_uri() . "/dist/core-head.min.js", time(), "", false);
  wp_enqueue_script("core-scripts-footer", get_template_directory_uri() . "/dist/core-footer.min.js?" . time(), "", '', true);
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

// ACF ADDING OPTIONS PAGE
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Flere indstillinger',
		'menu_title'	=> 'Flere indstillinger',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> true
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Sidefod',
		'menu_title'	=> 'Sidefod',
		'parent_slug'	=> 'theme-general-settings',
	));
		
}
