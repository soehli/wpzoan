<?php

function wpzoan_featured_theme($atts) {
$return = '';

$theme = get_posts('post_type=product&showposts=1&product_cat=wordpress-themes&product_tag=featured');

foreach( $theme as $t ) {
    $t2 = $t->ID;	
	$title =  $t->post_title; 	
	$link = $t->post_name;	
	$feature_img =  get_the_post_thumbnail($t2, 'thumbnail');   
	$price = get_post_meta( $t->ID, '_regular_price', true);			 
    $desc =  $t->post_excerpt;	
	
	 
	         
		        
				 $return .='<div class="featured_theme ">';
		
	           
           $return .=         '<div class="alignleft" style="padding-bottom:20px;">';
		        
					$return .= $feature_img ;
					       
                                 
          $return .= '</div>';
                   //END IMAGE
		    $return .=  '<h2 style =" font-size:16px; line-height:20px;  " > <a style ="color:#333; font-size:16px; " href="' . $link .'">' . $title .'</a></h2>';
		$return .= '<div style ="; font-size:12px; ">' . $desc  . '</div>';       	
         $return .= '<div class="price" style ="color:#333; font-size:14px; font-weight:700; margin:7px 0; " >$' . $price . '</div>';
            //DETAIL
          
          $return .= '<div class="list_cta"><a  href="' . $link . '" class="btn btn-primary btn-sm" >Get Theme</a></div>';
	
	//end List box
	$return .='</div>';
		  //end 64
					       
                       
          
                   //END IMAGE
		 
	} 
	return $return;
}

//theme_deals
function wpzoan_deal_theme($atts) {
	
extract(shortcode_atts(array(
      'category' => 'deals',
   ), $atts));
   
   
$return = '';


$theme = get_posts('post_type=product&product_cat=deals&showposts=-1');

foreach( $theme as $t ) {
    $t2 = $t->ID;	
	$title =  $t->post_title; 	
	$link = $t->post_name;	
	$feature_img =  get_the_post_thumbnail($t2, 'thumbnail');   
	$price = get_post_meta( $t->ID, '_regular_price', true);
	$sale = get_post_meta( $t->ID, '_sale_price', true);			 
    $desc =  $t->post_excerpt;	
	
	 
	         
		        $return .='<div class="col-xs-12 col-md-3">';
				 $return .='<div class="deal_theme ">';
		
	           
           $return .=         '<div style="padding-bottom:6px;">';
		        
					$return .= $feature_img ;
					       
                                 
          $return .= '</div>';
                   //END IMAGE
		    $return .=  '<h2 style =" font-size:16px; line-height:20px; margin-top:-10px;" > <a style ="color:#333; font-size:16px; " href="' . $link .'">' . $title .'</a></h2>';
		//$return .= '<div style ="; font-size:12px; ">' . $desc  . '</div>';       	
         $return .= '<div class="price" style ="color:#333; font-size:14px; font-weight:700; margin:7px 0;  text-decoration: line-through; " >$' . $price . '</div>';
            $return .= '<div class="price" style ="color:#f00; font-size:18px; font-weight:700; margin:7px 0;  " >$' . $sale . '</div>';
          
          $return .= '<div class="list_cta"><a  href="' . $link . '" class="btn btn-primary btn-sm" >Get Theme</a></div>';
	
	//end List box
	$return .='</div>';
	$return .='</div>';
		  //end 64
					       
                       
          
                   //END IMAGE
		 
	} 
	
	return $return;
}

//theme carousel
function wpzoan_theme_sidebar(){
	
	$return = '';
    $return .='<div class="jcarousel-wrapper"> ';  
    $return .='<div class="jcarousel"> '; 
    $return .='<ul> '; 
	
$theme = get_posts('post_type=product&showposts=15&product_cat=wordpress-themes');

foreach( $theme as $t ) {
    $t2 = $t->ID;	
	$title =  $t->post_title; 	
	$link = $t->post_name;	
	$feature_img =  get_the_post_thumbnail($t2, 'thumbnail');   
	$price = get_post_meta( $t->ID, '_regular_price', true);			 
    $desc =  $t->post_excerpt;	
	
	 
	            $return .='<li>';
		        
				 $return .='<div class="list_theme ">';
		
	           
           $return .=         '<div class="img_box">';
		        
					$return .= $feature_img ;
					       
                                 
          $return .= '</div>';
                   //END IMAGE
		    $return .=  '<h2 style =" font-size:16px; line-height:20px;  " > <a style ="color:#333; font-size:16px; " href="' . $link .'">' . $title .'</a></h2>';
		      	
         $return .= '<div class="price" style ="color:#333; font-size:14px; font-weight:700; margin:7px 0; " >$' . $price . '</div>';
            //DETAIL
          
          $return .= '<div class="list_cta"><a  href="' . $link . '" class="btn btn-primary btn-sm" >Details here</a></div>';
	  $return .='</div>';
	//end List box
	$return .='</li>';
		  //end 64
					       
                       
          
                   //END IMAGE
		 
	} 
	$return .='</ul> '; 
	$return .='</div>';
	   $return .= '<a href="#" class="jcarousel-control-prev">&lsaquo;</a>';
           $return .=  '<a href="#" class="jcarousel-control-next">&rsaquo;</a>';
	$return .='</div>';
	return $return;
	
	
	
}



//Register Shortcodes

function register_shortcodes(){

   add_shortcode('theme-sidebar', 'wpzoan_theme_sidebar');

    add_shortcode('featured-theme' , 'wpzoan_featured_theme'); 
	
	 add_shortcode('theme-deal' , 'wpzoan_deal_theme');   

}



add_action( 'init', 'register_shortcodes');



?>