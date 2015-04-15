<?php
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$catSlug = (get_query_var('category_name')) ? get_query_var('category_name') : 'blog';
$postsPerPage = 4; //get_option( 'posts_per_page' );
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
        <li class="home"><a href="<?php echo site_url(); ?>"
                            title="Go to Home Page">Home</a><span>/</span>
        </li>
        <li class="cms_page"><strong>Blog</strong></li>
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
//                                var_dump(get_post_format());
        //        get_template_part( 'content', get_post_format() );
        if ($idx % 2 == 0) :
            ?>
            <div class="row mb20">
        <?php endif;?>
        <div class="col-sm-6 col-md-6 col-sms-12">
            <article class="latestPost">
                <a href="blog-detail.html" class="post-image">
                    <div class="featured-thumbnail">
                        <?php the_post_thumbnail();?>
                    </div>
                </a>
                <header>
                    <h2 class="titleblog front-view-title" itemprop="headline"><a
                            href="<?php the_permalink();?>"><?php the_title();?></a></h2>

                    <div class="post-info">
                                                        <span class="theauthor">By <span
                                                                itemprop="author"><?php the_author(); ?></span></span>
                        <span class="thetime updated">On <span itemprop="datePublished"><?php echo $postDate;?></span></span>
                    </div>
                </header>
            </article>
        </div>
        <?php if ($idx % 2 == 1) :
        ?>
        </div>
    <?php
    endif;
        $idx++;
    endwhile; // End the loop.
    else :
        get_template_part('templates/content', 'none');
    endif;
    ?>
</div>