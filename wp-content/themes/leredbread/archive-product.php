<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <?php if ( have_posts() ) : ?>

            <div class="product-archive container">
                <header class="page-header">

                    <h1 class="page-title">Our products are made fresh daily</h1>
                    <p class="page-subtitle">We are a team of talented and creative individuals who love making delicious treats.</p>

                    <hr class="decorative">

                    <div class="product-types">
                        <?php
                        $terms = get_terms("product-type");
                        if ($terms) {?>

                            <?php foreach($terms as $term) { ?>
                                <div class="product-type-block">
                                <a href="<?php echo get_term_link( $term ); ?>">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/<?php echo $term->slug ?>.png"
                                         alt="<?php echo $term->slug ?>">
                                    <h3><?php echo $term->name ?></h3>
                                </a>
                                </div><?php
                            }
                        } ?>
                    </div>

                </header><!-- .page-header -->

                <div class="grid">
                    <?php /* Start the Loop */ ?>
                    <?php while ( have_posts() ) : the_post(); ?>

                        <div class="grid-item">
                            <?php if ( has_post_thumbnail() ) : ?>
                                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                                    <?php the_post_thumbnail( 'medium' ); ?>
                                </a>
                            <?php endif; ?>

                            <div class="item-info">
                                <?php the_title( '<span class="entry-title">', '</span>' ); ?>
                                <span class="filler">............................</span>
                                <span class="price"><?php echo esc_html( CFS()->get( 'price' ) ); ?></span>
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

<?php get_footer(); ?>

