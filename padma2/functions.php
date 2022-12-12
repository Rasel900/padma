<?php
wp_enqueue_style( 'style-name', get_stylesheet_uri() );
wp_enqueue_style( 'style-bootstrap', get_template_directory_uri() .'/asstes/css/bootstrap.min.css' );
wp_enqueue_script( 'script-js', get_template_directory_uri() . '/asstes/js/bootstrap.bundle.min.js', array(), '1.0.0', true );



add_theme_support('post-thumbnails');
add_theme_support( 'custom-logo' );

register_sidebar(array(
    'name'=>'logo-2',
    'id'=>'logosecond',
    'before_widget'  => '',
	'after_widget'   => ''
));


?>