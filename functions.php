<?php
/*
 *  Author: Todd Motto | @backspace
 *  URL: backspaceglobal.com |
 *  Custom functions, support, custom post types and more.
 */



add_action( 'wp_head', 'slider_img' );

function slider_img() {
    echo '<meta keyword="image_portfolio_slider_NavText" content="'.get_template_directory_uri() . '/assets/images/big-arrow-left.png'.'" />';
    echo '<meta keyword="image_portfolio_slider_NavText2" content="'.get_template_directory_uri() . '/assets/images/big-arrow-right.png'.'" />';
}


/*------------------------------------*\
	External Modules/Files
\*------------------------------------*/

if( file_exists( dirname( __FILE__ ) . '/theme-option/ReduxCore/framework.php' ) ) {

    require_once( dirname( __FILE__ ) . '/theme-option/ReduxCore/framework.php' );

}

if( file_exists( dirname( __FILE__ ) . '/theme-option/sample/config.php' ) ) {

    require_once( dirname( __FILE__ ) . '/theme-option/sample/config.php' );

}

/*------------------------------------*\
	Theme Support
\*------------------------------------*/

if (!isset($content_width))
{
    $content_width = 900;
}

if (function_exists('add_theme_support'))
{
    // Add Menu Support
    add_theme_support('menus');

    // Add Thumbnail Theme Support
    add_theme_support('post-thumbnails');
    add_image_size('large', 700, '', true); // Large Thumbnail
    add_image_size('medium', 250, '', true); // Medium Thumbnail
    add_image_size('small', 120, '', true); // Small Thumbnail
    add_image_size('custom-size', 500, 300, true); // Custom Thumbnail Size call using the_post_thumbnail('custom-size');
    add_image_size('ser-img', 198, 198, true); // Custom Thumbnail Size call using the_post_thumbnail('custom-size');
    add_image_size('brand-img', 500, 750, true); // Custom Thumbnail Size call using the_post_thumbnail('custom-size');
    add_image_size('review-img', 500, 750, true); // Custom Thumbnail Size call using the_post_thumbnail('custom-size');
    add_image_size('team-img', 350, 350, true); // Custom Thumbnail Size call using the_post_thumbnail('custom-size');
    add_image_size('port-img', 827, 740, true); // Custom Thumbnail Size call using the_post_thumbnail('custom-size');
    add_image_size('meet-img', 724, 483, true); // Custom Thumbnail Size call using the_post_thumbnail('custom-size');
    add_image_size('blog-img', 500, 300, true); // Custom Thumbnail Size call using the_post_thumbnail('custom-size');

    // Add Support for Custom Backgrounds - Uncomment below if you're going to use
    /*add_theme_support('custom-background', array(
	'default-color' => 'FFF',
	'default-image' => get_template_directory_uri() . '/img/bg.jpg'
    ));*/

    // Add Support for Custom Header - Uncomment below if you're going to use
    /*add_theme_support('custom-header', array(
	'default-image'			=> get_template_directory_uri() . '/img/headers/default.jpg',
	'header-text'			=> false,
	'default-text-color'		=> '000',
	'width'				=> 1000,
	'height'			=> 198,
	'random-default'		=> false,
	'wp-head-callback'		=> $wphead_cb,
	'admin-head-callback'		=> $adminhead_cb,
	'admin-preview-callback'	=> $adminpreview_cb
    ));*/

    // Enables post and comment RSS feed links to head
    add_theme_support('automatic-feed-links');

    // Localisation Support
    load_theme_textdomain('backspace', get_template_directory() . '/languages');
}

/*------------------------------------*\
	Functions
\*------------------------------------*/

// Backspace navigation
function backspace_nav()
{
    $menu = wp_nav_menu(
        array(
            'theme_location'  => 'header_top_menu',
            'menu'            => '',
            'container'       => 'div',
            'container_class' => '',
            'container_id'    => 't',
            'menu_class'      => 'Main menu navbar-nav mr-auto',
            'menu_id'         => 'false',
            'echo'            => false,
            'fallback_cb'     => 'wp_page_menu',
            'before'          => '',
            'after'           => '',
            'link_before'     => '',
            'link_after'      => '',
            'items_wrap'      => '<ul class="navbar-nav mr-auto">%3$s</ul>',
            'depth'           => 0,
            'walker'          => ''
        )
    );

    $menu = str_replace('menu-item', 'nav-item menu-item',$menu);
    $menu = str_replace('current_page_item', 'current_page_item active',$menu);
    $menu = str_replace('<a', '<a class="nav-link"',$menu);

    echo $menu;
}

function copyright_first()
{
    $menu = wp_nav_menu(
        array(
            'theme_location'  => 'footer_menu',
            'items_wrap'      => '<ul class="mr-auto">%3$s</ul>',
        )
    );

    echo $menu;
}


// Load Backspace scripts (header.php)
function backspace_scripts()
{
    if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {


        wp_register_script('jqueryslim', get_template_directory_uri() . '/assets/js/jquery-3.3.1.slim.min.js', array(), '3.1.3','true'); // Conditionizr
        wp_enqueue_script('jqueryslim'); // Enqueue it!
        wp_register_script('scroll-jquery', get_template_directory_uri() . '/assets/js/scroll-jquery.js', array(), '1.1.0','true'); // Conditionizr
        wp_enqueue_script('scroll-jquery'); // Enqueue it!
        wp_register_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), '1.1.0','true'); // Conditionizr
        wp_enqueue_script('bootstrap'); // Enqueue it!
        wp_register_script('owl', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array(), '1.1.0','true'); // Conditionizr
        wp_enqueue_script('owl'); // Enqueue it!
        wp_register_script('wow', get_template_directory_uri() . '/assets/js/wow.min.js', array(), '1.1.0','true'); // Conditionizr
        wp_enqueue_script('wow'); // Enqueue it!
        wp_register_script('scroll', get_template_directory_uri() . '/assets/js/scroll-to-top.js', array(), '1.1.0','true'); // Conditionizr
        wp_enqueue_script('scroll'); // Enqueue it!
        wp_register_script('magnify', get_template_directory_uri() . '/assets/js/magnify-popup.js', array(), '1.1.0','true'); // Conditionizr
        wp_enqueue_script('magnify'); // Enqueue it!
        wp_register_script('mixitup', get_template_directory_uri() . '/assets/js/mixitup.min.js', array(), '1.1.0','true'); // Conditionizr
        wp_enqueue_script('mixitup'); // Enqueue it!
        wp_register_script('accrodion', get_template_directory_uri() . '/assets/js/accrodion.js', array(), '1.1.0','true'); // Conditionizr
        wp_enqueue_script('accrodion'); // Enqueue it!



        wp_register_script('customjs', get_template_directory_uri() . '/assets/js/custom.js', array(), '1.1.0', 'true'); // Conditionizr
        wp_enqueue_script('customjs'); // Enqueue it!



    }
}

// Load backspace  conditional scripts
function backspace_conditional_scripts()
{
    if (is_page('pagenamehere')) {
        wp_register_script('scriptname', get_template_directory_uri() . '/js/scriptname.js', array('jquery'), '1.0.0'); // Conditional script(s)
        wp_enqueue_script('scriptname'); // Enqueue it!
    }


}

// Load backspace Blank styles
function backspace_styles()
{
   /* wp_register_style('normalize', get_template_directory_uri() . '/normalize.css', array(), '1.0', 'all');
    wp_enqueue_style('normalize'); // Enqueue it!
 */
    wp_register_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '1.0', 'all');
    wp_enqueue_style('bootstrap'); // Enqueue it!
    wp_register_style('bootstrap-grid', get_template_directory_uri() . '/assets/css/bootstrap-grid.min.css', array(), '1.0', 'all');
    wp_enqueue_style('bootstrap-grid'); // Enqueue it!
    wp_register_style('owl', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array(), '1.0', 'all');
    wp_enqueue_style('owl'); // Enqueue it!
    wp_register_style('owl-theme', get_template_directory_uri() . '/assets/css/owl.theme.default.min.css', array(), '1.0', 'all');
    wp_enqueue_style('owl-theme'); // Enqueue it!
    wp_register_style('magnific', get_template_directory_uri() . '/assets/css/magnific-popup.css', array(), '1.0', 'all');
    wp_enqueue_style('magnific'); // Enqueue it!
    wp_register_style('animate', get_template_directory_uri() . '/assets/css/animate.min.css', array(), '1.0', 'all');
    wp_enqueue_style('animate'); // Enqueue it!
    wp_register_style('fontawesome', 'https://use.fontawesome.com/releases/v5.5.0/css/all.css', 'all');
    wp_enqueue_style('fontawesome'); // Enqueue it!
    if (is_front_page()) {

        wp_register_script('typed', get_template_directory_uri() . '/assets/js/typed.js', array(), '1.1.0', 'true'); // Conditionizr
        wp_enqueue_script('typed'); // Enqueue it!
    }
    wp_register_style('custom-css', get_template_directory_uri() . '/style.css', array(), '1.0', 'all');
    wp_enqueue_style('custom-css'); // Enqueue it!
    wp_register_style('responsive', get_template_directory_uri() . '/assets/css/responsive.css', array(), '1.0', 'all');
    wp_enqueue_style('responsive'); // Enqueue it!

    

}

// Register backspace  Navigation
function register_backspace_menu()
{
    if (function_exists('register_nav_menu')){

        register_nav_menu( 'header_top_menu', __('Main Menu', 'backspace'));
        register_nav_menu( 'footer_menu', __('Footer Menu', 'backspace'));

    }
}

// Remove the <div> surrounding the dynamic navigation to cleanup markup
function my_wp_nav_menu_args($args = '')
{
    $args['container'] = false;
    return $args;
}

// Remove Injected classes, ID's and Page ID's from Navigation <li> items
function my_css_attributes_filter($var)
{
    return is_array($var) ? array() : '';
}

// Remove invalid rel attribute values in the categorylist
function remove_category_rel_from_category_list($thelist)
{
    return str_replace('rel="category tag"', 'rel="tag"', $thelist);
}

// Add page slug to body class, love this - Credit: Starkers Wordpress Theme
function add_slug_to_body_class($classes)
{
    global $post;
    if (is_home()) {
        $key = array_search('blog', $classes);
        if ($key > -1) {
            unset($classes[$key]);
        }
    } elseif (is_page()) {
        $classes[] = sanitize_html_class($post->post_name);
    } elseif (is_singular()) {
        $classes[] = sanitize_html_class($post->post_name);
    }

    return $classes;
}

// If Dynamic Sidebar Exists
if (function_exists('register_sidebar'))
{
    // Define Sidebar Widget Area 1
    register_sidebar(array(
        'name' => __('Footer First', 'backspace'),
        'description' => __('Description for this widget-area...', 'backspace'),
        'id' => 'footer-first',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => ''
    ));

    // Define Sidebar Widget Area 2
    register_sidebar(array(
        'name' => __('Footer second area', 'backspace'),
        'description' => __('Description for this widget-area...', 'backspace'),
        'id' => 'footer-second',
        'before_widget' => '<div class="col-lg-3 col-md-4 col-xs-6"> <div class="footer-single second-footer-part">',
        'after_widget' => '</div></div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
    // Define Sidebar Widget Area 3
    register_sidebar(array(
        'name' => __('Footer third area', 'backspace'),
        'description' => __('Description for this widget-area...', 'backspace'),
        'id' => 'footer-third',
        'before_widget' => '<div class="col-md-5 col-lg-4">  <div class="footer-single third-footer-part">',
        'after_widget' => '</div></div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));

    // Define Sidebar Widget Area 4
    register_sidebar(array(
        'name' => __('Sidebar first area', 'backspace'),
        'description' => __('Description for this widget-area...', 'backspace'),
        'id' => 'categories',
        'before_widget' => ' <div class="catagories">',
        'after_widget' => '</div>',
        'before_title' => '<h5>',
        'after_title' => '</h5>'
    ));

    // Define Sidebar Widget Area 4
    register_sidebar(array(
        'name' => __('Sidebar last area', 'backspace'),
        'description' => __('Description for this widget-area...', 'backspace'),
        'id' => 'instagram',
        'before_widget' => '<div class="justify-content-between">',
        'after_widget' => '</div>',
        'before_title' => ' <div class="insta-head"> <h5>',
        'after_title' => '</div></h5>'
    ));
    // Define Sidebar Widget Area 4
    register_sidebar(array(
        'name' => __('Contact form area', 'backspace'),
        'description' => __('Description for this widget-area...', 'backspace'),
        'id' => 'contact',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => ''
    ));


}

// Remove wp_head() injected Recent Comment styles
function my_remove_recent_comments_style()
{
    global $wp_widget_factory;
    remove_action('wp_head', array(
        $wp_widget_factory->widgets['WP_Widget_Recent_Comments'],
        'recent_comments_style'
    ));
}

// Pagination for paged posts, Page 1, Page 2, Page 3, with Next and Previous Links, No plugin
function backspace_wp_pagination()
{
    global $wp_query;
    $big = 999999999;
    echo paginate_links(array(
        'base' => str_replace($big, '%#%', get_pagenum_link($big)),
        'format' => '?paged=%#%',
        'current' => max(1, get_query_var('paged')),
        'total' => $wp_query->max_num_pages
    ));
}

// Custom Excerpts
function html5wp_index($length) // Create 20 Word Callback for Index page Excerpts, call using html5wp_excerpt('html5wp_index');
{
    return 20;
}

// Create 40 Word Callback for Custom Post Excerpts, call using html5wp_excerpt('html5wp_custom_post');
function html5wp_custom_post($length)
{
    return 40;
}

// Create the Custom Excerpts callback
function html5wp_excerpt($length_callback = '', $more_callback = '')
{
    global $post;
    if (function_exists($length_callback)) {
        add_filter('excerpt_length', $length_callback);
    }
    if (function_exists($more_callback)) {
        add_filter('excerpt_more', $more_callback);
    }
    $output = get_the_excerpt();
    $output = apply_filters('wptexturize', $output);
    $output = apply_filters('convert_chars', $output);
    $output = '<p>' . $output . '</p>';
    echo $output;
}

// Custom View Article link to Post
function html5_blank_view_article($more)
{
    global $post;
    return '... <a class="view-article" href="' . get_permalink($post->ID) . '">' . __('View Article', 'html5blank') . '</a>';
}

// Remove Admin bar
function remove_admin_bar()
{
    return false;
}

// Remove 'text/css' from our enqueued stylesheet
function html5_style_remove($tag)
{
    return preg_replace('~\s+type=["\'][^"\']++["\']~', '', $tag);
}

// Remove thumbnail width and height dimensions that prevent fluid images in the_thumbnail
function remove_thumbnail_dimensions( $html )
{
    $html = preg_replace('/(width|height)=\"\d*\"\s/', "", $html);
    return $html;
}

// Custom Gravatar in Settings > Discussion
function html5blankgravatar ($avatar_defaults)
{
    $myavatar = get_template_directory_uri() . '/img/gravatar.jpg';
    $avatar_defaults[$myavatar] = "Custom Gravatar";
    return $avatar_defaults;
}

// Threaded Comments
function enable_threaded_comments()
{
    if (!is_admin()) {
        if (is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
            wp_enqueue_script('comment-reply');
        }
    }
}

// Custom Comments Callback
function html5blankcomments($comment, $args, $depth)
{
	$GLOBALS['comment'] = $comment;
	extract($args, EXTR_SKIP);

	if ( 'div' == $args['style'] ) {
		$tag = 'div';
		$add_below = 'comment';
	} else {
		$tag = 'li';
		$add_below = 'div-comment';
	}
?>
    <!-- heads up: starting < for the html tag (li or div) in the next line: -->
    <<?php echo $tag ?> <?php comment_class(empty( $args['has_children'] ) ? '' : 'parent') ?> id="comment-<?php comment_ID() ?>">
	<?php if ( 'div' != $args['style'] ) : ?>
	<div id="div-comment-<?php comment_ID() ?>" class="comment-body">
	<?php endif; ?>
	<div class="comment-author vcard">
	<?php if ($args['avatar_size'] != 0) echo get_avatar( $comment, $args['180'] ); ?>
	<?php printf(__('<cite class="fn">%s</cite> <span class="says">says:</span>'), get_comment_author_link()) ?>
	</div>
<?php if ($comment->comment_approved == '0') : ?>
	<em class="comment-awaiting-moderation"><?php _e('Your comment is awaiting moderation.') ?></em>
	<br />
<?php endif; ?>

	<div class="comment-meta commentmetadata"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>">
		<?php
			printf( __('%1$s at %2$s'), get_comment_date(),  get_comment_time()) ?></a><?php edit_comment_link(__('(Edit)'),'  ','' );
		?>
	</div>

	<?php comment_text() ?>

	<div class="reply">
	<?php comment_reply_link(array_merge( $args, array('add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
	</div>
	<?php if ( 'div' != $args['style'] ) : ?>
	</div>
	<?php endif; ?>
<?php }


/*function get_contents(){
    include ("template-parts/about.php");

}

/*------------------------------------*\
	Actions + Filters + ShortCodes
\*------------------------------------*/

// Add Actions
add_action('init', 'backspace_scripts'); // Add Custom Scripts to wp_head
add_action('wp_print_scripts', 'backspace_conditional_scripts'); // Add Conditional Page Scripts
add_action('get_header', 'enable_threaded_comments'); // Enable Threaded Comments
add_action('wp_enqueue_scripts', 'backspace_styles'); // Add Theme Stylesheet
add_action('init', 'register_backspace_menu'); // Add backspace Blank Menu
add_action('init', 'create_post_type_html5'); // Add our backspace Blank Custom Post Type
add_action('widgets_init', 'my_remove_recent_comments_style'); // Remove inline Recent Comment Styles from wp_head()
add_action('init', 'backspace_wp_pagination'); // Add our backspace Pagination

// Remove Actions
remove_action('wp_head', 'feed_links_extra', 3); // Display the links to the extra feeds such as category feeds
remove_action('wp_head', 'feed_links', 2); // Display the links to the general feeds: Post and Comment Feed
remove_action('wp_head', 'rsd_link'); // Display the link to the Really Simple Discovery service endpoint, EditURI link
remove_action('wp_head', 'wlwmanifest_link'); // Display the link to the Windows Live Writer manifest file.
remove_action('wp_head', 'index_rel_link'); // Index link
remove_action('wp_head', 'parent_post_rel_link', 10, 0); // Prev link
remove_action('wp_head', 'start_post_rel_link', 10, 0); // Start link
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0); // Display relational links for the posts adjacent to the current post.
remove_action('wp_head', 'wp_generator'); // Display the XHTML generator that is generated on the wp_head hook, WP version
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'rel_canonical');
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);

// Add Filters
add_filter('avatar_defaults', 'html5blankgravatar'); // Custom Gravatar in Settings > Discussion
add_filter('body_class', 'add_slug_to_body_class'); // Add slug to body class (Starkers build)
add_filter('widget_text', 'do_shortcode'); // Allow shortcodes in Dynamic Sidebar
add_filter('widget_text', 'shortcode_unautop'); // Remove <p> tags in Dynamic Sidebars (better!)
add_filter('wp_nav_menu_args', 'my_wp_nav_menu_args'); // Remove surrounding <div> from WP Navigation
// add_filter('nav_menu_css_class', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> injected classes (Commented out by default)
// add_filter('nav_menu_item_id', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> injected ID (Commented out by default)
// add_filter('page_css_class', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> Page ID's (Commented out by default)
add_filter('the_category', 'remove_category_rel_from_category_list'); // Remove invalid rel attribute
add_filter('the_excerpt', 'shortcode_unautop'); // Remove auto <p> tags in Excerpt (Manual Excerpts only)
add_filter('the_excerpt', 'do_shortcode'); // Allows Shortcodes to be executed in Excerpt (Manual Excerpts only)
add_filter('excerpt_more', 'html5_blank_view_article'); // Add 'View Article' button instead of [...] for Excerpts
add_filter('show_admin_bar', 'remove_admin_bar'); // Remove Admin bar
add_filter('style_loader_tag', 'html5_style_remove'); // Remove 'text/css' from enqueued stylesheet
add_filter('post_thumbnail_html', 'remove_thumbnail_dimensions', 10); // Remove width and height dynamic attributes to thumbnails
add_filter('image_send_to_editor', 'remove_thumbnail_dimensions', 10); // Remove width and height dynamic attributes to post images

// Remove Filters
remove_filter('the_excerpt', 'wpautop'); // Remove <p> tags from Excerpt altogether

// Shortcodes
add_shortcode('html5_shortcode_demo', 'html5_shortcode_demo'); // You can place [html5_shortcode_demo] in Pages, Posts now.
add_shortcode('html5_shortcode_demo_2', 'html5_shortcode_demo_2'); // Place [html5_shortcode_demo_2] in Pages, Posts now.

// Shortcodes above would be nested like this -
// [html5_shortcode_demo] [html5_shortcode_demo_2] Here's the page title! [/html5_shortcode_demo_2] [/html5_shortcode_demo]

/*------------------------------------*\
	Custom Post Types
\*------------------------------------*/


/*------------------------------------*\
	ShortCode Functions
\*------------------------------------*/

// Shortcode Demo with Nested Capability
function html5_shortcode_demo($atts, $content = null)
{
    return '<div class="shortcode-demo">' . do_shortcode($content) . '</div>'; // do_shortcode allows for nested Shortcodes
}

// Shortcode Demo with simple <h2> tag
function html5_shortcode_demo_2($atts, $content = null) // Demo Heading H2 shortcode, allows for nesting within above element. Fully expandable.
{
    return '<h2>' . $content . '</h2>';
}
/*------------------------------------*\
	Banner Area
\*------------------------------------*/

function  banner_words(){

    $ret = "
    <script type='text/javascript'>
    var words = [";
    $ret_arr= array();
    $args = array(
        'post_type' => 'banner',
        'orderby' => 'date',
        'order'   => 'DESC',
        'posts_per_page' => -1,
    );
    $q = new WP_Query($args);

    foreach($q->posts as $post) {
        array_push($ret_arr,'"' .$post->post_title.'"');
        $q->next_post();
    }
    $ret .= join(',',$ret_arr);
    $ret .= "];
    </script>";

    return $ret;
}
/*------------------------------------*\
	Service Area
\*------------------------------------*/

function  backsp_service(){

    $ret = "";
    $args = array(
        'post_type' => 'service',
        'orderby' => 'title',
        'order'   => 'ASC',
        'posts_per_page' => -1,
    );
    $q = new WP_Query($args);
    foreach($q->posts as $post) {

        $post_thumbnail_id = get_post_thumbnail_id( $post->ID );
        if(!empty($post_thumbnail_id)) {
            $featured_img =  wp_get_attachment_image_src( $post_thumbnail_id, 'ser-img' );
        }
        $ret .= '<div class="service-item">
                     <div class="service-image">
                          <img src="'.$featured_img[0].'" alt="man">
                    </div>
                      <div class="service-text first-service">
                                    <h4>'.get_field('ser-number',$post->ID).'</h4>
                                    <h3>'.get_field('ser-head',$post->ID).'</h3>
                                    <p>'.get_field('ser-content',$post->ID).'</p>
                                </div>
                    <div class="review-content text-center">
                       '.$post->post_content.'
                    </div>
                  
                </div>';

        $q->next_post();
    }

    return $ret;
}
/*------------------------------------*\
	Brand Area
\*------------------------------------*/

function  brands(){

    $ret = "";
    $args = array(
        'post_type' => 'brand',
        'orderby' => 'date',
        'order'   => 'DESC',
        'posts_per_page' => -1,
    );
    $q = new WP_Query($args);
    foreach($q->posts as $post) {

        $post_thumbnail_id = get_post_thumbnail_id( $post->ID );
        if(!empty($post_thumbnail_id)) {
            $featured_img =  wp_get_attachment_image_src( $post_thumbnail_id, 'brand-img' );
        }
        $ret .= '<div class="brand-item">
                                <div class="brand-image">
                                   <img src="'.$featured_img[0].'" alt="man">
                                </div>
                                <div class="brand-text">
                                    <h3>'.get_field('brand_head',$post->ID).'</h3>
                                    <p>'.get_field('brand-title',$post->ID).'</p>
                                </div>
                            </div>';

        $q->next_post();
    }

    return $ret;
}

/*------------------------------------*\
	Reviews Area
\*------------------------------------*/

function  reviews(){

    $ret = "";
    $args = array(
        'post_type' => 'review',
        'orderby' => 'date',
        'order'   => 'DESC',
        'posts_per_page' => -1,
    );
    $q = new WP_Query($args);
    foreach($q->posts as $post) {

        $post_thumbnail_id = get_post_thumbnail_id( $post->ID );
        if(!empty($post_thumbnail_id)) {
            $featured_img =  wp_get_attachment_image_src( $post_thumbnail_id, 'review-img' );
        }
        $ret .= '  <div class="review-item">
                        <div class="review-image">
                   <img src="'.$featured_img[0].'" alt="man">
                    </div>
                    <div class="review-text">
                        <h3>'.get_field('review-comment',$post->ID).'</h3>
                        <h5>'.get_field('review-author',$post->ID).'</h5>
                        <p>'.get_field('review-author-position',$post->ID).'</p>
                      </div>
                    </div>';

        $q->next_post();
    }

    return $ret;
}

/*------------------------------------*\
	Faq Area
\*------------------------------------*/

function  faq(){

    $ret = "";
    $args = array(
        'post_type' => 'faq',
        'orderby' => 'date',
        'order'   => 'DESC',
        'posts_per_page' => -1,
    );
    $q = new WP_Query($args);
    $tmp_switcher = "show";
    foreach($q->posts as $post) {

        $post_thumbnail_id = get_post_thumbnail_id( $post->ID );
        if(!empty($post_thumbnail_id)) {
            $featured_img =  wp_get_attachment_image_src( $post_thumbnail_id, 'full' );
        }
        $ret .= '<div class="card"><div class="card-header" id="heading-'.$post->ID.'">
                                        <h2 class="mb-0">
                                            <button type="button" class="collapsed" data-toggle="collapse" data-target="#collapse-'.$post->ID.'"> <span>'.get_field('faq-head',$post->ID).' </span><i class="fa fa-plus"></i></button>
                                        </h2>
                                    </div>
                                    <div id="collapse-'.$post->ID.'" class="collapse '.$tmp_switcher.'" aria-labelledby="heading-'.$post->ID.'" data-parent="#accordionExample">
                                        <div class="card-body">
                                          '.get_field('faq-content',$post->ID).'
                                            <a target="_blank" href="http://backspaceglobal.com/carrier/" class="apply-btn">'.get_field('faq-first-btn',$post->ID).'</a>
                                            <a target="_blank" href="http://backspaceglobal.com/carrier/" class="more-btn">'.get_field('faq-second-btn',$post->ID).'</a>
                                        </div>
                                        </div>
                                    </div>';

        $q->next_post();

        if (!empty($tmp_switcher)){
            $tmp_switcher = "";
        }
    }

    return $ret;
}



/*------------------------------------*\
	Our Team Area
\*------------------------------------*/

function  team(){

    $ret = "";
    $args = array(
        'post_type' => 'our_team',
        'orderby' => 'date',
        'order'   => 'DESC',
        'posts_per_page' => -1,
    );
    $q = new WP_Query($args);
    foreach($q->posts as $post) {

        $post_thumbnail_id = get_post_thumbnail_id( $post->ID );
        if(!empty($post_thumbnail_id)) {
            $featured_img =  wp_get_attachment_image_src( $post_thumbnail_id, 'team-img' );
        }
        $designations = wp_get_post_terms( $post->ID, 'designation' );
        $print_designation = "";
        foreach ($designations as $designation){
            $print_designation .= $designation->name . ", ";
        }
        $print_designation = substr($print_designation,0,strlen($print_designation)-2);
        $ret .= '<div class="col-lg-3 col-md-4">
                <div class="team-member">
                    <div class="team-member-image">
                         <img src="'.$featured_img[0].'" alt="man">
                    </div>
                    <a href="#">'.$post->post_title.'</a>
                    <p>'.$print_designation.'</p>
                </div>
            </div>';

        $q->next_post();
    }

    return $ret;
}

/*------------------------------------*\
	Meet-slider  Area
\*------------------------------------*/

function  meetslider(){

    $ret = "";
    $args = array(
        'post_type' => 'meet_slider',
        'orderby' => 'date',
        'order'   => 'DESC',
        'posts_per_page' => -1,
    );
    $q = new WP_Query($args);
    foreach($q->posts as $post) {

        $post_thumbnail_id = get_post_thumbnail_id( $post->ID );
        if(!empty($post_thumbnail_id)) {
            $featured_img =  wp_get_attachment_image_src( $post_thumbnail_id, 'meet-img' );
        }
        $ret .= '<div class="meet-item">
            <div class="meet-image">
                 <img src="'.$featured_img[0].'" alt="img23">
            </div>
        </div>';

        $q->next_post();
    }

    return $ret;
}


/*------------------------------------*\
	Look for  Area
\*------------------------------------*/

function  lookfor(){

    $ret = "";
    $args = array(
        'post_type' => 'look_for',
        'orderby' => 'date',
        'order'   => 'DESC',
        'posts_per_page' => -1,
    );
    $q = new WP_Query($args);
    foreach($q->posts as $post) {

        $post_thumbnail_id = get_post_thumbnail_id( $post->ID );
        if(!empty($post_thumbnail_id)) {
            $featured_img =  wp_get_attachment_image_src( $post_thumbnail_id, 'full' );
        }
        $ret .= ' <div class="col-md-4"> 
                    <div class="single-job" onmouseover="this.style.background = \'url('.$featured_img[0].'\';" onmouseout="this.style.background = \'#f4f5f8\';">
                        <h3>'.$post->post_title.'</h3>
                        <p>'.get_field('sin_job_per',$post->ID).'</p>
                        <p><span>'.get_field('sin_job_date',$post->ID).'</span></p>
                    </div>
                </div>
';

        $q->next_post();
    }

    return $ret;
}

/*------------------------------------*\
	Portfolio Menu
\*------------------------------------*/
function backspace_gallery_category(){
    $taxonomies = get_terms( array(
        'taxonomy' => 'gallery_category',
        'hide_empty' => true,
    ) );
    $ret = "";

    if ( !empty($taxonomies) ) {
        foreach( $taxonomies as $category ) {
            $ret .= '<li class="filter" data-filter=".t'.$category->term_id.'">'.$category->name.'</li>';
        }
    }
    return $ret;
}



function backspace_gallery_photos()
{
    $ret = "";
    $args = array(
        'post_type' => 'gallery',
        'orderby' => 'date',
        'order' => 'DESC',
        'posts_per_page' => -1,
    );
    $q = new WP_Query($args);

    foreach ($q->posts as $post) {
        $post_thumbnail_id = get_post_thumbnail_id($post->ID);

        if (!empty($post_thumbnail_id)) {
            $featured_img = wp_get_attachment_image_src($post_thumbnail_id, 'port-img');
        }

        $gallery_categories = wp_get_post_terms($post->ID, 'gallery_category');
        $str_gallery_category = "";
        $str_gallery_category_title = "";
        foreach ($gallery_categories as $gallery_category) {
            $str_gallery_category .= "t" . $gallery_category->term_id . " ";
            $str_gallery_category_title .= $gallery_category->name . ", ";
        }

        $str_gallery_category_title = rtrim($str_gallery_category_title, ", ");
        $str_gallery_category = rtrim($str_gallery_category, " ");
        $ret .= '<div class="col-md-6 web html wordpress app all ' . $str_gallery_category . ' " data-ref="mixitup-target">
                        <div class="single-portfolio"  >
                            <div class="single-portfolio-image">
                                <img src="' . $featured_img[0] . '" alt="img23">
                            </div>
                            <div class="single-portfolio-text">
                                <a target="_blank" href="'. get_permalink($post->ID) .'">' . $post->post_title . '<i class="fas fa-angle-double-right ml-auto" ></i> </a>
                                <p>' . $str_gallery_category_title . '</p>
                            </div>
                        </div>
                    </div>';
    }
    return $ret;

}


?>
