<?php
/**
 * Enqueue scripts and styles.
 */
function bootpress4_scripts() {
	wp_enqueue_style( 'bootpress4-style', get_stylesheet_directory_uri() . '/style.min.css', 
		array(), '1.0.0' );

	wp_enqueue_style( 'bootpress4-mdi-style', get_stylesheet_directory_uri() . '/mdi/css/materialdesignicons.min.css', array(), '1.0.0' );

	wp_enqueue_script( 'bootpress4-js', get_template_directory_uri() . '/js/dist/scripts.min.js', array('jquery'), ' ', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'bootpress4_scripts' );


