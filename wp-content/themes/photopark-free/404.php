<?php get_header(); ?>

<?php   if(get_option('mytheme_contact_bag')!=""){$contact_bag=get_option('mytheme_contact_bag');}else{$contact_bag = get_bloginfo('template_url')."/images/top.jpg";}
	    
 ?>
<div class="ny1" style="background:url(<?php echo $contact_bag; ?>) no-repeat center;"></div><div class="ny3">
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
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
     
     <div class="yb3">
         <h3><?php the_title(); ?></h3>
        
         <div class="enter"> <p>404错误，抱歉，您链接的页面已经被删除或者修改。</p></div>
     </div>
            <?php endwhile; endif; ?>
</div>
<?php get_footer(); ?>