<?php
// 加载主题的各种外置文件 css  js
function cimy_uef_register_init_css() {
if ( !is_admin()) {
	
	   wp_deregister_script('jquery');
	   wp_register_script( 'jquery', "http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js", false);
	   wp_enqueue_script('jquery');
	     wp_deregister_script('easing');
	   wp_register_script( 'easing', get_template_directory_uri() ."/js/jquery.easing.1.3.js", false);
	   wp_enqueue_script('easing');
	  

	    // 加载  lazyload
	   wp_deregister_script('lazyload');
	   wp_register_script( 'lazyload', get_template_directory_uri() ."/js/jquery.lazyload.js");
	   wp_enqueue_script('lazyload');
	   
	   wp_deregister_script('png');
	   wp_register_script( 'png', get_template_directory_uri() ."/png/pngtm.js");
	   wp_enqueue_script('png');
	   
	  
	   
	  
	     wp_deregister_script('script');
	   wp_register_script( 'script', get_template_directory_uri() ."/js/script.js");
	   wp_enqueue_script('script');

		wp_deregister_style('pages');
	   wp_register_style( 'pages', get_template_directory_uri() ."/css/zdy1.css");
	   wp_enqueue_style('pages');
	    wp_deregister_style('stylesheet');
	   wp_register_style( 'stylesheet', get_template_directory_uri() ."/style.css");
	   wp_enqueue_style('stylesheet');
	
	  if( !is_front_page() || !is_home()) {
		   
	
	  
} 

	
	}}

add_action('wp_print_styles', 'cimy_uef_register_init_css');

remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'start_post_rel_link');
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'adjacent_posts_rel_link');



	?>