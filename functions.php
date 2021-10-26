<?php
/**
 * Bubi functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Bubi
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'bubi_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function bubi_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Bubi, use a find and replace
		 * to change 'bubi' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'bubi', get_template_directory() . '/languages' );

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
				'menu-1' => esc_html__( 'Primary', 'bubi' ),
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
				'bubi_custom_background_args',
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
endif;
add_action( 'after_setup_theme', 'bubi_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function bubi_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'bubi_content_width', 640 );
}
add_action( 'after_setup_theme', 'bubi_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function bubi_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'bubi' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'bubi' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'bubi_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function bubi_scripts() {
	wp_enqueue_style( 'bubi-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style( 'bubi-main', get_template_directory_uri() . '/css/main.css' );
	wp_enqueue_style( 'bootstrap-icons',  'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css' );

	wp_style_add_data( 'bubi-style', 'rtl', 'replace' );

	wp_enqueue_script( 'bubi-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'bubi_scripts' );

/**
 * Custom Fonts
 */
function enqueue_custom_fonts(){
	if(!is_admin()){
		wp_register_style('source_sans_pro', 'https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,400;0,700;1,400&display=swap');
		wp_register_style('nunito', 'https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&family=Source+Sans+Pro:ital,wght@0,400;0,700;1,400&display=swap');
		wp_enqueue_style('source_sans_pro');
		wp_enqueue_style('nunito');
	}
}
add_action('wp_enqueue_scripts', 'enqueue_custom_fonts');

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
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}

/**
 * Show cart contents / total Ajax
 */
add_filter( 'woocommerce_add_to_cart_fragments', 'woocommerce_header_add_to_cart_fragment' );

function woocommerce_header_add_to_cart_fragment( $fragments ) {
	global $woocommerce;

	ob_start();

	?>
	<a class="cart-customlocation" href="<?php echo esc_url(wc_get_cart_url()); ?>" title="<?php _e('View your shopping cart', 'woothemes'); ?>"><?php echo sprintf(_n('%d item', '%d items', $woocommerce->cart->cart_contents_count, 'woothemes'), $woocommerce->cart->cart_contents_count);?> – <?php echo $woocommerce->cart->get_cart_total(); ?></a>
	<?php
	$fragments['a.cart-customlocation'] = ob_get_clean();
	return $fragments;
}

/**
 * @snippet       Product Category Switcher @ Product Category Pages
 * @how-to        Get CustomizeWoo.com FREE
 * @author        Rodolfo Melogli
 * @compatible    WooCommerce 4.0
 * @donate $9     https://businessbloomer.com/bloomer-armada/
 */
 
add_action( 'woocommerce_before_shop_loop', 'bbloomer_filter_by_tag', 31 );
 
function bbloomer_filter_by_tag() {      
   if ( is_product_category() ) {      
      wc_product_dropdown_categories();   
   } 
   wc_enqueue_js( "
      $('#product_cat').change(function () {
         location.href = '/product-category/' + $(this).val();
      });
   " );
}

/****remove shop title****/
add_filter('woocommerce_show_page_title', 'bbloomer_hide_cat_page_title');
 
function bbloomer_hide_cat_page_title($title) {
   if (is_product_category()) $title = false;
   return $title;
}

/****remove result count****/
add_action( 'after_setup_theme', 'my_remove_product_result_count', 99 );
function my_remove_product_result_count() { 
    remove_action( 'woocommerce_before_shop_loop' , 'woocommerce_result_count', 20 );
    remove_action( 'woocommerce_after_shop_loop' , 'woocommerce_result_count', 20 );
}

/*****remove orderby****/
add_action( 'before_woocommerce_init', function() {
	remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );
	add_action( 'woo_custom_catalog_ordering', 'woocommerce_catalog_ordering', 30 ); 
} );

/****custom sale badge****/
add_filter('woocommerce_sale_flash', 'ds_change_sale_text');
function ds_change_sale_text() {
return '<span class="onsale">Akcija</span>';
}

/*****remove add to cart button*****/
remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart');

