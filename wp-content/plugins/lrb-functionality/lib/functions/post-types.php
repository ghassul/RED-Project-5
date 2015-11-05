<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

// Add your custom post types here...
// Register Custom Post Type
function lrb_product_post_type() {

    $labels = array(
        'name'                => _x( 'Products', 'Post Type General Name', 'text_domain' ),
        'singular_name'       => _x( 'Product', 'Post Type Singular Name', 'text_domain' ),
        'menu_name'           => __( 'Products', 'text_domain' ),
        'name_admin_bar'      => __( 'Products', 'text_domain' ),
        'parent_item_colon'   => __( 'Parent Product:', 'text_domain' ),
        'all_items'           => __( 'All Products', 'text_domain' ),
        'add_new_item'        => __( 'Add New Product', 'text_domain' ),
        'add_new'             => __( 'Add New', 'text_domain' ),
        'new_item'            => __( 'New Product', 'text_domain' ),
        'edit_item'           => __( 'Edit Product', 'text_domain' ),
        'update_item'         => __( 'Update Product', 'text_domain' ),
        'view_item'           => __( 'View Product', 'text_domain' ),
        'search_items'        => __( 'Search Product', 'text_domain' ),
        'not_found'           => __( 'Not found', 'text_domain' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
    );
    $args = array(
        'label'               => __( 'Product', 'text_domain' ),
        'description'         => __( 'Le Red Bread\'s products', 'text_domain' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'editor', 'author', 'thumbnail', 'revisions', ),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 5,
        'show_in_admin_bar'   => true,
        'show_in_nav_menus'   => true,
        'can_export'          => true,
        'has_archive'         => 'products',
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
    );
    register_post_type( 'product', $args );

}
add_action( 'init', 'lrb_product_post_type', 0 );