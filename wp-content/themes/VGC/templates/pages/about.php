<div class="breadcrumbs">
    <ul>
        <li class="home"><a href="<?php echo site_url();?>" title="Go to Home Page">Home</a><span>/</span></li>
        <li class="cms_page">About Us</li>
    </ul>
</div>
<div class="std">
    <div class="page-title mb20">
        <h1><?php the_title('<strong>','</strong>')?></h1>
    </div>
    <div class="row">
        <div class="col-md-4 col-sms-6 col-smb-12">
            <?php the_post_thumbnail();?>
        </div>
        <div class="col-md-8 col-sms-6 col-smb-12">
            <?php the_content();?>
        </div>
    </div>
</div>