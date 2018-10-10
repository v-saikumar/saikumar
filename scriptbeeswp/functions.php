<?php 
// Register Custom Navigation Walker
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

// Front page customizations
require_once get_template_directory() . '/assets/inc/customizer.php';

// Theme Support

function sbwp_theme_setup(){

// Navigation Menu locations for a theme
	register_nav_menus(array(
		'primary' => __('Primary Menu'),
		 ));
// add feature images to blog post 
	add_theme_support('post-thumbnails');

// Post Formats	
	add_theme_support('post-formats',array('aside','gallery'));
}
add_action('after_setup_theme','sbwp_theme_setup');

// Excerpt Length control
function set_excerpt_length(){
	return 45;
}
add_filter('excerpt_length','set_excerpt_length');

// Widget Locations
function sbwp_init_widgets($id){
	register_sidebar(array(
		'name'  => 'Sidebar',
		'id'	=> 'sidebar',
		'before_widget' =>'<div class="sidebar-module">',
		'after_widget'  =>'</div>',
		'before_title'	=>'<h4>',
		'after_title'	=>'</h4>'

		));
	// front page setup
	register_sidebar(array(
		'name'  => 'Box1',
		'id'	=> 'box1',
		'before_widget' =>'<div class="box">',
		'after_widget'  =>'</div>',
		'before_title'	=>'<h3>',
		'after_title'	=>'</h3>'

		));
	register_sidebar(array(
		'name'  => 'Box2',
		'id'	=> 'box2',
		'before_widget' =>'<div class="box">',
		'after_widget'  =>'</div>',
		'before_title'	=>'<h3>',
		'after_title'	=>'</h3>'

		));
	register_sidebar(array(
		'name'  => 'Box3',
		'id'	=> 'box3',
		'before_widget' =>'<div class="box">',
		'after_widget'  =>'</div>',
		'before_title'	=>'<h3>',
		'after_title'	=>'</h3>'

		));
}
add_action('widgets_init', 'sbwp_init_widgets');















 ?>
 
