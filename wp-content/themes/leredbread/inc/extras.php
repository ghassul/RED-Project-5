<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'red_starter_body_classes' );

// CUSTOM ADMIN LOGIN HEADER LOGO
function my_custom_login_logo() {
    echo '<style type="text/css">
        .login h1 a { background-image:url('.get_template_directory_uri().'/assets/images/lrb-logo.svg);
		              background-size:269px 62px;
					  width:269px;
					  height:62px; }
    </style>';
}

add_action('login_head', 'my_custom_login_logo');

function leredbread_logo_url(){
    return home_url();

}

add_filter('login_headerurl', 'leredbread_logo_url');


function leredbread_login_title(){
    return "Le Red Bread";
}

add_filter('login_headertitle', 'leredbread_login_title');


/**
 * Filter the Product post type archive.
 */
function lrb_modify_archive_queries( $query ) {
    if ( is_post_type_archive( array( 'product' ) ) && !is_admin() && $query->is_main_query() ) {
        $query->set( 'orderby', 'title' );
        $query->set( 'order', 'ASC' );
        $query->set( 'posts_per_page', 12 );
    } elseif ( $query->is_tax( 'product-type' ) && !is_admin() && $query->is_main_query() ) {
        $query->set( 'orderby', 'title' );
        $query->set( 'order', 'ASC' );
    } elseif ( is_post_type_archive( array( 'testimonial' ) ) && !is_admin() && $query->is_main_query() ) {
        $query->set( 'orderby', 'title' );
        $query->set( 'order', 'ASC' );
    }
}
add_action( 'pre_get_posts', 'lrb_modify_archive_queries' );