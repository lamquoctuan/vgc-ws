<?php
$paged = get_query_var('paged', 1);
$postsPerPage = 5; //get_option( 'posts_per_page' );
$args = array(
    'posts_per_page' => $postsPerPage,
    'orderby' => 'post_date',
    'order' => 'DESC',
    'post_type' => 'product',
    'post_status' => 'publish',
    'paged' => $paged
);
// the query
$the_query = new WP_Query($args); ?>

<?php if ($the_query->have_posts()) : ?>

    <!-- pagination here -->

    <div class="col-main col-xs-12 col-sm-9">
        <div class="breadcrumbs">
            <ul>
                <li class="home">
                    <a href="/" title="Go to Home Page">Home</a>
                    <span>/</span>
                </li>
                <?php $term = getTerm(); ?>
                <li class="category3">
                    <strong><?php echo $term->name; ?></strong>
                </li>
            </ul>
        </div>

        <div class="category-products">
            <div class="toolbar">
                <div class="pager">
                    <div class="sort-by hidden-phone">
                        <label>Sort by:</label>

                        <div class="select-sort-by">
                            <select>
                                <option value="" selected="selected">Position</option>
                                <option value="">Name</option>
                                <option value="">Price</option>
                            </select>
                        </div>
                        <a href="" link="">
                            <img src="<?php echo TEMP_URI; ?>/assets/images/i_asc_arrow.gif"
                                 alt="Set Descending Direction"
                                 class="v-middle">
                        </a>
                    </div>
                    <div class="limiter visible-desktop">
                        <label>Show:</label>

                        <div class="select-limiter">
                            <select>
                                <option value="" selected="selected">5</option>
                                <option value="">10</option>
                                <option value="">15</option>
                                <option value="">20</option>
                                <option value="">25</option>
                                <option value="">All</option>
                            </select>
                        </div>
                    </div>
                    <?php if (function_exists("pagination")) {
                        pagination($the_query->max_num_pages, $postsPerPage);
                    } ?>
                </div>
            </div>

            <ol class="products-list">
                <!-- the loop -->
                <?php $itemClass = null;
                while ($the_query->have_posts()) : $the_query->the_post();
                    $itemClass = ($itemClass == 'odd' ? 'even' : 'odd');
                    $productDetails = fetchProductDetails(); ?>
                    <li class="item <?php echo $itemClass; ?>">
                        <div class="item-inner">
                            <div class="row">
                                <div class="col-sm-3 col-md-3 col-sms-12">
                                    <div class="products">
                                        <article class="products">
                                            <figure>
                                                <a class="product-image" href="<?php the_permalink(); ?>">
                                                    <div class="product-image">
                                                        <img src="<?php echo $productDetails['featured_image'][0]; ?>"
                                                             width="500"
                                                             height="500"/>
                                                    </div>
                                                </a>
                                            </figure>
                                        </article>
                                    </div>
                                </div>
                                <div class="product-shop col-sm-6 col-md-6 col-sms-12">
                                    <div class="f-fix">
                                        <div class="list-box">
                                            <div class="name-review">
                                                <div class="name-review">
                                                    <h2 class="product-name"><a href="<?php the_permalink(); ?>"
                                                                                title="<?php the_title(); ?>"><?php the_title(); ?></a>
                                                    </h2>
                                                </div>
                                            </div>
                                            <div class="price-box">
                                        <span class="regular-price">
                                            <span
                                                class="price"><?php echo $productDetails['unit_price']['formatted']; ?></span> </span>
                                            </div>

                                        </div>
                                        <div class="desc std">
                                            <?php the_excerpt(); ?> <a href="<?php the_permalink(); ?>"
                                                                       title="<?php the_title(); ?>" class="link-learn">Learn
                                                More</a>
                                        </div>

                                    </div>
                                </div>
                                <div class="link-list col-sm-3 col-md-3 col-sms-12">
                                    <div class="actions">
                                        <button type="button" class="button btn-cart" rel="tooltip"
                                                data-original-title="">
                                            <span><span>Add to Cart</span></span></button>
                                        <ul class="add-to-links">
                                            <li><a href="" class="link-wishlist" rel="tooltip" data-original-title="">+
                                                    Wish
                                                    List</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                <?php endwhile; ?>
                <!-- end of the loop -->
            </ol>

            <div class="toolbar-bottom">
                <div class="toolbar">
                    <div class="pager">
                        <div class="sort-by hidden-phone">
                            <label>Sort by:</label>

                            <div class="select-sort-by">
                                <select>
                                    <option value="" selected="selected">Position</option>
                                    <option value="">Name</option>
                                    <option value="">Price</option>
                                </select>
                            </div>
                            <a href="" link="">
                                <img src="<?php echo TEMP_URI; ?>/assets/images/i_asc_arrow.gif"
                                     alt="Set Descending Direction" class="v-middle">
                            </a>
                        </div>
                        <div class="limiter visible-desktop">
                            <label>Show:</label>

                            <div class="select-limiter">
                                <select>
                                    <option value="" selected="selected">5</option>
                                    <option value="">10</option>
                                    <option value="">15</option>
                                    <option value="">20</option>
                                    <option value="">25</option>
                                    <option value="">All</option>
                                </select>
                            </div>
                        </div>
                        <?php if (function_exists("pagination")) {
                            pagination($the_query->max_num_pages, $postsPerPage);
                        } ?>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- pagination here -->

    <?php wp_reset_postdata(); ?>
<?php endif; ?>