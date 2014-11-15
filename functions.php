<?php
	add_action( 'after_setup_theme', 'register_my_menu' );
	
	function register_my_menu() {
	  register_nav_menu( 'blog-menu', 'Blog Menu' );
	}
?>