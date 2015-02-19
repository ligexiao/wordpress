<?php
include_once("load.php"); 

get_template_part( 'xuanxiang' ); 

/*特色图片*/

register_nav_menus(
array(
'header-menu' => __( '菜单导航' ),
'footer-menu1' => __( '底部双层导航' ),
'link-menu2' => __( '友情链接' )
)
);

/*特色图片*/
if ( function_exists( 'add_theme_support' ) ) {add_theme_support( 'post-thumbnails' );}
if ( function_exists( 'add_image_size' ) ) {
    add_image_size( 'case1-post-thumb', 164, 239,true );
	add_image_size( 'case2-post-thumb', 290, 422,true );
	add_image_size( 'team-post-thumb', 82, 82,true );
	add_image_size( 'news-post-thumb', 95, 69,true );
	add_image_size( 'news-lest-thumb', 121, 88,true );
	add_image_size( 'news-sidbar-thumb', 238, 120,true );
	add_image_size( 'case-post-thumb', 310, 425,true );
    add_image_size( 'huodong-post-thumb', 205, 147,true );
	add_image_size( 'gallery-thumbb', 940, 1024,true );
		add_image_size( 'team-post-thumbb', 450, 450,true );
}



/*截取第一张图片*/
function catch_that_image() {
global $post, $posts;
$first_img = '';
ob_start();
ob_end_clean();
$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
$first_img = $matches [1] [0];
if(empty($first_img)){ //Defines a default image
$first_img = "这里添加默认图片的路径，文章中没有图片时显示";
}
return $first_img;
}
/*截取第一张图片 over*/	
function failed_login() {
    return '密码或者用户名错误';
}
add_filter('login_errors', 'failed_login');

/*分页函数*/
    add_action( 'admin_menu', 'my_page_excerpt_meta_box' );
    function my_page_excerpt_meta_box() {
        add_meta_box( 'postexcerpt', __('Excerpt'), 'post_excerpt_meta_box', 'page', 'normal', 'core' );
    }
	
	function par_pagenavi($range = 10){

global $paged, $wp_query;

if ( !$max_page ) {$max_page = $wp_query->max_num_pages;}

if($max_page > 1){if(!$paged){$paged = 1;}

if($paged != 1){echo "<a href='" . get_pagenum_link(1) . "' class='extend'

title='跳转到首页'> 返回首页 </a>";}

previous_posts_link(' 上一页 ');

if($max_page > $range){

if($paged < $range){for($i = 1; $i <= ($range + 1); $i++)

{echo "<a href='" . get_pagenum_link($i) ."'";

if($i==$paged)echo " class='current'";echo ">$i</a>";}}

elseif($paged >= ($max_page - ceil(($range/2)))){

for($i = $max_page - $range; $i <= $max_page; $i++){echo "<a href='" . get_pagenum_link($i) ."'";

if($i==$paged)echo " class='current'";echo ">$i</a>";}}

elseif($paged >= $range && $paged < ($max_page - ceil(($range/2)))){

for($i = ($paged - ceil($range/2)); $i <= ($paged + ceil(($range/2))); $i++)

{echo "<a href='" . get_pagenum_link($i) ."'";if($i==$paged) echo " class='current'";echo ">$i</a>";}}}

else{for($i = 1; $i <= $max_page; $i++){echo "<a href='" . get_pagenum_link($i) ."'";

if($i==$paged)echo " class='current'";echo ">$i</a>";}}

next_posts_link(' 下一页 ');

if($paged != $max_page){echo "<a href='" . get_pagenum_link($max_page) . "' class='extend'

title='跳转到最后一页'> 最后一页 </a>";}}

}
/*分页函数*/


//增强编辑器开始
add_editor_style('/css/editor-style.css');  
function add_editor_buttons($buttons) {

$buttons[] = 'fontselect';

$buttons[] = 'fontsizeselect';

$buttons[] = 'cleanup';

$buttons[] = 'styleselect';

$buttons[] = 'hr';

$buttons[] = 'del';

$buttons[] = 'sub';

$buttons[] = 'sup';

$buttons[] = 'copy';

$buttons[] = 'paste';

$buttons[] = 'cut';

$buttons[] = 'undo';

$buttons[] = 'image';

$buttons[] = 'anchor';

$buttons[] = 'backcolor';

$buttons[] = 'wp_page';

$buttons[] = 'charmap';

return $buttons;

}

add_filter("mce_buttons_3", "add_editor_buttons");

if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => 'Sidebar Widgets',
    		'id'   => 'sidebar-widgets',
    		'description'   => '这个主题的免费版本只提供WordPress默认的小工具，付费版本提供5种图文显示的多功能小工具，小工具显示在页面、分类和内页的左侧。',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	));
		
    }
	function unregister_default_wp_widgets() {
	unregister_widget('WP_Widget_Links');
	unregister_widget('WP_Widget_Meta');
	unregister_widget('WP_Widget_Search');
	unregister_widget('WP_Widget_RSS');
	unregister_widget('WP_Widget_Calendar');
	unregister_widget('WP_Widget_Recent_Comments');
	unregister_widget('WP_Widget_Categories');

}
add_action('widgets_init', 'unregister_default_wp_widgets', 1);
?>