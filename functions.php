<?php
/**
 * Karyne Magalhães functions and definitions.
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 * @package Tema_Desenvolvido
 */


if ( ! function_exists( 'tema_setup' ) ) :

function tema_setup() {

	load_theme_textdomain( 'karyne-magalhaes', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	add_theme_support( 'title-tag' );

	add_theme_support( 'post-thumbnails' );

	add_image_size( 'post-saiu-na-imprensa',  9999,  150, true );

	add_image_size( 'thumb-chamada', 300, 160, false );

	add_image_size( 'thumb-quadrado', 300, 300, true );


	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary'             => esc_html__( 'Primary',             'karyne-magalhaes' ),
		'menu-tratamentos'    => esc_html__( 'menu-tratamentos',    'karyne-magalhaes' ),
	) );


	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );
}

/* TRATAMENTOS */
function tratamentos() {

	$labels = array(
		'name'                => __( 'Tratamentos', 'text-domain' ),
		'singular_name'       => __( 'Tratamento', 'text-domain' ),
		'add_new'             => _x( 'Novo Tratamento', 'text-domain', 'text-domain' ),
		'add_new_item'        => __( 'Novo Tratamento', 'text-domain' ),
		'edit_item'           => __( 'Editar Tratamento', 'text-domain' ),
		'new_item'            => __( 'Novo Tratamento', 'text-domain' ),
		'view_item'           => __( 'Ver Tratamento', 'text-domain' ),
		'search_items'        => __( 'Buscar Tratamentos', 'text-domain' ),
		'not_found'           => __( 'Não existem Tratamentos cadastrados', 'text-domain' ),
		'not_found_in_trash'  => __( 'Não existem itens na Lixeira', 'text-domain' ),
		'parent_item_colon'   => __( 'Parent Tratamento:', 'text-domain' ),
		'menu_name'           => __( 'Tratamentos', 'text-domain' ),
	);

	$args = array(
		'labels'              => $labels,
		'hierarchical'        => false,
		'description'         => 'description',
		'taxonomies'          => array(),
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 13,
		'menu_icon'           => 'dashicons-art',
		'show_in_nav_menus'   => true,
		'publicly_queryable'  => true,
		'exclude_from_search' => false,
		'has_archive'         => true,
		'query_var'           => true,
		'can_export'          => true,
		'rewrite'             => true,
		'capability_type'     => 'post',
		'supports'            => array( 'title', 'editor', 'thumbnail' )
	);

	register_post_type( 'tratamentos', $args );
}
add_action( 'init', 'tratamentos' );




/* SAIU NA IMPRENSA */
function imprensa() {

	$labels = array(
		'name'                => __( 'Saiu na Imprensa', 'text-domain' ),
		'singular_name'       => __( 'Publicação Imprensa', 'text-domain' ),
		'add_new'             => _x( 'Nova Publicação', 'text-domain', 'text-domain' ),
		'add_new_item'        => __( 'Nova Publicação', 'text-domain' ),
		'edit_item'           => __( 'Editar Publicação', 'text-domain' ),
		'new_item'            => __( 'Nova Publicação', 'text-domain' ),
		'view_item'           => __( 'Ver Publicação', 'text-domain' ),
		'search_items'        => __( 'Buscar Publicações', 'text-domain' ),
		'not_found'           => __( 'Não existem Publicações cadastrados', 'text-domain' ),
		'not_found_in_trash'  => __( 'Não existem itens na Lixeira', 'text-domain' ),
		'parent_item_colon'   => __( 'Parent Publicação:', 'text-domain' ),
		'menu_name'           => __( 'Saiu na Imprensa', 'text-domain' ),
	);

	$args = array(
		'labels'              => $labels,
		'hierarchical'        => false,
		'description'         => 'description',
		'taxonomies'          => array(),
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 14,
		'menu_icon'           => 'dashicons-megaphone',
		'show_in_nav_menus'   => true,
		'publicly_queryable'  => true,
		'exclude_from_search' => false,
		'has_archive'         => true,
		'query_var'           => true,
		'can_export'          => true,
		'rewrite'             => true,
		'capability_type'     => 'post',
		'supports'            => array( 'title', 'editor', 'thumbnail' )
	);

	register_post_type( 'saiu-na-imprensa', $args );
}
add_action( 'init', 'imprensa' );


/* VIDEOS */
function videos() {

	$labels = array(
		'name'                => __( 'V&iacute;deos', 'text-domain' ),
		'singular_name'       => __( 'V&iacute;deo', 'text-domain' ),
		'add_new'             => _x( 'Novo V&iacute;deo', 'text-domain', 'text-domain' ),
		'add_new_item'        => __( 'Novo V&iacute;deo', 'text-domain' ),
		'edit_item'           => __( 'Editar V&iacute;deo', 'text-domain' ),
		'new_item'            => __( 'Novo V&iacute;deo', 'text-domain' ),
		'view_item'           => __( 'Ver V&iacute;deo', 'text-domain' ),
		'search_items'        => __( 'Buscar V&iacute;deos', 'text-domain' ),
		'not_found'           => __( 'Ainda n&atilde;o existem registros cadastrados...', 'text-domain' ),
		'not_found_in_trash'  => __( 'N&atilde;o existem V&iacute;deos na Lixeira', 'text-domain' ),
		'parent_item_colon'   => __( 'Parent V&iacute;deo:', 'text-domain' ),
		'menu_name'           => __( 'V&iacute;deos', 'text-domain' ),
	);

	$args = array(
		'labels'              => $labels,
		'hierarchical'        => false,
		'description'         => 'description',
		'taxonomies'          => array(),
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 15,
		'menu_icon'           => 'dashicons-video-alt3',
		'show_in_nav_menus'   => true,
		'publicly_queryable'  => true,
		'exclude_from_search' => false,
		'has_archive'         => true,
		'query_var'           => true,
		'can_export'          => true,
		'rewrite'             => true,
		'capability_type'     => 'post',
		'supports'            => array( 'title' )
	);

	register_post_type( 'videos', $args );
}
add_action( 'init', 'videos' );


/* final */
endif;
add_action( 'after_setup_theme', 'tema_setup' );

/* limite caracteres noticias */
function custom_excerpt_length( $length ) {
	return 23;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );


/**
 * content width in pixels, based on the theme's design and stylesheet.
 */
function tema_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'tema_content_width', 640 );
}
add_action( 'after_setup_theme', 'tema_content_width', 0 );

/**
 * widget area.
 */
function tema_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'karyne-magalhaes' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'tema_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function tema_scripts() {

	$url_template   = get_template_directory_uri();
	$url_stylesheet = get_stylesheet_uri();

	//css	
	wp_enqueue_style( 'wp-bootstrap',       get_template_directory_uri()."/css/bootstrap.min.css" );
	wp_enqueue_style( 'wp-owl-carousel',    get_template_directory_uri()."/owl-carousel/owl.carousel.css" );
	wp_enqueue_style( 'wp-owl-carousel',    get_template_directory_uri()."/owl-carousel/owl.theme.default.min.css" );
	wp_enqueue_style( 'wp-modaal',          get_template_directory_uri()."/css/modaal.css" );
	wp_enqueue_style( 'wp-layout',          get_stylesheet_uri() );

	//footer
	wp_enqueue_script( 'wp-jquery',       "{$url_template}/js/jquery-1.9.1.min.js",           array(), '1.9.1',  true );
	wp_enqueue_script( 'wp-bootstrap',    "{$url_template}/js/bootstrap.min.js",              array(), false,    true );
	wp_enqueue_script( 'wp-owl-carousel', "{$url_template}/owl-carousel/owl.carousel.min.js", array(), false,    true );
	wp_enqueue_script( 'wp-script-img',   "{$url_template}/js/responsive-img.min.js",         array(), false,    true );
	wp_enqueue_script( 'wp-plugin-js',    "https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js",         array(), false,    true );
	wp_enqueue_script( 'wp-script',       "{$url_template}/js/app.js",                        array(), true,     true );
	wp_enqueue_script( 'wp-modaal',       "{$url_template}/js/modaal.js",                     array(), false,    true );
	wp_enqueue_script( 'wp-mh',       "{$url_template}/js/jquery.matchHeight.js",                     array(), false,    true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'tema_scripts' );

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


/* FAVICON */
function favicon() {
	$url_template = get_template_directory_uri();

print "<!-- favicon -->
<link rel=\"apple-touch-icon\" sizes=\"57x57\" href=\"{$url_template}/favicon/apple-touch-icon-57x57.png\">
<link rel=\"apple-touch-icon\" sizes=\"60x60\" href=\"{$url_template}favicon/apple-touch-icon-60x60.png\">
<link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"{$url_template}/favicon/apple-touch-icon-72x72.png\">
<link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"{$url_template}/favicon/apple-touch-icon-76x76.png\">
<link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"{$url_template}/favicon/apple-touch-icon-114x114.png\">
<link rel=\"apple-touch-icon\" sizes=\"120x120\" href=\"{$url_template}/favicon/apple-touch-icon-120x120.png\">
<link rel=\"apple-touch-icon\" sizes=\"144x144\" href=\"{$url_template}/favicon/apple-touch-icon-144x144.png\">
<link rel=\"apple-touch-icon\" sizes=\"152x152\" href=\"{$url_template}/favicon/apple-touch-icon-152x152.png\">
<link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"{$url_template}/favicon/apple-touch-icon-180x180.png\">
<link rel=\"icon\" type=\"image/png\" href=\"{$url_template}/favicon/favicon-32x32.png\" sizes=\"32x32\">
<link rel=\"icon\" type=\"image/png\" href=\"{$url_template}/favicon/android-chrome-192x192.png\" sizes=\"192x192\">
<link rel=\"icon\" type=\"image/png\" href=\"{$url_template}/favicon/favicon-16x16.png\" sizes=\"16x16\">
<link rel=\"manifest\" href=\"{$url_template}/favicon/manifest.json\">
<link rel=\"mask-icon\" href=\"{$url_template}/favicon/safari-pinned-tab.svg\" color=\"#651142\">
<link rel=\"shortcut icon\" href=\"{$url_template}/favicon/favicon.ico\">
<meta name=\"msapplication-TileColor\" content=\"#f4f0e4\">
<meta name=\"msapplication-TileImage\" content=\"{$url_template}/favicon/mstile-144x144.png\">
<meta name=\"msapplication-config\" content=\"{$url_template}/favicon/browserconfig.xml\">
<meta name=\"theme-color\" content=\"#f4f0e4\">
";
}

/*
    STYLE LOGIN
*/

function custom_login_css() {
echo '<link rel="stylesheet" type="text/css" href="'.get_stylesheet_directory_uri().'/style.css"/>';
}
add_action('login_head', 'custom_login_css');

/*Função que altera a URL, trocando pelo endereço do seu site*/
function my_login_logo_url() {
return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

/*Função que adiciona o nome do seu site, no momento que o mouse passa por cima da logo*/
function my_login_logo_url_title() {
return 'Karyne Magalhães « Voltar para Home';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );
