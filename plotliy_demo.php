<?php 
/*
plugin name: Plotly Demo
author: Anirudha Sudhakar Jadhav
*/

//Include 
include_once('inc/enqueue.inc.php');
include_once('inc/func.inc.php');

function table_create(){
    global $wpdb;
    $table_name = $wpdb -> prefix . "plot_type";
    if($wpdb->get_var("show tables like '$table_name'") != $table_name){
        create_teble($table_name);
        add_type($table_name, 'Bar Graph');
    }
}

function table_delete(){
    global $wpdb;
    if($wpdb->get_var("show tables like '$table_name'") == $table_name){
        $table_name = $wpdb -> prefix . "plot_type";
        $wpdb -> query("DROP TABLE IF EXISTS $table_name");
    }
}

//Action Filters$tag:string
register_activation_hook(__FILE__, 'table_create');
register_deactivation_hook(__FILE__,'table_delete');
add_action('wp_enqueue_scripts', 'enqueue_function');
add_action('admin_enqueue_scripts', 'admin_enqueue_function');
add_action('admin_menu', 'add_menu');
add_shortcode('plot', 'plot_func');

?>