<?php

add_action('wp_enqueue_scripts', 'basic_wp_theme_files');

function basic_wp_theme_files() {
  wp_enqueue_style('basic_wp_theme_main_styles', get_stylesheet_uri());
}
