<?php
global $post;
$menuName = 'account-pages';
$menuItems = wp_get_nav_menu_items($menuName);
$numItems = count($menuItems);
?>
<div class="col-left sidebar col-xs-12 col-sm-3">
    <div class="block block-account">
        <div class="block-title">
            <strong><span>My Account</span></strong>
        </div>
        <div class="block-content">
            <ul>
                <?php
                for ($idx = 0; $idx < $numItems; $idx++) {
                    $menuItem = $menuItems[$idx];
                    $liClasses = array();
                    $itemTitle = '';
                    if ($post->ID == $menuItem->object_id) {
                        array_push($liClasses, 'current');
                        $itemTitle = '<strong>' . $menuItem->title . '</strong>';
                    } else {
                        $itemTitle = '<a href="' . $menuItem->url . '">' . $menuItem->title . '</a>';
                    }
                    if ($idx == $numItems - 1) {
                        array_push($liClasses, 'last');
                    }
                    $attrClass = (count($liClasses) > 0) ? ' class="' . implode(' ', $liClasses) . '"' : '';
                    echo '<li' . $attrClass . '>' . $itemTitle . '</li>';
                }
                ?>
            </ul>
        </div>
    </div>
</div>