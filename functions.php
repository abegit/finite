<?php

    $themename = "Finite";
    $shortname = "uns";
    
    /* functions to andale the options array  */
    
    function uns_get_formatted_page_array() { 
        global $suffusion_pages_array;
        if (isset($suffusion_pages_array) && $suffusion_pages_array != null) {
            return $suffusion_pages_array;
        }
        $ret = array();
        $pages = get_pages('sort_column=menu_order');
        if ($pages != null) {
            foreach ($pages as $page) {
                if (is_null($suffusion_pages_array)) {
                    $ret[$page->ID] = array ("title" => $page->post_title, "depth" => count(get_ancestors($page->ID, 'page')));
                }
            }
        }
        if ($suffusion_pages_array == null) {
            $suffusion_pages_array = $ret;
            return $ret;
        }
        else {
            return $suffusion_pages_array;
        }
     }
    
    function uns_get_category_array() { 
        global $suffusion_category_array;
        if (isset($suffusion_category_array) && $suffusion_category_array != null) {
            return $suffusion_category_array;
        }
        $ret = array();
        $args = array(
      'orderby' => 'name',
      'parent' => 0
      );
    $categories = get_categories( $args );
    if($categories != null){
        foreach ($categories as $category) {
                if (is_null($suffusion_category_array)) {
                    $ret[$category->cat_ID] = array ("name" => $category->name, "number" => $category->count);
                }
            }
        }
        
        if ($suffusion_category_array == null) {
            $suffusion_category_array = $ret;
            return $ret;
        }
        else {
            return $suffusion_category_array;
        }
     }
    
    function create_opening_tag($value) { 
        $group_class = "";
        if (isset($value['grouping'])) {
            $group_class = "suf-grouping-rhs";
        }
        echo '<div class="suf-section fix">'."\n";
        if ($group_class != "") {
            echo "<div class='$group_class fix'>\n";
        }
        if (isset($value['name'])) {
            echo "<h4>" . $value['name'] . "</h4>\n";
        }
        if (isset($value['desc']) && !(isset($value['type']) && $value['type'] == 'checkbox')) {
            echo $value['desc']."<br />";
        }
        if (isset($value['note'])) {
            echo "<span class=\"note\">".$value['note']."</span><br />";
        }
     }

    /**
     * Creates the closing markup for each option.
     *
     * @param $value
     * @return void
     */
    function create_closing_tag($value) { 
        if (isset($value['grouping'])) {
            echo "</div>\n";
        }
        //echo "</div><!-- suf-section -->\n";
        echo "</div>\n";
     }
        
    function create_suf_header_3($value) { echo '<h4 class="suf-header-3">'.$value['name']."</h4>\n"; }
        
    function create_section_for_image($value) { 
        create_opening_tag($value);
        $imgurl = "";
        if (get_option($value['id']) === FALSE) {
            $imgurl = $value['std'];
            echo 'Hey, No image';
        }
        else {
            $imgurl = get_option($value['id']);
            echo '<img src="'.$imgurl.'"  width="100%"/>';
        }
        echo '<div id="'.$value['id'].'" class="wpss-file">';
        echo '<input type="text" id="'.$value['id'].'" style="direction:rtl; width:100%;" name="'.$value['id'].'" value="'.$imgurl.'" class="wpss_text wpss-file" />';
        echo '<input type="button" id="'.$value['id'].'" value="Upload Image" class="wpss-filebtn" />';
        // echo '</div>'
        // create_closing_tag($value);
     }

     function create_section_for_text($value) { 
        create_opening_tag($value);
        $text = "";
        if (get_option($value['id']) === FALSE) {
            $text = $value['std'];
        }
        else {
            $imgurl = get_option($value['id']);
        }
        
        echo '<input type="text" id="'.$value['id'].'" placeholder="enter your title" name="'.$value['id'].'" value="'.$text.'" />'."\n";
        create_closing_tag($value);
     }

    function create_section_for_textarea($value) { 
        create_opening_tag($value);
        echo '<textarea name="'.$value['id'].'" type="textarea" cols="" rows="">'."\n";
        if ( get_option( $value['id'] ) != "") {
            echo get_option( $value['id'] );
        }
        else {
            echo $value['std'];
        }
        echo '</textarea>';
        create_closing_tag($value);
     }
    
    function create_section_for_color_picker($value) { 
        create_opening_tag($value);
        $color_value = "";
        if (get_option($value['id']) === FALSE) {
            $color_value = $value['std'];
        }
        else {
            $color_value = get_option($value['id']);
        }
     
        echo '<div class="color-picker">'."\n";
        echo '<input type="text" id="'.$value['id'].'" name="'.$value['id'].'" value="'.$color_value.'" class="color" />';
        echo ' « Click to select color<br/>'."\n";
        echo "<strong>Default: <font color='".$value['std']."'> ".$value['std']."</font></strong>";
        echo " (You can copy and paste this into the box above)\n";
        echo "</div>\n";
        create_closing_tag($value);
     }
    
    function create_section_for_radio($value) { 
        create_opening_tag($value);
        foreach ($value['options'] as $option_value => $option_text) {
            $checked = ' ';
            if (get_option($value['id']) == $option_value) {
                $checked = ' checked="checked" ';
            }
            else if (get_option($value['id']) === FALSE && $value['std'] == $option_value){
                $checked = ' checked="checked" ';
            }
            else {
                $checked = ' ';
            }
            echo '<div class="uns-radio"><input type="radio" name="'.$value['id'].'" value="'.
                $option_value.'" '.$checked."/>".$option_text."</div>\n";
        }
        create_closing_tag($value);
     }

    function create_section_for_multi_select($value) { 
        create_opening_tag($value);
        echo '<ul class="uns-checklist" id="'.$value['id'].'" >'."\n";
        foreach ($value['options'] as $option_value => $option_list) {
            $checked = " ";
            if (get_option($value['id']."_".$option_value)) {
                $checked = " checked='checked' ";
            }
            echo "<li>\n";
            echo '<input type="checkbox" name="'.$value['id']."_".$option_value.'" value="true" '.$checked.' class="depth-'.($option_list['depth']+1).'" />'.$option_list['title']."\n";
            echo "</li>\n";
        }
        echo "</ul>\n";
        create_closing_tag($value);
     }
    
    function create_section_for_category_select($page_section,$value) { 
        create_opening_tag($value);
        $all_categoris='';
            echo '<div class="wrap" id="'.$value['id'].'" >'."\n";
            echo '<h3>Theme Options</h3> '."\n" .'
                <p><strong>'.$page_section.':</strong></p>';
                echo "<select id='".$value['id']."' class='post_form' name='".$value['id']."' value='true'>\n";
                echo "<option id='all' value=''>All</option>";
            foreach ($value['options'] as $option_value => $option_list) {
                $checked = ' ';
                echo 'value_id=' . $value['id'] .' value_id=' . get_option($value['id']) . ' options_value=' . $option_value;
            if (get_option($value['id']) == $option_value) {
                $checked = ' checked="checked" ';
            }
            else if (get_option($value['id']) === FALSE && $value['std'] == $option_value){
                $checked = ' checked="checked" ';
            }
            else {
                $checked = '';
            }
                echo '<option value="'.$option_list['name'].'" class="level-0" '.$checked.' number="'.($option_list['number']).'" />'.$option_list['name']."</option>\n";
                //$all_categoris .= $option_list['name'] . ',';
            }   
            echo "</select>\n </div>";
            //echo '<script>jQuery("#all").val("'.$all_categoris.'")</\script>';
        create_closing_tag($value);
     }

    $options = array( 
        array("name" => "Header Customization",
                "type" => "sub-section-3",
                "category" => "header-styles",
        ),
        array("name" => "Header Image2",
                "desc" => "Set the image2 to use for the header background. ",
                "id" => $shortname."_header_background_image2",
                "type" => "image",
                "parent" => "header-styles",
                "std" => ""),
        array("name" => "Header Image",
                "desc" => "Set the image to use for the header background. ",
                "id" => $shortname."_header_background_image",
                "type" => "text",
                "parent" => "header-styles",
                "std" => ""),
        array("name" => "Body Background Settings",
                "type" => "sub-section-3",
                "category" => "body-styles",
        ),
        array("name" => "Body Background Color",
                "desc" => "Set the color of the background on which the page is. ",
                "id" => $shortname."_body_background_color",
                "type" => "color-picker",
                "parent" => "body-styles",
                "std" => "444444"),
        array("name" => "Sidebar Setup",
                "type" => "sub-section-3",
                "category" => "sidebar-setup",
        ),
        array("name" => "Sidebar Position",
                "id" => $shortname."_sidebar_alignment",
                "type" => "radio",
                "desc" => "Which side would you like your sidebar?",
                "options" => array("left" => "Left", "right" => "Right"),
                "parent" => "sidebar-setup",
                "std" => "right"),
        array("name" => "Navigation Bar Setup",
                "type" => "sub-section-3",
                "category" => "nav-setup",
        ),
        array("name" => "Pages to show in Navigation Bar",
                "desc" => "Select the pages you want to include. All pages are excluded by default",
                "id" => $shortname."_nav_pages",
                "type" => "multi-select",
                "options" => uns_get_formatted_page_array($shortname."_nav_pages"),
                "parent" => "nav-setup",
                "std" => "none"
        ),
        array("name" => "Analytics",
                "type" => "sub-section-3",
                "category" => "analytics-setup",
        ),
        array("name" => "Custom Google Analytics Tracking Code",
                "desc" => "Enter your tracking code here for Google Analytics",
                "id" => $shortname."_custom_analytics_code",
                "type" => "textarea",
                "parent" => "analytics-setup",
                "std" => ""
        ),
        array("name" => "category posts to show on the front page",
                "desc" => "Select the category you want to include. All pages are excluded by default",
                "id" => $shortname."_front_page_first_section",
                "type" => "select",
                "options" => uns_get_category_array($shortname."_nav_pages"),
                "parent" => "nav-setup",
                "std" => uns_get_category_array($shortname."_nav_pages")
        ),
        array("name" => "category posts to show on the front page below",
                "desc" => "Select the category you want to include. All pages are excluded by default",
                "id" => $shortname."_front_page_second_section",
                "type" => "select-2",
                "options" => uns_get_category_array($shortname."_nav_pages"),
                "parent" => "nav-setup",
                "std" => uns_get_category_array($shortname."_nav_pages")
        ),
     );
    
    function create_form($options) { 
        echo "<form id='options_form' method='post' name='form' >\n";
        foreach ($options as $value) {
            switch ( $value['type'] ) {
                case "sub-section-3":
                    create_suf_header_3($value);
                    break;

                case "image";
                    create_section_for_image($value);
                    break;
     
                case "text";
                    create_section_for_text($value);
                    break;
     
                case "textarea":
                    create_section_for_textarea($value);
                    break;
     
                case "multi-select":
                    create_section_for_multi_select($value);
                    break;
     
                case "radio":
                    create_section_for_radio($value);
                    break;
     
                case "color-picker":
                    create_section_for_color_picker($value);
                    break;
                case "select":
                    create_section_for_category_select('first section',$value);
                    break;
                case "select-2":
                    create_section_for_category_select('second section',$value);
                    break;
            }
        }
        
        ?> 
        <input name="save" type="button" value="Save" class="button" onclick="submit_form(this, document.forms['form'])" />
        <input name="reset_all" type="button" value="Reset to default values" class="button" onclick="submit_form(this, document.forms['form'])" />
        <input type="hidden" name="formaction" value="default" />
    
     <script> function submit_form(element, form){ 
                 form['formaction'].value = element.name;
                 form.submit();
             } </script>
    
        </form>
    <?php }  ?>
    
            
    
    <?php
   
add_action('admin_menu', 'mynewtheme_add_admin');   
function mynewtheme_add_admin() { 
    global $themename, $shortname, $options, $spawned_options;
 
    if ( $_GET['page'] == basename(__FILE__) ) {
        if ( 'save' == $_REQUEST['formaction'] ) {
            foreach ($options as $value) {
                if( isset( $_REQUEST[ $value['id'] ] ) ) {
                    update_option( $value['id'], $_REQUEST[ $value['id'] ]  );
                }
                else {
                    delete_option( $value['id'] );
                }
            }
 
            foreach ($spawned_options as $value) {
                if( isset( $_REQUEST[ $value['id'] ] ) ) {
                    update_option( $value['id'], $_REQUEST[ $value['id'] ]  );
                }
                else {
                    delete_option( $value['id'] );
                }
            }
            header("Location: themes.php?page=options.php&saved=true");
            die;
        }
        else if('reset_all' == $_REQUEST['formaction']) {
            foreach ($options as $value) {
                delete_option( $value['id'] );
            }
 
            foreach ($spawned_options as $value) {
                delete_option( $value['id'] );
            }
            header("Location: themes.php?page=options.php&".$_REQUEST['formaction']."=true");
            die;
        }
  }

add_theme_page($themename." Theme Options", "".$themename." Theme Options", 
        'edit_themes', basename(__FILE__), 'mynewtheme_admin'); }

function mynewtheme_admin() { 
    global $themename, $shortname, $options, $spawned_options, $theme_name;
 
    if ($_REQUEST['saved']) {
        echo '<div id="message" class="updated fade"><p><strong>'.$themename.' settings saved for this page.</strong></p></div>';
    }
    if ($_REQUEST['reset_all']) {
        echo '<div id="message" class="updated fade"><p><strong>'.$themename.' settings reset.</strong></p></div>';
    }
    ?>
<div class="wrap">
    <h3 style="text-align:center">Settings for <?php echo $themename; ?></h3>
    <div class="uns-options">
<?php create_form($options); ?>
    </div><!-- uns-options -->
</div><!-- wrap -->
<?php } 
// end function mynewtheme_admin()


////////// end


// wp_deregister_script( 'jquery' );
add_filter('show_admin_bar', '__return_false');

//custom fields for product posts
add_action( 'init', 'add_custom_fields_to_product' );
function add_custom_fields_to_product() {
add_post_type_support( 'product', 'custom-fields' );
}


/**
 * Redirect user after successful login.
 *
 * @param string $redirect_to URL to redirect to.
 * @param string $request URL the user is coming from.
 * @param object $user Logged user's data.
 * @return string
 */
//  function my_login_redirect( $redirect_to, $request, $user ) {
    //is there a user to check?
    // global $user;
    // if ( isset( $user->roles ) && is_array( $user->roles ) ) {
    //     //check for admins
    //     if ( in_array( 'administrator', $user->roles ) ) {
    //         // redirect them to the default place
    //         return $redirect_to;
    //     } if ( in_array( 'author', $user->roles ) ) {
    //         // redirect them to the default place
    //         return $redirect_to;
    //     } elseif ( in_array( 'customer', $user->roles ) ) {
    //         // redirect them to the default place
    //         return home_url().'/activity';
    //     } elseif ( in_array( 'subscriber', $user->roles ) ) {
    //         // redirect them to the default place
    //         return home_url().'/activity';
    //     } else {
    //         return home_url().'/activity';
    //     }
    // } else {
    //     return $redirect_to;
    // }
    // return home_url();
// }
// add_filter( 'login_redirect', 'my_login_redirect', 10, 3 );


add_filter('widget_text', 'do_shortcode');

if ( function_exists('register_sidebar') ) {
register_sidebar(array(
    'name'          =>  'Blog',
    'class'         => '',
    'before_widget' => '<li id="%1$s" class="widget %2$s">',
    'after_widget'  => '</li>',
    'before_title'  => '<h5>',
    'after_title'   => '</h5>',
    'id'            => 'sidebar-blog'
));

register_sidebar(array(
    'name'          => 'Leftbar',
    'class'         => 'leftbar',
    'before_widget' => '<li id="%1$s" class="widget %2$s">',
    'after_widget'  => '</li>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>',
    'id'            => 'sidebar-leftbar'
));
register_sidebar(array(
    'name'          => 'Rightbar',
    'class'         => 'rightbar',
    'before_widget' => '<li id="%1$s" class="widget %2$s">',
    'after_widget'  => '</li>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>',
    'id'            => 'sidebar-rightbar'
));
register_sidebar(array(
    'name'          => 'Newsletter',
    'class'         => 'newsletter',
    'before_widget' => '',
    'after_widget'  => '',
    'before_title'  => '',
    'after_title'   => '',
    'id'            => 'sidebar-newsletter'
));

register_sidebar(array(
    'name'          =>  'Home Footer',
    'class'         => 'home-footer',
    'before_widget' => '',
    'after_widget'  => '',
    'before_title'  => '<h5>',
    'after_title'   => '</h5>',
    'id'            => 'sidebar-homefooter'
));
register_sidebar(array(
    'name'          =>  'Store',
    'class'         => '',
    'before_widget' => '<li id="%1$s" class="widget %2$s">',
    'after_widget'  => '</li>',
    'before_title'  => '<h5>',
    'after_title'   => '</h5>',
    'id'            => 'sidebar-store'
));

register_sidebar(array(
    'name'          =>  'StoreSide',
    'class'         => '',
    'before_widget' => '<li id="%1$s" class="widget %2$s">',
    'after_widget'  => '</li>',
    'before_title'  => '<h5>',
    'after_title'   => '</h5>',
    'id'            => 'sidebar-storeside'
));
register_sidebar(array(
    'name'          =>  'Footer',
    'class'         => '',
    'before_widget' => '<li id="%1$s" class="widget %2$s columns large-3 small-6">',
    'after_widget'  => '</li>',
    'before_title'  => '<h5>',
    'after_title'   => '</h5>',
    'id'            => 'sidebar-footer'
));
}


function register_my_menus() {
  register_nav_menus(
    array(
      'main-menu' => __( 'Header Menu' )    )
  );
}
add_action( 'init', 'register_my_menus' );





function mp_cart_shortcode($atts) {
     mp_show_cart();
}
add_shortcode('mp-cart-shortcode', 'mp_cart_shortcode');



//disable ajax mp
if (function_exists('add_theme_support')) {
    add_theme_support('post-thumbnails');
        set_post_thumbnail_size(640, 145, true); // Normal post thumbnails
                add_image_size('block_1', 200, 200, true );
                add_image_size('left_image', 800, 1200, false );
                add_image_size('video', 290, 163, true );
                add_image_size('blog', 650, 290, true );
                add_image_size('blogsingle', 800, 350, true );          
}   


// Changing excerpt length
function new_excerpt_length($length) {
return 20;
}
add_filter('excerpt_length', 'new_excerpt_length');

// Changing excerpt more
function new_excerpt_more($more) {
return '<span class="btn"> Read More </span>';
}
add_filter('excerpt_more', 'new_excerpt_more');


    function custom_pagination( $html_id ) {
        global $wp_query; //sonar pagination

    $pages = ''; $range = 3;   /* handle pagination for post pages*/
        $showitems = ($range * 2)+1;  

        global $paged;
        if(empty($paged)) $paged = 1;

            if($pages == '')
            {
                global $wp_query;
                $pages = $wp_query->max_num_pages;
                if(!$pages)
                {
                $pages = 1;
                }
            }   

            if(1 != $pages)
            {
                echo "<div id=\"pagination\" class=\"pagination\"><span class=\"pre\">Page ".$paged." of ".$pages."</span>";
                if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a class=\"btn\" href='".get_pagenum_link(1)."'>&laquo; First</a>";
                if($paged > 1 && $showitems < $pages) echo "<a class=\"btn\" href='".get_pagenum_link($paged - 1)."'>&lsaquo; Previous</a>";

                for ($i=1; $i <= $pages; $i++)
                {
                    if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
                    {
                         echo ($paged == $i)? "<span class=\"current btn\">".$i."</span>":"<a href='".get_pagenum_link($i)."' class=\"inactive btn\">".$i."</a>";
                    }
                }

                if ($paged < $pages && $showitems < $pages) echo "<a href=\"".get_pagenum_link($paged + 1)."\">Next &rsaquo;</a>";
                if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>Last &raquo;</a>";
                echo "</div>\n";
            }
    //  sonar_pagination
    }


add_theme_support( 'woocommerce' );
remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0);
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs');



//add my_print to query vars
function add_print_query_vars($vars) {
    // add my_print to the valid list of variables
    $new_vars = array('embed');
    $vars = $new_vars + $vars;
    return $vars;
}

add_filter('query_vars', 'add_print_query_vars');

add_action("template_redirect", 'my_template_redirect_2322');

// Template selection
function my_template_redirect_2322()
{
    global $wp;
    global $wp_query;
    if (isset($wp->query_vars["embed"]))
    {  
        include(TEMPLATEPATH . '/single-product-mini.php');
        die();

    }
}


/** Tell WordPress to run yourtheme_setup() when the 'after_setup_theme' hook is run. */
add_action( 'after_setup_theme', 'yourtheme_setup' );
if ( ! function_exists('yourtheme_setup') ):
/**
* @uses add_custom_image_header() To add support for a custom header.
* @uses register_default_headers() To register the default custom header images provided with the theme.
*
* @since 3.0.0
*/
function yourtheme_setup() {
    // This theme uses post thumbnails
    add_theme_support( 'post-thumbnails' );
    // Your changeable header business starts heree
    // No CSS, just IMG call. The %s is a placeholder for the theme template directory URI.
    define( 'HEADER_IMAGE', '%s/images/headers/forestfloor.jpg' );
    // The height and width of your custom header. You can hook into the theme's own filters to change these values.
    // Add a filter to yourtheme_header_image_width and yourtheme_header_image_height to change these values.
    define( 'HEADER_IMAGE_WIDTH', apply_filters( 'yourtheme_header_image_width', 400 ) );
    define( 'HEADER_IMAGE_HEIGHT', apply_filters( 'yourtheme_header_image_height',  100 ) );

    // We'll be using post thumbnails for custom header images on posts and pages.
    // We want them to be 940 pixels wide by 198 pixels tall (larger images will be auto-cropped to fit).
    set_post_thumbnail_size( HEADER_IMAGE_WIDTH, HEADER_IMAGE_HEIGHT, false );
    // Don't support text inside the header image.
    define( 'NO_HEADER_TEXT', true );
    // Add a way for the custom header to be styled in the admin panel that controls
    // custom headers. See yourtheme_admin_header_style(), below.
    add_custom_image_header( '', 'yourtheme_admin_header_style' );
    // … and thus ends the changeable header business.
    // Default custom headers packaged with the theme. %s is a placeholder for the theme template directory URI.
    register_default_headers( array (
        'berries' => array (
        'url' => '%s/images/frsh-fits-logo.gif',
        'thumbnail_url' => '%s/images/unscene-logo-200-40.png',
        'description' => __( 'Berries', 'yourtheme' )
        ),
        'cherryblossom' => array (
        'url' => '%s/images/unscene-photo.png',
        'thumbnail_url' => '%s/images/unscene-photo.png',
        'description' => __( 'Cherry Blossoms', 'yourtheme' )
        ),
        'concave' => array (
        'url' => '%s/images/unscene-dev.png',
        'thumbnail_url' => '%s/images/unscene-dev.png',
        'description' => __( 'Concave', 'yourtheme' )
        )
    )
    
);

} endif;

if ( ! function_exists( 'yourtheme_admin_header_style' ) ) :
/**
* Styles the header image displayed on the Appearance > Header admin panel.
*
* Referenced via add_custom_image_header() in yourtheme_setup().
*
* @since 3.0.0
*/
function yourtheme_admin_header_style() {
?>
    <style type="text/css">
    #headimg {height: <?php echo HEADER_IMAGE_HEIGHT; ?>px;
        width: <?php echo HEADER_IMAGE_WIDTH; ?>px; }
    #headimg h1, #headimg #desc {display: none; }
    </style>
<?php } endif;

// #11 - AdRotate integration
require_once WP_PLUGIN_DIR . DIRECTORY_SEPARATOR . 'adrotate' . DIRECTORY_SEPARATOR . 'adrotate-widget.php';

class unsceneRotator extends adrotate_widgets {

    function unsceneRotator() { // or just __construct if you're on PHP5
        parent::WP_Widget(false, 'My not blocked AdRotate widget', array('description' => "Show unlimited ads in the sidebar."));
    }
}
add_action('widgets_init', create_function('', 'return register_widget("unsceneRotator");'));

