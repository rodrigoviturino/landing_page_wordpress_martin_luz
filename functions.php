<?php

// Include
require get_template_directory() . "/include/setup.php";

// Hooks
add_action( "wp_enqueue_scripts", "ml_theme_styles" );