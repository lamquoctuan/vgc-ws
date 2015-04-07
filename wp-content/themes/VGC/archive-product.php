<?php
get_header();
?>
<div class="main-container col2-left-layout">
    <div class="container">
        <div class="container-inner">
            <div class="main">
                <div class="row">
                    <?php
                    // Start the loop.
                    while ( have_posts() ) : the_post();
                        get_sidebar('product');
                        get_template_part( 'templates/products/list' );
                        ?>
                    <?php
                    endwhile; // End the loop.
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();
?>