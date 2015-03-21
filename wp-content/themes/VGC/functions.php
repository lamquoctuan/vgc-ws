<?php
/**
 * Created by PhpStorm.
 * User: tuanlam
 * Date: 3/20/15
 * Time: 9:58 AM
 */

if ( !defined('TEMP_DIR') )
    define('TEMP_DIR', get_template_directory_uri());

if ( ! function_exists( 'vgc_fonts_url' ) ) :
    /**
     * Register Google fonts for VGC.
     *
     * @since VGC 1.0
     *
     * @return string Google fonts URL for the theme.
     */
    function vgc_fonts_url() {
        $fonts_url = '';
        $fonts     = array();
        $subsets   = 'latin,latin-ext';

        /* translators: If there are characters in your language that are not supported by Titillium Web, translate this to 'off'. Do not translate into your own language. */
        if ( 'off' !== _x( 'on', 'Titillium Web font: on or off', 'vgc' ) ) {
            $fonts[] = 'Titillium Web:400,300,300italic,400italic,600,600italic,700,700italic';
        }

        /* translators: If there are characters in your language that are not supported by Noto Serif, translate this to 'off'. Do not translate into your own language. */
        if ( 'off' !== _x( 'on', 'Noto Serif font: on or off', 'vgc' ) ) {
            $fonts[] = 'Noto Serif:400italic,700italic,400,700';
        }

        /* translators: If there are characters in your language that are not supported by Inconsolata, translate this to 'off'. Do not translate into your own language. */
        if ( 'off' !== _x( 'on', 'Inconsolata font: on or off', 'vgc' ) ) {
            $fonts[] = 'Inconsolata:400,700';
        }

        /* translators: To add an additional character subset specific to your language, translate this to 'greek', 'cyrillic', 'devanagari' or 'vietnamese'. Do not translate into your own language. */
        $subset = _x( 'no-subset', 'Add new subset (greek, cyrillic, devanagari, vietnamese)', 'vgc' );

        if ( 'cyrillic' == $subset ) {
            $subsets .= ',cyrillic,cyrillic-ext';
        } elseif ( 'greek' == $subset ) {
            $subsets .= ',greek,greek-ext';
        } elseif ( 'devanagari' == $subset ) {
            $subsets .= ',devanagari';
        } elseif ( 'vietnamese' == $subset ) {
            $subsets .= ',vietnamese';
        }

        if ( $fonts ) {
            $fonts_url = add_query_arg( array(
                'family' => urlencode( implode( '|', $fonts ) ),
                'subset' => urlencode( $subsets ),
            ), '//fonts.googleapis.com/css' );
        }

        return $fonts_url;
    }
endif;

/**
 * Enqueue scripts and styles.
 *
 * @since VGC 1.0
 */
/*function vgc_scripts() {
    // Add custom fonts, used in the main stylesheet.
    wp_enqueue_style( 'vgc-fonts', vgc_fonts_url(), array(), null );

    // Add ..., used in the main stylesheet.
    // Load our main stylesheet.
    wp_enqueue_style( 'vgc-style', get_stylesheet_uri() );
    wp_enqueue_style( 'vgc-styles', get_template_directory_uri() . '/css/styles.css', array( 'vgc-style' ), '20150320' , 'all');

    wp_enqueue_script( 'vgc-js-js', TEMP_DIR . '/js/js.js', array(), '20150320', false );
}
add_action( 'wp_enqueue_scripts', 'vgc_scripts' );*/

function vgc_enqueue_style() {
    // Add custom fonts, used in the main stylesheet.
    wp_enqueue_style( 'vgc-fonts', vgc_fonts_url(), array(), null );

    // Add ..., used in the main stylesheet.
    // Load our main stylesheet.
    wp_enqueue_style( 'vgc-core', get_stylesheet_uri(), false );
    wp_enqueue_style( 'vgc-bootstrap', TEMP_DIR . '/css/bootstrap.css', array(), '20150320' , 'all');
    wp_enqueue_style( 'vgc-styles', TEMP_DIR . '/css/styles.css', array( 'vgc-core' ), '20150320' , 'all');
    wp_enqueue_style( 'vgc-style', TEMP_DIR . '/css/style.css', array( 'vgc-core' ), '20150320' , 'all');
//    wp_enqueue_style( 'vgc-bootstrap-select.min', TEMP_DIR . '/css/bootstrap-select.min.css', array(), '20150320' , 'all');
//    wp_enqueue_style( 'vgc-bootstrap-theme', TEMP_DIR . '/css/bootstrap-theme.css', array(), '20150320' , 'all');
//    wp_enqueue_style( 'vgc-widgets', TEMP_DIR . '/css/widgets.css', array(), '20150320' , 'all');
    wp_enqueue_style( 'vgc-custommenu', TEMP_DIR . '/css/custommenu.css', array(), '20150320' , 'all');
    wp_enqueue_style( 'vgc-effect', TEMP_DIR . '/css/effect.css', array(), '20150320' , 'all');
//    wp_enqueue_style( 'vgc-ma.onsaleslider', TEMP_DIR . '/css/ma.onsaleslider.css', array(), '20150320' , 'all');
    wp_enqueue_style( 'vgc-categorytabs', TEMP_DIR . '/css/categorytabs.css', array(), '20150320' , 'all');
//    wp_enqueue_style( 'vgc-categorytabsliders', TEMP_DIR . '/css/categorytabsliders.css', array(), '20150320' , 'all');
    wp_enqueue_style( 'vgc-searchbycategory', TEMP_DIR . '/css/searchbycategory.css', array(), '20150320' , 'all');
    wp_enqueue_style( 'vgc-ma.cltool', TEMP_DIR . '/css/ma.cltool.css', array(), '20150320' , 'all');
//    wp_enqueue_style( 'vgc-ma.upsellslider', TEMP_DIR . '/css/ma.upsellslider.css', array(), '20150320' , 'all');
    wp_enqueue_style( 'vgc-leftvmegamenu', TEMP_DIR . '/css/leftvmegamenu.css', array(), '20150320' , 'all');
    wp_enqueue_style( 'vgc-ma.banner8', TEMP_DIR . '/css/ma.banner8.css', array(), '20150320' , 'all');
    wp_enqueue_style( 'vgc-bannersequence', TEMP_DIR . '/css/bannersequence.css', array(), '20150320' , 'all');
//    wp_enqueue_style( 'vgc-ma.newslider', TEMP_DIR . '/css/ma.newslider.css', array(), '20150320' , 'all');
    wp_enqueue_style( 'vgc-ajax_cart_super', TEMP_DIR . '/css/ajax_cart_super.css', array(), '20150320' , 'all');
//    wp_enqueue_style( 'vgc-jquery-ui', TEMP_DIR . '/css/jquery-ui.css', array(), '20150320' , 'all');
//    wp_enqueue_style( 'vgc-jquery.fancybox', TEMP_DIR . '/css/jquery.fancybox.css', array(), '20150320' , 'all');
//    wp_enqueue_style( 'vgc-bestsellervertscroller', TEMP_DIR . '/css/bestsellervertscroller.css', array(), '20150320' , 'all');
//    wp_enqueue_style( 'vgc-ma.brandslider.css', TEMP_DIR . '/css/ma.brandslider.css', array(), '20150320' , 'all');
//    wp_enqueue_style( 'vgc-print.css', TEMP_DIR . '/css/print.css', array(), '20150320' , 'print');
}

function vgc_enqueue_script() {
    wp_enqueue_script( 'vgc-jquery-js', '//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js', array(), '20150320', false );
    wp_enqueue_script( 'vgc-bootstrap', TEMP_DIR . '/js/bootstrap.js', array(), '20150320', false );
    wp_enqueue_script( 'vgc-prototype-js', TEMP_DIR . '/js/prototype.js', array('vgc-jquery-js'), '20150320', false );
    wp_enqueue_script( 'vgc-validation-js', TEMP_DIR . '/js/validation.js', array(), '20150320', false );
    wp_enqueue_script( 'vgc-effects-js', TEMP_DIR . '/js/effects.js', array(), '20150320', false );
    wp_enqueue_script( 'vgc-controls-js', TEMP_DIR . '/js/controls.js', array('vgc-prototype-js','vgc-effects-js'), '20150320', false );
    wp_enqueue_script( 'vgc-js-js', TEMP_DIR . '/js/js.js', array('vgc-prototype-js', 'vgc-validation-js', 'vgc-controls-js'), '20150320', false );
    wp_enqueue_script( 'vgc-slide-js', TEMP_DIR . '/js/ma.jq.slide.js', array(), '20150320', false );
    wp_enqueue_script( 'vgc-flexslider-js', TEMP_DIR . '/js/ma.flexslider.js', array(), '20150320', false );
    wp_enqueue_script( 'vgc-sequence-js', TEMP_DIR . '/js/jquery.sequence-min.js', array('vgc-slide-js', 'vgc-flexslider-js'), '20150320', false );
    wp_enqueue_script( 'vgc-custommenu-js', TEMP_DIR . '/js/custommenu.js', array(), '20150320', false );
//    wp_enqueue_script( 'vgc-ccard-js', TEMP_DIR . '/js/ccard.js', array(), '20150320', false );
//    wp_enqueue_script( 'vgc-builder-js', TEMP_DIR . '/js/builder.js', array(), '20150320', false );
//    wp_enqueue_script( 'vgc-dragdrop-js', TEMP_DIR . '/js/dragdrop.js', array(), '20150320', false );
//    wp_enqueue_script( 'vgc-slider-js', TEMP_DIR . '/js/slider.js', array(), '20150320', false );
//    wp_enqueue_script( 'vgc-form-js', TEMP_DIR . '/js/form.js', array(), '20150320', false );
//    wp_enqueue_script( 'vgc-menu-js', TEMP_DIR . '/js/menu.js', array(), '20150320', false );
//    wp_enqueue_script( 'vgc-translate-js', TEMP_DIR . '/js/translate.js', array(), '20150320', false );
//    wp_enqueue_script( 'vgc-cookies-js', TEMP_DIR . '/js/cookies.js', array(), '20150320', false );
//    wp_enqueue_script( 'vgc-bootstrap-select.min-js', TEMP_DIR . '/js/bootstrap-select.min.js', array(), '20150320', false );
//    wp_enqueue_script( 'vgc-jquery-ui-js', TEMP_DIR . '/js/jquery-ui.js', array(), '20150320', false );
//    wp_enqueue_script( 'vgc-bootstrap-tooltip-js', TEMP_DIR . '/js/bootstrap-tooltip.js', array(), '20150320', false );
//    wp_enqueue_script( 'vgc-ma.mobilemenu-js', TEMP_DIR . '/js/ma.mobilemenu.js', array(), '20150320', false );
//    wp_enqueue_script( 'vgc-ma.menu.effect-js', TEMP_DIR . '/js/ma.menu.effect.js', array(), '20150320', false );
//    wp_enqueue_script( 'vgc-backtotop-js', TEMP_DIR . '/js/backtotop.js', array(), '20150320', false );
//    wp_enqueue_script( 'vgc-jquery.fancybox-js', TEMP_DIR . '/js/jquery.fancybox.js', array(), '20150320', false );
//    wp_enqueue_script( 'vgc-likebox-js', TEMP_DIR . '/js/likebox.js', array(), '20150320', false );
//    wp_enqueue_script( 'vgc-ma.script.vert-js', TEMP_DIR . '/js/ma.script.vert.js', array(), '20150320', false );
//    wp_enqueue_script( 'vgc-ma.bxslider.min-js', TEMP_DIR . '/js/ma.bxslider.min.js', array(), '20150320', false );
//    wp_enqueue_script( 'vgc-colorpicker-js', TEMP_DIR . '/js/colorpicker.js', array(), '20150320', false );
//    wp_enqueue_script( 'vgc-jquery.cookie-js', TEMP_DIR . '/js/jquery.cookie.js', array(), '20150320', false );
//    wp_enqueue_script( 'vgc-ma.nivo.js-js', TEMP_DIR . '/js/ma.nivo.js.js', array(), '20150320', false );
}

add_action( 'wp_enqueue_scripts', 'vgc_enqueue_style' );
add_action( 'wp_enqueue_scripts', 'vgc_enqueue_script' );
