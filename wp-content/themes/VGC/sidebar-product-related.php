<div class="col-right sidebar col-xs-12 col-sm-3">
    <div class="ma-featured-products">
        <!-- start mt products list -->
        <div class="ma-featured-product-title">
            <h2>Related Products</h2>
        </div>
        <div class="featured-products">
            <ul class="products-grid  first last odd">
                <?php
                $args = array(
                    'posts_per_page'   => 3,
                    'orderby'          => 'post_date',
                    'order'            => 'DESC',
                    'exclude'          => $post->ID,
                    'post_type'        => $post->post_type,
                    'post_status'      => 'publish'
                );
                $productsRelated = get_posts( $args );
                $idx = 0;
                foreach ( $productsRelated as $post ) : setup_postdata( $post );
                    $post_featured_image = get_post_thumbnail_id();
                    $classLi = ($idx == 0)?'item first':($idx == count($productsRelated)-1?'item last':'item');
                    $sku = intval(get_field('sku'));
                    $unitPrice = intval(get_field('unit_price'));
                    $salePrice = intval(get_field('sale_price'));
                    $unitPriceFormatted = number_format($unitPrice, 2);
                    $salePriceFormatted = number_format($salePrice, 2);
                    ?>
                    <li class="<?php echo $classLi;?>">
                        <a href="<?php echo post_permalink( $post->ID ); ?>" title="<?php the_title(); ?>" class="product-image">
                            <?php the_post_thumbnail('product-small');?>
                        </a>
                        <div class="box-feature">
                            <h2 class="product-name"><a href="<?php echo post_permalink( $post->ID ); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
                            <div class="price-box">
                                <p class="special-price">
                                    <span class="price-label">Special Price</span>
                                    <span class="price" id="product-price-1"><?php echo $salePriceFormatted;?></span>
                                </p>
                                <p class="old-price">
                                    <span class="price-label">Regular Price:</span>
                                    <span class="price" id="old-price-1"><?php echo $unitPriceFormatted;?></span>
                                </p>
                            </div>
                        </div>
                    </li>
                <?php
                $idx ++;
                endforeach;
                wp_reset_postdata();
                ?>
            </ul>
        </div>
        <!-- end exist product -->
    </div>

    <div class="ma-onsaleproductslider-container">
        <div class="ma-onsaleproductslider-title">
            <h2>Sale Products</h2>
        </div>
        <div class="bx-wrapper" style="max-width: 260px;">
            <div class="bx-viewport">
                <?php
                $posts = get_posts(array(
                    'numberposts'	=> -1,
                    'post_type'		=> 'product',
                    'meta_query'	=> array(
                        'relation'		=> 'AND',
//                            array(
//                                'key'	 	=> 'color',
//                                'value'	  	=> array('red', 'orange'),
//                                'compare' 	=> 'IN',
//                            ),
                        array(
                            'key'	  	=> 'promoted',
                            'value'	  	=> '1',
                            'compare' 	=> '=',
                        ),
                    ),
                ));
//                error_log(print_r($posts,true));
                if( $posts ): ?>
                <ul class="bxslider">
                    <?php foreach( $posts as $post ): setup_postdata( $post ) ?>
                        <?php $productDetails = fetchProductDetails();?>
                        <li class="onsaleproductslider-item">
                            <div class="item-inner">
                                <div class="box-item">
                                    <div class="products">
                                        <article class="product">
                                            <figure>
                                                <a href="" title="<?php the_title(); ?>" class="product-image">
                                                    <div class="product-image">
                                                        <img src="<?php echo $productDetails['featured_image'][0];?>" width="500" height="500" alt="<?php the_title(); ?>">
                                                    </div>
                                                    <div class="product-image image-rotator">
                                                        <img src="<?php echo $productDetails['promoted_image']['url'];?>" width="500" height="500" alt="<?php echo $productDetails['promoted_image']['alt'];?>">
                                                    </div>
                                                </a>
                                            </figure>
                                        </article>
                                    </div>
                                    <h2 class="product-name"><a href="<?php echo post_permalink( $post->ID ); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
                                    <div class="review-price">
                                        <div class="price-box">
                                            <p class="special-price">
                                                <span class="price-label">Special Price</span>
                                                <span class="price" id="product-price-9"><?php echo $productDetails['sale_price']['formatted'];?></span>
                                            </p>
                                            <p class="old-price">
                                                <span class="price-label">Regular Price:</span>
                                                <span class="price" id="old-price-9"><?php echo $productDetails['unit_price']['formatted'];?></span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="actions">
                                        <div class="cart-content">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ul>
                <?php wp_reset_postdata(); ?>
                <?php endif; ?>
               <!-- <ul class="bxslider">
                    <li class="onsaleproductslider-item">
                        <div class="item-inner">
                            <div class="box-item">
                                <div class="products">
                                    <article class="product">
                                        <figure>
                                            <a href="" title="Pellentesque habitant " class="product-image">
                                                <div class="product-image">
                                                    <img src="<?php /*echo TEMP_URI;*/?>/assets/images/sales/1a.jpg" width="500" height="500" alt="Jewelry Name">
                                                </div>
                                                <div class="product-image image-rotator">
                                                    <img src="<?php /*echo TEMP_URI;*/?>/assets/images/sales/1b.jpg" width="500" height="500" alt="Jewelry Name">
                                                </div>
                                            </a>
                                        </figure>
                                    </article>
                                </div>
                                <h2 class="product-name"><a href="" title="Jewelry Name">Jewelry Name</a></h2>
                                <div class="review-price">
                                    <div class="price-box">
                                        <p class="special-price">
                                            <span class="price-label">Special Price</span>
                                            <span class="price" id="product-price-9">$60.00</span>
                                        </p>
                                        <p class="old-price">
                                            <span class="price-label">Regular Price:</span>
                                            <span class="price" id="old-price-9">$80.00</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="actions">
                                    <div class="cart-content">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="onsaleproductslider-item">
                        <div class="item-inner">
                            <div class="box-item">
                                <div class="products">
                                    <article class="product">
                                        <figure>
                                            <a href="#" title="Jewelry Name" class="product-image">
                                                <div class="product-image">
                                                    <img src="<?php /*echo TEMP_URI;*/?>/assets/images/sales/2a.jpg" width="500" height="500" alt="Jewelry Name">
                                                </div>
                                                <div class="product-image image-rotator">
                                                    <img src="<?php /*echo TEMP_URI;*/?>/assets/images/sales/2b.jpg" width="500" height="500" alt="Jewelry Name">
                                                </div>
                                            </a>
                                        </figure>
                                    </article>
                                </div>
                                <h2 class="product-name"><a href="#" title="Jewelry Name">Jewelry Name</a></h2>
                                <div class="review-price">
                                    <div class="price-box">
                                        <p class="special-price">
                                            <span class="price-label">Special Price</span>
                                            <span class="price" id="product-price-9">$60.00</span>
                                        </p>
                                        <p class="old-price">
                                            <span class="price-label">Regular Price:</span>
                                            <span class="price" id="old-price-9">$80.00</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="actions">
                                    <div class="cart-content">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="onsaleproductslider-item">
                        <div class="item-inner">
                            <div class="box-item">
                                <div class="products">
                                    <article class="product">
                                        <figure>
                                            <a href="#" title="Jewelry Name" class="product-image">
                                                <div class="product-image">
                                                    <img src="<?php /*echo TEMP_URI;*/?>/assets/images/sales/3a.jpg" width="500" height="500" alt="Jewelry Name">
                                                </div>
                                                <div class="product-image image-rotator">
                                                    <img src="<?php /*echo TEMP_URI;*/?>/assets/images/sales/3b.jpg" width="500" height="500" alt="Jewelry Name">
                                                </div>
                                            </a>
                                        </figure>
                                    </article>
                                </div>
                                <h2 class="product-name"><a href="#" title="Jewelry Name">Jewelry Name</a></h2>
                                <div class="review-price">
                                    <div class="price-box">
                                        <p class="special-price">
                                            <span class="price-label">Special Price</span>
                                            <span class="price" id="product-price-9">$60.00</span>
                                        </p>
                                        <p class="old-price">
                                            <span class="price-label">Regular Price:</span>
                                            <span class="price" id="old-price-9">$80.00</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="actions">
                                    <div class="cart-content">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>-->
            </div>

        </div>
        <script type="text/javascript">
            $bxs(document).ready(function(){
                $bxs('.ma-onsaleproductslider-container .bxslider').bxSlider(
                    {
                        speed: 1000,
                        pause: 600,
                        minSlides: 1,
                        infiniteLoop:false,
                        maxSlides: 1,
                        slideWidth: 260,
                        slideMargin:5,
                        pager: true,
                        controls:false
                    }
                );
            });
        </script>
    </div>
</div>