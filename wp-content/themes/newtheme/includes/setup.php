<?php

function nt_setup_theme() {
	add_theme_support( "menus" );

	register_nav_menu(
		'primary',
		__( 'Primary Menu', 'newtheme ' )
	);
}