<?php
/**
 * The template for displaying pages
 *
 */

get_header(); ?>
<div class="main-container col1-layout">
    <div class="container">
        <div class="container-inner">
            <div class="main">
                <?php
                // Start the loop.
                while ( have_posts() ) : the_post();

                    // Include the page content template.
                    get_template_part( 'content', 'page' );

                    // If comments are open or we have at least one comment, load up the comment template.
                    if ( comments_open() || get_comments_number() ) :
                        comments_template();
                    endif;

                    // End the loop.
                endwhile;
                ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
