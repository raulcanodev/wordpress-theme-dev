<?php

function wpdevs_load_scripts(){
  wp_enqueue_style('wpdevs-style', get_stylesheet_uri(), array(), '1.0', 'all');
}
add_action('wp_equeue_scripts', 'wpdevs_load_scripts');