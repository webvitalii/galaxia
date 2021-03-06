<?php
$galaxia_theme = wp_get_theme();
define('GALAXIA_THEME_VERSION', $galaxia_theme->get('Version'));

if ( ! function_exists( 'galaxia_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function galaxia_setup() {

		load_theme_textdomain( 'galaxia' );

		add_theme_support( 'automatic-feed-links' );

		add_theme_support( 'title-tag' );

		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 1200, 9999 ); // unlimited height, soft crop

		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'galaxia' ),
		) );

		add_theme_support( 'html5', array(
			'comment-list',
			'gallery',
			'caption',
		) );

		add_theme_support( 'custom-background', apply_filters( 'galaxia_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

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
add_action( 'after_setup_theme', 'galaxia_setup' );


/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function galaxia_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'galaxia_content_width', 640 );
}
add_action( 'after_setup_theme', 'galaxia_content_width', 0 );


function galaxia_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'galaxia' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add sidebar widgets here.', 'galaxia' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer', 'galaxia' ),
		'id'            => 'footer-1',
		'description'   => esc_html__( 'Add footer widgets here.', 'galaxia' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
}
add_action( 'widgets_init', 'galaxia_widgets_init' );


function galaxia_scripts() {
	wp_enqueue_style( 'galaxia-style', get_stylesheet_uri(), array(), GALAXIA_THEME_VERSION, 'all' );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'galaxia_scripts' );


function galaxia_update_styles( $html, $handle, $href, $media ){
    $handles = array('galaxia-style');
    if( in_array( $handle, $handles ) ){
        $html = str_replace(' href=', ' async href=', $html);   
    }
    return $html;
}
add_filter( 'style_loader_tag',  'galaxia_update_styles', 10, 4 );


require get_template_directory() . '/inc/custom-header.php';

require get_template_directory() . '/inc/template-tags.php';
