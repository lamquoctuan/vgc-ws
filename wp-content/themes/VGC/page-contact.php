<?php
/**
 * Template Name: About
 */
get_header();
if (have_posts()) {
    while (have_posts()) {
        the_post();
        //
        // Post Content here
        //
    } // end while
} // end if
?>
    <div class="main-container col1-layout">
        <div class="container">
            <div class="container-inner">
                <div class="main">
                    <div class="col-main">
                        <div class="account-login">
                            <div class="page-title mb30">
                                <?php the_title('<h1>','</h1>')?>
                            </div>
                            <form action="" method="post" id="contact-form">
                                <div class="col2-set">
                                    <div class="col-1 new-users">
                                        <div class="content" style="border-bottom: solid 1px #ddd;">
                                            <h2>Contact Info</h2>

                                            <div class="map">
                                                <iframe
                                                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2605.3300847240066!2d-123.02873989999999!3d49.232230699999995!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5486768de1f9f631%3A0x6a8a503abb839809!2s3515+Kingsway%2C+Vancouver%2C+BC+V5R+5L8%2C+Canada!5e0!3m2!1svi!2s!4v1427698910196"
                                                    frameborder="0" style="border:0">

                                                </iframe>
                                                <address class="address1">
                                                    <dl>
                                                        <dt class="text17">
                                                            3515 Kingsway, Vancouver, BC V5R 5L8
                                                        </dt>
                                                        <dd class="text18"><span>Telephone:</span>(604) 558-2026</dd>
                                                        <dd class="text18">E-mail: <a href="#">info@vancouvercashforgold.com</a>
                                                        </dd>
                                                    </dl>
                                                </address>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2 registered-users">
                                        <div class="content">
                                            <h2>Contact Form</h2>
                                            <ul class="form-list">
                                                <li class="fields">
                                                    <div class="field">
                                                        <label for="name" class="required"><em>*</em>Name</label>

                                                        <div class="input-box">
                                                            <input name="name" id="name" title="Name" value=""
                                                                   class="input-text required-entry" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="field">
                                                        <label for="email" class="required"><em>*</em>Email</label>

                                                        <div class="input-box">
                                                            <input name="email" id="email" title="Email" value=""
                                                                   class="input-text required-entry validate-email"
                                                                   type="text">
                                                        </div>
                                                    </div>
                                                    <div class="field">
                                                        <label for="telephone">Telephone</label>

                                                        <div class="input-box">
                                                            <input name="telephone" id="telephone" title="Telephone"
                                                                   value="" class="input-text" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="field">
                                                        <label for="comment" class="required"><em>*</em>Comment</label>

                                                        <div class="input-box">
                                                            <textarea name="comment" id="comment" title="Comment"
                                                                      class="required-entry input-text" cols="5"
                                                                      rows="3"></textarea>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="registered-users">
                                            <div class="buttons-set">
                                                <p class="required f-left">* Required Fields</p>
                                                <button type="submit" title="Search" class="button">
                                                    <span><span>Submit</span></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </form>
                            <script type="text/javascript">
                                //<![CDATA[
                                var dataForm = new VarienForm('contact-form', true);
                                //]]>
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>