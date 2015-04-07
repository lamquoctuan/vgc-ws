<?php
/**
 * Created by PhpStorm.
 * User: tuanlam
 * Date: 3/29/15
 * Time: 4:52 AM
 */
get_header();?>
<div class="ma-main-container col2-right-layout">
    <div class="container">
        <div class="container-inner">
            <div class="main">
                <div class="row">
                    <?php
                    // Start the loop.
                    while ( have_posts() ) : the_post();
?>
                        <div class="col-main col-xs-12 col-sm-9">
                            <div class="breadcrumbs">
                                <ul>
                                    <li class="home">
                                        <a href="home.html" title="Go to Home Page">Home</a>
                                        <span>/</span>
                                    </li>
                                    <li class="category3">
                                        <a href="products.html" title="">Rings</a>
                                        <span>/</span>
                                    </li>
                                    <li class="product">
                                        <strong>Jewelry Name</strong>
                                    </li>
                                </ul>
                            </div>

                            <div class="product-view">
                                <div class="product-essential">
                                    <form action="" method="post">
                                        <div class="row">
                                            <div class="product-img-box col-sm-5 col-md-5 col-sms-4 col-smb-12">
<?php get_template_part('templates/products/detail','images')?>

                                                <div class="product-social">
                                                    <!-- AddThis Button BEGIN -->
                                                    <div class="addthis_toolbox addthis_default_style ">
                                                        <a class="addthis_button_facebook_like at300b" fb:like:layout="button_count">
                                                            <div class="fb-like fb_iframe_widget" data-ref=".VQpBAnK00W8.like" data-layout="button_count" data-show_faces="false" data-action="like" data-width="90" data-font="arial" data-href="http://www.plazathemes.com/demo/ma_sagitta/index.php/shirts/voluptas-nulla.html?___SID=U" data-send="false" fb-xfbml-state="rendered" fb-iframe-plugin-query="action=like&amp;app_id=172525162793917&amp;container_width=0&amp;font=arial&amp;href=http%3A%2F%2Fwww.plazathemes.com%2Fdemo%2Fma_sagitta%2Findex.php%2Fshirts%2Fvoluptas-nulla.html%3F___SID%3DU&amp;layout=button_count&amp;locale=en_US&amp;ref=.VQpBAnK00W8.like&amp;sdk=joey&amp;send=false&amp;show_faces=false&amp;width=90"><span style="vertical-align: bottom; width: 76px; height: 20px;"><iframe name="f37abd7ab8" width="90px" height="1000px" frameborder="0" allowtransparency="true" scrolling="no" title="fb:like Facebook Social Plugin" src="http://www.facebook.com/plugins/like.php?action=like&amp;app_id=172525162793917&amp;channel=http%3A%2F%2Fstatic.ak.facebook.com%2Fconnect%2Fxd_arbiter%2F6Dg4oLkBbYq.js%3Fversion%3D41%23cb%3Df10bd775e%26domain%3Dwww.plazathemes.com%26origin%3Dhttp%253A%252F%252Fwww.plazathemes.com%252Ff3c2fcbad4%26relation%3Dparent.parent&amp;container_width=0&amp;font=arial&amp;href=http%3A%2F%2Fwww.plazathemes.com%2Fdemo%2Fma_sagitta%2Findex.php%2Fshirts%2Fvoluptas-nulla.html%3F___SID%3DU&amp;layout=button_count&amp;locale=en_US&amp;ref=.VQpBAnK00W8.like&amp;sdk=joey&amp;send=false&amp;show_faces=false&amp;width=90" style="border: none; visibility: visible; width: 76px; height: 20px;" class=""></iframe></span>
                                                            </div>
                                                        </a>
                                                        <a class="addthis_button_tweet at300b">
                                                            <iframe id="twitter-widget-0" scrolling="no" frameborder="0" allowtransparency="true" src="http://platform.twitter.com/widgets/tweet_button.3b6d1172463333ba9e3a4714e5a08ce6.en.html#_=1426735364781&amp;count=horizontal&amp;counturl=http%3A%2F%2Fwww.plazathemes.com%2Fdemo%2Fma_sagitta%2Findex.php%2Fshirts%2Fvoluptas-nulla.html%3F___SID%3DU&amp;dnt=true&amp;id=twitter-widget-0&amp;lang=en&amp;original_referer=http%3A%2F%2Fwww.plazathemes.com%2Fdemo%2Fma_sagitta%2Findex.php%2Fshirts%2Fvoluptas-nulla.html%3F___SID%3DU&amp;size=m&amp;text=Voluptas%20nulla%20-%20Shirts%3A&amp;url=http%3A%2F%2Fwww.plazathemes.com%2Fdemo%2Fma_sagitta%2Findex.php%2Fshirts%2Fvoluptas-nulla.html%3F___SID%3DU%23.VQpBArkkfNQ.twitter" class="twitter-share-button twitter-tweet-button twitter-share-button twitter-count-horizontal" title="Twitter Tweet Button" data-twttr-rendered="true" style="width: 120px; height: 20px;"></iframe>
                                                        </a>
                                                        <a class="addthis_button_google_plusone at300b" g:plusone:size="medium">
                                                            <div id="___plusone_0" style="text-indent: 0px; margin: 0px; padding: 0px; border-style: none; float: none; line-height: normal; font-size: 1px; vertical-align: baseline; display: inline-block; width: 90px; height: 20px; background: transparent;">
                                                                <iframe frameborder="0" hspace="0" marginheight="0" marginwidth="0" scrolling="no" style="position: static; top: 0px; width: 90px; margin: 0px; border-style: none; left: 0px; visibility: visible; height: 20px;" tabindex="0" vspace="0" width="100%" id="I0_1426735364971" name="I0_1426735364971" src="https://apis.google.com/u/0/se/0/_/+1/fastbutton?usegapi=1&amp;size=medium&amp;hl=en-US&amp;origin=http%3A%2F%2Fwww.plazathemes.com&amp;url=http%3A%2F%2Fwww.plazathemes.com%2Fdemo%2Fma_sagitta%2Findex.php%2Fshirts%2Fvoluptas-nulla.html%3F___SID%3DU&amp;gsrc=3p&amp;ic=1&amp;jsh=m%3B%2F_%2Fscs%2Fapps-static%2F_%2Fjs%2Fk%3Doz.gapi.vi.04LAw0ZKHPs.O%2Fm%3D__features__%2Fam%3DIQ%2Frt%3Dj%2Fd%3D1%2Ft%3Dzcms%2Frs%3DAGLTcCMA8vIXizTKzDONmDyIHpKr4EXigw#_methods=onPlusOne%2C_ready%2C_close%2C_open%2C_resizeMe%2C_renderstart%2Concircled%2Cdrefresh%2Cerefresh&amp;id=I0_1426735364971&amp;parent=http%3A%2F%2Fwww.plazathemes.com&amp;pfname=&amp;rpctoken=12926918" data-gapiattached="true" title="+1"></iframe>
                                                            </div>
                                                        </a>
                                                        <div class="atclear"></div>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="product-shop col-sm-7 col-md-87 col-sms-8 col-smb-12">
                                                <div class="list-box">
                                                    <div class="product-name">
                                                        <h1>Jewelry Name</h1>
                                                    </div>
                                                </div>
                                                <div class="short-description">
                                                    <div class="std">Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue</div>
                                                </div>
                                                <div class="availability-price">

                                                    <p class="availability in-stock">Availability: <span>In stock</span>
                                                    </p>



                                                    <div class="price-box">
									                            <span class="regular-price" id="product-price-41">
									                                            <span class="price">$98.00</span> </span>

                                                    </div>


                                                </div>

                                                <div class="add-to-box-view">
                                                    <div class="add-to-cart">

                                                        <label for="qty">Qty:</label>
                                                        <div class="input-content">
                                                            <input type="text" name="qty" id="qty" maxlength="12" value="1" title="Qty" class="input-text qty">
                                                            <input type="button" onclick="var qty_el = document.getElementById('qty'); var qty = qty_el.value; if( !isNaN( qty )) qty_el.value++;return false;" class="qty-increase">
                                                            <input type="button" onclick="var qty_el = document.getElementById('qty'); var qty = qty_el.value; if( !isNaN( qty ) &amp;&amp; qty > 0 ) qty_el.value--;return false;" class="qty-decrease">
                                                        </div>
                                                        <button type="button" class="button btn-cart" onclick="productAddToCartForm.submit(this)" rel="tooltip" data-original-title=""><span><span>Add to Cart</span></span>
                                                        </button>
                                                    </div>
                                                </div>


                                                <div class="add-to-box">


                                                    <ul class="add-to-links">
                                                        <li><a href="" onclick="productAddToCartForm.submitLight(this, this.href); return false;" class="link-wishlist" rel="tooltip" data-original-title="">+ Wishlist</a>
                                                        </li>

                                                    </ul>

                                                    </p>
                                                </div>




                                            </div>
                                        </div>
                                        <div class="clearer"></div>
                                        <div class="no-display">
                                            <input type="hidden" name="product" value="41">
                                            <input type="hidden" name="related_product" id="related-products-field" value="">
                                        </div>
                                    </form>
                                    <script type="text/javascript">
                                        //<![CDATA[
                                        var productAddToCartForm = new VarienForm('product_addtocart_form');
                                        productAddToCartForm.submit = function(button, url) {
                                            if (this.validator.validate()) {
                                                var form = this.form;
                                                var oldUrl = form.action;

                                                if (url) {
                                                    form.action = url;
                                                }
                                                var e = null;
                                                try {
                                                    this.form.submit();
                                                } catch (e) {}
                                                this.form.action = oldUrl;
                                                if (e) {
                                                    throw e;
                                                }

                                                if (button && button != 'undefined') {
                                                    button.disabled = true;
                                                }
                                            }
                                        }.bind(productAddToCartForm);

                                        productAddToCartForm.submitLight = function(button, url) {
                                            if (this.validator) {
                                                var nv = Validation.methods;
                                                delete Validation.methods['required-entry'];
                                                delete Validation.methods['validate-one-required'];
                                                delete Validation.methods['validate-one-required-by-name'];
                                                // Remove custom datetime validators
                                                for (var methodName in Validation.methods) {
                                                    if (methodName.match(/^validate-datetime-.*/i)) {
                                                        delete Validation.methods[methodName];
                                                    }
                                                }

                                                if (this.validator.validate()) {
                                                    if (url) {
                                                        this.form.action = url;
                                                    }
                                                    this.form.submit();
                                                }
                                                Object.extend(Validation.methods, nv);
                                            }
                                        }.bind(productAddToCartForm);
                                        //]]>
                                    </script>
                                </div>

                                <div class="product-collateral">
                                    <ul class="product-tabs">
                                        <li id="product_tabs_description" class=" active first"><a href="javascript:void(0)">Product Description</a>
                                        </li>
                                        <li id="product_tabs_product_additional_data" class=""><a href="javascript:void(0)">Reviews</a>
                                        </li>
                                        <li id="product_tabs_product.tags" class="last"><a href="javascript:void(0)">Product Tags</a>
                                        </li>
                                    </ul>
                                    <div class="product-tabs-content" id="product_tabs_description_contents">
                                        <h2>Details</h2>
                                        <div class="std">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla. Donec a neque libero. Pellentesque aliquet, sem eget laoreet ultrices, ipsum metus feugiat sem, quis fermentum turpis eros eget velit. Donec ac tempus ante. Fusce ultricies massa massa. Fusce aliquam, purus eget sagittis vulputate, sapien libero hendrerit est, sed commodo augue nisi non neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempor, lorem et placerat vestibulum, metus nisi posuere nisl, in accumsan elit odio quis mi. Cras neque metus, consequat et blandit et, luctus a nunc. Etiam gravida vehicula tellus, in imperdiet ligula euismod eget. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nam erat mi, rutrum at sollicitudin rhoncus, ultricies posuere erat. Duis convallis, arcu nec aliquam consequat, purus felis vehicula felis, a dapibus enim lorem nec augue. Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Vivamus adipiscing nisl ut dolor dignissim semper. Nulla luctus malesuada tincidunt. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer enim purus, posuere at ultricies eu, placerat a felis. Suspendisse aliquet urna pretium eros convallis interdum. Quisque in arcu id dui vulputate mollis eget non arcu. Aenean et nulla purus. Mauris vel tellus non nunc mattis lobortis.</div>
                                    </div>
                                    <div class="product-tabs-content" id="product_tabs_product_additional_data_contents" style="display: none;">
                                        <div class="box-collateral box-reviews row" id="customer-reviews">
                                            <div class="ma-review-col1 col-xs-12 col-sm-6">
                                                <h2>Customer Reviews</h2>
                                                <dl>
                                                </dl>
                                            </div>
                                            <div class="ma-review-col2 col-xs-12 col-sm-6">
                                                <div class="form-add">
                                                    <h2>Write Your Own Review</h2>
                                                    <form action="" method="post" id="review-form">
                                                        <input name="form_key" type="hidden" value="21G5GuOBqDvzTqnj">
                                                        <fieldset>
                                                            <h3>You're reviewing: <span>Voluptas nulla</span></h3>
                                                            <ul class="form-list">
                                                                <li>
                                                                    <label for="nickname_field" class="required"><em>*</em>Nickname</label>
                                                                    <div class="input-box">
                                                                        <input type="text" name="nickname" id="nickname_field" class="input-text required-entry" value="">
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <label for="summary_field" class="required"><em>*</em>Summary of Your Review</label>
                                                                    <div class="input-box">
                                                                        <input type="text" name="title" id="summary_field" class="input-text required-entry" value="">
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <label for="review_field" class="required"><em>*</em>Review</label>
                                                                    <div class="input-box">
                                                                        <textarea name="detail" id="review_field" cols="5" rows="3" class="required-entry"></textarea>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </fieldset>
                                                        <div class="buttons-set">
                                                            <button type="submit" title="Submit Review" class="button"><span><span>Submit Review</span></span>
                                                            </button>
                                                        </div>
                                                    </form>
                                                    <script type="text/javascript">
                                                        //<![CDATA[
                                                        var dataForm = new VarienForm('review-form');
                                                        Validation.addAllThese(
                                                            [
                                                                ['validate-rating', 'Please select one of each of the ratings above',
                                                                    function(v) {
                                                                        var trs = $('product-review-table').select('tr');
                                                                        var inputs;
                                                                        var error = 1;

                                                                        for (var j = 0; j < trs.length; j++) {
                                                                            var tr = trs[j];
                                                                            if (j > 0) {
                                                                                inputs = tr.select('input');

                                                                                for (i in inputs) {
                                                                                    if (inputs[i].checked == true) {
                                                                                        error = 0;
                                                                                    }
                                                                                }

                                                                                if (error == 1) {
                                                                                    return false;
                                                                                } else {
                                                                                    error = 1;
                                                                                }
                                                                            }
                                                                        }
                                                                        return true;
                                                                    }
                                                                ]
                                                            ]
                                                        );
                                                        //]]>
                                                    </script>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-tabs-content" id="product_tabs_product.tags_contents" style="display: none;">
                                        <div class="box-collateral box-tags">
                                            <h2>Product Tags</h2>
                                            <form id="addTagForm" action="" method="get">
                                                <div class="form-add">
                                                    <label for="productTagName">Add Your Tags:</label>
                                                    <div class="input-box">
                                                        <input type="text" class="input-text required-entry" name="productTagName" id="productTagName">
                                                    </div>
                                                    <button type="button" title="Add Tags" class="button" onclick="submitTagForm()">
									                            <span>
									                    <span>Add Tags</span>
									                            </span>
                                                    </button>
                                                </div>
                                            </form>
                                            <p class="note">Use spaces to separate tags. Use single quotes (') for phrases.</p>
                                            <script type="text/javascript">
                                                //<![CDATA[
                                                var addTagFormJs = new VarienForm('addTagForm');

                                                function submitTagForm() {
                                                    if (addTagFormJs.validator.validate()) {
                                                        addTagFormJs.form.submit();
                                                    }
                                                }
                                                //]]>
                                            </script>
                                        </div>
                                    </div>
                                    <script type="text/javascript">
                                        //<![CDATA[
                                        Varien.Tabs = Class.create();
                                        Varien.Tabs.prototype = {
                                            initialize: function(selector) {
                                                var self = this;
                                                $$(selector + ' a').each(this.initTab.bind(this));
                                            },

                                            initTab: function(el) {
                                                el.href = 'javascript:void(0)';
                                                if ($(el.parentNode).hasClassName('active')) {
                                                    this.showContent(el);
                                                }
                                                el.observe('click', this.showContent.bind(this, el));
                                            },

                                            showContent: function(a) {
                                                var li = $(a.parentNode),
                                                    ul = $(li.parentNode);
                                                ul.select('li').each(function(el) {
                                                    var contents = $(el.id + '_contents');
                                                    if (el == li) {
                                                        el.addClassName('active');
                                                        contents.show();
                                                    } else {
                                                        el.removeClassName('active');
                                                        contents.hide();
                                                    }
                                                });
                                            }
                                        }
                                        new Varien.Tabs('.product-tabs');
                                        //]]>
                                    </script>
                                </div>
                            </div>
                        </div>
                        <?php
//                        the_content();
//                        get_sidebar('product');
//                        get_template_part( 'templates/products/list' );
                        ?>
                    <?php
                    endwhile; // End the loop.
                    ?>
                    <?php get_sidebar('product-related'); ?>

                </div>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();
?>