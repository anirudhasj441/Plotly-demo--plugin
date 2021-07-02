<?php 
/*
plugin name: Plotly Demo
author: Anirudha Sudhakar Jadhav
*/

//Include 
include_once('inc/enqueue.inc.php');
include_once('inc/func.inc.php');

//Action Filters$tag:string
register_activation_hook(__FILE__, 'table_create');
add_action('wp_enqueue_scripts', 'enqueue_function');
add_action('admin_enqueue_scripts', 'admin_enqueue_function');
add_action('admin_menu', 'add_menu');
add_shortcode('plot', 'plot_func');

?>