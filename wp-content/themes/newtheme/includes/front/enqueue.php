<?php

function nt_enqueue() {
    wp_register_style( 'nt_google_fonts', 'http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic' );
	wp_register_style( 'nt_bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css' );
	wp_register_style( 'nt_style', get_template_directory_uri() . '/assets/css/style.css' );
	wp_register_style( 'nt_dark', get_template_directory_uri() . '/assets/css/dark.css' );
	wp_register_style( 'nt_font_icons', get_template_directory_uri() . '/assets/css/font-icons.css' );
	wp_register_style( 'nt_animate', get_template_directory_uri() . '/assets/css/animate.css' );
	wp_register_style( 'nt_magnific-popup', get_template_directory_uri() . '/assets/css/magnific-popup.css' );
	wp_register_style( 'nt_responsive', get_template_directory_uri() . '/assets/css/responsive.css' );
	wp_register_style( 'nt_custom', get_template_directory_uri() . '/assets/css/custom.css' );
}