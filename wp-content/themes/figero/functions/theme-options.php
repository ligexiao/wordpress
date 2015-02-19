<?php

add_action('init', 'of_options');
if (!function_exists('of_options')) {

    function of_options() {
// VARIABLES
        $themename = function_exists('wp_get_theme') ? wp_get_theme() : get_current_theme();
        $themename = $themename['Name'];
        $shortname = "of";
// Populate OptionsFramework option in array for use in theme
        global $of_options;
        $of_options = figero_get_option('of_options');
        $file_rename = array("on" => "On", "off" => "Off");
        //Option for on off
        $full_col = array("on" => "On", "off" => "Off");
        $cols_three = array("on" => "On", "off" => "Off");
        $multicheck_defaults = array("one" => "1", "five" => "1");
// Background Defaults
        $background_defaults = array('color' => '', 'image' => '', 'repeat' => 'repeat', 'position' => 'top center', 'attachment' => 'scroll');
// Pull all the categories into an array
        $options_categories = array();
        $options_categories_obj = get_categories();
        foreach ($options_categories_obj as $category) {
            $options_categories[$category->cat_ID] = $category->cat_name;
        }
// Pull all the pages into an array
        $options_pages = array();
        $options_pages_obj = get_pages('sort_column=post_parent,menu_order');
        $options_pages[''] = 'Select a page:';
        foreach ($options_pages_obj as $page) {
            $options_pages[$page->ID] = $page->post_title;
        }
// If using image radio buttons, define a directory path
        $imagepath = get_stylesheet_directory_uri() . '/images/';
        $options = array(
            array("name" => "General Settings",
                "type" => "heading"),
            //Cuscom Logo
            array("name" => "Custom Logo",
                "desc" => "Choose your own logo. Optimal Size: 170px Wide by 30px Height",
                "id" => "figero_logo",
                "type" => "upload"),
            //Custom Favicon
            array("name" => "Custom Favicon",
                "desc" => "Specify a 16px x 16px image that will represent your website's favicon.",
                "id" => "figero_favicon",
                "type" => "upload"),
            array("name" => "Front Page On/Off",
                "desc" => "If the front page option is active then home page will appear otherwise blog page will display.",
                "id" => "re_nm",
                "std" => "on",
                "type" => "radio",
                "options" => $file_rename),
//****=============================================================================****//
//****-----------This code is used for creating slider settings--------------------****//							
//****=============================================================================****//						
            array("name" => "Top Feature Area",
                "type" => "heading"),
            //First slider
            array("name" => "Feature Heading",
                "desc" => "Enter the Heading",
                "id" => "figero_slideheading1",
                "std" => "",
                "type" => "textarea"),
            array("name" => "Feature Description",
                "desc" => "Enter description",
                "id" => "figero_slidedescription1",
                "std" => "",
                "type" => "textarea"),
            array("name" => "Text For First Button",
                "desc" => "Enter the Text for First Button.",
                "id" => "figero_slidel_rb_1",
                "std" => "",
                "type" => "text"),
            array("name" => "Link For First Button",
                "desc" => "Enter the Link URL for First Button.",
                "id" => "figero_slidel_r_1",
                "std" => "",
                "type" => "text"),
            array("name" => "Text For Second Button",
                "desc" => "Enter the Text for Second Button.",
                "id" => "figero_slidel_lb_1",
                "std" => "",
                "type" => "text"),
            array("name" => "Link For Second Button",
                "desc" => "Enter the Link URL for Second Button.",
                "id" => "figero_slidel_l_1",
                "std" => "",
                "type" => "text"),
            array("name" => "Feature Image",
                "desc" => "Choose your image to your feature area. Optimal Size: 516px x 300px",
                "id" => "figero_slideimage1",
                "std" => "",
                "type" => "upload"),
//****====================================================================****//
//****-----This code is used for homepage first featured section----------****//							
//****====================================================================****//
            array("name" => "Homepage Two Cols",
                "type" => "heading"),
            //First fearure heading  
            array("name" => "Left Column Heading",
                "desc" => "Enter your heading line for left column.",
                "id" => "figero_headline1",
                "std" => "",
                "type" => "textarea"),
            //First feature content
            array("name" => "Left Column Description",
                "desc" => "Enter your feature content for left column.",
                "id" => "figero_feature1",
                "std" => "",
                "type" => "textarea"),
            //Testimonial Heading
            array("name" => "Right Column Heading",
                "desc" => "Enter your heading line for right column.",
                "id" => "figero_headline2",
                "std" => "",
                "type" => "textarea"),
            //First client testimonial image
            array("name" => "Right Column Image",
                "desc" => "Choose image for right column section.",
                "id" => "figero_testo_image1",
                "std" => "",
                "type" => "upload"),
            //First client testimonial description
            array("name" => "Right Column Description",
                "desc" => "Enter description for right column section.",
                "id" => "figero_testo_desc1",
                "std" => "",
                "type" => "textarea"),
//****====================================================================****//
//****-----This code is used for homepage second featured section---------****//							
//****====================================================================****//
            //Second Feature Section start
            array("name" => "Homepage Featured Section",
                "type" => "heading"),
            //First section image
            array("name" => "First Feature Section Image",
                "desc" => "Choose your image for first feature section.",
                "id" => "figero_featured_img_1",
                "std" => "",
                "type" => "upload"),
            //First section heading
            array("name" => "First Feature Section Heading",
                "desc" => "Enter your text heading for first feature section.",
                "id" => "figero_featured_h_1",
                "std" => "",
                "type" => "textarea"),
            //First section 
            array("name" => "First Feature Section Description",
                "desc" => "Enter your content for first feature section descriptions.",
                "id" => "figero_featured_1",
                "std" => "",
                "type" => "textarea"),
            //Second Section Separetor
            array("name" => "Second Feature Section.",
                "type" => "saperate",
                "class" => "saperator"),
            //Second section image
            array("name" => "Second Feature Section Image",
                "desc" => "Choose your image for second feature section.",
                "id" => "figero_featured_img_2",
                "std" => "",
                "type" => "upload"),
            //Second section heading
            array("name" => "Second Feature Section Heading",
                "desc" => "Enter your text heading for second feature section.",
                "id" => "figero_featured_h_2",
                "std" => "",
                "type" => "textarea"),
            //Second section 
            array("name" => "Second Feature Section Description",
                "desc" => "Enter your content for second feature section descriptions.",
                "id" => "figero_featured_2",
                "std" => "",
                "type" => "textarea"),
            //Third Section Separetor
            array("name" => "Third Feature Section.",
                "type" => "saperate",
                "class" => "saperator"),
            //Third section image
            array("name" => "Third Feature Section Image",
                "desc" => "Choose your image for third feature section.",
                "id" => "figero_featured_img_3",
                "std" => "",
                "type" => "upload"),
            //Third section heading
            array("name" => "Third Feature Section Heading",
                "desc" => "Enter your text heading for third feature section.",
                "id" => "figero_featured_h_3",
                "std" => "",
                "type" => "textarea"),
            //Third section 
            array("name" => "Third Feature Section Description",
                "desc" => "Enter your content for third feature section descriptions.",
                "id" => "figero_featured_3",
                "std" => "",
                "type" => "textarea"),
            //Fourth Section Separetor
            array("name" => "Fourth Feature Section.",
                "type" => "saperate",
                "class" => "saperator"),
            //Fourth section image
            array("name" => "Fourth Feature Section Image",
                "desc" => "Choose your image for fourth feature section.",
                "id" => "figero_featured_img_4",
                "std" => "",
                "type" => "upload"),
            //Fourth section heading
            array("name" => "Fourth Feature Section Heading",
                "desc" => "Enter your text heading for fourth feature section.",
                "id" => "figero_featured_h_4",
                "std" => "",
                "type" => "textarea"),
            //Fourth section 
            array("name" => "Fourth Feature Section Description",
                "desc" => "Enter your content for fourth feature section descriptions.",
                "id" => "figero_featured_4",
                "std" => "",
                "type" => "textarea"),
//****=============================================================================****//
//****-----------This code is used for creating color styleshteet options----------****//							
//****=============================================================================****//				
            array("name" => "Styling Options",
                "type" => "heading"),
            array("name" => "Custom CSS",
                "desc" => "Quickly add some CSS to your theme by adding it to this block.",
                "id" => "figero_customcss",
                "std" => "",
                "type" => "textarea"));
        figero_update_option('of_template', $options);
        figero_update_option('of_themename', $themename);
        figero_update_option('of_shortname', $shortname);
    }

}
?>
