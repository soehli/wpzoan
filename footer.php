			</div><!--END WRAPPER-->

            </div><!--END CONTAINER-->



            <footer class="footer" role="contentinfo">







				<div class= "container">

                                  <div class="row">   

                                   <div class="col-xs-12 col-md-2">



					

<div class="logo"><a  href="<?php echo home_url(); ?>" rel="nofollow"><img src="<?php echo get_template_directory_uri(); ?>/images/WP_ZOAN_LOGO.png" alt="WPZoan.com - Everything WordPress"></a></div>





					<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>.</p>



                                  </div>

                                  <div class="col-xs-12 col-md-7">

                                  <nav class="footer-nav">

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

                                  

                                 <div class="col-xs-12 col-md-3" >

                                 <div class="header-social" style="position:relative; float:left;"> <a href="https://www.facebook.com/WPZoan" target="_blank" title="WPZoan.com on Facebook "><i class="fa fa-facebook-square"></i></a>&nbsp;&nbsp;&nbsp;<a href="https://twitter.com/WPZoan" target="_blank" title="Follow WPZoan.com on Twitter"><i class="fa fa-twitter-square"></i></a>&nbsp;&nbsp;&nbsp;<a href="https://www.youtube.com/channel/UCnrqFdVKfcGg2VLYohibGcQ" target="_blank" title="Subscribe to WPZoan.com on YouTube" ><i class="fa fa-youtube-square"></i></a>&nbsp;&nbsp;&nbsp;<a href="https://www.pinterest.com/wpzoan/" target="_blank" title="WPZoan.com on Pinterest" ><i class="fa fa-pinterest-square"></i></a>&nbsp;&nbsp;&nbsp;<a href="https://plus.google.com/u/0/b/107590856734909075006/107590856734909075006/posts" target="_blank" title="WPZoan.com on Google+ " ><i class="fa fa-google-plus-square"></i></a>&nbsp;&nbsp;&nbsp;<a href="http://www.wpzoan.com/feed/" target="_blank" title="WPZoan.com RSS Feed " ><i class="fa fa-rss-square"></i></a></div> 

                                </div> 

				</div>







			</footer>







		







		<?php // all js scripts are loaded in library/theme_functions.php ?>



		<?php wp_footer(); ?>
      
<?php 
if ((S2MEMBER_CURRENT_USER_ACCESS_LEVEL >= 1) || is_page('newsletter-signup')) {

}else { ?>
<script>
//hide email 
jQuery(document).ready(function($) {
$('#noty_center_layout_container').hide();
$('#noty_center_layout_container').delay(7000).fadeIn(500);
});
</script>
 <div class="email-lead">
<?php get_template_part ('inc/noty'); ?>
</div>
<?php
}
?>
<!-- Piwik -->
<script type="text/javascript">
  var _paq = _paq || [];
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="//www.1018mediagroup.com/piwik/";
    _paq.push(['setTrackerUrl', u+'piwik.php']);
    _paq.push(['setSiteId', 1]);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<noscript><p><img src="//www.1018mediagroup.com/piwik/piwik.php?idsite=1" style="border:0;" alt="" /></p></noscript>
<!-- End Piwik Code -->

	</body>







</html>