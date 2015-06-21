<style>
.single_job_listing .application .application_button {
	text-align: center;
  font-size: 1.1em;
  line-height: 1em;
  display: inline-block;
  margin: 10px .5em 0 0;
  padding: 10px;
 color:#fff;
  background-color:#087AB1;
  border:0!important;
  width:120px;
  }
  
  .single_job_listing .company {border:0!important; background:#EFEFEF; padding:8px; min-height:4em;}
</style>

<?php if ( $apply = get_the_job_application_method() ) :
	wp_enqueue_script( 'wp-job-manager-job-application' );
	?>
	<div class="job_application application">
		<?php do_action( 'job_application_start', $apply ); ?>
		
		<input type="button" class="application_button button" value="<?php _e( 'Apply for job', 'wp-job-manager' ); ?>" />
		
		<div class="application_details">
			<?php
				/**
				 * job_manager_application_details_email or job_manager_application_details_url hook
				 */
				do_action( 'job_manager_application_details_' . $apply->type, $apply );
			?>
		</div>
		<?php do_action( 'job_application_end', $apply ); ?>
	</div>
<?php endif; ?>
