<?php
/*
 * CUSTOM POST TYPE TAXONOMY TEMPLATE
 *
 * This is the custom post type taxonomy template. If you edit the custom taxonomy name,
 * you've got to change the name of this template to reflect that name change.
 *
 * For Example, if your custom taxonomy is called "register_taxonomy('shoes')",
 * then your template name should be taxonomy-shoes.php
 *
 * For more info: http://codex.wordpress.org/Post_Type_Templates#Displaying_Custom_Taxonomies
*/
?>

<?php get_header(); ?>

			<div class="row">
                 <div id="main" class="col-xs-12 col-md-8" role="main">

							<h1 class="archive-title h2"><span><?php _e( 'Posts Categorized:', 'bootztheme' ); ?></span> <?php single_cat_title(); ?></h1>

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article">

								<header class="article-header">

									<h3 class="h2"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
									<p class="byline vcard">
                                        <?php $author_name = get_author_name( $user_id ); ?>
                                
								<span><?php echo $author_name; ?></span><span style="color:#58595b;">&nbsp;&middot;&nbsp;&nbsp;Posted&nbsp;&nbsp;<?php the_date('F d, Y'); ?></span>
                                    </p>

								</header>

								<section class="entry-content">
									<?php the_excerpt( '<span class="read-more">' . __( 'Read More &raquo;', 'bootztheme' ) . '</span>' ); ?>

								</section>

								<footer class="article-footer">

								</footer>

							</article>

							<?php endwhile; ?>

									<?php bootz_page_navi(); ?>

							<?php else : ?>

									<article id="post-not-found" class="hentry ">
										<header class="article-header">
											<h1><?php _e( 'Oops, Post Not Found!', 'bootztheme' ); ?></h1>
										</header>
										<section class="entry-content">
											<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bootztheme' ); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e( 'This is the error message in the taxonomy-custom_cat.php template.', 'bootztheme' ); ?></p>
										</footer>
									</article>

							<?php endif; ?>

						</div>

						<?php get_sidebar(); ?>

				</div>

			

<?php get_footer(); ?>
