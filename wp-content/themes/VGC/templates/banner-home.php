<div class="sequence-theme">
    <div id="sequence">
        <ul class="controls">
            <li><a class="sequence-prev">Prev</a></li>
            <li><a class="sequence-next">Next</a></li>
        </ul>
        <ul class="sequence-canvas">
            <li class="animate-in" style="display: list-item; opacity: 1; z-index: 3;">
                <h2 class="title" style="">Special Moments</h2>

                <h3 class="subtitle1" style="">LATEST SPRING SUMMER COLLECTION 2014</h3>

                <div class="intro subtitle" style="">
                    Whether it opens up to reveal a solitaire engagement ring or keeps a wedding
                    ring safe...
                </div>

                <img class="slider-bg" src="<?php echo TEMP_URI; ?>/assets/images/bg1.jpg"
                     alt="Image" style="">

                <div class="link subtitle1" style="">
                    <a href="#">Shop now</a>
                </div>
            </li>
            <li class="animate-out" style="display: list-item; opacity: 1; z-index: 1;">
                <h2 class="title-slider2" style="">Jewelry</h2>

                <h3 class="subtitle-slider2" style="">Seeing the quality in you</h3>

                <div class="intro-slider2 subtitle-slider2" style="">
                    Passion and Success
                </div>

                <img class="slider-bg" src="<?php echo TEMP_URI; ?>/assets/images/bg2.jpg"
                     alt="Image" style="">

                <div class="link-slider2 subtitle-slider2" style="">
                    <a href="#">Shop now</a>
                </div>
            </li>
            <li class="animate-out" style="display: list-item; opacity: 1; z-index: 1;">
                <h2 class="title-slider3" style="">Platinum</h2>

                <h3 class="subtitle-slider3" style="">The moment of a lifetime</h3>

                <div class="intro-slider3 subtitle-slider3" style="">
                    Once in awhile, Right in the middle of an ordinary life, Love gives us a
                    fairy tale.
                </div>

                <img class="slider-bg" src="<?php echo TEMP_URI; ?>/assets/images/bg3.jpg"
                     alt="Image" style="">

                <div class="link-slider3 subtitle-slider3" style="">
                    <a href="#">Shop now</a>
                </div>
            </li>
        </ul>
    </div>
</div>
<script type="text/javascript">

    //<![CDATA[
    $seq(document).ready(function () {
        //$jqstatus = $jq(".status");
        var options = {
            autoPlay: true,
            autoPlayDelay: 3000,
            pauseOnHover: false,
            hidePreloaderDelay: 500,
            nextButton: true,
            prevButton: true,
            pauseButton: true,
            preloader: true,
            pagination: true,
            hidePreloaderUsingCSS: false,
            animateStartingFrameIn: true,
            navigationSkipThreshold: 750,
            preventDelayWhenReversingAnimations: true,
            customKeyEvents: {
                80: "pause"
            }
        };

        var sequence = $seq("#sequence").sequence(options).data("sequence");


    });
    //]]>

</script>