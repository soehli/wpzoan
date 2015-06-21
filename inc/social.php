<?php

/*
	Display Total Number of Social Shares with PHP and WordPress Shortcode
	http://www.internoetics.com/2014/02/03/display-total-number-of-social-shares-with-php-and-wordpress-shortcode/
	Changed from api.sharedcount to free.sharedcount & Requires Registration (www.sharedcount.com)
*/


function internoetics_get_total_shares($atts) {
  extract(shortcode_atts(array(
    'cache' => '3600',
    'url' => 0,
    'apikey' => '0d1ac38e4363d59a921ac866a92d26d0f03f0f89',
    'f' => 0,
    'bgcolor' => '#ffffff',
    'bordercolor' => '#ffffff',
    'borderwidth' => '0',
    'bordertype' => 'solid',
    'fontcolor' => '#7fc04c',
    'fontsize' => '55',
    'fontweight' => 'normal',
    'padding' => '1'
  ), $atts));

 $shareHash = "$cache.$url.$f.$bgcolor.$bordercolor.$borderwidth.$bordertype.$fontcolor.$fontsize.$fontweight.$padding";
 $totalShareRecord = 'totalshares_' . $shareHash;
 $cachedposts = get_transient($totalShareRecord);
 if ($cachedposts !== false) {
 return $cachedposts;

  } else {

 if (!$url) $url = get_permalink($post->ID);

  $json = file_get_contents("http://free.sharedcount.com/?apikey=$apikey&url=" . rawurlencode($url));
   $counts = json_decode($json, true);
   $return = $counts['Twitter'] + $counts['Facebook']['total_count'] + $counts['GooglePlusOne'];
   if ($f) $return = '<p><font style="padding: ' . $padding . 'px ' . $padding . 'px ' . $padding . 'px ' . $padding . 'px; font-size: ' . $fontsize . 'px; font-weight:' . $fontweight . '; color: ' . $fontcolor . '; background-color: ' . $bgcolor . '; border: ' . $bordercolor. ' ' . $bordertype . ' ' . $borderwidth . 'px">' . $return . '</font></p>';
   set_transient($totalShareRecord, $return, $cache);
  return $return;
 }
}
add_shortcode('totalshares','internoetics_get_total_shares');

?>



<style>

#asi {position:relative;  margin-top:0px; height:50px; overflow:hidden;}
.si {padding:3px; text-align:left;}
.button { width:40px; height:40px;} 
 

	

</style>
<script>

jQuery(document).ready(function($) {
    jQuery('a.popup').live('click', function(){
		  
        newwindow=window.open($(this).attr('href'),'','height=350,width=550,top=300, left=500,scrollbars=no, resizable=no' );
        if (window.focus) {newwindow.focus()}
        return false;
    });
});
</script>
 


<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div style="margin:15px 0 15px 0; padding:0 4px 4px 4px;"> 

 <div class="h3">Share</div>  
<div id="asi">
                    
                   <span class="si">
                   <a href="http://www.facebook.com/share.php?u=<?php the_permalink(); ?>&title=<?php the_title(); ?>" class="popup" ><span class="button"> <img src="<?php echo get_template_directory_uri(); ?>/library/images/facebook.png" ></span></a>
                   </span>
                  <span class="si" >
                <!--TWITTER-->
                <a href="http://twitter.com/intent/tweet?status=<?php the_title(); ?>+<?php the_permalink(); ?>" ><img src="<?php echo get_template_directory_uri(); ?>/library/images/twitter.png" ></a>
                </span>

                <span class="si">
                <!--GOOGLE PLUS-->
                
                <a href="http://www.google.com/bookmarks/mark?op=edit&bkmk=<?php the_permalink(); ?>&title=<?php the_title(); ?>&annotation=" class="popup" ><span class="button"> <img src="<?php echo get_template_directory_uri(); ?>/library/images/google-plus.png" ></span></a>
                
                </span>
               <span class="si">
              <a href="http://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>&title=<?php the_title(); ?>&source=http://www.wpzoan.com" class="popup" ><span class="button"> <img src="<?php echo get_template_directory_uri(); ?>/library/images/linkdin.png" ></span></a>
    
    
   <span class="si"> <?php //echo do_shortcode('[totalshares]'); ?></span>
          
            
</div>



</div>
