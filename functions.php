<?php
show_admin_bar(false);

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
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
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

/**
 * Add  e-mail and phone textarea
 **/
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
 **/
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
 * Delete menu item class
 **/
add_filter('nav_menu_item_id', 'filter_menu_id');
add_filter( 'nav_menu_css_class', 'filter_menu_li' );
function filter_menu_li(){
    return array('');
}
function filter_menu_id(){
    return;
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

/**
 * Custom thumbnail
 **/
function bee_thumbnail($field, $cat = null){
    if( get_field($field, $cat) ){
       return ' style="background-image: url(' . get_field($field, $cat) . '); "';
    }
    return null;
}

/**
 * Custom Slider
 **/
add_action('init', 'my_custom_slider');
function my_custom_slider(){
	register_post_type('slider', array(
		'labels'             => array(
			'name'               => 'Slider',
			'singular_name'      => 'Slider',
			'add_new'            => 'Add new ',
			'add_new_item'       => 'Add new slider',
			'edit_item'          => 'Edit slider',
			'new_item'           => 'New slider',
			'view_item'          => 'View slider',
			'search_items'       => 'Search slider',
			'not_found'          =>  'Slider not found',
			'not_found_in_trash' => 'Slider not found in trash',
			'parent_item_colon'  => '',
			'menu_name'          => 'Slider',
		  ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
    'menu_icon'          => 'dashicons-images-alt',
    'menu_position'      => 9,
		'supports'           => array('title','editor')
	) );
}

/**
 * Resent post widget
**/
add_image_size( 'bee-recent-thumbnails', 80, 80, true );
function bee_recent_posts() {
    $bee_posts = new WP_Query();
    $bee_posts->query('showposts=2');
        while ($bee_posts->have_posts()) : $bee_posts->the_post(); ?>
				<div class="block-21 mb-4 d-flex">
			    <a class="blog-img mr-4" <?php echo bee_thumbnail('bee-recent-thumbnails'); ?>></a>
			    <div class="text">
			      <h3 class="heading"><a href="<?php esc_url(the_permalink()); ?>"><?php esc_html(the_title()); ?></a></h3>
			      <div class="meta">
			      	<div><a href="<?php esc_url(the_permalink()); ?>"><span class="icon-calendar"></span><?php the_time('M, j, Y'); ?></a></div>
			        <div><a href="<?php esc_url(the_permalink()); ?>"><span class="icon-person"></span><?php the_author(); ?></a></div>
			        <div><a href="<?php esc_url(the_permalink()); ?>"><span class="icon-chat"></span> <?php comments_number('0', '1', '%')?></a></div>
			      </div>
			   </div>
			 	</div>


			<li class="d-flex flex-row">
                <a href="<?php esc_url(the_permalink()); ?>">
                    <?php the_post_thumbnail('bee-recent-thumbnails'); ?>
                </a>
                <div class="recent-content d-flex flex-column">
                	<a href="">

                   </a>
                	<span class="date"><?php the_time('M, j, Y'); ?></span>
				</div>
            </li>
        <?php endwhile;
    wp_reset_postdata();
}
