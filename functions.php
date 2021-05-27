<?php
/**
 * peak2021 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package peak2021
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'peak2021_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function peak2021_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on peak2021, use a find and replace
		 * to change 'peak2021' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'peak2021', get_template_directory() . '/languages' );

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
				'menu-1' => esc_html__( 'Primary', 'peak2021' ),
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
				'peak2021_custom_background_args',
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
add_action( 'after_setup_theme', 'peak2021_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function peak2021_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'peak2021_content_width', 640 );
}
add_action( 'after_setup_theme', 'peak2021_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function peak2021_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'peak2021' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'peak2021' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'peak2021_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function peak2021_scripts() {
	wp_enqueue_style( 'peak2021-style', get_template_directory_uri() . '/style.min.css', array(), _S_VERSION );
	wp_style_add_data( 'peak2021-style', 'rtl', 'replace' );

	wp_enqueue_script( 'peak2021-main', get_template_directory_uri() . '/js/main.js', array(), '2020', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'peak2021_scripts' );

/**
 * Load CSS for the editor
 */
add_action( 'after_setup_theme', 'add_gutenberg_css' );
 
function add_gutenberg_css(){
 
  add_theme_support( 'editor-styles' ); // if you don't add this line, your stylesheet won't be added
  add_editor_style( 'style-editor.min.css' ); // tries to include style-editor.css directly from your theme folder
 
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
 * Create custom post type 'Teammembers'
 */
function create_posttype() {
  register_post_type( 'teammember',
  // CPT Options
    array(
      'labels' => array(
        'name' => __( 'Team members' ),
        'singular_name' => __( 'Team member' ),
      ),
      'public' => true,
      'show_ui' => true,
      'show_in_rest' => true,
      'has_archive' => 'teammembers',
      'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail', 'custom-fields', 'permalinks', 'featured_image' ),
    )
  );
  register_post_type( 'founders',
  // CPT Options
    array(
      'labels' => array(
        'name' => __( 'Founders' ),
        'singular_name' => __( 'Founder' ),
      ),
      'public' => true,
      'show_ui' => true,
      'show_in_rest' => true,
      'has_archive' => 'founders',
    //'rewrite' => array('slug' => 'founders/%exercisetypes%', 'with_front' => false),
      'taxonomies' => array('businessmodel', 'founders-tag'),
      'supports' => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', 'permalinks', 'featured_image' ),
    )
  );
  flush_rewrite_rules(); 
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype', 0 );

function create_exercisetypes_hierarchical_taxonomy() {
  // Add new taxonomy, make it hierarchical like categories
  //first do the translations part for GUI
    $labels = array(
      'name' => _x( 'Business models', 'taxonomy general name' ),
      'singular_name' => _x( 'Business model', 'taxonomy singular name' ),
      'search_items' =>  __( 'Search Business models' ),
      'all_items' => __( 'All Business models' ),
      'parent_item' => __( 'Parent Business model' ),
      'parent_item_colon' => __( 'Parent Business model:' ),
      'edit_item' => __( 'Edit Business model' ), 
      'update_item' => __( 'Update Business model' ),
      'add_new_item' => __( 'Add New Business model' ),
      'new_item_name' => __( 'New Business model Name' ),
      'menu_name' => __( 'Business models' )
    );    
    $args = array(
      'hierarchical' => true,
      'labels' => $labels,
      'show_ui' => true,
      'show_admin_column' => true,
      'query_var' => true,
      'rewrite' => array( 'slug' => 'business-model', 'with_front' => false ),
      'public' => true,
      'has_archive' => true,
      'show_in_rest' => true // Needed for tax to appear in Gutenberg editor
    );
  // Now register the taxonomy
    register_taxonomy('businessmodel', 'founders', $args);
  }
  //hook into the init action and call create_exercisetypes_hierarchical_taxonomy when it fires
  add_action( 'init', 'create_exercisetypes_hierarchical_taxonomy', 0 );
  
/**
 * Add Tags to Exercises
 */
add_action( 'init', 'create_tag_taxonomies_for_founders', 0 );
//create two taxonomies, genres and tags for the post type "tag"
function create_tag_taxonomies_for_founders() 
{
  // Add new taxonomy, NOT hierarchical (like tags)
  $labels = array(
    'name' => _x( 'Tags', 'taxonomy general name' ),
    'singular_name' => _x( 'Tag', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Tags' ),
    'popular_items' => __( 'Popular Tags' ),
    'all_items' => __( 'All Tags' ),
    'parent_item' => null,
    'parent_item_colon' => null,
    'edit_item' => __( 'Edit Tag' ), 
    'update_item' => __( 'Update Tag' ),
    'add_new_item' => __( 'Add New Tag' ),
    'new_item_name' => __( 'New Tag Name' ),
    'separate_items_with_commas' => __( 'Separate tags with commas' ),
    'add_or_remove_items' => __( 'Add or remove tags' ),
    'choose_from_most_used' => __( 'Choose from the most used tags' ),
    'menu_name' => __( 'Tags' )
  ); 

  register_taxonomy('founders-tag','founders',array(
    'hierarchical' => false,
    'labels' => $labels,
    'show_ui' => true,
    'update_count_callback' => '_update_post_term_count',
    'query_var' => true,
  'rewrite' => array( 'slug' => 'founders-tag' ),
  'public' => true,
  'has_archive' => true,
  'show_in_rest' => true
  ));
  flush_rewrite_rules(); 
}

// Block Patterns.
require get_template_directory() . '/inc/block-patterns.php';


//Shortcode for displaying Team members
function display_teammembers() {
  echo '<div class="teammembers cards">';
      $args = array(  
        'post_type' => 'teammember',
        'post_status' => 'publish',
        'posts_per_page' => 8, 
        //'orderby’ => 'title', 
        //'order’ => 'ASC', 
      );
      global $more;
      $loop = new WP_Query( $args ); 
            
      while ( $loop->have_posts() ) { 
        $loop->the_post();
        echo '<div class="card">
          <div class="card-preview">
            <div class="card-preview-image">';
              the_post_thumbnail( 'full' );
            echo '</div>
            <h3 class="card-preview-title">';
            print the_title(); 
            echo '</h3>
            <div class="card-preview-subtitle">';
              the_content('', true); 
            echo '</div> 
              <svg class="ui-plus" width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <line x1="25" x2="25" y2="48" stroke="black" stroke-width="2"/>
                <line y1="23" x2="48" y2="23" stroke="black" stroke-width="2"/>
              </svg>
            </div>';
          $more = 1;
          echo '<div class="card-full">';
            echo get_template_part( 'inc/inline', 'peak_logo.svg' );
            echo '<div class="card-full-image">';
              the_post_thumbnail( 'full' );
            echo '</div>
              <div class="card-full-content">
                <h1 class="card-full-content-title"><?php the_title(); ?></h1>';
                  the_content();
              echo '<button class="cards-nav-close"></button>
              <button class="cards-nav-next"></button>
              <button class="cards-nav-prev"></button>  
            </div>
          </div>
        </div>';
      }
      //endwhile;
      wp_reset_postdata(); 
  echo '</div>';
}
function outputbuffer_teammembers(){
    ob_start();             // turn on output buffering
    display_teammembers(); // put the output to the buffer
    return ob_get_clean();  // capture and return the buffer
}
add_shortcode( 'teammembers', 'outputbuffer_teammembers' ); 
