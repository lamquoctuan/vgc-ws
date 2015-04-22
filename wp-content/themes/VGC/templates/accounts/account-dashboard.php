<?php
global $user;
?>
<div class="my-account">
    <div class="dashboard">
        <div class="page-title mb10">
            <h1>My Dashboard</h1>
        </div>
        <div class="welcome-msg">
            <p class="hello"><strong>Hello, <?php echo $user->first_name . ' ' . $user->last_name; ?>!</strong>
            </p>

            <p>From your My Account Dashboard you have the ability to view a snapshot of your
                recent account activity and update your account information. Select a link below
                to view or edit information.</p>
        </div>
        <div class="box-account box-info">
            <div class="box-head">
                <h2>Account Information</h2>
            </div>
            <div class="col2-set">
                <div class="col-1">
                    <div class="box">
                        <div class="box-title">
                            <h3>Contact Information</h3>
                            <a href="<?php echo site_url('/account/info/'); ?>">Edit</a>
                        </div>
                        <div class="box-content">
                            <p>
                                <?php echo $user->first_name . ' ' . $user->last_name; ?>
                                <br><?php echo $user->email; ?>
                                <br>
                                <a href="<?php echo site_url('/account/info/'); ?>">Change Password</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-2">
                    <div class="box">
                        <div class="box-title">
                            <h3>Newsletters</h3>
                            <a href="<?php echo site_url('/account/newsletter-subscription/'); ?>">Edit</a>
                        </div>
                        <div class="box-content">
                            <p>
                                You are currently not subscribed to any newsletter.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col2-set">
                <div class="box">
                    <div class="box-title">
                        <h3>Address Book</h3>
                        <a href="account-address.html">Manage Addresses</a>
                    </div>
                    <div class="box-content">
                        <div class="col-1">
                            <h4>Default Billing Address</h4>
                            <address>
                                You have not set a default billing address.<br>
                                <a href="<?php echo site_url('/account/address/'); ?>">Edit Address</a>
                            </address>
                        </div>
                        <div class="col-2">
                            <h4>Default Shipping Address</h4>
                            <address>
                                You have not set a default shipping address.<br>
                                <a href="<?php echo site_url('/account/address/'); ?>">Edit Address</a>
                            </address>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="box-account box-reviews">
            <div class="box-head">
                <h2>My Recent Reviews</h2>
                <a href="<?php echo site_url('/account/product-reviews/'); ?>">View All Reviews</a>
            </div>
            <ol id="my_recent_reviews">
                <li class="item last odd">
                    <span class="number">1</span>

                    <div class="details">
                        <h3 class="product-name"><a href="<?php echo site_url('/account/product-review/'); ?>">Jewelry
                                Name</a></h3>
                    </div>
                </li>
            </ol>
            <!--<script type="text/javascript">
                decorateList('my_recent_reviews');
            </script>-->
        </div>
    </div>
</div>