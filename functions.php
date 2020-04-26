<?php

function bee_setup() {
		add_theme_support( 'post-thumbnails' );
		register_nav_menus( array(
			'primary' => esc_html__( 'Primary', 'bee' ),
			'services' => esc_html__( 'Services Menu', 'bee' ),

			) );

		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );
	}
add_action( 'after_setup_theme', 'bee_setup' );

function bee_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'bee' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'bee' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h3',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'bee_widgets_init' );

/**
 * Enqueue scripts and styles.
 **/
function bee_scripts() {

	wp_enqueue_style( 'bee-style', get_stylesheet_uri() );

	wp_enqueue_style( 'bee-iconic-bootstrap', get_template_directory_uri() . '/css/open-iconic-bootstrap.min.css');
	wp_enqueue_style( 'bee-animate', get_template_directory_uri() . '/css/animate.css');
	wp_enqueue_style( 'bee-owl-carousel', get_template_directory_uri() . '/css/owl.carousel.min.css');
	wp_enqueue_style( 'bee-owl-theme', get_template_directory_uri() . '/css/owl.theme.default.min.css');
	wp_enqueue_style( 'bee-popup', get_template_directory_uri() . '/css/magnific-popup.css');
	wp_enqueue_style( 'bee-aos', get_template_directory_uri() . '/css/aos.css');
	wp_enqueue_style( 'bee-ionicons', get_template_directory_uri() . '/css/ionicons.min.css');
	wp_enqueue_style( 'bee-bootstrap-datepicker', get_template_directory_uri() . '/css/bootstrap-datepicker.css');
	wp_enqueue_style( 'bee-timepicker', get_template_directory_uri() . '/css/jquery.timepicker.css');
	wp_enqueue_style( 'bee-flaticon', get_template_directory_uri() . '/css/flaticon.css');
	wp_enqueue_style( 'bee-icomoon', get_template_directory_uri() . '/css/icomoon.css');
	wp_enqueue_style( 'bee-main-styles', get_template_directory_uri() . '/css/main.css');

	wp_enqueue_style( 'bee-google-poppins-font', 'https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900');
	wp_enqueue_style( 'bee-google-nunito-font', 'https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900');

	wp_enqueue_script( 'bee-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'bee-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	wp_enqueue_script( 'bee-jquery', get_template_directory_uri() . '/js/jquery.min.js', array(), '', true );
	wp_enqueue_script( 'bee-jquery-migrate', get_template_directory_uri() . '/js/jquery-migrate-3.0.1.min.js', array(), '', true );
	wp_enqueue_script( 'bee-popper', get_template_directory_uri() . '/js/popper.min.js', array(), '', true );
	wp_enqueue_script( 'bee-bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '', true );
	wp_enqueue_script( 'bee-jquery-easing', get_template_directory_uri() . '/js/jquery.easing.1.3.js', array(), '', true );
	wp_enqueue_script( 'bee-jquery-waypoints', get_template_directory_uri() . '/js/jquery.waypoints.min.js', array(), '', true );
	wp_enqueue_script( 'bee-jquery-stellar', get_template_directory_uri() . '/js/jquery.stellar.min.js', array(), '', true );
	wp_enqueue_script( 'bee-owl-carousel-js', get_template_directory_uri() . '/js/owl.carousel.min.js', array(), '', true );
	wp_enqueue_script( 'bee-jquery-magnific-popup', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', array(), '', true );
	wp_enqueue_script( 'bee-aos-js', get_template_directory_uri() . '/js/aos.js', array(), '20151215', true );
	wp_enqueue_script( 'bee-animate-number', get_template_directory_uri() . '/js/jquery.animateNumber.min.js', array(), '', true );
	wp_enqueue_script( 'bee-bootstrap-datepicker', get_template_directory_uri() . '/js/bootstrap-datepicker.js', array(), '', true );
	wp_enqueue_script( 'bee-jquery-timepicker', get_template_directory_uri() . '/js/jquery.timepicker.min.js', array(), '', true );
	wp_enqueue_script( 'bee-scrollax', get_template_directory_uri() . '/js/scrollax.min.js', array(), '', true );
	wp_enqueue_script( 'bee-gmap', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false', array(), '', true );
	wp_enqueue_script( 'bee-google-map', get_template_directory_uri() . '/js/google-map.js', array(), '', true );
	wp_enqueue_script( 'bee-main-js', get_template_directory_uri() . '/js/main.js', array(), '', true );

}
add_action( 'wp_enqueue_scripts', 'bee_scripts' );

remove_action( 'wp_head', 'feed_links_extra', 3 );
remove_action( 'wp_head', 'feed_links', 2 );
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'index_rel_link' );
remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );
remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );
remove_action( 'wp_head', 'adjacent_posts_rel_link', 10, 0 );

//3.0+
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10 );
remove_action( 'wp_head', 'wp_shortlink_wp_head', 10 ); //

add_filter('template_redirect', function(){   if( is_page() ) remove_action( "wp_head", "rel_canonical" ); });
add_filter('the_generator', '__return_empty_string');

remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );
remove_action( 'wp_head', 'wp_oembed_add_host_js' );

require get_template_directory().'/inc/theme-functions.php';
