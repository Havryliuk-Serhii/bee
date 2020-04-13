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
 * Custom thumbnail
 **/
function bee_thumbnail(){
    if( get_the_post_thumbnail_url($post = null, 'full') ){
       return ' style="background-image: url(' . get_the_post_thumbnail_url($post, 'full') . '); "';
    }
    return null;
}
function bee_post_thumbnail() {
	if ( is_singular() ) :
			the_post_thumbnail( $size = 'post-thumbnail', $attr = array('class' =>'img-fluid') );
		else : ?>

		<a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
			<?php
			the_post_thumbnail( 'post-thumbnail', array(
				'alt' => the_title_attribute( array(
					'echo' => false,
				) ),
			) );
			?>
		</a>

		<?php
		endif;
}
/**
 * Hero Slider
 **/
add_action('init', 'hero_slider');
function hero_slider(){
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
			'menu_name'          => 'Hero slider',
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
    	'menu_position'      => 8,
		'supports'           => array('title','editor', 'thumbnail', 'custom-fields')
	) );
}
/**
*  add a special class to the excerpt's <p> element
**/

add_filter( "the_excerpt", "add_class_to_excerpt" );

function add_class_to_excerpt( $excerpt ) {
    return str_replace('<p', '<p class="mb-5"', $excerpt);
}
/**
*  Delete square brackets
**/
add_filter('excerpt_more', 'my_func');
function my_func($more) {
	return '';
}
/**
 *	Default WordPress custom field
 **/
add_filter('acf/settings/remove_wp_meta_box', '__return_false');

/**
 * Testimonials slider
 **/
add_action('init', 'testimonial_posts');
function testimonial_posts(){
	$labels = array(
		'name' => 'Testimonials',
		'singular_name' => 'Testimonial',
		'add_new' => 'Add new',
		'add_new_item' => 'Add new testimonial',
		'edit_item' => 'Edit testimonial',
		'new_item' => 'New testimonial',
		'view_item' => 'View testimonial',
		'search_items' => 'Search testimonial',
		'not_found' =>  'Testimonial not found',
		'not_found_in_trash' => 'Testimonial not found in trash',
		'parent_item_colon' => '',
		'menu_name' => 'Testimonials'
	);
	$args = array(
		'labels' => __( $labels, 'bee' ),
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'has_archive' => true,
		'hierarchical' => false,
		'menu_position' => 9,
		'menu_icon' => 'dashicons-id' ,
		'supports' => array('editor', 'author', 'thumbnail'),
		'taxonomies' => array( 'category' ),
	);
	register_post_type('testimonial_slider', $args);
}
/**
*  Pagination
**/
function bee_pagination( $args = array() ) {

    $defaults = array(
        'range'           => 3,
        'custom_query'    => false,
        'previous_string' => __( '<', 'bee' ),
        'next_string'     => __( '>', 'bee' ),
        'before_output'   => '<ul>',
        'after_output'    => '</ul>'
    );

    $args = wp_parse_args(
        $args,
        apply_filters( 'bee_pagination_defaults', $defaults )
    );

    $args['range'] = (int) $args['range'] - 1;
    if ( !$args['custom_query'] )
        $args['custom_query'] = @$GLOBALS['wp_query'];
    $count = (int) $args['custom_query']->max_num_pages;
    $page  = intval( get_query_var( 'paged' ) );
    $ceil  = ceil( $args['range'] / 2 );

    if ( $count <= 1 )
        return FALSE;

    if ( !$page )
        $page = 1;

    if ( $count > $args['range'] ) {
        if ( $page <= $args['range'] ) {
            $min = 1;
            $max = $args['range'] + 1;
        } elseif ( $page >= ($count - $ceil) ) {
            $min = $count - $args['range'];
            $max = $count;
        } elseif ( $page >= $args['range'] && $page < ($count - $ceil) ) {
            $min = $page - $ceil;
            $max = $page + $ceil;
        }
    } else {
        $min = 1;
        $max = $count;
    }

    $echo = '';
    $previous = intval($page) - 1;
    $previous = esc_attr( get_pagenum_link($previous) );

    if ( $previous && (1 != $page) )
        $echo .= '<li><a aria-label="Previous" href="' . $previous . '" title="' . __( 'previous', 'bee') . '"><i class="ion-ios-arrow-back">' . $args['previous_string'] . '</i></a></li>';

    if ( !empty($min) && !empty($max) ) {
        for( $i = $min; $i <= $max; $i++ ) {
            if ($page == $i) {
                $echo .= '<li class="active" aria-current="page"><span>' . str_pad( (int)$i, 1, '0', STR_PAD_LEFT ) . '</span></li>';
            } else {
                $echo .= sprintf( '<li aria-current="page"><a href="%s">%2d</a></li>', esc_attr( get_pagenum_link($i) ), $i );
            }
        }
    }

    $next = intval($page) + 1;
    $next = esc_attr( get_pagenum_link($next) );
    if ($next && ($count != $page) )
        $echo .= '<li><a aria-label="Next" href="' . $next . '" title="' . __( 'next', 'zlv') . '"><i class="ion-ios-arrow-forward">' . $args['next_string'] . '</i></a></li>';

    if ( isset($echo) )
        echo $args['before_output'] . $echo . $args['after_output'];
}
/**
 * Author section
 **/
add_action('init', 'author_section');
function author_section(){
 	register_post_type('author_sec', array(
 		'labels'             => array(
 			'name'               => 'Author',
 			'singular_name'      => 'Author',
 			'add_new'            => 'Add new ',
 			'add_new_item'       => 'Add new author',
 			'edit_item'          => 'Edit author',
 			'new_item'           => 'New author',
 			'view_item'          => 'View author',
 			'search_items'       => 'Search author',
 			'not_found'          =>  'Author not found',
 			'not_found_in_trash' => 'Author not found in trash',
 			'parent_item_colon'  => '',
 			'menu_name'          => 'Author section',
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
     	'menu_icon'          => 'dashicons-buddicons-buddypress-logo',
     	'menu_position'      => 10,
 		'supports'           => array('title','editor', 'thumbnail')
 	) );
}
/**
 * Author widget
 **/
function bee_author(){
	$author = new WP_Query(array('post_type' => 'author_sec', 'posts_per_page'=> 1));

	if ( $author->have_posts() ) : while ( $author->have_posts() ) : $author->the_post(); ?>
		<div id="post-<?php echo get_the_ID(); ?>" <?php post_class('about-author d-flex p-4 bg-light'); ?>>
	      	<div class="bio mr-5">
				<?php the_post_thumbnail($size = 'post-thumbnail', $attr = array('class' =>'img-fluid mb-4')); ?>
	        </div>
	        <div class="desc">
	            <h3><?php the_title(); ?></h3>
	            <?php the_content(); ?>
	        </div>
	    </div>
		<?php endwhile;
          wp_reset_postdata();
    endif;
}
/**
*  Comment markup HTML output
*/
function bee_list_comment( $comment, $args, $depth ) {
	if ( 'div' === $args['style'] ) {
		$tag       = 'div';
		$add_below = 'comment';
	} else {
		$tag       = 'li';
		$add_below = 'div-comment';
	}
	?>
	<li class="comment">
		<div class="vcard bio">
			<?php echo get_avatar( $comment, 50); ?>
		</div>
		<div class="comment-body">
			<h3><?php echo get_comment_author(); ?></h3>
			<div class="meta mb-2"><?php echo get_comment_date('F, d, Y  g:ia'); ?></div>
			<?php if ( $comment->comment_approved == '0' ) { ?>
			<em class="comment-awaiting-moderation">
				<?php _e( 'Youre comment awaiting moderation', bee ); ?>
			</em><br/>
			<?php } ?>
			<?php comment_text(); ?>
			<p>
				<?php
				comment_reply_link(
					array_merge(
						$args,
						array(
							'add_below' => $add_below,
							'depth'     => $depth,
							'max_depth' => $args['max_depth']
						)
					)
				); ?>
			</p>
		</div>
	</li>
	<?php if ( 'div' != $args['style'] ) { ?>
	<?php }
}
/**
*  Changing comment form fields
*/
add_filter('comment_form_fields', 'bee_reorder_comment_fields' );
function bee_reorder_comment_fields( $fields ){

	$new_fields = array();

	$myorder = array('author','email','website','comment_field');
	foreach( $myorder as $key ){
		$new_fields[ $key ] = $fields[ $key ];
		unset( $fields[ $key ] );
	}

	if( $fields )
		foreach( $fields as $key => $val )
			$new_fields[ $key ] = $val;

	return $new_fields;
}

/**
* Social icon links
**/
//Twitter
function tw_options(){
		add_settings_field(
		'twitter',
		'Twitter link',
		'display_tw',
		'general'
	);
	register_setting(
		'general',
		'tw-link'
	);
}
add_action('admin_init', 'tw_options');
function display_tw(){
	echo "<input type='text' class='regular-text' name='tw-link' value='" . esc_attr(get_option('tw-link')) . "'>";
}
//Facebook
function fb_options(){
		add_settings_field(
		'facebook',
		'Fasebook link',
		'display_fb',
		'general'
	);
	register_setting(
		'general',
		'fb-link'
	);
}
add_action('admin_init', 'fb_options');
function display_fb(){
	echo "<input type='text' class='regular-text' name='fb-link' value='" . esc_attr(get_option('fb-link')) . "'>";
}
//Instagram
function in_options(){
		add_settings_field(
		'instagram',
		'Instagram link',
		'display_in',
		'general'
	);
	register_setting(
		'general',
		'in-link'
	);
}
add_action('admin_init', 'in_options');
function display_in(){
	echo "<input type='text' class='regular-text' name='in-link' value='" . esc_attr(get_option('in-link')) . "'>";
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
        <?php endwhile;
    wp_reset_postdata();
}
