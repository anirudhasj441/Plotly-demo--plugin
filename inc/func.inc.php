<?php
function create_teble($table_name){
    $sql = "
        CREATE TABLE $table_name(
            id int PRIMARY KEY,
            type varchar(20)
        );
    ";
    echo $sql;
    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
}

function delete_table(){
    global $wpdb;
    $table_name = $wpdb -> prefix . "plot_type";
    $wpdb -> query("DROP TABLE IF EXISTS $table_name");
}

function add_type($table_name, $type){
    global $wpdb;
    if($wpdb->get_var( "SELECT COUNT(*) FROM $table_name" ) == 0){
        $wpdb -> insert(
            $table_name,
            array(
                'id' => 1,
                'type' => $type
            ),
            array('%d', '%s')
        );
    }
    else{
        $wpdb -> update(
            $table_name,
            array(
                'type' => $type
            ),
            array(
                'id' => 1
            )
        );
    }
}

function get_type(){
    global $wpdb;
    $table_name = $wpdb -> prefix . "plot_type";
    if($wpdb->get_var( "SELECT COUNT(*) FROM $table_name" ) == 1){
        $res = $wpdb -> get_row("SELECT * FROM $table_name WHERE id = 1");
        $type = $res -> type;
        return $type;
    }
}

function add_menu(){
    add_menu_page(
        'Plot Setting',
        'plot setting',
        'manage_options',
        'plot-settings',
        'plot_menu_func',
        '',
        '66'
    );
}

function plot_menu_func(){
    include('setting.php');
}

function plot_func(){
    include('plot.php');
}

?>