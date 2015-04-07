<?php
/**
 * Created by PhpStorm.
 * User: tuanlam
 * Date: 4/4/15
 * Time: 8:24 PM
 */

namespace app\widgets;


use WP_Widget;

class MyAwesomeWidget extends WP_Widget
{

    const TEXTDOMAIN = 'widget_textdomain';

    public function __construct() {

        parent::__construct(

            'widget-name-id',
            __( 'Widget Name', self::TEXTDOMAIN ),
            array(
                'classname'   =>    __CLASS__,
                'description' =>    __( 'Short description.', self::TEXTDOMAIN )
            )
        );

        $admin_style = array(
            array( 'handle' => 'somehandle', 'src' => 'path/to/source' ),
            array( 'handle' => 'someotherhandle', 'src' => 'path/to/source' ),
        );

        $admin_scripts = array(
            array( 'handle' => 'scrpthandle', 'src' => 'path/to/source', 'deps' => array( 'jquery') ),
        );

        $front_styles = array(
            array( 'handle' => 'frontstyle', 'src' => 'path/to/src' ),
        );

        new \app\widgets\Setup( __CLASS__, $admin_style, $admin_scripts, $front_styles );
    }

    public function widget( $instance, $args ) {}

    public function update( $new_instance, $old_instance ) {}

    public function form( $instance ) {}

}