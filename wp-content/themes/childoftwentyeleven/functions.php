<?php

function wpb_add_google_fonts() {

	wp_enqueue_style ('wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Cabin+Sketch|Philosopher', false);
}

add_action( 'wp_enqueue_scropts', 'wpb_add_google_fonts');

/*function my_theme_enqueque_styles() {

	$parent_style = "twentyeleven-style";

	wp_enqueue_style( $parent_style, get_template_directory_url()
	wp_enqueue_style( 'child-style')
	)
}*/