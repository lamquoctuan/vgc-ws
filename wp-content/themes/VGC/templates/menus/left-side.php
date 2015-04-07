<div class="megamenu-title"><h2>Category</h2></div>
<?php
$menuLeftSide = getMenuListArray('left-side');
$menuLeftSideHTML = '';
if (!empty($menuLeftSide)) {
    $menuLeftSideHTML = '<div id="pt_vmegamenu" class="pt_vmegamenu">';
    for ($idx=0; $idx<count($menuLeftSide[items]); $idx++) {
        $class = 'pt_menu';
        if ( $idx==0 ) {
            $class .= ' first';
        }
        elseif ( $idx==0 ) {
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