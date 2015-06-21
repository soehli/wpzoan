<div class="container homepage-content thumb-<?php echo esc_attr($post_image_width); ?>">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>



						<div class="main-content-column-1 <?php if(plsh_gs('sidebar_position') === 'left') { echo ' right'; } ?>">


								<div class="post" <?php if(plsh_is_review()) { echo ' itemprop="description"'; } ?>><?php the_content(); ?></div>


							


							



						</div>

<?php get_sidebar('community'); ?>
<?php endwhile; ?>



								


						



							<?php endif; ?>


					
</div>


			