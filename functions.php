<?php 

/*-------------------------------------------------*/
/*	Load stylesheet and scripts dynamically
/*-------------------------------------------------*/ 
function simple_scripts() {
	//wp_enqueue_style( $handle, $src, $deps, $ver, $media );
	wp_enqueue_style( 'simple-main', get_stylesheet_uri() );
	wp_enqueue_style( 'simple-bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css', '1.0' );
	wp_enqueue_style( 'simple-fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap', '1.0' );
	wp_enqueue_style( 'simple-icons', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css', '1.0' );
	wp_enqueue_style( 'simple-aos', get_template_directory_uri() . '/css/aos.css', '1.0' );
	wp_enqueue_style( 'simple-common', get_template_directory_uri() . '/css/main.css', '1.0' );
	
	// Commented because jquery is required for script that have it as a dependency and no alternative is enqueued.
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'https://code.jquery.com/jquery-3.7.0.min.js');
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'aos', get_template_directory_uri() . '/js/aos.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0.0', true );
}

function register_admin_styles() {
  	wp_enqueue_style( 'simple-admin-css', get_template_directory_uri() . '/css/admin.css', '1.0' );
}

add_action( 'wp_enqueue_scripts', 'simple_scripts' );
add_action( 'admin_enqueue_scripts', 'register_admin_styles' );

/*-------------------------------------------------*/
/*	Navigation
/*-------------------------------------------------*/
	register_nav_menus(
		array(
			'header-menu'  => __( 'Header Menu', 'simple' ),
			'footer-menu'  => __( 'Footer Menu', 'simple' )
		)
	);

/*-------------------------------------------------*/
/*	ACF
/*-------------------------------------------------*/
// if( function_exists('acf_add_options_page') ) {
// 	acf_add_options_page();
// }

add_theme_support( 'post-thumbnails' );

// add_action('admin_menu', 'remove_menus');
// function remove_menus() {
//     remove_menu_page('edit.php');                 # Записи 
//     remove_menu_page('edit-comments.php');        # Комментарии
//     remove_menu_page('users.php');                # Пользователи 
//     remove_menu_page('tools.php');                # Инструменты 
//     remove_menu_page('edit.php?post_type=acf-field-group'); # ACF
// }
// remove_action( 'admin_menu', 'cptui_plugin_menu' );

@ini_set( 'upload_max_size' , '150M' );
@ini_set( 'post_max_size', '150M');
@ini_set( 'max_execution_time', '300' );

?>