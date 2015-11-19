<?php
/**
 * Template Name: About Page
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <div class="about-page container">
            <header class="about-header">

                <h1><?php echo esc_html( CFS()->get( 'title' ) ); ?></h1>
                <p><?php echo esc_html( CFS()->get( 'tag_line' ) ); ?></p>

            </header>

            <hr class="decorative">

            <div class="blurbs">
                <div class="blurb">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/team.jpg" alt="">

                    <h3 class="blurb-title">Le Red Bread Team</h3>
                    <p class="blurb-subtitle">Baking up a storm every day.</p>

                    <p><?php echo esc_html( CFS()->get( 'blurb_1' ) ); ?></p>
                </div>

                <div class="blurb">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/bakery.jpg" alt="">

                    <h3 class="blurb-title">Le Red Bread Bakery</h3>
                    <p class="blurb-subtitle">A home away from home.</p>

                    <p><?php echo esc_html( CFS()->get( 'blurb_2' ) ); ?></p>
                </div>
            </div>

            <div class="our-story">
                <h2>Our Story</h2>
                <?php echo CFS()->get( 'our_story' ); ?>
            </div>

            <section class="click-me-area container">
                <div class="click-me-div">

                    <p>Feel free to contact us with any questions coments or suggestions. We even take custom orders!</p>
                    <a href="<?php echo site_url(); ?>/products/" class="click-me-please">Contact Us</a>

                </div>
            </section>
        </div>
    </main><!-- #main -->
</div><!-- #primary -->


<?php get_footer(); ?>
