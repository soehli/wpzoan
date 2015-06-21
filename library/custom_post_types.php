<?php

function register_wpad_autolist() {
 
    $labels = array(
        'name' => _x( 'Auto List', 'auto_list' ),
        'singular_name' => _x( 'Auto List', 'auto_list' ),
        'add_new' => _x( 'Add New', 'auto_list' ),
        'add_new_item' => _x( 'Add New Vehicle', 'auto_list' ),
        'edit_item' => _x( 'Edit New Vehicle', 'auto_list' ),
        'new_item' => _x( 'New Vehicle', 'auto_list' ),
        'view_item' => _x( 'View Vehicle', 'auto_list' ),
        'search_items' => _x( 'Search Vehicles', 'auto_list' ),
        'not_found' => _x( 'No vehicle found', 'auto_list' ),
        'not_found_in_trash' => _x( 'No vehicle found in Trash', 'auto_list' ),
        'parent_item_colon' => _x( 'Parent Auto List:', 'auto_list' ),
        'menu_name' => _x( 'Auto Directory', 'auto_list' ),
    );
 
    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
        'description' => 'Auto List by Dealer',
        'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'revisions', 'page-attributes' ),
        'taxonomies' => array( 'autos'  ),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-format-auto',
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
       'rewrite' => array( 'slug' => 'autos' ),
        'capability_type' => 'post'
    );
 
    register_post_type( 'auto_list', $args );
}
 
add_action( 'init', 'register_wpad_autolist' );

function auto_taxonomy() {
    register_taxonomy(
        'types',
        'auto_list',
        array(
            'hierarchical' => true,
            'label' => 'New or Used',
            'query_var' => true,
            'rewrite' => array(
                'slug' => 'catalog',
             'with_front' => false
            )
      )
    );
}
add_action( 'init', 'auto_taxonomy');

the_terms( $post->ID, 'auto_list', 'New Vehicle', 'Pre-Owned Vehicle' );

/*ADD META CONTENT*/
add_action( 'add_meta_boxes', 'add_vehicle_metabox' );

function add_vehicle_metabox() {
	add_meta_box('wpad_vehicle_details', 'Vehicle Details', 'wpad_vehicle_details', 'auto_list', 'normal', 'high');
	 add_meta_box('wpad_seller_details', 'Seller', 'wpad_seller_details', 'auto_list', 'normal', 'default');
	  add_meta_box('wpad_dealer_details', 'Dealership', 'wpad_dealer_details', 'dealer', 'normal', 'high');
	  
}



function wpad_vehicle_details() {
	global $post;
	
	// Noncename needed to verify where the data originated
	echo '<input type="hidden" name="auto_list_meta_noncename" id="auto_list_meta_noncename" value="' . 
	wp_create_nonce( plugin_basename(__FILE__) ) . '" />';
	
	// Get the location data if its already been entered
	
    $image_id = get_post_meta( $post->ID, '_image_id', true );
    $image_src = wp_get_attachment_url( $image_id );
	$year = get_post_meta($post->ID, '_year', true);
	$make = get_post_meta($post->ID, '_make', true);
	$model = get_post_meta($post->ID, '_model', true);
	$miles = get_post_meta($post->ID, '_miles', true);
	$extcolor = get_post_meta($post->ID, '_extcolor', true);
	$intcolor = get_post_meta($post->ID, '_intcolor', true);
	$bodystyle = get_post_meta($post->ID, '_bodystyle', true);
	$stock = get_post_meta($post->ID, '_stock', true);
	$fuel = get_post_meta($post->ID, '_fuel', true);
	$vin = get_post_meta($post->ID, '_vin', true);
	$transmission = get_post_meta($post->ID, '_transmission', true);
	$engine = get_post_meta($post->ID, '_engine', true);
	$drivetrain = get_post_meta($post->ID, '_drivetrain', true);
	$doors = get_post_meta($post->ID, '_doors', true);
	$notes = get_post_meta($post->ID, '_notes', true);
	$features = get_post_meta($post->ID, '_features', true);
	$price = get_post_meta($post->ID, '_price', true);
	$mpg_hwy = get_post_meta($post->ID, '_mpg_hwy', true);
	$mpg_city = get_post_meta($post->ID, '_mpg_city', true);
	?>
    <div >
	<table class="widefat" >
    <tr>
    <td style="width:25%;">
    <label>Year</label><br/>
	<input type="text" name="_year" value="<?php echo $year; ?>"  />
    </td>
    <td style="width:25%;">
    <label>Make</label><br/>
	<input type="text" name="_make" value="<?php echo $make; ?>" />
    </td>
     <td style="width:25%;">
    <label>Model</label><br/>
	<input type="text" name="_model" value="<?php echo $model; ?>" />
    </td>
     <td style="width:25%;">
    <label>Price</label><br/>
	<input type="text" name="_price" value="<?php echo $price; ?>" />
    </td>
    </tr>
    
    <tr>
    <td style="width:25%;">
    <label>Exterior Color</label><br/>
	<input type="text" name="_extcolor" value="<?php echo $extcolor; ?>"  />
    </td>
    <td style="width:25%;">
    <label>Interior Color</label><br/>
	<input type="text" name="_intcolor" value="<?php echo $intcolor; ?>" />
    </td>
     <td style="width:25%;">
    <label>Body Style</label><br/>
	<input type="text" name="_bodystyle" value="<?php echo $bodystyle; ?>" />
    </td>
     <td style="width:25%;">
    <label>Miles</label><br/>
	<input type="text" name="_miles" value="<?php echo $miles; ?>" />
    </td>
    </tr>
    
    <tr>
    <td style="width:25%;">
    <label>Fuel</label><br/>
	<input type="text" name="_fuel" value="<?php echo $fuel; ?>"  />
    </td>
    <td style="width:25%;">
    <label>VIN</label><br/>
	<input type="text" name="_vin" value="<?php echo $vin; ?>" />
    </td>
     <td style="width:25%;">
    <label>Transmission</label><br/>
	<input type="text" name="_transmission" value="<?php echo $transmission; ?>" />
    </td>
     <td style="width:25%;">
    <label>Doors</label><br/>
	<input type="text" name="_doors" value="<?php echo $doors; ?>" />
    </td>
    </tr>
    <tr>
    <td style="width:25%;">
    <label>Engine</label><br/>
	<input type="text" name="_engine" value="<?php echo $engine; ?>"  />
    </td>
    <td style="width:25%;">
    <label>Drive Train</label><br/>
	<input type="text" name="_drivetrain" value="<?php echo $drivetrain; ?>" />
    </td>
     <td style="width:25%;">
     <label>Stock</label><br/>
	<input type="text" name="_stock" value="<?php echo $stock; ?>" />
    </td>
     <td style="width:25%;">
          <label>MPG Highway</label><br/>
	<input type="text" name="_mpg_hwy" value="<?php echo $mpg_hwy; ?>" />
    </td>
    </tr>
    <tr>
     <td colspan="4" style="width:25%;">
          <label>MPG City</label><br/>
	<input type="text" name="_mpg_city" value="<?php echo $mpg_city; ?>" />
    </td>
        
    </tr>
    </table>
    <table class="widefat">
    <tr>
     <td style="width:100%;">
    <label>Seller Notes</label><br/>
	
    <textarea name="_notes" placeholder="" cols="50" rows="5"><?php echo $notes; ?></textarea>
     </td>
     <td style="width:100%;">
    <label>Features</label><br/>
	
    <textarea name="_features" placeholder="" cols="50" rows="5"><?php echo $features; ?></textarea>
     </td>
      </tr>
     </table>
     </div>
     <?php
}


function wpad_seller_details() {
	global $post;
	
	// Noncename needed to verify where the data originated
	echo '<input type="hidden" name="auto_list_meta_noncename" id="auto_list_meta_noncename" value="' . 
	wp_create_nonce( plugin_basename(__FILE__) ) . '" />';
	
	// Get the location data if its already been entered
	
   
	$seller = get_post_meta($post->ID, '_seller', true);
	$address = get_post_meta($post->ID, '_address', true);
	$city = get_post_meta($post->ID, '_city', true);
	$state = get_post_meta($post->ID, '_state', true);
	$zip = get_post_meta($post->ID, '_zip', true);
	$phone = get_post_meta($post->ID, '_phone', true);
	$website = get_post_meta($post->ID, '_website', true);
	$email = get_post_meta($post->ID, '_email', true);
	$type = get_post_meta($post->ID, '_type', true);
	
	?>
    <div >
	<table class="widefat" >
    <tr>
    <td colspan="2" style="width:25%;">
    <label>Seller Name (If Dealership, Dealer Name</label><br/>
	<input type="text" name="_seller" value="<?php echo $seller; ?>"  />
    </td>
    </tr>
    <tr>
    <td colspan="3" style="width:25%;">
    <label>address</label><br/>
	<input type="text" name="_address" value="<?php echo $address; ?>" />
    </td>
    </tr>
    <tr>
     <td style="width:25%;">
    <label>City</label><br/>
	<input type="text" name="_city" value="<?php echo $city; ?>" />
    </td>
     <td style="width:25%;">
    <label>State</label><br/>
	<input type="text" name="_state" value="<?php echo $state; ?>" />
    </td>
      <td style="width:25%;">
    <label>Zip</label><br/>
	<input type="text" name="_zip" value="<?php echo $zip; ?>" />
    </td>
     <td style="width:25%;">&nbsp;
   
    </td>
    </tr>
    
    <tr>
    <td style="width:25%;">
    <label>Phone</label><br/>
	<input type="text" name="_phone" value="<?php echo $phone; ?>"  />
    </td>
    <td style="width:25%;">
    <label>Email</label><br/>
	<input type="text" name="_email" value="<?php echo $email; ?>" />
    </td>
     <td style="width:25%;">
    <label>Website</label><br/>
	<input type="text" name="_website" value="<?php echo $website; ?>" />
    </td>
     <td style="width:25%;">
    <label>Type (Dealer or Private)</label><br/>
	<input type="text" name="_type" value="<?php echo $type; ?>" />
    </td>
    </tr>
   </table>
     </div>
     <?php
}

// Save the Metabox Data

function wpad_save_vehicle_meta($post_id, $post) {
	
	// verify this came from the our screen and with proper authorization,
	// because save_post can be triggered at other times
	if ( !wp_verify_nonce( $_POST['auto_list_meta_noncename'], plugin_basename(__FILE__) )) {
	return $post->ID;
	}

	// Is the user allowed to edit the post or page?
	if ( !current_user_can( 'edit_post', $post->ID ))
		return $post->ID;

	// OK, we're authenticated: we need to find and save the data
	// We'll put it into an array to make it easier to loop though.
	
	$auto_list_meta['_year'] = $_POST['_year'];
	$auto_list_meta['_make'] = $_POST['_make'];
	$auto_list_meta['_model'] = $_POST['_model'];
	$auto_list_meta['_miles'] = $_POST['_miles'];
	$auto_list_meta['_extcolor'] = $_POST['_extcolor'];
	$auto_list_meta['_intcolor'] = $_POST['_intcolor'];
	$auto_list_meta['_bodystyle'] = $_POST['_bodystyle'];
	$auto_list_meta['_stock'] = $_POST['_stock'];
	$auto_list_meta['_fuel'] = $_POST['_fuel'];
	$auto_list_meta['_vin'] = $_POST['_vin'];
	$auto_list_meta['_transmission'] = $_POST['_transmission'];
	$auto_list_meta['_doors'] = $_POST['_doors'];
	$auto_list_meta['_notes'] = $_POST['_notes'];
	$auto_list_meta['_features'] = $_POST['_features'];
	$auto_list_meta['_engine'] = $_POST['_engine'];
	$auto_list_meta['_drivetrain'] = $_POST['_drivetrain'];
	$auto_list_meta['_price'] = $_POST['_price'];
	$auto_list_meta['_mpg_hwy'] = $_POST['_mpg_hwy'];
	$auto_list_meta['_mpg_city'] = $_POST['_mpg_city'];
	
	//Seller Details
	$auto_list_meta['_seller'] = $_POST['_seller'];
	$auto_list_meta['_address'] = $_POST['_address'];
	$auto_list_meta['_city'] = $_POST['_city'];
	$auto_list_meta['_state'] = $_POST['_state'];
	$auto_list_meta['_zip'] = $_POST['_zip'];
	$auto_list_meta['_phone'] = $_POST['_phone'];
	$auto_list_meta['_email'] = $_POST['_email'];
	$auto_list_meta['_website'] = $_POST['_website'];
	$auto_list_meta['_type'] = $_POST['_type'];
	
	// Add values of $events_meta as custom fields
	
	foreach ($auto_list_meta as $key => $value) { // Cycle through the $events_meta array!
		if( $post->post_type == 'revision' ) return; // Don't store custom data twice
		$value = implode(',', (array)$value); // If $value is an array, make it a CSV (unlikely)
		if(get_post_meta($post->ID, $key, FALSE)) { // If the custom field already has a value
			update_post_meta($post->ID, $key, $value);
		} else { // If the custom field doesn't have a value
			add_post_meta($post->ID, $key, $value);
		}
		if(!$value) delete_post_meta($post->ID, $key); // Delete if blank
	}

}

add_action('save_post', 'wpad_save_vehicle_meta', 1, 2); // save the custom fields



/*REMOVE POST EDITOR*/
$post_type = array ('auto_list' , 'dealer' );
function remove_editor() {
  remove_post_type_support('auto_list', 'editor');
}
add_action('admin_init', 'remove_editor');

function dealer_remove_editor() {
  remove_post_type_support('dealer', 'editor');
}
add_action('admin_init', 'dealer_remove_editor');

/*REMOVE META BOXES*/
function remove_page_fields() {
 remove_meta_box( 'tagsdiv-post_tag' , $post_type , 'side' ); //removes tags
 remove_meta_box( 'pageparentdiv' , $post_type , 'side' ); //remove status
 remove_meta_box( 'categorydiv' , $post_type , 'side' ); //remove category
 remove_meta_box( 'mymetabox_revslider_0' , $post_type , '');
  //remove_meta_box('typesdiv', 'auto_list', 'side');

}
add_action( 'admin_menu' , 'remove_page_fields' );


//Dealer Custom Post Type

function register_wpad_dealer() {
 
    $labels = array(
        'name' => _x( 'Dealership', 'dealer' ),
        'singular_name' => _x( 'Dealership', 'dealer' ),
        'add_new' => _x( 'Add New', 'dealer' ),
        'add_new_item' => _x( 'Add New Dealership', 'dealer' ),
        'edit_item' => _x( 'Edit Dealership', 'dealer' ),
        'new_item' => _x( 'New Dealership', 'dealer' ),
        'view_item' => _x( 'View Dealership', 'dealer' ),
        'search_items' => _x( 'Search Dealerships', 'dealer' ),
        'not_found' => _x( 'No Dealership found', 'dealer' ),
        'not_found_in_trash' => _x( 'No Dealership found in Trash', 'dealer' ),
        'parent_item_colon' => _x( 'Parent Dealership List:', 'dealer' ),
        'menu_name' => _x( 'Dealerships', 'dealer' ),
    );
 
    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
        'description' => 'Dealerships',
        'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'revisions', 'page-attributes' ),
        'taxonomies' => array( 'dealerships'  ),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-format-auto',
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
       'rewrite' => array( 'slug' => 'dealership' ),
        'capability_type' => 'post'
    );
 
    register_post_type( 'dealer', $args );
}
 
add_action( 'init', 'register_wpad_dealer' );

//Meta Box Dealership
function wpad_dealer_details() {
	global $post;
	
	// Noncename needed to verify where the data originated
	echo '<input type="hidden" name="dealer_meta_noncename" id="dealer_meta_noncename" value="' . 
	wp_create_nonce( plugin_basename(__FILE__) ) . '" />';
	
	// Get the location data if its already been entered
	
   
	$dealer = get_post_meta($post->ID, 'dealer', true);
	$dealer_address = get_post_meta($post->ID, 'dealer_address', true);
	$dealer_city = get_post_meta($post->ID, 'dealer_city', true);
	$dealer_state = get_post_meta($post->ID, 'dealer_state', true);
	$dealer_zip = get_post_meta($post->ID, 'dealer_zip', true);
	$dealer_phone = get_post_meta($post->ID, 'dealer_phone', true);
	$dealer_website = get_post_meta($post->ID, 'dealer_website', true);
	$dealer_email = get_post_meta($post->ID, 'dealer_email', true);

	
	?>
    <div >
	<table class="widefat" >
    <tr>
    <td colspan="2" style="width:25%;">
    <label>Seller Name (If Dealership, Dealer Name</label><br/>
	<input type="text" name="dealer" value="<?php echo $dealer; ?>"  />
    </td>
    </tr>
    <tr>
    <td colspan="3" style="width:25%;">
    <label>Address</label><br/>
	<input type="text" name="dealer_address" value="<?php echo $dealer_address; ?>" />
    </td>
    </tr>
    <tr>
     <td style="width:25%;">
    <label>City</label><br/>
	<input type="text" name="dealer_city" value="<?php echo $dealer_city; ?>" />
    </td>
     <td style="width:25%;">
    <label>State</label><br/>
	<input type="text" name="dealer_state" value="<?php echo $dealer_state; ?>" />
    </td>
      <td style="width:25%;">
    <label>Zip</label><br/>
	<input type="text" name="dealer_zip" value="<?php echo $dealer_zip; ?>" />
    </td>
     <td style="width:25%;">&nbsp;
   
    </td>
    </tr>
    
    <tr>
    <td style="width:25%;">
    <label>Phone</label><br/>
	<input type="text" name="dealer_phone" value="<?php echo $dealer_phone; ?>"  />
    </td>
    <td style="width:25%;">
    <label>Email</label><br/>
	<input type="text" name="dealer_email" value="<?php echo $dealer_email; ?>" />
    </td>
     <td style="width:25%;">
    <label>Website</label><br/>
	<input type="text" name="dealer_website" value="<?php echo $dealer_website; ?>" />
    </td>
     <td style="width:25%;">&nbsp;
    
    </td>
    </tr>
   </table>
     </div>
     <?php
}

function wpad_save_dealer_meta($post_id, $post) {
	
	// verify this came from the our screen and with proper authorization,
	// because save_post can be triggered at other times
	if ( !wp_verify_nonce( $_POST['dealer_meta_noncename'], plugin_basename(__FILE__) )) {
	return $post->ID;
	}

	// Is the user allowed to edit the post or page?
	if ( !current_user_can( 'edit_post', $post->ID ))
		return $post->ID;

	// OK, we're authenticated: we need to find and save the data
	// We'll put it into an array to make it easier to loop though.
	//Seller Details
	$dealer_meta['dealer'] = $_POST['dealer'];
	$dealer_meta['dealer_address'] = $_POST['dealer_address'];
	$dealer_meta['dealer_city'] = $_POST['dealer_city'];
	$dealer_meta['dealer_state'] = $_POST['dealer_state'];
	$dealer_meta['dealer_zip'] = $_POST['dealer_zip'];
	$dealer_meta['dealer_phone'] = $_POST['dealer_phone'];
	$dealer_meta['dealer_email'] = $_POST['dealer_email'];
	$dealer_meta['dealer_website'] = $_POST['dealer_website'];
	
	
	// Add values of $events_meta as custom fields
	
	foreach ($dealer_meta as $key => $value) { // Cycle through the $events_meta array!
		if( $post->post_type == 'revision' ) return; // Don't store custom data twice
		$value = implode(',', (array)$value); // If $value is an array, make it a CSV (unlikely)
		if(get_post_meta($post->ID, $key, FALSE)) { // If the custom field already has a value
			update_post_meta($post->ID, $key, $value);
		} else { // If the custom field doesn't have a value
			add_post_meta($post->ID, $key, $value);
		}
		if(!$value) delete_post_meta($post->ID, $key); // Delete if blank
	}

}

add_action('save_post', 'wpad_save_dealer_meta', 1, 2); // save the custom fields
?>