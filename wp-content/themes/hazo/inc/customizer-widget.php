<?php
class hazo_sidebar_widget extends WP_Widget
{
    function __construct()
    {

        parent::__construct(

            'hazo_sidebar_widget',

            'Widget',

            array('description'  =>  'Widget hiển thị Widget')

        );
    }



    function form($instance)
    {

        $default = array();

        $instance = wp_parse_args((array) $instance, $default);
    }



    function update($new_instance, $old_instance)
    {

        $instance = $old_instance;

        return $instance;
    }



    function widget($args, $instance)
    {

        extract($args);
?>
        
        

    <?php

    }
}
add_action('widgets_init', 'create_hazo_sidebar_widget');

function create_hazo_sidebar_widget()
{

    register_widget('hazo_sidebar_widget');
}
