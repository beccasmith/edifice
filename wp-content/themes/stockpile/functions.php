<?php


function register_main_nav() {
	register_nav_menu( 'primary', 'Primary Menu');
}

add_action( 'after_setup_theme', 'register_main_nav');




?>