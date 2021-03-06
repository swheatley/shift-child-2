<?php

/* Enqueue Style Sheets */

	function shift_child_enqueue_styles() {
		   wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

		}

	add_action( 'wp_enqueue_scripts', 'shift_child_enqueue_styles' );

/* Enqueue Javascript files */

/* Not to self for some reason the javascript file only works in the parent theme */

	function shift_child_scripts(){
	  wp_enqueue_script( 'child-javascript', get_stylesheet_directory_uri() . '/js/child-javascript.js',  array( 'jquery' ), '1.0.0', true );
	}
	add_action('wp_enqueue_scripts', 'shift_child_scripts');


/* Register Widgets */
if ( ! function_exists( ( 'child_theme_widgets' ) ) ) {
	function child_theme_widgets() {
        	register_sidebar( array(
			'name'          => esc_html__( 'Affiliate Sidebar', 'shift' ),
			'id'            => 'affiliate',
			'description'   => esc_html__( 'Widgets in this area will be shown in the sidebar next to the main post content', 'shift' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>'
		) );
		    register_sidebar( array(
			'name'          => esc_html__( 'Politics Sidebar', 'shift' ),
			'id'            => 'politics',
			'description'   => esc_html__( 'Widgets in this area will be shown in the sidebar next to the main post content', 'shift' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>'
		) );
		register_sidebar( array(
	'name'          => esc_html__( 'Tech Resources Sidebar', 'shift' ),
	'id'            => 'tech-resources',
	'description'   => esc_html__( 'Widgets in this area will be shown in the sidebar next to the main post content', 'shift' ),
	'before_widget' => '<section id="%1$s" class="widget %2$s">',
	'after_widget'  => '</section>',
	'before_title'  => '<h2 class="widget-title">',
	'after_title'   => '</h2>'
) );

	}
}

add_action( 'widgets_init', 'child_theme_widgets' );


/* Register Menu  */


	function child_theme_menus() {
			register_nav_menus( array(
			'footer' => esc_html__( 'Footer', 'shift' )
		) );

	}

add_action( 'after_setup_theme', 'child_theme_menus', 10 );
