<?php

function shihab_files() {
    wp_enqueue_style( 'shihab_main_styles', get_stylesheet_uri(), NUL, microtime() );
    wp_enqueue_style( 'normalizecss', get_theme_file_uri('/css/normalize.css') );
    wp_enqueue_style( 'bootstrapcss', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' );
    wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_enqueue_style( 'railway-font', '//fonts.googleapis.com/css?family=Raleway:300,400' );
    wp_enqueue_style( 'evil-icon', 'https://cdn.jsdelivr.net/npm/evil-icons@1.9.0/assets/evil-icons.min.css' );
    wp_enqueue_style( 'animate', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css' );
    
    wp_enqueue_script( 'jquery', '//code.jquery.com/jquery-3.2.1.slim.min.js', true );
    wp_enqueue_script( 'bootstrapjs', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', true );
    wp_enqueue_script( 'evil-iconJS', 'https://cdn.jsdelivr.net/npm/evil-icons@1.9.0/assets/evil-icons.min.js', true );
    wp_enqueue_script( 'waypoints', get_theme_file_uri('/js/jquery.waypoints.min.js'), true );
    wp_enqueue_script( 'mainJs', get_theme_file_uri('/js/main.js'), true );
    
}
add_action( 'wp_enqueue_scripts', 'shihab_files' );





