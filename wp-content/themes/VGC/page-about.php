<?php
/**
 * Template Name: About
 */
get_header();
if ( have_posts() ) {
    while ( have_posts() ) {
        the_post();
        //
        // Post Content here
        //
    } // end while
} // end if
?>
    <div class="main-container col1-layout">
        <div class="container">
            <div class="container-inner">
                <div class="main">
                    <?php
                    // Start the loop.
                    while ( have_posts() ) : the_post();

                        // Include the page content template.
//                        get_template_part( 'templates/pages', 'about' );
                        get_template_part( 'templates/pages/about' );

                        ?>
                    <?php
                        // End the loop.
                    endwhile;
                    ?>
                </div>
            </div>
        </div>
    </div>
<?php get_footer();?>