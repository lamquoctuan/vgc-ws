<?php
global $user;
$user->findOne($_SESSION['cus_id']);
$nonce = wp_create_nonce('form_address');
?>
<div class="my-account">
    <div class="page-title">
        <h1>Add New Address</h1>
    </div>
    <form action="" method="post" id="form_address">
        <div class="fieldset">
            <input name="form_key" type="hidden" value="<?php echo $nonce; ?>">

            <h2 class="legend">Contact Information</h2>
            <ul class="form-list">
                <li class="fields">
                    <div class="customer-name">
                        <div class="field name-firstname">
                            <label for="firstname" class="required"><em>*</em>First Name</label>

                            <div class="input-box">
                                <input type="text" id="firstname" name="lead[first_name]"
                                       value="<?php echo $user->first_name; ?>" title="First Name" maxlength="255"
                                       class="input-text">
                            </div>
                        </div>
                        <div class="field name-lastname">
                            <label for="lastname" class="required"><em>*</em>Last Name</label>

                            <div class="input-box">
                                <input type="text" id="lastname" name="lead[last_name]"
                                       value="<?php echo $user->last_name; ?>" title="Last Name" maxlength="255"
                                       class="input-text">
                            </div>
                        </div>
                    </div>
                </li>
                <li class="wide">
                    <label for="company">Company</label>

                    <div class="input-box">
                        <input type="text" name="lead[company]" id="company" title="Company"
                               value="<?php echo $user->company; ?>" class="input-text ">
                    </div>
                </li>
                <li class="fields">
                    <div class="field">
                        <label for="phone" class="required"><em>*</em>Phone Number</label>

                        <div class="input-box">
                            <input type="text" name="lead[phone]" value="<?php echo $user->phone; ?>" title="Phone Number"
                                   class="input-text" id="phone">
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="fieldset">
            <h2 class="legend">Address</h2>
            <ul class="form-list">
                <li class="wide">
                    <label for="street_1" class="required"><em>*</em>Street Address</label>

                    <div class="input-box">
                        <input type="text" name="address[street_1]" value="<?php echo $userAddress->street_1; ?>" title="Street Address" id="street_1"
                               class="input-text">
                    </div>
                </li>
                <li class="wide">
                    <div class="input-box">
                        <input type="text" name="address[street_2]" value="<?php echo $userAddress->street_2; ?>" title="Street Address 2" id="street_2"
                               class="input-text">
                    </div>
                </li>
                <li class="fields">
                    <div class="field">
                        <label for="city" class="required"><em>*</em>City</label>

                        <div class="input-box">
                            <input type="text" name="address[city]" value="<?php echo $userAddress->city; ?>" title="City" class="input-text" id="city">
                        </div>
                    </div>
                    <div class="field">
                        <label for="state" class="required"><em>*</em>State/Province</label>

                        <div class="input-box">
                            <input type="text" id="state" name="address[state]" value="<?php echo $userAddress->state; ?>" title="State/Province"
                                   class="input-text">
                        </div>
                    </div>
                </li>
                <li class="fields">
                    <div class="field">
                        <label for="zip" class="required"><em>*</em>Zip/Postal Code</label>

                        <div class="input-box">
                            <input type="text" name="address[zip]" value="<?php echo $userAddress->zip; ?>" title="Zip/Postal Code" id="zip"
                                   class="input-text">
                        </div>
                    </div>
                    <div class="field">
                        <label for="country" class="required"><em>*</em>Country</label>
                        <div class="input-box">
                            <input type="text" name="address[country]" value="<?php echo $userAddress->country; ?>" title="Country" id="country"
                                   class="input-text">
                        </div>
                    </div>
                </li>
                <li>
                    <input type="hidden" name="default_billing" value="1">
                </li>
            </ul>
        </div>
    </form>
    <div class="buttons-set">
        <p class="required">* Required Fields</p>

        <p class="back-link"><a href="<?php echo site_url('/account/address/'); ?>">
                <small>«</small>
                Back</a>
        </p>
        <button type="submit" title="Save Address" class="button" id="btn_form_address"><span><span>Save Address</span></span>
        </button>
    </div>
</div>
<script type="text/javascript">
    var rules = {
        'lead[email]': ['required', 'email']
    };
    var frmAddress = new VGC.Form('form_address', rules);
</script>