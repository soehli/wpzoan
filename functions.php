<?php
/*

 *  Author: Steven Soehl 

 *  URL: stevensoehl.com

 *  

 */


/* External Files */

require_once(get_template_directory() . '/library/' . 'theme_functions.php');	//theme functions



require_once(get_template_directory() . '/library/' . 'shortcodes.php');	//theme shortcodes



require_once(get_template_directory() . '/library/' . 'wp_bootstrap_navwalker.php');	//NavWalker


require_once(get_template_directory() . '/library/' . 'user_meta.php');	//User Meta





// set default editor
add_filter('wp_default_editor', create_function('', 'return "html";'));

//woocommerce
add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}


/* Theme Setup */



if ( ! isset( $content_width ) ) {

	$content_width = 640; /* pixels */

}







if ( ! function_exists( 'gmd_setup' ) ) :

function gmd_setup() {

	

	 // Add Menu Support

    add_theme_support('menus');

	

	load_theme_textdomain( 'rims', get_template_directory() . '/languages' );

	

	// Enables post and comment RSS feed links to head

    add_theme_support('automatic-feed-links');

	

	 // Add Featured Image

    add_theme_support( 'post-thumbnails' );

	add_image_size('large', 800, '', true); // Large Thumbnail

    add_image_size('medium', 250, '', true); // Medium Thumbnail

    add_image_size('small', 120, '', true); // Small Thumbnail

	 add_image_size('featured-image', 270, 150, true); // Featured Thumbnail

	  add_image_size('home-image', 650, 180, true); // home Thumbnail

    add_image_size('custom-size', 700, 200, true); // Custom Thumbnail Size call using the_post_thumbnail('custom-size');



	

	add_theme_support( 'html5', array(

		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',

	) );



	/*

	 * Enable support for Post Formats.

	 * See http://codex.wordpress.org/Post_Formats

	 */

	add_theme_support( 'post-formats', array(

		'aside', 'image', 'video', 'quote', 'link',

	) );



	// Setup the WordPress core custom background feature.

	add_theme_support( 'custom-background', apply_filters( 'profitmag_custom_background_args', array(

		'default-color' => 'ffffff',

		'default-image' => '',

	) ) );

	

}

endif; // end Rims setup

add_action( 'after_setup_theme', 'gmd_setup' );



//Add custom functions here

// Comment Layout



function bootz_comments( $comment, $args, $depth ) {



   $GLOBALS['comment'] = $comment; ?>



  <div id="comment-<?php comment_ID(); ?>" <?php comment_class('cf'); ?>>



    <article  class="cf">



      <header class="comment-author vcard">



        <?php



        /*



          this is the new responsive optimized comment image. It used the new HTML5 data-attribute to display comment gravatars on larger screens only. What this means is that on larger posts, mobile sites don't have a ton of requests for comment images. This makes load time incredibly fast! If you'd like to change it back, just replace it with the regular wordpress gravatar call:



          echo get_avatar($comment,$size='32',$default='<path_to_url>' );



        */



        ?>



        <?php // custom gravatar call ?>



        <?php



          // create variable



          $bgauthemail = get_comment_author_email();



        ?>



        <img data-gravatar="http://www.gravatar.com/avatar/<?php echo md5( $bgauthemail ); ?>?s=40" class="load-gravatar avatar avatar-48 photo" height="40" width="40" src="<?php echo get_template_directory_uri(); ?>/library/images/nothing.gif" />



        <?php // end custom gravatar call ?>



        <?php printf(__( '<cite class="fn">%1$s</cite> %2$s', 'bootztheme' ), get_comment_author_link(), edit_comment_link(__( '(Edit)', 'bootztheme' ),'  ','') ) ?>



        <time datetime="<?php echo comment_time('Y-m-j'); ?>"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>"><?php comment_time(__( 'F jS, Y', 'bootztheme' )); ?> </a></time>







      </header>



      <?php if ($comment->comment_approved == '0') : ?>



        <div class="alert alert-info">



          <p><?php _e( 'Your comment is awaiting moderation.', 'bootztheme' ) ?></p>



        </div>



      <?php endif; ?>



      <section class="comment_content cf">



        <?php comment_text() ?>



      </section>



      <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>



    </article>



  <?php // </li> is added by WordPress automatically ?>



<?php



} // don't remove this bracket!

?>