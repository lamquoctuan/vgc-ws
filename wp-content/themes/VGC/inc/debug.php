<?php
//Debug area
if (WP_DEBUG) {
    add_action('wp_head', 'display_template');
    function display_template()
    {
        global $template;
        $filename = basename($template);
        echo '<script>console.log("' . $filename . '");</script>';
    }
}

//add_action( 'wp_footer', 'my_action_javascript' ); // Write our JS below here

function my_action_javascript()
{ ?>
    <script type="text/javascript">
        console.log('my_script');
        $vgc(document).ready(function ($) {
            var data = {
                'action': 'my_action',
                'whatever': 1234
            };
            $vgc.post('/ajax/', data, function (response) {
                alert('Got this from the server: ' + response);
            });
        });
    </script> <?php
}

add_action( 'wp_footer', 'product_viewed_count' );
function product_viewed_count() {
    global $post;
    if (is_singular('product')) {
        $viewed = intval(get_field('viewed_count', $post->ID));
        $result = update_field('viewed_count', $viewed+1, $post->ID);
    }
}