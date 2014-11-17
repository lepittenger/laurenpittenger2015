<?php
	add_action( 'after_setup_theme', 'register_my_menu' );
	
	function register_my_menu() {
	  register_nav_menu( 'blog-menu', 'Blog Menu' );
	  register_nav_menu('mobile-menu', 'Mobile Menu');
	}
	
	function laurenpittenger_scripts() {
		wp_enqueue_script( 'application', get_stylesheet_directory_uri() . '/js/application.js' );
	}
	
	add_action( 'wp_enqueue_scripts', 'laurenpittenger_scripts' );
?>