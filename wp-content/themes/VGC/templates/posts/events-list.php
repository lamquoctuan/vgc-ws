<?php
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$catSlug = (get_query_var('category_name')) ? get_query_var('category_name') : 'events';
$postsPerPage = 3; //get_option( 'posts_per_page' );
$args = array(
    'posts_per_page' => $postsPerPage,
    'orderby' => 'post_date',
    'order' => 'DESC',
    'post_status' => 'publish',
    'paged' => $paged,
    'post_type' => 'post',
    'category_name' => $catSlug
);
// the query
$the_query = new WP_Query($args);
if ($the_query->have_posts()) : ?>
<div class="breadcrumbs">
    <ul>
        <li class="home"><a href="<?php echo site_url(); ?>" title="Go to Home Page">Home</a><span>/</span>
        </li>
        <li class="cms_page"><strong>Events</strong></li>
    </ul>
</div>
<div class="blog-view">
    <?php
    global $postsDisplay;
    $idx = 0;
    // Start the Loop.
    while ($the_query->have_posts()) :
        $the_query->the_post();
        array_push($postsDisplay, $post->ID);
        $postDate = get_the_date('F j, Y', $post);
        $postFeaturedImageId = get_post_thumbnail_id();
        $postFeaturedImageSrc = wp_get_attachment_image_src($postFeaturedImageId, 'post-thumbnails');

        ?>
        <div class="row mb20">
            <div class="col-md-4 col-sms-6 col-smb-12">
                <article class="latestPost">
                    <a href="<?php the_permalink();?>" class="post-image">
                        <div class="featured-thumbnail">
                            <img src="<?php echo $postFeaturedImageSrc[0];?>" width="500"/>
                        </div>
                    </a>
                </article>
            </div>
            <div class="col-md-8 col-sms-6 col-smb-12">
                <article class="latestPost">
                    <header class="mb15">
                        <h2 class="titleblog front-view-title" itemprop="headline"><a
                                href="<?php the_permalink();?>"><?php the_title();?></a></h2>

                        <div class="post-info">
                            <span class="theauthor">By <span itemprop="author"><?php the_author(); ?></span></span>
                                <span class="thetime updated">On <span
                                        itemprop="datePublished"><?php echo $postDate;?></span></span>
                        </div>
                    </header>
                    <p><?php the_excerpt();?></p>
                </article>
            </div>
        </div>
        <?php if ($idx == $postsPerPage - 1) { ?>
        <hr/> <?php }
        $idx++;
    endwhile; // End the loop.
    else :
        get_template_part('templates/content', 'none');
    endif;
    ?>
</div>