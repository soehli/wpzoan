<?php
/*********************
Template Name Posts: videos

***********************/
?>

<?php get_header(); ?>







			<div class="row">





           <div id="main" class="col-xs-12 col-md-8" role="main">
                       <div itemprop="video" itemscope itemtype="http://schema.org/VideoObject" >





							<?php if (have_posts()) : while (have_posts()) : the_post();



                            $video = get_post_meta($post->ID, 'video', true); ?>



							<article id="post-<?php the_ID(); ?>"  role="article" class="hentry">







								<header class="article-header">

                                      <?php 

                                        if ( has_post_thumbnail() ) {

                                                the_post_thumbnail('large');

                                            }?> 



									<h1 class="h2 entry-title" itemprop="name"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>



									<p class="byline vcard" style="margin:0px 5px 0px 15px;">

                                        <?php $author_name = get_author_name( $user_id ); ?>

                                

								<span class="author"  style="color:#58595b;"><?php echo $author_name; ?></span><span class="updated published" style="color:#58595b;">&nbsp;&middot;&nbsp;&nbsp;Posted&nbsp;&nbsp;<?php the_date('F d, Y'); ?></span>

                                    </p>







								</header>







								<section class="entry-content ">
                                           


									<?php the_content(); ?>
                                    
                                       <script>
         var tag = document.createElement('script');
         tag.src = "http://www.youtube.com/player_api";
         var firstScriptTag = document.getElementsByTagName('script')[0];
         firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

         var player;
         var lastAction = '';
         function onYouTubePlayerAPIReady() {
             player = new YT.Player('player', {
                 playerVars: {
                     modestbranding: true,
                     theme: 'light',
                     rel: 0
                 },
                 height: '360',
                 width: '640',
                 videoId: '<?php echo $video; ?>',
                 events: {
                     'onStateChange': onPlayerStateChange
                 }
             });
         }
 		
		function onPlayerStateChange(event) {
             switch (event.data) {
                 case YT.PlayerState.PLAYING:
                     //_gaq.push(['_trackEvent', 'video', 'started', player.getVideoUrl()]);
                     _gaq.push(['_trackEvent', 'Landing Page Video', 'started <?php the_title(); ?>', '<?php echo the_title(); ?>']);
                     break;
                 case YT.PlayerState.ENDED:
                     _gaq.push(['_trackEvent', 'Landing Page Video', 'completed <?php echo the_title(); ?>', '<?php echo the_title(); ?>']);
                     break;
                 case YT.PlayerState.PAUSED:
                     if (lastAction != 'paused') {
                         _gaq.push(['_trackEvent', 'Landing Page Video', 'paused <?php echo the_title(); ?>', '<?php echo the_title(); ?>']);
                     } else {
                         lastAction = 'paused';
                     }
                     break;
             }
         }
	</script>

                         

								</section>







								<footer class="article-footer " style="margin:15px 0 15px 12px; padding:0 4px 4px 4px;  border-top:#ccc 1px solid">



									

                                <?php the_tags( '<p class="tags"><h3 class="tags-title">' . __( 'Tags:', 'bootztheme' ) . '</h3> ', ', ', '</p>' ); ?>









								</footer>

                                

                               <div>

                               <?php get_template_part('inc/author'); ?>

                               

                              </div> 



                          <?php comments_template(); ?>







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





                   <div class="col-xs-12 col-md-4">

					<?php get_sidebar(); ?>

                     </div>





				</div>







			











<?php get_footer(); ?>