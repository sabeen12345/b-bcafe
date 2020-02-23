<?php 
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );


function my_theme_enqueue_styles() {
    wp_enqueue_style( 'custom-style', get_stylesheet_directory_uri() . '/style.css' );
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_script('my-custom-script', get_template_directory_uri() .'/js/my-custom-script.js', array('jquery'), null, true);


 
}
function shapeSpace_include_custom_jquery() {

	wp_deregister_script('jquery');
	wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', array(), null, true);

}
add_action('wp_enqueue_scripts', 'shapeSpace_include_custom_jquery');

?>