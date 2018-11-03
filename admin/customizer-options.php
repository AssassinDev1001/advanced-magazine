<?php
/**
 * Defines customizer options
 *
 * @package Customizer Library Demo
 */

function customizer_library_demo_options() {

	// Theme defaults
	$primary_color = '#de0f17';
	$primary_bar_color = "#ffffff";

	// Stores all the controls that will be added
	$options = array();

	// Stores all the sections to be added
	$sections = array();

	// Stores all the panels to be added
	$panels = array();

	// Adds the sections to the $options array
	$options['sections'] = $sections;

	// More Examples
	$section = 'examples';

	// Arrays 

	$layout_choices = array(
		'choice-1' => 'Responsive Layout',
		'choice-2' => 'Fixed Layout'
	);

	$sections[] = array(
		'id' => $section,
		'title' => __( 'Theme Settings', 'advanced-magazine' ),
		'priority' => '10'
	);

	$options['logo'] = array(
		'id' => 'logo',
		'label'   => __( 'Logo', 'advanced-magazine' ),
		'section' => $section,
		'type'    => 'image',
		'default' => get_template_directory_uri().'/assets/img/logo.png'
	);

	$options['favicon'] = array(
		'id' => 'favicon',
		'label'   => __( 'Favicon', 'advanced-magazine' ),
		'section' => $section,
		'type'    => 'image',
		'default' => ''
	);	

	$options['site-layout'] = array(
		'id' => 'site-layout',
		'label'   => __( 'Site Layout', 'advanced-magazine' ),
		'section' => $section,
		'type'    => 'radio',
		'choices' => $layout_choices,
		'default' => 'choice-1'
	);

	$options['left-quote-image'] = array(
		'id' => 'left-quote-image',
		'label'   => __( 'Left quote image', 'advanced-magazine' ),
		'section' => $section,
		'type'    => 'image',
		'default' => get_template_directory_uri().'/assets/img/slogan1.jpg'
	);	

	$options['left-quote-header'] = array(
		'id' => 'left-quote-header',
		'label'   => __( 'Left quote header', 'advanced-magazine' ),
		'section' => $section,
		'type'    => 'text',
		'default' => __('Vladimir Putin', 'advanced-magazine'),
	);	

	$options['left-quote-text'] = array(
		'id' => 'left-quote-text',
		'label'   => __( 'Left quote text', 'advanced-magazine' ),
		'section' => $section,
		'type'    => 'textarea',
		'default' => __('I never met with him. We have a lot of Americans who visit us', 'advanced-magazine'),
	);		

	$options['right-quote-image'] = array(
		'id' => 'right-quote-image',
		'label'   => __( 'Right quote image', 'advanced-magazine' ),
		'section' => $section,
		'type'    => 'image',
		'default' => get_template_directory_uri().'/assets/img/slogan2.jpg'
	);	

	$options['right-quote-header'] = array(
		'id' => 'right-quote-header',
		'label'   => __( 'Right quote header', 'advanced-magazine' ),
		'section' => $section,
		'type'    => 'text',
		'default' => __('Donald Trump', 'advanced-magazine'),
	);		

	$options['right-quote-text'] = array(
		'id' => 'right-quote-text',
		'label'   => __( 'Right quote text', 'advanced-magazine' ),
		'section' => $section,
		'type'    => 'textarea',
		'default' => __('I think I\'ve made a lot of sacrifices. I work very, very hard', 'advanced-magazine'),
	);	

	$options['header-search-on'] = array(
		'id' => 'header-search-on',
		'label'   => __( 'Display header search form', 'advanced-magazine' ),
		'section' => $section,
		'type'    => 'checkbox',
		'default' => true,
	);	

	$options['primary-nav-heading'] = array(
		'id' => 'primary-nav-heading',
		'label'   => __( 'Mobile Primary Menu Heading Text', 'advanced-magazine' ),
		'section' => $section,
		'type'    => 'text',
		'default' => __('Categories', 'advanced-magazine'),
	);

	$options['secondary-nav-heading'] = array(
		'id' => 'secondary-nav-heading',
		'label'   => __( 'Mobile Secondary Menu Heading Text', 'advanced-magazine' ),
		'section' => $section,
		'type'    => 'text',
		'default' => __('Pages', 'advanced-magazine'),
	);					

	$options['all-posts-url'] = array(
		'id' => 'all-posts-url',
		'label'   => __( 'Page URL to display all latest posts', 'advanced-magazine' ),
		'section' => $section,
		'type'    => 'url',
		'default' => home_url() . '/latest',
	);	

	$options['archive-excerpt-length'] = array(
		'id' => 'archive-excerpt-length',
		'label'   => __( 'Number of excerpt words (archive)', 'advanced-magazine' ),
		'section' => $section,
		'type'    => 'text',
		'default' => '30',		
	);

	$options['single-featured-on'] = array(
		'id' => 'single-featured-on',
		'label'   => __( 'Display featured image on single posts', 'advanced-magazine' ),
		'section' => $section,
		'type'    => 'checkbox',
		'default' => true,
	);	

	$options['footer-widgets-on'] = array(
		'id' => 'footer-widgets-on',
		'label'   => __( 'Display footer widgets', 'advanced-magazine' ),
		'section' => $section,
		'type'    => 'checkbox',
		'default' => 1,
	);		

	$options['header-social-on'] = array(
		'id' => 'header-social-on',
		'label'   => __( 'Display social icons on site header', 'advanced-magazine' ),
		'section' => $section,
		'type'    => 'checkbox',
		'default' => 1,
	);	

	$options['facebook-url'] = array(
		'id' => 'facebook-url',
		'label'   => __( 'Your Facebook URL', 'advanced-magazine' ),
		'section' => $section,
		'type'    => 'text',
		'default' => '',		
	);

	$options['twitter-url'] = array(
		'id' => 'twitter-url',
		'label'   => __( 'Your Twitter URL', 'advanced-magazine' ),
		'section' => $section,
		'type'    => 'text',
		'default' => '',		
	);	

	$options['google-plus-url'] = array(
		'id' => 'google-plus-url',
		'label'   => __( 'Your Google+ URL', 'advanced-magazine' ),
		'section' => $section,
		'type'    => 'text',
		'default' => '',		
	);	

	$options['youtube-url'] = array(
		'id' => 'youtube-url',
		'label'   => __( 'Your YouTube URL', 'advanced-magazine' ),
		'section' => $section,
		'type'    => 'text',
		'default' => '',		
	);	

	$options['linkedin-url'] = array(
		'id' => 'linkedin-url',
		'label'   => __( 'Your LinkedIn URL', 'advanced-magazine' ),
		'section' => $section,
		'type'    => 'text',
		'default' => '',		
	);	

	$options['pinterest-url'] = array(
		'id' => 'pinterest-url',
		'label'   => __( 'Your Pinterest URL', 'advanced-magazine' ),
		'section' => $section,
		'type'    => 'text',
		'default' => '',		
	);	

	$options['rss-url'] = array(
		'id' => 'rss-url',
		'label'   => __( 'Your RSS feed URL', 'advanced-magazine' ),
		'section' => $section,
		'type'    => 'text',
		'default' => '',		
	);	
		
	//$options['example-range'] = array(
	//	'id' => 'example-range',
	//	'label'   => __( 'Example Range Input', 'advanced-magazine' ),
	//	'section' => $section,
	//	'type'    => 'range',
	//	'input_attrs' => array(
	//      'min'   => 0,
	//        'max'   => 10,
	//        'step'  => 1,
	//       'style' => 'color: #0a0',
	//	)
	//);

	// Adds the sections to the $options array
	$options['sections'] = $sections;

	// Adds the panels to the $options array
	$options['panels'] = $panels;

	$customizer_library = Customizer_Library::Instance();
	$customizer_library->add_options( $options );

	// To delete custom mods use: customizer_library_remove_theme_mods();

}
add_action( 'init', 'customizer_library_demo_options' );