<?php
/**
 * shresthabros functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package shresthabros
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
function shresthabros_setup() {

	function time_ago( $type = 'post' ) {
		$d = 'comment' == $type ? 'get_comment_time' : 'get_post_time';
		return human_time_diff($d('U'), current_time('timestamp')) . " " . __('ago');
	}
	
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on shresthabros, use a find and replace
		* to change 'shresthabros' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'shresthabros', get_template_directory() . '/languages' );

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
	
	function limit_word_count($title) {
		$len = 20; //change this to the number of words
		if (str_word_count($title) > $len) {
			$keys = array_keys(str_word_count($title, 2));
			$title = substr($title, 0, $keys[$len]);
		}
		return $title;
	}
	add_filter('the_title', 'limit_word_count');
	

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'primary-menu' => esc_html__( 'Primary', 'shresthabros' ),
			'footer-menu-1' => esc_html__( 'Footer 1', 'shresthabros' ),
			'footer-menu-2' => esc_html__( 'Footer 2', 'shresthabros' ),
			'footer-menu-3' => esc_html__( 'Footer 3', 'shresthabros' ),
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
			'shresthabros_custom_background_args',
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
add_action( 'after_setup_theme', 'shresthabros_setup' );


function remove_footer_admin(){
	echo '<span>Design and Developed by <a href="https://sbresearch.co/">SB Research and Development</a></span>';
}
add_filter('admin_footer_text', 'remove_footer_admin');


function annointed_admin_bar_remove() {
	global $wp_admin_bar;
	/* Remove their stuff */
	$wp_admin_bar->remove_menu('wp-logo');
	}
add_action('wp_before_admin_bar_render', 'annointed_admin_bar_remove', 0);




/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function shresthabros_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'shresthabros_content_width', 640 );
}
add_action( 'after_setup_theme', 'shresthabros_content_width', 0 );


/*@ Change WordPress Admin Login Logo */
if ( !function_exists('tf_wp_admin_login_logo') ) :
 
    function tf_wp_admin_login_logo() { ?>
        <style type="text/css">
            body.login div#login h1 a {
                background-image: url('<?php echo get_template_directory_uri()."/images/logo-ndpl.png"; ?>');
            }
        </style>
    <?php }
 
    add_action( 'login_enqueue_scripts', 'tf_wp_admin_login_logo' );
 
endif;


/*@ Change WordPress Admin Login Logo Link URL  */
if ( !function_exists('tf_wp_admin_login_logo_url') ) :
 
    function tf_wp_admin_login_logo_url() {
        return home_url();
    }
    add_filter( 'login_headerurl', 'tf_wp_admin_login_logo_url' );
 
endif;


add_shortcode( 'page_title', 'get_the_title' );



/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function shresthabros_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'shresthabros' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'shresthabros' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'shresthabros_widgets_init' );


function add_additional_class_on_li($classes, $item, $wpNavMenu) {
    if(isset($wpNavMenu->add_li_class)) {
        $classes[] = $wpNavMenu->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

function is_admin_logged_in() {
    return is_user_logged_in() && current_user_can('administrator') && is_admin();
}


/**
 * Enqueue scripts and styles.
 */
function shresthabros_scripts() {
	//wp_enqueue_style( 'shresthabros-style', get_stylesheet_uri(), array(), _S_VERSION );
	//wp_style_add_data( 'shresthabros-style', 'rtl', 'replace' );

	wp_enqueue_style( 'shresthabros-slick', get_template_directory_uri() . '/dist/slick.css', array(), _S_VERSION);
	wp_enqueue_style( 'shresthabros-aos', '//unpkg.com/aos@2.3.1/dist/aos.css', array(), _S_VERSION);
	wp_enqueue_style( 'shresthabros-slicktheme', get_template_directory_uri() . '/dist/slick-theme.css', array(), _S_VERSION);
	wp_enqueue_style( 'shresthabros-scroll', get_template_directory_uri() . '/dist/scroll.min.css', array(), _S_VERSION);
	wp_enqueue_style( 'shresthabros-tailwind', get_template_directory_uri() . '/dist/tailwind.css', array(), _S_VERSION);
	//wp_enqueue_style( 'shresthabros-theme', get_template_directory_uri() . '/dist/theme.css', array(), _S_VERSION);	

	
	wp_enqueue_script( 'shresthabros-jquery', '//code.jquery.com/jquery-1.11.0.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'shresthabros-migrate', '//code.jquery.com/jquery-migrate-1.2.1.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'shresthabros-aos', '//unpkg.com/aos@2.3.1/dist/aos.js', array(), _S_VERSION, true );
	//wp_enqueue_script( 'shresthabros-locomotive-scroll', get_template_directory_uri() . '/js/locomotive-scroll.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'shresthabros-scroll-main', get_template_directory_uri() . '/js/scroll-main.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'shresthabros-slick', get_template_directory_uri() . '/js/slick.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'shresthabros-main', get_template_directory_uri() . '/js/main.js', array(), _S_VERSION, true );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'shresthabros_scripts' );

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


