<?php
function FG_load_widget() {
    register_widget( 'FG_widget' );
}
add_action( 'widgets_init', 'FG_load_widget' );

// Creating the widget
class FG_widget extends WP_Widget {
    function __construct() {
        parent::__construct('FG_widget',__('FG Social Icons', 'FG_widget_domain'),array( 'description' => __( 'Sample widget based on FGeginner Tutorial', 'FG_widget_domain' ), ));
    }
    
    public function widget( $args, $instance ) {
        $title = apply_filters( 'widget_title', $instance['title'] );
        $facebook = $instance['FG_facebook'];
        $twitter = $instance['FG_twitter'];
        $instagram = $instance['FG_instagram'];
        echo $args['before_widget'];

        if ( ! empty( $title ) ){
        echo $args['before_title'] . $title . $args['after_title'];
        }

        echo "<div class='social-container'>";
        if( ! empty($facebook)){
            echo "<a href='".$facebook."' target='_blank'><div class='item'><img src='".get_template_directory_uri().'/img/icon-facebook.png'."' alt=''></div></a>";
        }  
        if( ! empty($twitter)){
            echo "<a href='".$twitter."' target='_blank'><div class='item'><img src='".get_template_directory_uri().'/img/icon-twitter.png'."' alt=''></div></a>";
        }  
        if( ! empty($instagram)){
            echo "<a href='".$instagram."' target='_blank'><div class='item'><img src='".get_template_directory_uri().'/img/icon-instagram.png'."' alt=''></div></a>";
        }  
        echo "</div>";

        echo $args['after_widget'];
    }


public function form( $instance ) {
    if ( isset( $instance[ 'title' ] ) ) {
        $title = $instance[ 'title' ];
    }else {
        $title = __( 'New title', 'FG_widget_domain' );
    }

    if ( isset( $instance[ 'FG_facebook' ] ) ) {
        $facebook = $instance[ 'FG_facebook' ];
    }else{
        $facebook = __( '#', 'FG_widget_domain' );
    }

    if ( isset( $instance[ 'FG_instagram' ] ) ) {
        $instagram = $instance[ 'FG_instagram' ];
    }else{
        $instagram = __( '#', 'FG_widget_domain' );
    }

    if ( isset( $instance[ 'FG_twitter' ] ) ) {
        $twitter = $instance[ 'FG_twitter' ];
    }else{
        $twitter = __( '#', 'FG_widget_domain' );
    }
// Widget admin form
?>
<p>
    <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
    <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>"
        name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
</p>

<ul>
    <li>
        <label for="<?php echo $this->get_field_id('FG_facebook');?>"><?php _e( 'Facebook:' ); ?></label> </br>
        <input type="text" id="<?php echo $this->get_field_id('FG_facebook');?>"
            name="<?php echo $this->get_field_name('FG_facebook');?>" value="<?php echo esc_attr( $facebook ); ?>">
    </li>
    <li>
        <label for="<?php echo $this->get_field_id('FG_twitter');?>"><?php _e( 'Twitter:' ); ?></label></br>
        <input type="text" id="<?php echo $this->get_field_id('FG_twitter');?>"
            name="<?php echo $this->get_field_name('FG_twitter');?>" value="<?php echo esc_attr( $twitter ); ?>">
    </li>
    <li>
        <label for="<?php echo $this->get_field_id('FG_instagram');?>"><?php _e( 'Instagram:' ); ?></label></br>
        <input type="text" id="<?php echo $this->get_field_id('FG_instagram');?>"
            name="<?php echo $this->get_field_name('FG_instagram');?>" value="<?php echo esc_attr( $instagram ); ?>">
    </li>

</ul>
<?php 
}
public function update( $new_instance, $old_instance ) {
    $instance = array();
    $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
    $instance['FG_facebook'] = ( ! empty( $new_instance['FG_facebook'] ) ) ? strip_tags( $new_instance['FG_facebook'] ) : '';
    $instance['FG_instagram'] = ( ! empty( $new_instance['FG_instagram'] ) ) ? strip_tags( $new_instance['FG_instagram'] ) : '';
    $instance['FG_twitter'] = ( ! empty( $new_instance['FG_twitter'] ) ) ? strip_tags( $new_instance['FG_twitter'] ) : '';
    return $instance;
}
} 