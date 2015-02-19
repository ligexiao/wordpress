<?php 

              $team= get_option('mytheme_team');
			  if(get_option('mytheme_teams_pic') !=""){$teams_pic =' style="background:url('. get_option('mytheme_teams_pic').') no-repeat center;"';}
			  if($team_nmber!=""){$team_nmber= get_option('mytheme_team_nmber');}else{$team_nmber ="18";}
			
      ?>

<div class="ym5" >
    
     <div class="ym5_1"<?php echo $teams_pic ?> >
     <div class="ck3"><a class="ck_more" href="<?php echo get_category_link($team);  ?>"> MORE ></a></div></div>
     <?php $posts = get_posts( "category=($team)&numberposts=$team_nmber" ); ?>      
     <div class="ym5_2">
     <?php if( $posts ) : ?>                                        
	 <?php foreach( $posts as $post ) : setup_postdata( $post ); ?>     
          <div class="c1">
              <h2><a href="<?php the_permalink() ?>?iframe=true&amp;width=75%&amp;height=100%" rel="prettyPhoto[iframe]"><?php the_title(); ?></a></h2>
              <p><?php  echo get_post_meta($post->ID, 'opinion7', true);?> </p>
               <div class="pic"><a href="<?php the_permalink() ?>?iframe=true&amp;width=75%&amp;height=100%" rel="prettyPhoto[iframe]">
                   <?php  $tit= get_the_title();
					if (has_post_thumbnail()) { the_post_thumbnail('team-post-thumb' ,array('alt'	=>$tit, 'title'=> $tit ));}else{echo '<img width="82"  height="82"src="'.get_bloginfo('template_url').'/images/ct4.jpg " />';} ?></a>
              </div>
          </div>
     <?php endforeach; ?>                                              
     <?php else : ?>
     <?php endif; ?>
     </div>     
 <div class="ym5_3"></div>
</div>