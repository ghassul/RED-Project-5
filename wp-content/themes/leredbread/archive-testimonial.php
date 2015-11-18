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

            <div class="testimonial-archive">
                <header>
                    <h1>Testimonials</h1>
                </header>

                <section>
                    <?php /* Start the Loop */ ?>
                    <?php while ( have_posts() ) : the_post(); ?>

                        <div class="testimonial-item">

                            <div class="item-info">
                                <img src="<?php echo esc_html( CFS()->get( 'head_shot' ) ); ?>"
                                     class="head-shot" alt="<?php the_title_attribute(); ?> headshot">

                                <div class="testimonial-content">

                                    <?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
                                    <p><?php echo esc_html( CFS()->get( 'testimonial_body' ) ); ?></p>
                                    <p><?php echo esc_html( CFS()->get( 'occupation' ) ) . ' - ';
                                        echo CFS()->get( 'customer_site_link' ); ?></p>

                                </div>
                            </div>
                        </div>


                    <?php endwhile; ?>
                    <?php the_posts_navigation(); ?>
                </section>
            </div>

        <?php else : ?>

            <?php get_template_part( 'template-parts/content', 'none' ); ?>

        <?php endif; ?>


    </main><!-- #main -->
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>