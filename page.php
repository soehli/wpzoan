<?php get_header(); ?>


			<div class="row">



				



						<div id="main" class="col-xs-12 col-md-8" role="main">

                              <?php
		            if ( is_front_page()  ) {
				                 get_template_part('inc/template','home');
								 
								} else if (is_page('my-account')){
									 get_template_part('inc/page','accountpage');
									
								} else if (is_page('core')){
									 get_template_part('inc/template','core');
									
								}  else if (is_page('expand')){
									 get_template_part('inc/template','expand');
									
								}  else if (is_page('code')){
									 get_template_part('inc/template','code');
									
								}else if (is_page('newsletter-signup')) {
									 get_template_part('inc/template','tynewsletter');
								}
								else{
									
									 get_template_part('inc/page','main');
									
								}


                                    ?>


						</div>



					 <div class="col-xs-12 col-md-4">
					<?php 
					if (current_user_is("s2member_level1")){
					get_sidebar(); 
					} else if (current_user_is("s2member_level2")){
					   get_sidebar(); 
					} else if (current_user_is("s2member_level3")){ 
					 get_sidebar('employer'); 
					} else {
						 get_sidebar();
					}
					
				
					?>
                     </div>



				</div>



	<?php get_footer(); ?>