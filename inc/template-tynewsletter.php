<?php
setcookie("newsletterpop", 1, time() + (10 * 365 * 24 * 60 * 60), "/", ".wpzoan.com");
?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>







							<article id="post-<?php the_ID(); ?>"  role="article">







								<header class="article-header">







									<h1 class="h2 entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>



									

								</header>







								<section class="entry-content ">



									<?php the_content(); ?>



								</section>







								



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