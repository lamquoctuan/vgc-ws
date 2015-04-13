<div data-example-id="togglable-tabs" role="tabpanel" class="product-collateral">
    <ul role="tablist" class="product-tabs" id="myTab">
        <li class="active" role="presentation"><a aria-expanded="true" aria-controls="product-desc" data-toggle="tab"
                                                  role="tab" id="product-desc-tab" href="#product-desc">Product
                Description</a></li>
        <li role="presentation" class=""><a aria-controls="product-reviews" data-toggle="tab" id="product-reviews-tab"
                                            role="tab" href="#product-reviews" aria-expanded="false">Reviews</a></li>
        <li role="presentation" class=""><a aria-controls="product-tags" data-toggle="tab" id="product-tags-tab"
                                            role="tab" href="#product-tags" aria-expanded="false">Product Tags</a></li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div aria-labelledby="product-desc-tab" id="product-desc" class="product-tabs-content tab-pane fade active in"
             role="tabpanel">
            <h2>Details</h2>

            <div class="std">
                <?php the_content();?>
            </div>
        </div>
        <div aria-labelledby="product-reviews-tab" id="product-reviews" class="product-tabs-content tab-pane fade"
             role="tabpanel">
            <?php comments_template('/comments-product.php'); ?>
            <!--<div class="box-collateral box-reviews row" id="customer-reviews">
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
                                <h3>You're reviewing: <span><?php /*the_title();*/?></span></h3>
                                <ul class="form-list">
                                    <li>
                                        <label for="nickname_field" class="required"><em>*</em>Nickname</label>

                                        <div class="input-box">
                                            <input type="text" name="nickname" id="nickname_field"
                                                   class="input-text required-entry" value="">
                                        </div>
                                    </li>
                                    <li>
                                        <label for="summary_field" class="required"><em>*</em>Summary of Your
                                            Review</label>

                                        <div class="input-box">
                                            <input type="text" name="title" id="summary_field"
                                                   class="input-text required-entry" value="">
                                        </div>
                                    </li>
                                    <li>
                                        <label for="review_field" class="required"><em>*</em>Review</label>

                                        <div class="input-box">
                                            <textarea name="detail" id="review_field" cols="5" rows="3"
                                                      class="required-entry"></textarea>
                                        </div>
                                    </li>
                                </ul>
                            </fieldset>
                            <div class="buttons-set">
                                <button type="submit" title="Submit Review" class="button">
                                    <span><span>Submit Review</span></span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>-->
        </div>
        <div aria-labelledby="product-tags-tab" id="product-tags" class="product-tabs-content tab-pane fade"
             role="tabpanel">
            <div class="box-collateral box-tags">
                <h2>Product Tags</h2>

                <form id="addTagForm" action="" method="get">
                    <div class="form-add">
                        <label for="productTagName">Add Your Tags:</label>

                        <div class="input-box">
                            <input type="text" class="input-text required-entry" name="productTagName"
                                   id="productTagName">
                        </div>
                        <button type="button" title="Add Tags" class="button" onclick="submitTagForm()">
                            <span>
                                <span>Add Tags</span>
                                                                    </span>
                        </button>
                    </div>
                </form>
                <p class="note">Use spaces to separate tags. Use single quotes (') for phrases.</p>
            </div>
        </div>
    </div>
</div>