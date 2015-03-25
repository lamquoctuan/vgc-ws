<?php
/**
 * Created by PhpStorm.
 * User: tuanlam
 * Date: 3/21/15
 * Time: 10:27 AM
 */

if ( ! function_exists('getMenu') ) :
/**
 * @param string    $menuSlug  Menu slug in location
 * @param array     $classes    The classes used in ul, li. Example
 *                                  $classes = array(
 *                                  'ul' => 'links',
 *                                  'li' => 'li',
 *                                  'li_first' => 'first',
 *                                  'li_last' => 'last'
 *                                  );
 * @return array   $menuList   List of menu in html
 */
function getMenu( $menuSlug, $classes = array() , $menuId = '' ) {

    $result = array();
    if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menuSlug ] ) ) {
        $menu = wp_get_nav_menu_object( $locations[ $menuSlug ] );

        $menuItems = wp_get_nav_menu_items($menu->term_id);
        $result['menu_name'] = $menu->name;

        $result['menu_list'] = '<ul id="' . (empty($menuId)?'menu-' . $menuSlug:$menuId) . '"'. (isset($classes['ul'])?' class="' . $classes['ul'] . '"':'') .'>';

        foreach ( (array) $menuItems as $key => $menuItem ) {
            $title = $menuItem->title;
            $url = $menuItem->url;
            $attr_title = $menuItem->attr_title;
            $classesLi = array();
            if ( isset( $classes['li'] ) ) {
                array_push($classesLi, $classes['li']);
            }

            if ( isset( $classes['li_first'] ) && ( $key == 0 ) ) {
                array_push($classesLi, $classes['li_first']);
            }
            if ( isset( $classes['li_last'] ) && ( $key == count( $menuItems ) ) ) {
                array_push($classesLi, $classes['li_last']);
            }

            $result['menu_list'] .= '<li'.(empty( $classesLi ) ? '' : ' class="' . implode(' ', $classesLi) . '"').'><a href="' . $url . '" title="' . $attr_title . '">' . $title . '</a></li>';
        }
        $result['menu_list'] .= '</ul>';
    }

    return $result;
}
endif;

if ( ! function_exists( 'getMenuListArray' ) ) :
    /**
     * @param string $menuSlug
     * @return array
     */
    function getMenuListArray($menuSlug) {

    $result = array();
    if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menuSlug ] ) ) {
        $menu = wp_get_nav_menu_object( $locations[ $menuSlug ] );

        $menuItems = wp_get_nav_menu_items($menu->term_id);
        $result['menu_name'] = $menu->name;

        $result['items'] = array();
        foreach ( (array) $menuItems as $key => $menuItem ) {
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