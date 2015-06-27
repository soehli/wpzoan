<!doctype html>







<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->



<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->



<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->



<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->







	<head>



		<meta charset="utf-8">







		<?php // force Internet Explorer to use the latest rendering engine available ?>



		<meta http-equiv="X-UA-Compatible" content="IE=edge">







		<title><?php wp_title(''); ?></title>







		<?php // mobile meta (hooray!) ?>



		<meta name="HandheldFriendly" content="True">



		<meta name="MobileOptimized" content="320">



		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>







		



		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">



		<!--[if IE]>



			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">



		<![endif]-->



		<?php // or, set /favicon.ico for IE10 win ?>



		<meta name="msapplication-TileColor" content="#f01d4f">



		







		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">



       



        <?php if (have_posts()):while(have_posts()):the_post(); endwhile; endif;?>

        

        <!-- if page is content page -->

        <?php if (is_single()) { ?>

        <meta property="og:url" content="<?php the_permalink() ?>"/>

        <meta property="og:title" content="<?php esc_attr(single_post_title('')); ?>" />

        <meta property="og:description" content="<?php echo esc_attr(strip_tags(get_the_excerpt())); ?>" />

        <meta property="og:type" content="article" />

        <?php

            $img = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'small');

            if($img)

            {

                echo '<meta property="og:image" content="' . $img[0] . '" />';

            }

        ?>

        <!-- if page is others -->

        <?php } else { ?>

        <meta property="og:site_name" content="<?php esc_attr(bloginfo('name')); ?>" />

        <meta property="og:description" content="<?php esc_attr(bloginfo('description')); ?>" />

        <meta property="og:type" content="website" />

        <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/images/WP_ZOAN_LOGO.png"  /> <?php } ?>

        



		



        



		<?php // wordpress head functions ?>



		<?php wp_head(); ?>



		<?php // end of wordpress head ?>







		<?php // drop Google Analytics Here ?>

                      <script>

  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){

  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),

  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)

  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');



  ga('create', 'UA-59917858-1', 'auto');

  ga('send', 'pageview');



</script>

		<?php // end analytics ?>







	</head>







	<body <?php body_class(); ?>>
    <?php if ( time() < strtotime('2015-07-01 00:00:00') ) { ?>
    <div class="rim">
<div class="container">
  <div class="row">
        <div class="col-xs-12">
       SAVE ON WORDPRESS HOSTING : : Get 20% OFF Annual WordPress Hosting &nbsp;&nbsp;  <a style="color:#fff;" href="<?php echo esc_url( home_url( '/wpzoan-com-membership-options/' ) ); ?>" title="Get 20% OFF Annual WordPress Hosting">LOGIN or SIGN UP to GET CODE</a>
        </div>
  </div>
</div>

</div>
<?php } ?>

<!--SMALL SCREEN -->

<header class="header hidden-md hidden-lg">	

    <div class="container">

    <div class="row">

    <div class="col-xs-12">

         <div class="logo"><a  href="<?php echo home_url(); ?>" rel="nofollow"><img src="<?php echo get_template_directory_uri(); ?>/images/WP_ZOAN_LOGO.png" alt="WPZoan.com - Everything WordPress"></a></div>

        <div>

         <div class="header-social" style="position:relative; float:left;"> <a href="https://www.facebook.com/WPZoan" target="_blank" title="WPZoan.com on Facebook "><i class="fa fa-facebook-square"></i></a>&nbsp;&nbsp;&nbsp;<a href="https://twitter.com/WPZoan" target="_blank" title="Follow WPZoan.com on Twitter"><i class="fa fa-twitter-square"></i></a>&nbsp;&nbsp;&nbsp;<a href="https://www.youtube.com/channel/UCnrqFdVKfcGg2VLYohibGcQ" target="_blank" title="Subscribe to WPZoan.com on YouTube" ><i class="fa fa-youtube-square"></i></a>&nbsp;&nbsp;&nbsp;<a href="https://www.pinterest.com/wpzoan/" target="_blank" title="WPZoan.com on Pinterest" ><i class="fa fa-pinterest-square"></i></a>&nbsp;&nbsp;&nbsp;<a href="https://plus.google.com/u/0/b/107590856734909075006/107590856734909075006/posts" target="_blank" title="WPZoan.com on Google+ " ><i class="fa fa-google-plus-square"></i></a>&nbsp;&nbsp;&nbsp;<a href="http://www.wpzoan.com/feed/" target="_blank" title="WPZoan.com RSS Feed " ><i class="fa fa-rss-square"></i></a></div>

         

         <div style=" padding-right:9px; position:relative; float:right;">



            <?php if(is_user_logged_in()){ ?>

         <a class="btn btn-sm btn-primary" href="<?php echo wp_logout_url(); ?>" title="Logout">Logout</a>

    

<?php } else { ?>

         <a class="btn btn-sm btn-primary" href="/login/" rel="nofollow">Login</a>

<?php } ?>

</div><!--END BUTTONS-->

 <div style="clear:both;"></div>

   </div>

        </div>

      

        </div>

        </div>

        

        

        <!--LEVEL 2-->

        <div class="header-wrap2">

       

        <div class="row ">

        	

        <div class="col-xs-12">

    <nav class="navbar navbar-inverse " role="navigation" >

      

        <div class="navbar-header">

          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false" aria-controls="navbar">

            <span class="sr-only">Toggle navigation</span>

            <span class="icon-bar"></span>

            <span class="icon-bar"></span>

            <span class="icon-bar"></span>

          </button>

           

        </div>

         <?php

		 //free membership

		 if (current_user_is("s2member_level1")){

            wp_nav_menu( array(

                 'menu'              => 'premium-menu',

                    'theme_location'    => 'premium-menu',

                'depth'             => 2,

                'container'         => 'div',

                'container_class'   => 'collapse navbar-collapse',

                  'container_id'      => 'bs-example-navbar-collapse-1',

                'menu_class'        => 'nav navbar-nav',

                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',

                'walker'            => new wp_bootstrap_navwalker())

            );

			//premium membership

		 } elseif (current_user_is("s2member_level2")){

			   wp_nav_menu( array(

                 'menu'              => 'premium-menu',

                    'theme_location'    => 'premium-menu',

                'depth'             => 2,

                'container'         => 'div',

                'container_class'   => 'collapse navbar-collapse',

                  'container_id'      => 'bs-example-navbar-collapse-1',

                'menu_class'        => 'nav navbar-nav',

                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',

                'walker'            => new wp_bootstrap_navwalker())

            );

			 

		 } else{

			 wp_nav_menu( array(

                 'menu'              => 'primary-menu',

                    'theme_location'    => 'primary-menu',

                'depth'             => 2,

                'container'         => 'div',

                'container_class'   => 'collapse navbar-collapse',

                  'container_id'      => 'bs-example-navbar-collapse-1',

                'menu_class'        => 'nav navbar-nav',

                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',

                'walker'            => new wp_bootstrap_navwalker())

            ); 

			 

		 }

		 

		 

        ?>

     

    </nav>

     
		

 



    

    

   

    

    

    </div>

   

    </div>

 

    </div>

   </header>





	



<!--LARGE SCREEN -->

	<header class="header hidden-xs hidden-sm">	

    <div class="container">

    <div class="row header-wrap">

    <div class="col-xs-12 col-md-3">

         <div class="logo"><a  href="<?php echo home_url(); ?>" rel="nofollow"><img src="<?php echo get_template_directory_uri(); ?>/images/WP_ZOAN_LOGO.png" alt="WPZoan.com - Everything WordPress"></a></div>

        </div>

           <div class="col-xs-12 col-md-9">

                      <!--LARGE SCREENS-->

		<div class="hidden-xs hidden-sm" style="margin-top:2px;">

<!--/*
  *
  * Revive Adserver Javascript Tag
  * - Generated with Revive Adserver v3.1.0
  *
  */-->

<!--/*
  * The backup image section of this tag has been generated for use on a
  * non-SSL page. If this tag is to be placed on an SSL page, change the
  *   'http://1018mediagroup.com/adserver/www/delivery/...'
  * to
  *   'https://1018mediagroup.com/adserver/www/delivery/...'
  *
  * This noscript section of this tag only shows image banners. There
  * is no width or height in these banners, so if you want these tags to
  * allocate space for the ad before it shows, you will need to add this
  * information to the <img> tag.
  *
  * If you do not want to deal with the intricities of the noscript
  * section, delete the tag (from <noscript>... to </noscript>). On
  * average, the noscript tag is called from less than 1% of internet
  * users.
  */-->

<script type='text/javascript'><!--//<![CDATA[
   var m3_u = (location.protocol=='https:'?'https://1018mediagroup.com/adserver/www/delivery/ajs.php':'http://1018mediagroup.com/adserver/www/delivery/ajs.php');
   var m3_r = Math.floor(Math.random()*99999999999);
   if (!document.MAX_used) document.MAX_used = ',';
   document.write ("<scr"+"ipt type='text/javascript' src='"+m3_u);
   document.write ("?zoneid=2");
   document.write ('&amp;cb=' + m3_r);
   if (document.MAX_used != ',') document.write ("&amp;exclude=" + document.MAX_used);
   document.write (document.charset ? '&amp;charset='+document.charset : (document.characterSet ? '&amp;charset='+document.characterSet : ''));
   document.write ("&amp;loc=" + escape(window.location));
   if (document.referrer) document.write ("&amp;referer=" + escape(document.referrer));
   if (document.context) document.write ("&context=" + escape(document.context));
   if (document.mmm_fo) document.write ("&amp;mmm_fo=1");
   document.write ("'><\/scr"+"ipt>");
//]]>--></script><noscript><a href='http://1018mediagroup.com/adserver/www/delivery/ck.php?n=a5265f0c&amp;cb=INSERT_RANDOM_NUMBER_HERE' target='_blank'><img src='http://1018mediagroup.com/adserver/www/delivery/avw.php?zoneid=2&amp;cb=INSERT_RANDOM_NUMBER_HERE&amp;n=a5265f0c' border='0' alt='' /></a></noscript>



<br/>

</div>

           </div>

        </div>

        </div>

        

        

        <!--LEVEL 2-->

        <div class="header-wrap2">

        <div class="container">

        <div class="row ">

        	<div class="col-xs-12 col-md-3">

            <div class="header-social"> <a href="https://www.facebook.com/WPZoan" target="_blank" title="WPZoan.com on Facebook "><i class="fa fa-facebook-square"></i></a>&nbsp;&nbsp;&nbsp;<a href="https://twitter.com/WPZoan" target="_blank" title="Follow WPZoan.com on Twitter"><i class="fa fa-twitter-square"></i></a>&nbsp;&nbsp;&nbsp;<a href="https://www.youtube.com/channel/UCnrqFdVKfcGg2VLYohibGcQ" target="_blank" title="Subscribe to WPZoan.com on YouTube" ><i class="fa fa-youtube-square"></i></a>&nbsp;&nbsp;&nbsp;<a href="https://www.pinterest.com/wpzoan/" target="_blank" title="WPZoan.com on Pinterest" ><i class="fa fa-pinterest-square"></i></a>&nbsp;&nbsp;&nbsp;<a href="https://plus.google.com/u/0/b/107590856734909075006/107590856734909075006/posts" target="_blank" title="WPZoan.com on Google+ " ><i class="fa fa-google-plus-square"></i></a>&nbsp;&nbsp;&nbsp;<a href="http://www.wpzoan.com/feed/" target="_blank" title="WPZoan.com RSS Feed " ><i class="fa fa-rss-square"></i></a></div>

            </div>

        <div class="col-xs-12 col-md-9">

    <nav class="navbar navbar-inverse " role="navigation" style="position:relative; float:left;">

      

        <div class="navbar-header">

          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false" aria-controls="navbar">

            <span class="sr-only">Toggle navigation</span>

            <span class="icon-bar"></span>

            <span class="icon-bar"></span>

            <span class="icon-bar"></span>

          </button>

           

        </div>

         <?php

		 //free membership

		 if (current_user_is("s2member_level1")){

            wp_nav_menu( array(

                 'menu'              => 'premium-menu',

                    'theme_location'    => 'premium-menu',

                'depth'             => 2,

                'container'         => 'div',

                'container_class'   => 'collapse navbar-collapse',

                  'container_id'      => 'bs-example-navbar-collapse-1',

                'menu_class'        => 'nav navbar-nav',

                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',

                'walker'            => new wp_bootstrap_navwalker())

            );

			//premium membership

		 } elseif (current_user_is("s2member_level2")){

			   wp_nav_menu( array(

                 'menu'              => 'premium-menu',

                    'theme_location'    => 'premium-menu',

                'depth'             => 2,

                'container'         => 'div',

                'container_class'   => 'collapse navbar-collapse',

                  'container_id'      => 'bs-example-navbar-collapse-1',

                'menu_class'        => 'nav navbar-nav',

                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',

                'walker'            => new wp_bootstrap_navwalker())

            );

			 

		 } else{

			 wp_nav_menu( array(

                 'menu'              => 'primary-menu',

                    'theme_location'    => 'primary-menu',

                'depth'             => 2,

                'container'         => 'div',

                'container_class'   => 'collapse navbar-collapse',

                  'container_id'      => 'bs-example-navbar-collapse-1',

                'menu_class'        => 'nav navbar-nav',

                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',

                'walker'            => new wp_bootstrap_navwalker())

            ); 

			 

		 }

		 

		 

        ?>

     

    </nav>

      <!--LARGE SCREENS-->

		<div class="" style="position:relative; float:right;">

 <div style=" padding-right:9px; margin-top:17px;">



            <?php if(is_user_logged_in()){ ?>

         <a class="btn btn-sm btn-primary" href="<?php echo wp_logout_url(); ?>" title="Logout">Logout</a>

    

<?php } else { ?>

         <a class="btn btn-sm btn-primary" href="/login/" rel="nofollow">Login</a>

<?php } ?>

</div><!--END BUTTONS-->

</div>

    

    

   <div style="clear:both;"></div>

    

    

    </div>

   

    </div>

    </div>

    </div>

   </header>



<div class="container">

<div class="wrapper">