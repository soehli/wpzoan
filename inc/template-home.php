<div class="row">

  <div class="col-xs-12">

    <div class="cta-box">

                  <div class="row">

                   <div class="col-xs-12 col-md-9">

                   Have you signed up to gain access to network with fellow WordPress enthusiast, land a gig, receive valuable deals on plugins and themes? 

                   <b>It's FREE! Register Today </b> 

                   </div>

                   <div class="col-xs-12 col-md-3">

                   <a href="/wpzoan-com-membership-options/" title="WPZoan Membership Options" class="btn btn-lg btn-warning cta-btn">Register Today</a>

                   </div>

                   </div>

    </div>

  </div>

</div><!--end call-->





<div class="row">

  <div class="col-xs-12">

    <h2 class="home-title">Core</h2>

  </div>

</div>





<div class="row">

   <div class="col-xs-12 col-md-6">

   <?php query_posts('category_name=core&showposts=1' );?>

   <?php if (have_posts()) : while (have_posts()) : the_post(); 

   $category = get_the_category(); 

   ?>

              <div class="home-image" ><a href="<?php the_permalink() ?>"  title="<?php the_title_attribute(); ?>">

			  <?php 

                                        if ( has_post_thumbnail() ) {

                                                the_post_thumbnail('home-image');

                                            }?> 

                                            </a> </div>

									<h3 class="h3 home-post-title"><a href="<?php the_permalink() ?>"  title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>

                                   <div class="home-post-meta"><i class="fa fa-clock-o"></i>&nbsp;&nbsp;<?php the_date('F d, Y'); ?>&nbsp;&nbsp;|&nbsp;&nbsp;<?php echo $category[0]->cat_name; ?></div>  

                                      <div class="home-post-excerpt"><?php the_excerpt()?></div>

   

   <?php endwhile; endif; ?>

    

    <?php wp_reset_query(); ?>

   

   </div>

     <div class="col-xs-12 col-md-6 right">

         <?php query_posts('category_name=core&offset=1&showposts=4' );?>

   <?php if (have_posts()) : while (have_posts()) : the_post(); 

   $category = get_the_category(); 

   ?>

              <div class="row gap">

   <div class="col-xs-4">

              <a href="<?php the_permalink() ?>"  title="<?php the_title_attribute(); ?>">

			  <?php 

                                        if ( has_post_thumbnail() ) {

                                                the_post_thumbnail('small');

                                            }?> 

                                            </a> 

                                            </div>

                                             <div class="col-xs-8">

									<h3 class="h3 home-post-title2"><a href="<?php the_permalink() ?>"  title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>

                                   <div class="home-post-meta2"><i class="fa fa-clock-o"></i>&nbsp;&nbsp;<?php the_date('F d, Y'); ?>&nbsp;&nbsp;|&nbsp;&nbsp;<?php echo $category[0]->cat_name; ?></div>  

                                     

                                      </div>

                                      </div>

   

   <?php endwhile; endif; ?>

    

    <?php wp_reset_query(); ?>

   </div>

</div>

<hr/>



<div class="row">

   <div class="col-xs-12 col-md-6">

   <h2 class="home-title">Featured Theme</h2>
  <div style="color:#333;">
  <?php echo do_shortcode("[featured-theme]"); ?>
    </div>
  </div> 

  

  <div class="col-xs-12 col-md-6">

    <h2 class="home-title">Featured Video  </h2>

    <?php echo do_shortcode("[youtube id=9BVWJhqttXk]"); ?>

    <div style="margin-top: -16px; font-size: 14px;"><center><b>Tutorial on how to install a WordPress plugin </b></center></div>

  </div> 

  

 </div> 

<hr/>


<div class="row">

  <div class="col-xs-12">

    <h2 class="home-title">Expand</h2>

  </div>

</div>





<div class="row">

   <div class="col-xs-12 col-md-6">

   <?php query_posts('category_name=expand&showposts=1' );?>

   <?php if (have_posts()) : while (have_posts()) : the_post(); 

   $category = get_the_category(); 

   ?>

              <div class="home-image" ><a href="<?php the_permalink() ?>"  title="<?php the_title_attribute(); ?>">

			  <?php 

                                        if ( has_post_thumbnail() ) {

                                                the_post_thumbnail('home-image');

                                            }?> 

                                            </a> </div>

									<h3 class="h3 home-post-title"><a href="<?php the_permalink() ?>"  title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>

                                   <div class="home-post-meta"><i class="fa fa-clock-o"></i>&nbsp;&nbsp;<?php the_date('F d, Y'); ?>&nbsp;&nbsp;|&nbsp;&nbsp;<?php echo $category[0]->cat_name; ?></div>  

                                      <div class="home-post-excerpt"><?php the_excerpt()?></div>

   

   <?php endwhile; endif; ?>

    

    <?php wp_reset_query(); ?>

   

   </div>

     <div class="col-xs-12 col-md-6 right">

         <?php query_posts('category_name=expand&offset=1&showposts=4' );?>

   <?php if (have_posts()) : while (have_posts()) : the_post(); 

   $category = get_the_category(); 

   ?>

              <div class="row gap">

   <div class="col-xs-4">

              <a href="<?php the_permalink() ?>"  title="<?php the_title_attribute(); ?>">

			  <?php 

                                        if ( has_post_thumbnail() ) {

                                                the_post_thumbnail('small');

                                            }?> 

                                            </a> 

                                            </div>

                                             <div class="col-xs-8">

									<h3 class="h3 home-post-title2"><a href="<?php the_permalink() ?>"  title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>

                                   <div class="home-post-meta2"><i class="fa fa-clock-o"></i>&nbsp;&nbsp;<?php the_date('F d, Y'); ?>&nbsp;&nbsp;|&nbsp;&nbsp;<?php echo $category[0]->cat_name; ?></div>  

                                     

                                      </div>

                                      </div>

   

   <?php endwhile; endif; ?>

    

    <?php wp_reset_query(); ?>

   </div>

</div>

<hr/>



<div class="row">

  <div class="col-xs-12">

    <h2 class="home-title">Code  </h2>

  </div>

</div>





<div class="row">

   <div class="col-xs-12 col-md-6">

   <?php query_posts('category_name=code&showposts=1' );?>

   <?php if (have_posts()) : while (have_posts()) : the_post(); 

   $category = get_the_category(); 

   ?>

              <div class="home-image" ><a href="<?php the_permalink() ?>"  title="<?php the_title_attribute(); ?>">

			  <?php 

                                        if ( has_post_thumbnail() ) {

                                                the_post_thumbnail('home-image');

                                            }?> 

                                            </a> </div>

									<h3 class="h3 home-post-title"><a href="<?php the_permalink() ?>"  title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>

                                   <div class="home-post-meta"><i class="fa fa-clock-o"></i>&nbsp;&nbsp;<?php the_date('F d, Y'); ?>&nbsp;&nbsp;|&nbsp;&nbsp;<?php echo $category[0]->cat_name; ?></div>  

                                      <div class="home-post-excerpt"><?php the_excerpt()?></div>

   

   <?php endwhile; endif; ?>

    

    <?php wp_reset_query(); ?>

   

   </div>

     <div class="col-xs-12 col-md-6 right">

         <?php query_posts('category_name=code&offset=1&showposts=4' );?>

   <?php if (have_posts()) : while (have_posts()) : the_post(); 

   $category = get_the_category(); 

   ?>

              <div class="row gap">

   <div class="col-xs-4">

              <a href="<?php the_permalink() ?>"  title="<?php the_title_attribute(); ?>">

			  <?php 

                                        if ( has_post_thumbnail() ) {

                                                the_post_thumbnail('small');

                                            }?> 

                                            </a> 

                                            </div>

                                             <div class="col-xs-8">

									<h3 class="h3 home-post-title2"><a href="<?php the_permalink() ?>"  title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>

                                   <div class="home-post-meta2"><i class="fa fa-clock-o"></i>&nbsp;&nbsp;<?php the_date('F d, Y'); ?>&nbsp;&nbsp;|&nbsp;&nbsp;<?php echo $category[0]->cat_name; ?></div>  

                                     

                                      </div>

                                      </div>

   

   <?php endwhile; endif; ?>

    

    <?php wp_reset_query(); ?>

   </div>

</div>