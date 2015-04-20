<div class="account-login">
    <div class="page-title mb30">
        <h1>Create an Account</h1>
    </div>
    <form action="" method="post" id="form-validate">
        <input name="form_key" type="hidden" value="1B8MLBgpQYLpayLe">
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
                                        <input type="text" id="firstname" name="firstname" value="" title="First Name" maxlength="255" class="input-text required-entry">
                                    </div>
                                </div>
                                <div class="field name-lastname">
                                    <label for="lastname" class="required"><em>*</em>Last Name</label>
                                    <div class="input-box">
                                        <input type="text" id="lastname" name="lastname" value="" title="Last Name" maxlength="255" class="input-text required-entry">
                                    </div>
                                </div>
                                <div class="field">
                                    <label for="email_address" class="required"><em>*</em>Email Address</label>
                                    <div class="input-box">
                                        <input type="text" name="email" id="email_address" value="" title="Email Address" class="input-text validate-email required-entry">
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="control">
                            <div class="input-box">
                                <input type="checkbox" name="is_subscribed" title="Sign Up for Newsletter" value="1" id="is_subscribed" class="checkbox">
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
                                    <input type="password" name="password" id="password" title="Password" class="input-text required-entry validate-password">
                                </div>
                            </div>
                            <div class="field">
                                <label for="confirmation" class="required"><em>*</em>Confirm Password</label>
                                <div class="input-box">
                                    <input type="password" name="confirmation" title="Confirm Password" id="confirmation" class="input-text required-entry validate-cpassword">
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
    <p class="back-link"><a href="login.html" class="back-link"><small>« </small>Back</a></p>
    <button type="submit" title="Search" class="button"><span><span>Submit</span></span></button>
</div>