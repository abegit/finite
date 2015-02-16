<?php 

wp_deregister_script( 'jquery' );
add_filter('show_admin_bar', '__return_false');

//custom fields for product posts
add_action( 'init', 'add_custom_fields_to_product' );
function add_custom_fields_to_product() {
add_post_type_support( 'product', 'custom-fields' );
}

add_filter('widget_text', 'do_shortcode');

if ( function_exists('register_sidebar') ) {
register_sidebar(array(
	'name'          =>  'Blog',
	'class'         => '',
	'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h5>',
	'after_title'   => '</h5>'
));

register_sidebar(array(
    'name'          => 'Leftbar',
    'class'         => 'leftbar',
    'before_widget' => '<li id="%1$s" class="widget %2$s">',
    'after_widget'  => '</li>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
));
register_sidebar(array(
    'name'          => 'Rightbar',
    'class'         => 'rightbar',
    'before_widget' => '<li id="%1$s" class="widget %2$s">',
    'after_widget'  => '</li>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
));
register_sidebar(array(
    'name'          => 'Newsletter',
    'class'         => 'newsletter',
    'before_widget' => '',
    'after_widget'  => '',
    'before_title'  => '',
    'after_title'   => ''
));

register_sidebar(array(
    'name'          =>  'Home Footer',
    'class'         => 'home-footer',
    'before_widget' => '',
    'after_widget'  => '',
    'before_title'  => '<h5>',
    'after_title'   => '</h5>'
));
register_sidebar(array(
    'name'          =>  'Store',
    'class'         => '',
    'before_widget' => '<li id="%1$s" class="widget %2$s">',
    'after_widget'  => '</li>',
    'before_title'  => '<h5>',
    'after_title'   => '</h5>'
));

register_sidebar(array(
    'name'          =>  'StoreSide',
    'class'         => '',
    'before_widget' => '<li id="%1$s" class="widget %2$s">',
    'after_widget'  => '</li>',
    'before_title'  => '<h5>',
    'after_title'   => '</h5>'
));
}


function register_my_menus() {
  register_nav_menus(
    array(
      'main-menu' => __( 'Header Menu' ),
      'left-menu' => __( 'Left Sidebar Menu' )
    )
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
    // Your changeable header business starts here
    define( 'HEADER_TEXTCOLOR', '' );
    // No CSS, just IMG call. The %s is a placeholder for the theme template directory URI.
    define( 'HEADER_IMAGE', '%s/images/headers/forestfloor.jpg' );
    // The height and width of your custom header. You can hook into the theme's own filters to change these values.
    // Add a filter to yourtheme_header_image_width and yourtheme_header_image_height to change these values.
    define( 'HEADER_IMAGE_WIDTH', apply_filters( 'yourtheme_header_image_width', 1920 ) );
    define( 'HEADER_IMAGE_HEIGHT', apply_filters( 'yourtheme_header_image_height',  1080 ) );
    // We'll be using post thumbnails for custom header images on posts and pages.
    // We want them to be 940 pixels wide by 198 pixels tall (larger images will be auto-cropped to fit).
    set_post_thumbnail_size( HEADER_IMAGE_WIDTH, HEADER_IMAGE_HEIGHT, true );
    // Don't support text inside the header image.
    define( 'NO_HEADER_TEXT', true );
    // Add a way for the custom header to be styled in the admin panel that controls
    // custom headers. See yourtheme_admin_header_style(), below.
    add_custom_image_header( '', 'yourtheme_admin_header_style' );
    // … and thus ends the changeable header business.
    // Default custom headers packaged with the theme. %s is a placeholder for the theme template directory URI.
    register_default_headers( array (
        'berries' => array (
        'url' => '%s/images/unscene-logo-200-40.png',
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