<?php  $news1= get_option('mytheme_news1');
        $news1_bt_b1=get_option('mytheme_news1_bt_b1');
		$news1_bt_a=get_option('mytheme_news1_bt_a');
		$news1_bt_p=get_option('mytheme_news1_bt_p');

 ?>
<div class="ym6">
     <div class="ym6_1">
          <div class="c2">
               <h2> 
           <span id="bt_case2"> <b><?php  if($news1_bt_b1!=""){echo $news1_bt_b1;}else {echo '最新';}; if($news1_bt_a!=""){echo '<a>'.$news1_bt_a.'</a>';}else {echo '<a>行业新闻</a>';} 
		  ?>
         </b>
         <p><?php if($news1_bt_p!=""){echo $news1_bt_p;}else {echo 'INDUSTRY NEWS';} ?></p>
         </span>
         
         </h2>
               
               <div class="c2_1">
               <?php  $posts = get_posts( "category=($news1)&numberposts=6" );
                     if( $posts ) :
              $counter = 0;foreach( $posts as $post ) : setup_postdata( $post );$counter++;  ?>      
                      <?php if ($counter == 1 && get_query_var('paged') < 2):?> 
                    <div class="d1">
                        <div class="pic">
                            <a href="<?php the_permalink() ?>">
                              <?php  $tit= get_the_title();
					if (has_post_thumbnail()) { the_post_thumbnail('news-post-thumb' ,array('alt'	=>$tit, 'title'=> $tit ));}else{echo '<img width="95"  height="69"src="'.get_bloginfo('template_url').'/images/ct5.jpg " />';} ?> 
                              
                            </a>
                        </div>
                        <div class="d1_1">
                             <div class="e1">posttime:20<?php the_time('y/m/d') ?></div>
                             <h3><a href="<?php the_permalink() ?>"><?php echo mb_strimwidth(get_the_title(), 0, 22,"...") ?></a></h3>
                             <p><a href="<?php the_permalink() ?>"><?php echo mb_strimwidth(strip_tags(apply_filters('the_content',$post->post_content)),  0,54,"..."); ?></a></p>
                        </div>
                    </div>
              <?php else : ?> 
               
                    <div class="d2">
                         <h3><a href="<?php the_permalink() ?>"><?php echo mb_strimwidth(get_the_title(), 0, 30,"...") ?></a></h3>
                         <div class="e2">20<?php the_time('y/m/d') ?></div>
                    </div>
                  <?php endif; ?>
               <?php endforeach; ?>                                              
               <?php else : ?>
               <?php endif; ?>
               </div>
          </div>
           <?php  $news2= get_option('mytheme_news2');
                     $news2_bt_b1=get_option('mytheme_news2_bt_b1');
		             $news2_bt_a=get_option('mytheme_news2_bt_a');
		             $news2_bt_p=get_option('mytheme_news2_bt_p');

 ?>
          <div class="c3">
               <h2>
             <span id="bt_case2"> <b><?php  if($news2_bt_b1!=""){echo $news2_bt_b1;}else {echo '最新';}; if($news2_bt_a!=""){echo '<a>'.$news2_bt_a.'</a>';}else {echo '<a>公司动态</a>';} 
		  ?>
         </b>
         <p><?php if($news2_bt_p!=""){echo $news2_bt_p;}else {echo 'COMPANY NEWS';} ?></p>
         </span>
               
               </h2>
           

               <?php $posts = get_posts( "category=($news2)&numberposts=3" ); ?>       
               <div class="c3_1">
               <?php if( $posts ) : ?>                                      
	           <?php foreach( $posts as $post ) : setup_postdata( $post ); ?>     
                   <div class="e4">
                        <div class="pic">
                            <a href="<?php the_permalink() ?>">
                                <?php  $tit= get_the_title();
					if (has_post_thumbnail()) { the_post_thumbnail('news-post-thumb' ,array('alt'	=>$tit, 'title'=> $tit ));}else{echo '<img width="95"  height="69"src="'.get_bloginfo('template_url').'/images/ct5.jpg " />';} ?> 
                            </a>
                        </div>
                        <div class="e4_1">
                            <div class="sj">posttime:20<?php the_time('y/m/d') ?></div>
                            <h3><a href="<?php the_permalink() ?>"><?php echo mb_strimwidth(get_the_title(), 0,24,"...") ?></a></h3>
                            <p><a href="<?php the_permalink() ?>"><?php echo mb_strimwidth(strip_tags(apply_filters('the_content',$post->post_content)),  0,74,"..."); ?></a></p>
                        </div>
                   </div>
               <?php endforeach; ?>                                                <!----------结束循环-------------->
               <?php else : ?>
               <?php endif; ?>
               </div>
          </div>
     </div>
</div>