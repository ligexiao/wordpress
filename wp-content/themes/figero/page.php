<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the wordpress construct of pages
 * and that other 'pages' on your wordpress site will use a
 * different template.
 *
 */
get_header();
?>
<!--contact content start-->
<div class="page-info-container">
    <div class="container_24">
        <div class="grid_24">
            <div class="page_info">
                <?php if (have_posts())
                    
                    ?>
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
                        <div class="content-info">
                            <?php if (have_posts()) while (have_posts()) : the_post(); ?>
                                    <h1 class="page-heading"><?php the_title(); ?></h1>
                                    <?php the_content(); ?>
                                    <div class="clear"></div>
                                    <?php wp_link_pages(array('before' => '<div class="page-link"><span>' . 'Pages:' . '</span>', 'after' => '</div>')); ?>
                                    <?php edit_post_link('Edit', '', ''); ?>
                            <?php endwhile; ?>
                        </div>

                        <!--Start Comment Section-->
                    <?php comments_template(); ?>
                        <!--End comment Section-->
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
