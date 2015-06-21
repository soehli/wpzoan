<div class="container homepage-content thumb-<?php echo esc_attr($post_image_width); ?>">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <?php
					 if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it. ?>
                     <div style="margin:-30px 0 25px 0;">
	                 <?php the_post_thumbnail(); ?>
                     </div>
                     <?php   } 
         ?>

						<div class="main-content-column-1 <?php if(plsh_gs('sidebar_position') === 'left') { echo ' right'; } ?>">
                           
                    
                           

								 <div class="title">
                <h1 id="intro"><a href="<?php the_permalink(); ?>" <?php if(plsh_is_review()) { echo ' itemprop="itemreviewed"'; } ?>><?php the_title(); ?></a></h1>
                
                <?php if(!is_page()) : ?>
                <?php get_template_part( 'theme/templates/title-legend'); ?>
                <?php endif; ?>
                
                <?php get_template_part( 'theme/templates/post-tags'); ?>
            </div>
            

								<div class="post" <?php if(plsh_is_review()) { echo ' itemprop="description"'; } ?>><?php the_content(); ?></div>


							

   
							



						</div>


<?php get_sidebar('community'); ?>



<?php endwhile; ?>



								


						



							<?php endif; ?>


					
</div>


			