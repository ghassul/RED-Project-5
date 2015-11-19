<?php
/**
 * The template for displaying all taxonomies.
 *
 * @package RED_Starter_Theme
 */
get_header(); ?>


<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <?php if ( have_posts() ) : ?>

            <div class="filtered-product-archive">
                <header class="page-header">

                    <h1><?php echo get_the_archive_title(); ?></h1>
                    <p><?php echo get_the_archive_description(); ?></p>

                </header><!-- .page-header -->

                <div class="products">
                    <?php /* Start the Loop */ ?>
                    <?php while ( have_posts() ) : the_post(); ?>

                        <div class="product">
                            <?php if ( has_post_thumbnail() ) : ?>
                                <?php the_post_thumbnail( 'thumbnail' ); ?>
                            <?php endif; ?>

                            <div class="item-info">
                                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                <p><?php the_content(); ?></p>

                                <p class="price">Price: <?php echo esc_html( CFS()->get( 'price' ) ); ?></p>
                            </div>
                        </div>


                    <?php endwhile; ?>

                    <?php the_posts_navigation(); ?>

                </div>
            </div>

        <?php else : ?>

            <?php get_template_part( 'template-parts/content', 'none' ); ?>

        <?php endif; ?>

    </main><!-- #main -->
</div><!-- #primary -->

<?php get_sidebar() ?>
<?php get_footer(); ?>

