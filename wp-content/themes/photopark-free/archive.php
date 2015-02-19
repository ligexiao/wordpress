<?php get_header(); ?>

<div id="wap">
 
<div class="mbx_nav"> 
           <b>您现在的位置：</b><?php if( is_front_page() || is_home()) {echo "<a>首页</a>";}else{if (function_exists('get_breadcrumbs')){get_breadcrumbs();}}?>
        </div>
   


    <div class="left_mian" id="profilel">

        <div class="left_tit"> 
            <b class="left_t"><h1><?php wp_title(''); ?></h1></b>
           
        </div>
   
    
    
        <ul class="theme_list" id="bbslsit">

 <?php
 
  $posts = query_posts($query_string . '&showposts=10orderby=title&order=asc'); ?>   
   <?php if (have_posts()) : while (have_posts()) : the_post(); ?> 
           <?php
    $title = get_the_title();
    $content = mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0,200,"......");
    $keys = explode(" ",$s);
    $title = preg_replace('/('.implode('|', $keys) .')/iu','<b style="font-weight:700;color: #ff5a00;">\0</b>',$title);
    $content = preg_replace('/('.implode('|', $keys) .')/iu','<b style="font-weight:700;color: #ff5a00;">\0</b>',$content);
?>             
        <li class="fisttheme" id="blog">
             <?php if( is_sticky() ):?>
                <?php else : ?>
             <div class="list_test">
                 <h2> <a  target="_blank"  href="<?php the_permalink() ?>"><?php echo $title; ?> </a>
               
               
                 </h2>
                    <span class="right">
                    <a class="vist" title="已有<?php if(function_exists('the_views')) { the_views(); } ?>次查看"><?php if(function_exists('the_views')) { the_views(); } ?></a>
                   <a class="pinglun" title="已有<?php comments_number('0', '1', '% ' );?>次回复"><?php comments_number('0', '1', '% ' );?></a>
                 
                   </span>
                  
                 
                 <p class="bbscate"><?php echo $content;?></p>
                 
                  <?php


                      $SoImages  = '~<img [^\>]*\ />~';
                      preg_match_all($SoImages,$post->post_content,$Images);
                      $PictureAmount=count($Images[0]);
					 
                     if(empty($PictureAmount)):
				      ?> 
                  
                       <?php else : ?>
                         <div class="pic01">
                          <?php   for($i=0;$i<$PictureAmount;$i++){ echo  '<a>'.$Images[0][$i].'</a>'  ;}?>  
                            </div>
                         <?php  endif; ?>                      
                 
                 
                 <p> <?php the_category() ?></p>
                
              </div>
            
          </li>
    	
          <?php  endif; ?>                      
                  
    <?php endwhile; ?>     


	<?php else : ?>
      
         
       
      <img src="<?php bloginfo('template_url'); ?>/images/wrong.png" alt="呃，还没有您想要的内容，我们会全力补充的">
       
     
     
        <?php  endif; ?>      	
         
 
                  
     
         
  
  
        </ul>
        
       <div id="pager" class="bbspaper"><?php par_pagenavi();wp_reset_query(); ?> </div>              
        
  
    
         
        
    
    </div>







     <div class="right_mian" id="profilel">		 <?php get_template_part( 'sidebar7', 'themes' ); ?></div>
</div>

	


<?php get_footer(); ?>
