<?php
/**
 * The template for displaying Archive pages.
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 *
 */
?>
<?php get_header(); ?>
<!--contact content start-->
<div class="page-info-container">
    <div class="container_24">
        <div class="grid_24">
            <div class="page_info">
                <?php if (have_posts()): ?>
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
                            <h1 class="page-heading">
                                <?php if (is_day()) : ?>
                                    <?php printf(__('Daily Archives: %s', 'figero'), get_the_date()); ?>
                                <?php elseif (is_month()) : ?>
                                    <?php printf(__('Monthly Archives: %s', 'figero'), get_the_date('F Y')); ?>
                                <?php elseif (is_year()) : ?>
                                    <?php printf(__('Yearly Archives: %s', 'figero'), get_the_date('Y')); ?>
                                <?php else : ?>
                                    <?php _e('Blog Archives', 'figero'); ?>
                            <?php endif; ?>
                            </h1>
                            <?php
                            /* Since we called the_post() above, we need to
                             * rewind the loop back to the beginning that way
                             * we can run the loop properly, in full.
                             */
                            rewind_posts();
                            /* Run the loop for the archives page to output the posts.
                             * If you want to overload this in a child theme then include a file
                             * called loop-archives.php and that will be used instead.
                             */
                            get_template_part('loop', 'archive');
                            ?>
                            <div class="clear"></div>
                            <nav id="nav-single"> <span class="nav-previous">
                                    <?php next_posts_link(__('&larr; Older posts', 'figero')); ?>
                                </span> <span class="nav-next">
                                <?php previous_posts_link(__('Newer posts &rarr;', 'figero')); ?>
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
