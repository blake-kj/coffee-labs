<?php

// Disable Gutternberg
add_filter('use_block_editor_for_post', '__return_false', 10);

function the_post_summary($length = 128, $string = ""){
	if($string){
		$content = $string;
	} else {
		$content = wp_strip_all_tags( get_the_content() );
	}
	if (strlen($content) > $length) {
		$content = substr($content, 0, $length) . '...';
	}
	echo $content;
}

function joppawebs_enqueue_scripts() {
	wp_enqueue_script( 'custom-js', get_template_directory_uri() . '/js/custom.js', array(), '1.0.1', true );
}
add_action( 'wp_enqueue_scripts', 'joppawebs_enqueue_scripts' );