<?php
/**
 * Success Career functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Success_Career
 * @since 1.0
 */

/**
 * Sets up theme defaults and registers support for various WordPress features
 *
 *  @since Success Career 1.0
 */
function successcareer_setup() {


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

	add_image_size( 'successcareer-featured-image', 2000, 1200, true );

	add_image_size( 'successcareer-thumbnail-avatar', 100, 100, true );

	// Set the default content width.
	$GLOBALS['content_width'] = 525;

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'successcareer' ),
	) );

	// create sidebar
	$sidebar =  array(
		'name' => __('Main Sidebar', 'successcareer'),
		'id' => 'maint-sidebar',
		'description' => __('Default sidebar'),
		'class' => 'main-sidebar',
		'before_title' => '<h3 class="widgettitle">',
		'after_title' => '</h3>'
	);
	register_sidebar($sidebar);

	// This theme uses wp_nav_menu() in two locations.
	// register_nav_menus( array(
	// 	'top'    => __( 'Top Menu', 'successcareer' ),
	// 	'social' => __( 'Social Links Menu', 'successcareer' ),
	// ) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
		'gallery',
		'audio',
	) );

	// Add theme support for Custom Logo.
	add_theme_support( 'custom-logo', array(
		'width'       => 250,
		'height'      => 250,
		'flex-width'  => true,
	) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, and column width.
 	 */
	// add_editor_style( array( 'assets/css/editor-style.css', successcareer_fonts_url() ) );

	// Define and register starter content to showcase the theme on new sites.
	// $starter_content = array(
	// 	'widgets' => array(
	// 		// Place three core-defined widgets in the sidebar area.
	// 		'sidebar-1' => array(
	// 			'text_business_info',
	// 			'search',
	// 			'text_about',
	// 		),

	// 		// Add the core-defined business info widget to the footer 1 area.
	// 		'sidebar-2' => array(
	// 			'text_business_info',
	// 		),

	// 		// Put two core-defined widgets in the footer 2 area.
	// 		'sidebar-3' => array(
	// 			'text_about',
	// 			'search',
	// 		),
	// 	),

	// 	// Specify the core-defined pages to create and add custom thumbnails to some of them.
	// 	'posts' => array(
	// 		'home',
	// 		'about' => array(
	// 			'thumbnail' => '{{image-sandwich}}',
	// 		),
	// 		'contact' => array(
	// 			'thumbnail' => '{{image-espresso}}',
	// 		),
	// 		'blog' => array(
	// 			'thumbnail' => '{{image-coffee}}',
	// 		),
	// 		'homepage-section' => array(
	// 			'thumbnail' => '{{image-espresso}}',
	// 		),
	// 	),

	// 	// Create the custom image attachments used as post thumbnails for pages.
	// 	'attachments' => array(
	// 		'image-espresso' => array(
	// 			'post_title' => _x( 'Espresso', 'Theme starter content', 'successcareer' ),
	// 			'file' => 'assets/images/espresso.jpg', // URL relative to the template directory.
	// 		),
	// 		'image-sandwich' => array(
	// 			'post_title' => _x( 'Sandwich', 'Theme starter content', 'successcareer' ),
	// 			'file' => 'assets/images/sandwich.jpg',
	// 		),
	// 		'image-coffee' => array(
	// 			'post_title' => _x( 'Coffee', 'Theme starter content', 'successcareer' ),
	// 			'file' => 'assets/images/coffee.jpg',
	// 		),
	// 	),

	// 	// Default to a static front page and assign the front and posts pages.
	// 	'options' => array(
	// 		'show_on_front' => 'page',
	// 		'page_on_front' => '{{home}}',
	// 		'page_for_posts' => '{{blog}}',
	// 	),

	// 	// Set the front page section theme mods to the IDs of the core-registered pages.
	// 	'theme_mods' => array(
	// 		'panel_1' => '{{homepage-section}}',
	// 		'panel_2' => '{{about}}',
	// 		'panel_3' => '{{blog}}',
	// 		'panel_4' => '{{contact}}',
	// 	),

	// 	// Set up nav menus for each of the two areas registered in the theme.
	// 	'nav_menus' => array(
	// 		// Assign a menu to the "top" location.
	// 		'top' => array(
	// 			'name' => __( 'Top Menu', 'successcareer' ),
	// 			'items' => array(
	// 				'link_home', // Note that the core "home" page is actually a link in case a static front page is not used.
	// 				'page_about',
	// 				'page_blog',
	// 				'page_contact',
	// 			),
	// 		),

	// 		// Assign a menu to the "social" location.
	// 		'social' => array(
	// 			'name' => __( 'Social Links Menu', 'successcareer' ),
	// 			'items' => array(
	// 				'link_yelp',
	// 				'link_facebook',
	// 				'link_twitter',
	// 				'link_instagram',
	// 				'link_email',
	// 			),
	// 		),
	// 	),
	// );

	/**
	 * Filters Twenty Seventeen array of starter content.
	 *
	 * @since Twenty Seventeen 1.1
	 *
	 * @param array $starter_content Array of starter content.
	 */
	// $starter_content = apply_filters( 'successcareer_starter_content', $starter_content );

	// add_theme_support( 'starter-content', $starter_content );
}
add_action( 'after_setup_theme', 'successcareer_setup' );

//setup logo
if(!function_exists('successcareer_header')) {
	function successcareer_header() {
		printf('<a href="%1$s" title="%2$s">%3$s</a>',
		get_bloginfo('url'),
		get_bloginfo('description'),
		get_bloginfo('sitename') );
	}
}

// setup nav
if(!function_exists('successcareer_menu')) {
	function successcareer_menu($menu) {
		$menu = array(
			'them_location' => $menu,
			'container' => 'div',
			'container_id' => 'top-bar',
			'container_class' => 'menu-career-container',
			'menu_class' => 'menu'
		);
		wp_nav_menu($menu);
	}
}

function special_nav_class ($classes, $item) {
	if (strpos(strtolower($item->title), 'job') !== false) {
    $classes[] = 'menu-item-jobs';
	}
	if ($item->type == 'custom' && $item->url == '#') {
		$classes[] = 'menu-btn';
	} else {
		$classes[] = 'menu-page';
	}
	if (in_array('current-menu-item', $classes) ){
		$classes[] = 'menu-item-active';
	}
	return $classes;
}

add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

/**
 * Echo list partner
 *
 * @param int $post_id Post ID.
 */
if(!function_exists('successcareer_echo_list_partner')) {
	function successcareer_echo_list_partner( $post_id ) {
		$args = array(
			'order'          => 'ASC',
			'post_mime_type' => 'image',
			'post_parent'    => $post_id,
			'post_type'      => 'attachment',
		);
		$attachments = get_children( $args );
		if ( $attachments ) {
			$partner = '<div class="row justify-content-md-center">';
			foreach ( $attachments as $attachment ) {
				$image_attributes = wp_get_attachment_image_src( $attachment->ID, 'full' );
				$partner .= '<div class="col-lg-2 col-sm-2 item">
						<img class="img-fluid" src="'.$image_attributes[0].'" alt="Generic placeholder image" width="100" height="100">
					</div>';
			}
			$partner .= '</div>';
			echo $partner;
		}
	}
}

if(!function_exists('generate_tab_jobs')) {
	function generate_tab_jobs($jobDetail, $level_jobs) {
		$jobTabs = '';
		$loopItem = 0;
		foreach($level_jobs as $key => $level) {
			$class = '';
			if(intval($jobDetail["quantity_$key"]) !== 0) {
				$class = ($loopItem === 0) ? 'active' : '';
				$jobTabs .= '<li class="'.$class.'">
								<a href="#">'.$level.'</a>
							</li>';
				$loopItem++;
			}
		}
		echo $jobTabs;
	}
}

function successcareer_pagination($query) {
	global $paged;
	/** if 1 item than stop process */
	if( $query->max_num_pages <= 1 )
		return;
	$paged = $paged ? $paged : 1;
	$max = intval( $query->max_num_pages );
	/** add page selecting to array*/
	if ( $paged >= 1 )
		$links[] = $paged;
	/** add page differance to array */
	if ( $paged >= 3 ) {
		$links[] = $paged - 1;
		$links[] = $paged - 2;
	}
	if ( ( $paged + 2 ) <= $max ) {
		$links[] = $paged + 2;
		$links[] = $paged + 1;
	}
	echo '<ul class="list-inline">' . "\n";
	/** if first page */
	if ( ! in_array( 1, $links ) ) {
		$tabPagination = (1 === $paged) ? '<span>1</span>' : '<a href="'.esc_url( get_pagenum_link( 1 ) ).'">1</a>';
		printf( '<li>%s</li>' . "\n", $tabPagination);
		if ( ! in_array( 2, $links ) )
			echo '<li>…</li>';
	}
	sort( $links );
	foreach ( (array) $links as $link ) {
		$tabPagination = ($paged === $link) ? '<span>'.$link.'</span>' : '<a href="'.esc_url( get_pagenum_link( $link ) ).'">'.$link.'</a>';
		printf( '<li>%s</li>' . "\n", $tabPagination);
	}
	/** If last page */
	if ( ! in_array( $max, $links ) ) {
		if ( ! in_array( $max - 1, $links ) ){
			echo '<li>…</li>' . "\n";
		}
		$tabPagination = ($paged === $max) ? '<span>'.$max.'</span>' : '<a href="'.esc_url( get_pagenum_link( $max ) ).'">'.$max.'</a>';
		printf( '<li>%s</li>' . "\n", $tabPagination);
	}
}

if(!function_exists('successcareer_show_carousel')) {
	function successcareer_show_carousel($cat_slug, $limit) {
		$htmls = '<div class="modal s-modal fade bd-example-modal-lg" id="sModal-'.$cat_slug.'" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		  <div class="modal-content">
			  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			  </button>
			<div class="modal-body">
			  <div class="owl-carousel owl-theme">';
		$query = [
			'category_name' => $cat_slug,
			'posts_per_page' => $limit,
			'post_status' => 'publish',
			'order'=> 'ASC',
			'post_type' => 'post',
		];
		$dataId = 0;
		$memorys = query_posts($query);
		if ( have_posts() ) : 
			while ( have_posts() ) : the_post();
			$image = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'single-post-thumbnail');
			$htmls .= '<div class="item">
							<div class="img">
							<div class="s-thumbnail" data-img="'.$dataId.'">
								<img src="'.$image[0].'" alt="">
							</div>
							</div>
							<p>'.get_the_excerpt().'</p>
						</div>';
			$dataId++;
			endwhile;
		endif; 
		wp_reset_query();
		$htmls .= '</div></div></div></div></div>';
		echo $htmls;
	}
}

function successcareer_wpcf7_form_elements_default($html){
	function successcareer_replace_include_blank_default($name, $text, &$html){
		$matches = false;
		preg_match('/<select name="' . $name . '"[^>]*>(.*)<\/select>/iU', $html, $matches);
		if ($matches){
			$select = str_replace('<option value="">---</option>', '<option value="">' . $text . '</option>', $matches[0]);
			$html = preg_replace('/<select name="' . $name . '"[^>]*>(.*)<\/select>/iU', $select, $html);
		}
	}
	successcareer_replace_include_blank_default('your-level', 'Level', $html);
	return $html;
}
 
add_filter('wpcf7_form_elements', 'successcareer_wpcf7_form_elements_default');

function successcareer_wpcf7_form_elements_post_type($html){
	function successcareer_replace_include_blank_post_type($name, $text, &$html){
		$matches = false;
		preg_match('/<select name="' . $name . '"[^>]*>(.*)<\/select>/iU', $html, $matches);
		if ($matches){
			$select = str_replace('<option value="" data-id="-1">&mdash; Select &mdash;</option>', '<option value="">' . $text . '</option>', $matches[0]);
			$html = preg_replace('/<select name="' . $name . '"[^>]*>(.*)<\/select>/iU', $select, $html);
		}
	}
	successcareer_replace_include_blank_post_type('your-role', 'Role you are interested in', $html);
	return $html;
}
 
add_filter('wpcf7_form_elements', 'successcareer_wpcf7_form_elements_post_type');

function successcareer_custom_validation_upload_file( $result, $tag)
{	
	$type = $tag['type'];
	$name = $tag['name'];
	if($type == 'file*' && $_FILES[$name] != ''){ 
		$filename = $_FILES[$name]['name'];
		$filetype = $_FILES[$name]['type'];
		$ext = pathinfo($filename, PATHINFO_EXTENSION);
		$allowedExts = array("pdf", "doc", "docx", "PDF", "DOC", "DOCX", "Pdf", "Doc", "Docx");
		if ((($filetype == "application/pdf")
			|| ($filetype == "application/msword")
			|| ($filetype == "application/vnd.openxmlformats-officedocument.wordprocessingml.document"))
			&& in_array($ext, $allowedExts)) {
			if ($_FILES[$name]["error"] > 0){
				$result->invalidate($name, $_FILES[$name]["error"]);
			}
		} else {
			$result->invalidate( $name, 'The uploaded file type is not allowed!' );
		}
	}
	return $result; 
}
add_filter('wpcf7_validate_file*', 'successcareer_custom_validation_upload_file', 10, 2 );

if(!function_exists('my_scripts_method')) {
	function my_scripts_method() {
		wp_enqueue_script(
			'search-script',
			get_stylesheet_directory_uri() . '/js/search-job.js',
			array('jquery')
		);
		wp_enqueue_script(
			'apply-job-script',
			get_stylesheet_directory_uri() . '/js/apply-job.js',
			array('jquery')
		);
	}
	add_action('wp_enqueue_scripts', 'my_scripts_method');
}


function successcareer_remove_menus() {
  // remove_menu_page( 'index.php' );                  //Dashboard
  // remove_menu_page( 'jetpack' );                    //Jetpack* 
  // remove_menu_page( 'edit.php' );                   //Posts
  // remove_menu_page( 'upload.php' );                 //Media
  // remove_menu_page( 'edit.php?post_type=page' );    //Pages
  remove_menu_page( 'edit-comments.php' );          //Comments
  // remove_menu_page( 'themes.php' );                 //Appearance
  // remove_menu_page( 'plugins.php' );                //Plugins
  // remove_menu_page( 'users.php' );                  //Users
  // remove_menu_page( 'tools.php' );                  //Tools
  // remove_menu_page( 'options-general.php' );        //Settings
}

add_action( 'admin_menu', 'successcareer_remove_menus' );