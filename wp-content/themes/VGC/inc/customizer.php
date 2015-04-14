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