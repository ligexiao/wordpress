<div class="ym4">
      <?php
	        	 $case2= get_option('mytheme_case2');
				 $case2_bt_b1=get_option('mytheme_case2_bt_b1');
		         $case2_bt_a=get_option('mytheme_case2_bt_a');
				 $case2_bt_b2=get_option('mytheme_case2_bt_b2');
				 $case2_bt_p=get_option('mytheme_case2_bt_p');
      ?>
      <h3>
         <span id="bt_case2"> <b><?php  if($case2_bt_b1!=""){echo $case2_bt_b1;}else {echo '最新';}; if($case2_bt_a!=""){echo '<a>'.$case2_bt_a.'</a>';}else {echo '<a>客片摄影</a>';} 
		 if($case2_bt_b2!=""){echo $case2_bt_b2;}else {echo '大赏';}
		  ?>
         
         </b>
         <p><?php if($case2_bt_p!=""){echo $case2_bt_p;}else {echo 'NEW COUPLES SHOW CASE';} ?></p>
         </span>
          <div class="ck2"><a class="ck_more" href="<?php echo get_category_link($case2);  ?>"> MORE ></a></div>
      </h3>
      <!-- content S -->
      <?php $posts = get_posts( "category=($case2)&numberposts=3" ); ?>      
      <div class="ym4_1">
      <?php if( $posts ) : ?>                                       
	  <?php foreach( $posts as $post ) : setup_postdata( $post ); ?>      
             <div class="a5">
				 <div class="pic">
                      <?php 
					  $tit= get_the_title();
					if (has_post_thumbnail()) { the_post_thumbnail('case2-post-thumb' ,array('alt'	=>$tit, 'title'=> $tit ));}else{echo '<img width="290"  height="422"src="'.get_bloginfo('template_url').'/images/nopic.gif " />';} ?>
                      <a href="<?php the_permalink() ?>">
                           <div class="zi">
                               <p>post time:20<?php the_time('y-m-d') ?></p>
                               <h2><?php echo mb_strimwidth(get_the_title(), 0, 30,"...") ?></h2>
                           </div>
                      </a>
                 </div>
			 </div>
      <?php endforeach; ?>                                               
      <?php else : ?>
      <?php endif; ?> 
	  </div>
</div>