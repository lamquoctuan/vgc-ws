<?php
/**
 * The template used for displaying page content
 *
 * @since VGC 1.0
 */
?>
<div class="breadcrumbs">
    <ul>
        <li class="home"><a href="<?php echo site_url();?>" title="Go to Home Page">Home</a><span>/</span></li>
        <li class="cms_page"><?php the_title( '<strong">', '</strong>' ); ?></li>
    </ul>
</div>
<div class="std">
    <div class="page-title mb20">
        <?php the_title( '<h1">', '</h1>' ); ?>
    </div>
    <div class="row">
        <?php the_content(); ?>
    </div>
</div>
