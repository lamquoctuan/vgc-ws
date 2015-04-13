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

//add_action( 'wp_footer', 'my_action_javascript' ); // Write our JS below here

function my_action_javascript() { ?>
    <script type="text/javascript" >
        console.log('my_script');
        $vgc(document).ready(function($) {
            var data = {
                'action': 'my_action',
                'whatever': 1234
            };
            $vgc.post('/ajax/', data, function(response) {
                alert('Got this from the server: ' + response);
            });
        });
    </script> <?php
}

function pagination($pages = '', $range = 5)
{
    $showItems = ($range * 2)+1;

    global $paged;
    if(empty($paged)) $paged = 1;

    if($pages == '')
    {
        global $wp_query;
        $pages = $wp_query->max_num_pages;
        if(!$pages)
        {
            $pages = 1;
        }
    }

    if(1 != $pages)
    {
        echo "<div class=\"pages\"><strong>Page:</strong><ol>";
//        if($paged > 2 && $paged > $range+1 && $showItems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo; First</a>";
        if($paged > 1)
            echo "<li><a href=\"".get_pagenum_link($paged + 1)."\" class=\"prev i-prev\">&nbsp;</a></li>";
        for ($i=1; $i <= $pages; $i++)
        {
            if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showItems ))
            {
                echo ($paged == $i)? "<li class=\"current\">".$i."</li>":"<li><a href=\"".get_pagenum_link($i)."\">".$i."</a></li>";
            }
        }
        if ($paged < $pages)
            echo "<li><a href=\"".get_pagenum_link($paged + 1)."\" class=\"next i-next\">&nbsp;</a></li>";
//        if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showItems < $pages) echo "<a href='".get_pagenum_link($pages)."'>Last &raquo;</a>";
        echo "</ol></div>\n";
    }
}

if (! function_exists('getTerm')) {
    function getTerm() {
        global $post;
        $taxonomyNames = get_object_taxonomies( $post );
        foreach($taxonomyNames as $taxName){
            if ( ($terms = get_the_terms($post->ID, $taxName)) !== false ) {
                foreach($terms as $term) {
                    $termLink = get_term_link( $term );
                    if ( is_wp_error( $termLink ) ) {
                        continue;
                    }
                }
                break;
            }
        }
        if (! isset($term) || !isset($termLink)) {
            return null;
        }
        else {
            $termReturn = $term;
            $termReturn->link = $termLink;
            return $termReturn;
        }
    }
}