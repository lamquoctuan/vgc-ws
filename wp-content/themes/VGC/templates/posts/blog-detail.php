<?php $numComments = get_comments_number(); ?>
<div class="single_post">
    <header>
        <h1><?php the_title(); ?></h1>

        <div class="post-info"><span class="theauthor">By <span itemprop="author">My <?php the_author();?></span></span> <span
                class="thetime">On <span
                    itemprop="datePublished"><?php the_date(); ?></span></span> <?php if ($numComments > 0) { ?><span
                class="thecomment"><span
                    itemprop="interactionCount"><?php comments_number(); ?></span></span><?php } ?></div>
    </header>
    <?php if (has_post_thumbnail()) :
        $postFeaturedImageId = get_post_thumbnail_id();
        $postFeaturedImageSrc = wp_get_attachment_image_src($postFeaturedImageId, 'post-thumbnails');
        ?>
        <div class="featured-thumbnail single-featured">
            <img src="<?php echo $postFeaturedImageSrc[0];?>" class="attachment-slider1 wp-post-image"/>
        </div>
    <?php endif; ?>
    <div class="post-single-content box mark-links entry-content">
        <div class="post-single-content box mark-links entry-content">
            <?php the_content(); ?>
        </div>
<!--        --><?php //get_template_part('templates/posts/blog', 'social'); ?>
    </div>
    <?php comments_template('/comments-blog.php'); ?>
</div>