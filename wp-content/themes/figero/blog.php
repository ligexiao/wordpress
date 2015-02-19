<?php
/*
  Template Name: Blog Page
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
                        <?php
                        $limit = get_option('posts_per_page');
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        // The Query                      
                        $the_query = new WP_Query();
                        $the_query->query( 'showposts='.$limit.'&paged='.$paged );
                        ?>
                        <!-- Start the Loop. -->
                        <?php if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
                                <div class="blog-info" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                    <div class="content-info">
                                        <h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
                                        <p class="light"><?php _e('Posted by', 'figero'); ?> <b>
                                        <?php the_author_posts_link(); ?>
                                            </b>&nbsp;<?php _e('at', 'figero'); ?>&nbsp;<?php echo the_time('F jS, Y') ?></p>
                                            <?php if ((function_exists('has_post_thumbnail')) && (has_post_thumbnail())) { ?>
                                            <a href="<?php the_permalink(); ?>">
                                            <?php the_post_thumbnail('post_thumbnail', array('class' => 'postimg')); ?>
                                            </a>
                                        <?php } else { ?>
                                            <a href="<?php the_permalink() ?>"><?php echo figero_main_image(547, 221); ?></a>
                                            <?php
                                        }
                                        ?>

                                        <?php the_excerpt(); ?>
                                        <div class="clear"></div>
                                        <?php wp_link_pages(array('before' => '<div class="page-link"><span>' . 'Pages:' . '</span>', 'after' => '</div>')); ?>
                                         <?php edit_post_link('Edit', '', ''); ?>

                                    </div>
                                    <div class="page_category">
                                    <?php if (has_category()) { ?>
                                            <div class="cat"> <img  src="<?php echo get_template_directory_uri(); ?>/images/cat-img-1.png">
                                                <P><b><?php _e('Category:', 'figero'); ?>&nbsp;</b>
                                            <?php the_category(', '); ?>
                                                </P>
                                            </div>
                                            <?php } if (has_tag()) { ?>
                                            <div class="blog_tag"> <img  src="<?php echo get_template_directory_uri(); ?>/images/cat-img-2.png">
                                            <?php the_tags('Post Tagged with ', ', ', ''); ?>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                                    <?php endwhile; ?>
                            <nav id="nav-single"> <span class="nav-previous">
                                    <?php next_posts_link(__('&larr; Older posts', 'figero'),$the_query->max_num_pages); ?>
                                </span> <span class="nav-next">
                            <?php previous_posts_link(__('Newer posts &rarr;', 'figero')); ?>
                                </span> </nav>
                        <?php else: ?>
                            <div class="blog-info">
                                <p>
                        <?php _e('Sorry, no posts matched your criteria.', 'act'); ?>
                                </p>
                            </div>
                        <?php endif; ?>
                <?php wp_reset_postdata(); ?>
                        <!--End Loop-->
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
