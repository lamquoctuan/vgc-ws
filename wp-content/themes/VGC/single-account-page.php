<?php
/**
 * Template Name: Account
 */
do_action('session_check');
if (isset($_SESSION['cus_id'])) {
    $user = new \app\models\User();
    $user->findOne($_SESSION['cus_id']);
}
get_header();
if (have_posts()) :
    while (have_posts()) : the_post();
        $postName = $post->post_name;
        if (is_single('login') || is_single('register') || is_single('forgot')) :
            ?>
            <div class="main-container col1-layout">
                <div class="container">
                    <div class="container-inner">
                        <div class="main">
                            <div class="col-main">
                                <?php get_template_part('templates/accounts/account', $postName);?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        else:
            ?>
            <div class="main-container col2-left-layout">
                <div class="container">
                    <div class="container-inner">
                        <div class="main">
                            <div class="row">
                                <?php get_sidebar('account-page'); ?>
                                <div class="col-main col-xs-12 col-sm-9">
                                    <?php
                                    get_template_part('templates/accounts/account', $postName);
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        endif;
    endwhile; // have_posts()
endif; // have_posts()
?>
<?php get_footer(); ?>