<?php
/**
 * The front page template file.
 *
 * @package RED_Starter_Theme
 */
get_header(); ?>

<div class="front-page">

    <section class="banner">
        <h1 class="banner-text container">Baked to Perfection.</h1>
    </section>

    <section class="product-information container">

        <?php
        $product_type_terms = get_terms("product-type");
        if ($product_type_terms): ?>
            <ul class="product-type">
            <?php foreach($product_type_terms as $product): ?>
                <li class="product">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/<?php echo $product->slug ?>.png"
                         alt="<?php echo $product->slug ?>">
                    <h3><?php echo $product->name ?></h3>
                    <p><?php echo $product->description;?>
                        <a href="<?php echo get_term_link( $product ); ?>">See More...</a>
                    </p>
                </li>
                <?php endforeach; ?>
        <?php endif; ?>
    </section>

    <section class="click-me-area container">
        <div class="click-me-div">

            <p>All our products are made fresh daily from locally-sourced ingredients. Our menu is updated frequently.</p>
            <a href="<?php echo site_url(); ?>/products/" class="click-me-please">See Our Products</a>

        </div>
    </section>

    <section class="latest-news">
        <div class="container">
            <h2 class="news-heading">Our Latest News</h2>
            <hr class="decorative">
            <ul class="news-container">
                <?php

                $args = array( 'posts_per_page' => 4);

                $myposts = get_posts( $args );
                foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
                    <li class="news">
                        <div class="thumbnail-wrapper"><?php the_post_thumbnail( 'large' ); ?></div>
                        <div class="blog-info">
                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <p><?php the_date('d M Y'); ?> / <?php comments_number('0 Comments'); ?></p>
                        </div>
                    </li>
                <?php endforeach;
                wp_reset_postdata();?>

            </ul>
        </div>
    </section>
</div>

<?php get_footer(); ?>

