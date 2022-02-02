<?php

namespace App;

/**
 * Neighborhoods Added
 */
add_action( 'init', function() {
	register_extended_post_type( 'neighborhood' , [
        'show_in_rest' => true,
    ], [

		# Override the base names used for labels:
		'singular' => 'Neighborhood',
		'plural'   => 'Neighborhoods',
		'slug'     => 'neighborhood',

	]);
} );

 /**
  * Businesses Added
  */
add_action( 'init', function() {
	register_extended_post_type( 'home' , [
        'show_in_rest' => true,
        'taxonomies' => array('category'),
		'menu_icon' => 'dashicons-admin-home',

    ], [

		# Override the base names used for labels:
		'singular' => 'Home',
		'plural'   => 'Homes',
		'slug'     => 'home',
	]);
	register_extended_post_type( 'realtor' , [
        'show_in_rest' => true,
		'menu_icon' => 'dashicons-admin-users',
        // 'taxonomies' => array('category'),
    ], [

		# Override the base names used for labels:
		'singular' => 'Realtor',
		'plural'   => 'Realtors',
		'slug'     => 'realtor',
	]);
} );

// add_action( 'init', function() {
// 	register_extended_taxonomy( 'category', ['home'],[

// # Override the base names used for labels:
//     'singular_name' => 'Category',
//     'name'   => 'Categories',
//     'slug'     => 'category',


// 	] );
// } );