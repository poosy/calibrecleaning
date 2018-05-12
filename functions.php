<?php

////////////////////////////////////////////////////////////////////////
//
//  Theme Setup
//
////////////////////////////////////////////////////////////////////////

function themestreet_setup() {
    load_theme_textdomain('themestreet', get_template_directory() . '/languages');
    add_theme_support('automatic-feed-links');
    register_nav_menu('primary', __('Navigation Menu', 'themestreet'));
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'themestreet_setup');

// Image size

add_image_size( 'testimonial-thumb', 134, 134, true ); // Hard Crop Mode

// Scripts & Styles (based on twentythirteen: http://make.wordpress.org/core/tag/twentythirteen/)
function themestreet_scripts_styles() {
    global $wp_styles;

    // Load Comments
    if (is_singular() && comments_open() && get_option('thread_comments'))
        wp_enqueue_script('comment-reply');
}

add_action('wp_enqueue_scripts', 'themestreet_scripts_styles');

// WP Title (based on twentythirteen: http://make.wordpress.org/core/tag/twentythirteen/)
function themestreet_wp_title($title, $sep) {
    global $paged, $page;

    if (is_feed())
        return $title;

//		 Add the site name.
    $title .= get_bloginfo('name');

//		 Add the site description for the home/front page.
    $site_description = get_bloginfo('description', 'display');
    if ($site_description && ( is_home() || is_front_page() ))
        $title = "$title $sep $site_description";

//		 Add a page number if necessary.
    if ($paged >= 2 || $page >= 2)
        $title = "$title $sep " . sprintf(__('Page %s', 'themestreet'), max($paged, $page));

    return $title;
}

add_filter('wp_title', 'themestreet_wp_title', 10, 2);

////////////////////////////////////////////////////////////////////////
//
// Enqueue scripts
//
////////////////////////////////////////////////////////////////////////

//// CSS

function themestreet_scripts_css() {
    wp_enqueue_style('themestreet-painting', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'themestreet_scripts_css');

//// JS

function themestreet_scripts_js() {
    wp_enqueue_script('modernizr', get_template_directory_uri() . '/js/modernizr-2.8.0.dev.js', '', '', true);
    wp_enqueue_script('custom-functions-all', get_template_directory_uri() . '/js/all.min.js', array('jquery'), '', true);
    wp_enqueue_script('custom-functions-init', get_template_directory_uri() . '/js/init.js', array('jquery'), '', true);
    wp_enqueue_script('wysija-validation-one', esc_url(plugins_url()) . '/wysija-newsletters/js/validate/languages/jquery.validationEngine-en.js', array('jquery'), '', false);
    wp_enqueue_script('wysija-validation-two', esc_url(plugins_url()) . '/wysija-newsletters/js/validate/jquery.validationEngine.js', array('jquery'), '', false);
    wp_enqueue_script('wysija-validation-subscribers', esc_url(plugins_url()) . '/wysija-newsletters/js/front-subscribers.js', array('jquery'), '', false);
}

add_action('wp_enqueue_scripts', 'themestreet_scripts_js');

////////////////////////////////////////////////////////////////////////
//
// EXCERPT
//
////////////////////////////////////////////////////////////////////////

// Custom Excerpts
function excerpt_index($length) // Create 20 Word Callback for Index page Excerpts, call using wp_excerpt('excerpt_index');
{
    return 20;
}

// Create 40 Word Callback for Custom Post Excerpts, call using wp_excerpt('excerpt_custom');
function excerpt_custom($length)
{
    return 40;
}

function excerpt_sidebar($length)
{
    return 6;
}
function new_excerpt_more( $more ) {
	return ' ...';
}
add_filter('excerpt_more', 'new_excerpt_more');

// Create the Custom Excerpts callback
function wp_excerpt($length_callback = '', $more_callback = '')
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

////////////////////////////////////////////////////////////////////////
//
// Load jQuery
//
////////////////////////////////////////////////////////////////////////

if (!function_exists('core_mods')) {

    function core_mods() {
        if (!is_admin()) {
            wp_deregister_script('jquery');
            wp_register_script('jquery', ( "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"), false);
            wp_enqueue_script('jquery');
        }
    }

    add_action('wp_enqueue_scripts', 'core_mods');
}

// Clean up the <head>, if you so desire.
//	function removeHeadLinks() {
//    	remove_action('wp_head', 'rsd_link');
//    	remove_action('wp_head', 'wlwmanifest_link');
//    }
//    add_action('init', 'removeHeadLinks');

////////////////////////////////////////////////////////////////////////
//
// EXTRAS
//
////////////////////////////////////////////////////////////////////////

// Move Yoast to bottom
function yoasttobottom() {
	return 'low';
}
add_filter( 'wpseo_metabox_prio', 'yoasttobottom');

////////////////////////////////////////////////////////////////////////
//
// MENUS
//
////////////////////////////////////////////////////////////////////////

// Custom Menu
register_nav_menu('primary', __('Navigation Menu', 'themestreet'));
// Footer Menus
register_nav_menu('footer-col-1', __('Footer Column 1', 'themestreet'));
register_nav_menu('footer-col-2', __('Footer Column 2', 'themestreet'));
register_nav_menu('footer-col-3', __('Footer Column 3', 'themestreet'));
register_nav_menu('footer-col-4', __('Footer Column 4', 'themestreet'));
register_nav_menu('bottom-menu', __('Bottom menu', 'themestreet'));
register_nav_menu('booking-menu', __('Booking menu', 'themestreet'));


////////////////////////////////////////////////////////////////////////
//
// Custom walker for bottom menu (removes li, adds custom classes to a)
//
////////////////////////////////////////////////////////////////////////

class bottom_menu_Walker extends Walker_Nav_Menu {

    /**
     * Start the element output.
     *
     * @param  string $output Passed by reference. Used to append additional content.
     * @param  object $item   Menu item data object.
     * @param  int $depth     Depth of menu item. May be used for padding.
     * @param  array $args    Additional strings.
     * @return void
     */
    function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
        $indent = ( $depth ) ? str_repeat("\t", $depth) : '';

        $class_names = $value = '';

        $classes = empty($item->classes) ? array() : (array) $item->classes;
        $classes[] = 'menu-item-' . $item->ID;

        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
        $class_names = $class_names ? ' class="btn btn--primary btn--transparent ml-- mv-- ' . esc_attr($class_names) . '"' : '';

        $id = apply_filters('nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args);
        $id = $id ? ' id="' . esc_attr($id) . '"' : '';

        $atts = array();
        $atts['title'] = !empty($item->attr_title) ? $item->attr_title : '';
        $atts['target'] = !empty($item->target) ? $item->target : '';
        $atts['rel'] = !empty($item->xfn) ? $item->xfn : '';
        $atts['href'] = !empty($item->url) ? $item->url : '';

        $atts = apply_filters('nav_menu_link_attributes', $atts, $item, $args);

        $attributes = '';
        foreach ($atts as $attr => $value) {
            if (!empty($value)) {
                $value = ( 'href' === $attr ) ? esc_url($value) : esc_attr($value);
                $attributes .= ' ' . $attr . '="' . $value . '"';
            }
        }
        $item_output = $args->before;
        $item_output .= '<a' . $attributes .  $class_names.'>';
        $item_output .= $args->link_before . apply_filters('the_title', $item->title, $item->ID) . $args->link_after;
        $item_output .= '</a>';
        $item_output .= $args->after;

        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }

    /**
     * @see Walker::end_el()
     * @since 3.0.0
     *
     * @param string $output Passed by reference. Used to append additional content.
     * @param object $item Page data object. Not used.
     * @param int $depth Depth of page. Not Used.
     */
    function end_el(&$output, $item, $depth = 0, $args = array()) {
        $output .= "\n";
    }

}

if (function_exists('register_sidebar')) {

    function themestreet_widgets_init() {
        register_sidebar(array(
            'name' => __('Sidebar Widgets', 'themestreet'),
            'id' => 'sidebar-primary',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        ));
    }

    add_action('widgets_init', 'themestreet_widgets_init');
}

////////////////////////////////////////////////////////////////////////
//
// ALLOW SVG
//
////////////////////////////////////////////////////////////////////////

function wpcontent_svg_mime_type( $mimes = array() ) {
  $mimes['svg']  = 'image/svg+xml';
  $mimes['svgz'] = 'image/svg+xml';
  return $mimes;
}
add_filter( 'upload_mimes', 'wpcontent_svg_mime_type' );

////////////////////////////////////////////////////////////////////////
//
// Navigation
//
////////////////////////////////////////////////////////////////////////

function post_navigation() {
    echo '<div class="navigation">';
    echo '	<div class="next-posts">' . get_next_posts_link('&laquo; Older Entries') . '</div>';
    echo '	<div class="prev-posts">' . get_previous_posts_link('Newer Entries &raquo;') . '</div>';
    echo '</div>';
}
// Faq navigation
function post_navigation_faq() {
    echo '<div class="navigation layout">';
    echo '	<div class="next-posts layout__item large-and-up-1/3 desktop-text-left">' . get_next_posts_link('&laquo; Older Entries') . '</div>';
    echo '      <div class="back-to layout__item large-and-up-1/3 desktop-text-center"><a href="' . esc_url(home_url('/')) . 'help/">Back to Help</a></div>';
    echo '	<div class="prev-posts layout__item large-and-up-1/3 desktop-text-right">' . get_previous_posts_link('Newer Entries &raquo;') . '</div>';
    echo '</div>';
}

////////////////////////////////////////////////////////////////////////
//
// POSTED ON
//
////////////////////////////////////////////////////////////////////////

function posted_on() {
    printf(__('<span class="sep">Posted </span><a href="%1$s" title="%2$s" rel="bookmark"><time class="entry-date" datetime="%3$s" pubdate>%4$s</time></a> by <span class="byline author vcard">%5$s</span>', ''), esc_url(get_permalink()), esc_attr(get_the_time()), esc_attr(get_the_date('c')), esc_html(get_the_date()), esc_attr(get_the_author())
    );
}

////////////////////////////////////////////////////////////////////////
//
// NUMERIC PAGINATION
//
////////////////////////////////////////////////////////////////////////

function themestreet_numeric_posts_nav() {

	if( is_singular() )
		return;

	global $wp_query;

	/** Stop execution if there's only 1 page */
	if( $wp_query->max_num_pages <= 1 )
		return;

	$paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
	$max   = intval( $wp_query->max_num_pages );

	/**	Add current page to the array */
	if ( $paged >= 1 )
		$links[] = $paged;

	/**	Add the pages around the current page to the array */
	if ( $paged >= 3 ) {
		$links[] = $paged - 1;
		$links[] = $paged - 2;
	}

	if ( ( $paged + 2 ) <= $max ) {
		$links[] = $paged + 2;
		$links[] = $paged + 1;
	}

	echo '<div class="blog-content__pagination"><ul class="list-bare list-inline">' . "\n";

	/**	Previous Post Link */
	if ( get_previous_posts_link() )
		printf( '<li>%s</li>' . "\n", get_previous_posts_link() );

	/**	Link to first page, plus ellipses if necessary */
	if ( ! in_array( 1, $links ) ) {
		$class = 1 == $paged ? ' class="is-active"' : '';

		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );

		if ( ! in_array( 2, $links ) )
			echo '<li>…</li>';
	}

	/**	Link to current page, plus 2 pages in either direction if necessary */
	sort( $links );
	foreach ( (array) $links as $link ) {
		$class = $paged == $link ? ' class="active"' : '';
		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
	}

	/**	Link to last page, plus ellipses if necessary */
	if ( ! in_array( $max, $links ) ) {
		if ( ! in_array( $max - 1, $links ) )
			echo '<li>…</li>' . "\n";

		$class = $paged == $max ? ' class="active"' : '';
		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
	}

	/**	Next Post Link */
	if ( get_next_posts_link() )
		printf( '<li>%s</li>' . "\n", get_next_posts_link() );

	echo '</ul></div>' . "\n";

}



////////////////////////////////////////////////////////////////////////
//
//  Advanced Custom fields registering Options sub-pages
//
////////////////////////////////////////////////////////////////////////

if (function_exists("register_options_page")) {
    register_options_page('Details');
    register_options_page('Contact');
}

////////////////////////////////////////////////////////////////////////
//
// FAQ POST TYPE
//
////////////////////////////////////////////////////////////////////////

add_action('init', 'create_faq_post_type'); // Add our FAQ Post Type
add_action('init', 'create_faq_categories_taxonomy'); // Add our FAQ Categories taxonomy

// Create FAQ Post type
function create_faq_post_type()
{
    register_post_type('faq', // Register FAQ Post Type
        array(
        'labels' => array(
            'name' => __('FAQs', 'themestreet'), // Rename these to suit
            'singular_name' => __('FAQ', 'themestreet'),
            'add_new' => __('Add New', 'themestreet'),
            'add_new_item' => __('Add New FAQ', 'themestreet'),
            'edit' => __('Edit', 'themestreet'),
            'edit_item' => __('Edit FAQ', 'themestreet'),
            'new_item' => __('New FAQ', 'themestreet'),
            'view' => __('View FAQ', 'themestreet'),
            'view_item' => __('View FAQ', 'themestreet'),
            'search_items' => __('Search FAQ', 'themestreet'),
            'not_found' => __('No FAQs found', 'themestreet'),
            'not_found_in_trash' => __('No FAQs found in Trash', 'themestreet')
        ),
        'public' => true,
        'hierarchical' => true, // Allows your posts to behave like Hierarchy Pages
        'has_archive' => true,
        'supports' => array(
            'title',
            'editor',
        ), // Go to Dashboard FAQ for supports
        'can_export' => true, // Allows export in Tools > Export
    ));
}

// Create FAQ Categories taxonomy
function create_faq_categories_taxonomy()
{
    $labels = array(
        'name'              => __( 'FAQ Categories', 'themestreet' ),
        'singular_name'     => __( 'Category', 'themestreet' ),
        'search_items'      => __( 'Search Categories', 'themestreet' ),
        'all_items'         => __( 'All Categories', 'themestreet' ),
        'parent_item'       => __( 'Parent Category', 'themestreet' ),
        'parent_item_colon' => __( 'Parent Category:', 'themestreet' ),
        'edit_item'         => __( 'Edit Category', 'themestreet' ), 
        'update_item'       => __( 'Update Category', 'themestreet' ),
        'add_new_item'      => __( 'Add New Category', 'themestreet' ),
        'new_item_name'     => __( 'New Category', 'themestreet' ),
        'menu_name'         => __( 'Categories', 'themestreet' ),
    );

    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
    );

    register_taxonomy( 'faq_category', 'faq', $args );
}

////////////////////////////////////////////////////////////////////////
//
// TESTIMONIAL POST TYPE
//
////////////////////////////////////////////////////////////////////////

add_action('init', 'create_testimonials_post_type'); // Add our Testimonial Post Type

// Create Testimonial Post type
function create_testimonials_post_type()
{
    register_post_type('testimonials', // Register Testimonial Post Type
        array(
        'labels' => array(
            'name' => __('Testimonials', 'themestreet'), // Rename these to suit
            'singular_name' => __('Testimonial', 'themestreet'),
            'add_new' => __('Add New', 'themestreet'),
            'add_new_item' => __('Add New Testimonial', 'themestreet'),
            'edit' => __('Edit', 'themestreet'),
            'edit_item' => __('Edit testimonial', 'themestreet'),
            'new_item' => __('New testimonial', 'themestreet'),
            'view' => __('View testimonial', 'themestreet'),
            'view_item' => __('View testimonial', 'themestreet'),
            'search_items' => __('Search testimonials', 'themestreet'),
            'not_found' => __('No testimonials found', 'themestreet'),
            'not_found_in_trash' => __('No testimonials found in Trash', 'themestreet')
        ),
        'public' => true,
        'hierarchical' => true, // Allows your posts to behave like Hierarchy Pages
        'has_archive' => true,
        'supports' => array(
            'title',
            'editor',
        ), // Go to Dashboard Testimonial for supports
        'can_export' => true, // Allows export in Tools > Export
    ));
}

function custom_excerpt_length( $length ) { return 65; } add_filter( 'excerpt_length', 'custom_excerpt_length', 999 ); 

////////////////////////////////////////////////////////////////////////
//
// Include the TGM_Plugin_Activation class.
//
////////////////////////////////////////////////////////////////////////

require_once dirname( __FILE__ ) . '/lib/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'my_theme_register_required_plugins' );
/**
 * Register the required plugins for this theme.
 *
 * In this example, we register two plugins - one included with the TGMPA library
 * and one from the .org repo.
 *
 * The variable passed to tgmpa_register_plugins() should be an array of plugin
 * arrays.
 *
 * This function is hooked into tgmpa_init, which is fired within the
 * TGM_Plugin_Activation class constructor.
 */
function my_theme_register_required_plugins() {

    /**
     * Array of plugin arrays. Required keys are name and slug.
     * If the source is NOT from the .org repo, then source is also required.
     */
    $plugins = array(


        // This is an example of how to include a plugin from the WordPress Plugin Repository.
        array(
            'name'      => 'Advanced Custom Fields',
            'slug'      => 'advanced-custom-fields',
            'required'  => true,
        ),
        array(
            'name'      => 'Contact Form 7',
            'slug'      => 'contact-form-7',
            'required'  => true,
        ),
        array(
            'name'      => 'Live Edit',
            'slug'      => 'live-edit',
            'required'  => false,
        ),
        
        // This is an example of how to include a plugin pre-packaged with a theme.
        array(
            'name'               => 'Advanced Custom Fields: Options Page', // The plugin name.
            'slug'               => 'acf-options-page', // The plugin slug (typically the folder name).
            'source'             => get_stylesheet_directory() . '/lib/plugins/acf-options-page.zip', // The plugin source.
            'required'           => true, // If false, the plugin is only 'recommended' instead of required.
            'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher.
            'force_activation'   => true, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
            'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
            'external_url'       => '', // If set, overrides default API URL and points to an external URL.
        ),

        array(
            'name'               => 'Advanced Custom Fields: Repeater Field', // The plugin name.
            'slug'               => 'acf-repeater', // The plugin slug (typically the folder name).
            'source'             => get_stylesheet_directory() . '/lib/plugins/acf-repeater.zip', // The plugin source.
            'required'           => true, // If false, the plugin is only 'recommended' instead of required.
            'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher.
            'force_activation'   => true, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
            'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
            'external_url'       => '', // If set, overrides default API URL and points to an external URL.
        ),

    );

    /**
     * Array of configuration settings. Amend each line as needed.
     * If you want the default strings to be available under your own theme domain,
     * leave the strings uncommented.
     * Some of the strings are added into a sprintf, so see the comments at the
     * end of each line for what each argument will be.
     */
    $config = array(
        'default_path' => '',                      // Default absolute path to pre-packaged plugins.
        'menu'         => 'tgmpa-install-plugins', // Menu slug.
        'has_notices'  => true,                    // Show admin notices or not.
        'dismissable'  => false,                    // If false, a user cannot dismiss the nag message.
        'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
        'is_automatic' => false,                   // Automatically activate plugins after installation or not.
        'message'      => '',                      // Message to output right before the plugins table.
        'strings'      => array(
            'page_title'                      => __( 'Install Required Plugins', 'tgmpa' ),
            'menu_title'                      => __( 'Install Plugins', 'tgmpa' ),
            'installing'                      => __( 'Installing Plugin: %s', 'tgmpa' ), // %s = plugin name.
            'oops'                            => __( 'Something went wrong with the plugin API.', 'tgmpa' ),
            'notice_can_install_required'     => _n_noop( 'This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.' ), // %1$s = plugin name(s).
            'notice_can_install_recommended'  => _n_noop( 'This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.' ), // %1$s = plugin name(s).
            'notice_cannot_install'           => _n_noop( 'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.' ), // %1$s = plugin name(s).
            'notice_can_activate_required'    => _n_noop( 'The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.' ), // %1$s = plugin name(s).
            'notice_can_activate_recommended' => _n_noop( 'The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.' ), // %1$s = plugin name(s).
            'notice_cannot_activate'          => _n_noop( 'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.' ), // %1$s = plugin name(s).
            'notice_ask_to_update'            => _n_noop( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.' ), // %1$s = plugin name(s).
            'notice_cannot_update'            => _n_noop( 'Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.' ), // %1$s = plugin name(s).
            'install_link'                    => _n_noop( 'Begin installing plugin', 'Begin installing plugins' ),
            'activate_link'                   => _n_noop( 'Begin activating plugin', 'Begin activating plugins' ),
            'return'                          => __( 'Return to Required Plugins Installer', 'tgmpa' ),
            'plugin_activated'                => __( 'Plugin activated successfully.', 'tgmpa' ),
            'complete'                        => __( 'All plugins installed and activated successfully. %s', 'tgmpa' ), // %s = dashboard link.
            'nag_type'                        => 'updated' // Determines admin notice type - can only be 'updated', 'update-nag' or 'error'.
        )
    );

    tgmpa( $plugins, $config );

}

?>