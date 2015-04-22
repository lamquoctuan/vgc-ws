<?php
/**
 * Created by PhpStorm.
 * User: tuanlam
 * Date: 4/4/15
 * Time: 8:37 PM
 */

namespace app\widgets;

use WP_Widget;

class ProductMenu extends WP_Widget
{

    const TEXTDOMAIN = 'vgc';

    public function __construct() {

        parent::__construct(

            'widget-product-menu',
            __( 'Product Menu', self::TEXTDOMAIN ),
            array(
                'classname'   =>    __CLASS__,
                'description' =>    __( 'Product menu used in left side menu.', self::TEXTDOMAIN )
            )
        );

        $admin_style = array(
//            array( 'handle' => 'somehandle', 'src' => 'path/to/source' ),
//            array( 'handle' => 'someotherhandle', 'src' => 'path/to/source' ),
        );

        $admin_scripts = array(
//            array( 'handle' => 'scrpthandle', 'src' => 'path/to/source', 'deps' => array( 'jquery') ),
        );

        $front_styles = array(
//            array( 'handle' => 'frontstyle', 'src' => 'path/to/src' ),
        );

        new \app\widgets\Setup( __CLASS__, $admin_style, $admin_scripts, $front_styles );
    }

    public function widget( $instance, $args ) {
        echo $args['before_widget'];
        if ( ! empty( $instance['title'] ) ) {
            echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ). $args['after_title'];
        }
        echo __( 'Hello, World!', 'text_domain' );
        echo $args['after_widget'];
    }

    public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';

        return $instance;
    }

    public function form( $instance ) {
        $title = ! empty( $instance['title'] ) ? $instance['title'] : __( 'New title', 'text_domain' );
        ?>
        <p>
            <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
        </p>
    <?php
    }

}