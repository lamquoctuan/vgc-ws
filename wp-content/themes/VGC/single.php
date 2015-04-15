<?php get_header();
$cats = get_the_category();
$catObj = $cats[0];
$postsDisplay = array(); ?>
    <div class="main-container col2-right-layout latest-posts-full-width">
        <div class="container">
            <div class="container-inner">
                <div class="main">
                    <div class="row">
                        <div class="col-main col-xs-12 col-sm-9">
                            <div class="breadcrumbs">
                                <ul>
                                    <li class="home"><a href="<?php echo site_url(); ?>"
                                                        title="Go to Home Page">Home</a><span>/</span>
                                    </li>
                                    <li class="cms_page"><strong><?php echo $catObj->name;?></strong></li>
                                </ul>
                            </div>
                            <?php
                            // Start the loop.
                            while (have_posts()) : the_post();
                                array_push($postsDisplay, $post->ID);
                                switch ($catObj->slug) {
                                    case 'events':
                                        get_template_part('templates/posts/events', 'detail');
                                        break;
                                    case 'blog':
                                    default:
                                        get_template_part('templates/posts/blog', 'detail');
                                    break;
                                }
                            endwhile; // End the loop.
                            ?>
                        </div>
                        <div class="col-right sidebar col-xs-12 col-sm-3">
                            <?php
                            switch ($catObj->slug) {
                                case 'events':
                                    get_sidebar('upcoming');
                                    break;
                                case 'blog':
                                default:
                                    get_sidebar('popular');
                                    break;
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>