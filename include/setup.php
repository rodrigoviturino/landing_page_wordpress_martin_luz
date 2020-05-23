<?php

function ml_theme_styles(){
  $directory = get_template_directory_uri();

  // CSS
  wp_enqueue_style('ml_style_css', $directory . '/style.css');

  // JS
  wp_enqueue_script('ml_jquery_js', $directory . '/assets/js/lib/jquery-3.5.1.min.js');
  wp_enqueue_script('ml_popper_js', $directory . '/assets/js/lib/popper.min.js');
  wp_enqueue_script('ml_bootstrap_js', $directory . '/node_modules/bootstrap/dist/js/bootstrap.min.js');
  wp_enqueue_script('ml_main_js', $directory . '/assets/js/main.js');

} 

function ml_after_setup(){
  add_theme_support("post-thumbnails");
}


  