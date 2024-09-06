<?php 
    // Ajout du support de Thumbnail
    add_theme_support('post-thumbnails');

    // Creation d'un menu
    register_nav_menu('menu_principale', 'Menu principale');

    // Ajout du CPT Recette
    function create_cpt_recipe() {

    	$labels = array(
    		'name'                  => _x( 'Recettes', 'Post Type General Name', 'text_domain' ),
    		'singular_name'         => _x( 'Recette', 'Post Type Singular Name', 'text_domain' ),
    		'menu_name'             => __( 'Recette', 'text_domain' ),
    		'name_admin_bar'        => __( 'Recettes', 'text_domain' ),
    		'archives'              => __( 'Item Archives', 'text_domain' ),
    		'attributes'            => __( 'Item Attributes', 'text_domain' ),
    		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
    		'all_items'             => __( 'Tous les recettes', 'text_domain' ),
    		'add_new_item'          => __( 'Ajouter une recette', 'text_domain' ),
    		'add_new'               => __( 'Ajouter une recette', 'text_domain' ),
    		'new_item'              => __( 'Nouvelle recette', 'text_domain' ),
    		'edit_item'             => __( 'Modifier la recette', 'text_domain' ),
    		'update_item'           => __( 'Update Item', 'text_domain' ),
    		'view_item'             => __( 'View Item', 'text_domain' ),
    		'view_items'            => __( 'View Items', 'text_domain' ),
    		'search_items'          => __( 'Search Item', 'text_domain' ),
    		'not_found'             => __( 'Not found', 'text_domain' ),
    		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
    		'featured_image'        => __( 'Featured Image', 'text_domain' ),
    		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
    		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
    		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
    		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
    		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
    		'items_list'            => __( 'Items list', 'text_domain' ),
    		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
    		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
    	);
    	$args = array(
    		'label'                 => __( 'Recette', 'text_domain' ),
    		'description'           => __( 'Liste de recettes', 'text_domain' ),
    		'labels'                => $labels,
    		'supports'              => array( 'title', 'editor', 'thumbnail' ),
    		'taxonomies'            => array( 'category', 'post_tag' ),
    		'hierarchical'          => false,
    		'public'                => true,
    		'show_ui'               => true,
    		'show_in_menu'          => true,
    		'menu_position'         => 5,
    		'menu_icon'             => 'dashicons-carrot',
    		'show_in_admin_bar'     => true,
    		'show_in_nav_menus'     => true,
    		'can_export'            => true,
    		'has_archive'           => true,
    		'exclude_from_search'   => false,
    		'publicly_queryable'    => true,
    		'capability_type'       => 'page',
    	);
    	register_post_type( 'recette', $args );

    }
    add_action( 'init', 'create_cpt_recipe', 0 );

    // Ajout du CPT Crédit
    function create_cpt_credit() {

    	$labels = array(
    		'name'                  => _x( 'Crédits', 'Post Type General Name', 'text_domain' ),
    		'singular_name'         => _x( 'Crédit', 'Post Type Singular Name', 'text_domain' ),
    		'menu_name'             => __( 'Crédit', 'text_domain' ),
    		'name_admin_bar'        => __( 'Crédits', 'text_domain' ),
    		'archives'              => __( 'Item Archives', 'text_domain' ),
    		'attributes'            => __( 'Item Attributes', 'text_domain' ),
    		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
    		'all_items'             => __( 'Tous les crédits', 'text_domain' ),
    		'add_new_item'          => __( 'Ajouter un crédit', 'text_domain' ),
    		'add_new'               => __( 'Ajouter un crédit', 'text_domain' ),
    		'new_item'              => __( 'Nouveau crédit', 'text_domain' ),
    		'edit_item'             => __( 'Modifier le crédit', 'text_domain' ),
    		'update_item'           => __( 'Update Item', 'text_domain' ),
    		'view_item'             => __( 'View Item', 'text_domain' ),
    		'view_items'            => __( 'View Items', 'text_domain' ),
    		'search_items'          => __( 'Search Item', 'text_domain' ),
    		'not_found'             => __( 'Not found', 'text_domain' ),
    		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
    		'featured_image'        => __( 'Featured Image', 'text_domain' ),
    		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
    		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
    		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
    		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
    		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
    		'items_list'            => __( 'Items list', 'text_domain' ),
    		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
    		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
    	);
    	$args = array(
    		'label'                 => __( 'Crédit', 'text_domain' ),
    		'description'           => __( 'Post Type Description', 'text_domain' ),
    		'labels'                => $labels,
    		'supports'              => array( 'title', 'editor' ),
    		'taxonomies'            => array( 'category', 'post_tag' ),
    		'hierarchical'          => false,
    		'public'                => true,
    		'show_ui'               => true,
    		'show_in_menu'          => true,
    		'menu_position'         => 5,
    		'menu_icon'             => 'dashicons-businessperson',
    		'show_in_admin_bar'     => true,
    		'show_in_nav_menus'     => true,
    		'can_export'            => true,
    		'has_archive'           => true,
    		'exclude_from_search'   => false,
    		'publicly_queryable'    => true,
    		'capability_type'       => 'page',
    	);
    	register_post_type( 'credit', $args );

    }
    add_action( 'init', 'create_cpt_credit', 0 );

    // Ajouter une page d'options 
    if(function_exists('acf_add_options_page'))
    {
        acf_add_options_page(array(
            'page_title' => 'Options générales',
            'menu_title' => 'Options générales',
            'menu_slug' => 'theme-options-generales',
            'capability' => 'edit_posts',
            'redirect' => false,
        ));
    }