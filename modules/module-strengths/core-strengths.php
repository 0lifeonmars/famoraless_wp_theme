<?php
/**
 * Register a custom post type called "fortalezas".
 */
function wpdocs_codex_fortaleza_init() {
    $labels = array(
        'name'                  => _x( 'fortalezas', 'Post type general name', 'famoraless' ),
        'singular_name'         => _x( 'fortaleza', 'Post type singular name', 'famoraless' ),
        'menu_name'             => _x( 'fortalezas', 'Admin Menu text', 'famoraless' ),
        'name_admin_bar'        => _x( 'fortaleza', 'Agregar nuevo on Toolbar', 'famoraless' ),
        'add_new'               => __( 'Agregar nuevo', 'famoraless' ),
        'add_new_item'          => __( 'Agregar nuevo fortaleza', 'famoraless' ),
        'new_item'              => __( 'Nuevo fortaleza', 'famoraless' ),
        'edit_item'             => __( 'Editar fortaleza', 'famoraless' ),
        'view_item'             => __( 'Ver fortaleza', 'famoraless' ),
        'all_items'             => __( 'Todos fortalezas', 'famoraless' ),
        'search_items'          => __( 'buscar en los fortalezas', 'famoraless' ),
        'parent_item_colon'     => __( 'Parent fortalezas:', 'famoraless' ),
        'not_found'             => __( 'No se encontraron fortalezas.', 'famoraless' ),
        'not_found_in_trash'    => __( 'No se encontraron fortalezas en la basura.', 'famoraless' ),
        'featured_image'        => _x( 'fortaleza Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'famoraless' ),
        'set_featured_image'    => _x( 'Aplicar fortaleza cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'famoraless' ),
        'remove_featured_image' => _x( 'Remover fortaleza cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'famoraless' ),
        'use_featured_image'    => _x( 'Usar como imagen de portada', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'famoraless' ),
        'archives'              => _x( 'Archivos de fortaleza', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'famoraless' ),
        'insert_into_item'      => _x( 'Insertar fortaleza', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'famoraless' ),
        'uploaded_to_this_item' => _x( 'Subir esto al fortaleza', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'famoraless' ),
        'filter_items_list'     => _x( 'Filtar lista de fortalezas', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'famoraless' ),
        'items_list_navigation' => _x( 'fortalezas lista de navegacion', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'famoraless' ),
        'items_list'            => _x( 'fortalezas lista', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'famoraless' ),
    );
 
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_rest'       => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'fortaleza' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_icon'          => 'dashicons-universal-access', 
        'menu_position'      => null,
        'show_in_rest'       => true,
        'rest_base'          => 'fortalezas',
        'rest_controller_class' => 'WP_REST_Posts_Controller',
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt'),
    );
 
    register_post_type( 'fortaleza', $args );
}
 
add_action( 'init', 'wpdocs_codex_fortaleza_init' );