<?php
//======================================================
//=================   Chargement des scripts   =========
//======================================================
define('LGMAC_VERSION', '1.0.1');

// Chargement dans le front-end
function ressources() {

	// Chargement des styles
	
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css');	
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css');
	wp_enqueue_style( 'owl-carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css');
	wp_enqueue_style('style', get_template_directory_uri() . '/style.css');

	// Chargement des scripts
	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery.js');
	wp_enqueue_script( 'owl-carousel-js', get_template_directory_uri() . '/assets/js/owl.carousel.min.js'); 
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js'); 		
	wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/app.js'); 
	

}// fin function lgmac_scripts

add_action('wp_enqueue_scripts', 'ressources');

// Navigation Menus
register_nav_menus(array(
'Top' => 'Navigation principale',
));

function wordpress_setup(){

	//support des vignettes image à la une
	add_theme_support('post-thumbnails');

	//enlève générateur de version wordpress
	remove_action('wp_head', 'wp_generator');


	//active la gestion des menus
	register_nav_menus(array('primary' => 'principal'));



}// fin function wordpress_setup

add_action('after_setup_theme', 'wordpress_setup');

function cptui_register_my_cpts() {

	/**
	 * Post Type: Mots du président.
	 */

	$labels = array(
		"name" => __( "Mots du président", "Machin" ),
		"singular_name" => __( "Mots du président", "Machin" ),
		"all_items" => __( "Tout les mots", "Machin" ),
		"add_new" => __( "Ajouter", "Machin" ),
		"add_new_item" => __( "Ajouter mots du président", "Machin" ),
		"edit_item" => __( "Voir les mots du présidents", "Machin" ),
		"new_item" => __( "Afficher", "Machin" ),
		"view_item" => __( "Afficher les mots du président", "Machin" ),
	);

	$args = array(
		"label" => __( "Mots du président", "Machin" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => false,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "president", "with_front" => true ),
		"query_var" => true,
		"menu_icon" => "dashicons-welcome-write-blog",
		"supports" => array( "title", "custom-fields" ),
	);

	register_post_type( "president", $args );

	/**
	 * Post Type: club.
	 */

	$labels = array(
		"name" => __( "club", "Machin" ),
		"singular_name" => __( "club", "Machin" ),
		"all_items" => __( "Tout les clubs", "Machin" ),
	);

	$args = array(
		"label" => __( "club", "Machin" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => false,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "club", "with_front" => true ),
		"query_var" => true,
		"menu_icon" => "dashicons-admin-site",
		"supports" => array( "title" ),
	);

	register_post_type( "club", $args );

	/**
	 * Post Type: Activités infos.
	 */

	$labels = array(
		"name" => __( "Activités infos", "Machin" ),
		"singular_name" => __( "Activités infos", "Machin" ),
		"all_items" => __( "Toutes les disciplines", "Machin" ),
		"add_new" => __( "Ajouter discipline", "Machin" ),
	);

	$args = array(
		"label" => __( "Activités infos", "Machin" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => false,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "activite", "with_front" => true ),
		"query_var" => true,
		"menu_icon" => "dashicons-universal-access",
		"supports" => array( "title", "editor", "thumbnail" ),
	);

	register_post_type( "activite", $args );

	/**
	 * Post Type: Classement.
	 */

	$labels = array(
		"name" => __( "Classement", "Machin" ),
		"singular_name" => __( "Classement", "Machin" ),
		"all_items" => __( "Classement general", "Machin" ),
		"add_new" => __( "Ajouter une personne", "Machin" ),
	);

	$args = array(
		"label" => __( "Classement", "Machin" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => false,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "classement", "with_front" => true ),
		"query_var" => true,
		"menu_icon" => "dashicons-admin-users",
		"supports" => array( "title", "custom-fields" ),
	);

	register_post_type( "classement", $args );

	/**
	 * Post Type: partenaire.
	 */

	$labels = array(
		"name" => __( "partenaire", "Machin" ),
		"singular_name" => __( "partenaire", "Machin" ),
		"all_items" => __( "Tout les partenaires", "Machin" ),
		"add_new" => __( "Ajouter un partenaire", "Machin" ),
	);

	$args = array(
		"label" => __( "partenaire", "Machin" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => false,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "partenaire", "with_front" => true ),
		"query_var" => true,
		"menu_icon" => "dashicons-megaphone",
		"supports" => array( "title", "custom-fields" ),
	);

	register_post_type( "partenaire", $args );

	/**
	 * Post Type: Stage.
	 */

	$labels = array(
		"name" => __( "Stage", "Machin" ),
		"singular_name" => __( "Stage", "Machin" ),
		"all_items" => __( "Tout les stages", "Machin" ),
		"add_new" => __( "Ajouter stage", "Machin" ),
	);

	$args = array(
		"label" => __( "Stage", "Machin" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => false,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "stage", "with_front" => true ),
		"query_var" => true,
		"menu_icon" => "dashicons-exerpt-view",
		"supports" => array( "title", "custom-fields" ),
	);

	register_post_type( "stage", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );

