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
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor.
                Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus
                mi, vulputate adipiscing cursus eu, suscipit id nulla. Donec a neque libero. Pellentesque aliquet, sem
                eget laoreet ultrices, ipsum metus feugiat sem, quis fermentum turpis eros eget velit. Donec ac tempus
                ante. Fusce ultricies massa massa. Fusce aliquam, purus eget sagittis vulputate, sapien libero hendrerit
                est, sed commodo augue nisi non neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed
                tempor, lorem et placerat vestibulum, metus nisi posuere nisl, in accumsan elit odio quis mi. Cras neque
                metus, consequat et blandit et, luctus a nunc. Etiam gravida vehicula tellus, in imperdiet ligula
                euismod eget. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis
                egestas. Nam erat mi, rutrum at sollicitudin rhoncus, ultricies posuere erat. Duis convallis, arcu nec
                aliquam consequat, purus felis vehicula felis, a dapibus enim lorem nec augue. Nunc facilisis sagittis
                ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc.
                Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend
                laoreet congue. Vivamus adipiscing nisl ut dolor dignissim semper. Nulla luctus malesuada tincidunt.
                Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer enim
                purus, posuere at ultricies eu, placerat a felis. Suspendisse aliquet urna pretium eros convallis
                interdum. Quisque in arcu id dui vulputate mollis eget non arcu. Aenean et nulla purus. Mauris vel
                tellus non nunc mattis lobortis.
            </div>
        </div>
        <div aria-labelledby="product-reviews-tab" id="product-reviews" class="product-tabs-content tab-pane fade"
             role="tabpanel">
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
            </div>
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