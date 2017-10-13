<?php
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function bootpress4_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'bootpress4' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add  sidebar widgets here.', 'bootpress4' ),
		'before_widget' => '<section id="%1$s" class="card widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="card-header widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'bootpress4_widgets_init' );