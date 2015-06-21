<?php get_header(); ?>

				<div class="row">
                   <div id="main" class="col-xs-12 col-md-8" role="main">


							<?php if (is_category()) { ?>
								<h2 class="archive-title h2">
									<span><?php _e( 'Posts in:', 'bootztheme' ); ?></span> <?php single_cat_title(); ?>
								</h2>

							<?php } elseif (is_tag()) { ?>
								<h2 class="archive-title h2">
									<span><?php _e( 'Posts Tagged:', 'bootztheme' ); ?></span> <?php single_tag_title(); ?>
								</h2>

							<?php } elseif (is_author()) {
								global $post;
								$author_id = $post->post_author;
							?>
								<h1 class="archive-title h2">

									<span><?php _e( 'Posts By:', 'bootztheme' ); ?></span> <?php the_author_meta('display_name', $author_id); ?>

								</h1>
							<?php } elseif (is_day()) { ?>
								<h1 class="archive-title h2">
									<span><?php _e( 'Daily Archives:', 'bootztheme' ); ?></span> <?php the_time('l, F j, Y'); ?>
								</h1>

							<?php } elseif (is_month()) { ?>
									<h1 class="archive-title h2">
										<span><?php _e( 'Monthly Archives:', 'bootztheme' ); ?></span> <?php the_time('F Y'); ?>
									</h1>

							<?php } elseif (is_year()) { ?>
									<h1 class="archive-title h2">
										<span><?php _e( 'Yearly Archives:', 'bootztheme' ); ?></span> <?php the_time('Y'); ?>
									</h1>
							<?php } ?>

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>"  role="article">
                                <div class="archive-post">
								<header class="article-header">

									<h3 class="h3 entry-title" style="font-size:18px;"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
									<p class="byline vcard">
                                        <?php $author_name = get_author_name( $user_id ); ?>
                                
								<span><?php echo $author_name; ?></span><span style="color:#58595b;">&nbsp;&middot;&nbsp;&nbsp;Posted&nbsp;&nbsp;<?php the_date('F d, Y'); ?></span>
                                    </p>
								</header>

								<section class="entry-content ">
                                    <div class="row">
                                   
                                    <div class="col-xs-12 col-md-3">
									<?php the_post_thumbnail( 'medium' ); ?>
                                    </div>
                                     <div class="col-xs-12 col-md-9">
									<?php the_excerpt(); ?>
                                     </div>
                                     </div>
                                     
								</section>

								<footer class="article-footer">

								</footer>
                              </div>
							</article>

							<?php endwhile; ?>

									
                                    <?php if (function_exists("pagination")) {
                                      pagination($additional_loop->max_num_pages);
                                       } ?>

							<?php else : ?>

									<article id="post-not-found" class="hentry ">
										<header class="article-header">
											<h1><?php _e( 'Oops, Post Not Found!', 'bootztheme' ); ?></h1>
										</header>
										<section class="entry-content">
											<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bootztheme' ); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e( 'This is the error message in the archive.php template.', 'bootztheme' ); ?></p>
										</footer>
									</article>

							<?php endif; ?>

						</div>
                    <div class="col-xs-12 col-md-4">
					<?php get_sidebar(); ?>
                    </div>

				</div>

		

<?php get_footer(); ?>
