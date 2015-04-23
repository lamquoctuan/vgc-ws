<?php
global $user;
$user->findOne($_SESSION['cus_id']);
$nonce = wp_create_nonce('form_info');
?>
<div class="my-account">
    <div class="page-title">
        <h1>Edit Account Information</h1>
    </div>
    <form action="" method="post" id="form_info" autocomplete="off">
        <div class="fieldset">
            <input name="form_key" type="hidden" value="<?php echo $nonce;?>">
            <h2 class="legend">Account Information</h2>
            <ul class="form-list">
                <li class="fields">
                    <div class="customer-name">
                        <div class="field name-firstname">
                            <label for="firstname" class="required"><em>*</em>First Name</label>
                            <div class="input-box">
                                <input type="text" id="firstname" name="lead[first_name]" value="<?php echo $user->first_name;?>" title="First Name" maxlength="255" class="input-text required-entry">
                            </div>
                        </div>
                        <div class="field name-lastname">
                            <label for="lastname" class="required"><em>*</em>Last Name</label>
                            <div class="input-box">
                                <input type="text" id="lastname" name="lead[last_name]" value="<?php echo $user->last_name;?>" title="Last Name" maxlength="255" class="input-text required-entry">
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <label for="email" class="required"><em>*</em>Email Address</label>
                    <div class="input-box">
                        <input type="text" name="lead[email]" id="email" value="<?php echo $user->email;?>" title="Email Address" class="input-text required-entry validate-email">
                    </div>
                </li>
                <li class="control">
                    <input type="checkbox" name="change_password" id="change_password" value="1" onclick="setPasswordForm(this.checked)" title="Change Password" class="checkbox">
                    <label for="change_password">Change Password</label>
                </li>
            </ul>
        </div>
        <div class="fieldset" style="display:none;">
            <h2 class="legend">Change Password</h2>
            <ul class="form-list">
                <li>
                    <label for="current_password" class="required"><em>*</em>Current Password</label>
                    <div class="input-box">
                        <!-- This is a dummy hidden field to trick firefox from auto filling the password -->
                        <input type="text" class="input-text no-display" name="dummy" id="dummy">
                        <input type="password" title="Current Password" class="input-text" name="lead[cur_password]" id="current_password">
                    </div>
                </li>
                <li class="fields">
                    <div class="field">
                        <label for="password" class="required"><em>*</em>New Password</label>
                        <div class="input-box">
                            <input type="password" title="New Password" class="input-text" name="lead[new_password]" id="password">
                        </div>
                    </div>
                    <div class="field">
                        <label for="confirmation" class="required"><em>*</em>Confirm New Password</label>
                        <div class="input-box">
                            <input type="password" title="Confirm New Password" class="input-text" name="lead[confirmation]" id="confirmation">
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </form>
        <div class="buttons-set">
            <p class="required">* Required Fields</p>
            <p class="back-link"><a href="<?php site_url('account/dashboard/');?>"><small>« </small>Back</a>
            </p>
            <button type="button" title="Save" class="button" id="btn_form_info"><span><span>Save</span></span>
            </button>
        </div>

    <script type="text/javascript">
//        <![CDATA[
        var frmRegister = new VGC.Form('form_info');
        function setPasswordForm(arg){
            var rules = {
                'lead[email]': ['email']
            };

            if(arg){
                $acc('#current_password').closest('.fieldset').show();
                rules['lead[cur_password]'] = ['required'];
                rules['lead[new_password]'] = ['required', 'password'];
                rules['lead[confirmation]'] = ['match'];
            }else{
                $acc('#current_password').closest('.fieldset').hide();
            }
            frmRegister = new VGC.Form('form_info', rules);
        }
//        ]]>


    </script>
</div>