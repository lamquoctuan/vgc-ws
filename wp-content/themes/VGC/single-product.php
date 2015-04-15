<?php
get_header(); ?>
    <div class="ma-main-container col2-right-layout">
        <div class="container">
            <div class="container-inner">
                <div class="main">
                    <div class="row">
                        <?php
                        // Start the loop.
                        while (have_posts()) : the_post();
                            ?>
                            <div class="col-main col-xs-12 col-sm-9">
                                <div class="breadcrumbs">
                        <?php $term = getTerm(); ?>
                                    <ul>
                                        <li class="home">
                                            <a href="/" title="Go to Home Page">Home</a>
                                            <span>/</span>
                                        </li>
                                        <li class="category3">
                                            <a href="<?php echo esc_url($term->link); ?>"
                                               title=""><?php echo $term->name; ?></a>
                                            <span>/</span>
                                        </li>
                                        <li class="product">
                                            <strong><?php the_title(); ?></strong>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-view">
                                    <div class="product-essential">
                                        <form action="" method="post">
                                            <div class="row">
                                                <div class="product-img-box col-sm-5 col-md-5 col-sms-4 col-smb-12">
                                                    <?php get_template_part('templates/products/detail', 'images'); ?>
                                                    <?php get_template_part('templates/products/detail', 'social'); ?>
                                                </div>

                                                <div class="product-shop col-sm-7 col-md-87 col-sms-8 col-smb-12">
                                                    <?php get_template_part('templates/products/detail'); ?>
                                                </div>
                                            </div>
                                            <div class="clearer"></div>
                                            <div class="no-display">
                                                <input type="hidden" name="product" value="41">
                                                <input type="hidden" name="related_product" id="related-products-field"
                                                       value="">
                                            </div>
                                        </form>
                                        <!--<script type="text/javascript">
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
                                        </script>-->
                                    </div>

                                    <?php get_template_part('templates/products/detail', 'tabs'); ?>
                                </div>
                            </div>
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