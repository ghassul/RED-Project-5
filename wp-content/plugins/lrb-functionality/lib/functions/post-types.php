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
        'name'                => _x( 'Products', 'Post Type General Name' ),
        'singular_name'       => _x( 'Product', 'Post Type Singular Name' ),
        'menu_name'           => __( 'Products' ),
        'name_admin_bar'      => __( 'Products' ),
        'parent_item_colon'   => __( 'Parent Product:' ),
        'all_items'           => __( 'All Products' ),
        'add_new_item'        => __( 'Add New Product' ),
        'add_new'             => __( 'Add New' ),
        'new_item'            => __( 'New Product' ),
        'edit_item'           => __( 'Edit Product' ),
        'update_item'         => __( 'Update Product' ),
        'view_item'           => __( 'View Product' ),
        'search_items'        => __( 'Search Product' ),
        'not_found'           => __( 'Not found' ),
        'not_found_in_trash'  => __( 'Not found in Trash' ),
    );
    $args = array(
        'label'               => __( 'Product' ),
        'description'         => __( 'Le Red Bread\'s products' ),
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
        'menu_icon'           => 'dashicons-products',
    );
    register_post_type( 'product', $args );

}

function lrb_testimonial_post_type() {

    $singular = "Testimonial";
    $multiple = "Testimonials";

    $labels = array(
        'name'                => _x( $multiple, 'Post Type General Name' ),
        'singular_name'       => _x( $singular, 'Post Type Singular Name' ),
        'menu_name'           => __( $multiple ),
        'name_admin_bar'      => __( $multiple ),
        'parent_item_colon'   => __( 'Parent '. $singular . ':' ),
        'all_items'           => __( 'All ' . $multiple ),
        'add_new_item'        => __( 'Add New ' . $singular ),
        'add_new'             => __( 'Add New' ),
        'new_item'            => __( 'New ' . $singular ),
        'edit_item'           => __( 'Edit ' . $singular ),
        'update_item'         => __( 'Update ' . $singular ),
        'view_item'           => __( 'View ' . $singular ),
        'search_items'        => __( 'Search ' . $singular ),
        'not_found'           => __( 'Not found' ),
        'not_found_in_trash'  => __( 'Not found in Trash' ),
    );
    $args = array(
        'label'               => __( $singular ),
        'description'         => __( $multiple . ' are glowing reviews from happy customers.' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'revisions', ),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 5,
        'show_in_admin_bar'   => true,
        'show_in_nav_menus'   => true,
        'can_export'          => true,
        'has_archive'         => 'testimonials',
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'menu_icon'           => 'dashicons-testimonial',
    );
    register_post_type( 'testimonial', $args );

}
add_action( 'init', 'lrb_product_post_type', 0 );
add_action( 'init', 'lrb_testimonial_post_type', 0 );
