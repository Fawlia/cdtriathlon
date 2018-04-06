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
		"supports" => array( "title", "custom-fields", 'excerpt' ),
	);

	register_post_type( "stage", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );

add_action( 'init', 'my_add_excerpts_to_pages' );
function my_add_excerpts_to_pages() {
     add_post_type_support( 'stage', 'excerpt' ); //change page with your post type slug.
}
// LIMITER LE RESUMER DES STAGES

function excerpt($limit) {
          $excerpt = explode(' ', get_the_excerpt(), $limit);
          if (count($excerpt)>=$limit) {
            array_pop($excerpt);
            $excerpt = implode(" ",$excerpt).'...';
          } else {
            $excerpt = implode(" ",$excerpt);
          } 
          $excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
          return $excerpt;
        }

        function content($limit) {
          $content = explode(' ', get_the_content(), $limit);
          if (count($content)>=$limit) {
            array_pop($content);
            $content = implode(" ",$content).'...';
          } else {
            $content = implode(" ",$content);
          } 
          $content = preg_replace('/\[.+\]/','', $content);
          $content = apply_filters('the_content', $content); 
          $content = str_replace(']]>', ']]&gt;', $content);
          return $content;
        }

// FORM 7 

function mod_contact7_form_content( $template, $prop ) {
  if ( 'form' == $prop ) {
    return implode( '', array(
      '<div class="row">',
        '<div class="col">',
          '[text* your-name placeholder"Name"]',
          '[email* your-email placeholder"Email"]',
          '[text* your-subject placeholder"Subject"]',
        '</div>',
        '<div class="col">',
          '[textarea* your-message placeholder"Message"]',
        '</div>',
      '</div>',
      '<div class="row">',
        '[submit class:btn "Send Mail"]',
      '</div>'
    ) );
  } else {
    return $template;
  } 
}
add_filter(
  ‘wpcf7_default_template’,
  ‘mod_contact7_form_content’,
  10,
  2
);

function mod_contact7_form_title( $template ) {
  $template->set_title( 'Contact us now' );
  return $template;
}

add_filter(
  'wpcf7_contact_form_default_pack',
  'mod_contact7_form_title'
);