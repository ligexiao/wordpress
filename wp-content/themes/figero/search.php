<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package WordPress
 * 
 */
get_header();
?>
<!--contact content start-->
<div class="page-info-container">
    <div class="container_24">
        <div class="grid_24">
            <div class="page_info">   
<?php if (function_exists('figero_breadcrumbs'))
    figero_breadcrumbs(); ?> 
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
                        <?php if (have_posts()) : ?>
                            <h1><?php printf(__('Search Results for: %s', 'figero'), '' . get_search_query() . ''); ?></h1>
                            <!--Start Post-->
                            <?php get_template_part('loop', 'search'); ?>
                            <!--End Post-->
<?php else : ?>
                            <article id="post-0" class="post no-results not-found">
                                <header class="entry-header">
                                    <h1 class="entry-title">
    <?php _e('Nothing Found', 'figero'); ?>
                                    </h1>
                                </header>
                                <!-- .entry-header -->
                                <div class="entry-content">
                                    <p>
                                    <?php _e('Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'figero'); ?>
                                    </p>
    <?php get_search_form(); ?>
                                </div>
                                <!-- .entry-content -->
                            </article>
                                <?php endif; ?>
                        <div class="clear"></div>
                        <nav id="nav-single"> <span class="nav-previous">
                                <?php next_posts_link(__('&larr; Older posts', 'figero')); ?>
                            </span> <span class="nav-next">
<?php previous_posts_link(__('Newer posts &rarr;', 'figero')); ?>
                            </span> </nav>
                    </div>
                    <!--End content Wrapper-->
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
