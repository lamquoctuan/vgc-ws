<?php
$nonce = wp_create_nonce('form_login');
?>
<div class="account-login">
    <div class="page-title">
        <h1>Login or Create an Account</h1>
    </div>
    <form action="" method="post" id="form_login">
        <input name="form_key" type="hidden" value="<?php echo $nonce; ?>">

        <div class="col2-set">
            <div class="col-1 new-users">
                <div class="content">
                    <h2>New Customers</h2>

                    <p>By creating an account with our store, you will be able to move through the checkout process
                        faster, store multiple shipping addresses, view and track your orders in your account and
                        more.</p>
                </div>
            </div>
            <div class="col-2 registered-users">
                <div class="content">
                    <h2>Registered Customers</h2>

                    <p>If you have an account with us, please log in.</p>
                    <ul class="form-list">
                        <li>
                            <label for="email" class="required"><em>*</em>Email Address</label>

                            <div class="input-box">
                                <input type="text" name="lead[email]" value="" id="email"
                                       class="input-text" title="Email Address">
                            </div>
                        </li>
                        <li>
                            <label for="pass" class="required"><em>*</em>Password</label>

                            <div class="input-box">
                                <input type="password" name="lead[password]"
                                       class="input-text" id="pass" title="Password">
                            </div>
                        </li>
                    </ul>
                    <p class="required">* Required Fields</p>
                </div>
            </div>
        </div>
    </form>
    <div class="col2-set">
        <div class="col-1 new-users">
            <div class="buttons-set">
                <button type="button" title="Create an Account" class="button"
                        onclick="window.location='<?php echo site_url('/account/register/'); ?>'"><span><span>Create an Account</span></span>
                </button>
            </div>
        </div>
        <div class="col-2 registered-users">
            <div class="buttons-set">
                <a href="<?php echo site_url('/account/forgot');?>" class="f-left">Forgot Your Password?</a>
                <button type="button" class="button" title="Login" id="btn_form_login" onclick="return false;">
                    <span><span>Login</span></span>
                </button>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    var rules = {
        'lead[email]': ['email'],
        'lead[password]': ['required', 'password']
    };
    var frmLogin = new VGC.Form('form_login', rules);
</script>