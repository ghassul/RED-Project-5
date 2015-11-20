<?php
/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>

	<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header" role="banner">

				<div class="branding_container">
					<div class="site-branding container">

						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
							<img src="<?php echo get_template_directory_uri() . "/assets/images/lrb-logo.svg"?>" class="header_logo" alt="le red bread logo">
						</a>

						<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>

						<div class="social_logos">
							<ul>
								<li>
									<i class="fa fa-facebook"></i>
								</li>
								<li>
									<i class="fa fa-twitter"></i>
								</li>
								<li>
									<i class="fa fa-google-plus"></i>
								</li>
								<li>
									<i class="fa fa-envelope"></i>
								</li>
							</ul>

						</div>
					</div>
				</div><!-- .site-branding -->

				<div class="nav_bar">
					<div class="nav_container container">

						<nav id="site-navigation" class="main-navigation" role="navigation">
							<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html( 'Primary Menu' ); ?></button>
							<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
						</nav><!-- #site-navigation -->

						<div class="nav_search">
							<?php get_search_form(); ?>
						</div>

					</div>
				</div>
			</header><!-- #masthead -->

			<div id="content" class="site-content">