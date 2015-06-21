<?php
function rims_head_cleanup() {



	// category feeds



	// remove_action( 'wp_head', 'feed_links_extra', 3 );



	// post and comment feeds



	// remove_action( 'wp_head', 'feed_links', 2 );



	// EditURI link



	remove_action( 'wp_head', 'rsd_link' );



	// windows live writer



	remove_action( 'wp_head', 'wlwmanifest_link' );



	// index link



	remove_action( 'wp_head', 'index_rel_link' );



	// previous link



	remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );



	// start link



	remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );



	// links for adjacent posts



	remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );



	// WP version



	remove_action( 'wp_head', 'wp_generator' );



	// remove WP version from css



	add_filter( 'style_loader_src', 'bootz_remove_wp_ver_css_js', 9999 );



	// remove Wp version from scripts



	add_filter( 'script_loader_src', 'bootz_remove_wp_ver_css_js', 9999 );







} /* end Rims head cleanup */

// Script Style enqueue functions

function gmd_rims_theme_scripts() {

    

    //$rims_settings = get_option( 'rims_options' );        

       

    wp_enqueue_script( 'jquery' );   

    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri().'/library/js/bootstrap.min.js',array( 'jquery' ) );

    wp_enqueue_script( 'custom', get_template_directory_uri() . '/library/js/scripts.js', array('jquery'), '1.0', true );

   wp_enqueue_script( 'noty-js', get_template_directory_uri() . '/library/js/noty/packaged/jquery.noty.packaged.min.js', array('jquery'),'', true );

	wp_enqueue_script( 'ticker-js', get_template_directory_uri() . '/library/js/jquery.ticker.js', array('jquery'),'', true );

	wp_enqueue_script( 'masonry-js', get_template_directory_uri() . '/library/js/masonry.min.js', array('jquery'),false, true );

	wp_enqueue_script( 'carousel-js', get_template_directory_uri() . '/library/js/jquery.carousel.js', array('jquery'),'', false );

	

	 wp_enqueue_style( 'animate-css', get_template_directory_uri().'/library/css/animate.css' );

    wp_enqueue_style( 'font-awesome', get_template_directory_uri().'/library/css/font-awesome.min.css' );      

    wp_enqueue_style( 'bootstrap-css', get_template_directory_uri().'/library/css/bootstrap.css' );

	 wp_enqueue_style( 'ticker-css', get_template_directory_uri().'/library/css/ticker-style.css' );

	  wp_enqueue_style( 'qtip-css', get_template_directory_uri().'/library/css/jquery.qtip.css' );

	wp_enqueue_style( 'custom-style', get_template_directory_uri().'/library/css/style.css' );

    wp_enqueue_style( 'google font', 'http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' );

	wp_enqueue_style( 'google-font-oswald','http://fonts.googleapis.com/css?family=Oswald:400,700');

    wp_enqueue_style( 'rims-style', get_stylesheet_uri() );  

   

}

add_action( 'wp_enqueue_scripts', 'gmd_rims_theme_scripts' );

add_action('after_setup_theme', 'remove_admin_bar');



function remove_admin_bar() {

if (!current_user_can('administrator') && !is_admin()) {

  show_admin_bar(false);

}

}

/* Default Role */



	/* Forces the default role of a new user to be set to "Calendar Contributor" instead of "Subscriber" */

	add_filter("ws_plugin__s2member_force_default_role", "default_role",10,1);

	function default_role($role){

		$return = 's2member_level1';

		return $return;

	}
	
	/* locks custom roles and capabilities from being reset during S2 upgrade */

    add_filter("ws_plugin__s2member_lock_roles_caps", "__return_true");
	
	
	
	function rims_widgets_init() {

      register_sidebar( array(

        'name' => __( 'Left Sidebar', 'rims' ),

        'id'   => 'left-sidebar',

        'description' => 'Displays items as left sidebar.',

        'before_widget' => '<aside id="%1$s" class="widget %2$s">',

		'after_widget'  => '</aside>',

		'before_title'  => '<h3 class="widgettitle"><span>',

		'after_title'   => '</span></h3>',     

    ) );

    

    register_sidebar( array(

        'name' => __( 'Right Sidebar', 'rims' ),

        'id'   => 'right-sidebar',

        'description' => 'Displays items as right sidebar.',

        'before_widget' => '<aside id="%1$s" class="widget %2$s">',

		'after_widget'  => '</aside>',

		'before_title'  => '<h3 class="widgettitle"><span>',

		'after_title'   => '</span></h3>',     

    ) );
	
	
	register_sidebar( array(

        'name' => __( 'Employer Sidebar', 'rims' ),

        'id'   => 'employer-sidebar',

        'description' => 'Displays items on employer account page.',

        'before_widget' => '<aside id="%1$s" class="widget %2$s">',

		'after_widget'  => '</aside>',

		'before_title'  => '<h3 class="widgettitle"><span>',

		'after_title'   => '</span></h3>',     

    ) );

    
     register_sidebar( array(

        'name' => __( 'Footer Column One', 'rims' ),

        'id'   => 'footer-col-one',

        'description' => 'Displays items on top footer section.',

        'before_widget' => '<aside id="%1$s" class="widget %2$s">',

		'after_widget'  => '</aside>',

		'before_title'  => '<h3 class="widgettitle"><span>',

		'after_title'   => '</span></h3>',     

    ) );

    

    register_sidebar( array(

        'name' => __( 'Footer  Column Two', 'profitmag' ),

        'id'   => 'footer-col-two',

        'description' => 'Displays items on top footer section.',

        'before_widget' => '<aside id="%1$s" class="widget %2$s">',

		'after_widget'  => '</aside>',

		'before_title'  => '<h3 class="widgettitle"><span>',

		'after_title'   => '</span></h3>',     

    ) );

    

    register_sidebar( array(

        'name' => __( 'Footer Column Three', 'profitmag' ),

        'id'   => 'footer-col-three',

        'description' => 'Displays items on top footer section.',

        'before_widget' => '<aside id="%1$s" class="widget %2$s">',

		'after_widget'  => '</aside>',

		'before_title'  => '<h3 class="widgettitle"><span>',

		'after_title'   => '</span></h3>',     

    ) );

    

    register_sidebar( array(

        'name' => __( 'Footer Top Column Four', 'profitmag' ),

        'id'   => 'footer-col-four',

        'description' => 'Displays items on top footer section.',

        'before_widget' => '<aside id="%1$s" class="widget %2$s">',

		'after_widget'  => '</aside>',

		'before_title'  => '<h3 class="widgettitle"><span>',

		'after_title'   => '</span></h3>',     

    ) );

    

}

add_action( 'widgets_init', 'rims_widgets_init' );

//Register Menus

        register_nav_menu( 'primary-menu', __( 'Primary Menu', gmd_rims ) );

        register_nav_menu( 'footer-menu', __( 'Footer Menu', gmd_rims ) );

		register_nav_menu( 'premium-menu', __( 'Premium Menu', gmd_rims ) );


//Pagination
function pagination($pages = '', $range = 4)
{  
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
         echo "<div class=\"pagination\"><span>Page ".$paged." of ".$pages."</span>";
         if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo; First</a>";
         if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo; Previous</a>";
 
         for ($i=1; $i <= $pages; $i++)
         {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
             {
                 echo ($paged == $i)? "<span class=\"current\">".$i."</span>":"<a href='".get_pagenum_link($i)."' class=\"inactive\">".$i."</a>";
             }
         }
 
         if ($paged < $pages && $showitems < $pages) echo "<a href=\"".get_pagenum_link($paged + 1)."\">Next &rsaquo;</a>";  
         if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>Last &raquo;</a>";
         echo "</div>\n";
     }
}

//the_excerpt
function et_excerpt_length($length) {
    return 100;
}
add_filter('excerpt_length', 'et_excerpt_length');
 
/* Add a link  to the end of our excerpt contained in a div for styling purposes and to break to a new line on the page.*/
 
//function et_excerpt_more($more) {
   // global $post;
   // return '<div class="view-full-post"><a href="'. get_permalink($post->ID) . '" class="view-full-post-btn">View Full Post</a></div>;';
//}
//add_filter('excerpt_more', 'et_excerpt_more');
?>