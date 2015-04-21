<?php
get_header();
$menuLeftSide = getMenuListArray('left-side');
$menuLeftSideHTML = '';
if (!empty($menuLeftSide)) {
    $menuLeftSideHTML = '<div id="pt_vmegamenu" class="pt_vmegamenu">';
    for ($idx = 0; $idx < count($menuLeftSide['items']); $idx++) {
        $class = 'pt_menu';
        if ($idx == 0) {
            $class .= ' first';
        } elseif ($idx == 0) {
            $class .= ' last';
        }
        $menuLeftSideHTML .= '<div class="' . $class . '">
                                <div class="parentMenu">
                                    <a href="' . $menuLeftSide['items'][$idx]['url'] . '">
                                        <span>' . $menuLeftSide['items'][$idx]['title'] . '</span>
                                    </a>
                                </div>
                            </div>';
    }
    $menuLeftSideHTML .= '<div class="clearBoth"></div></div>';
}

?>
<div class="main-container col2-left-layout">
    <div class="container">
        <div class="container-inner">
            <div class="main">
                <div class="row">
                    <div class="col-left sidebar col-xs-12 col-sm-3">
                        <?php if (has_nav_menu('left-side')) :
                            get_template_part('templates/menus/left', 'side');?>
                        <?php endif; ?>
                        <!--<div class="navleft-container visible-lg visible-md">
                            <div class="megamenu-title"><h2>Category</h2></div>
                            <div id="pt_vmegamenu" class="pt_vmegamenu">

                                <div class="pt_menu first">
                                    <div class="parentMenu">
                                        <a href="products.html">
                                            <span>Bracelets</span>
                                        </a>
                                    </div>
                               </div>
                               <div class="pt_menu">
                                    <div class="parentMenu">
                                        <a href="products.html">
                                           <span>Earrings</span>
                                        </a>
                                    </div>
                               </div>
                               <div class="pt_menu">
                                    <div class="parentMenu">
                                        <a href="products.html">
                                            <span>Necklaces</span>
                                        </a>
                                    </div>
                               </div>
                               <div class="pt_menu">
                                    <div class="parentMenu">
                                        <a href="products.html">
                                            <span>Rings</span>
                                        </a>
                                    </div>
                               </div>
                               <div class="pt_menu">
                                    <div class="parentMenu">
                                        <a href="products.html">
                                            <span>Watches</span>
                                        </a>
                                    </div>
                               </div>
                               <div class="pt_menu last">
                                    <div class="parentMenu">
                                        <a href="products.html">
                                            <span>Wedding</span>
                                        </a>
                                    </div>
                               </div>
                               <div class="clearBoth"></div>
                            </div>
                        </div>-->


                        <div class="ma-featured-products">
                            <!-- start mt products list -->
                            <div class="ma-featured-product-title">
                                <h2>BEST SELLERs</h2>
                            </div>

                            <div class="featured-products">
                                <ul class="products-grid  first last odd">
                                    <?php theBestSellers();?>
                                </ul>
                                <!--  -->
                                <!--<script type="text/javascript">
                                    decorateGeneric($$('ul.products-grid'), ['odd', 'even', 'first', 'last'])
                                </script>-->
                            </div>
                            <!-- end exist product -->
                        </div>

                        <?php get_template_part('templates/banner', 'sale');?>
                    </div>

                    <div class="col-main col-xs-12 col-sm-9">
                        <?php get_template_part('templates/banner','home')?>
                        <div class="std">
                            <div class="home-content">
                                <div class="container-tab">
                                    <div class="box-category">
                                        <div class="tab-title">
                                            <h2>New Arrivals</h2>
                                        </div>
                                    </div>
                                    <div class="product_container">
                                        <div class="products-grid row">
                                            <?php
                                            $args = array(
                                                'posts_per_page' => 4,
                                                'orderby' => 'post_date',
                                                'order' => 'DESC',
                                                'post_type' => 'product',
                                                'post_status' => 'publish'
                                            );
                                            $theNewArrivals = new WP_Query($args);
                                            if ($theNewArrivals->have_posts()) :
                                                $idx = 0;
                                                while ($theNewArrivals->have_posts()) : $theNewArrivals->the_post();
                                                    $itemClass = ($idx == 0 ? 'first' : ($idx == 3 ? 'last' : ''));
                                                    $productDetails = fetchProductDetails(); ?>
                                                    <div
                                                        class="col-sm-6 col-md-3 col-sms-12 col-smb-12 item <?php echo $itemClass; ?>">
                                                        <div class="label-pro-new"></div>
                                                        <div class="item-inner">
                                                            <div class="box-item home">
                                                                <div class="products">
                                                                    <article class="product">
                                                                        <figure>
                                                                            <a href="<?php the_permalink(); ?>"
                                                                               title="<?php the_title(); ?>"
                                                                               class="product-image">
                                                                                <div class="product-image">
                                                                                    <img
                                                                                        src="<?php echo $productDetails['featured_image'][0]; ?>"
                                                                                        width="500" height="500"
                                                                                        alt="<?php the_title(); ?>">
                                                                                </div>
                                                                            </a>
                                                                        </figure>
                                                                    </article>
                                                                </div>
                                                                <h2 class="product-name">
                                                                    <a href="<?php the_permalink(); ?>"
                                                                       title="<?php the_title(); ?>"><?php the_title(); ?></a>
                                                                </h2>

                                                                <div class="review-price">
                                                                    <div class="price-box">
												                <span class="regular-price">
						                                            <span
                                                                        class="price"><?php echo $productDetails['unit_price']['formatted']; ?></span>
					                                            </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php $idx++;
                                                endwhile;?>
                                                <?php wp_reset_postdata(); ?>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="std">
                            <div class="home-content">
                                <div class="container-tab">
                                    <div class="box-category">
                                        <div class="tab-title">
                                            <h2>Most wished</h2>
                                        </div>
                                    </div>
                                    <div class="tab_container">
                                        <div class="tab_content_new_products">
                                            <ul class="products-grid row even">
                                                <?php $productsWished = theMostWished(); ?>
                                            </ul>
                                            <ul class="products-grid row odd">
                                                <?php theMostWished($productsWished); ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="banner-subscribe">
                                    <div class="block block-subscribe">
                                        <div class="subscribe-title footer-static-title">
                                            <h3>Subscribe To Our Newsletter !</h3>
                                        </div>
                                        <form action="#" method="post" id="newsletter-validate-detail">
                                            <div class="block-content">
                                                <div class="form-subscribe-header">
                                                    <label for="newsletter">Sign Up for Our Newsletter:</label>
                                                </div>
                                                <div class="input-box">
                                                    <input type="text" name="email" id="newsletter"
                                                           title="Sign up for our newsletter"
                                                           class="input-text required-entry validate-email">
                                                </div>
                                                <div class="actions">
                                                    <button type="submit" title="Subscribe" class="button"><span><span>Subscribe</span></span>
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="note-subscribe">
                                    <p>* For coupon, new product alerts, trend email</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
