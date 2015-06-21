<!-- Menu responsive -->
<div class="navbar-wrapper navbar-wrapper-responsive">
    <div class="navbar navbar-default menu">
        <div class="container">
            <ul class="nav<?php if(plsh_gs('show_header_search') != 'on') { echo ' no-search'; } ?>">
                <li class="active">
                    
                </li>
                <li class="dropdown bars">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bars"></i></a>
                    
                    <?php
                        wp_nav_menu( array(
                            'menu'              => 'primary-menu',
                            'theme_location'    => 'primary-menu',
                            'depth'             => 3,
                            'container'         => 'div',
                            'container_class'   => 'dropdown-menu full-width mobile-menu',
                            'container_id'      => '',
                            'menu_class'        => '',
                            'menu_id'           => 'mobile-menu',
                            'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                            //'walker'            => new wp_bootstrap_navwalker(),
                            'no_constellation'  => true
                            )
                        );
                    ?>
                    
                </li>
                
                <?php if(plsh_gs('show_menu_new_items') == 'on') { ?>
                <li class="dropdown new-stories new">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true"><s><?php echo plsh_gs('menu_new_items_count'); ?></s><span><?php _e('staff', PLSH_THEME_DOMAIN); ?><br><?php _e('picks', PLSH_THEME_DOMAIN); ?></span></a>
                    <div class="dropdown-menu full-width">
                        <?php 
                            $catId = plsh_gs('menu_new_items_category');
                            $catName = '';
                            if(!empty($catId) && $catId != '')
                            {
                                $catObj = get_category($catId);
                                $catName = $catObj->slug;
                            }

                            $params = array(
                                'count' => plsh_gs('menu_new_items_count'),
                                'max' => 2,
                                'cat' => $catName,
                                'tag' => ''
                            );
                            the_widget('GoliathDropdownPostList', $params);
                        ?>
                    </div>
                </li>
                <?php } ?>
                
                <?php if(plsh_gs('show_header_search') == 'on') { ?>
                <li class="dropdown search">
                    
                    <form method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                        <input type="text" name="s" class="form-control" placeholder="<?php _e( 'search here', PLSH_THEME_DOMAIN ); ?>" />
                    </form>
                    
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-search"></i></a>
                </li>
                <?php } ?>
                
            </ul>
        </div>
    </div>
</div>
<!--END RESPONSIVE-->
<!-- Free Menu -->
<?php if (current_user_is("s2member_level1")){ ?>
<div class="navbar-wrapper">
    <div class="navbar navbar-default menu">
        <div class="container">
            <?php
                wp_nav_menu( array(
                    'menu_id'           => 'menu-primary',
                    'menu'              => 'premium-menu',
                    'theme_location'    => 'premium-menu',
                    'depth'             => 3,
                    'container'         => 'div',
                    'container_class'   => 'default-menu',
                    'container_id'      => '',
                    'menu_class'        => 'nav',
                    'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                    'walker'            => new wp_bootstrap_navwalker()
                    )
                );
            ?>
            <?php if ( class_exists( 'Constellation' ) ) : ?>
                <ul class="nav secondary-menu">
                    <?php if(plsh_gs('show_header_search') == 'on') { ?>
                    <li class="menu-item menu-item-type-custom menu-item-object-custom dropdown search">
                        <?php get_search_form(); ?>
                        <a href="#" data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle disabled" aria-haspopup="true"><i class="fa fa-search"></i></a>
                    </li>
                    <?php } ?>
                    
                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-spacer"></li>
                    <?php if(plsh_gs('show_menu_new_items') == 'on') { ?>
                    <li class="menu-item menu-item-type-custom menu-item-object-custom new-stories dropdown new">
                        <a href="#" data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle disabled" aria-haspopup="true"><s><?php echo plsh_gs('menu_new_items_count'); ?></s><span><?php _e('staff', PLSH_THEME_DOMAIN); ?><br><?php _e('picks', PLSH_THEME_DOMAIN); ?></span></a>
                        <div class="dropdown-menu full-width">
                            <?php 
                                $catId = plsh_gs('menu_new_items_category');
                                $catName = '';
                                if(!empty($catId) && $catId != '')
                                {
                                    $catObj = get_category($catId);
                                    $catName = $catObj->slug;
                                }
                                
                                $params = array(
                                    'count' => plsh_gs('menu_new_items_count'),
                                    'max' => 2,
                                    'cat' => $catName,
                                    'tag' => ''
                                );
                                the_widget('GoliathDropdownPostList', $params); ?>
                        </div>
                    </li>
                    <?php } ?>
                </ul>
            <?php endif; ?>
            <div style="position:relative; float:right; padding-right:9px; margin-top:-39px;">

            <?php if(is_user_logged_in()){ ?>
         <a class="btn btn-sm btn-primary" href="<?php echo wp_logout_url(); ?>" title="Logout">Logout</a>
    
<?php } else { ?>
         <a class="btn btn-sm btn-primary" href="/login/" rel="nofollow">Login</a>
<?php } ?>
</div><!--END BUTTONS-->
        </div>
    </div>
</div>
<!-- END FREE-->
<!-- Premium Menu -->
<?php } elseif (current_user_is("s2member_level2")){ ?>
<div class="navbar-wrapper">
    <div class="navbar navbar-default menu">
        <div class="container">
            <?php
                wp_nav_menu( array(
                    'menu_id'           => 'menu-primary',
                    'menu'              => 'premium-menu',
                    'theme_location'    => 'premium-menu',
                    'depth'             => 3,
                    'container'         => 'div',
                    'container_class'   => 'default-menu',
                    'container_id'      => '',
                    'menu_class'        => 'nav',
                    'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                    'walker'            => new wp_bootstrap_navwalker()
                    )
                );
            ?>
            <?php if ( class_exists( 'Constellation' ) ) : ?>
                <ul class="nav secondary-menu">
                    <?php if(plsh_gs('show_header_search') == 'on') { ?>
                    <li class="menu-item menu-item-type-custom menu-item-object-custom dropdown search">
                        <?php get_search_form(); ?>
                        <a href="#" data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle disabled" aria-haspopup="true"><i class="fa fa-search"></i></a>
                    </li>
                    <?php } ?>
                    
                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-spacer"></li>
                    <?php if(plsh_gs('show_menu_new_items') == 'on') { ?>
                    <li class="menu-item menu-item-type-custom menu-item-object-custom new-stories dropdown new">
                        <a href="#" data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle disabled" aria-haspopup="true"><s><?php echo plsh_gs('menu_new_items_count'); ?></s><span><?php _e('staff', PLSH_THEME_DOMAIN); ?><br><?php _e('picks', PLSH_THEME_DOMAIN); ?></span></a>
                        <div class="dropdown-menu full-width">
                            <?php 
                                $catId = plsh_gs('menu_new_items_category');
                                $catName = '';
                                if(!empty($catId) && $catId != '')
                                {
                                    $catObj = get_category($catId);
                                    $catName = $catObj->slug;
                                }
                                
                                $params = array(
                                    'count' => plsh_gs('menu_new_items_count'),
                                    'max' => 2,
                                    'cat' => $catName,
                                    'tag' => ''
                                );
                                the_widget('GoliathDropdownPostList', $params); ?>
                        </div>
                    </li>
                    <?php } ?>
                </ul>
            <?php endif; ?>
            <div style="position:relative; float:right; padding-right:9px; margin-top:-39px;">

            <?php if(is_user_logged_in()){ ?>
         <a class="btn btn-sm btn-primary" href="<?php echo wp_logout_url(); ?>" title="Logout">Logout</a>
    
<?php } else { ?>
         <a class="btn btn-sm btn-primary" href="/login/" rel="nofollow">Login</a>
<?php } ?>
</div><!--END BUTTONS-->
        </div>
    </div>
</div>
   
<?php }  else { ?>
<!--END PREMIUM MENU-->

<!--MAIN MENU-->
<div class="navbar-wrapper">
    <div class="navbar navbar-default menu">
        <div class="container">
            <?php
                wp_nav_menu( array(
                    'menu_id'           => 'menu-primary',
                    'menu'              => 'primary-menu',
                    'theme_location'    => 'primary-menu',
                    'depth'             => 3,
                    'container'         => 'div',
                    'container_class'   => 'default-menu',
                    'container_id'      => '',
                    'menu_class'        => 'nav',
                    'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                    'walker'            => new wp_bootstrap_navwalker()
                    )
                );
            ?>
            <?php if ( class_exists( 'Constellation' ) ) : ?>
                <ul class="nav secondary-menu">
                    <?php if(plsh_gs('show_header_search') == 'on') { ?>
                    <li class="menu-item menu-item-type-custom menu-item-object-custom dropdown search">
                        <?php get_search_form(); ?>
                        <a href="#" data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle disabled" aria-haspopup="true"><i class="fa fa-search"></i></a>
                    </li>
                    <?php } ?>
                    
                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-spacer"></li>
                    <?php if(plsh_gs('show_menu_new_items') == 'on') { ?>
                    <li class="menu-item menu-item-type-custom menu-item-object-custom new-stories dropdown new">
                        <a href="#" data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle disabled" aria-haspopup="true"><s><?php echo plsh_gs('menu_new_items_count'); ?></s><span><?php _e('staff', PLSH_THEME_DOMAIN); ?><br><?php _e('picks', PLSH_THEME_DOMAIN); ?></span></a>
                        <div class="dropdown-menu full-width">
                            <?php 
                                $catId = plsh_gs('menu_new_items_category');
                                $catName = '';
                                if(!empty($catId) && $catId != '')
                                {
                                    $catObj = get_category($catId);
                                    $catName = $catObj->slug;
                                }
                                
                                $params = array(
                                    'count' => plsh_gs('menu_new_items_count'),
                                    'max' => 2,
                                    'cat' => $catName,
                                    'tag' => ''
                                );
                                the_widget('GoliathDropdownPostList', $params); ?>
                        </div>
                    </li>
                    <?php } ?>
                </ul>
            <?php endif; ?>
            <div style="position:relative; float:right; padding-right:9px; margin-top:-39px;">

            <?php if(is_user_logged_in()){ ?>
         <a class="btn btn-sm btn-primary" href="<?php echo wp_logout_url(); ?>" title="Logout">Logout</a>
    
<?php } else { ?>
         <a class="btn btn-sm btn-primary" href="/login/" rel="nofollow">Login</a>
<?php } ?>
</div><!--END BUTTONS-->
        </div>
    </div>
</div>
<!--END MAIN-->
<?php } ?>