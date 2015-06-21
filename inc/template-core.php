<style>
.masonry {
    margin: 1.5em 0;
    padding: 0;
    -moz-column-gap: 1em;
    -webkit-column-gap: 1em;
    column-gap: 1em;
    font-size: .85em;
	}     


.item {
    display: inline-block;
   
    /*padding: 1em;*/
    margin: 0 0 1.5em;
    width: 100%;
    box-sizing: border-box;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
	background:#F3F3F3; border:1px solid #ccc; 
    /*box-shadow: 2px 2px 4px 0 #ccc;*/
}

.item:hover{  
    display: inline-block;
   
    /*padding: 1em;*/
    margin: 0 0 1.5em;
    width: 100%;
    box-sizing: border-box;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
	background: #B0E3F9;  ; border:1px solid #ccc; 
    box-shadow: 2px 2px 4px 0 #ccc;
	
}

.item img { margin:0; clear:both;



}


.item img:hover {
	
	
}

@media only screen and (min-width: 400px) {
    .masonry {
        -moz-column-count: 1;
        -webkit-column-count: 1;
        column-count: 1;
    }
}

@media only screen and (min-width: 700px) {
    .masonry {
        -moz-column-count: 2;
        -webkit-column-count: 2;
        column-count: 2;
    }
}

@media only screen and (min-width: 900px) {
    .masonry {
        -moz-column-count: 2;
        -webkit-column-count: 2;
        column-count: 2;
    }
}

@media only screen and (min-width: 1100px) {
    .masonry {
        -moz-column-count: 3;
        -webkit-column-count: 3;
        column-count: 3;
    }
}

@media only screen and (min-width: 1280px) {
    
}




</style>

<h1 class="h2 entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
<div class="row">
  <div class="col-xs-12">

                               


								<div class="masonry">
                                 <?php query_posts('category_name=core&showposts=10' );?>

								 <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                                 
   <div class="item">
 

                                     
   <div class="home-image" ><a href="<?php the_permalink() ?>"  title="<?php the_title_attribute(); ?>">
			  <?php 
                                        if ( has_post_thumbnail() ) {
                                                the_post_thumbnail('home-image');
                                            }?> 
                                            </a> </div>
   <h4 style="padding:0 5px 0 5px;"><a style="color:#333; text-align: left;" href="<?php the_permalink();?>"><?php the_title(); ?></a></h4>
   <div style="padding:0 5px 0 5px;">   <?php the_excerpt (); ?> </div> 
   
   
   </div>
   <?php endwhile; endif; ?>

                                <?php wp_reset_query(); ?>
  
   
 
 
   
</div>



								</div>
                               </div> 
