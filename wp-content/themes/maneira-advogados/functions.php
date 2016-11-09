<?php
/**
 * maneira advogados functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package maneira_advogados
 */

if ( ! function_exists( 'maneira_advogados_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function maneira_advogados_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on maneira advogados, use a find and replace
	 * to change 'maneira-advogados' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'maneira-advogados', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'maneira-advogados' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'maneira_advogados_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'maneira_advogados_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function maneira_advogados_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'maneira_advogados_content_width', 640 );
}
add_action( 'after_setup_theme', 'maneira_advogados_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function maneira_advogados_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'maneira-advogados' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'maneira-advogados' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'maneira_advogados_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function maneira_advogados_scripts() {
	wp_enqueue_style( 'maneira-advogados-bootstrap-style', get_template_directory_uri() . '/css/bootstrap.min.css');

	wp_enqueue_style( 'maneira-advogados-style', get_stylesheet_uri() );

	wp_enqueue_script( 'maneira-advogados-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'maneira-advogados-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	wp_enqueue_script( 'maneira-advogados-jquery-js', get_template_directory_uri() . '/js/jquery-2.2.0.min.js');
	wp_enqueue_script( 'maneira-advogados-bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js');
	wp_enqueue_script( 'maneira-advogados-default-js', get_template_directory_uri() . '/js/script.js');
	wp_enqueue_script( 'maneira-advogados-publicacoes-js', get_template_directory_uri() . '/js/publicacoes.js');


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'maneira_advogados_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';


// Register Custom Navigation Walker
require_once('wp_bootstrap_navwalker.php');



// function add_search_to_wp_menu($items, $args) {
//     if ('primary' === $args->theme_location) {
//         $items .= '<li>';
//         $items .= '<a '
//                 . 'class="glyphicon glyphicon-search" '
//                 . 'data-target="#myModal"'
//                 . 'data-toggle="modal"'
//                 . 'id="MainNavHelp" '
//                 . '</a>';
//         $items .= '</li>';
//     }
//     return $items;
// }

// add_filter('wp_nav_menu_items', 'add_search_to_wp_menu', 10, 2);

// function custom_active_item_classes($classes = array(), $menu_item = false){            
//         global $post;
//         $classes[] = ($menu_item->url == get_post_type_archive_link($post->post_type)) ? 'current-menu-item active' : '';
//         return $classes;
//     }
// add_filter( 'nav_menu_css_class', 'custom_active_item_classes', 10, 2 );

// function searchfilter($query) {
//     if ($query->is_search && !is_admin() ) {
//         if(isset($_GET['post_type'])) {
//             $type = $_GET['post_type'];
//                 if($type == 'publicacoes') {
//                     $query->set('post_type',array('publicacoes'));
//                 }
//         }       
//     }
// return $query;
// }
// add_filter('pre_get_posts','searchfilter');


function custom_pagination_mmgv($pagerange = '', $paged = '') {
	
    $numpages = $GLOBALS['wp_query']->max_num_pages;

    if (empty($pagerange)) {
        $pagerange = 2;
    }

    /**
     * This first part of our function is a fallback
     * for custom pagination inside a regular loop that
     * uses the global $paged and global $wp_query variables.
     * 
     * It's good because we can now override default pagination
     * in our theme, and use this function in default quries
     * and custom queries.
     */
    global $paged;
    if (empty($paged)) {
        $paged = 1;
    }
    if ($numpages == '') {
        global $wp_query;
        $numpages = $wp_query->max_num_pages;
        if (!$numpages) {
            $numpages = 1;
        }
    }

    /**
     * We construct the pagination arguments to enter into our paginate_links
     * function. 
     */
    $pagination_args = array(
        'base' => get_pagenum_link(1) . '%_%',
        'format' => 'page/%#%',
        'show_all' => FALSE,
        'total' => $numpages,
        'current' => $paged,
        'mid_size' => 2,
        'end_size' => 1,
        'prev_text' => __('ANTERIOR'),
        'next_text' => __('PRÓXIMO'),
        'type' => 'plain',
    );

    $paginate_links = paginate_links_mmgv($pagination_args);

    if ($paginate_links) {
        echo "<nav class='custom-pagination hidden-xs hidden-sm'>";
        //echo "<span class='page-numbers page-num'>Page " . $paged . " of " . $numpages . "</span> ";
        echo $paginate_links;
        echo "</nav>";

        echo "<div class='custom-pagination hidden-md hidden-lg'>";
        ?>
        <?php previous_posts_link('ANTERIOR'); ?>
        <?php next_posts_link('PRÓXIMO', 0); ?>
            <div class="clearfix"></div>
        <?php
        echo "</div>";
    }
}

add_filter('next_posts_link_attributes', 'posts_link_attributes_1');
add_filter('previous_posts_link_attributes', 'posts_link_attributes_2');

function posts_link_attributes_1() {
    return 'class="pull-right"';
}
function posts_link_attributes_2() {
    return 'class="pull-left"';
}

/**
 * Retrieve paginated link for archive post pages.
 *
 * Technically, the function can be used to create paginated link list for any
 * area. The 'base' argument is used to reference the url, which will be used to
 * create the paginated links. The 'format' argument is then used for replacing
 * the page number. It is however, most likely and by default, to be used on the
 * archive post pages.
 *
 * The 'type' argument controls format of the returned value. The default is
 * 'plain', which is just a string with the links separated by a newline
 * character. The other possible values are either 'array' or 'list'. The
 * 'array' value will return an array of the paginated link list to offer full
 * control of display. The 'list' value will place all of the paginated links in
 * an unordered HTML list.
 *
 * The 'total' argument is the total amount of pages and is an integer. The
 * 'current' argument is the current page number and is also an integer.
 *
 * An example of the 'base' argument is "http://example.com/all_posts.php%_%"
 * and the '%_%' is required. The '%_%' will be replaced by the contents of in
 * the 'format' argument. An example for the 'format' argument is "?page=%#%"
 * and the '%#%' is also required. The '%#%' will be replaced with the page
 * number.
 *
 * You can include the previous and next links in the list by setting the
 * 'prev_next' argument to true, which it is by default. You can set the
 * previous text, by using the 'prev_text' argument. You can set the next text
 * by setting the 'next_text' argument.
 *
 * If the 'show_all' argument is set to true, then it will show all of the pages
 * instead of a short list of the pages near the current page. By default, the
 * 'show_all' is set to false and controlled by the 'end_size' and 'mid_size'
 * arguments. The 'end_size' argument is how many numbers on either the start
 * and the end list edges, by default is 1. The 'mid_size' argument is how many
 * numbers to either side of current page, but not including current page.
 *
 * It is possible to add query vars to the link by using the 'add_args' argument
 * and see {@link add_query_arg()} for more information.
 *
 * The 'before_page_number' and 'after_page_number' arguments allow users to
 * augment the links themselves. Typically this might be to add context to the
 * numbered links so that screen reader users understand what the links are for.
 * The text strings are added before and after the page number - within the
 * anchor tag.
 *
 * @since 2.1.0
 *
 * @global WP_Query   $wp_query
 * @global WP_Rewrite $wp_rewrite
 *
 * @param string|array $args {
 *     Optional. Array or string of arguments for generating paginated links for archives.
 *
 *     @type string $base               Base of the paginated url. Default empty.
 *     @type string $format             Format for the pagination structure. Default empty.
 *     @type int    $total              The total amount of pages. Default is the value WP_Query's
 *                                      `max_num_pages` or 1.
 *     @type int    $current            The current page number. Default is 'paged' query var or 1.
 *     @type bool   $show_all           Whether to show all pages. Default false.
 *     @type int    $end_size           How many numbers on either the start and the end list edges.
 *                                      Default 1.
 *     @type int    $mid_size           How many numbers to either side of the current pages. Default 2.
 *     @type bool   $prev_next          Whether to include the previous and next links in the list. Default true.
 *     @type bool   $prev_text          The previous page text. Default '« Previous'.
 *     @type bool   $next_text          The next page text. Default '« Previous'.
 *     @type string $type               Controls format of the returned value. Possible values are 'plain',
 *                                      'array' and 'list'. Default is 'plain'.
 *     @type array  $add_args           An array of query args to add. Default false.
 *     @type string $add_fragment       A string to append to each link. Default empty.
 *     @type string $before_page_number A string to appear before the page number. Default empty.
 *     @type string $after_page_number  A string to append after the page number. Default empty.
 * }
 * @return array|string|void String of page links or array of page links.
 */
function paginate_links_mmgv($args = '') {
    global $wp_query, $wp_rewrite;

    // Setting up default values based on the current URL.
    $pagenum_link = html_entity_decode(get_pagenum_link());
    $url_parts = explode('?', $pagenum_link);

    // Get max pages and current page out of the current query, if available.
    $total = isset($wp_query->max_num_pages) ? $wp_query->max_num_pages : 1;
    $current = get_query_var('paged') ? intval(get_query_var('paged')) : 1;

    // Append the format placeholder to the base URL.
    $pagenum_link = trailingslashit($url_parts[0]) . '%_%';

    // URL base depends on permalink settings.
    $format = $wp_rewrite->using_index_permalinks() && !strpos($pagenum_link, 'index.php') ? 'index.php/' : '';
    $format .= $wp_rewrite->using_permalinks() ? user_trailingslashit($wp_rewrite->pagination_base . '/%#%', 'paged') : '?paged=%#%';

    $defaults = array(
        'base' => $pagenum_link, // http://example.com/all_posts.php%_% : %_% is replaced by format (below)
        'format' => $format, // ?page=%#% : %#% is replaced by the page number
        'total' => $total,
        'current' => $current,
        'show_all' => false,
        'prev_next' => true,
        'prev_text' => __('&laquo; Previous'),
        'next_text' => __('Next &raquo;'),
        'end_size' => 1,
        'mid_size' => 2,
        'type' => 'plain',
        'add_args' => array(), // array of query args to add
        'add_fragment' => '',
        'before_page_number' => '',
        'after_page_number' => ''
    );

    $args = wp_parse_args($args, $defaults);

    if (!is_array($args['add_args'])) {
        $args['add_args'] = array();
    }

    // Merge additional query vars found in the original URL into 'add_args' array.
    if (isset($url_parts[1])) {
        // Find the format argument.
        $format = explode('?', str_replace('%_%', $args['format'], $args['base']));
        $format_query = isset($format[1]) ? $format[1] : '';
        wp_parse_str($format_query, $format_args);

        // Find the query args of the requested URL.
        wp_parse_str($url_parts[1], $url_query_args);

        // Remove the format argument from the array of query arguments, to avoid overwriting custom format.
        foreach ($format_args as $format_arg => $format_arg_value) {
            unset($url_query_args[$format_arg]);
        }

        $args['add_args'] = array_merge($args['add_args'], urlencode_deep($url_query_args));
    }

    // Who knows what else people pass in $args
    $total = (int) $args['total'];
    if ($total < 2) {
        return;
    }
    $current = (int) $args['current'];
    $end_size = (int) $args['end_size']; // Out of bounds?  Make it the default.
    if ($end_size < 1) {
        $end_size = 0;
    }
    $mid_size = (int) $args['mid_size'];
    if ($mid_size < 0) {
        $mid_size = 2;
    }
    $add_args = $args['add_args'];
    $r = '';
    $page_links = array();
    $dots = false;

    //if ( $args['prev_next'] && $current && 1 < $current ) :
    $link = str_replace('%_%', 2 == $current ? '' : $args['format'], $args['base']);
    $link = str_replace('%#%', $current - 1, $link);
    if ($add_args)
        $link = add_query_arg($add_args, $link);
    $link .= $args['add_fragment'];

    /**
     * Filter the paginated links for the given archive pages.
     *
     * @since 3.0.0
     *
     * @param string $link The paginated link URL.
     */
    $page_links[] = '<a class="prev page-numbers" href="' . esc_url(apply_filters('paginate_links', $link)) . '">' . $args['prev_text'] . '</a>';
    //endif;
    for ($n = 1; $n <= $total; $n++) :
        if ($n == $current) :
            $page_links[] = "<span class='page-numbers current'>" . $args['before_page_number'] . number_format_i18n($n) . $args['after_page_number'] . "</span>";
            $dots = true;
        else :
            if ($args['show_all'] || ( $n <= $end_size || ( $current && $n >= $current - $mid_size && $n <= $current + $mid_size ) || $n > $total - $end_size )) :
                $link = str_replace('%_%', 1 == $n ? '' : $args['format'], $args['base']);
                $link = str_replace('%#%', $n, $link);
                if ($add_args)
                    $link = add_query_arg($add_args, $link);
                $link .= $args['add_fragment'];

                /** This filter is documented in wp-includes/general-template.php */
                $page_links[] = "<a class='page-numbers' href='" . esc_url(apply_filters('paginate_links', $link)) . "'>" . $args['before_page_number'] . number_format_i18n($n) . $args['after_page_number'] . "</a>";
                $dots = true;
            elseif ($dots && !$args['show_all']) :
                $page_links[] = '<span class="page-numbers dots">' . __('&hellip;') . '</span>';
                $dots = false;
            endif;
        endif;
    endfor;
    if ($args['prev_next'] && $current && ( $current < $total || -1 == $total )) :
        $link = str_replace('%_%', $args['format'], $args['base']);
        $link = str_replace('%#%', $current + 1, $link);
        if ($add_args)
            $link = add_query_arg($add_args, $link);
        $link .= $args['add_fragment'];

        /** This filter is documented in wp-includes/general-template.php */
        $page_links[] = '<a class="next page-numbers" href="' . esc_url(apply_filters('paginate_links', $link)) . '">' . $args['next_text'] . '</a>';
    endif;
    switch ($args['type']) {
        case 'array' :
            return $page_links;

        case 'list' :
            $r .= "<ul class='page-numbers'>\n\t<li>";
            $r .= join("</li>\n\t<li>", $page_links);
            $r .= "</li>\n</ul>\n";
            break;

        default :
            $r = join("\n", $page_links);
            break;
    }
    return $r;
}

// Custom Post Type Search

function template_chooser($template){    
  global $wp_query;   
  $post_type = get_query_var('post_type');   
  if( isset($_GET['s']) && $post_type == 'artigos' ){
    return locate_template('search-artigos.php');  //  redirect to search-artigos.php
  }elseif (isset($_GET['s']) && $post_type == 'palestras'){
  	return locate_template('search-palestras.php');  //  redirect to search-palestras.php
  }   
  return $template;   
}
add_filter('template_include', 'template_chooser');



