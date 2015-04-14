<?php
$taxonomyName = get_query_var('taxonomy');
$postType = (get_query_var('post_type')) ? get_query_var('post_type') : 'product';
$termSlug = get_query_var('term');
$term = get_term_by('slug', $termSlug, $taxonomyName);
?>
<div class="megamenu-title"><h2>Categories</h2></div>
<?php
$menuLeftSide = getMenuListArray('left-side');
$menuLeftSideHTML = '';
if (!empty($menuLeftSide)) {
    $menuLeftSideHTML = '<div id="pt_vmegamenu" class="pt_vmegamenu">';
    $numItems = count($menuLeftSide[items]);
    for ($idx=0; $idx<$numItems; $idx++) {
        $class = 'pt_menu';
        if ($menuLeftSide['items'][$idx]['object_id'] == $term->term_id) {
            $class .= ' act';
        }
        if ( $idx==0 ) {
            $class .= ' first';
        }
        elseif ( $idx==($numItems-1) ) {
            $class .= ' last';
        }
        $menuLeftSideHTML .= '<div class="'.$class.'">
                                <div class="parentMenu">
                                    <a href="'.$menuLeftSide['items'][$idx]['url'].'">
                                        <span>'.$menuLeftSide['items'][$idx]['title'].'</span>
                                    </a>
                                </div>
                            </div>';
    }
    $menuLeftSideHTML .= '<div class="clearBoth"></div></div>';
}
echo $menuLeftSideHTML;
?>