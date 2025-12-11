<?php
/**
 * bloomlm functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package bloomlm
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function bloomlm_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on bloomlm, use a find and replace
		* to change 'bloomlm' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'bloomlm', get_template_directory() . '/languages' );

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
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'bloomlm' ),
			'menu-lang' => esc_html__( 'Language', 'bloomlm' ),
			'menu-pages' => esc_html__( 'Footer Pages', 'bloomlm' ),
			'menu-service' => esc_html__( 'Footer Service', 'bloomlm' ),
			'menu-legal' => esc_html__( 'Footer Legal', 'bloomlm' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'bloomlm_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'bloomlm_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function bloomlm_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'bloomlm_content_width', 640 );
}
add_action( 'after_setup_theme', 'bloomlm_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function bloomlm_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'bloomlm' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'bloomlm' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'bloomlm_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function bloomlm_scripts() {
	wp_enqueue_style( 'bloomlm-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'bloomlm-style', 'rtl', 'replace' );

	wp_enqueue_style( 'bloomlm-swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', array(), _S_VERSION );
	wp_enqueue_style( 'bloomlm-fancybox', 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css', array(), _S_VERSION );

	wp_enqueue_script( 'bloomlm-fancybox', 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'bloomlm-swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'bloomlm-app', get_template_directory_uri() . '/js/app.js', array('jquery'), _S_VERSION, true );

	wp_enqueue_script( 'bloomlm-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'bloomlm_scripts' );

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

add_filter('wpcf7_autop_or_not', '__return_false');


// function get_reading_time() {
//     $content = get_the_content(); 
//     $word_count = str_word_count(strip_tags($content)); 
//     $reading_time = ceil($word_count / 200);

//     return $reading_time . esc_html__( ' минут', 'bloomlm' );
// }


function get_reading_time_from_flexible() {
    $total_words = 0;

    if ( have_rows( 'flexible_blocks' ) ) {
        while ( have_rows( 'flexible_blocks' ) ) {
            the_row();
            
            if ( get_row_layout() == 'new_content' ) {
                $content = get_sub_field( 'content' );
                $total_words += str_word_count( strip_tags( $content ) );
            }
        }
        reset_rows();
    }

    $reading_time = ceil( $total_words / 200 );
    return $reading_time . esc_html__( ' минут', 'bloomlm' );
}


function get_post_views( $post_id ) {
    $views = get_post_meta( $post_id, 'post_views_count', true );
    return $views ? $views : 0; 
}

function set_post_views( $post_id ) {
    $views = get_post_meta( $post_id, 'post_views_count', true );
    $views = $views ? (int) $views + 1 : 1;
    update_post_meta( $post_id, 'post_views_count', $views );
}

function exclude_admin_views( $query ) {
    if ( is_single() && ! is_admin() ) {
        set_post_views( get_the_ID() );
    }
}
add_action( 'wp', 'exclude_admin_views' );