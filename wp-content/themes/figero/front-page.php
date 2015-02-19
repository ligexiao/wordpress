<?php
/*
  /**
 * The main front page file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query. 
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * 
 */
?>
<?php get_header(); ?>
<div class="second-header">
    <div class="container_24">
        <div class="grid_24">
            <!--start slider-->
            <div class="slider-main">
                <div id="slides">
                    <div id="slide-box">
                        <div class="slides_container col-full" >
                            <!--Start Slide1-->
                            <div class="slide" >
                                <!-- // End $type IF Statement -->
                                <div class="entry">
                                    <?php if (figero_get_option('figero_slideheading1') != '') { ?>
                                        <h2><?php echo stripslashes(figero_get_option('figero_slideheading1')); ?></h2>
                                    <?php } else { ?>
                                        <h2><?php _e( 'Your Main Heading comes right here.', 'figero' ); ?></h2>
                                    <?php } ?>
                                    <?php if (figero_get_option('figero_slidedescription1') != '') { ?>
                                        <p><?php echo stripslashes(figero_get_option('figero_slidedescription1')); ?></p>
                                    <?php } else { ?>
                                        <p><?php _e( 'Well, Here it come, a Theme which enables you to built your website in few clicks. Whats even more Amazing you can setup literally everything using simple to use options panel.', 'figero' ); ?></p>
                                    <?php } ?>
                                    <a class="btn-1" href="<?php
                                    if (figero_get_option('figero_slidel_r_1') != '') {
                                        echo stripslashes(figero_get_option('figero_slidel_r_1'));
                                    } else {
                                        echo "#";
                                    }
                                    ?>">
                                        <span><?php
                                       if (figero_get_option('figero_slidel_rb_1') != '') {
                                           echo figero_get_option('figero_slidel_rb_1');
                                       } else {
                                           echo "Read More";
                                       }
                                    ?></span></a>
                                        <?php if ((figero_get_option('figero_slideheading1') != '') && (figero_get_option('figero_slidel_lb_1') == '' ))  { ?>
                                        <?php }
                                        else { ?>
                                    <a class="btn-2" href="<?php
                                            if (figero_get_option('figero_slidel_l_1') != '') {
                                                echo stripslashes(figero_get_option('figero_slidel_l_1'));
                                            } else {
                                                echo "#";
                                            }
                                    ?>">
                                        <span><?php
                                       if (figero_get_option('figero_slidel_lb_1') != '') {
                                           echo stripslashes(figero_get_option('figero_slidel_lb_1'));
                                       } else {
                                           echo "Learn More";
                                       }
                                    ?></span></a> 
                                        <?php } ?>
                                </div>
                                 <?php
                                        //The strpos funtion is comparing the strings to allow uploading of the Videos & Images in the Slider
                                        $mystring1 = figero_get_option('figero_slideimage1');
                                        $value_img = array('.jpg', '.png','.jpeg','.gif','.bmp','.tiff','.tif');
                                        $check_img_ofset=0;
                                         foreach($value_img as $get_value)
                                         {
                                         if (preg_match("/$get_value/", $mystring1))
                                         {
                                        $check_img_ofset=1;
                                         }
                                         }     
                                        // Note our use of ===.  Simply == would not work as expected
                                        // because the position of 'a' was the 0th (first) character.
                                       ?>
                                        <?php if ( figero_get_option('figero_slideimage1') !='' ) { ?>
                                        <?php if ($check_img_ofset == 0) { ?>
                                        <div class="video"><?php echo figero_get_option('figero_slideimage1'); ?></div>
					<?php }else { ?>
					<div class="images"><img src="<?php echo figero_get_option('figero_slideimage1'); ?>"  alt="" /></div>
					<?php } } else { ?>
					<div class="images"><img src="<?php echo get_template_directory_uri(); ?>/images/image1.png" alt="" /></div>
                                        <?php } ?>					
                            </div>            
               
                            <!--End slide -->
                        </div>
                        <!-- /.slides_container -->
                    </div>
                    <!-- /#slide-box -->
                </div>
            </div>
        </div>
        <div class="clear"></div>
    </div>
</div>
<div class="strip_line"></div>
<!--end slider-->
<div class="index-container first_featured">
    <div class="container_24">
        <div class="grid_24">
            <div class="feature-index">
                <div class="grid_12 alpha">
                    <div class="feature-one">
                        <?php if (figero_get_option('figero_headline1') != '') { ?>
                            <h1><?php echo stripslashes(figero_get_option('figero_headline1')); ?></h1>
                        <?php } else { ?>
                            <h1><?php _e( 'Easy & Simple to use Theme', 'figero' ); ?></h1>
                        <?php } ?>
                        <?php if (figero_get_option('figero_feature1') != '') { ?>
                            <p><?php echo stripslashes(figero_get_option('figero_feature1')); ?></p>
                        <?php } else { ?>
                            <p><?php _e( 'Figero Theme (for Wordpress) makes it easy to build informational websites with Maximum Revenue using awesome Home Page. Different Business types can use the Theme to tell about their products or services in easiest possible ways. Website building is now simpler then everbefore.', 'figero' ); ?></p>

                        <?php } ?>
                    </div>
                </div>
                <div class="grid_12 omega">
                    <div  class="testimonial_holder">
                        <div  class="sliderHolder2">
                            <?php if (figero_get_option('figero_headline2') != '') { ?>
                            <h1><?php echo stripslashes(figero_get_option('figero_headline2')); ?></h1>
                            <?php } else { ?>
                            <h1><?php _e( 'Clients Testimonial', 'figero' ); ?> </h1>
                                <?php } ?>                            
                            <ul>
                                <li class="testimonial-list">
                                    <div class="testimonial_jcarousel">
                                        <?php if (figero_get_option('figero_testo_image1') != '') { ?>
                                            <img src="<?php echo stripslashes(figero_get_option('figero_testo_image1')); ?>" width="100px" height="100px" alt="small_image"/>
                                        <?php } else { ?>
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/neeraj.jpg" width="100px" height="100px" alt="small_image"/>
                                        <?php } ?>
                                        <?php if (figero_get_option('figero_testo_desc1') != '') { ?>
                                            <p><?php echo stripslashes(figero_get_option('figero_testo_desc1')); ?></p>
                                        <?php } else { ?>

                                            <p><?php _e( 'Using Figero Theme, I turned a .com domain into a rocking website, which my customers love to visit all the time. I feel like a rockstar myself.', 'figero' ); ?>"
											<br/>
                                            <?php _e( 'Neeraj Agarwal', 'figero' ); ?></p>
                                        <?php } ?>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="container-strip"></div>
</div>
<!--start content-->
<div class="index-container">
    <div class="container_24">
        <div class="grid_24">
              <div class="content">
                <div class="feature-content one_half">
                    <?php if (figero_get_option('figero_featured_img_1') != '') { ?>
                        <img class="feature-image" src="<?php echo stripslashes(figero_get_option('figero_featured_img_1')); ?>" alt="small_image" />
                    <?php } else { ?>
                        <img class="feature-image" src="<?php echo get_template_directory_uri(); ?>/images/2.png" alt="small_image" />
                    <?php } ?>
                    <div class="inner-content">
                        <?php if (figero_get_option('figero_featured_h_1') != '') { ?>
                            <h3><?php echo stripslashes(figero_get_option('figero_featured_h_1')); ?></h3>
                        <?php } else { ?>
                            <h3><?php _e( 'What Figero Theme Do??', 'act' ); ?></h3>
                        <?php } ?>
                        <?php if (figero_get_option('figero_featured_1') != '') { ?>
                            <p><?php echo stripslashes(figero_get_option('figero_featured_1')); ?></p>
                        <?php } else { ?>
                            <p><?php _e( 'Product Developers/ Internet Marketer make more sales when they can easily display their products with the buy links in the perfect location. Act theme with good design principal boosts your sales figure. Works as a great Landing Page as well.', 'act' ); ?></p>
                        <?php } ?>
                    </div>
                </div>
                <div class="feature-content one_half last">
                    <?php if (figero_get_option('figero_featured_img_2') != '') { ?>
                        <img class="feature-image" src="<?php echo stripslashes(figero_get_option('figero_featured_img_2')); ?>" alt="small_image" />
                    <?php } else { ?>
                        <img class="feature-image" src="<?php echo get_template_directory_uri(); ?>/images/6.png" alt="small_image" />
                    <?php } ?>
                    <div class="inner-content">
                        <?php if (figero_get_option('figero_featured_h_2') != '') { ?>
                            <h3><?php echo stripslashes(figero_get_option('figero_featured_h_2')); ?></h3>
                        <?php } else { ?>
                            <h3><?php _e( 'Easy to use Options Panel', 'act' ); ?></h3>
                        <?php } ?>
                        <?php if (figero_get_option('figero_featured_2') != '') { ?>
                            <p><?php echo stripslashes(figero_get_option('figero_featured_2')); ?></p>
                        <?php } else { ?>
                            <p><?php _e( 'You can easily setup individual pages for different products with different Paypal Links. So, you can develop a website where you can enable single/multiusers to sell different products at same place without any hassles.', 'act' ); ?></p>
                        <?php } ?>
                    </div>
                </div>

                <div class="feature-content one_half">
                    <?php if (figero_get_option('figero_featured_img_3') != '') { ?>
                        <img class="feature-image" src="<?php echo stripslashes(figero_get_option('figero_featured_img_3')); ?>" alt="small_image" />
                    <?php } else { ?>
                        <img class="feature-image" src="<?php echo get_template_directory_uri(); ?>/images/7.png" alt="small_image" />
                    <?php } ?>
                    <div class="inner-content">
                        <?php if (figero_get_option('figero_featured_h_3') != '') { ?>
                            <h3><?php echo stripslashes(figero_get_option('figero_featured_h_3')); ?></h3>
                        <?php } else { ?>
                            <h3><?php _e( 'Fully Featured Admin Panel', 'act' ); ?></h3>
                        <?php } ?>
                        <?php if (figero_get_option('figero_featured_3') != '') { ?>
                            <p><?php echo stripslashes(figero_get_option('figero_featured_3')); ?></p>
                        <?php } else { ?>
                            <p><?php _e( 'No more messing around with theme files or hunting for the right plugin to place your Paypal code or adjust theme settings. Act Themes admin panel makes everything so easier and simpler like never before.', 'act' ); ?></p>
                        <?php } ?>
                    </div>
                </div>
                <div class="feature-content one_half last">
                    <?php if (figero_get_option('figero_featured_img_4') != '') { ?>
                        <img class="feature-image" src="<?php echo stripslashes(figero_get_option('figero_featured_img_4')); ?>" alt="small_image" />
                    <?php } else { ?>
                        <img class="feature-image" src="<?php echo get_template_directory_uri(); ?>/images/5.png" alt="small_image" />
                    <?php } ?>
                    <div class="inner-content">
                        <?php if (figero_get_option('figero_featured_h_4') != '') { ?>
                            <h3><?php echo stripslashes(figero_get_option('figero_featured_h_4')); ?></h3>
                        <?php } else { ?>
                            <h3><?php _e( 'Super Fast Load Times', 'act' ); ?></h3>
                        <?php } ?>
                        <?php if (figero_get_option('figero_featured_4') != '') { ?>
                            <p><?php echo stripslashes(figero_get_option('figero_featured_4')); ?></p>
                        <?php } else { ?>
                            <p><?php _e( "Figero Theme is optimized to load super fast, helping to reduce visitor bounce rates. With site load time now being used as a ranking factor, you'll never have to worry about your site getting hit with a Google performance penalty.", 'act' ); ?></p>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="clear"></div>
    </div>
</div>
<!--end content-->
<!--start box-->
<!--end box-->
<?php get_footer(); ?>
