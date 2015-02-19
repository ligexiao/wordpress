<!-- Start the Loop. -->
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="blog-info" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <div class="content-info">
                <h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
                        <?php the_title(); ?>
                    </a></h1>
                <p class="light"><?php _e('Posted by', 'figero'); ?><b>
                        <?php the_author_posts_link(); ?>
                    </b>&nbsp;<?php _e('at', 'figero'); ?>&nbsp;<?php echo get_the_time('M') ?></p>
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
                        <P><b><?php _e('Category:','figero'); ?>&nbsp;',</b>
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
    <?php endwhile;
else:
    ?>
    <div class="blog-info">
        <p>
    <?php _e('Sorry, no posts matched your criteria.', 'figero'); ?>
        </p>
    </div>
<?php endif; ?>
<!--End Loop-->
