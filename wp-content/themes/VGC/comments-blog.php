<div id="comments" class="comments-area">

    <?php if (have_comments()) : ?>
        <h4 class="single-page-title">
            <?php
            printf(_nx('One thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'vgc'),
                number_format_i18n(get_comments_number()), get_the_title());
            ?>
        </h4>

        <ol class="commentlist">
            <?php
            wp_list_comments(array(
                'style' => 'ol',
                'callback' => 'vgc_comment',
                'type' => 'comment',
                'avatar_size' => 71,
            ));
            ?>
        </ol><!-- .comment-list -->

    <?php endif; // have_comments() ?>

    <?php
    // If comments are closed and there are comments, let's leave a little note, shall we?
    if (!comments_open() && get_comments_number() && post_type_supports(get_post_type(), 'comments')) :
        ?>
        <p class="no-comments"><?php _e('Comments are closed.', 'vgc'); ?></p>
    <?php endif; ?>

</div><!-- .comments-area -->
<?php
add_action('comment_form_before_fields', 'commentFormBeforeFields');
function commentFormBeforeFields()
{
    echo '<fieldset><ul class="form-list">';
}

$commenter = wp_get_current_commenter();
$req = get_option('require_name_email');
$aria_req = ($req ? " aria-required='true'" : '');

$fields = array(
    'author' =>
        '<li>
            <label for="author" class="required">' . ($req ? '<em>*</em>' : '') . __('Name', 'vgc') . '</label>
            <div class="input-box">
                <input type="text" name="author" id="author" class="input-text required-entry" value="' . esc_attr($commenter['comment_author']) . '" size="30"' . $aria_req . ' />
            </div>
        </li>',
    'email' =>
        '<li>
            <label for="email" class="required">' . ($req ? '<em>*</em>' : '') . __('Email', 'vgc') . '</label>
            <div class="input-box">
                <input type="text" name="email" id="author" class="input-text required-entry" value="' . esc_attr($commenter['comment_author_email']) . '" size="30"' . $aria_req . ' />
            </div>
        </li>'
);

$args = array(
    'id_form' => 'comment-form',
    'id_submit' => 'submit',
    'class_submit' => 'submit',
    'name_submit' => 'submit',
    'title_reply' => __('ADD YOUR COMMENT'),
    'title_reply_to' => __('Add your comment to %s'),
    'cancel_reply_link' => __('Cancel Reply'),
    'label_submit' => __('Submit'),
    'format' => 'html5',

    'comment_field' =>
        '<li>
                        <label for="comment_field" class="required"><em>*</em>' . _x('Comment', 'noun') . '</label>
                        <div class="input-box">
                            <textarea name="comment" id="comment_field" cols="45" rows="3"
                                      class="required-entry" aria-required="true"></textarea>
                        </div>
                    </li>',

    'must_log_in' => '<p class="must-log-in">' .
        sprintf(
            __('You must be <a href="%s">logged in</a> to post a comment.'),
            wp_login_url(apply_filters('the_permalink', get_permalink()))
        ) . '</p>',

    'logged_in_as' => '<p class="logged-in-as">' .
        sprintf(
            __('Logged in as <a href="%1$s">%2$s</a>. <a href="%3$s" title="Log out of this account">Log out?</a>'),
            admin_url('profile.php'),
            $user_identity,
            wp_logout_url(apply_filters('the_permalink', get_permalink()))
        ) . '</p>',

    'comment_notes_before' => '<p class="comment-notes">' .
        __('Your email address will not be published.') . ($req ? $required_text : '') .
        '</p>',

    'comment_notes_after' => '</ul></fieldset>',

    'fields' => apply_filters('comment_form_default_fields', $fields),
);

comment_form($args); ?>
