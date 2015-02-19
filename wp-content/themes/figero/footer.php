<div class="clear"></div>
<!--start footer-->
<div class="main-footer">
    <div class="container_24">
        <div class="grid_24">
            <?php
            /* A sidebar in the footer? Yep. You can can customize
             * your footer with four columns of widgets.
             */
            get_sidebar('footer');
            ?>
        </div>
        <div class="clear"></div>
    </div>
</div>
<div class="bottom-footer-container">
    <div class="container_24">
        <div class="grid_24">
            <div class="bottom-footer">
                <ul class="social_logos">
                    <?php if (figero_get_option('figero_facebook') != '') { ?>
                        <li>
                            <a title="Share on facebook" href="<?php echo esc_url(figero_get_option('figero_facebook')); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/link-1.png"></a>
                        </li>
                    <?php } else {
                        
                    }
                    ?>
                    <?php if (figero_get_option('figero_twitter') != '') { ?>
                        <li>
                            <a title="Tweet This" href="<?php echo esc_url(figero_get_option('figero_twitter')); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/link-2.png"></a>
                        </li>
                    <?php } else {
                        
                    }
                    ?>
                        <?php if (figero_get_option('figero_linked') != '') { ?>
                        <li>
                            <a title="Share on Linkedin" href="<?php echo esc_url(figero_get_option('figero_linked')); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/link-3.png"></a>
                        </li>
                    <?php } else {
                        
                    }
                    ?>
                    <?php if (figero_get_option('figero_rss') != '') { ?>
                        <li>
                            <a title="Rss feed" href="<?php echo esc_url(figero_get_option('figero_rss')); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/link-5.png"></a>
                        </li>
                <?php } else {
                    
                }
                ?>
                </ul>
                <?php if (figero_get_option('figero_cright') != '') { ?>
                    <span class="copyright"><?php echo figero_get_option('figero_cright'); ?></span>
<?php } else { ?>
                    <span class="copyright"><a href="http://www.inkthemes.com">Figero Theme</a> Powered By <a href="http://www.wordpress.org">WordPress</a></span>
<?php } ?>
            </div>
        </div>
    </div>
</div>
<!--footer close-->
<!--end container-->
<?php wp_footer(); ?>
</body></html>