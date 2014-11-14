<?php

# Template Directory
$dir = get_template_directory_uri();

register_nav_menu('main', 'Main nav bar');

add_editor_style('editor-style.css');

if(!is_admin()){

	# jQuery
	wp_register_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js',
		false,
		false,
		true
	);

	# Theme script
	/*wp_register_script('nav', $dir.'/js/script.js', 
		['jquery', 'slidesjs'],
		false, 
		true
	);*/

	# Nav script
	

	/*function nav_scripts() {
		wp_enqueue_style( 'nav-theme', $dir.'css/menu_toexpand.css');
		wp_enqueue_script( 'nav-script', $dir.'/js/classie.js', array(), '1.0.0', true );
	}

	add_action( 'wp_enqueue_scripts', 'nav_scripts' );*/

	wp_register_script('nav-theme', $dir.'/js/classie.js',
		false,
		false,
		true
	);

	wp_enqueue_script('nav-theme');

	wp_register_script('theme', $dir.'/js/script.js',
		false,
		false,
		true
	);  

	wp_enqueue_script('theme');

	# Bootstrap
	wp_enqueue_style('bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css');


	# Theme styles
	wp_enqueue_style('theme', $dir.'/css/style.css');

	wp_enqueue_style('nav-theme', $dir.'/css/menu_toexpand.css');


}