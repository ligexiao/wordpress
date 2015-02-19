 <?php  $case1= get_option('mytheme_case1');
	 $case1_pic= get_option('mytheme_case1_pic');
	
		  ?>  
<div class="ym3">
     <div class="a3">
         
        
          <h3><img width="174" height="241" src="<?php if($case1_pic!=""){ echo $case1_pic; } else{echo get_bloginfo('template_url').'/images/bt3.png';} ;?> " /></h3>
          <?php
           $posts = get_posts( "category=($case1)&numberposts=4" ); ?>       
          <div class="a3_1">
          <?php if( $posts ) : ?>                                       
		  <?php foreach( $posts as $post ) : setup_postdata( $post ); ?>    
               <div class="b2">
                    <?php  
					 $tit= get_the_title();
					 
					if (has_post_thumbnail()) { the_post_thumbnail('case1-post-thumb' ,array('alt'	=>$tit, 'title'=> $tit ));}else{echo '<img src="'.get_bloginfo('template_url').'/images/nopic.gif " />';} ?>
                    <a title="<?php echo $tit;?>" href="<?php the_permalink() ?>"></a>
               </div>
          <?php endforeach; ?>                                               
          <?php else : ?>
          <?php endif; ?> 
          </div>
     </div>
</div>
