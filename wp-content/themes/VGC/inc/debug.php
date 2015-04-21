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

    add_action('wp_head', 'show_sessions');
    function show_sessions()
    {
        global $_SESSION, $_POST;
        echo '<script>
console.log(\'Session: ' . json_encode($_SESSION) . '\');
console.log(\'Post: ' . json_encode($_POST) . '\');
        </script>';
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

add_action('wp_footer', 'productViewedCount');
function productViewedCount()
{
    global $post;
    if (is_singular('product')) {
        $viewed = intval(get_field('viewed_count', $post->ID));
        update_field('viewed_count', $viewed + 1, $post->ID);
    }
}

function vgc_comment($comment, $args, $depth)
{
    $GLOBALS['comment'] = $comment;
    extract($args, EXTR_SKIP);

    if ('div' == $args['style']) {
        $tag = 'div';
        $add_below = 'comment';
    } else {
        $tag = 'li';
        $add_below = 'div-comment';
    }

    $author = get_comment_author();
    $commentDate = get_comment_date('F d, Y');
    ?>
    <<?php echo $tag ?> <?php comment_class(empty($args['has_children']) ? '' : 'parent') ?> id="comment-<?php comment_ID() ?>">
    <?php if ('div' != $args['style']) : ?>
    <div id="div-comment-<?php comment_ID() ?>" class="comment_wrap">
<?php endif; ?>
    <div class="comment-author vcard">
        <?php if ($args['avatar_size'] != 0) echo get_avatar($comment, $args['avatar_size']); ?>
        <div class="post-info">
            <div class="theauthor"><span itemprop="author"><?php echo $author;?></span></div>
            <div class="thetime updated"><span itemprop="datePublished"><?php echo $commentDate;?></span></div>
        </div>
    </div>
    <?php if ($comment->comment_approved == '0') : ?>
    <em class="comment-awaiting-moderation"><?php _e('Your comment is awaiting moderation.'); ?></em>
    <br/>
<?php endif; ?>

    <div class="comment-meta commentmetadata">
        <div itemprop="commentText" class="commenttext">
            <p><?php comment_text(); ?></p>
        </div>
        <?php edit_comment_link(__('(Edit)'), '  ', '');?>
        <div class="reply">
            <?php comment_reply_link(array_merge($args, array('add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth']))); ?>
        </div>
    </div>
    <?php if ('div' != $args['style']) : ?>
    </div>
<?php endif; ?>
<?php
}