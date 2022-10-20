<?php
/*-----------------------------------------------------------------------------------*/
/* Enqueue CSS
/*-----------------------------------------------------------------------------------*/
function puravar_theme_styles() {
	wp_enqueue_style( 'theme-styles', get_stylesheet_directory_uri() . '/style.css', array(), filemtime( get_stylesheet_directory() . '/style.css' ) );
}
add_action('wp_enqueue_scripts', 'puravar_theme_styles');
/*-----------------------------------------------------------------------------------*/
/*	Favicon
/*-----------------------------------------------------------------------------------*/
function blog_favicon() {
echo '<link rel="Shortcut Icon" type="image/x-icon" href="'. get_template_directory_uri() .'/favicon.png" />';
}
add_action('wp_head', 'blog_favicon');
/*-----------------------------------------------------------------------------------*/
/*	Screenshot image
/*-----------------------------------------------------------------------------------*/
function scrn_icon() {
echo '<link rel="image_src" href="'. get_template_directory_uri() .'/screenshot.png" />';
}
add_action('wp_head', 'scrn_icon');
/*-----------------------------------------------------------------------------------*/
/*Enqueue JS*/
/*-----------------------------------------------------------------------------------*/
function bootstrapchile_scripts_styles() {
     wp_enqueue_script('jquery-tools', get_template_directory_uri() . '/scripts.js', array('jquery'), '3', true);
}
add_action('wp_enqueue_scripts', 'bootstrapchile_scripts_styles');
/*-----------------------------------------------------------------------------------*/
/*	Google fonts
/*-----------------------------------------------------------------------------------*/
function wpb_add_google_fonts() {
   wp_enqueue_style( 'wpb-google-fonts', '//fonts.googleapis.com/css?family=Merriweather:400,400i,900,900i|Roboto:400,700|Vollkorn:700italic', false );
}
add_action( 'wp_enqueue_scripts', 'wpb_add_google_fonts' );
/*-----------------------------------------------------------------------------------*/
/*Project graveyard*/
/*-----------------------------------------------------------------------------------*/
function graveyard_post_type(){
	$args = array(
		'label'                 => __( 'Proyectines', 'puravar' ),
		'description'           => __( 'Custom post type', 'puravar' ),
		'supports'              => array( 'title','editor','thumbnail', 'excerpt', 'custom-fields' ),
		'menu_icon' 			=> 'dashicons-trash',
		'public'                => true,
		'taxonomies'  			=> array( 'topics', 'category' ),
		'menu_position'         => 7,
		'has_archive'           => true,
		'rewrite'               =>  array('slug' => 'graveyard'),
	);
	register_post_type( 'graveyard', $args );
}
add_action('init', 'graveyard_post_type');
/*-----------------------------------------------------------------------------------*/
/*	Thumbnail
/*-----------------------------------------------------------------------------------*/
if ( function_exists( 'add_theme_support' ) )
	add_theme_support( 'post-thumbnails' );
/*-----------------------------------------------------------------------------------*/
/*	Menu
/*-----------------------------------------------------------------------------------*/
register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'puravar'),
    'secondary' => __( 'Secondary Menu', 'puravar' ),
 ) );
/*-----------------------------------------------------------------------------------*/
/*	Pager
/*-----------------------------------------------------------------------------------*/
function numeric_posts_nav() {

	if( is_singular() )
		return;

	global $wp_query;

	/** Stop execution if there's only 1 page */
	if( $wp_query->max_num_pages <= 1 )
		return;

	$paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
	$max   = intval( $wp_query->max_num_pages );

	/**	Add current page to the array */
	if ( $paged >= 1 )
		$links[] = $paged;

	/**	Add the pages around the current page to the array */
	if ( $paged >= 3 ) {
		$links[] = $paged - 1;
		$links[] = $paged - 2;
	}

	if ( ( $paged + 2 ) <= $max ) {
		$links[] = $paged + 2;
		$links[] = $paged + 1;
	}

	echo '<div class="navigation"><ul>' . "\n";

	/**	Previous Post Link */
	if ( get_previous_posts_link() )
		printf( '<li>%s</li>' . "\n", get_previous_posts_link('«') );

	/**	Link to first page, plus ellipses if necessary */
	if ( ! in_array( 1, $links ) ) {
		$class = 1 == $paged ? ' class="active"' : '';

		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );

		if ( ! in_array( 2, $links ) )
			echo '<li>…</li>';
	}

	/**	Link to current page, plus 2 pages in either direction if necessary */
	sort( $links );
	foreach ( (array) $links as $link ) {
		$class = $paged == $link ? ' class="active"' : '';
		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
	}

	/**	Link to last page, plus ellipses if necessary */
	if ( ! in_array( $max, $links ) ) {
		if ( ! in_array( $max - 1, $links ) )
			echo '<li>…</li>' . "\n";

		$class = $paged == $max ? ' class="active"' : '';
		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
	}

	/**	Next Post Link */
	if ( get_next_posts_link() )
		printf( '<li>%s</li>' . "\n", get_next_posts_link('»') );

	echo '</ul></div>' . "\n";

}
/*-----------------------------------------------------------------------------------*/
/*	Concédeme jebuscristo la sabiduría para usar lightbox
/*-----------------------------------------------------------------------------------*/
add_action( 'wp_enqueue_scripts', 'themeslug_scripts' );
function themeslug_scripts() {
wp_enqueue_style( 'lightbox', get_template_directory_uri() . '/lightbox2/code/lightbox.min.css', array(), '4.3.0' );
wp_enqueue_script( 'lightbox', get_template_directory_uri() . '/lightbox2/code/lightbox-plus-jquery.min.js', array( 'jquery' ), '3.3.0', true );
}

add_filter('the_content', 'lightbox2');
function lightbox2 ( $content ) {
global $post;
$pattern = "/<a(.*?)href=('|\")(.*?).(bmp|gif|jpeg|jpg|png)('|\")(.*?)>/i";
$replacement = '<a$1 data-lightbox="post-image" href=$2$3.$4$5$6</a>';
$content = preg_replace($pattern, $replacement, $content);
return $content;
}
/*-----------------------------------------------------------------------------------*/
/*	Sidebar
/*-----------------------------------------------------------------------------------*/
function lrndm_register_sidebar() {

	register_sidebar( array(
		'name'	=> __('Sidebar principal', 'puravar'),
		'id'	=> 'main_sidebar',
		'description'	=>  __('Sidebar principal para los widgets', 'puravar'),
		'before_widget'	=>	'<div id="%1$s" class="widget grid grid4 %2$s">',
		'after_widget'	=> 	'</div>',
		'before_title'	=>	'<h3 class="widget-title">',
		'after_title'	=>	'</h3>',
	) );

	register_sidebar( array(
		'name'	=> __('Sidebar secundaria', 'puravar'),
		'id'	=> 'main_sidebar2',
		'description'	=>  __('Sidebar secundaria para los widgets', 'puravar'),
		'before_widget'	=>	'<div id="%1$s" class="widget %2$s">',
		'after_widget'	=> 	'</div>',
		'before_title'	=>	'<h3 class="widget-title">',
		'after_title'	=>	'</h3>',
	) );
	}

add_action( 'widgets_init', 'lrndm_register_sidebar' );
?>