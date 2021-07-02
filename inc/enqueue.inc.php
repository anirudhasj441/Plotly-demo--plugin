<?php
function enqueue_function(){
    //enqueue styles
    wp_enqueue_style( 'quasar_style', 'https://cdn.jsdelivr.net/npm/quasar@2.0.0/dist/quasar.prod.css' );
    wp_enqueue_style( 'font', 'https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900|Material+Icons|Material+Icons+Outlined' );
    wp_enqueue_style('animate_style', 'https://cdn.jsdelivr.net/npm/animate.css@^4.0.0/animate.min.css');

    //enqueue scripts
    wp_enqueue_script( 'plotly', 'https://cdn.plot.ly/plotly-2.1.0.min.js' );
}

function admin_enqueue_function(){
    //enqueue styles
    wp_enqueue_style( 'quasar_style', 'https://cdn.jsdelivr.net/npm/quasar@2.0.0/dist/quasar.prod.css' );
    wp_enqueue_style( 'font', 'https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900|Material+Icons|Material+Icons+Outlined' );
    wp_enqueue_style('animate_style', 'https://cdn.jsdelivr.net/npm/animate.css@^4.0.0/animate.min.css');
}
?>