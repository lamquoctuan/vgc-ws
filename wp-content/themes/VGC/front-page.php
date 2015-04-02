<?php
get_header();
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

?>
    <div class="main-container col2-left-layout">
        <div class="container">
            <div class="container-inner">
                <div class="main">
                    <div class="row">
                        <div class="col-left sidebar col-xs-12 col-sm-3">
                            <div class="navleft-container visible-lg visible-md">
                                <div class="megamenu-title"><h2>Category</h2></div>
<?php
echo $menuLeftSideHTML;
?>

                            </div>


                            <div class="ma-featured-products">
                                <!-- start mt products list -->
                                <div class="ma-featured-product-title">
                                    <h2>BEST SELLERs</h2>
                                </div>
                                <div class="featured-products">
                                    <ul class="products-grid  first last odd">
                                        <li class="item first">
                                            <a href="#" title="Fusce aliquam" class="product-image">
                                                <img src="<?php echo TEMP_URI;?>/assets/images/best/1.jpg" width="500" height="500" alt="Jewelry Name">
                                            </a>
                                            <div class="box-feature">
                                                <h2 class="product-name"><a href="" title="Jewelry Name">Jewelry Name</a></h2>
                                                <div class="price-box">
                                                    <p class="special-price">
                                                        <span class="price-label">Special Price</span>
									                            <span class="price" id="product-price-1">
									                    $100.00                </span>
                                                    </p>
                                                    <p class="old-price">
                                                        <span class="price-label">Regular Price:</span>
									                            <span class="price" id="old-price-1">
									                    $170.00                </span>
                                                    </p>


                                                </div>

                                                <div class="actions">
                                                    <button type="button" class="button btn-cart" rel="tooltip" data-original-title=""><span><span>+ Add to Cart</span></span>
                                                    </button>
                                                </div>
                                            </div>
                                        </li>
                                        <!--  -->
                                        <li class="item">
                                            <a href="#" title="Proin lectus ipsum" class="product-image">
                                                <img src="<?php echo TEMP_URI;?>/assets/images/best/2.jpg" width="500" height="500" alt="Jewelry Name">
                                            </a>
                                            <div class="box-feature">
                                                <h2 class="product-name"><a href="#" title="Jewelry Name">Jewelry Name</a></h2>



                                                <div class="price-box">
                                                    <p class="special-price">
                                                        <span class="price-label">Special Price</span>
									                            <span class="price" id="product-price-1">
									                    $100.00                </span>
                                                    </p>
                                                    <p class="old-price">
                                                        <span class="price-label">Regular Price:</span>
									                            <span class="price" id="old-price-1">
									                    $170.00                </span>
                                                    </p>
                                                </div>

                                                <div class="actions">
                                                    <button type="button" class="button btn-cart" rel="tooltip" data-original-title=""><span><span>+ Add to Cart</span></span>
                                                    </button>
                                                </div>
                                            </div>
                                        </li>
                                        <!--  -->
                                        <li class="item last">
                                            <a href="#" title="Quisque in arcu" class="product-image">
                                                <img src="<?php echo TEMP_URI;?>/assets/images/best/3.jpg" width="500" height="500" alt="Jewelry Name">
                                            </a>
                                            <div class="box-feature">
                                                <h2 class="product-name"><a href="#" title="Jewelry Name">Jewelry Name</a></h2>



                                                <div class="price-box">
                                                    <p class="special-price">
                                                        <span class="price-label">Special Price</span>
									                            <span class="price" id="product-price-1">
									                    $100.00                </span>
                                                    </p>
                                                    <p class="old-price">
                                                        <span class="price-label">Regular Price:</span>
									                            <span class="price" id="old-price-1">
									                    $170.00                </span>
                                                    </p>
                                                </div>

                                                <div class="actions">
                                                    <button type="button" class="button btn-cart" rel="tooltip" data-original-title=""><span><span>+ Add to Cart</span></span>
                                                    </button>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <!--  -->
                                   <!-- <script type="text/javascript">
                                        http://vgc.lnr.com/wp-content/themes/VGC/assets/images/banner8/bg2-banner8.jpg($$('ul.products-grid'), ['odd', 'even', 'first', 'last'])
                                    </script>-->
                                </div>
                                <!-- end exist product -->
                            </div>

                            <div class="ma-banner8-container">
                                <div class="flexslider">
                                    <div class="ma-loading" style="display: none;"></div>
                                   <!-- <script type="text/javascript">
                                        $jq(window).load(function(){
                                            $jq('.ma-banner8-container .flexslider').flexslider({
                                                slideshow: true,
                                                animation: "slide",
                                                slideshowSpeed: 3000,
                                                animationSpeed: 500,
                                                directionNav: false,
                                                start: function(slider){
                                                    $jq('.ma-loading').css("display","none");
                                                },
                                                before: function(){
                                                    $jq('.banner8-title, .banner8-des').css("left","-550px");
                                                    $jq('.banner8-readmore').css("left","-1500px");
                                                },
                                                after: function(){
                                                    $jq('.banner8-title, .banner8-des, .banner8-readmore').css("left","100px")
                                                }
                                            });
                                        });
                                    </script>-->
                                    <div class="flex-viewport" style="overflow: hidden; position: relative;">
                                        <ul class="slides" style="width: 1000%; -webkit-transition-duration: 0s; transition-duration: 0s; -webkit-transform: translate3d(-263px, 0px, 0px);">
                                            <li class="clone" style="width: 263px; float: left; display: block;">
                                                <img src="<?php echo TEMP_URI;?>/assets/images/banner8/bg2-banner8.jpg" alt="">
                                            </li>

                                            <li class="flex-active-slide" style="width: 263px; float: left; display: block;">
                                                <img src="<?php echo TEMP_URI;?>/assets/images/banner8/bg-banner8.jpg" alt="">
                                            </li>
                                            <li class="" style="width: 263px; float: left; display: block;">
                                                <img src="<?php echo TEMP_URI;?>/assets/images/banner8/bg1-banner8.jpg" alt="">
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-main col-xs-12 col-sm-9">
                            <div class="sequence-theme">
                                <div id="sequence">
                                    <ul class="controls">
                                        <li><a class="sequence-prev">Prev</a></li>
                                        <li><a class="sequence-next">Next</a></li>
                                    </ul>
                                    <ul class="sequence-canvas">
                                        <li class="animate-in" style="display: list-item; opacity: 1; z-index: 3;">
                                            <h2 class="title" style="">SPECIAL MOMENTS</h2>
                                            <h3 class="subtitle1" style="">LATEST SPRING SUMMER COLLECTION 2014</h3>
                                            <div class="intro subtitle" style="">
                                                Whether it opens up to reveal a solitaire engagement ring or keeps a wedding ring safe...</div>

                                            <img class="slider-bg" src="<?php echo TEMP_URI;?>/assets/images/bg1.jpg" alt="Image" style="">
                                            <div class="link subtitle1" style="">
                                                <a href="#">Shop now</a>
                                            </div>
                                        </li>
                                        <li class="animate-out" style="display: list-item; opacity: 1; z-index: 1;">
                                            <h2 class="title-slider2" style="">Jewelry</h2>
                                            <h3 class="subtitle-slider2" style="">Seeing the quality in you</h3>
                                            <div class="intro-slider2 subtitle-slider2" style="">
                                                Passion and Success</div>

                                            <img class="slider-bg" src="<?php echo TEMP_URI;?>/assets/images/bg2.jpg" alt="Image" style="">
                                            <div class="link-slider2 subtitle-slider2" style="">
                                                <a href="#">Shop now</a>
                                            </div>
                                        </li>
                                        <li class="animate-out" style="display: list-item; opacity: 1; z-index: 1;">
                                            <h2 class="title-slider3" style="">Platinum</h2>
                                            <h3 class="subtitle-slider3" style="">The moment of a lifetime</h3>
                                            <div class="intro-slider3 subtitle-slider3" style="">
                                                Once in awhile, Right in the middle of an ordinary life, Love gives us a fairy tale.</div>

                                            <img class="slider-bg" src="<?php echo TEMP_URI;?>/assets/images/bg3.jpg" alt="Image" style="">
                                            <div class="link-slider3 subtitle-slider3" style="">
                                                <a href="#">Shop now</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <script type="text/javascript">

                                //<![CDATA[
                                $seq (document).ready(function(){
                                    //$jqstatus = $jq(".status");
                                    var options = {
                                        autoPlay: true,
                                        autoPlayDelay: 3000,
                                        pauseOnHover: false,
                                        hidePreloaderDelay: 500,
                                        nextButton: true,
                                        prevButton: true,
                                        pauseButton: true,
                                        preloader: true,
                                        pagination:true,
                                        hidePreloaderUsingCSS: false,
                                        animateStartingFrameIn: true,
                                        navigationSkipThreshold: 750,
                                        preventDelayWhenReversingAnimations: true,
                                        customKeyEvents: {
                                            80: "pause"
                                        }
                                    };

                                    var sequence = $seq("#sequence").sequence(options).data("sequence");
                                });
                                //]]>

                            </script>
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
                                                <div class="col-sm-6 col-md-3 col-sms-12 col-smb-12 item first">
                                                    <div class="label-pro-new"></div>
                                                    <div class="item-inner">
                                                        <div class="box-item home">
                                                            <div class="products">
                                                                <article class="product">
                                                                    <figure>
                                                                        <a href="#" title="Voluptas nulla" class="product-image">
                                                                            <div class="product-image">
                                                                                <img src="<?php echo TEMP_URI;?>/assets/images/new/1.jpg" width="500" height="500" alt="Jewelry Name">
                                                                            </div>
                                                                        </a>
                                                                    </figure>
                                                                </article>
                                                            </div>
                                                            <h2 class="product-name">
                                                                <a href="#" title="Jewelry Name">Jewelry Name</a>
                                                            </h2>
                                                            <div class="review-price">
                                                                <div class="price-box">
															                <span class="regular-price">
									                                            <span class="price">$98.00</span>
								                                            </span>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-3 col-sms-12 col-smb-12 item">
                                                    <div class="label-pro-new"></div>
                                                    <div class="item-inner">
                                                        <div class="box-item home">
                                                            <div class="products">
                                                                <article class="product">
                                                                    <figure>
                                                                        <a href="#" title="Jewelry Name" class="product-image">
                                                                            <div class="product-image">
                                                                                <img src="<?php echo TEMP_URI;?>/assets/images/new/2.jpg" width="500" height="500" alt="Jewelry Name">
                                                                            </div>
                                                                        </a>
                                                                    </figure>
                                                                </article>
                                                            </div>
                                                            <h2 class="product-name">
                                                                <a href="#" title="Jewelry Name">Jewelry Name</a>
                                                            </h2>
                                                            <div class="review-price">
                                                                <div class="price-box">
															                <span class="regular-price">
									                                            <span class="price">$98.00</span>
								                                            </span>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-3 col-sms-12 col-smb-12 item">
                                                    <div class="label-pro-new"></div>
                                                    <div class="item-inner">
                                                        <div class="box-item home">
                                                            <div class="products">
                                                                <article class="product">
                                                                    <figure>
                                                                        <a href="#" title="Voluptas nulla" class="product-image">
                                                                            <div class="product-image">
                                                                                <img src="<?php echo TEMP_URI;?>/assets/images/new/3.jpg" width="500" height="500" alt="Voluptas nulla">
                                                                            </div>
                                                                        </a>
                                                                    </figure>
                                                                </article>
                                                            </div>
                                                            <h2 class="product-name">
                                                                <a href="#" title="Jewelry Name">Jewelry Name</a>
                                                            </h2>
                                                            <div class="review-price">
                                                                <div class="price-box">
															                <span class="regular-price">
									                                            <span class="price">$98.00</span>
								                                            </span>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-3 col-sms-12 col-smb-12 item last">
                                                    <div class="label-pro-new"></div>
                                                    <div class="item-inner">
                                                        <div class="box-item home">
                                                            <div class="products">
                                                                <article class="product">
                                                                    <figure>
                                                                        <a href="#" title="Voluptas nulla" class="product-image">
                                                                            <div class="product-image">
                                                                                <img src="<?php echo TEMP_URI;?>/assets/images/new/4.jpg" width="500" height="500" alt="Jewelry Name">
                                                                            </div>
                                                                        </a>
                                                                    </figure>
                                                                </article>
                                                            </div>
                                                            <h2 class="product-name">
                                                                <a href="#" title="Jewelry Name">Jewelry Name</a>
                                                            </h2>
                                                            <div class="review-price">
                                                                <div class="price-box">
															                <span class="regular-price">
									                                            <span class="price">$98.00</span>
								                                            </span>
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

                            <div class="std">
                                <div class="home-content">
                                    <div class="container-tab">
                                        <div class="box-category">
                                            <div class="tab-title">
                                                <h2>most wished</h2>
                                            </div>
                                        </div>
                                        <div class="tab_container">
                                            <div  class="tab_content_new_products">
                                                <ul class="products-grid row even">


                                                    <li class="col-md-4 col-sm-4 col-sms-12 item first">
                                                        <div class="item-inner">

                                                            <a href="#" title="Jewelry Name" class="product-image">
                                                                <img src="<?php echo TEMP_URI;?>/assets/images/most/1.jpg" alt="Jewelry Name">
                                                            </a>
                                                            <div class="box-item">
                                                                <h2 class="product-name"><a href="#" title="Jewelry Name">Jewelry Name</a></h2>



                                                                <div class="price-box">
													                        <span class="regular-price" id="product-price-18">
													                                            <span class="price">$86.00</span> </span>

                                                                </div>


                                                                <div class="actions">
                                                                    <div class="cart-content">
                                                                        <button type="button" class="button btn-cart" rel="tooltip" data-original-title=""><span><span>+ Add to Cart</span></span>
                                                                        </button>
                                                                        <ul class="add-to-links">
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>


                                                    <li class="col-md-4 col-sm-4 col-sms-12 item">
                                                        <div class="item-inner">

                                                            <a href="#" title="Jewelry Name" class="product-image">
                                                                <img src="<?php echo TEMP_URI;?>/assets/images/most/2.jpg" alt="Jewelry Name">
                                                            </a>
                                                            <div class="box-item">
                                                                <h2 class="product-name">
                                                                    <a href="#" title="Jewelry Name">Jewelry Name</a>
                                                                </h2>



                                                                <div class="price-box">
													                        <span class="regular-price" id="product-price-19">
													                                            <span class="price">$94.00</span> </span>

                                                                </div>


                                                                <div class="actions">
                                                                    <div class="cart-content">
                                                                        <button type="button" class="button btn-cart" rel="tooltip" data-original-title=""><span><span>+ Add to Cart</span></span>
                                                                        </button>
                                                                        <ul class="add-to-links">
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>


                                                    <li class="col-md-4 col-sm-4 col-sms-12 item last">
                                                        <div class="item-inner">

                                                            <a href="#" class="product-image">
                                                                <img src="<?php echo TEMP_URI;?>/assets/images/most/3.jpg" alt="Jewelry Name">
                                                            </a>
                                                            <div class="box-item">
                                                                <h2 class="product-name"><a href="#" title="Jewelry Name">Jewelry Name</a></h2>



                                                                <div class="price-box">
													                        <span class="regular-price" id="product-price-20">
									                                            <span class="price">$96.00</span>
								                                            </span>

                                                                </div>


                                                                <div class="actions">
                                                                    <div class="cart-content">
                                                                        <button type="button" class="button btn-cart" rel="tooltip" data-original-title=""><span><span>+ Add to Cart</span></span>
                                                                        </button>
                                                                        <ul class="add-to-links">
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>


                                                </ul>
                                                <ul class="products-grid row odd">


                                                    <li class="col-md-4 col-sm-4 col-sms-12 item first">
                                                        <div class="item-inner">

                                                            <a href="#" title="Jewelry Name" class="product-image">
                                                                <img src="<?php echo TEMP_URI;?>/assets/images/most/4.jpg" alt="Jewelry Name">
                                                            </a>
                                                            <div class="box-item">
                                                                <h2 class="product-name"><a href="#" title="Jewelry Name">Jewelry Name</a></h2>



                                                                <div class="price-box">
													                        <span class="regular-price" id="product-price-21">
													                                            <span class="price">$98.00</span> </span>

                                                                </div>


                                                                <div class="actions">
                                                                    <div class="cart-content">
                                                                        <button type="button" class="button btn-cart" rel="tooltip" data-original-title=""><span><span>+ Add to Cart</span></span>
                                                                        </button>
                                                                        <ul class="add-to-links">
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>


                                                    <li class="col-md-4 col-sm-4 col-sms-12 item">
                                                        <div class="item-inner">

                                                            <a href="#" title="Jewelry Name" class="product-image">
                                                                <img src="<?php echo TEMP_URI;?>/assets/images/most/5.jpg" alt="Jewelry Name">
                                                            </a>
                                                            <div class="box-item">
                                                                <h2 class="product-name"><a href="#" title="Jewelry Name">Jewelry Name</a></h2>



                                                                <div class="price-box">
													                        <span class="regular-price" id="product-price-22">
													                                            <span class="price">$97.00</span> </span>

                                                                </div>


                                                                <div class="actions">
                                                                    <div class="cart-content">
                                                                        <button type="button" class="button btn-cart" rel="tooltip" data-original-title=""><span><span>+ Add to Cart</span></span>
                                                                        </button>
                                                                        <ul class="add-to-links">
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>


                                                    <li class="col-md-4 col-sm-4 col-sms-12 item last">
                                                        <div class="item-inner">

                                                            <a href="#" title="Jewelry Name" class="product-image">
                                                                <img src="<?php echo TEMP_URI;?>/assets/images/most/6.jpg" alt="Jewelry Name">
                                                            </a>
                                                            <div class="box-item">
                                                                <h2 class="product-name"><a href="#" title="Jewelry Name">Jewelry Name</a></h2>



                                                                <div class="price-box">
													                        <span class="regular-price" id="product-price-23">
													                                            <span class="price">$93.00</span> </span>

                                                                </div>


                                                                <div class="actions">
                                                                    <div class="cart-content">
                                                                        <button type="button" class="button btn-cart" rel="tooltip" data-original-title=""><span><span>+ Add to Cart</span></span>
                                                                        </button>
                                                                        <ul class="add-to-links">
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>


                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="banner-subscribe">
                                        <div class="block block-subscribe">
                                            <div class="subscribe-title footer-static-title">
                                                <h3>Subscribe To Our Newsletter !</h3>
                                            </div>
                                            <form action="http://www.plazathemes.com/demo/ma_sagitta/index.php/newsletter/subscriber/new/" method="post" id="newsletter-validate-detail">
                                                <div class="block-content">
                                                    <div class="form-subscribe-header">
                                                        <label for="newsletter">Sign Up for Our Newsletter:</label>
                                                    </div>
                                                    <div class="input-box">
                                                        <input type="text" name="email" id="newsletter" title="Sign up for our newsletter" class="input-text required-entry validate-email">
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" title="Subscribe" class="button"><span><span>Subscribe</span></span></button>
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
