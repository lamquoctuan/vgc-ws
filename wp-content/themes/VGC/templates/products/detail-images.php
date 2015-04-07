<p class="product-image">
<!--    <img src="--><?php //echo TEMP_URI;?><!--/assets/images/detail/1.jpg" />-->
    <?php
    if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
        the_post_thumbnail();
    }
    ?>
</p>
<div class="more-views ma-more-img">
    <h2>More Views</h2>
    <div class="row">
        <?php
        $imagesName = array('product_image_1', 'product_image_2', 'product_image_3');
        foreach ($imagesName as $imageName) {
            $image = get_field($imageName);
            if (!empty($image)){

                // vars
                $url = $image['url'];
                $title = $image['title'];
                $alt = $image['alt'];
                $caption = $image['caption'];

                // thumbnail
                $size = 'product-small';
                $thumb = $image['sizes'][$size];
                $width = $image['sizes'][$size . '-width'];
                $height = $image['sizes'][$size . '-height'];
                echo '<div class="col-sm-4 col-md-4 col-sms-12">
                    <span><img src="'. $url .'" width="'.$width.'" height="'.$height.'" alt="'.$alt.'"></span>
                </div>';
            }
//            var_dump($size, $thumb, $width, $height);
        }
        ?>
<!--        <div class="col-sm-4 col-md-4 col-sms-12">
            <span><img src="<?php /*echo TEMP_URI;*/?>/assets/images/detail/thumb/1a.jpg" width="100" height="100" alt=""></span>
        </div>
        <div class="col-sm-4 col-md-4 col-sms-12">
            <span><img src="<?php /*echo TEMP_URI;*/?>/assets/images/detail/thumb/1b.jpg" width="100" height="100" alt=""></span>
        </div>
        <div class="col-sm-4 col-md-4 col-sms-12">
            <span><img src="<?php /*echo TEMP_URI;*/?>/assets/images/detail/thumb/1c.jpg" width="100" height="100" alt=""></span>
        </div>-->
    </div>
</div>