<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package The Five Themes
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">



<!-- END OF SANITY -->
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'thefivethemes' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
		</div><!-- .site-branding -->

		<div class="site-header-sidebar">
			
			<nav id="site-navigation" class="main-navigation" role="navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php _e( 'Primary Menu', 'thefivethemes' ); ?></button>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
			</nav><!-- #site-navigation -->

			<div class="site-about">
				<p>The Five Themes is an experimental WordPress theme foundry. It was built as part of the senior project class at the Academy of Art University. Instead of trying to build an all-in-one theme, with these five themes I try to address five niche areas in a more targetted way. <a href="/about">Learn more...</a></p>
			</div><!-- .site-about -->

			<div class="site-info">
				<div class="site-info-cms">
					<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'thefivethemes' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'thefivethemes' ), 'WordPress' ); ?></a>
				</div>
				<div class="site-info-credits">
					The Five Themes is licensed under the Open Source GPLv2 License, and <a href="https://github.com/thefivethemes" rel="repository">available on GitHub</a>. <br />Created by <a href="http://hugobaeta.com" rel="designer">Hugo Baeta</a>
				</div>
			</div><!-- .site-info -->

		</div><!-- .site-header-sidebar -->

	</header><!-- #masthead -->

	<div id="content" class="site-content">
