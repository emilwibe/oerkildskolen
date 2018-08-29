<?php
    if(get_field('image_header')){
        $image = get_field('image_header');

        echo '<meta property="og:image" content="' . str_replace("ørkildskolen", "xn--rkildskolen-fgb", wp_get_attachment_url($image)) . '" />';
      
    }
?>