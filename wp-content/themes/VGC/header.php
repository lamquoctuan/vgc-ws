<?php
/**
 * Created by PhpStorm.
 * User: tuanlam
 * Date: 3/20/15
 * Time: 10:43 AM
 */
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;" charset="<?php bloginfo( 'charset' ); ?>">

    <title><?php wp_title(); ?><Vancouver Gold for Cash</title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="page">
    <div class="header-container">
        <div class="header-container-inner">
            <div class="top-link">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sms12">
                            <p class="welcome-msg">Welcome to Vancouver Gold for Cash!</p>
                        </div>
<?php
$classesTopRight = array(
    'ul' => 'links',
    'li_first' => 'first',
    'li_last' => 'last'
);
$menuTopRight = getMenu('top-nav-right', $classesTopRight);
$menuMain = getMenu('primary');
$menuLeftSide = getMenuListArray('left-side');
?>
                        <div class="col-md-2 col-sms12">
                            <div class="special-offer"><a href="">Special Offer</a></div>
                            <div class="link-mobile">
                                <div class="title-link">
                                    <h2><?php echo $menuTopRight['menu_name'];?></h2>
                                </div>
                                <div class="link-content">
                                    <?php echo $menuTopRight['menu_list'];?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 col-sms12">
                            <?php echo $menuTopRight['menu_list'];?>
                        </div>

                    </div>
                </div>
            </div>

            <div class="header">
                <div class="container">
                    <div class="header-content">
                        <div class="row">
                            <div class="col-xs-12 col-md-3 col-sm-12">
                                <a href="" title="Vancouver Gold for Cash" class="logo"><strong>Vancouver Gold for Cash</strong><img src="<?php echo TEMP_URI;?>/images/logo-orange.png" alt="Vancouver Gold for Cash"></a>
                            </div>
                            <div class="col-xs-12 col-md-6 col-sm-12">
                                <div class="header-box">
                                    <div class="search-container">
                                        <?php get_search_form(  ); ?>
                                    </div>

                                </div>
                            </div>
                            <div class="col-xs-12 col-md-3 col-sm-12">
                                <div class="header-box fly-images">
                                    <div class="top-cart-wrapper">
                                        <div class="top-cart-contain">
                                            <div id="mini_cart_block">
                                                <div class="block-cart mini_cart_ajax">
                                                    <div class="block-cart">
                                                        <div class="top-cart-title">
                                                            <div class="shopping_cart">shopping cart</div>
                                                            <div class="shopping_cart_mobile">cart</div>
                                                            <span><span> item</span> - <span class="price">$0.00</span></span>
                                                        </div>
                                                        <div class="cart_arrow"></div>
                                                        <div class="top-cart-content" style="overflow: hidden; display: none;">
                                                            <p class="empty">You have no items in your shopping cart.</p>
                                                            <div class="cart-bottom">
                                                                <div class="subtotal-title">Subtotal</div>
                                                                <div class="top-subtotal"> <span class="price">$0.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="ma-nav-mobile-container visible-xs">
            <div class="container">
                <div class="navbar">
                    <div id="navbar-inner" class="navbar-inner navbar-inactive">
                        <div class="menu-mobile">
                            <a class="btn btn-navbar navbar-toggle">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </a>
                            <span class="brand navbar-brand">Categories</span>
                        </div>
<?php
$menuLeftSideHTML = '';
if (!empty($menuLeftSide)) {
    $menuLeftSideHTML = '<ul id="ma-mobilemenu" class="mobilemenu nav-collapse collapse">';
    for ($idx=0; $idx<count($menuLeftSide[items]); $idx++) {
        $class = 'level0 nav-'.($idx+1).' level-top '.(($idx==0?'first ':'')).'parent';
        $menuLeftSideHTML .= '<li class="'.$class.'">
                                <a href="'.$menuLeftSide[items][$idx]['url'].'" class="level-top">
                                    <span>'.$menuLeftSide[items][$idx]['title'].'</span>
                                </a>
                            </li>';
    }
    $menuLeftSideHTML .= '</ul>';
}
//echo $menuLeftSideHTML;
?>
                        <ul id="ma-mobilemenu" class="mobilemenu nav-collapse collapse">
                            <li class="level0 nav-1 level-top first parent">
                                <a href="" class="level-top">
                                    <span>Bracelets</span>
                                </a>
                            </li>
                            <li class="level0 nav-2 level-top parent">
                                <a href="index.php/pants.html" class="level-top">
                                    <span>Earrings</span>
                                </a>
                            </li>
                            <li class="level0 nav-3 level-top">
                                <a href="index.php/jeans.html" class="level-top">
                                    <span>Necklaces</span>
                                </a>
                            </li>
                            <li class="level0 nav-4 level-top">
                                <a href="index.php/jeans.html" class="level-top">
                                    <span>Rings</span>
                                </a>
                            </li>
                            <li class="level0 nav-5 level-top">
                                <a href="index.php/jeans.html" class="level-top">
                                    <span>Watches</span>
                                </a>
                            </li>
                            <li class="level0 nav-6 level-top">
                                <a href="index.php/jeans.html" class="level-top">
                                    <span>Wedding</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="nav-container visible-lg visible-md">
            <div class="container">
                <div id="pt_custommenu" class="pt_custommenu">
                    <div id="pt_menu_home" class="pt_menu act">
                        <div class="parentMenu">
                            <a href="">
                                <span>Home</span>
                            </a>
                        </div>
                    </div>
                    <div id="pt_menu_link" class="pt_menu">
                        <div class="parentMenu">
                            <?php echo $menuMain['menu_list'];?>
                        </div>
                    </div>
                    <div class="clearBoth"></div>
                </div>
            </div>
        </div>
    </div>