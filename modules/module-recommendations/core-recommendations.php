<?php
/**
 * Register a custom post type called "recomendaciones".
 */
function wpdocs_codex_recomendacion_init() {
    $labels = array(
        'name'                  => _x( 'recomendaciones', 'Post type general name', 'famoraless' ),
        'singular_name'         => _x( 'recomendacion', 'Post type singular name', 'famoraless' ),
        'menu_name'             => _x( 'recomendaciones', 'Admin Menu text', 'famoraless' ),
        'name_admin_bar'        => _x( 'recomendacion', 'Agregar nuevo on Toolbar', 'famoraless' ),
        'add_new'               => __( 'Agregar nuevo', 'famoraless' ),
        'add_new_item'          => __( 'Agregar nuevo recomendacion', 'famoraless' ),
        'new_item'              => __( 'Nuevo recomendacion', 'famoraless' ),
        'edit_item'             => __( 'Editar recomendacion', 'famoraless' ),
        'view_item'             => __( 'Ver recomendacion', 'famoraless' ),
        'all_items'             => __( 'Todos recomendaciones', 'famoraless' ),
        'search_items'          => __( 'buscar en los recomendaciones', 'famoraless' ),
        'parent_item_colon'     => __( 'Parent recomendaciones:', 'famoraless' ),
        'not_found'             => __( 'No se encontraron recomendaciones.', 'famoraless' ),
        'not_found_in_trash'    => __( 'No se encontraron recomendaciones en la basura.', 'famoraless' ),
        'featured_image'        => _x( 'recomendacion Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'famoraless' ),
        'set_featured_image'    => _x( 'Aplicar recomendacion cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'famoraless' ),
        'remove_featured_image' => _x( 'Remover recomendacion cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'famoraless' ),
        'use_featured_image'    => _x( 'Usar como imagen de portada', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'famoraless' ),
        'archives'              => _x( 'Archivos de recomendacion', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'famoraless' ),
        'insert_into_item'      => _x( 'Insertar recomendacion', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'famoraless' ),
        'uploaded_to_this_item' => _x( 'Subir esto al recomendacion', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'famoraless' ),
        'filter_items_list'     => _x( 'Filtar lista de recomendaciones', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'famoraless' ),
        'items_list_navigation' => _x( 'recomendaciones lista de navegacion', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'famoraless' ),
        'items_list'            => _x( 'recomendaciones lista', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'famoraless' ),
    );
 
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_rest'       => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'recomendacion' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_icon'          => 'dashicons-format-quote', 
        'menu_position'      => null,
        'show_in_rest'       => true,
        'rest_base'          => 'recomendaciones',
        'rest_controller_class' => 'WP_REST_Posts_Controller',
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt'),
    );
 
    register_post_type( 'recomendacion', $args );
}
 
add_action( 'init', 'wpdocs_codex_recomendacion_init' );