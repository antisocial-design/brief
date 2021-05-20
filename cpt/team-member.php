<?php

/*
* CPT - Team Members
*/

function custom_post_type_team_member() {

	// Backoffice UI
	$labels = array(
		'name'                => _x( 'Team Members', 'Post Type General Name' ),
		'singular_name'       => _x( 'Team Member', 'Post Type Singular Name' ),
		'menu_name'           => __( 'Team Members' ),
		'parent_item_colon'   => __( 'Parent Team Member' ),
		'all_items'           => __( 'All Team Members' ),
		'view_item'           => __( 'View Team Members' ),
		'add_new_item'        => __( 'Add New Team Member' ),
		'add_new'             => __( 'Add New Member' ),
		'edit_item'           => __( 'Edit Member' ),
		'update_item'         => __( 'Update Team Member' ),
		'search_items'        => __( 'Search Team Member' ),
		'not_found'           => __( 'Team Member not found' ),
		'not_found_in_trash'  => __( 'Not found in Trash' ),
	);

	// Arguments
	$args = array(
		'label'               => __( 'member' ),
		'description'         => __( 'List of Team Members' ),
		'labels'              => $labels,
		'supports'            => array( 'title' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 8,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
		'show_in_rest' => true,

	);

	register_post_type( 'member', $args );

}

add_action( 'init', 'custom_post_type_team_member', 0 );


/*
* Disable Gutenberg on CPT
*/

add_filter('use_block_editor_for_post_type', 'prefix_disable_gutenberg', 10, 2);
function prefix_disable_gutenberg($current_status, $post_type)
{

	if ($post_type === 'member') return false;
	return $current_status;
}

/*
* UI Tweaks
*/

add_filter('enter_title_here', 'my_title_place_holder' , 20 , 2 );
function my_title_place_holder($title , $post){

	if( $post->post_type == 'member' ){
		$my_title = "Name";
		return $my_title;
	}

	return $title;

}

?>