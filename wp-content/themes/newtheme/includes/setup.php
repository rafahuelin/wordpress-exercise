<?php

function nt_setup_theme() {
	register_nav_menu(
		'primary',
		__( 'Primary Menu', 'newtheme ' )
	);
}