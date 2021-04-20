<?php

add_action('wp_enqueue_scripts', 'test_media');
wp_enqueue_script('jquery');
add_action('after_setup_theme', 'test_after_setup');
add_action('widgets_init', 'test_widgets');

function test_media(){
 wp_enqueue_style('test-main', get_stylesheet_uri());
 wp_enqueue_style('media-css', get_template_directory_uri() . '/assets/css/media.css');
}

function test_after_setup(){
register_nav_menu('bottom', 'Для підвалу');
register_nav_menu('left', 'Ліве меню');

add_theme_support('post-thumbnails');
add_theme_support('title-tag');
   }
   
function test_widgets(){
		register_sidebar(array(
			'name' => 'Sidebar Right',
			'id' => 'sidebar-right',
			'description' => 'Правая колонка',
			'before_widget' => '<div class="widget %2$s">',
			'after_widget'  => "</div>\n"
));

			register_sidebar(array(
			'name' => 'Sidebar Left',
			'id' => 'sidebar-left',
			'description' => 'Левая колонка',
			'before_widget' => '<div class="widget %2$s">',
			'after_widget'  => "</div>\n"
));
}