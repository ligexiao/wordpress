 <?php $activities= get_option('mytheme_activities'); ?>    
<div class="ym2">
     <div class="ym2_1">
          <div class="a1">
          <!-- content S -->
	      <div id="demoContent">
		       <div class="effect" style="width:330px">
					<div class="leftLoop">
						<div class="bd">
                        <?php   $smaill1= get_option('mytheme_smaill1');
                                $smaill1_link1= get_option('mytheme_smaill1_link1');
								$smaill2= get_option('mytheme_smaill2');
                                $smaill1_link2= get_option('mytheme_smaill1_link2');
								$smaill3= get_option('mytheme_smaill3');
                                $smaill1_link3= get_option('mytheme_smaill1_link3');
						  ?>
							<ul class="picList">
								<?php if($smaill1 !=""){ echo '<li><a href="'.$smaill1_link1 .'"><img src="'.$smaill1.'" /></a></li>'; }
								                   else{echo '  <li><a href=""><img src="http://ww2.sinaimg.cn/large/afd49800gw1eeastd2bxdj20960dhq4w.jpg" /></a></li>';} 
												   
								      if($smaill2 !=""){ echo '<li><a href="'.$smaill1_link2 .'"><img src="'.$smaill2.'" /></a></li>'; }
								                   else{echo '  <li><a href=""><img src="http://ww1.sinaimg.cn/large/afd49800gw1eeastb8fb8j20960dh3zu.jpg" /></a></li>';} 
									  if($smaill3 !=""){ echo '<li><a href="'.$smaill1_link3 .'"><img src="'.$smaill3.'" /></a></li>'; }
								                   else{echo '  <li><a href=""><img src="http://ww2.sinaimg.cn/large/afd49800gw1eeastd2bxdj20960dhq4w.jpg" /></a></li>';} 					   
												   
												  
												  
												   ?>
                              
								
                                
                               
								
							</ul>
						</div>
                        <div class="hd">
							<ul><li>1</li><li>2</li><li>3</li></ul>
						</div>
                        <div class="gd1"><a class="prev" href="javascript: void(0)"></a></div>
                        <div class="gd2"><a class="next" href="javascript: void(0)"></a></div>
					</div>
					<script type="text/javascript">jQuery(".leftLoop").slide({ mainCell:".bd ul",effect:"leftLoop",vis:1,scroll:1,autoPlay:true});</script>
		        </div>

	      </div>
	      <!-- content E -->
          </div>
          
          <div class="a2">
        
               <h3>
                   <img src="<?php bloginfo('template_url'); ?>/images/bt1.jpg" />
                   <div class="ck"><a class="ck_more" href="<?php echo get_category_link($activities);  ?>"> MORE ></a></div>
               </h3>
               <?php $posts = get_posts( "category=($activities)&numberposts=3" ); ?>      
               <div class="a2_1">
               <?php if( $posts ) : ?>                                       
			   <?php foreach( $posts as $post ) : setup_postdata( $post ); ?>     
                    <div class="lie1">
                                                                                 
                             <h3 id="bt_activities"> <a href="<?php the_permalink() ?>"><?php echo mb_strimwidth(get_the_title(), 0, 34,"...") ?> </a></h3>
                             <p><?php echo mb_strimwidth(strip_tags(apply_filters('the_content',$post->post_content)),  0,240,"..."); ?></p>
                       
                        
                             <div class="b1">
                                   <?php  $time_event = get_post_meta($id, "time",true);
					       $times= get_the_time('y-m-d');
						   $linksa=get_permalink();
		                   $result =strtotime($time_event)-strtotime( get_the_time('y-m-d'));
				    if( $result >= 0 ){ echo '<a id="goon" href="'.$linksa.'"> 时间：20'.$times.'~20'.$time_event.'<strong>【火热进行中】</strong></a>';}
					else{ echo   '<a href="'.$linksa.'"> 时间：20'.$times.'~20'.$time_event.'<strong>【活动已经结束】</strong></a>';} ?>
                                    
                                    　　
                             </div>
                        
                           
                      
                    </div>
               <?php endforeach; ?>                                            
               <?php else : ?>
               <?php endif; ?> 
               </div>
          </div>
     </div>
</div>
