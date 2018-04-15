<?php
/**
 * RPL Libraria functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package RPL_Libraria
 */

if ( ! function_exists( 'rpl_libraria_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function rpl_libraria_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on RPL Libraria, use a find and replace
		 * to change 'rpl-libraria' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'rpl-libraria', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'rpl-libraria' ),
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
		add_theme_support( 'custom-background', apply_filters( 'rpl_libraria_custom_background_args', array(
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
add_action( 'after_setup_theme', 'rpl_libraria_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function rpl_libraria_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'rpl_libraria_content_width', 640 );
}
add_action( 'after_setup_theme', 'rpl_libraria_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function rpl_libraria_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'rpl-libraria' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'rpl-libraria' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'rpl_libraria_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function rpl_libraria_scripts() {
	wp_enqueue_style( 'rpl-libraria-style', get_stylesheet_uri() );

	wp_enqueue_style( 's1', get_template_directory_uri() . '/assets/css/font-awesome.min.css' );
	wp_enqueue_style( 's2', get_template_directory_uri() . '/assets/css/mmenu.css' );
	wp_enqueue_style( 's3', get_template_directory_uri() . '/assets/css/mmenu.positioning.css' );
	wp_enqueue_style( 's4', 'https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i%7CLato:100,100i,300,300i,400,400i,700,700i,900,900i');





	// wp_enqueue_script( 'rpl-libraria-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	// wp_enqueue_script( 'rpl-libraria-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	wp_enqueue_script('1', get_template_directory_uri() . "/assets/js/jquery-1.12.4.min.js", array(), '20151215', true );
	wp_enqueue_script('2', get_template_directory_uri() . "/assets/js/jquery-ui.min.js", array(), '20151215', true );
	wp_enqueue_script('3', get_template_directory_uri() . "/assets/js/jquery.easing.1.3.js", array(), '20151215', true );
	wp_enqueue_script('4', get_template_directory_uri() . "/assets/js/bootstrap.min.js", array(), '20151215', true );
	wp_enqueue_script('5', get_template_directory_uri() . "/assets/js/mmenu.min.js", array(), '20151215', true );
	wp_enqueue_script('6', get_template_directory_uri() . "/assets/js/harvey.min.js", array(), '20151215', true );
	wp_enqueue_script('7', get_template_directory_uri() . "/assets/js/waypoints.min.js", array(), '20151215', true );
	wp_enqueue_script('8', get_template_directory_uri() . "/assets/js/facts.counter.min.js", array(), '20151215', true );
	wp_enqueue_script('9', get_template_directory_uri() . "/assets/js/mixitup.min.js", array(), '20151215', true );
	wp_enqueue_script('10', get_template_directory_uri() . "/assets/js/owl.carousel.min.js", array(), '20151215', true );
	wp_enqueue_script('11', get_template_directory_uri() . "/assets/js/accordion.min.js", array(), '20151215', true );
	wp_enqueue_script('12', get_template_directory_uri() . "/assets/js/responsive.tabs.min.js", array(), '20151215', true );
	wp_enqueue_script('13', get_template_directory_uri() . "/assets/js/responsive.table.min.js", array(), '20151215', true );
	wp_enqueue_script('14', get_template_directory_uri() . "/assets/js/masonry.min.js", array(), '20151215', true );
	wp_enqueue_script('15', get_template_directory_uri() . "/assets/js/carousel.swipe.min.js", array(), '20151215', true );
	wp_enqueue_script('16', get_template_directory_uri() . "/assets/js/bxslider.min.js", array(), '20151215', true );
	wp_enqueue_script('17', get_template_directory_uri() . "/assets/js/main.js", array(), '20151215', true );



	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'rpl_libraria_scripts' );

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
