<?php

if (!function_exists('getMenu')) :
    /**
     * @param string $menuSlug Menu slug in location
     * @param array $classes The classes used in ul, li. Example
     *                                  $classes = array(
     *                                  'ul' => 'links',
     *                                  'li' => 'li',
     *                                  'li_first' => 'first',
     *                                  'li_last' => 'last'
     *                                  );
     * @return array   $menuList   List of menu in html
     */
    function getMenu($menuSlug, $classes = array(), $menuId = '')
    {

        $result = array();
        if (($locations = get_nav_menu_locations()) && isset($locations[$menuSlug])) {
            $menu = wp_get_nav_menu_object($locations[$menuSlug]);

            $menuItems = wp_get_nav_menu_items($menu->term_id);
            $result['menu_name'] = $menu->name;

            $result['menu_list'] = '<ul id="' . (empty($menuId) ? 'menu-' . $menuSlug : $menuId) . '"' . (isset($classes['ul']) ? ' class="' . $classes['ul'] . '"' : '') . '>';

            foreach ((array)$menuItems as $key => $menuItem) {
                $title = $menuItem->title;
                $url = $menuItem->url;
                $attr_title = $menuItem->attr_title;
                $classesLi = array();
                if (isset($classes['li'])) {
                    array_push($classesLi, $classes['li']);
                }

                if (isset($classes['li_first']) && ($key == 0)) {
                    array_push($classesLi, $classes['li_first']);
                }
                if (isset($classes['li_last']) && ($key == count($menuItems))) {
                    array_push($classesLi, $classes['li_last']);
                }

                $result['menu_list'] .= '<li' . (empty($classesLi) ? '' : ' class="' . implode(' ', $classesLi) . '"') . '><a href="' . $url . '" title="' . $attr_title . '">' . $title . '</a></li>';
            }
            $result['menu_list'] .= '</ul>';
        }

        return $result;
    }
endif;

if (!function_exists('getMenuListArray')) :
    /**
     * @param string $menuSlug
     * @return array
     */
    function getMenuListArray($menuSlug)
    {

        $result = array();
        if (($locations = get_nav_menu_locations()) && isset($locations[$menuSlug])) {
            $menu = wp_get_nav_menu_object($locations[$menuSlug]);

            $menuItems = wp_get_nav_menu_items($menu->term_id);
            $result['menu_name'] = $menu->name;

            $result['items'] = array();
            foreach ((array)$menuItems as $key => $menuItem) {
                $item = array(
                    'id' => $menuItem->ID,
                    'title' => $menuItem->title,
                    'url' => $menuItem->url,
                    'attr_title' => $menuItem->attr_title,
                    'object_id' => $menuItem->object_id
                );
                array_push($result['items'], $item);
            }
        }
        return $result;
    }
endif;

if (!function_exists('fetchProductDetails')) :
    function fetchProductDetails()
    {
        global $post;
        $unitPrice = intval(get_field('unit_price'));
        $salePrice = intval(get_field('sale_price'));
        $postFeaturedImageId = get_post_thumbnail_id();
        $postFeaturedImageSrc = wp_get_attachment_image_src($postFeaturedImageId, 'post-thumbnails');

        return array(
            'featured_image' => $postFeaturedImageSrc,
            'promoted_image' => get_field('promoted_image'),
            'sku' => intval(get_field('sku')),
            'unit_price' => array(
                'raw' => $unitPrice,
                'formatted' => number_format($unitPrice, 2),
            ),
            'sale_price' => array(
                'raw' => $salePrice,
                'formatted' => number_format($salePrice, 2),
            ),
            'promoted' => get_field('promoted')
        );
    }
endif;

if (!function_exists('pagination')) :
    function pagination($pages = '', $range = 5)
    {
        $showItems = ($range * 2) + 1;

        global $paged;
        if (empty($paged)) $paged = 1;

        if ($pages == '') {
            global $wp_query;
            $pages = $wp_query->max_num_pages;
            if (!$pages) {
                $pages = 1;
            }
        }

        if (1 != $pages) {
            echo "<div class=\"pages\"><strong>Page:</strong><ol>";
//        if($paged > 2 && $paged > $range+1 && $showItems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo; First</a>";
            if ($paged > 1)
                echo "<li><a href=\"" . get_pagenum_link($paged + 1) . "\" class=\"prev i-prev\">&nbsp;</a></li>";
            for ($i = 1; $i <= $pages; $i++) {
                if (1 != $pages && (!($i >= $paged + $range + 1 || $i <= $paged - $range - 1) || $pages <= $showItems)) {
                    echo ($paged == $i) ? "<li class=\"current\">" . $i . "</li>" : "<li><a href=\"" . get_pagenum_link($i) . "\">" . $i . "</a></li>";
                }
            }
            if ($paged < $pages)
                echo "<li><a href=\"" . get_pagenum_link($paged + 1) . "\" class=\"next i-next\">&nbsp;</a></li>";
//        if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showItems < $pages) echo "<a href='".get_pagenum_link($pages)."'>Last &raquo;</a>";
            echo "</ol></div>\n";
        }
    }
endif;

if (!function_exists('getTerm')) :
    function getTerm()
    {
        global $post;
        $taxonomyNames = get_object_taxonomies($post);
        foreach ($taxonomyNames as $taxName) {
            if (($terms = get_the_terms($post->ID, $taxName)) !== false) {
                foreach ($terms as $term) {
                    $termLink = get_term_link($term);
                    if (is_wp_error($termLink)) {
                        continue;
                    }
                }
                break;
            }
        }
        if (!isset($term) || !isset($termLink)) {
            return null;
        } else {
            $termReturn = $term;
            $termReturn->link = $termLink;
            return $termReturn;
        }
    }
endif;

if (!function_exists('theMostWished')):
    function theMostWished($postNotIn = array())
    {
        global $post;
        $productsWished = array();
        $args = array(
            'posts_per_page' => 3,
            'orderby' => array('meta_value_num' => 'DESC', 'post_date' => 'DESC'),
            'meta_key' => 'wished_count',
            'post_type' => 'product',
            'post_status' => 'publish',
            'post__not_in' => $postNotIn
        );
        $theWished = new WP_Query($args);
        if ($theWished->have_posts()) :
            $idx = 0;
            while ($theWished->have_posts()) : $theWished->the_post();
                array_push($productsWished, $post->ID);
                $itemClass = ($idx == 0 ? 'first' : ($idx == 2 ? 'last' : ''));
                $productDetails = fetchProductDetails(); ?>
                <li class="col-md-4 col-sm-4 col-sms-12 item <?php echo $itemClass; ?>">
                    <div class="item-inner">
                        <a href="<?php the_permalink(); ?>"
                           title="<?php the_title(); ?>"
                           class="product-image">
                            <?php the_post_thumbnail(); ?>
                        </a>

                        <div class="box-item">
                            <h2 class="product-name"><a
                                    href="<?php the_permalink(); ?>"
                                    title="<?php the_title(); ?>"><?php the_title(); ?></a>
                            </h2>

                            <div class="price-box"><span class="regular-price" id="product-price-18"><span
                                        class="price"><?php echo $productDetails['unit_price']['formatted']; ?></span></span>
                            </div>
                            <div class="actions">
                                <div class="cart-content">
                                    <button type="button"
                                            class="button btn-cart"
                                            rel="tooltip"
                                            data-original-title="">
                                        <span><span>+ Add to Cart</span></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <?php $idx++;
            endwhile;?>
            <?php wp_reset_postdata(); ?>
        <?php endif;
        return $productsWished;
    }
endif;

if (!function_exists('theBestSellers')):
    function theBestSellers($postNotIn = array())
    {
        global $post;
        $args = array(
            'posts_per_page' => 3,
            'orderby' => array('meta_value_num' => 'DESC', 'post_date' => 'DESC'),
            'meta_key' => 'selling_count',
            'post_type' => 'product',
            'post_status' => 'publish',
            'post__not_in' => $postNotIn
        );
        $theBestSellers = new WP_Query($args);
        if ($theBestSellers->have_posts()) :
            $idx = 0;
            while ($theBestSellers->have_posts()) : $theBestSellers->the_post();
                $itemClass = ($idx == 0 ? 'first' : ($idx == 2 ? 'last' : ''));
                $productDetails = fetchProductDetails(); ?>
                <li class="item <?php echo $itemClass; ?>">
                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="product-image">
                        <?php the_post_thumbnail(); ?>
                    </a>

                    <div class="box-feature">
                        <h2 class="product-name"><a href="<?php the_permalink(); ?>"
                                                    title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>

                        <div class="price-box">
                            <p class="special-price">
                                <span class="price-label">Special Price</span>
                                <span class="price"
                                      id="product-price-1"><?php echo $productDetails['sale_price']['formatted']; ?></span>
                            </p>

                            <p class="old-price">
                                <span class="price-label">Regular Price:</span>
                                <span class="price"
                                      id="old-price-1"><?php echo $productDetails['unit_price']['formatted']; ?></span>
                            </p>
                        </div>

                        <div class="actions">
                            <button type="button" class="button btn-cart" rel="tooltip"
                                    data-original-title=""><span><span>+ Add to Cart</span></span>
                            </button>
                        </div>
                    </div>
                </li>
                <?php $idx++;
            endwhile;?>
            <?php wp_reset_postdata(); ?>
        <?php endif;
    }
endif;