<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>" />
        <title>
            <?php
            /*
             * Print the <title> tag based on what is being viewed.
             */
            wp_title('|', true, 'right');
            ?>
        </title>
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
        <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>" />        
        <!--[if gte IE 9]>
                <script type="text/javascript">
                        Cufon.set('engine', 'canvas');
                </script>
        <![endif]-->
        <?php
        wp_head();
        ?>
    </head>
    <body <?php body_class(); ?>>
        <!--start container-->
        <div class="header-container">
            <div class="container_24">
                <div class="grid_24">
                    <div class="header">
                        <div class="grid_6 logo alpha">
                            <div class="logo">
                                <?php if (figero_get_option('figero_logo') != '') { ?>
                                <a href="<?php echo esc_url(home_url()); ?>"><img src="<?php echo figero_get_option('figero_logo'); ?>" alt="<?php bloginfo('name'); ?>" /></a> 
                                <?php } else { ?>
                                <div class="site-meta">
                                <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
                                <h4 class="site-description"><?php bloginfo('description'); ?></h4>   
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="grid_18 omega">
                            <div class="navigation">
                                <?php figero_nav(); ?>
                            </div>
                        </div>
                    </div>
                    <!--End Header-->
                </div>
                <div class="clear"></div>
            </div>
        </div>
        <div class="clear"></div>
        <div class="top_strip"></div>
