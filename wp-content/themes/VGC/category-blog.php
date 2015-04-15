<?php get_header();
$postsDisplay = array();
?>
    <div class="main-container col2-right-layout latest-posts-full-width">
    <div class="container">
        <div class="container-inner">
            <div class="main">
                <div class="row">
                    <div class="col-main col-xs-12 col-sm-9">
                        <?php get_template_part('templates/posts/blog', 'list'); ?>
                    </div>
                    <div class="col-right sidebar col-xs-12 col-sm-3">
                        <?php get_sidebar('popular'); ?>
                    </div>
                </div>
                <!--end row-->
            </div>
        </div>
    </div>
<?php get_footer(); ?>