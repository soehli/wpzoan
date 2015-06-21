<?php
/*
The comments page for bootz
*/

// don't load it if you can't comment
if ( post_password_required() ) {
  return;
}

?>

<?php // You can start editing here. ?>

  <?php if ( have_comments() ) : ?>

    <h3 id="comments-title" class="h2"><?php comments_number( __( '<span>No</span> Comments', 'bootztheme' ), __( '<span>One</span> Comment', 'bootztheme' ), __( '<span>%</span> Comments', 'bootztheme' ) );?></h3>

    <section class="commentlist">
      <?php
        wp_list_comments( array(
          'style'             => 'div',
          'short_ping'        => true,
          'avatar_size'       => 40,
          'callback'          => 'bootz_comments',
          'type'              => 'all',
          'reply_text'        => 'Reply',
          'page'              => '',
          'per_page'          => '',
          'reverse_top_level' => null,
          'reverse_children'  => ''
        ) );
      ?>
    </section>

    <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
    	<nav class="navigation comment-navigation" role="navigation">
      	<div class="comment-nav-prev"><?php previous_comments_link( __( '&larr; Previous Comments', 'bootztheme' ) ); ?></div>
      	<div class="comment-nav-next"><?php next_comments_link( __( 'More Comments &rarr;', 'bootztheme' ) ); ?></div>
    	</nav>
    <?php endif; ?>

    <?php if ( ! comments_open() ) : ?>
    	<p class="no-comments"><?php _e( 'Comments are closed.' , 'bootztheme' ); ?></p>
    <?php endif; ?>

  <?php endif; ?>
  
  <?php 
   $comment_args = array( 'title_reply'=>'Comment:',

'fields' => apply_filters( 'comment_form_default_fields', array(

'author' => '<p class="comment-form-author">' . '<label for="author">' . __( 'Name' ) . '</label> ' . ( $req ? '<span>*</span>' : '' ) .

        '<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /></p>',   

    'email'  => '<p class="comment-form-email">' .

                '<label for="email">' . __( 'Email' ) . '</label> ' .

                ( $req ? '<span>*</span>' : '' ) .

                '<input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' />'.'</p>',

    'url'    => '' ) ),

    'comment_field' => '<p>' .

                '<label for="comment">' . __( 'Your comment :' ) . '</label>' .

                '<textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea>' .

                '</p>',

    'comment_notes_after' => '',

);

  
  
  comment_form('comment_args'); ?>

