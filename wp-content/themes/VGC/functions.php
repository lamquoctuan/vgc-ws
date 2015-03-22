<?php
/**
 * Created by PhpStorm.
 * User: tuanlam
 * Date: 3/20/15
 * Time: 9:58 AM
 */

if ( ! defined( 'TEMP_URI' ) )
    define( 'TEMP_URI' , get_template_directory_uri() );
if ( ! defined( 'TEMP_DIR' ) )
    define( 'TEMP_DIR' , get_template_directory() );

if ( ! function_exists( 'vgc_setup' ) ) :
/**
 * Make theme available for translation.
 */
function vgc_setup()
{
    /**
     * Add default posts and comments RSS feed links to head.
     */
    add_theme_support( 'automatic-feed-links' );

    /**
     * Let WordPress manage the document title.
     */
    add_theme_support( 'title-tag' );

    /**
     * Enable support for Post Thumbnails on posts and pages.
     */
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 825, 510, true );

    // This theme uses wp_nav_menu() in five locations.
    register_nav_menus( array(
        'top-nav-right' => __( 'Top Nav Right Menu',    'vgc' ),
        'left-side'     => __( 'Left Menu',             'vgc' ),
        'primary'       => __( 'Primary Menu',          'vgc' ),
        'social'        => __( 'Social Links Menu',     'vgc' ),
        'payment'        => __( 'Payment Menu',         'vgc' ),
    ) );

    /*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
    add_theme_support( 'html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
    ) );

    /*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
    add_theme_support( 'post-formats', array(
        'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
    ) );

    add_editor_style( array( 'css/editor-style.css', 'css/style.css', 'css/styles.css', vgc_fonts_url() ) );
}
endif; // vgc_setup
add_action( 'after_setup_theme', 'vgc_setup' );

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

if ( ! function_exists( 'vgc_enqueue_styles' ) ) :
    /**
     * Enqueue styles.
     *
     * @since VGC 1.0
     */
    function vgc_enqueue_styles() {
        // Add custom fonts, used in the main stylesheet.
        wp_enqueue_style( 'vgc-fonts', vgc_fonts_url(), array(), null );

        // Add ..., used in the main stylesheet.
        // Load our main stylesheet.
        wp_enqueue_style( 'vgc-core', get_stylesheet_uri(), false );
        wp_enqueue_style( 'vgc-bootstrap', TEMP_URI . '/css/bootstrap.css', array(), '20150320' , 'all');
        wp_enqueue_style( 'vgc-styles', TEMP_URI . '/css/styles.css', array( 'vgc-core' ), '20150320' , 'all');
        wp_enqueue_style( 'vgc-style', TEMP_URI . '/css/style.css', array( 'vgc-core' ), '20150320' , 'all');
        wp_enqueue_style( 'vgc-bootstrap-select.min', TEMP_URI . '/css/bootstrap-select.min.css', array(), '20150320' , 'all');
    //    wp_enqueue_style( 'vgc-bootstrap-theme', TEMP_URI . '/css/bootstrap-theme.css', array(), '20150320' , 'all');
    //    wp_enqueue_style( 'vgc-widgets', TEMP_URI . '/css/widgets.css', array(), '20150320' , 'all');
        wp_enqueue_style( 'vgc-custommenu', TEMP_URI . '/css/custommenu.css', array(), '20150320' , 'all');
        wp_enqueue_style( 'vgc-effect', TEMP_URI . '/css/effect.css', array(), '20150320' , 'all');
    //    wp_enqueue_style( 'vgc-ma.onsaleslider', TEMP_URI . '/css/ma.onsaleslider.css', array(), '20150320' , 'all');
        wp_enqueue_style( 'vgc-categorytabs', TEMP_URI . '/css/categorytabs.css', array(), '20150320' , 'all');
    //    wp_enqueue_style( 'vgc-categorytabsliders', TEMP_URI . '/css/categorytabsliders.css', array(), '20150320' , 'all');
        wp_enqueue_style( 'vgc-searchbycategory', TEMP_URI . '/css/searchbycategory.css', array(), '20150320' , 'all');
        wp_enqueue_style( 'vgc-ma.cltool', TEMP_URI . '/css/ma.cltool.css', array(), '20150320' , 'all');
    //    wp_enqueue_style( 'vgc-ma.upsellslider', TEMP_URI . '/css/ma.upsellslider.css', array(), '20150320' , 'all');
        wp_enqueue_style( 'vgc-leftvmegamenu', TEMP_URI . '/css/leftvmegamenu.css', array(), '20150320' , 'all');
        wp_enqueue_style( 'vgc-ma.banner8', TEMP_URI . '/css/ma.banner8.css', array(), '20150320' , 'all');
        wp_enqueue_style( 'vgc-bannersequence', TEMP_URI . '/css/bannersequence.css', array(), '20150320' , 'all');
    //    wp_enqueue_style( 'vgc-ma.newslider', TEMP_URI . '/css/ma.newslider.css', array(), '20150320' , 'all');
        wp_enqueue_style( 'vgc-ajax_cart_super', TEMP_URI . '/css/ajax_cart_super.css', array(), '20150320' , 'all');
    //    wp_enqueue_style( 'vgc-jquery-ui', TEMP_URI . '/css/jquery-ui.css', array(), '20150320' , 'all');
    //    wp_enqueue_style( 'vgc-jquery.fancybox', TEMP_URI . '/css/jquery.fancybox.css', array(), '20150320' , 'all');
    //    wp_enqueue_style( 'vgc-bestsellervertscroller', TEMP_URI . '/css/bestsellervertscroller.css', array(), '20150320' , 'all');
    //    wp_enqueue_style( 'vgc-ma.brandslider.css', TEMP_URI . '/css/ma.brandslider.css', array(), '20150320' , 'all');
    //    wp_enqueue_style( 'vgc-print.css', TEMP_URI . '/css/print.css', array(), '20150320' , 'print');
    }
endif;

if ( ! function_exists( 'vgc_enqueue_scripts' ) ) :
    /**
     * Enqueue scripts.
     *
     * @since VGC 1.0
     */
    function vgc_enqueue_scripts() {
        wp_enqueue_script( 'vgc-jquery-js', TEMP_URI . '/js/jquery/1.11.2/jquery.min.js', array(), '20150320', false );
        wp_enqueue_script( 'vgc-bootstrap', TEMP_URI . '/js/bootstrap.js', array('vgc-jquery-js'), '20150320', false );
        wp_enqueue_script( 'vgc-bootstrap-select.min-js', TEMP_URI . '/js/bootstrap-select.min.js', array('vgc-jquery-js'), '20150320', false );
        wp_enqueue_script( 'vgc-prototype-js', TEMP_URI . '/js/prototype.js', array('vgc-jquery-js'), '20150320', false );
        wp_enqueue_script( 'vgc-validation-js', TEMP_URI . '/js/validation.js', array(), '20150320', false );
        wp_enqueue_script( 'vgc-effects-js', TEMP_URI . '/js/effects.js', array(), '20150320', false );
        wp_enqueue_script( 'vgc-controls-js', TEMP_URI . '/js/controls.js', array('vgc-prototype-js','vgc-effects-js'), '20150320', false );
        wp_enqueue_script( 'vgc-js-js', TEMP_URI . '/js/js.js', array('vgc-prototype-js', 'vgc-validation-js', 'vgc-controls-js'), '20150320', false );
        wp_enqueue_script( 'vgc-slide-js', TEMP_URI . '/js/ma.jq.slide.js', array(), '20150320', false );
        wp_enqueue_script( 'vgc-flexslider-js', TEMP_URI . '/js/ma.flexslider.js', array(), '20150320', false );
        wp_enqueue_script( 'vgc-sequence-js', TEMP_URI . '/js/jquery.sequence-min.js', array('vgc-slide-js', 'vgc-flexslider-js'), '20150320', false );
        wp_enqueue_script( 'vgc-custommenu-js', TEMP_URI . '/js/custommenu.js', array(), '20150320', false );
        //    wp_enqueue_script( 'vgc-ccard-js', TEMP_URI . '/js/ccard.js', array(), '20150320', false );
        //    wp_enqueue_script( 'vgc-builder-js', TEMP_URI . '/js/builder.js', array(), '20150320', false );
        //    wp_enqueue_script( 'vgc-dragdrop-js', TEMP_URI . '/js/dragdrop.js', array(), '20150320', false );
        //    wp_enqueue_script( 'vgc-slider-js', TEMP_URI . '/js/slider.js', array(), '20150320', false );
        //    wp_enqueue_script( 'vgc-form-js', TEMP_URI . '/js/form.js', array(), '20150320', false );
        //    wp_enqueue_script( 'vgc-menu-js', TEMP_URI . '/js/menu.js', array(), '20150320', false );
        //    wp_enqueue_script( 'vgc-translate-js', TEMP_URI . '/js/translate.js', array(), '20150320', false );
        //    wp_enqueue_script( 'vgc-cookies-js', TEMP_URI . '/js/cookies.js', array(), '20150320', false );
    //    wp_enqueue_script( 'vgc-jquery-ui-js', TEMP_URI . '/js/jquery-ui.js', array(), '20150320', false );
    //    wp_enqueue_script( 'vgc-bootstrap-tooltip-js', TEMP_URI . '/js/bootstrap-tooltip.js', array(), '20150320', false );
        wp_enqueue_script( 'vgc-ma.mobilemenu-js', TEMP_URI . '/js/ma.mobilemenu.js', array(), '20150320', false );
    //    wp_enqueue_script( 'vgc-ma.menu.effect-js', TEMP_URI . '/js/ma.menu.effect.js', array(), '20150320', false );
    //    wp_enqueue_script( 'vgc-backtotop-js', TEMP_URI . '/js/backtotop.js', array(), '20150320', false );
    //    wp_enqueue_script( 'vgc-jquery.fancybox-js', TEMP_URI . '/js/jquery.fancybox.js', array(), '20150320', false );
    //    wp_enqueue_script( 'vgc-likebox-js', TEMP_URI . '/js/likebox.js', array(), '20150320', false );
    //    wp_enqueue_script( 'vgc-ma.script.vert-js', TEMP_URI . '/js/ma.script.vert.js', array(), '20150320', false );
    //    wp_enqueue_script( 'vgc-ma.bxslider.min-js', TEMP_URI . '/js/ma.bxslider.min.js', array(), '20150320', false );
    //    wp_enqueue_script( 'vgc-colorpicker-js', TEMP_URI . '/js/colorpicker.js', array(), '20150320', false );
    //    wp_enqueue_script( 'vgc-jquery.cookie-js', TEMP_URI . '/js/jquery.cookie.js', array(), '20150320', false );
    //    wp_enqueue_script( 'vgc-ma.nivo.js-js', TEMP_URI . '/js/ma.nivo.js.js', array(), '20150320', false );
    }
endif;

add_action( 'wp_enqueue_scripts', 'vgc_enqueue_styles' );
add_action( 'wp_enqueue_scripts', 'vgc_enqueue_scripts' );


/**
 * Add a `screen-reader-text` class to the search form's submit button.
 *
 **/

require TEMP_DIR . '/inc/customizer.php';
