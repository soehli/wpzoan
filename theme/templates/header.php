<?php
    $particle_enabled = get_theme_mod('enable_particle_background', plsh_gs('enable_particle_background'));
    if($particle_enabled === true)
    {
        echo '<div id="particles"></div>';
    }
?>

<?php
    if(
        (is_single() && get_post_type() == 'post')
        &&
        plsh_gs('show_post_read_progress') == 'on')
    {
        ?> <div class="read-progress"><span style="width: 40%;"></span></div> <?php
    }    
?>
<?php get_template_part('theme/templates/trending-news'); ?>

<!-- Header -->
<header class="container header">
    
    <?php if(plsh_gs('use_image_logo') == 'on') { ?>
        <div class="logo-image">
            <a href="<?php echo home_url('/'); ?>"><img src="<?php echo esc_url(plsh_gs('logo_image')); ?>" alt="<?php esc_attr(plsh_gs('logo_image_alt')); ?>"></a>
        </div>
    <?php } else { ?>
        <div class="logo-text">
            <h2><a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></h2>
            <p><?php bloginfo('description'); ?></p>
        </div>
    <?php } ?>
    
    <?php //echo $banner = plsh_get_banner_by_location('header_ad'); ?>
    <!--LARGE SCREENS-->
		<div class="hidden-xs hidden-sm">

   <!--/*
  *
  * Revive Adserver iFrame Tag
  * - Generated with Revive Adserver v3.1.0
  *
  */-->

<!--/*
  * This tag has been generated for use on a non-SSL page. If this tag
  * is to be placed on an SSL page, change the
  *   'http://si-staging.com/adserver_31/www/delivery/...'
  * to
  *   'https://si-staging.com/adserver_31/www/delivery/...'
  *
  * The backup image section of this tag has been generated for use on a
  * non-SSL page. If this tag is to be placed on an SSL page, change the
  *   'http://si-staging.com/adserver_31/www/delivery/...'
  * to
  *   'https://si-staging.com/adserver_31/www/delivery/...'
  *
  * If iFrames are not supported by the viewer's browser, then this
  * tag only shows image banners. There is no width or height in these
  * banners, so if you want these tags to allocate space for the ad
  * before it shows, you will need to add this information to the <img>
  * tag.
  */-->

<iframe id='a69c16d8' name='a69c16d8' src='http://si-staging.com/adserver_31/www/delivery/afr.php?zoneid=2&amp;cb=INSERT_RANDOM_NUMBER_HERE' frameborder='0' scrolling='no' width='728' height='90'><a href='http://si-staging.com/adserver_31/www/delivery/ck.php?n=a7d7950e&amp;cb=INSERT_RANDOM_NUMBER_HERE' target='_blank'><img src='http://si-staging.com/adserver_31/www/delivery/avw.php?zoneid=2&amp;cb=INSERT_RANDOM_NUMBER_HERE&amp;n=a7d7950e' border='0' alt='' /></a></iframe>
<br/>
</div>

  <!--SMALL SCREENS-->
        <div class="hidden-md hidden-lg" style="padding-top:15px;">
        <center>
                 <?php if(is_user_logged_in()){ ?>
         <a class="btn btn-sm btn-primary" href="<?php echo wp_logout_url(); ?>" title="Logout">Logout</a>
    
<?php } else { ?>
         <a class="btn btn-sm btn-primary" href="/login/" rel="nofollow">Login</a>
<?php } ?>
      
        </center>
        
        </div>


</header>

<?php get_template_part('theme/templates/menu'); ?>