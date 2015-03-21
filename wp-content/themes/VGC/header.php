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
                        <div class="col-md-2 col-sms12">
                            <div class="special-offer"><a href="">Special Offer</a></div>
                            <div class="link-mobile">
                                <div class="title-link">
                                    <h2>Account</h2>
                                </div>
                                <div class="link-content">
                                    <ul class="links">
                                        <li class="first"><a href="#" title="Account">Account</a>
                                        </li>
                                        <li><a href="#" title="Wish List">Wish List</a>
                                        </li>
                                        <li class="last"><a href="#" title="My Cart" class="top-link-cart">Cart(0)</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 col-sms12">
                            <ul class="links">
                                <li class="first"><a href="" title="Account">Account</a></li>
                                <li><a href="" title="Wish list">Wish List</a></li>
                                <li><a href="" title="Cart" class="top-link-cart">Cart (0)</a></li>
                            </ul>

                        </div>

                    </div>
                </div>
            </div>

            <div class="header">
                <div class="container">
                    <div class="header-content">
                        <div class="row">
                            <div class="col-xs-12 col-md-3 col-sm-12">
                                <a href="" title="Vancouver Gold for Cash" class="logo"><strong>Vancouver Gold for Cash</strong><img src="<?php echo TEMP_DIR;?>/images/logo-orange.png" alt="Vancouver Gold for Cash"></a>
                            </div>
                            <div class="col-xs-12 col-md-6 col-sm-12">
                                <div class="header-box">
                                    <div class="search-container">

                                        <form id="search_mini_form" action="" method="get">
                                            <div class="form-search">
                                                <label for="search">Search:</label>
                                                <div class="box-select">
                                                    <div class="header-select">
                                                        <select class="selectpicker" id="cat" name="cat" style="display: none;">
                                                            <option value="">Categories</option>
                                                            <option value="3">Bracelets</option>
                                                            <option value="4">Earrings</option>
                                                            <option value="5">Necklaces</option>
                                                            <option value="6">Rings</option>
                                                            <option value="7">Watches</option>
                                                            <option value="8">Wedding</option>
                                                        </select>
                                                        <div class="btn-group bootstrap-select">
                                                            <button type="button" class="btn dropdown-toggle selectpicker btn-default" data-toggle="dropdown" data-id="cat" title="Categories">
                                                                <span class="filter-option pull-left">Categories</span>&nbsp;<span class="caret"></span>
                                                            </button>
                                                            <div class="dropdown-menu open">
                                                                <ul class="dropdown-menu inner selectpicker" role="menu">
                                                                    <li rel="0" class="selected"><a tabindex="0" class="" style=""><span class="text">Categories</span></a>
                                                                    </li>
                                                                    <li rel="1"><a tabindex="0" class="" style=""><span class="text">Bracelets</span></a>
                                                                    </li>
                                                                    <li rel="2"><a tabindex="0" class="" style=""><span class="text">Earrings</span></a>
                                                                    </li>
                                                                    <li rel="3"><a tabindex="0" class="" style=""><span class="text">Necklaces</span></a>
                                                                    </li>
                                                                    <li rel="4"><a tabindex="0" class="" style=""><span class="text">Rings</span></a>
                                                                    </li>
                                                                    <li rel="5"><a tabindex="0" class="" style=""><span class="text">Watches</span></a>
                                                                    </li>
                                                                    <li rel="6"><a tabindex="0" class="" style=""><span class="text">Wedding</span></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="header-input">
                                                    <input id="search" type="text" name="q" class="input-text" autocomplete="off">
                                                </div>
                                                <button type="submit" title="Search" class="button"><span><span>Search</span></span></button>

                                            </div>
                                        </form>
                                        <script type="text/javascript">
                                            //<![CDATA[
                                            var searchForm = new Varien.searchForm('search_mini_form', 'search', 'Search entire store here...');
                                            searchForm.initAutocomplete('', 'search_autocomplete');
                                            //]]>
                                        </script>
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
                            <ul>
                                <li><a href="">About Us</a></li>
                                <li><a href="">Events</a></li>
                                <li><a href="">Collections</a></li>
                                <li><a href="">Blog</a></li>
                                <li><a href="">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="clearBoth"></div>
                </div>
            </div>
        </div>
    </div>