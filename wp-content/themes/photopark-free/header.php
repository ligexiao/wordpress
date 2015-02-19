<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<meta name="viewport" content="width=device-width, initial-scale=1" />	
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <meta name="keywords" content=" <?php
    // 如果是首页和文章列表页面
    if(is_front_page() || is_home()) { 
	echo get_option('mytheme_keywords');} else if( is_page()) {
        if(get_post_meta($post->ID, "关键字",true)){
		echo get_post_meta($post->ID, "关键字",true);}
		else{
		echo get_post_meta($post->ID, "关键字",true);
		}
	} else if(is_single()) {
  if(get_post_meta($post->ID, "关键字",true)){
		 if(get_post_meta($post->ID, "关键字",true)){
		echo get_post_meta($post->ID, "关键字",true);}
		else{
			echo get_option('mytheme_keywords');
		}
		}
	// 如果是类目页面, 显示类目表述
	} else if(is_category()) {

	echo get_option('mytheme_keywords');
	
 
	// 如果是搜索页面, 显示搜索表述
	} else if(is_search()) {
		echo get_option('mytheme_keywords');
 
	// 如果是标签页面, 显示标签表述
	} else if(is_tag()) {
		echo get_option('mytheme_keywords');
 
	// 如果是日期页面, 显示日期范围描述
	} else if(is_date()) {
	echo get_option('mytheme_keywords');
 
	// 其他页面显示博客标题
	} else {
		echo get_option('mytheme_keywords');
	}
?>  
    " />
 <meta name="description" content="
<?php		
 // 如果是首页和文章列表页面
	if(is_front_page() || is_home()) { 
	echo get_option('mytheme_description');
 
	// 如果是文章详细页面和独立页面
	}
 else if(is_page() ) {
		if(get_post_meta($post->ID, "描述",true)){
		echo get_post_meta($post->ID, "描述",true);}
		else{
			echo  substr(strip_tags($post->post_content), 0, 420);
		}
	// 如果是类目页面, 显示类目表述
	} 
	 else if(is_single() ) {
		 if(get_post_meta($post->ID, "描述",true)){
		echo get_post_meta($post->ID, "描述",true);}
		else{
			echo  substr(strip_tags($post->post_content), 0, 420);
		}
	
	// 如果是类目页面, 显示类目表述
	} else if(is_category()) {
		echo   get_option('mytheme_description');
	// 如果是搜索页面, 显示搜索表述
	} else if(is_search()) {
		echo   get_option('mytheme_description'); 
	// 如果是标签页面, 显示标签表述
	} else if(is_tag()) {
		echo   get_option('mytheme_description');
	// 如果是日期页面, 显示日期范围描述
	} else if(is_date()) {
	echo   get_option('mytheme_description');
	// 其他页面显示博客标题
	} else {
		echo   get_option('mytheme_description');
	}
?>
" />
	<?php if (is_search()) { ?>
	   <meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>

	<title>
		   <?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("找到标签  &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo '  - '; }
		      elseif (is_search()) {
		         echo '找到信息 &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo '没有找到您的信息 - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged;echo ' - '; bloginfo('description'); }
		   ?>
          
	</title>
	<?php $logo= get_option('mytheme_logo') ;
	        $ico= get_option('mytheme_ico');
	
	?>
	<link rel="shortcut icon" href="<?php echo $ico; ?>" type="image/x-icon" />
    <?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?><?php wp_head(); ?>
	<script src="<?php bloginfo('template_url'); ?>/png/pngtm.js" type="text/javascript"></script>
    <script type="text/javascript">
        DD_belatedPNG.fix('div, ul, img, li, input , a , textarea , ol , p , span , h1 , h2 , h3 , h4 , h5');
		  $(document).ready(function() {
		 $("a[rel^='prettyPhoto']").prettyPhoto({social_tools:false});
    });
    </script>

    
    
	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

	<?php wp_head(); ?>
	
</head>

<body <?php body_class(); ?>>
<div id="page-wrap">
    <div id="header">
        <div id="top">
            <div class="logo"><a href="<?php bloginfo('url'); ?>"><img src="<?php if($logo !=""){ echo $logo; }else{echo get_bloginfo('template_url').'/images/logo.png';}?>" /></a></div>
            <div id="navigation" ><?php wp_nav_menu(array( 'theme_location' => 'header-menu' ) ); ?></div>
        </div>
    </div>