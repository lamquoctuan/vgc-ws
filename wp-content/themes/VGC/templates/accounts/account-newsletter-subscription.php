<?php
global $user;
$user->findOne($_SESSION['cus_id']);
$nonce = wp_create_nonce('form_subscribe');
?>
<div class="my-account">
    <div class="page-title">
        <h1>Newsletter Subscription</h1>
    </div>
    <form action="" method="post" id="form_subscribe">
        <div class="fieldset">
            <input name="form_key" type="hidden" value="<?php echo $nonce; ?>">

            <h2 class="legend">Newsletter Subscription</h2>
            <ul class="form-list">
                <li class="control">
                    <input type="hidden" name="lead[subscribed]" value="0"/>
                    <input type="checkbox" name="lead[subscribed]" id="subscription" value="1"
                           <?php echo ($user->subscribed == 1)?'checked="checked"':'';?>
                           title="General Subscription" class="checkbox">
                    <label for="subscription">General Subscription</label>
                </li>
            </ul>
        </div>
    </form>
    <div class="buttons-set">
        <p class="back-link"><a href="<?php echo site_url('/account/dashboard/'); ?>">
                <small>«</small>
                Back</a></p>
        <button type="submit" title="Save" class="button" id="btn_form_subscribe"><span><span>Save</span></span>
        </button>
    </div>
</div>
<script type="text/javascript">
    var rules = {};
    var frmSubscribe = new VGC.Form('form_subscribe', rules);
</script>