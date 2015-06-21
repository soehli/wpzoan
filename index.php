<?php get_header(); ?>



			<div class="row">



				



						<div id="main" class="col-xs-12 col-md-8" role="main">



							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>



							<article id="post-<?php the_ID(); ?>"  role="article">



								<header class="article-header">



									<h1 class="h2 entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>

								<p class="byline vcard">
                                        <?php $author_name = get_author_name( $user_id ); ?>
                                
								<span><?php echo $author_name; ?></span><span style="color:#58595b;">&nbsp;&middot;&nbsp;&nbsp;Posted&nbsp;&nbsp;<?php the_date('F d, Y'); ?></span>
                                    </p>



								</header>



								<section class="entry-content ">

									<?php the_content(); ?>

								</section>



								<footer class="article-footer ">

									
                                <?php the_tags( '<p class="tags"><span class="tags-title">' . __( 'Tags:', 'bootztheme' ) . '</span> ', ', ', '</p>' ); ?>




								</footer>

                          <?php comments_template(); ?>



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

												<p><?php _e( 'This is the error message in the index.php template.', 'bootztheme' ); ?></p>

										</footer>

									</article>



							<?php endif; ?>





						</div>



					<?php get_sidebar(); ?>



				</div>



			





<?php get_footer(); ?>

