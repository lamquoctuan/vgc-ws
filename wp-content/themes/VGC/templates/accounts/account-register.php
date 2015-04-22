<?php
$nonce = wp_create_nonce('form_register');
?>
<div class="account-login">
    <div class="page-title mb30">
        <h1>Create an Account</h1>
    </div>
    <form action="" method="post" id="form_register">
        <input name="form_key" type="hidden" value="<?php echo $nonce; ?>">

        <div class="col2-set">
            <div class="col-1 registered-users">
                <div class="content" style="border-bottom: solid 1px #ddd;">
                    <h2>Personal Information</h2>
                    <ul class="form-list">
                        <li class="fields">
                            <div class="customer-name">
                                <div class="field name-firstname">
                                    <label for="firstname" class="required"><em>*</em>First Name</label>

                                    <div class="input-box">
                                        <input type="text" id="first_name" name="lead[first_name]" value=""
                                               title="First Name" maxlength="255" class="input-text">
                                    </div>
                                </div>
                                <div class="field name-lastname">
                                    <label for="last_name" class="required"><em>*</em>Last Name</label>

                                    <div class="input-box">
                                        <input type="text" id="last_name" name="lead[last_name]" value=""
                                               title="Last Name" maxlength="255" class="input-text">
                                    </div>
                                </div>
                                <div class="field">
                                    <label for="email_address" class="required"><em>*</em>Email Address</label>

                                    <div class="input-box">
                                        <input type="text" name="lead[email]" id="email_address" value=""
                                               title="Email Address" class="input-text">
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="control">
                            <div class="input-box">
                                <input type="checkbox" name="lead[subscribed]" title="Sign Up for Newsletter" value="1"
                                       id="is_subscribed" class="checkbox">
                            </div>
                            <label for="is_subscribed">Sign Up for Newsletter</label>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-2 registered-users">
                <div class="content" style="border-bottom: solid 1px #ddd;">
                    <h2>Login Information</h2>
                    <ul class="form-list">
                        <li class="fields">
                            <div class="field">
                                <label for="password" class="required"><em>*</em>Password</label>

                                <div class="input-box">
                                    <input type="password" name="lead[password]" id="password" title="Password"
                                           class="input-text validate-password">
                                </div>
                            </div>
                            <div class="field">
                                <label for="confirmation" class="required"><em>*</em>Confirm Password</label>

                                <div class="input-box">
                                    <input type="password" name="lead[confirmation]" title="Confirm Password"
                                           id="confirmation" class="input-text validate-cpassword">
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </form>
</div>
<div class="buttons-set">
    <p class="required">* Required Fields</p>

    <p class="back-link"><a href="<?php site_url('/account/login/'); ?>" class="back-link">
            <small>«</small>
            Back</a></p>
    <button type="submit" title="Submit" class="button" id="btn_form_register"><span><span>Submit</span></span></button>
</div>
<script type="text/javascript">
    var rules = {
        'lead[email]': ['email'],
        'lead[password]': ['required', 'password'],
        'lead[confirmation]': ['match']
    };
    var frmRegister = new VGC.Form('form_register', rules);
</script>