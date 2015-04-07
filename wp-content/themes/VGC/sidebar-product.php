<?php
if ( has_nav_menu( 'left-side' ) || is_active_sidebar( 'sidebar-product' )  ) : ?>
<div class="col-left sidebar col-xs-12 col-sm-3">
    <?php if ( has_nav_menu( 'left-side' ) ) :
        get_template_part( 'templates/menus/left', 'side' );?>
    <?php endif; ?>

    <?php if ( is_active_sidebar( 'sidebar-product' ) ) : ?>
        <?php dynamic_sidebar( 'sidebar-product' ); ?>
    <?php endif; ?>


    <div class="block block-layered-nav">
        <div class="block-title">
            <strong><span>Shop By</span></strong>
        </div>
        <div class="block-content">
            <p class="block-subtitle">Shopping Options</p>
            <dl class="narrow-by-list">
                <dt class="odd">Selection</dt>
                <dd class="odd">
                    <ol>
                        <li><a href="">2015 collection (2)</a></li>
                        <li><a href="">Bangle (34)</a></li>
                        <li><a href="">Bangles and cuffs (50)</a></li>
                        <li><a href="">Bestsellers (46)</a></li>
                        <li><a href="">Bracelets/Necklaces (14)</a></li>
                        <li><a href="">Classic (52)</a></li>
                        <li><a href="">Sets (1)</a></li>
                    </ol>
                </dd>
                <dt class="even">Plating</dt>
                <dd class="even">
                    <ol>
                        <li><a href="">Gold-plated (9)</a></li>
                        <li><a href="">Rhodium-plated (25)</a></li>
                    </ol>
                </dd>
                <dt class="odd">Price</dt>
                <dd class="odd">
                    <p>
                        <input type="text" disabled="disabled" id="amount" style="">
                    </p>
                    <div id="slider-range" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" aria-disabled="false">
                        <div class="ui-slider-range ui-widget-header ui-corner-all" style="left: 0%; width: 100%;"></div>
                        <a class="ui-slider-handle ui-state-default ui-corner-all first_item" href="#" style="left: 0%;"></a>
                        <a class="ui-slider-handle ui-state-default ui-corner-all last_item" href="#" style="left: 100%;"></a>
                    </div>
                    <div id="search" style="margin:10px 10px 0px 10px;">
                        <input type="text" name="first_price" style="width:40px">--
                        <input type="text" name="last_price" style="width:40px">
                        <button class="button" type="button" name="search_price" id="search_price"><span><span>Search</span></span>
                        </button>
                    </div>

                </dd>
            </dl>
        </div>
    </div>
</div>
<?php
endif;
?>