<?php
/**
 * Created by PhpStorm.
 * User: tuanlam
 * Date: 3/20/15
 * Time: 7:57 PM
 */
?>
    <div class="footer-static-container">
        <div class="container">
            <div class="footer-static row">
                <div class="f-col f-col4 col-sm-6 col-md-3 col-sms-6 col-smb-12">
                    <div class="footer-static-title f-title">
                        <h3>Resources</h3>
                    </div>
                    <div class="footer-static-content row-fluid">
                        <ul>
                            <li class="first"><a href="">Events</a></li>
                            <li><a href="">Blog</a></li>
                            <li class="last"><a href="">Specials</a></li>
                        </ul>
                    </div>
                </div>
                <div class="f-col f-col4 col-sm-6 col-md-3 col-sms-6 col-smb-12">
                    <div class="footer-static-title f-title">
                        <h3>Account</h3>
                    </div>
                    <div class="footer-static-content row-fluid">
                        <ul>
                            <li class="first"><a href="">Account</a></li>
                            <li><a href="">Wish List</a></li>
                            <li class="last"><a href="">Cart(0)</a></li>
                        </ul>
                    </div>
                </div>
                <div class="f-col f-col4 col-sm-6 col-md-3 col-sms-6 col-smb-12">
                    <div class="footer-static-title f-title">
                        <h3>About Us</h3>
                    </div>
                    <div class="footer-static-content">
                        <div class="f-adress">
                            <p>3515 Kingsway, Vancouver, BC V5R 5L8</p>
                        </div>
                        <div class="f-phone">
                            <p>Tel: (604) 558-2026</p>
                        </div>
                        <div class="f-email">
                            <p>E-mail: info@vancouvercashforgold.com</p>
                        </div>
                    </div>
                </div>
                <div class="f-col f-col4 col-sm-6 col-md-3 col-sms-6 col-smb-12">
                    <div class="footer-static-title f-title">
                        <h3>Follow Us</h3>
                    </div>
                    <div class="footer-static-content">
                        <div class="f-social">
                            <a href=""><img src="<?php echo TEMP_URI;?>/images/icon-tw.png" /></a>
                            <a href=""><img src="<?php echo TEMP_URI;?>/images/icon-lk.png" /></a>
                            <a href=""><img src="<?php echo TEMP_URI;?>/images/icon-fb.png" /></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="ma-footer-container">
        <div class="container">
            <div class="footer">
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <address>Copyright &copy; 2015 <a href="<?php echo esc_url( __( site_url(), 'vgc' ) ); ?>"><?php printf( __( '%s', 'vgc' ), bloginfo('name') ); ?></a>. All rights Reserved.</address>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <div class="box-footer">
                            <div class="f-images">
                                <img src="<?php echo TEMP_URI;?>/images/paypal.png" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- .site -->

<?php wp_footer(); ?>

</body>
</html>