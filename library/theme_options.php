<?php 



global $rims_options ; 





function gmd_site_layout () {

	

	$layout = $rims_options ['opt-site-layout'];





switch ($layout) {

	case 1 :  get_template_part ('inc/template/top' , 'wide'); 

	break;

	

	case 2 : get_template_part ('inc/template/top' , 'boxed'); 

	break;

	

	

     }

	}



add_action( 'gmd_site_layout', 'gmd_site_layout' );
?>