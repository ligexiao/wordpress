<?php get_header(); ?>

<?php   if(get_option('mytheme_news_bag')!=""){$news_bag=get_option('mytheme_news_bag');}else{$news_bag ="http://ww1.sinaimg.cn/large/afd49800gw1eehhegz1wqj21hc0be41i.jpg";}
	    if(get_option('mytheme_news_nmbers') !==""){$news_nmbers = get_option('mytheme_news_nmbers');}else{$news_nmbers ="18";}
 ?>
<div class="ny1" style="background:url(<?php echo $news_bag; ?>) no-repeat center;"></div>
<div class="ny3">
     <div class="zb">
          <div class="k1">
          <?php    $cat = get_category_root_id(the_category_ID(false));
                   $category = get_category($cat);?>
          <h1><a href="<?php echo   get_category_link($cat) ; ?>">
           <?php echo $category->name . ' <b>'.$category->slug  .' </b>'?> </a></h1> 
           <p><?php echo category_description($cat)?> </p>
          </div>
          <ul class="nav_left"><?php  if ( get_category_children($cat) != "" ) {wp_list_categories("child_of=".$cat. "&depth=0&hide_empty=0&title_li="); }?></ul>
        <?php get_sidebar(); ?>
      
         
     </div>
     
     <div class="yb">
       
         <h3> <b><?php wp_title(''); ?></b><p>Search results</p> </h3>
         
        <?php $posts = query_posts($query_string . '&showposts=10orderby=title&order=asc'); ?>   
   <?php if (have_posts()) : while (have_posts()) : the_post(); ?> 
         <div class="k5">
      
              <div class="k5_1">
                   <div class="m1">
                        <div class="m1_1">20<?php the_time('y') ?></div>
                        <div class="m1_2"><?php the_time('m.d') ?></div>
                   </div>
                   <div class="m2">
                       <a href="<?php the_permalink() ?>">
                                 <?php  $tit= get_the_title();
					if (has_post_thumbnail()) { the_post_thumbnail('news-lest-thumb' ,array('alt'	=>$tit, 'title'=> $tit ));}else{echo '<img width="121"  height="88"src="'.get_bloginfo('template_url').'/images/ct5.jpg " />';} ?> 
                       </a>
                   </div>
                   <div class="m3">
                        <h2><a href="<?php the_permalink() ?>"><?php echo mb_strimwidth(get_the_title(), 0, 32,"...") ?></a></h2>
                        <p><?php echo mb_strimwidth(strip_tags(apply_filters('the_content',$post->post_content)),  0,130,"..."); ?></p>
                        <div class="m3_1"><a href="<?php the_permalink() ?>">点击了解更多</a></div>
                   </div>
              </div>
                                       <!----------结束循环-------------->
         <?php endwhile; ?>     


	<?php else : ?>
    <p>没找到搜索结果</p>
         
         <?php endif; ?>
              <div class="fy"><?php par_pagenavi(); ?></div>
         </div>
     </div>
</div>
<?php get_footer(); ?>
