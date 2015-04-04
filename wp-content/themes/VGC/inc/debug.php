<?php
//Debug area
if ( WP_DEBUG ) {
    add_action('wp_head', 'display_template');
    function display_template() {
        global $template;
        $filename = basename($template);
        echo '<script>console.log("'.$filename.'");</script>';
    }
}