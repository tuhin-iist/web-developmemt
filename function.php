<?php
wp_enqueue_style('style',get_stylesheet_uri(),);
wp_enqueue_style('style-B',get_template_directory_uri().'/assets/css/bootstrap.min.css',);
wp_enqueue_script('style-B',get_template_directory_uri().'/assets/js/bootstrap.bundle.min.js',array(),1.0,true);

add_theme_support('title-tag');
add_theme_support('post-thumbnails');
add_theme_support('custom-logo');

register_nav_menus([
    'TM'=>'Primary',
    'FM'=>'Footer'
]);

register_sidebar([
    'name'=>'Main Image',
    'id'=>'mainimg',
    'before_widget'=>'', 
    'after_widget'=>''
]);
register_sidebar([
    'name'=>'Side Image',
    'id'=>'sideimg',
    'before_widget'=>'', 
    'after_widget'=>''
]);
