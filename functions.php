<?php

function shihab_files() {
    wp_enqueue_style( 'shihab_main_styles', get_stylesheet_uri(), NUL, microtime() );
    wp_enqueue_style( 'normalizecss', get_theme_file_uri('/css/normalize.css') );
    wp_enqueue_style( 'bootstrapcss', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' );
    wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    
    
    wp_enqueue_script( 'jquery', '//code.jquery.com/jquery-3.2.1.slim.min.js', true );
    wp_enqueue_script( 'bootstrapjs', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', true );
    
    
    //wp_enqueue_script( 'enlightened_main_js', get_theme_file_uri('/js/scripts-bundled.js'), NULL, microtime(), true );
    //wp_enqueue_style( 'custom-google-font', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i' );
    //wp_enqueue_style( 'font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
    
}
add_action( 'wp_enqueue_scripts', 'shihab_files' );

 













