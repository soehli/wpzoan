<?php

function modify_contact_methods($profile_fields) {

	// Add new fields
	$profile_fields['position'] = 'Position';
	$profile_fields['twitter'] = 'Twitter (without @)';
	$profile_fields['facebook'] = 'Facebook';
	$profile_fields['youtube'] = 'YouTube';
	$profile_fields['pinterest'] = 'Pinterest';
	$profile_fields['gplus'] = 'Google+';
	
	// Remove old fields
	unset($profile_fields['aim']);
     unset($profile_fields['googleplus']);
	return $profile_fields;

}
add_filter('user_contactmethods', 'modify_contact_methods');
?>