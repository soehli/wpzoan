<?php get_header(); ?>







			<div class="row">





           <div id="main" class="col-xs-12" role="main">







							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>







							<article id="post-<?php the_ID(); ?>"  role="article" class="hentry">







								<header class="article-header">
                                     <!--SMALL SCREEN -->
                                     <div class="hidden-md hidden-lg">
                                               <div class="home-image" ><a href="<?php the_permalink() ?>"  title="<?php the_title_attribute(); ?>">

			                            <?php 

                                        if ( has_post_thumbnail() ) {

                                                the_post_thumbnail('home-image');

                                            }
											?> 

                                            </a> </div>

                                     
                                    </div> 
                                    
                                      <!--LARGE SCREEN -->
                                       <div class="hidden-xs hidden-sm">
                                      <?php 

                                        if ( has_post_thumbnail() ) {

                                                the_post_thumbnail('large');

                                            }?> 

                                     </div> 

									<h1 class="h2 entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>



									<p class="byline vcard" style="margin:0px 5px 0px 15px;">

                                        <?php $author_name = get_author_name( $user_id ); ?>

                                

								<span class="author"  style="color:#58595b;"><?php echo $author_name; ?></span><span class="updated published" style="color:#58595b;">&nbsp;&middot;&nbsp;&nbsp;Posted&nbsp;&nbsp;<?php the_date('F d, Y'); ?></span>

                                    </p>







								</header>







								<section class="entry-content ">



									<?php the_content(); ?>



								</section>







								<footer class="article-footer " style="margin:15px 0 15px 12px; padding:0 4px 4px 4px;  border-top:#ccc 1px solid">


                                  <?php //get_template_part ('inc/social'); ?> 
									

                                <?php //the_tags( '<p class="tags"><h3 class="tags-title">' . __( 'Tags:', 'bootztheme' ) . '</h3> ', ', ', '</p>' ); ?>









								</footer>

                                

                               <div>

                               <?php //get_template_part('inc/author'); ?>

                               

                              </div> 



                          <?php //comments_template(); ?>







							</article>







							<?php endwhile; ?>







									





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





                 





				</div>







			











<?php get_footer(); ?>