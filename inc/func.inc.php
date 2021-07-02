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