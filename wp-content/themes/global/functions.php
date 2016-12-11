<?php
/**
 * global functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package global
 */
if ( ! function_exists( 'global_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function global_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on global, use a find and replace
	 * to change 'global' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'global', get_template_directory() . '/languages' );

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

	/* Custom image sizes*/
	add_image_size('img700x250',700,250,true);
	add_image_size('img250x250',250,250, array('left','top' ));

	add_filter( 'image_size_names_choose', 'custom_image_sizes_choose' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' 	=> esc_html__( 'Primary', 'global' ),
		'secondary' => esc_html__( 'Secondary', 'global' )
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
	add_theme_support( 'custom-background', apply_filters( 'global_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'global_setup' );

function custom_image_sizes_choose( $sizes ) {
    $custom_sizes = array(
        'img700x250' => 'img700x250',
        'img250x250' => 'img250x250'

    );
    return array_merge( $sizes, $custom_sizes );
}

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function global_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'global_content_width', 640 );
}
add_action( 'after_setup_theme', 'global_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function global_widgets_init() {

	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'global' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'global' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'League table', 'global' ),
		'id'            => 'sidebar-2',
		'description'   => esc_html__( 'Add widgets here.', 'global' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Upcoming matches', 'global' ),
		'id'            => 'sidebar-3',
		'description'   => esc_html__( 'Add widgets here.', 'global' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'global_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function global_scripts() {
	wp_enqueue_style( 'global-style', get_stylesheet_uri() );

	wp_enqueue_style( 'swiper-style', get_template_directory_uri() . '/src/css/swiper.min.css' );

	wp_enqueue_script( 'vendor-scripts', get_template_directory_uri() . '/src/js/vendors/vendors.js', array(), '20160907', true );

	wp_enqueue_script( 'global-scripts', get_template_directory_uri() . '/src/js/custom.js', array(), '20160907', true );

	wp_enqueue_script( 'global-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20161016', true );

	wp_enqueue_script( 'global-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'global_scripts' );

/**
* Generate Favicons
*/
function generate_favicon(){
	echo '<link rel="shortcut icon" type="image/x-icon" href="http://localhost:8080/ksostrovia/favicon.ico" />' . "\n";
}
add_action('wp_head','generate_favicon');



add_action( 'cmb2_admin_init', 'cmb2_sample_metaboxes' );
/**
 * Define the metabox and field configurations.
 */
function cmb2_sample_metaboxes() {

    // Start with an underscore to hide fields from custom fields list
    $prefix = '_global_';

    /**
     * Initiate the metabox
     */
    $cmb = new_cmb2_box( array(
        'id'            => 'test_metabox',
        'title'         => __( 'Test Metabox', 'cmb2' ),
        'object_types'  => array( 'page', ), // Post type
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
        // 'cmb_styles' => false, // false to disable the CMB stylesheet
        // 'closed'     => true, // Keep the metabox closed by default
    ) );

		$group_field_id = $cmb->add_field( array(
		    'id'          => 'wiki_test_repeat_group',
		    'type'        => 'group',
		    'description' => __( 'Dodawanie zawodników', 'cmb2' ),
		    // 'repeatable'  => false, // use false if you want non-repeatable group
		    'options'     => array(
		        'group_title'   => __( 'Zawodnik {#}', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row number
		        'add_button'    => __( 'Dodaj <zawodnika>		</zawodnika>', 'cmb2' ),
		        'remove_button' => __( 'Usuń zawodnika', 'cmb2' ),
		        'sortable'      => true, // beta
		        'closed'     => true, // true to have the groups closed by default
		    ),
		) );

		// Id's for group's fields only need to be unique for the group. Prefix is not needed.
		$cmb->add_group_field( $group_field_id, array(
		    'name' => 'Imię i nazwisko',
		    'id'   => 'title',
		    'type' => 'text',
		    // 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
		) );

		$cmb->add_group_field( $group_field_id, array(
		    'name'    => 'Pozycja',
		    'desc'    => 'field description (optional)',
		    'id'      => 'wiki_test_textsmall',
		    'type'    => 'text_small'
		) );
		$cmb->add_group_field( $group_field_id, array(
		    'name' => 'Zdjęcie',
		    'id'   => 'image',
		    'type' => 'file',
		) );
    // Add other metaboxes as needed

}

/**
* Turn off REST API
*/
add_filter('rest_authentication_errors', 'wpzen_disable_rest_api', 99);
function wpzen_disable_rest_api() {
	return new WP_Error('wpzen_rest_api_disabled', 'REST API disables', array('status' => 403));
}

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
/**
 * Load Custom Post Types etc.
 */
require get_template_directory() . '/libs/post_types.php';