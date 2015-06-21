

    <!-- About author -->

    <div class="about-author" id="about-author" style="padding:12px; margin:15px 0 15px 12px; padding:0 4px 4px 4px; border-bottom:#ccc 1px solid; border-top:#ccc 1px solid">

        <div class="h3">

            <a href="#" class="active" style="color:#333;"><?php _e('About author', wpzoan); ?></a>

        </div>

          <div class="row">

        <div class="about" >

            <div class="col-xs-3"> 

            <?php echo get_avatar( get_the_author_meta('ID'), 117); ?> 

           

          </div>  

          <div class="col-xs-9">

            <h4>

                <?php the_author(); ?>

                <?php 

                    $position = get_the_author_meta( 'position' );

                    if($position)

                    {

                        echo '<span>' . $position  . '</span>';

                    }

                ?>

            </h4>

            <?php

                $description = get_the_author_meta( 'description' );

                if($description)

                {

                    echo '<p>' . $description . '</p>';

                }

            ?>

            <div class="social" style="font-size:24px;">

                <?php

                    $twitter = get_the_author_meta( 'twitter' );

                    $facebook = get_the_author_meta( 'facebook' );

                    $youtube = get_the_author_meta( 'youtube' );

                    $gplus = get_the_author_meta( 'gplus' );

                    $pinterest = get_the_author_meta( 'pinterest' );



                    if($twitter) { echo '<a href="' . esc_url($twitter) .'"><i class="fa fa-twitter-square"></i></a>'; }

                    if($facebook) { echo '<a href="' . esc_url($facebook) .'"><i class="fa fa-facebook-square"></i></a>'; }

                    if($youtube) { echo '<a href="' . esc_url($youtube) .'"><i class="fa fa-youtube-square"></i></a>'; }

                    if($gplus) { echo '<a rel="author" href="' . esc_url($gplus) .'?rel=author"><i class="fa fa-google-plus-square"></i></a>'; }

                    if($pinterest) { echo '<a href="' . esc_url($pinterest) .'"><i class="fa fa-pinterest-square"></i></a>'; }  

                ?>

                

               </div> 

                

               </div> 

            </div>

        </div>

    </div>

    

