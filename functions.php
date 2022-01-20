<?php
/**
 * Load Custom Comments Layout file.
 */
 require_once('inc/kirki.php');
 require_once('inc/tgm.php');
if ( site_url() == "http://127.0.0.1/First/" ) {
	define( "VERSION", time() );
} else {
	define( "VERSION", wp_get_theme()->get( "Version" ) );
}

function newsbox_setup() {
    load_theme_textdomain( 'newsbox', get_template_directory() . '/languages' );
    add_theme_support( "automaic-feed-links" );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( "post-formats", array( "image", "gallery", "quote", "audio", "video", "link" ) );
    register_nav_menus( array(
        'newsboxmenu' => esc_html( 'NewsBox Main Menu', 'newsbox' ),
    ) );
    add_theme_support( 'html5', array(
        'comment-form',
        'comment-list',
        'caption',
    ) );
    add_theme_support( 'custom-selective-refresh-widgets' );

    add_theme_support( 'custom-background', apply_filters( 'newsbox_custom_background_args', array(
        'default-color' => 'ffffff',
        'default-image' => '',
    ) ) );

}
add_action( 'after_setup_theme', 'newsbox_setup' );
function newsbox_add_editor_styles() {
    add_editor_style( 'custom-editor-style.css' );
}
add_action( 'admin_init', 'newsbox_add_editor_styles' );
function newsbox_content_width() {
    $GLOBALS['content-width'] = apply_filters( 'newsbox_content_width', 1170 );
}
add_action( 'after_setup_theme', 'newsbox_content_width', 0 );

function newsbox_widgets_init() {
    register_sidebar( array(
        'name'          => esc_html__( 'newsBox', 'newsbox' ),
        'id'            => 'single_post_widgets',
        'description'   => esc_html__( 'Add widgets here.', 'newsbox' ),
        'before_widget' => '<div id="%1$s" class=" %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title ">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'newsbox_widgets_init' );

function newsbox_widgets(){
    register_sidebar( array(
		'name'          => __( 'Single Page', 'newsbox' ),
		'id'            => 'single-page',
		'description'   => __( 'Widgets in this area will be shown on Single Dot Page', 'newsbox' ),
		'before_widget' => '<div id="%1$s" class="%2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
}
add_action( "widgets_init", "newsbox_widgets");
//=========================== assets bootstraping ==========================================
function newsbox_assets() {
    //----------------------- css -------------------------------
    wp_enqueue_style( "main-css", get_theme_file_uri( "/assets/style.css" ), null, "1.0" );  
    wp_enqueue_style( "newsbox-css", get_stylesheet_uri()); 
    //---------------------- js -----------------------  
    wp_enqueue_script( "popper-js", get_theme_file_uri( "/assets/js/bootstrap/popper.min.js" ), array( "jquery" ), "1.0", true );  
    wp_enqueue_script( "bootstrap-js", get_theme_file_uri( "/assets/js/bootstrap/bootstrap.min.js" ), array( "jquery" ), "1.0", true );  
    wp_enqueue_script( "plugins-js", get_theme_file_uri( "/assets/js/plugins/plugins.js" ), array( "jquery" ), "1.0", true );  
    wp_enqueue_script( "active-js", get_theme_file_uri( "/assets/js/active.js" ), array( "jquery" ), "1.0", true );  
}
add_action( 'wp_enqueue_scripts', 'newsbox_assets' );
function newbox_comment_form_fields($fields){
   
    $comment_field = $fields['comment'];
    $cookies = $fields['cookies'];
    unset($fields['comment']);
    unset($fields['cookies']);
    $fields['comment'] = $comment_field;
    return $fields;
}
add_filter('comment_form_fields','newbox_comment_form_fields');
function get_max_page_number() {
	global $wp_query;
	return $wp_query->max_num_pages;
}

 

