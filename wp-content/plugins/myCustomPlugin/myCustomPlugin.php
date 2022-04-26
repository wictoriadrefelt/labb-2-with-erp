<?php 

/*

Plugin Name: bananaSeeker
Author: Wictoia Drefelt 
Description: Changes all our titles in to 'banana', unless banana already exists in the original title. 


*/


if ( ! defined( 'ABSPATH')) {
    die; 
    
}


add_filter( 'the_title', 'change_title_if_no_bananas' );
function change_title_if_no_bananas( $title ) {
	// If bananas exists, do nothing at all
	if( strpos( $title, 'bananas' ) !== false ) {
		return $title;
	}

	return 'banana'; 
}
?> 