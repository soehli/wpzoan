<?php
function gmd_vehicle_sort ($atts) { 
      extract(shortcode_atts( array('title' => ''), $atts));
	  extract(shortcode_atts( array('type' => ''), $atts));
	  extract(shortcode_atts( array('value' => ''), $atts));
	  extract(shortcode_atts( array('number' => ''), $atts));


$content = '<h1 class="front_header">' . $title . '</h1>';

$content .='<div class="row" style="margin-top:40px;"> ';                       
                            
	
	
	
	
    
         
       
		  
		  $args = array (
							          'post_type' => 'auto_list',
									  'showposts' => $number,
									  'types' => $type
									  
							);
							
							$vehicles = query_posts($args );
		        
						 
	foreach( $vehicles as $v ) {
    $v2 = $v->ID;	
	$title =  $v->post_title; 	
	$link = $v->post_name;	
	$feature_img =  get_the_post_thumbnail($v2, 'featured-image');			 
	$miles = get_post_meta($v->ID, '_miles', true);
	$extcolor = get_post_meta($v->ID, '_extcolor', true);
	$intcolor = get_post_meta($v->ID, '_intcolor', true);
	$bodystyle = get_post_meta($v->ID, '_bodystyle', true);
    $fuel = get_post_meta($v->ID, '_fuel', true);
	$transmission = get_post_meta($v->ID, '_transmission', true);
	$doors = get_post_meta($v->ID, '_doors', true);
	$engine = get_post_meta($v->ID, '_engine', true);
	$price = get_post_meta($v->ID, '_price', true);
	
	   $content .='<div class="col-xs-6 col-md-4">';
	
	 $content .='<div class="list_box">';
		
	           
           $content .=         '<div class="img_box">';
		        
					$content .= $feature_img ;
					       
                                 
           $content .= '</div>';
                   //END IMAGE
		    $content .=  '<h2 > <a  href="' . $link .'">' . $title .'</a></h2>';
         $content .= '<div class="price">$' . $price . '</div>';
            //DETAIL
           $content .= '<div class="row">';
                 $content .= '<div class="col-xs-12 col-md-6">';
                       $content .= '<div class="feature"><span style="font-weight:bold; padding-left:5px;">Mileage:</span>&nbsp;' . $miles .'</div>';
                       $content .= '<div class="feature"><span style="font-weight:bold; padding-left:5px;">Int:</span>&nbsp;' . $intcolor .'</div>';
                       $content .= '<div class="feature"><span style="font-weight:bold; padding-left:5px;">Ext:</span>&nbsp;' . $extcolor .'</div>';
                 $content .= '</div>';
                 $content .='<div class="col-xs-12 col-md-6">';
                        $content .='<div class="feature"><span style="font-weight:bold;">Body:</span>&nbsp;' . $bodystyle .'</div>';
                        $content .= '<div class="feature"><span style="font-weight:bold;">Trans:</span>&nbsp;' . $transmission .'</div>';
                        $content .= '<div class="feature"><span style="font-weight:bold;">Doors:</span>&nbsp;' . $doors .'</div>';
                 $content .= '</div>';
         $content .= '</div>';
          $content .= '<div class="list_cta"><a  href="' . $link . '">Details here</a></div>';
	
	//end List box
	$content .='</div>';
		  //end 64
		  $content .='</div>';
	} 
		  //end row
		   $content .='</div>'; 
	

return $content;	
}

function register_shortcodes(){
   add_shortcode('vehicle-sort', 'gmd_vehicle_sort');
  
}

add_action( 'init', 'register_shortcodes');
?>