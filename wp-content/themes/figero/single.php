<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query. 
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 */
?>
<?php get_header(); ?>
<!--contact content start-->
<div class="page-info-container">
    <div class="container_24">
        <div class="grid_24">
            <div class="page_info">
                <?php if (function_exists('figero_breadcrumbs'))
                    figero_breadcrumbs();
                ?> 
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
                        <?php if (have_posts())
                            while (have_posts()) : the_post();
                                ?>
                                <div class="blog-info">
                                    <div class="content-info"><h1><?php the_title(); ?></h1>
                                        <p class="light"><?php _e('Posted by', 'figero'); ?> <b>                 
                                        <?php the_author_posts_link(); ?>
                                            </b>&nbsp;at&nbsp;<?php echo the_time('F jS, Y') ?></p> 
                                        <?php the_content(); ?>
                                        <div class="clear"></div>
                                        <?php wp_link_pages(array('before' => '<div class="page-link"><span>' . 'Pages:' . '</span>', 'after' => '</div>')); ?>
                                        <?php edit_post_link('Edit', '', ''); ?>
                                    </div>
                                    <div class="category">
                                                <?php if (has_category()) { ?>
                                            <div class="cat"> <img  src="<?php echo get_template_directory_uri(); ?>/images/cat-img-1.png">
                                                <P><b><?php _e('Category:', 'figero'); ?></b>
                                            <?php the_category(', '); ?>
                                                </P>
                                            </div>
                                            <?php } if (has_tag()) { ?>
                                            <div class="blog_tag"> <img  src="<?php echo get_template_directory_uri(); ?>/images/cat-img-2.png">
                                            <?php the_tags('Post Tagged with ', ', ', ''); ?>
                                            </div>
                                            <?php } ?>
                                            </div>
                                            <div class="clear"></div>
                                            <?php if ('attachment' == get_post_type()) { ?>
                                        <nav id="nav-single">
                                            <span class="nav-previous">
                                                <?php previous_image_link(array('before' => '&larr;' . __('Pages:', 'figero'), 'after' => '')); ?>
                                            </span>
                                            <span class="nav-next">
                                        <?php next_image_link(array('before' => '' . __('Pages:', 'figero'), 'after' => '&rarr;')); ?>
                                            </span> 
                                        </nav>
                                            <?php } else { ?>
                                        <nav id="nav-single"> <span class="nav-previous">
                                                <?php previous_post_link('%link', __('<span class="meta-nav">&larr;</span> Previous Post ', 'figero')); ?>
                                            </span> <span class="nav-next">
                                        <?php next_post_link('%link', __('Next Post <span class="meta-nav">&rarr;</span>', 'figero')); ?>
                                            </span>
                                        </nav>
                                <?php } ?>
                                <?php endwhile; ?>
                            <div class="clear"></div>
                            <!--Start Comment Section-->
                        <?php comments_template(); ?>
                            <!--End comment Section-->
                        </div>
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
