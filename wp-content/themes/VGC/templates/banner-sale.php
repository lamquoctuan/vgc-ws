<div class="ma-banner8-container">
    <div class="flexslider">
        <div class="ma-loading" style="display: none;"></div>
        <script type="text/javascript">
            $fsd(window).load(function () {
                $fsd('.ma-banner8-container .flexslider').flexslider({
                    slideshow: true,
                    animation: "slide",
                    slideshowSpeed: 3000,
                    animationSpeed: 500,
                    directionNav: false,
                    start: function (slider) {
                        $fsd('.ma-loading').css("display", "none");
                    },
                    before: function () {
                        $fsd('.banner8-title, .banner8-des').css("left", "-550px");
                        $fsd('.banner8-readmore').css("left", "-1500px");
                    },
                    after: function () {
                        $fsd('.banner8-title, .banner8-des, .banner8-readmore').css("left", "100px")
                    }
                });
            });
        </script>
        <div class="flex-viewport">
            <ul class="slides">
                <li><img src="<?php echo TEMP_URI;?>/assets/images/banner8/bg2-banner8.jpg" alt=""></li>
                <li><img src="<?php echo TEMP_URI;?>/assets/images/banner8/bg-banner8.jpg" alt=""></li>
                <li><img src="<?php echo TEMP_URI;?>/assets/images/banner8/bg1-banner8.jpg" alt=""></li>
            </ul>
        </div>
    </div>
</div>