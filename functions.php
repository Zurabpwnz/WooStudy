<?php
function woostudy_setup(): void {
	add_theme_support( 'woocommerce' );
}

add_action( 'after_setup_theme', 'woostudy_setup' );


function woostudy_enqueue_scripts(): void {
	wp_enqueue_style( 'woostudy-google-fonts', 'https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap' );
	wp_enqueue_style( 'woostudy-font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css' );
	wp_enqueue_style( 'woostudy-animate', get_stylesheet_directory_uri() . '/assets/lib/animate/animate.min.css' );
	wp_enqueue_style( 'woostudy-owlcarousel', get_stylesheet_directory_uri() . '/assets/lib/owlcarousel/assets/owl.carousel.min.css' );
	wp_enqueue_style( 'woostudy-style', get_stylesheet_directory_uri() . '/assets/css/style.css' );

	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'woostudy-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js', ['jquery'], false, true );
	wp_enqueue_script( 'woostudy-easing', get_stylesheet_directory_uri() . '/assets/lib/easing/easing.min.js', ['jquery'], false, true );
	wp_enqueue_script( 'woostudy-owl', get_stylesheet_directory_uri() . '/assets/lib/owlcarousel/owl.carousel.min.js', ['jquery'], false, true );
	wp_enqueue_script( 'woostudy-main', get_stylesheet_directory_uri() . '/assets/js/main.js', ['jquery'], false, true );
}
add_action('wp_enqueue_scripts', 'woostudy_enqueue_scripts');

include_once get_template_directory() . '/inc/woocommerce-hooks.php';
