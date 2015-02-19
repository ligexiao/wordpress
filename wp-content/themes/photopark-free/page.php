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
       
         <div class="enter"> <?php the_content(); ?></div>
          <div class="lysdrsd"><?php if ( comments_open() ){ comments_template();} ?></div>
     </div>
     
    
            <?php endwhile; endif; ?>
</div>
<?php get_footer(); ?>