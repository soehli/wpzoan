<?php
/******
Template Name: Wide
*******/
?>

<?php get_header(); ?>
<div class="row">

    <div id="main" class="col-xs-12" role="main">
    
        <?php 
		
		                        if (is_page('save-on-wordpress-premium-themes')) {
									 get_template_part('inc/page','promo');
								}
								else{
									
									 get_template_part('inc/page','main');
									
								}
		
		
	 ?>
    
    </div>
    </div>
    <?php get_footer();?>
