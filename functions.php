<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage DigiTrix
 * @since DigiTrix 1.0
 */

//CSS and Js File add
function css_js_file_calling(){
wp_enqueue_style('rfq-style',get_stylesheet_uri());
wp_register_style('custom',get_template_directory_uri().'/assets/css/custom.css', array(),'1.0.0','all');
wp_enqueue_style('custom');
wp_register_style('rfq-bootstrap',get_template_directory_uri().'/assets/css/bootstrap.min.css', array(),'4.0.2','all');
wp_enqueue_style('rfq-bootstrap');
wp_enqueue_style('bootstrap_css', '//stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css');
wp_enqueue_style('font-awewsome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css');

wp_enqueue_script('jquery');

//Call Js file 
wp_register_script('rfq-main',get_template_directory_uri().'/assets/js/main.js','jquery','1.0.0',true);
wp_enqueue_script('rfq-main');
wp_register_script('rfq-bootstrap',get_template_directory_uri().'/assets/js/bootstrap.min.js','jquery','4.0.2',true);
wp_enqueue_script('rfq-bootstrap');
wp_register_script('rfq-contact',get_template_directory_uri().'/assets/mail/contact.js','','',true);
wp_enqueue_script('rfq-contact');
wp_register_script('rfq-jqbv',get_template_directory_uri().'assets/mail/jqBootstrapValidation.min.js','','',true);
wp_enqueue_script('rfq-jqbv');
wp_enqueue_script( 'bootstrap_javascript', '//stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js', array(), '4.4.1', true );

}
add_action('wp_enqueue_scripts','css_js_file_calling');
if(!function_exists('rafiq_theme_setup')):
    function rafiq_theme_setup(){

load_theme_textdomain('rfq-domain',get_template_directory_uri().'/languages');
add_theme_support('title-tag');
add_theme_support('post-formats',array(
    'link',
    'gallery',
    'image',
    'video',
    'audio',
    ));
add_theme_support('post-thumbnails');
add_theme_support('custom-logo');
add_theme_support('custom-background');
register_nav_menus(
			array(
				'primary' => esc_html__( 'Primary menu', 'twentytwentyone' ),
				'footer'  => esc_html__( 'Secondary menu', 'twentytwentyone' ),
				'Nav'  => esc_html__( 'Navigation menu', 'twentytwentyone' ),
			)
		);

    }
endif;
add_action( 'after_setup_theme', 'rafiq_theme_setup' );
?>