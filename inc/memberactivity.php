<?php do_action( 'bp_before_directory_activity' ); ?>

<div id="buddypress">

<?php do_action( 'bp_before_directory_activity_content' ); ?>

<?php if ( is_user_logged_in() ) : ?>

<?php bp_get_template_part( 'activity/post-form-member' ); ?>

<?php endif; ?>

<?php do_action( 'template_notices' ); ?>

<!--        <div id="subnav" role="navigation">
<ul>
<li><a href="<?php //bp_sitewide_activity_feed_link(); ?>" title="<?php //_e( 'RSS Feed', 'buddypress' ); ?>"><?php //_e( 'RSS', 'buddypress' ); ?></a></li>

<?php //do_action( 'bp_activity_syndication_options' ); ?>

</ul>
</div> .item-list-tabs -->





</div>

