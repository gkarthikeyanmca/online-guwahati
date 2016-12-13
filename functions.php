<?php
	// 1. customize ACF path
	add_filter('acf/settings/path', 'my_acf_settings_path');
	 
	function my_acf_settings_path( $path ) {	 
	    // update path
	    $path = get_stylesheet_directory() . '/inc/acfp/';	    
	    // return
	    return $path;	    
	}	 

	// 2. customize ACF dir
	add_filter('acf/settings/dir', 'my_acf_settings_dir');	 
	function my_acf_settings_dir( $dir ) {	 
	    // update path
	    $dir = get_stylesheet_directory_uri() . '/inc/acfp/';	    
	    // return
	    return $dir;	    
	}	 

	// 3. Hide ACF field group menu item
	//add_filter('acf/settings/show_admin', '__return_false');

	// 4. Include ACF
	include_once( get_stylesheet_directory() . '/inc/acfp/acf.php' );

	add_theme_support('menus');
	add_theme_support('post-thumbnails');

	add_image_size( 'home-tab-image', 360, 192, true );
	add_image_size( 'home-blog-image', 360, 240, true );
	add_image_size( 'blog-single', 1200, 400, true );
	add_image_size( 'contact-us-image', 820, 150, true );
	add_image_size( 'blog-archive-image', 800, 350, true );
	
	register_nav_menus( 
		array( 
			'primary_menu' => 'Primary Menu',
			'footer_menu' => 'Footer Menu',
			'important_links' => 'Important Links'
		)
	);

	if( function_exists('acf_add_options_page') ) {	 	
	 	// add parent
		$parent = acf_add_options_page(array(
			'page_title' 	=> 'Site Settings',
			'menu_title' 	=> 'Site Settings',
			'parent_slug'	=> 'themes.php',
			'redirect' 		=> false
		));		
	}

	function custom_excerpt_length( $length ) {
	    return 30;
	}
	add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

	function custom_menu_classes($classes, $item, $args) {
  		if($args->theme_location == 'important_links') {
    		$classes[] = 'list-group-item';
  		}
  		return $classes;
	}
	add_filter('nav_menu_css_class','custom_menu_classes',1,3);
?>