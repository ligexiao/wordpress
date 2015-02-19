<?php /**
 * The template for displaying Author pages.
 *
 */ ?>
<?php get_header(); ?>
<!--contact content start-->
<div class="page-info-container">
    <div class="container_24">
        <div class="grid_24">
            <div class="page_info">
                <?php if (have_posts()) : the_post(); ?>
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
                            <?php
                            /* Queue the first post, that way we know who
                             * the author is when we try to get their name,
                             * URL, description, avatar, etc.
                             *
                             * We reset this later so we can run the loop
                             * properly with a call to rewind_posts().
                             */
                            if (have_posts())
                                the_post();
                            ?>
                            <?php
                            // If a user has filled out their description, show a bio on their entries.
                            if (get_the_author_meta('description')) :
                                ?>
                                <div id="entry-author-info">
                                    <div id="author-avatar"> <?php echo get_avatar(get_the_author_meta('user_email'), apply_filters('inkthemes_author_bio_avatar_size', 60)); ?> </div>
                                    <!-- #author-avatar -->
                                    <div id="author-description">
                                        <h2><?php printf(__('About %s', 'figero'), get_the_author()); ?></h2>
                                    <?php the_author_meta('description'); ?>
                                    </div>
                                    <!-- #author-description	-->
                                </div>
                                <!-- #entry-author-info -->
                            <?php endif; ?>
                            <?php
                            /* Since we called the_post() above, we need to
                             * rewind the loop back to the beginning that way
                             * we can run the loop properly, in full.
                             */
                            rewind_posts();
                            /* Run the loop for the author archive page to output the authors posts
                             * If you want to overload this in a child theme then include a file
                             * called loop-author.php and that will be used instead.
                             */
                            get_template_part('loop', 'author');
                            ?>
                            <div class="clear"></div>
                            <nav id="nav-single"> <span class="nav-previous">
                                    <?php next_posts_link(__('&larr; Older posts', 'figero')); ?>
                                </span> <span class="nav-next">
                                    <?php previous_posts_link(__('Newer posts &rarr;', 'figero')); ?>
                                </span> </nav>
                        </div>
                        <!--End content Wrapper-->
                    </div>
                <?php endif; ?>
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
