<?php
/**
 * The template used to display Tag Archive pages
 *
 * 
 */
get_header(); ?>
<!--contact content start-->
<div class="page-info-container">
  <div class="container_24">
    <div class="grid_24">
      <div class="page_info">
        <?php if ( have_posts() ) : ?>
        <?php if (function_exists('figero_breadcrumbs')) figero_breadcrumbs(); ?> 
      </div>
    </div>
    <div class="clear"></div>
  </div>
</div>
<div class="strip_line"></div>
<div class="content-container">
  <div class="container_24">
    <div class="grid_24">
      <div class="content-main">
        <div class="grid_16 alpha">
          <!--Start content Wrapper-->
          <div class="content-wrapper">
            <?php get_template_part( 'loop', 'index' ); ?>
            <div class="clear"></div>
            <nav id="nav-single"> <span class="nav-previous">
              <?php next_posts_link( __( '&larr; Older posts', 'figero' ) ); ?>
              </span> <span class="nav-next">
              <?php previous_posts_link( __( 'Newer posts &rarr;', 'figero' ) ); ?>
              </span> </nav>
          </div>
          <!--End content Wrapper-->
          <?php endif; ?>
        </div>
        <!--Start Sidebar-->
        <?php get_sidebar(); ?>
        <!--End Sidebar-->
      </div>
    </div>
    <div class="clear"></div>
  </div>
</div>
<!--contact content end-->
<?php get_footer(); ?>
