<?php get_header(); ?>
    <div class="main-container col2-right-layout latest-posts-full-width">
        <div class="container">
            <div class="container-inner">
                <div class="main">
                    <div class="row">
                        <div class="col-main col-xs-12 col-sm-9">
                            <div class="breadcrumbs">
                                <ul>
                                    <li class="home"><a href="<?php echo site_url();?>" title="Go to Home Page">Home</a><span>/</span>
                                    </li>
                                    <li class="cms_page"><strong>Blog</strong></li>
                                </ul>
                            </div>
                            <?php
                            // Start the loop.
                            while (have_posts()) : the_post();
                                get_template_part('templates/posts/blog', 'detail');
                            endwhile; // End the loop.
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>