<?php get_header(); ?>

			<div class="row">
                 <div id="main" class="col-xs-12 col-md-8" role="main">

						<h1 class="archive-title"><span><?php _e( 'Search Results for:', 'bootztheme' ); ?></span> <?php echo esc_attr(get_search_query()); ?></h1>

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?> role="article">

								<header class="article-header">

									<h3 class="search-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>

                  <p class="byline vcard">
                                        <?php $author_name = get_author_name( $user_id ); ?>
                                
								<span><?php echo $author_name; ?></span><span style="color:#58595b;">&nbsp;&middot;&nbsp;&nbsp;Posted&nbsp;&nbsp;<?php the_date('F d, Y'); ?></span>
                                    </p>

								</header>

								<section class="entry-content">
										<?php the_excerpt( '<span class="read-more">' . __( 'Read more &raquo;', 'bootztheme' ) . '</span>' ); ?>

								</section>

								<footer class="article-footer">
									
									<?php if(get_the_category_list(', ') != ''): ?>
                  					<?php printf( __( 'Filed under: %1$s', 'bootztheme' ), get_the_category_list(', ') ); ?>
                  					<?php endif; ?>

                 					<?php the_tags( '<p class="tags"><span class="tags-title">' . __( 'Tags:', 'bootztheme' ) . '</span> ', ', ', '</p>' ); ?>

								</footer> <!-- end article footer -->

							</article>

						<?php endwhile; ?>

								<?php bootz_page_navi(); ?>

							<?php else : ?>

									<article id="post-not-found" class="hentry ">
										<header class="article-header">
											<h1><?php _e( 'Sorry, No Results.', 'bootztheme' ); ?></h1>
										</header>
										<section class="entry-content">
											<p><?php _e( 'Try your search again.', 'bootztheme' ); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e( 'This is the error message in the search.php template.', 'bootztheme' ); ?></p>
										</footer>
									</article>

							<?php endif; ?>

						</div>

							<?php get_sidebar(); ?>

					</div>

			

<?php get_footer(); ?>