<?php get_header(); ?>

<?php   if(get_option('mytheme_contact_bag')!=""){$contact_bag=get_option('mytheme_contact_bag');}else{$contact_bag = get_bloginfo('template_url')."/images/top.jpg";}
	    
 ?>
<div class="ny1" style="background:url(<?php echo $contact_bag; ?>) no-repeat center;"></div>
<div class="ny3">
     <div class="zb">
        
        <?php get_sidebar(); ?>
      
         
     </div>
     
     <div class="yb">
         <?php $cat2 = get_query_var('cat');
		       $category2 = get_category($cat2); ?>
         <h3> <?php echo $category2->name . ' <b>'.$category2->slug  .' </b>'.category_description($cat2)?> </h3>
         
           <?php $posts = query_posts($query_string . '&orderby=date&showposts=8'); ?>
         <div class="k5">
         <?php if( $posts ) : ?><!--------判断如果有文章-------->
         <?php foreach( $posts as $post ) : setup_postdata( $post ); ?><!-------------循环开始----------->
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
         <?php endforeach; ?>                                           <!----------结束循环-------------->
         <?php else : ?> 
         <?php endif; ?>
              <div class="fy"><?php par_pagenavi(); ?></div>
         </div>
     </div>
</div>
<?php get_footer(); ?>
