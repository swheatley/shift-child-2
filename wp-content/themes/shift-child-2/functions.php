<?php 
	 add_action( 'wp_enqueue_scripts', 'shift_child_enqueue_styles' );
	 function shift_child_enqueue_styles() {
 		  wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' ); 
		   } 
	
		   
/* Register Widgets */		   


	if ( ! function_exists( ( 'ct_shift_register_widget_areas' ) ) ) {
	function ct_shift_child_register_widget_areas() {
        	register_sidebar( array(
			'name'          => esc_html__( 'Affiliate Sidebar', 'shift' ),
			'id'            => 'affiliate',
			'description'   => esc_html__( 'Widgets in this area will be shown in the sidebar next to the main post content', 'shift' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>'
		) );
	
	}
}
add_action( 'widgets_init', 'ct_shift_child_register_widget_areas' );


/* Register Menu  */

if ( ! function_exists( ( 'ct_shift_theme_setup' ) ) ) {
	function ct_shift_theme_setup() {

		register_nav_menus( array(
			'primary' => esc_html__( 'Primary', 'shift' )
		) );
			register_nav_menus( array(
			'footer' => esc_html__( 'Footer', 'shift' )
		) );

		load_theme_textdomain( 'shift', get_template_directory() . '/languages' );
	}
}
add_action( 'after_setup_theme', 'ct_shift_theme_setup', 10 );
 ?>