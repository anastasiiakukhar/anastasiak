<?php

function wpb_add_google_fonts() {

	wp_enqueue_style ('wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Cabin+Sketch|Philosopher', false);
}

add_action( 'wp_enqueue_scropts', 'wpb_add_google_fonts');

?>  