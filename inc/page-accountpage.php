



	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>







						

                            <?php 

								   global $current_user;

                                   get_currentuserinfo();

								   ?>



								 <div class="title">

                <h2 style="padding-bottom:4px; border-bottom:1px solid #333; padding-left:129px;">Welcome <?php echo $current_user->user_firstname; ?></h2>

                

               

            </div>

            



			<!--FREE-->					

        <?php if (current_user_is("s2member_level1")){ ?>

         <!--ACTIVITY-->

  <div style="position:relative; float:left; padding:10px 20px 0 10px; background:#fff; margin-top:-58px;"><span style=""><?php echo get_avatar( $current_user->id, 75 ); ?></span> </div>

  <a href="/profile-upate/" class="btn btn-primary">Update Profile</a>&nbsp;&nbsp;&nbsp;<a href="http://wpzoan.com/zoan/index.php?sid=01ded75aa1f2f943d412b123bc5a3508" class="btn btn-primary">Forum</a>

  &nbsp;&nbsp;&nbsp;<!--<a href="http://www.wpzoan.com/wordpress-professionals/register-for-the-professional-directory/" class="btn btn-primary">Professional Directory</a>-->

  <div style="margin-top:70px; padding-bottom:20px;">

<div class="title-default"><span class="active">Your Activity</span></div>

<?php get_template_part('theme/templates/memberactivity'); ?>

<div style="margin-top:15px;"><a href="/groups/" class="btn btn-success btn-sm">Groups</a>&nbsp;&nbsp;&nbsp;<a href="/members/<?php echo $current_user->user_login; ?>/activity/mentions/" class="btn btn-success btn-sm">Mentions</a>&nbsp;&nbsp;&nbsp;<a href="/members/<?php echo $current_user->user_login; ?>/activity/favorites/" class="btn btn-success btn-sm">Favorites</a>&nbsp;&nbsp;&nbsp;<a href="/members/" class="btn btn-success btn-sm">Members</a>

</div>

</div>
<hr/> 


<!--JOBS-->

 <!--<div style="margin-top:20px; margin-bottom:20px;">

<div class="title-default" style="margin-bottom:15px;"><span class="active">Gig Search</span></div>

<?php //echo do_shortcode("[jobs]"); ?>

</div>->

<!--FORUM | QUESTIONS | -->

<div style="margin-top:30px; margin-bottom:20px;">

<div class="row">

<div class="col-xs-12 col-md-6">

<div class="mod-title" style=""><span class="active">Forums</span></div>

<?php //the_widget( 'WP-United_Widget_Latest_Forum_Posts' ); ?>

<?php dynamic_sidebar( 'forum' ); ?>

</div><!--END FORUM-->

<div class="col-xs-12 col-md-6">

<div class="mod-title" style=""><span class="active">Latest Questions</span></div>

<div class="mod"> 


    <?php

	$post_author = $current_user->id;

	  $args = array(

    'post_type' => 'dwqa-question',

	'post_author' => $post_author,

    'post_status' => 'publish',

    'showposts' => 4,

	'suppress_filters'  => false,

    //'orderby' => 'title',

    //'order' => 'ASC'

);

$my_questions = new WP_Query($args);			

while( $my_questions->have_posts() ) : $my_questions->the_post(); ?>



<div style="padding-top:5px;">

<a style="color:#333; font-size:14px; text-decoration:none;" href="<?php echo get_permalink(); ?>" title="<?php echo the_title( ); ?>"><b><?php the_title();?></b></a><br/>

<span style="font-size:10px"><?php echo get_the_author(); ?></span>



</div>



<?php endwhile; ?>

<?php wp_reset_query(); ?>	



</div><!-- END QUESIONS-->
</div>



</div><!--END ROW-->

</div>



<!--PROMOS-->

<div style="margin-top:30px; margin-bottom:20px;">

<div class="mod-title" style=""><span class="active">Deals and Promotions</span></div>

         <div class="row">

         	<div class="col-xs-12 col-md-6" style="text-align:center;">
               <div class="mod">
                <a href="http://affiliates.websharks-inc.com/3746-6-1-384.html" target="_blank"><img src="http://wpzoan.com/zoansite/wp-content/uploads/2015/03/s2member-discount.png" alt="s2Member Membership WordPress plugin"></a>

                    <h4 style=" padding-top:6px; text-align:center;">s2Member Membership Plugin</h4>

                 <div style="margin-top:10px; font-size:16px;">Go Pro and <b>Save 10%</b>. <br/><br/> Enter coupon code <span style="font-size:18px;"><b>SAVE10-A:3746</b></span><br/><br/>

                 <a href="http://affiliates.websharks-inc.com/3746-6-1-384.html" class="btn btn-success " target="_blank">Click Here and SAVE</a>

                 </div>
</div>
            </div>

            

            <div class="col-xs-12 col-md-6">
                 <?php if ( time() < strtotime('2015-07-01 00:00:00') ) { ?>
                     <div class="mod">
                <a href="http://affiliates.websharks-inc.com/3746-6-1-384.html" target="_blank"><img src="http://mediatemple.net/_img/webhosting/wordpress/themes/wp-custom-thumb-retina.jpg" alt="WordPress Hosting"></a>

                    <h4 style=" padding-top:6px; text-align:center;">WordPress Hosting</h4>

                 <div style="margin-top:10px; font-size:16px;">WordPress Hosting - includes Git integration, WP-CLI administration, Site Staging, DDoS &amp; intrusion protection, automated daily backups and more<b>Save 20%</b>. <br/><br/> <center>Enter coupon code <span style="font-size:18px;"><b> WPAFF20</b></span><br/><br/>

                 <a href="http://mediatemple.7eer.net/c/153276/210294/2795" class="btn btn-success " target="_blank">Click Here and SAVE</a></center>

                 </div>
</div>
            
<?php } ?>
            

            </div>

            

            

         

         </div>



</div>







         <!--MEMBER-->

<?php } else if (current_user_is("s2member_level2")){ ?>

<!--ACTIVITY-->

  <div style="position:relative; float:left; padding:10px 20px 0 10px; background:#fff; margin-top:-58px;"><span style=""><?php echo get_avatar( $current_user->id, 75 ); ?></span> </div>

  <a href="/profile-upate/" class="btn btn-primary">Update Profile</a>&nbsp;&nbsp;&nbsp;<a href="http://wpzoan.com/zoan/index.php?sid=01ded75aa1f2f943d412b123bc5a3508" class="btn btn-primary">Forum</a>

   &nbsp;&nbsp;&nbsp;<!--<a href="http://www.wpzoan.com/wordpress-professionals/register-for-the-professional-directory/" class="btn btn-primary">Professional Directory</a>-->

  <div style="margin-top:70px; padding-bottom:20px;">

<div class="title-default"><span class="active">Your Activity</span></div>

<?php get_template_part('theme/templates/memberactivity'); ?>

<div style="margin-top:15px;"><a href="/members/<?php echo $current_user->user_login; ?>/notifications/" class="btn btn-success btn-sm">Notifications</a>&nbsp;&nbsp;&nbsp;<a href="/members/<?php echo $current_user->user_login; ?>/activity/mentions/" class="btn btn-success btn-sm">Mentions</a>&nbsp;&nbsp;&nbsp;<a href="/members/<?php echo $current_user->user_login; ?>/activity/favorites/" class="btn btn-success btn-sm">Favorites</a>&nbsp;&nbsp;&nbsp;<a href="/members/" class="btn btn-success btn-sm">Members</a>

</div>

</div>
<hr/>  
<!--JOBS-->

 <div style="margin-top:20px; margin-bottom:20px;">

<div class="mod-title" style=""><span class="active">Job  Search</span></div>
<div class="mod">
<?php echo do_shortcode("[jobs]"); ?>
</div>

</div>



<!--FORUM | QUESTIONS -->

<div style="margin-top:30px; margin-bottom:20px;">

<div class="row">

<div class="col-xs-12 col-md-6">

<div class="mod-title" style="margin-bottom:15px;"><span class="active">Forums</span></div>

<?php //the_widget( 'WP-United_Widget_Latest_Forum_Posts' ); ?>
<div class="mod">
<?php dynamic_sidebar( 'forum' ); ?>
</div>

</div><!--END FORUM-->

<div class="col-xs-12 col-md-6">

<div class="mod-title" style="margin-bottom:15px;"><span class="active">Latest Questions</span></div>
  <div class="mod">
    <?php

	$post_author = $current_user->id;

	  $args = array(

    'post_type' => 'dwqa-question',

	'post_author' => $post_author,

    'post_status' => 'publish',

    'showposts' => 4,

    //'orderby' => 'title',

    //'order' => 'ASC'

);

$my_questions = new WP_Query($args);			

while( $my_questions->have_posts() ) : $my_questions->the_post(); ?>



<div style="padding-top:5px;">

<a style="color:#333; font-size:14px; text-decoration:none;" href="<?php echo get_permalink(); ?>" title="<?php echo the_title( ); ?>"><b><?php the_title();?></b></a><br/>

<span style="font-size:10px">by:&nbsp;<?php echo get_the_author(); ?></span>



</div>



<?php endwhile; ?>

<?php wp_reset_query(); ?>	
</div>


</div><!-- END QUESIONS-->

</div><!--END ROW-->

</div>

<!--PROMOS-->

<div style="margin-top:30px; margin-bottom:20px;">

<div class="mod-title" style="margin-bottom:15px;"><span class="active">Deals and Promotions</span></div>

         <div class="row">

         	<div class="col-xs-12 col-md-6" style="text-align:center;">
                  <div class="mod">
                <a href="http://affiliates.websharks-inc.com/3746-6-1-384.html" target="_blank"><img src="http://wpzoan.com/zoansite/wp-content/uploads/2015/03/s2member-discount.png" alt="s2Member Membership WordPress plugin"></a>

                    <h4 style=" padding-top:6px; text-align:center;">s2Member Membership Plugin</h4>

                 <div style="margin-top:10px; font-size:16px;">Go Pro and <b>Save 10%</b>. <br/><br/> Enter coupon code <span style="font-size:18px;"><b>SAVE10-A:3746</b></span><br/><br/>

                 <a href="http://affiliates.websharks-inc.com/3746-6-1-384.html" class="btn btn-success " target="_blank">Click Here and SAVE</a>

                 </div>
                                 </div>
            </div>

            

             <div class="col-xs-12 col-md-6">
			  <?php if ( time() < strtotime('2015-07-01 00:00:00') ) { ?>
                     <div class="mod">
                <a href="http://affiliates.websharks-inc.com/3746-6-1-384.html" target="_blank"><img src="http://mediatemple.net/_img/webhosting/wordpress/themes/wp-custom-thumb-retina.jpg" alt="WordPress Hosting"></a>

                    <h4 style=" padding-top:6px; text-align:center;">WordPress Hosting</h4>

                 <div style="margin-top:10px; font-size:16px;">WordPress Hosting - includes Git integration, WP-CLI administration, Site Staging, DDoS &amp; intrusion protection, automated daily backups and more<b>Save 20%</b>. <br/><br/> <center>Enter coupon code <span style="font-size:18px;"><b> WPAFF20</b></span><br/><br/>

                 <a href="http://mediatemple.7eer.net/c/153276/210294/2795" class="btn btn-success " target="_blank">Click Here and SAVE</a></center>

                 </div>
</div>
            
<?php } ?>
            </div>

            

            

         

         </div></div> 









        <!--EMPLOYER-->

<?php } else if (current_user_is("s2member_level3")){ ?>

   

  <?php //wp_redirect( home_url( '/job-dashboard/' ) );

       // exit(); ?>

       <div style="position:relative; float:left; padding:10px 20px 0 10px; background:#fff; margin-top:-58px;"><span style=""><?php echo get_avatar( $current_user->id, 75 ); ?></span> </div>

  <a href="/profile-upate/" class="btn btn-primary">Update Profile</a>&nbsp;&nbsp;&nbsp;<a href="http://wpzoan.com/job-dashboard/" class="btn btn-primary">My Job Posts</a>

<div style="margin-top:70px; padding-bottom:20px;">

         <div class="title-default" style="margin-bottom:15px;"><span class="active">Post A Job</span></div>
    <div class="row">
  <?php
$args = array( 
  'post_type' => 'product', 
  'orderby'=> 'title',
  'posts_per_page'=> -1,
  'product_cat' => 'job-packages'
);
$myquery = new WP_Query($args);
 if ( $myquery->have_posts() ) : ?>
<?php while ( $myquery->have_posts() ) : $myquery->the_post(); 
$price = get_post_meta( $post->ID, '_regular_price', true); 
//example, display a list of title 
?>

<div class="col-xs-12 col-md-6" style="border-bottom:1px solid #CCCCCC; ">
<div style="padding:7px;">
<h4 style="font-size:16px;"><a style="color:#333333;" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
<?php the_content(); ?>
<div style="font-size:18px; color:#1872A4; font-weight:bold; margin:8px 0 7px; 0">$ <?php echo $price;  ?>.00</div>
  
 <?php woocommerce_template_loop_add_to_cart(); ?>
 </div></div>
<?php endwhile; ?>
 </div>
<?php else : ?>
<p>Not Found</p>
<?php endif; 

wp_reset_query(); ?>

  

  

  

  </div>


  



<?php } else { ?>



 Please <a href="http://www.wpzoan.com/register/" title="WPZoan Membership">register</a> for an account to gain access

<?php } ?>							





							







						





<?php endwhile; ?>







								





						







							<?php endif; ?>





					







			