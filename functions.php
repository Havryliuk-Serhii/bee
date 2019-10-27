<?php
/**
 * bee functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package bee
 */

show_admin_bar(false);

if ( ! function_exists( 'bee_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function bee_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on bee, use a find and replace
		 * to change 'bee' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'bee', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'primary' => esc_html__( 'Primary', 'bee' ),
			'services' => esc_html__( 'Services Menu', 'bee' ),
			) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'bee_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'bee_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function bee_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'bee_content_width', 640 );
}
add_action( 'after_setup_theme', 'bee_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function bee_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'bee' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'bee' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'bee_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
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
	wp_enqueue_style( 'bee-main-styles', get_template_directory_uri() . '/css/style.css');

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

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Add  e-mail and phone textarea
 */

function my_email_options(){
	add_settings_field(
	'email', 
	'Write youre e-mail', 
	'display_email',
	'general' 
);

register_setting(
	'general', 
	'my_email' 
);
}
add_action('admin_init', 'my_email_options');
function display_email(){
echo "<input type='text' class='regular-text' name='my_email' value='" . esc_attr(get_option('my_email')) . "'>";
}


function my_phone_options(){
	add_settings_field(
	'phone', 
	'Write youre phone', 
	'display_phone',
	'general' 
);

register_setting(
	'general', 
	'my_phone' 
);
}
add_action('admin_init', 'my_phone_options');
function display_phone(){
echo "<input type='text' class='regular-text' name='my_phone' value='" . esc_attr(get_option('my_phone')) . "'>";
}

/** 
 * Bootstrap Walker Nav menu
*/

class Bootstrap_Menu_Walker extends Walker_Nav_Menu {

    function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {

      if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
        $t = '';
        $n = '';
      } else {
        $t = "\t";
        $n = "\n";
      }
      $indent = ( $depth ) ? str_repeat( $t, $depth ) : '';

      $classes = empty( $item->classes ) ? array() : (array) $item->classes;
      $classes[] = 'menu-item-' . $item->ID;

      // Filters the arguments for a single nav menu item
      $args = apply_filters( 'nav_menu_item_args', $args, $item, $depth );

      // Filters the CSS class(es) applied to a menu item's list item element
      $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args, $depth ) );
      $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

      // Filters the ID applied to a menu item's list item element
      $id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args, $depth );
      $id = $id ? ' id="' . esc_attr( $id ) . '"' : '';

      $output .= $indent . '<li' . $id . $class_names .'>';

      // it would be better to enter the class in Appearance -> Menus -> Screen Options -> CSS classes
      // $output .= $indent . '<li' . $id . $class_names .'>';
      $output .= $indent . '<li class="nav-item">';

      $atts = array();
      $atts['title']  = ! empty( $item->attr_title ) ? $item->attr_title : '';
      $atts['target'] = ! empty( $item->target )     ? $item->target     : '';
      $atts['rel']    = ! empty( $item->xfn )        ? $item->xfn        : '';
      $atts['href']   = ! empty( $item->url )        ? $item->url        : '';

      // Filters the HTML attributes applied to a menu item's anchor element
      $atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args, $depth );

      $attributes = '';
      foreach ( $atts as $attr => $value ) {
        if ( ! empty( $value ) ) {
          $value = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
          $attributes .= ' ' . $attr . '="' . $value . '"';
        }
      }
      $title = apply_filters( 'the_title', $item->title, $item->ID );

      // Filters a menu item's title
      $title = apply_filters( 'nav_menu_item_title', $title, $item, $args, $depth );

      $item_output = $args->before;
      $item_output .= '<a class="nav-link js-scroll-trigger"'. $attributes .'>';
      $item_output .= $args->link_before . $title . $args->link_after;
      $item_output .= '</a>';
      $item_output .= $args->after;

	  $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
	}
}

/**
* Social icons link
**/
register_sidebar(array(
	'name' => 'Social icons link',
	'id' => 'social_icons',
	'description' => 'Use the Text widget to add HTML code',
	'before_widget' => '',
	'after_widget' => ''
)
);

add_filter('nav_menu_item_id', 'filter_menu_id');
add_filter( 'nav_menu_css_class', 'filter_menu_li' );
function filter_menu_li(){
    return array('');   
}
function filter_menu_id(){
    return; 
}

/**
 * Slider
 */
function slider_posts(){  
	$labels = array(  
		'name'              => _x( 'Slides', 'post type general name' ),
		'singular_name'     => _x( 'Slide', 'post type singular name' ),
		'add_new'           => __( 'Add New Slide' ),
		'add_new_item'      => __( 'Add New Slide' ),
		'edit_item'         => __( 'Edit Slide' ),
		'new_item'          => __( 'New Slide' ),
		'view_item'         => __( 'View Slide' ),
		'search_items'      => __( 'Search Slides' ),
		'not_found'         => __( 'Slide' ),
		'not_found_in_trash'=> __( 'Slide' ),
		'parent_item_colon' => __( 'Slide' ),
		'menu_name'         => __( 'Slides' )
	);  
	$args = array(  
		'labels' => $labels,  
		'public' => true,  
		'publicly_queryable' => true,  
		'show_ui' => true,  
		'show_in_menu' => true,  
		'query_var' => true,  
		'rewrite' => true,  
		'capability_type' => 'post',  
		'has_archive' => true,  
		'hierarchical' => false,  
		'menu_position' => 11,  
		'supports' => array('title', 'thumbnail', 'excerpt', 'editor', 'custom-fields')  
	);  
	register_post_type('slider', $args);  
}
add_action('init', 'slider_posts');

/**
 * Custom thumbnail size
 */
add_image_size( 'little-thumb', 80, 80, true );

/**
 * Metabox for slider background image
 */

 <?php
class trueMetaBox{
	function __constract($options) {
		$this->options = $options;
		$this->prefix = $this->options['id'] .'_';
		add_action('add_meta_boxes', array(&$this, 'create'));
		add_action( 'save_post', array(&$this, 'save'), 1, 2 );
	}
	function create(){
		foreach ($this->options['post'] as $post_type){
			if (current_user_can($this->options['cap'])) {
				add_meta_box( $this->options['id'], $this->options['name'], array(&$this,'fill'), $post_type, $this->options['pos'],$this->options['pri']);
			}
		}
	}
	function fill(){
		global $post; $p_i_d = $post->ID;
		wp_nonce_field( $this->options['id'], $this->options['id'].'_wpnonce', false, true );?>
		<table class="form-table"><tbody><?php 
		foreach ( $this->options['args'] as $param) {
			if (current_user_can( $param['cap'])){
				?><tr><?php
				if(!$value = get_post_meta($post->ID, $this->prefix .$param['id'] , true)) $value = $param['std'];
				switch ($param['type']){
					case 'text':{?>
						<th scope="row"><lable for="<?php echo $this->prefix .$param['id'] ?>"><?php echo $param['title'] ?></lable></th>
						<td>
							<input name="<?php echo $this->prefix .$param['id'] ?>" type="<?php echo $param['type'] ?>" id="<?php echo $this->prefix .$param['id'] ?>" value="<?php echo $value ?>" placeholder="<?php echo $param['placeholder'] ?>" class="regular-text" /><br/>
							<span class="description"><?php echo $param['desc'] ?></span>
						</td>
						<?php 
						break;
					}
					case 'textarea':{ ?>
						<th scope="row"><lable for="<?php echo $this->prefix .$param['id'] ?>"><?php echo $param['title'] ?></lable></th>
						

				}
			}
		}
	}
}