<?php

include_once get_template_directory() . '/functions/figero-functions.php';
$functions_path = get_stylesheet_directory() . '/functions/';
/* These files build out the options interface.  Likely won't need to edit these. */
require_once ($functions_path . 'admin-functions.php');  // Custom functions and plugins
require_once ($functions_path . 'admin-interface.php');  // Admin Interfaces (options,framework, seo)
/* These files build out the theme specific options and associated functions. */
require_once ($functions_path . 'theme-options.php');   // Options panel settings and custom settings
require_once ($functions_path . 'themes-page.php');
?>
<?php

/* ----------------------------------------------------------------------------------- */
/* jQuery Enqueue */
/* ----------------------------------------------------------------------------------- */

function figero_wp_enqueue_scripts() {
    if (!is_admin()) {
        wp_enqueue_script('actthemes-ddsmoothmenu', get_stylesheet_directory_uri() . '/js/ddsmoothmenu.js', array('jquery'));
        wp_enqueue_script('actthemes-slides', get_stylesheet_directory_uri() . '/js/slides.min.jquery.js', array('jquery'));
        wp_enqueue_script('actthemes-jcarouselite', get_stylesheet_directory_uri() . '/js/jcarousellite_1.0.1.js', array('jquery'));
        wp_enqueue_script('actthemes-tipsy', get_stylesheet_directory_uri() . '/js/jquery.tipsy.js', array('jquery'));
        wp_enqueue_script('actthemes-zoombox', get_stylesheet_directory_uri() . '/js/zoombox.js', array('jquery'));
        wp_enqueue_script('actthemes-custom', get_stylesheet_directory_uri() . '/js/custom.js', array('jquery'));
        if (is_singular() && comments_open() && get_option('thread_comments')) {
            wp_enqueue_script('comment-reply');
        }
    } elseif (is_admin()) {
        
    }
}

add_action('wp_enqueue_scripts', 'figero_wp_enqueue_scripts');

//Front Page Rename
$get_status = figero_get_option('re_nm');
$get_file_ac = get_template_directory() . '/front-page.php';
$get_file_dl = get_template_directory() . '/front-page-hold.php';
//True Part
if ($get_status === 'off' && file_exists($get_file_ac)) {
    rename("$get_file_ac", "$get_file_dl");
}
//False Part
if ($get_status === 'on' && file_exists($get_file_dl)) {
    rename("$get_file_dl", "$get_file_ac");
}

function figero_get_option($name) {
    $options = get_option('figero_options');
    if (isset($options[$name]))
        return $options[$name];
}

//
function figero_update_option($name, $value) {
    $options = get_option('figero_options');
    $options[$name] = $value;
    return update_option('figero_options', $options);
}

//
function figero_delete_option($name) {
    $options = get_option('figero_options');
    unset($options[$name]);
    return update_option('figero_options', $options);
}

//Add plugin notification 
require_once(get_template_directory() . '/functions/plugin-activation.php');
require_once(get_template_directory() . '/functions/inkthemes-plugin-notify.php');
add_action('tgmpa_register', 'inkthemes_plugins_notify');
?>