<?php get_header(); ?>

<?php   if(get_option('mytheme_contact_bag')!=""){$contact_bag=get_option('mytheme_contact_bag');}else{$contact_bag = get_bloginfo('template_url')."/images/top.jpg";}
	    
 ?>
<div class="ny1" style="background:url(<?php echo $contact_bag; ?>) no-repeat center;"></div>
<div class="ny3">
     <div class="zb">
        
        <?php get_sidebar(); ?>
      
         
     </div>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
     
     <div class="yb3">
         <h3><?php the_title(); ?></h3>
         <div class="xw1">
              <div class="xw1_1">发布作者：<?php echo  get_the_author(); ?></div>  
              <div class="xw1_3">发布时间：<?php  $times= get_the_time('y-m-d');echo $times; ?></div>
         </div>
         <div class="enter"> <?php the_content(); ?></div>
           <div class="lysdrsd"><?php if ( comments_open() ){ comments_template();} ?></div>
     </div>
            <?php endwhile; endif; ?>
</div>
<?php get_footer(); ?>