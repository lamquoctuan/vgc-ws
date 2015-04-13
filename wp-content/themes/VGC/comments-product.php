<?php
/**
 * The template for displaying product reviews
 *
 */

if (post_password_required()) {
    return;
}
?>
<div class="box-collateral box-reviews row" id="customer-reviews">
    <div class="ma-review-col1 col-xs-12 col-sm-6">
        <h2>Customer Reviews</h2>
        <?php if (have_comments()) : ?>
        <?php endif; // have_comments() ?>
        <dl>
        </dl>
    </div>
    <div class="ma-review-col2 col-xs-12 col-sm-6">
        <div class="form-add">
            <h2>Write Your Own Review</h2>
            <?php
            // If comments are closed and there are comments, let's leave a little note, shall we?
            if (!comments_open() && get_comments_number() && post_type_supports(get_post_type(), 'comments')) :
                ?>
                <p class="no-comments"><?php _e('Reviews are closed.', 'vgc'); ?></p>
            <?php endif; ?>

            <?php
            $fields = array(
                'nickname' =>
                    '<li>
                        <label for="nickname_field" class="required"><em>*</em>' . __('Nickname', 'vgc') . '</label>
                        <div class="input-box">
                            <input type="text" name="nickname" id="nickname_field" class="input-text required-entry" value="">
                        </div>
                    </li>',
                'email' =>
                    '<li>
                        <label for="email_field" class="required"><em>*</em>' . __('Email', 'vgc') . '</label>
                        <div class="input-box">
                            <input type="text" name="email" id="email_field" class="input-text required-entry" value="">
                        </div>
                    </li>',
            );
            $args = array(
                'fields' => $fields,
                'id_form' => 'review-form',
                'label_submit' => 'Submit Review'
            );
            function comment_form_before_fields()
            {
                echo '<fieldset>
                    <h3>You\'re reviewing: <span>' . the_title() . '</span></h3>
                    <ul class="form-list">';
            }

            function comment_form_after_fields()
            {
                echo '</ul>
                </fieldset>';
            }

            add_action('comment_form_before_fields', 'comment_form_before_fields', 1);
            add_action('comment_form_after_fields', 'comment_form_after_fields', 1);
            ?>

            <form action="#" method="post" id="review-form">
                <fieldset>
                    <h3>You're reviewing: <span><?php the_title(); ?></span></h3>
                    <ul class="form-list">
                        <li>
                            <label for="nickname_field" class="required"><em>*</em>Nickname</label>
                            <div class="input-box">
                                <input type="text" name="nickname" id="nickname_field"
                                       class="input-text required-entry" value="">
                            </div>
                        </li>
                        <li>
                            <label for="email_field" class="required"><em>*</em>Email</label>
                            <div class="input-box">
                                <input type="text" name="title" id="summary_field"
                                       class="input-text required-entry" value="">
                            </div>
                        </li>
                        <li>
                            <label for="review_field" class="required"><em>*</em>Review</label>
                            <div class="input-box">
                                <textarea name="detail" id="review_field" cols="5" rows="3"
                                          class="required-entry"></textarea>
                            </div>
                        </li>
                    </ul>
                </fieldset>
                <div class="buttons-set">
                    <button type="submit" title="Submit Review" class="button">
                        <span><span>Submit Review</span></span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>