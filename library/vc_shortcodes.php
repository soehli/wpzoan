<?php



function rims_staff_shortcode ( $atts,$content = null ) {

	$a = shortcode_atts( array(

'image_id' => 'Image',

'staff_name' => '',

'staff_dept' => '',

//'content' => ''



), $atts );

$content = wpb_js_remove_wpautop($content, true); // fix unclosed/unwanted paragraph tags in $content	

$bio_image = new WP_Query( array( 'post_type' => 'attachment', 'attachment_id' => $a['image_id'] ));

/* Let’s get the URL from that image */

$image_url = $bio_image->posts[0]->guid;



return '

<div class="staff">

<img class="staff_img" src="' . $image_url .'">

<h2 class="staff_name">' . $a['staff_name'] . '</h2>

<div class="staff_dept">' . $a['staff_dept'] . '</div>

<div class="staff_bio">' . $content . '</div>

</div>

';	

}

add_shortcode( 'rims_staff', 'rims_staff_shortcode' );

add_action( 'vc_before_init', 'staff_content_integrateWithVC' );



function staff_content_integrateWithVC() {

/* This first section sets up the initial shortcode integration, notice the array item “base” is the shortcode identifier for the shortcode we’re using  */

vc_map( array(

'name' => __( 'Staff Bios'),

'base' => 'rims_staff',

'class' => '',

'category' => __( 'Content', 'my-text-domain'),

'admin_enqueue_js' => array(get_template_directory_uri().'/vc_extend/page_header.js'),

'admin_enqueue_css' => array(get_template_directory_uri().'/vc_extend/page_header.css'),

'params' => array(

/* There are three arrays here. We’re mapping each array to an individual argument within the shortcode, allowing us to edit these values using the VC front-end editor */

array(

'type' => 'textfield',

'holder' => 'div',

'class' => '',

'heading' => __( 'Staff Name' ),

'param_name' => 'staff_name',

'value' => __( 'Default ' ),

'description' => __( 'Enter staff member name' )

),

array(

'type' => 'textfield',

'holder' => 'div',

'class' => '',

'heading' => __( 'Staff Postion' ),

'param_name' => 'staff_dept',

'value' => __( 'Default ' ),

'description' => __( 'Enter staff member position' )

),



array(

'type' => 'textarea_html',

'holder' => 'div',

'class' => '',

'heading' => __( "Content", "my-text-domain"),

'param_name' => 'content',

'value' => __( 'Default ' ),

'description' => __( 'Enter staff member bio' )

),



array(

'type' => 'attach_image',

'holder' => 'div',

'class' => '',

'heading' => __( 'Bio Photo' ),

'param_name' => 'image_id',

'value' => __( 'Default' ),

'description' => __( 'Choose a bio image' )

)

 )

 ));

}​ 

?>



<?php

function homepage_cat_shortcode( $atts ) {

/* These arguments are going to function like variables, allowing us to set new values in the front-end editor */

$a = shortcode_atts( array(

'image_id' => 'Image',

'text_heading' => 'Default Text HEading'



), $atts );

/* Visual Composer will return an image ID when you use image blocks. One approach to getting the URL for the image using the image ID is querying the database for a matching image ID. This will return an image object, so we’ll be able to work with it easily */

$raw_image = new WP_Query( array( 'post_type' => 'attachment', 'attachment_id' => $a['image_id'] ));

/* Let’s get the URL from that image */

$image_url = $raw_image->posts[0]->guid;

/* This is going to be our output */

return '

<h2 class="home_header">' . $a['text_heading'] . '</h2>

<img src="' . $image_url .'">

';

}

add_shortcode( 'homepage_cat', 'homepage_cat_shortcode' );





add_action( 'vc_before_init', 'custom_header_integrateWithVC' );



function custom_header_integrateWithVC() {

/* This first section sets up the initial shortcode integration, notice the array item “base” is the shortcode identifier for the shortcode we’re using  */

vc_map( array(

'name' => __( 'Home Page Category'),  

'base' => 'homepage_cat',

'class' => '',

'category' => __( 'Content', 'my-text-domain'),

'admin_enqueue_js' => array(get_template_directory_uri().'/vc_extend/page_header.js'),

'admin_enqueue_css' => array(get_template_directory_uri().'/vc_extend/page_header.css'),

'params' => array(

/* There are three arrays here. We’re mapping each array to an individual argument within the shortcode, allowing us to edit these values using the VC front-end editor */

array(

'type' => 'textfield',

'holder' => 'div',

'class' => '',

'heading' => __( 'Section Heading' ), 

'param_name' => 'text_heading',

'value' => __( 'Default Heading Text' ),

'description' => __( 'Enter heading text here' )

),



array(

'type' => 'attach_image',

'holder' => 'div',

'class' => 'page-header-container',

'heading' => __( 'Background Image' ),

'param_name' => 'image_id',

'value' => __( 'Default' ),

'description' => __( 'Choose a background image' )

)

 )));

}​

?>