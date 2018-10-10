<?php
function sbwp_customize_register($wp_customize){

	$wp_customize->add_section('showcase',array(
		'title' => __('Showcase','SB-WordPress'),
		'description' => sprintf(__('Options for showcase','SB-WordPress')),
		'priority'	  => 130
		));

	// Showcase heading
	$wp_customize->add_setting('showcase_heading',array(
		'default' => _x('Custom Bootstrap Wordpress Theme','SB-WordPress'),
		'type'	  => 'theme_mod'
		));
	$wp_customize->add_control('showcase_heading',array(
		'label' => __('Heading','SB-WordPress'),
		'section' =>'showcase',
		'settings' => 'showcase_heading',
		'priority' => 1
		));

	// Showcase Text
	$wp_customize->add_setting('showcase_text',array(
		'default' => _x('Build responsive, mobile-first projects on the web with the worlds most popular front-end component library','SB-WordPress'),
		'type'	  => 'theme_mod'
		));
	$wp_customize->add_control('showcase_text',array(
		'label' => __('Text','SB-WordPress'),
		'section' => 'showcase',
		'settings' => 'showcase_text',
		'priority' => 2
		));

	// Showcase button url
	$wp_customize->add_setting('btn_url',array(
		'default' => _x('http://text.com','SB-WordPress'),
		'type'	  => 'theme_mod'
		));
	$wp_customize->add_control('btn_url',array(
		'label' => __('Button Url','SB-WordPress'),
		'section' =>'showcase',
		'settings' => 'btn_url',
		'priority' => 3
		));

	// Showcase button text
	$wp_customize->add_setting('btn_text',array(
		'default' => _x('Read More','SB-WordPress'),
		'type'	  => 'theme_mod'
		));
	$wp_customize->add_control('btn_text',array(
		'label' => __('Button Text','SB-WordPress'),
		'section' =>'showcase',
		'settings' => 'btn_text',
		'priority' => 4
		));

	// Showcase image
	$wp_customize->add_setting('showcase_img',array(
		'default' => get_bloginfo('template_directory').'/assets/img/showcase.jpg',
		'type'	  => 'theme_mod'
		));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'Showcase_img',array(
		'label' => __('Showcase Image','SB-WordPress'),
		'section' =>'showcase',
		'settings' => 'showcase_img',
		'priority' => 5
		)));


}
add_action('customize_register','sbwp_customize_register');
?>